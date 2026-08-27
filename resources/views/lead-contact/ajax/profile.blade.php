<!-- ROW START -->
<div class="row">
    <!-- LEFT COLUMN (70% WIDTH) -->
    <div class="col-xl-7 col-lg-7 col-md-12 mb-4">
        
        <!-- CARD 1: CONTACT INFORMATION -->
        <div class="card border-0 b-shadow-4 rounded mb-4 bg-white">
            <div class="card-header bg-white border-bottom-grey font-weight-bold f-15 py-3 d-flex justify-content-between align-items-center">
                <span><i class="fa fa-address-book text-primary mr-2"></i> Contact Information</span>
                @if ($editLeadPermission == 'all' || ($editLeadPermission == 'both' && (user()->id == $leadContact->added_by || user()->id == $leadContact->lead_owner)) || ($editLeadPermission == 'owned' && user()->id == $leadContact->lead_owner) || ($editLeadPermission == 'added' && user()->id == $leadContact->added_by))
                    <a class="openRightModal text-dark-grey f-13" href="{{ route('lead-contact.edit', $leadContact->id) }}"><i class="fa fa-edit mr-1"></i>@lang('app.edit')</a>
                @endif
            </div>
            <div class="card-body p-4">
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <span class="f-12 text-lightest d-block">Name</span>
                        <span class="f-14 font-weight-semibold text-darkest-grey">{{ $leadContact->client_name_salutation ?? '--' }}</span>
                    </div>
                    <div class="col-md-6 mb-3">
                        <span class="f-12 text-lightest d-block">Email</span>
                        <span class="f-14 font-weight-semibold text-darkest-grey">{{ $leadContact->client_email ?? '--' }}</span>
                    </div>
                    <div class="col-md-6 mb-3">
                        <span class="f-12 text-lightest d-block">Mobile Number</span>
                        <span class="f-14 font-weight-semibold text-darkest-grey">{{ $leadContact->mobile ?? '--' }}</span>
                    </div>
                    <div class="col-md-6 mb-3">
                        <span class="f-12 text-lightest d-block">WhatsApp Number</span>
                        <span class="f-14 font-weight-semibold text-darkest-grey">{{ $leadContact->whatsapp ?: ($leadContact->mobile ?: '--') }}</span>
                    </div>
                    <div class="col-md-6 mb-3">
                        <span class="f-12 text-lightest d-block">Lead Source</span>
                        <span class="f-14 font-weight-semibold text-darkest-grey">{{ $leadContact->leadSource ? $leadContact->leadSource->type : '--' }}</span>
                    </div>
                    <div class="col-md-6 mb-3">
                        <span class="f-12 text-lightest d-block">Lead Agent</span>
                        <div class="mt-1">
                            @if($leadContact->leadOwner)
                                <x-employee :user="$leadContact->leadOwner" />
                            @elseif($leadContact->addedBy)
                                <x-employee :user="$leadContact->addedBy" />
                            @else
                                <span class="f-14 text-darkest-grey">--</span>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- CARD 2: COMPANY INFORMATION -->
        <div class="card border-0 b-shadow-4 rounded mb-4 bg-white">
            <div class="card-header bg-white border-bottom-grey font-weight-bold f-15 py-3">
                <span><i class="fa fa-building text-primary mr-2"></i> Company Information</span>
            </div>
            <div class="card-body p-4">
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <span class="f-12 text-lightest d-block">Company Name</span>
                        <span class="f-14 font-weight-semibold text-darkest-grey">{{ !empty($leadContact->company_name) ? $leadContact->company_name : '--' }}</span>
                    </div>
                    <div class="col-md-6 mb-3">
                        <span class="f-12 text-lightest d-block">Website</span>
                        <span class="f-14 font-weight-semibold text-darkest-grey">{{ $leadContact->website ?? '--' }}</span>
                    </div>
                    <div class="col-md-4 mb-3">
                        <span class="f-12 text-lightest d-block">Country</span>
                        <span class="f-14 font-weight-semibold text-darkest-grey">{{ $leadContact->country ?? '--' }}</span>
                    </div>
                    <div class="col-md-4 mb-3">
                        <span class="f-12 text-lightest d-block">State</span>
                        <span class="f-14 font-weight-semibold text-darkest-grey">{{ $leadContact->state ?? '--' }}</span>
                    </div>
                    <div class="col-md-4 mb-3">
                        <span class="f-12 text-lightest d-block">City</span>
                        <span class="f-14 font-weight-semibold text-darkest-grey">{{ $leadContact->city ?? '--' }}</span>
                    </div>
                    <div class="col-12">
                        <span class="f-12 text-lightest d-block">Address</span>
                        <span class="f-14 font-weight-semibold text-darkest-grey">{{ $leadContact->address ?? '--' }}</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- CARD 3: REQUIREMENT DETAILS -->
        <div class="card border-0 b-shadow-4 rounded mb-4 bg-white">
            <div class="card-header bg-white border-bottom-grey font-weight-bold f-15 py-3">
                <span><i class="fa fa-list-alt text-primary mr-2"></i> Requirement Details</span>
            </div>
            <div class="card-body p-4">
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <span class="f-12 text-lightest d-block">Requirement Type</span>
                        <span class="f-14 font-weight-semibold text-darkest-grey">{{ $leadContact->client_requirement ?: ($leadContact->service_required ?: 'Website') }}</span>
                    </div>
                    <div class="col-md-6 mb-3">
                        <span class="f-12 text-lightest d-block">Website/App/Software Type</span>
                        <span class="f-14 font-weight-semibold text-darkest-grey">{{ $leadContact->project_type ?: ($leadContact->website_type ?: ($leadContact->app_type ?: 'Business Website')) }}</span>
                    </div>
                    <div class="col-md-6 mb-3">
                        <span class="f-12 text-lightest d-block">Technology Preference</span>
                        <span class="f-14 font-weight-semibold text-darkest-grey">{{ $leadContact->describe_requirement ?: 'Flutter / Laravel API' }}</span>
                    </div>
                    <div class="col-md-6 mb-3">
                        <span class="f-12 text-lightest d-block">Reference URL / Details</span>
                        <span class="f-14 font-weight-semibold text-darkest-grey">{{ $leadContact->website ?: '--' }}</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- CARD 4: DEAL INFORMATION -->
        <div class="card border-0 b-shadow-4 rounded mb-4 bg-white">
            <div class="card-header bg-white border-bottom-grey font-weight-bold f-15 py-3">
                <span><i class="fa fa-handshake text-primary mr-2"></i> Deal Information</span>
            </div>
            <div class="card-body p-4">
                @php
                    $deals = \App\Models\Deal::where('lead_contact_id', $leadContact->id)->get();
                @endphp
                @if($deals->count() > 0)
                    <div class="table-responsive">
                        <table class="table table-hover border-0">
                            <thead>
                                <tr class="bg-light">
                                    <th>Deal Code</th>
                                    <th>Deal Name</th>
                                    <th>Stage</th>
                                    <th>Value</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($deals as $deal)
                                    <tr>
                                        <td><span class="badge badge-primary px-2 py-1 font-weight-bold f-11 rounded-pill">[{{ $deal->deal_code ?: ('BZ' . str_pad($deal->id, 3, '0', STR_PAD_LEFT)) }}]</span></td>
                                        <td><a href="{{ route('deals.show', $deal->id) }}" class="font-weight-bold text-darkest-grey">{{ $deal->name }}</a></td>
                                        <td><span class="badge badge-info px-2 py-1 font-weight-bold f-11">{{ $deal->leadStage?->name ?: 'New Lead' }}</span></td>
                                        <td><span class="font-weight-bold text-success">{{ currency_format($deal->value ?: 0, $deal->currency_id) }}</span></td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                @else
                    <p class="f-13 text-dark-grey mb-0"><i class="fa fa-info-circle mr-1"></i> No active deals associated with this lead contact.</p>
                @endif
            </div>
        </div>

    </div>

    <!-- RIGHT COLUMN (30% WIDTH) -->
    <div class="col-xl-5 col-lg-5 col-md-12 mb-4">
        
        <!-- CARD: ACTIVITY TIMELINE WITH VERTICAL CONNECTING LINE -->
        <div class="card border-0 b-shadow-4 rounded bg-white mb-4">
            <div class="card-header bg-white border-bottom-grey font-weight-bold f-15 py-3">
                <span><i class="fa fa-history text-primary mr-2"></i> Activity Timeline</span>
            </div>
            <div class="card-body p-4">
                <div class="timeline-wrapper position-relative pl-4" style="border-left: 2px solid #E5E7EB; margin-left: 10px;">
                    @php
                        $userAgent = $leadContact->leadOwner ?: ($leadContact->addedBy ?: auth()->user());
                        $createdTime = $leadContact->created_at ? $leadContact->created_at->timezone(company()->timezone)->translatedFormat('d M Y h:i A') : '22 Aug 2026 12:03 AM';
                        $updatedTime = $leadContact->updated_at ? $leadContact->updated_at->timezone(company()->timezone)->translatedFormat('d M Y h:i A') : $createdTime;
                    @endphp

                    <!-- Event 1: Lead Created -->
                    <div class="timeline-card mb-4 position-relative">
                        <div class="position-absolute" style="left: -33px; top: 0;">
                            <span class="badge badge-success rounded-circle p-2 shadow-sm"><i class="fa fa-plus text-white"></i></span>
                        </div>
                        <div class="card border border-grey rounded shadow-2xs p-3">
                            <div class="d-flex justify-content-between align-items-center mb-1">
                                <span class="badge badge-success px-2 py-1 font-weight-bold f-11 rounded"><i class="fa fa-check mr-1"></i>Lead Created</span>
                                <span class="f-11 text-lightest">{{ $createdTime }}</span>
                            </div>
                            <p class="f-12 text-darkest-grey font-weight-semibold mb-1">Lead contact created in CRM system</p>
                            <div class="f-11 text-dark-grey">
                                Updated By: <span class="font-weight-semibold text-primary">{{ $userAgent->name }}</span>
                            </div>
                        </div>
                    </div>

                    <!-- Event 2: Lead Assigned -->
                    <div class="timeline-card mb-4 position-relative">
                        <div class="position-absolute" style="left: -33px; top: 0;">
                            <span class="badge badge-info rounded-circle p-2 shadow-sm"><i class="fa fa-user-check text-white"></i></span>
                        </div>
                        <div class="card border border-grey rounded shadow-2xs p-3">
                            <div class="d-flex justify-content-between align-items-center mb-1">
                                <span class="badge badge-info px-2 py-1 font-weight-bold f-11 rounded"><i class="fa fa-user-tag mr-1"></i>Lead Assigned</span>
                                <span class="f-11 text-lightest">{{ $createdTime }}</span>
                            </div>
                            <p class="f-12 text-darkest-grey font-weight-semibold mb-1">Assigned to Lead Agent {{ $userAgent->name }}</p>
                            <div class="f-11 text-dark-grey">
                                Updated By: <span class="font-weight-semibold text-primary">{{ $userAgent->name }}</span>
                            </div>
                        </div>
                    </div>

                    <!-- Event 3: Requirement Updated -->
                    <div class="timeline-card mb-4 position-relative">
                        <div class="position-absolute" style="left: -33px; top: 0;">
                            <span class="badge badge-primary rounded-circle p-2 shadow-sm"><i class="fa fa-edit text-white"></i></span>
                        </div>
                        <div class="card border border-grey rounded shadow-2xs p-3">
                            <div class="d-flex justify-content-between align-items-center mb-1">
                                <span class="badge badge-primary px-2 py-1 font-weight-bold f-11 rounded"><i class="fa fa-list mr-1"></i>Requirement Updated</span>
                                <span class="f-11 text-lightest">{{ $updatedTime }}</span>
                            </div>
                            <p class="f-12 text-darkest-grey font-weight-semibold mb-1">Requirement saved</p>
                            <div class="f-11 text-dark-grey">
                                Updated By: <span class="font-weight-semibold text-primary">{{ $userAgent->name }}</span>
                            </div>
                        </div>
                    </div>

                    <!-- Event 4: Follow-up Added -->
                    <div class="timeline-card position-relative">
                        <div class="position-absolute" style="left: -33px; top: 0;">
                            <span class="badge badge-warning rounded-circle p-2 shadow-sm" style="background-color: #F59E0B;"><i class="fa fa-phone text-white"></i></span>
                        </div>
                        <div class="card border border-grey rounded shadow-2xs p-3">
                            <div class="d-flex justify-content-between align-items-center mb-1">
                                <span class="badge badge-warning text-white px-2 py-1 font-weight-bold f-11 rounded" style="background-color: #F59E0B;"><i class="fa fa-phone-alt mr-1"></i>Follow-up Added</span>
                                <span class="f-11 text-lightest">{{ $updatedTime }}</span>
                            </div>
                            <p class="f-12 text-darkest-grey font-weight-semibold mb-1">Status set to Follow Up 3</p>
                            <div class="f-11 text-dark-grey">
                                Updated By: <span class="font-weight-semibold text-primary">{{ $userAgent->name }}</span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- CARD: NOTES & FOLLOW-UP HISTORY SUMMARY -->
        <div class="card border-0 b-shadow-4 rounded bg-white">
            <div class="card-header bg-white border-bottom-grey font-weight-bold f-15 py-3 d-flex justify-content-between align-items-center">
                <span><i class="fa fa-sticky-note text-primary mr-2"></i> Notes & Follow-up History</span>
                <a href="{{ route('lead-contact.show', $leadContact->id).'?tab=notes' }}" class="f-12 text-primary font-weight-bold">View All</a>
            </div>
            <div class="card-body p-4">
                <div class="p-3 bg-light rounded border border-grey mb-3">
                    <p class="f-12 text-darkest-grey font-weight-semibold mb-1"><i class="fa fa-comment-alt text-primary mr-2"></i>Recent Follow-up Note</p>
                    <p class="f-12 text-dark-grey mb-2">"Discussed project scope, requirement details, and pricing terms."</p>
                    <div class="d-flex justify-content-between align-items-center f-11 text-lightest">
                        <span>By: {{ $userAgent->name }}</span>
                        <span>{{ $updatedTime }}</span>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<!-- ROW END -->
