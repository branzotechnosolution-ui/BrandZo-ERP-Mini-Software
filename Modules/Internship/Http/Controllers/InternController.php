<?php

namespace Modules\Internship\Http\Controllers;

use App\Helper\Files;
use App\Helper\Reply;
use App\Http\Controllers\AccountBaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Modules\Internship\Entities\Intern;
use Yajra\DataTables\Facades\DataTables;

class InternController extends AccountBaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->pageTitle = 'Internship Management';
        $this->activeSettingMenu = 'module_settings';
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response|\Illuminate\View\View
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            return $this->data($request);
        }

        return view('internship::index', $this->data);
    }

    /**
     * Get DataTables data for interns.
     */
    public function data(Request $request)
    {
        $interns = Intern::query();

        if ($request->filled('status') && $request->status !== 'all') {
            $interns->where('status', $request->status);
        }

        return DataTables::of($interns)
            ->addColumn('action', function ($row) {
                $action = '<div class="task_view">';
                $action .= '<a href="javascript:;" class="task_view_more d-flex align-items-center justify-content-center dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-h font-weight-bold"></i></a>';
                $action .= '<div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">';
                $action .= '<a class="dropdown-item openRightModal" href="' . route('interns.edit', [$row->id]) . '"><i class="fa fa-edit mr-2"></i> Edit Intern</a>';
                if ($row->resume) {
                    $action .= '<a class="dropdown-item" href="' . asset('user-uploads/interns/' . $row->resume) . '" target="_blank"><i class="fa fa-download mr-2"></i> Download Resume</a>';
                }
                $action .= '<a class="dropdown-item delete-table-row" href="javascript:;" data-intern-id="' . $row->id . '"><i class="fa fa-trash mr-2"></i> Delete</a>';
                $action .= '</div></div>';
                return $action;
            })
            ->editColumn('full_name', function ($row) {
                return '<div class="media align-items-center"><div class="media-body"><h5 class="mb-0 f-14 font-weight-normal">' . e($row->full_name) . '</h5></div></div>';
            })
            ->editColumn('college_name', function ($row) {
                return e($row->college_name) . ' (' . e($row->department) . ')';
            })
            ->editColumn('mentor_name', function ($row) {
                return $row->mentor_name ? e($row->mentor_name) : '<span class="text-muted">Unassigned</span>';
            })
            ->editColumn('dates', function ($row) {
                return optional($row->start_date)->format('d M Y') . ' - ' . optional($row->end_date)->format('d M Y');
            })
            ->editColumn('status', function ($row) {
                $statusClasses = [
                    'applied' => 'bg-info',
                    'ongoing' => 'bg-primary',
                    'completed' => 'bg-success',
                    'terminated' => 'bg-danger',
                ];
                $class = $statusClasses[$row->status] ?? 'bg-secondary';
                return '<span class="badge badge-pill ' . $class . ' text-white px-2 py-1">' . ucfirst($row->status) . '</span>';
            })
            ->rawColumns(['action', 'full_name', 'college_name', 'mentor_name', 'status'])
            ->make(true);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $this->pageTitle = 'Add New Intern';

        if (request()->ajax()) {
            $html = view('internship::create', $this->data)->render();
            return Reply::dataOnly(['status' => 'success', 'html' => $html, 'title' => $this->pageTitle]);
        }

        return view('internship::create', $this->data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function store(Request $request)
    {
        $request->validate([
            'full_name' => 'required|string|max:255',
            'email' => 'required|email|unique:interns,email',
            'phone' => 'required|string|max:50',
            'college_name' => 'required|string|max:255',
            'department' => 'required|string|max:255',
            'mentor_name' => 'nullable|string|max:255',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
            'status' => 'required|in:applied,ongoing,completed,terminated',
            'resume' => 'nullable|file|mimes:pdf,doc,docx|max:10240',
            'notes' => 'nullable|string',
        ]);

        $intern = new Intern();
        $intern->full_name = $request->full_name;
        $intern->email = $request->email;
        $intern->phone = $request->phone;
        $intern->college_name = $request->college_name;
        $intern->department = $request->department;
        $intern->mentor_name = $request->mentor_name;
        $intern->start_date = $request->start_date;
        $intern->end_date = $request->end_date;
        $intern->status = $request->status;
        $intern->notes = $request->notes;
        $intern->created_by = auth()->id();

        if ($request->hasFile('resume')) {
            $filename = Files::uploadLocalOrS3($request->resume, 'user-uploads/interns');
            $intern->resume = $filename;
        }

        $intern->save();

        return Reply::successWithData('Intern added successfully.', ['redirectUrl' => route('interns.index')]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $this->intern = Intern::findOrFail($id);
        $this->pageTitle = 'Edit Intern Details';

        if (request()->ajax()) {
            $html = view('internship::edit', $this->data)->render();
            return Reply::dataOnly(['status' => 'success', 'html' => $html, 'title' => $this->pageTitle]);
        }

        return view('internship::edit', $this->data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return array
     */
    public function update(Request $request, $id)
    {
        $intern = Intern::findOrFail($id);

        $request->validate([
            'full_name' => 'required|string|max:255',
            'email' => 'required|email|unique:interns,email,' . $id,
            'phone' => 'required|string|max:50',
            'college_name' => 'required|string|max:255',
            'department' => 'required|string|max:255',
            'mentor_name' => 'nullable|string|max:255',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
            'status' => 'required|in:applied,ongoing,completed,terminated',
            'resume' => 'nullable|file|mimes:pdf,doc,docx|max:10240',
            'notes' => 'nullable|string',
        ]);

        $intern->full_name = $request->full_name;
        $intern->email = $request->email;
        $intern->phone = $request->phone;
        $intern->college_name = $request->college_name;
        $intern->department = $request->department;
        $intern->mentor_name = $request->mentor_name;
        $intern->start_date = $request->start_date;
        $intern->end_date = $request->end_date;
        $intern->status = $request->status;
        $intern->notes = $request->notes;

        if ($request->hasFile('resume')) {
            if ($intern->resume) {
                Files::deleteFile($intern->resume, 'user-uploads/interns');
            }
            $filename = Files::uploadLocalOrS3($request->resume, 'user-uploads/interns');
            $intern->resume = $filename;
        }

        $intern->save();

        return Reply::successWithData('Intern details updated successfully.', ['redirectUrl' => route('interns.index')]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return array
     */
    public function destroy($id)
    {
        $intern = Intern::findOrFail($id);

        if ($intern->resume) {
            Files::deleteFile($intern->resume, 'user-uploads/interns');
        }

        $intern->delete();

        return Reply::success('Intern deleted successfully.');
    }
}
