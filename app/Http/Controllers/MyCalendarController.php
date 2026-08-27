<?php

namespace App\Http\Controllers;

use App\Models\DealFollowUp;
use App\Models\EmployeeDetails;
use App\Models\Event;
use App\Models\Holiday;
use App\Models\Leave;
use App\Models\MyCalendar;
use App\Models\Task;
use App\Models\TaskboardColumn;
use App\Models\Ticket;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class MyCalendarController extends AccountBaseController
{

    public function __construct()
    {
        parent::__construct();
        $this->pageTitle = 'app.menu.myCalendar';

        $this->middleware(function ($request, $next) {
            return $next($request);
        });
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $this->types = [
            'task' => __('app.menu.tasks'),
            'events' => __('app.menu.events'),
            'tickets' => __('app.menu.tickets'),
            'leaves' => __('app.menu.leaves'),
            'follow_ups' => __('modules.dashboard.followUps')
        ];

        $startDate = Carbon::parse(request('start'));
        $endDate = Carbon::parse(request('end'));
        $type = request()->type;

        // get calendar view current logged in user
        if ($type == null || $type == 'null' || $type == 'all') {
            $calendar_type_array = ['task', 'events', 'tickets', 'leaves', 'follow_ups'];
        } else {
            $calendar_type_array = [$type];
        }

        if (request('start') && request('end')) {
            $eventData = array();
            $companyTz = company() ? company()->timezone : config('app.timezone', 'UTC');

            // 1. Meetings / Events
            $viewEventPerm = user()->permission('view_events');
            if (!is_null($viewEventPerm) && $viewEventPerm != 'none') {
                if (in_array('events', $calendar_type_array)) {
                    $model = Event::with('attendee', 'attendee.user');

                    if ($viewEventPerm != 'all') {
                        $model->where(function ($query) {
                            $query->whereHas('attendee', function ($q) {
                                $q->where('user_id', user()->id);
                            });
                            $query->orWhere('added_by', user()->id);
                            $query->orWhere('host', user()->id);
                        });
                    }

                    $model->whereBetween('start_date_time', [$startDate->toDateString(), $endDate->toDateString()]);
                    $events = $model->get();

                    foreach ($events as $event) {
                        $eventData[] = [
                            'id' => $event->id,
                            'title' => $event->event_name,
                            'start' => $event->start_date_time,
                            'end' => $event->end_date_time,
                            'event_type' => 'event',
                            'extendedProps' => [
                                'bg_color' => $event->label_color ?: '#1d82f5',
                                'color' => '#fff',
                                'icon' => 'fa-calendar'
                            ]
                        ];
                    }
                }
            }

            // 2. Tasks
            $viewTaskPerm = user()->permission('view_tasks');
            if (!is_null($viewTaskPerm) && $viewTaskPerm != 'none') {
                if (in_array('task', $calendar_type_array)) {
                    $completedTaskColumn = TaskboardColumn::completeColumn();
                    $completedId = $completedTaskColumn ? $completedTaskColumn->id : null;

                    $tasksQuery = Task::with(['boardColumn', 'project.client']);
                    if ($completedId) {
                        $tasksQuery->where('board_column_id', '<>', $completedId);
                    }

                    if ($viewTaskPerm != 'all') {
                        $tasksQuery->where(function ($query) {
                            $query->whereHas('users', function ($q) {
                                $q->where('user_id', user()->id);
                            });
                            $query->orWhereHas('project.client', function ($q) {
                                $q->where('id', user()->id);
                            });
                            $query->orWhere('added_by', user()->id);
                        });
                    }

                    $tasksQuery->where(function ($q) use ($startDate, $endDate) {
                        $q->whereBetween(DB::raw('DATE(tasks.`due_date`)'), [$startDate->toDateString(), $endDate->toDateString()]);
                        $q->orWhereBetween(DB::raw('DATE(tasks.`start_date`)'), [$startDate->toDateString(), $endDate->toDateString()]);
                    });

                    $tasks = $tasksQuery->get();

                    foreach ($tasks as $task) {
                        $bgColor = ($task->boardColumn && $task->boardColumn->label_color) ? $task->boardColumn->label_color : '#f5c01d';
                        $eventData[] = [
                            'id' => $task->id,
                            'title' => $task->heading,
                            'start' => $task->start_date ? $task->start_date->toDateString() : ($task->due_date ? $task->due_date->toDateString() : now()->toDateString()),
                            'end' => $task->due_date ? $task->due_date->toDateString() : ($task->start_date ? $task->start_date->toDateString() : now()->toDateString()),
                            'event_type' => 'task',
                            'extendedProps' => [
                                'bg_color' => $bgColor,
                                'color' => '#fff',
                                'icon' => 'fa-list'
                            ]
                        ];
                    }
                }
            }

            // 3. Tickets / Reminders
            $viewTicketPerm = user()->permission('view_tickets');
            if (!is_null($viewTicketPerm) && $viewTicketPerm != 'none') {
                if (in_array('tickets', $calendar_type_array)) {
                    $userid = user()->id;
                    $ticketsQuery = Ticket::query();

                    if ($viewTicketPerm != 'all') {
                        $ticketsQuery->where(function ($query) use ($userid) {
                            $query->where('tickets.user_id', '=', $userid)->orWhere('agent_id', '=', $userid);
                        });
                    }

                    $ticketsQuery->whereBetween(DB::raw('DATE(tickets.`updated_at`)'), [$startDate->toDateString(), $endDate->toDateString()]);
                    $tickets = $ticketsQuery->get();

                    foreach ($tickets as $ticket) {
                        $startTime = $ticket->created_at ? $ticket->created_at->timezone($companyTz)->toDateTimeString() : now()->toDateTimeString();
                        $endTime = $startTime;

                        $eventData[] = [
                            'id' => $ticket->ticket_number ?: $ticket->id,
                            'title' => $ticket->subject,
                            'start' => $startTime,
                            'end' => $endTime,
                            'event_type' => 'ticket',
                            'extendedProps' => [
                                'bg_color' => '#1d82f5',
                                'color' => '#fff',
                                'icon' => 'fa-ticket-alt'
                            ]
                        ];
                    }
                }
            }

            // 4. Leaves
            $viewleavePerm = user()->permission('view_leave');
            if (!is_null($viewleavePerm) && $viewleavePerm != 'none') {
                if (in_array('leaves', $calendar_type_array)) {
                    $leavesQuery = Leave::join('leave_types', 'leave_types.id', 'leaves.leave_type_id')
                        ->where('leaves.status', 'approved')
                        ->select('leaves.id', 'leaves.leave_date', 'leaves.status', 'leave_types.type_name', 'leave_types.color', 'leaves.duration', 'leaves.user_id')
                        ->with('user')
                        ->whereBetween(DB::raw('DATE(leaves.`leave_date`)'), [$startDate->toDateString(), $endDate->toDateString()]);

                    if ($viewleavePerm != 'all') {
                        $leavesQuery->where('leaves.user_id', user()->id);
                    }

                    $leaves = $leavesQuery->get();

                    foreach ($leaves as $leave) {
                        if (!$leave->user) {
                            continue;
                        }
                        $duration = ($leave->duration == 'half day') ? '( ' . __('app.halfday') . ' )' : '';
                        $leaveDate = Carbon::parse($leave->leave_date)->toDateString();

                        $eventData[] = [
                            'id' => $leave->id,
                            'title' => $duration . ' ' . $leave->user->name,
                            'start' => $leaveDate,
                            'end' => $leaveDate,
                            'event_type' => 'leave',
                            'extendedProps' => [
                                'name' => 'Leave : ' . $leave->user->name,
                                'bg_color' => $leave->color ?: '#fc1850',
                                'color' => '#fff',
                                'icon' => 'fa-plane-departure'
                            ]
                        ];
                    }
                }
            }

            // 5. Follow-ups & Client Activities
            $viewDealPerm = user()->permission('view_deals');
            if (!is_null($viewDealPerm) && $viewDealPerm != 'none') {
                if (in_array('follow_ups', $calendar_type_array)) {
                    $followUpsQuery = DealFollowUp::with('lead');

                    if ($viewDealPerm != 'all') {
                        $followUpsQuery->whereHas('lead.leadAgent', function ($query) {
                            $query->where('user_id', user()->id);
                        });
                    }

                    $followUpsQuery->whereBetween(DB::raw('DATE(next_follow_up_date)'), [$startDate->toDateString(), $endDate->toDateString()]);
                    $followUps = $followUpsQuery->get();

                    foreach ($followUps as $followUp) {
                        if (!$followUp->lead) {
                            continue;
                        }
                        $followUpDate = Carbon::parse($followUp->next_follow_up_date)->timezone($companyTz)->toDateTimeString();

                        $eventData[] = [
                            'id' => $followUp->deal_id ?: $followUp->id,
                            'title' => $followUp->lead->name,
                            'start' => $followUpDate,
                            'end' => $followUpDate,
                            'event_type' => 'follow_up',
                            'extendedProps' => [
                                'bg_color' => '#1d82f5',
                                'color' => '#fff',
                                'icon' => 'fa-thumbs-up'
                            ]
                        ];
                    }
                }
            }

            return response()->json($eventData);
        }

        return view('my-calendar.index', $this->data);
    }

}

