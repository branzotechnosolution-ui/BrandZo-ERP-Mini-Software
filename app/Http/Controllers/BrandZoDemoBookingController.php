<?php

namespace App\Http\Controllers;

use App\Models\Lead;
use Illuminate\Http\Request;

class BrandZoDemoBookingController extends AccountBaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->pageTitle = 'SaaS Sales Demo Booking';
    }

    public function index()
    {
        return view('demo_booking.index', $this->data);
    }

    public function store(Request $request)
    {
        $lead = Lead::create([
            'company_name' => $request->input('company_name', 'Demo Client'),
            'client_name' => $request->input('name', 'Prospect'),
            'client_email' => $request->input('email', 'demo@brandzo.in'),
            'mobile' => $request->input('mobile', '9999999999'),
            'note' => 'Requested live BranZo Techno Solution demo',
            'company_id' => 1
        ]);

        return response()->json(['status' => 'success', 'message' => 'Demo request booked successfully!', 'lead_id' => $lead->id]);
    }
}
