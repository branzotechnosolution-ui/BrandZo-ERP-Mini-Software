@php
    $clientLead = \App\Models\Lead::where('client_id', $client->id)->orWhere('id', $client->clientDetails?->lead_id)->first();
    
    // 1. Fetch Real Database Events
    $timelineEvents = collect();

    // Notes Events
    $clientNotes = \App\Models\ClientNote::where('client_id', $client->id)->get();
    foreach ($clientNotes as $note) {
        $timelineEvents->push([
            'type' => 'note',
            'title' => 'Note Added: ' . $note->title,
            'details' => $note->details,
            'icon' => 'fa-sticky-note',
            'icon_bg' => 'bg-light-warning text-warning',
            'user' => $note->addedBy?->name ?: 'System Admin',
            'time' => $note->created_at
        ]);
    }

    // Documents Events
    $clientDocs = \App\Models\ClientDocument::where('user_id', $client->id)->get();
    foreach ($clientDocs as $doc) {
        $timelineEvents->push([
            'type' => 'document',
            'title' => 'Document Uploaded: ' . $doc->filename,
            'details' => 'Uploaded ' . $doc->name . ' (' . number_format(((int)$doc->size) / 1024, 1) . ' KB)',
            'icon' => 'fa-file-upload',
            'icon_bg' => 'bg-light-info text-info',
            'user' => $doc->addedBy?->name ?: 'System Admin',
            'time' => $doc->created_at
        ]);
    }

    // Deals / Conversion Events
    $deals = \App\Models\Deal::where(function($q) use ($client, $clientLead) {
        $q->where('client_name', 'like', '%' . $client->name . '%');
        if ($clientLead) {
            $q->orWhere('lead_contact_id', $clientLead->id);
        }
    })->get();

    foreach ($deals as $deal) {
        if ($deal->create_client == 'yes') {
            $timelineEvents->push([
                'type' => 'deal_conversion',
                'title' => 'Deal Converted to Client: ' . $deal->name,
                'details' => 'Deal #' . ($deal->deal_code ?: ('BZ' . str_pad($deal->id, 3, '0', STR_PAD_LEFT))) . ' converted with value ₹' . number_format($deal->value, 2),
                'icon' => 'fa-handshake',
                'icon_bg' => 'bg-light-success text-success',
                'user' => 'Sales Agent',
                'time' => $deal->updated_at ?: $deal->created_at
            ]);
        }
    }

    // Payments Events
    $payments = \App\Models\Payment::leftJoin('invoices', 'invoices.id', '=', 'payments.invoice_id')
        ->leftJoin('projects', 'projects.id', '=', 'payments.project_id')
        ->where('invoices.client_id', $client->id)
        ->orWhere('projects.client_id', $client->id)
        ->select('payments.*')
        ->get();

    foreach ($payments as $pay) {
        $timelineEvents->push([
            'type' => 'payment',
            'title' => 'Payment Received: ₹' . number_format($pay->amount, 2),
            'details' => 'Payment status: ' . ucfirst($pay->status) . ' via ' . ($pay->gateway ?: 'Offline Transaction'),
            'icon' => 'fa-credit-card',
            'icon_bg' => 'bg-light-primary text-primary',
            'user' => 'Finance Dept',
            'time' => $pay->paid_on ?: $pay->created_at
        ]);
    }

    // Sort all events by timestamp descending
    $sortedEvents = $timelineEvents->sortByDesc('time');
@endphp

<div class="row w-100 mx-0">
    <div class="col-md-12 px-0">
        <div class="card border-0 b-shadow-4 rounded-lg bg-white mb-4 w-100">
            <div class="card-header bg-white border-bottom-grey py-3 px-4 d-flex justify-content-between align-items-center">
                <h4 class="f-15 font-weight-bold text-darkest-grey mb-0">
                    <i class="fa fa-comments text-primary mr-2"></i>Real Communication & Activity History
                </h4>
            </div>
            <div class="card-body p-4">
                @if($sortedEvents->count() > 0)
                    <div class="timeline">
                        @foreach($sortedEvents as $ev)
                            <div class="d-flex align-items-start mb-4 border-bottom pb-3">
                                <div class="p-2 rounded-circle {{ $ev['icon_bg'] }} mr-3 font-weight-bold f-14 text-center" style="width:38px; height:38px;">
                                    <i class="fa {{ $ev['icon'] }}"></i>
                                </div>
                                <div class="flex-grow-1">
                                    <div class="d-flex justify-content-between align-items-center mb-1">
                                        <h5 class="f-14 font-weight-bold text-darkest-grey mb-0">{{ $ev['title'] }}</h5>
                                        <span class="f-11 text-lightest-grey"><i class="fa fa-clock mr-1"></i>{{ $ev['time'] ? \Carbon\Carbon::parse($ev['time'])->format('d M Y, h:i A') : 'N/A' }}</span>
                                    </div>
                                    <p class="f-12 text-dark-grey mb-1">{{ $ev['details'] }}</p>
                                    <span class="f-11 text-muted"><i class="fa fa-user mr-1"></i>By: {{ $ev['user'] }}</span>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @else
                    <div class="text-center py-5">
                        <i class="fa fa-comments text-lightest-grey f-36 mb-2"></i>
                        <p class="f-14 text-dark-grey font-weight-bold mb-1">No Communication History Recorded Yet</p>
                        <p class="f-12 text-lightest-grey mb-0">Use quick actions above (Call, WhatsApp, Email, Add Note, Upload Document) to log real client interactions.</p>
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
