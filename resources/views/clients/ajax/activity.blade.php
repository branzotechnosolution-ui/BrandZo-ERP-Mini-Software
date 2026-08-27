<div class="row w-100 mx-0">
    <div class="col-md-12 px-0">
        <div class="card border-0 b-shadow-4 rounded-lg bg-white mb-4 w-100">
            <div class="card-header bg-white border-bottom-grey py-3 px-4 d-flex justify-content-between align-items-center">
                <h4 class="f-15 font-weight-bold text-darkest-grey mb-0">
                    <i class="fa fa-history text-primary mr-2"></i>Activity Timeline
                </h4>
            </div>
            <div class="card-body p-4">
                <div class="timeline">
                    <div class="d-flex align-items-start mb-4">
                        <div class="p-2 bg-light-blue rounded-circle text-primary mr-3">
                            <i class="fa fa-user-plus f-16"></i>
                        </div>
                        <div>
                            <h5 class="f-14 font-weight-bold text-darkest-grey mb-1">Client Profile Created</h5>
                            <p class="f-12 text-dark-grey mb-1">Client account created & permanent ID assigned: <strong>{{ $client->clientDetails?->client_code ?: ('BZCL' . str_pad($client->id, 3, '0', STR_PAD_LEFT)) }}</strong></p>
                            <span class="f-11 text-lightest-grey">{{ $client->created_at ? $client->created_at->format('d M Y, h:i A') : 'N/A' }}</span>
                        </div>
                    </div>

                    @php
                        $clientLead = \App\Models\Lead::where('client_id', $client->id)->orWhere('id', $client->clientDetails?->lead_id)->first();
                        $clientDeal = \App\Models\Deal::where('client_name', 'like', '%' . $client->name . '%')->orWhere('lead_contact_id', $clientLead?->id)->first();
                    @endphp

                    @if($clientDeal)
                    <div class="d-flex align-items-start mb-4">
                        <div class="p-2 bg-light-green rounded-circle text-success mr-3">
                            <i class="fa fa-handshake f-16"></i>
                        </div>
                        <div>
                            <h5 class="f-14 font-weight-bold text-darkest-grey mb-1">Deal Converted to Client</h5>
                            <p class="f-12 text-dark-grey mb-1">Converted from deal: <strong>{{ $clientDeal->name }}</strong> (Value: ₹{{ number_format($clientDeal->value, 2) }})</p>
                            <span class="f-11 text-lightest-grey">{{ $clientDeal->updated_at ? $clientDeal->updated_at->format('d M Y, h:i A') : 'N/A' }}</span>
                        </div>
                    </div>
                    @endif

                    <div class="d-flex align-items-start mb-4">
                        <div class="p-2 bg-light-warning rounded-circle text-warning mr-3">
                            <i class="fa fa-shield-alt f-16"></i>
                        </div>
                        <div>
                            <h5 class="f-14 font-weight-bold text-darkest-grey mb-1">Role & Permissions Assigned</h5>
                            <p class="f-12 text-dark-grey mb-1">Assigned Client Role & access permissions for BranZo Techno Solution portal.</p>
                            <span class="f-11 text-lightest-grey">{{ $client->updated_at ? $client->updated_at->format('d M Y, h:i A') : 'N/A' }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
