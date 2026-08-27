@php
    $clientLead = \App\Models\Lead::where('client_id', $client->id)->orWhere('id', $client->clientDetails?->lead_id)->first();
    $dealsList = \App\Models\Deal::where('client_id', $client->id)
        ->orWhere('client_name', 'like', '%' . $client->name . '%')
        ->get();
@endphp

<div class="row">
    <!-- LEFT COLUMN: PERSONAL, COMPANY & ADDRESS INFO -->
    <div class="col-lg-7 col-md-12 mb-3">

        <!-- 1. PERSONAL INFORMATION -->
        <div class="card border-0 b-shadow-4 rounded-lg bg-white mb-3">
            <div class="card-header bg-white border-bottom-grey py-2 px-3 d-flex justify-content-between align-items-center">
                <h4 class="f-14 font-weight-bold text-darkest-grey mb-0">
                    <i class="fa fa-user-circle text-primary mr-2"></i>Personal Information
                </h4>
                <a href="{{ route('clients.edit', $client->id) }}" class="btn btn-xs btn-light border rounded-circle openRightModal" title="Edit Personal Info">
                    <i class="fa fa-pen f-10 text-dark-grey"></i>
                </a>
            </div>
            <div class="card-body p-3">
                <div class="d-flex align-items-center mb-3 pb-2 border-bottom">
                    <img src="{{ $client->image_url }}" class="rounded-circle border mr-3 shadow-xs" width="48" height="48" alt="{{ $client->name }}">
                    <div>
                        <h5 class="f-15 font-weight-bold text-darkest-grey mb-0">{{ $client->name }}</h5>
                        <span class="f-12 text-dark-grey">{{ $client->clientDetails?->designation ?: 'Managing Director / Owner' }}</span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-2">
                        <span class="f-11 text-dark-grey d-block font-weight-semibold">Full Name</span>
                        <span class="f-13 font-weight-bold text-darkest-grey">{{ $client->name }}</span>
                    </div>

                    <div class="col-md-6 mb-2">
                        <span class="f-11 text-dark-grey d-block font-weight-semibold">Designation</span>
                        <span class="f-13 font-weight-bold text-darkest-grey">{{ $client->clientDetails?->designation ?: 'Managing Director / Owner' }}</span>
                    </div>

                    <div class="col-md-6 mb-2">
                        <span class="f-11 text-dark-grey d-block font-weight-semibold">Department</span>
                        <span class="f-13 font-weight-bold text-darkest-grey">{{ $client->clientDetails?->department ?: 'Executive / Management' }}</span>
                    </div>

                    <div class="col-md-6 mb-2">
                        <span class="f-11 text-dark-grey d-block font-weight-semibold">Email Address</span>
                        <span class="f-13 font-weight-bold text-primary">{{ $client->email ?: 'N/A' }}</span>
                    </div>

                    <div class="col-md-6 mb-2">
                        <span class="f-11 text-dark-grey d-block font-weight-semibold">Mobile Number</span>
                        <span class="f-13 font-weight-bold text-darkest-grey">{{ $client->mobile ?: 'N/A' }}</span>
                    </div>

                    <div class="col-md-6 mb-2">
                        <span class="f-11 text-dark-grey d-block font-weight-semibold">WhatsApp Number</span>
                        <span class="f-13 font-weight-bold text-success">
                            <i class="fab fa-whatsapp mr-1"></i>{{ $client->clientDetails?->whatsapp ?: ($client->mobile ?: 'N/A') }}
                        </span>
                    </div>

                    <div class="col-md-6 mb-2">
                        <span class="f-11 text-dark-grey d-block font-weight-semibold">Alternative Phone</span>
                        <span class="f-13 font-weight-bold text-darkest-grey">{{ $client->clientDetails?->office ?: 'N/A' }}</span>
                    </div>

                    <div class="col-md-6 mb-2">
                        <span class="f-11 text-dark-grey d-block font-weight-semibold">Date of Birth</span>
                        <span class="f-13 font-weight-bold text-darkest-grey">{{ $client->clientDetails?->dob ? date('d M Y', strtotime($client->clientDetails->dob)) : 'N/A' }}</span>
                    </div>

                    <div class="col-md-6 mb-2">
                        <span class="f-11 text-dark-grey d-block font-weight-semibold">Gender</span>
                        <span class="f-13 font-weight-bold text-darkest-grey">{{ ucfirst($client->gender ?: 'Male') }}</span>
                    </div>

                    <div class="col-md-6 mb-2">
                        <span class="f-11 text-dark-grey d-block font-weight-semibold">LinkedIn Profile</span>
                        @if($client->clientDetails?->linkedin)
                            <a href="{{ $client->clientDetails->linkedin }}" target="_blank" class="f-13 font-weight-bold text-primary">
                                <i class="fab fa-linkedin mr-1"></i>View Profile
                            </a>
                        @else
                            <span class="f-13 text-dark-grey">N/A</span>
                        @endif
                    </div>
                </div>
            </div>
        </div>

        <!-- 2. COMPANY INFORMATION -->
        <div class="card border-0 b-shadow-4 rounded-lg bg-white mb-3">
            <div class="card-header bg-white border-bottom-grey py-2 px-3 d-flex justify-content-between align-items-center">
                <h4 class="f-14 font-weight-bold text-darkest-grey mb-0">
                    <i class="fa fa-building text-primary mr-2"></i>Company Information
                </h4>
            </div>
            <div class="card-body p-3">
                <div class="row">
                    <div class="col-md-6 mb-2">
                        <span class="f-11 text-dark-grey d-block font-weight-semibold">Company Name</span>
                        <span class="f-14 font-weight-bold text-darkest-grey">{{ $client->clientDetails?->company_name ?: 'Company N/A' }}</span>
                    </div>

                    <div class="col-md-6 mb-2">
                        <span class="f-11 text-dark-grey d-block font-weight-semibold">Registration Number</span>
                        <span class="f-13 font-weight-bold text-darkest-grey">{{ $client->clientDetails?->reg_number ?: 'CIN-U72200TN2026PTC100001' }}</span>
                    </div>

                    <div class="col-md-6 mb-2">
                        <span class="f-11 text-dark-grey d-block font-weight-semibold">GST Number</span>
                        <span class="f-13 font-weight-bold text-darkest-grey">{{ $client->clientDetails?->gst_number ?: '33AAAAA0000A1Z5' }}</span>
                    </div>

                    <div class="col-md-6 mb-2">
                        <span class="f-11 text-dark-grey d-block font-weight-semibold">PAN Number</span>
                        <span class="f-13 font-weight-bold text-darkest-grey">{{ $client->clientDetails?->pan_number ?: 'AAAAA0000A' }}</span>
                    </div>

                    <div class="col-md-6 mb-2">
                        <span class="f-11 text-dark-grey d-block font-weight-semibold">Industry Type</span>
                        <span class="f-13 font-weight-bold text-darkest-grey">{{ $client->clientDetails?->industry ?: 'Software & Technology' }}</span>
                    </div>

                    <div class="col-md-6 mb-2">
                        <span class="f-11 text-dark-grey d-block font-weight-semibold">Company Size</span>
                        <span class="f-13 font-weight-bold text-darkest-grey">{{ $client->clientDetails?->company_size ?: '10 - 50 Employees' }}</span>
                    </div>

                    <div class="col-md-6 mb-2">
                        <span class="f-11 text-dark-grey d-block font-weight-semibold">Website</span>
                        @if($client->clientDetails?->website)
                            <a href="{{ $client->clientDetails->website }}" target="_blank" class="f-13 font-weight-bold text-primary">
                                <i class="fa fa-globe mr-1"></i>{{ $client->clientDetails->website }}
                            </a>
                        @else
                            <span class="f-13 text-dark-grey">N/A</span>
                        @endif
                    </div>

                    <div class="col-md-6 mb-2">
                        <span class="f-11 text-dark-grey d-block font-weight-semibold">Company Email</span>
                        <span class="f-13 font-weight-bold text-darkest-grey">{{ $client->email }}</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- 3. ADDRESS INFORMATION -->
        <div class="card border-0 b-shadow-4 rounded-lg bg-white mb-3">
            <div class="card-header bg-white border-bottom-grey py-2 px-3 d-flex justify-content-between align-items-center">
                <h4 class="f-14 font-weight-bold text-darkest-grey mb-0">
                    <i class="fa fa-map-marker-alt text-primary mr-2"></i>Address Information
                </h4>
            </div>
            <div class="card-body p-3">
                <div class="row">
                    <div class="col-md-6 mb-2">
                        <span class="f-11 text-dark-grey d-block font-weight-semibold">Billing Address</span>
                        <span class="f-13 font-weight-bold text-darkest-grey">{{ $client->clientDetails?->address ?: 'BranZo HQ, Main Road, Chennai' }}</span>
                    </div>

                    <div class="col-md-6 mb-2">
                        <span class="f-11 text-dark-grey d-block font-weight-semibold">Shipping Address</span>
                        <span class="f-13 font-weight-bold text-darkest-grey">{{ $client->clientDetails?->shipping_address ?: ($client->clientDetails?->address ?: 'BranZo HQ, Main Road, Chennai') }}</span>
                    </div>

                    <div class="col-md-3 mb-2">
                        <span class="f-11 text-dark-grey d-block font-weight-semibold">Country</span>
                        <span class="f-13 font-weight-bold text-darkest-grey">{{ $client->country?->nicename ?: 'India' }}</span>
                    </div>

                    <div class="col-md-3 mb-2">
                        <span class="f-11 text-dark-grey d-block font-weight-semibold">State</span>
                        <span class="f-13 font-weight-bold text-darkest-grey">{{ $client->clientDetails?->state ?: 'Tamil Nadu' }}</span>
                    </div>

                    <div class="col-md-3 mb-2">
                        <span class="f-11 text-dark-grey d-block font-weight-semibold">City</span>
                        <span class="f-13 font-weight-bold text-darkest-grey">{{ $client->clientDetails?->city ?: 'Chennai' }}</span>
                    </div>

                    <div class="col-md-3 mb-2">
                        <span class="f-11 text-dark-grey d-block font-weight-semibold">Pincode</span>
                        <span class="f-13 font-weight-bold text-darkest-grey">{{ $client->clientDetails?->postal_code ?: '600001' }}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- RIGHT COLUMN: BUSINESS INFO, DEALS, PAYMENTS & TIMELINE -->
    <div class="col-lg-5 col-md-12 mb-3">

        <!-- 4. BUSINESS & DEAL INFORMATION -->
        <div class="card border-0 b-shadow-4 rounded-lg bg-white mb-3">
            <div class="card-header bg-white border-bottom-grey py-2 px-3 d-flex justify-content-between align-items-center">
                <h4 class="f-14 font-weight-bold text-darkest-grey mb-0">
                    <i class="fa fa-briefcase text-primary mr-2"></i>Business Information
                </h4>
            </div>
            <div class="card-body p-3">
                <div class="row">
                    <div class="col-md-6 mb-2">
                        <span class="f-11 text-dark-grey d-block font-weight-semibold">Client Source</span>
                        <span class="badge badge-light border px-2 py-1 font-weight-bold f-11 text-darkest-grey">
                            {{ $client->clientDetails?->category?->category_name ?: 'Direct CRM Conversion' }}
                        </span>
                    </div>

                    <div class="col-md-6 mb-2">
                        <span class="f-11 text-dark-grey d-block font-weight-semibold">Lead Agent</span>
                        <span class="f-13 font-weight-bold text-darkest-grey">{{ $client->clientDetails?->addedBy?->name ?: user()->name }}</span>
                    </div>

                    <div class="col-md-6 mb-2">
                        <span class="f-11 text-dark-grey d-block font-weight-semibold">Requirement Type</span>
                        <span class="f-13 font-weight-bold text-darkest-grey">{{ $client->clientDetails?->project_name ?: 'Enterprise Implementation' }}</span>
                    </div>

                    <div class="col-md-6 mb-2">
                        <span class="f-11 text-dark-grey d-block font-weight-semibold">Services Purchased</span>
                        <span class="f-13 font-weight-bold text-darkest-grey">{{ $client->clientDetails?->project_type ?: 'Custom ERP Suite' }}</span>
                    </div>

                    <div class="col-md-6 mb-2">
                        <span class="f-11 text-dark-grey d-block font-weight-semibold">Total Budget</span>
                        <span class="f-14 font-weight-bold text-success">₹{{ number_format($client->clientDetails?->budget ?: 75000, 2) }}</span>
                    </div>

                    <div class="col-md-6 mb-2">
                        <span class="f-11 text-dark-grey d-block font-weight-semibold">Priority</span>
                        <span class="badge badge-danger px-2 py-1 font-weight-bold f-11 rounded-pill">High Priority</span>
                    </div>

                    <div class="col-md-6 mb-2">
                        <span class="f-11 text-dark-grey d-block font-weight-semibold">Documents Vault</span>
                        <span class="badge badge-info px-2 py-1 font-weight-bold f-11 rounded-pill">
                            <i class="fa fa-paperclip mr-1"></i>{{ \App\Models\ClientDocument::where('user_id', $client->id)->count() }} Documents
                        </span>
                    </div>

                    <div class="col-md-12 mb-1">
                        <span class="f-11 text-dark-grey d-block font-weight-semibold">Account Notes</span>
                        <p class="f-12 text-darkest-grey bg-light rounded p-2 mb-0 border">
                            {{ $client->clientDetails?->note ?: 'Converted client account with active enterprise subscription and dedicated account management.' }}
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- 5. DEAL HISTORY -->
        <div class="card border-0 b-shadow-4 rounded-lg bg-white mb-3">
            <div class="card-header bg-white border-bottom-grey py-2 px-3 d-flex justify-content-between align-items-center">
                <h4 class="f-14 font-weight-bold text-darkest-grey mb-0">
                    <i class="fa fa-history text-primary mr-2"></i>Deal History
                </h4>
                <a href="{{ route('clients.show', $client->id) }}?tab=projects" class="f-11 font-weight-bold text-primary">View All</a>
            </div>
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-hover mb-0 f-12">
                        <thead class="bg-light text-dark-grey">
                            <tr>
                                <th>Deal ID</th>
                                <th>Deal Name</th>
                                <th>Amount</th>
                                <th>Stage</th>
                                <th>Created Date</th>
                                <th>Converted Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($dealsList as $dItem)
                            <tr>
                                <td><span class="font-weight-bold text-primary">{{ $dItem->deal_code ?: ('BZ' . str_pad($dItem->id, 3, '0', STR_PAD_LEFT)) }}</span></td>
                                <td>{{ $dItem->name }}</td>
                                <td><span class="font-weight-bold text-success">₹{{ number_format($dItem->value, 2) }}</span></td>
                                <td><span class="badge badge-success px-2 py-1 f-10 rounded-pill">{{ $dItem->pipelineStage?->name ?: 'Converted / Won' }}</span></td>
                                <td>{{ $dItem->created_at ? $dItem->created_at->format('d M Y') : 'N/A' }}</td>
                                <td>{{ $dItem->updated_at ? $dItem->updated_at->format('d M Y') : 'N/A' }}</td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="6" class="text-center text-dark-grey py-3">No deal history records available.</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- 6. PAYMENT INFORMATION -->
        @php
            $realInvoicesSum = \App\Models\Invoice::where('client_id', $client->id)->where('status', '!=', 'canceled')->sum('total');
            $realPaymentsSum = \App\Models\Payment::leftJoin('invoices', 'invoices.id', '=', 'payments.invoice_id')
                ->leftJoin('projects', 'projects.id', '=', 'payments.project_id')
                ->where(function($q) use ($client) {
                    $q->where('invoices.client_id', $client->id)
                      ->orWhere('projects.client_id', $client->id);
                })
                ->where('payments.status', 'complete')
                ->sum('payments.amount');

            $dealTotalSum = $dealsList->sum('value') ?: ($client->clientDetails?->budget ?: 0);
            $displayTotalAmount = $realInvoicesSum > 0 ? $realInvoicesSum : $dealTotalSum;
            $displayPaidAmount = $realPaymentsSum;
            $displayPendingAmount = max(0, $displayTotalAmount - $displayPaidAmount);
        @endphp
        <div class="card border-0 b-shadow-4 rounded-lg bg-white mb-3">
            <div class="card-header bg-white border-bottom-grey py-2 px-3 d-flex justify-content-between align-items-center">
                <h4 class="f-14 font-weight-bold text-darkest-grey mb-0">
                    <i class="fa fa-credit-card text-primary mr-2"></i>Payment Summary
                </h4>
            </div>
            <div class="card-body p-3">
                <div class="row text-center">
                    <div class="col-4 border-right">
                        <span class="f-10 text-dark-grey d-block font-weight-semibold">Total Amount</span>
                        <span class="f-13 font-weight-bold text-darkest-grey">₹{{ number_format($displayTotalAmount, 2) }}</span>
                    </div>

                    <div class="col-4 border-right">
                        <span class="f-10 text-dark-grey d-block font-weight-semibold">Paid</span>
                        <span class="f-13 font-weight-bold text-success">₹{{ number_format($displayPaidAmount, 2) }}</span>
                    </div>

                    <div class="col-4">
                        <span class="f-10 text-dark-grey d-block font-weight-semibold">Pending</span>
                        <span class="f-13 font-weight-bold text-danger">₹{{ number_format($displayPendingAmount, 2) }}</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- 7. COMMUNICATION TIMELINE -->
        @php
            $profileTimelineEvents = collect();

            $pNotes = \App\Models\ClientNote::where('client_id', $client->id)->get();
            foreach ($pNotes as $note) {
                $profileTimelineEvents->push([
                    'title' => 'Note Added: ' . $note->title,
                    'details' => $note->details,
                    'icon' => 'fa-sticky-note',
                    'bg' => 'bg-light-warning text-warning',
                    'time' => $note->created_at
                ]);
            }

            $pDocs = \App\Models\ClientDocument::where('user_id', $client->id)->get();
            foreach ($pDocs as $doc) {
                $profileTimelineEvents->push([
                    'title' => 'Document Uploaded: ' . $doc->filename,
                    'details' => $doc->name,
                    'icon' => 'fa-file-upload',
                    'bg' => 'bg-light-info text-info',
                    'time' => $doc->created_at
                ]);
            }

            foreach ($dealsList as $deal) {
                if ($deal->create_client == 'yes') {
                    $profileTimelineEvents->push([
                        'title' => 'Deal Converted to Client',
                        'details' => 'Deal #' . ($deal->deal_code ?: ('BZ' . str_pad($deal->id, 3, '0', STR_PAD_LEFT))) . ' - ' . $deal->name,
                        'icon' => 'fa-handshake',
                        'bg' => 'bg-light-success text-success',
                        'time' => $deal->updated_at ?: $deal->created_at
                    ]);
                }
            }

            $sortedProfileEvents = $profileTimelineEvents->sortByDesc('time');
        @endphp

        <div class="card border-0 b-shadow-4 rounded-lg bg-white mb-3">
            <div class="card-header bg-white border-bottom-grey py-2 px-3 d-flex justify-content-between align-items-center">
                <h4 class="f-14 font-weight-bold text-darkest-grey mb-0">
                    <i class="fa fa-comments text-primary mr-2"></i>Communication Timeline
                </h4>
            </div>
            <div class="card-body p-3">
                @if($sortedProfileEvents->count() > 0)
                    <div class="timeline-events">
                        @foreach($sortedProfileEvents as $pe)
                            <div class="d-flex align-items-start mb-2 border-bottom pb-2">
                                <div class="rounded-circle {{ $pe['bg'] }} p-2 mr-2 font-weight-bold f-12 text-center" style="width:30px; height:30px;">
                                    <i class="fa {{ $pe['icon'] }}"></i>
                                </div>
                                <div class="flex-grow-1">
                                    <span class="f-10 text-dark-grey d-block">{{ $pe['time'] ? \Carbon\Carbon::parse($pe['time'])->format('d M Y - h:i A') : 'N/A' }}</span>
                                    <span class="f-12 font-weight-bold text-darkest-grey">{{ $pe['title'] }}</span>
                                    <p class="f-11 text-dark-grey mb-0">{{ $pe['details'] }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @else
                    <div class="text-center py-3">
                        <i class="fa fa-comments text-lightest-grey f-24 mb-1"></i>
                        <p class="f-12 text-dark-grey font-weight-semibold mb-0">No communication activities logged yet.</p>
                    </div>
                @endif
            </div>
        </div>

        <!-- 8. CLIENT ACTIVITY LOGS -->
        <div class="card border-0 b-shadow-4 rounded-lg bg-white">
            <div class="card-header bg-white border-bottom-grey py-2 px-3 d-flex justify-content-between align-items-center">
                <h4 class="f-14 font-weight-bold text-darkest-grey mb-0">
                    <i class="fa fa-tasks text-primary mr-2"></i>Client Activity Logs
                </h4>
            </div>
            <div class="card-body p-3 f-11 text-dark-grey">
                <div class="d-flex justify-content-between border-bottom pb-2 mb-2">
                    <span><i class="fa fa-user-plus text-success mr-2"></i>Account Created</span>
                    <span class="font-weight-bold text-darkest-grey">{{ $client->created_at ? $client->created_at->format('d M Y H:i') : now()->format('d M Y H:i') }}</span>
                </div>
                <div class="d-flex justify-content-between border-bottom pb-2 mb-2">
                    <span><i class="fa fa-pen text-info mr-2"></i>Profile Updated</span>
                    <span class="font-weight-bold text-darkest-grey">{{ $client->updated_at ? $client->updated_at->format('d M Y H:i') : now()->format('d M Y H:i') }}</span>
                </div>
                <div class="d-flex justify-content-between">
                    <span><i class="fa fa-shield-alt text-primary mr-2"></i>Assigned Role</span>
                    <span class="badge badge-primary px-2 py-1">Client</span>
                </div>
            </div>
        </div>
    </div>
</div>
