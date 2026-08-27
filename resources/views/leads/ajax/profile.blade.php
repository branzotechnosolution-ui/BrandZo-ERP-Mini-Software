@php
    $dealCode = $deal->deal_code ?: ('BZ' . str_pad($deal->id, 3, '0', STR_PAD_LEFT));
    $currentStage = $deal->leadStage?->name ?: ($deal->priority ?: 'Follow Up 1');
    $clientName = $deal->client_name ?: ($deal->contact?->client_name ?? '--');
    $clientEmail = $deal->client_email ?: ($deal->contact?->client_email ?? '--');
    $mobile = $deal->mobile ?: ($deal->contact?->mobile ?? '--');
    $whatsapp = $deal->whatsapp ?: ($deal->contact?->whatsapp ?? '--');
    $companyName = $deal->company_name ?: ($deal->contact?->company_name ?? '--');
    $website = $deal->website ?: ($deal->contact?->website ?? '--');
    $address = $deal->address ?: ($deal->contact?->address ?? '--');
    $location = implode(', ', array_filter([$deal->city, $deal->state, $deal->country])) ?: '--';
    $requirementType = $deal->client_requirement ?: ($deal->contact?->client_requirement ?? '--');
    $specType = $deal->website_type ?: ($deal->app_type ?: ($deal->contact?->website_type ?? '--'));
    $describeReq = $deal->describe_requirement ?: ($deal->contact?->describe_requirement ?? '--');
    $notes = $deal->note ?: ($deal->contact?->note ?? '--');
    
    // Deal Agent full user name
    $agentName = $deal->leadAgent?->user?->name ?: ($deal->contact?->leadAgent?->user?->name ?: 'Karthik Mani');

    $sourceName = $deal->category?->category_name ?: ($deal->contact?->source?->type ?? 'Direct Lead');
    $dealSourceType = $deal->lead_contact_id ? 'Lead Converted' : 'Direct Deal';

    $statusBadgeColor = 'badge-primary';
    if ($currentStage == 'Follow Up 2') $statusBadgeColor = 'badge-warning';
    elseif ($currentStage == 'Follow Up 3') $statusBadgeColor = 'badge-info';
    elseif (in_array($currentStage, ['Won / Confirmed', 'Won', 'Confirmed'])) $statusBadgeColor = 'badge-success';
    elseif ($currentStage == 'Lost') $statusBadgeColor = 'badge-danger';

    // Fetch follow-ups sorted latest first
    $followUpsList = isset($dealFollowUps) ? $dealFollowUps : \App\Models\DealFollowUp::where('deal_id', $deal->id)->with('addedBy')->orderBy('created_at', 'desc')->get();

    // Construct Activity Timeline history array
    $activities = [];

    // 1. Lead Created
    $activities[] = [
        'icon' => 'fa-user-plus text-success',
        'badge' => 'badge-success',
        'title' => 'Lead Created',
        'description' => 'Initial lead record initialized in system.',
        'user' => $deal->contact?->addedBy?->name ?: $agentName,
        'date' => $deal->created_at ? $deal->created_at->format('d M Y h:i A') : now()->format('d M Y h:i A'),
        'timestamp' => $deal->created_at ? $deal->created_at->timestamp : 0,
    ];

    // 2. Lead Assigned
    $activities[] = [
        'icon' => 'fa-user-check text-info',
        'badge' => 'badge-info',
        'title' => 'Lead Assigned',
        'description' => 'Assigned to Deal Agent: ' . $agentName,
        'user' => $agentName,
        'date' => $deal->created_at ? $deal->created_at->format('d M Y h:i A') : now()->format('d M Y h:i A'),
        'timestamp' => $deal->created_at ? ($deal->created_at->timestamp + 10) : 10,
    ];

    // 3. Requirement Updated
    if ($describeReq && $describeReq != '--') {
        $activities[] = [
            'icon' => 'fa-cogs text-warning',
            'badge' => 'badge-warning',
            'title' => 'Requirement Updated',
            'description' => 'Requirement: ' . $requirementType . ' | Type: ' . $specType . ' | Notes: ' . \Illuminate\Support\Str::limit($describeReq, 80),
            'user' => $agentName,
            'date' => $deal->created_at ? $deal->created_at->format('d M Y h:i A') : now()->format('d M Y h:i A'),
            'timestamp' => $deal->created_at ? ($deal->created_at->timestamp + 20) : 20,
        ];
    }

    // 4. Deal Created
    $activities[] = [
        'icon' => 'fa-handshake text-primary',
        'badge' => 'badge-primary',
        'title' => 'Deal Created [' . $dealCode . ']',
        'description' => 'Lead successfully converted to active Deal profile.',
        'user' => $agentName,
        'date' => $deal->created_at ? $deal->created_at->format('d M Y h:i A') : now()->format('d M Y h:i A'),
        'timestamp' => $deal->created_at ? ($deal->created_at->timestamp + 30) : 30,
    ];

    // 5. Follow-ups & Stage Changes
    foreach ($followUpsList as $flw) {
        $activities[] = [
            'icon' => 'fa-sync-alt text-primary',
            'badge' => 'badge-primary',
            'title' => 'Follow-up Added: ' . ($flw->status ?: 'Follow Up 1'),
            'description' => $flw->remark ?: 'Follow-up discussion logged.',
            'user' => $flw->addedBy?->name ?: $agentName,
            'date' => $flw->created_at ? $flw->created_at->format('d M Y h:i A') : now()->format('d M Y h:i A'),
            'timestamp' => $flw->created_at ? $flw->created_at->timestamp : 100,
        ];
    }

    // 6. Client Converted
    if ($deal->create_client == 1 || in_array($currentStage, ['Won / Confirmed', 'Won', 'Confirmed'])) {
        $activities[] = [
            'icon' => 'fa-building text-success',
            'badge' => 'badge-success',
            'title' => 'Client Converted',
            'description' => 'Deal successfully converted to active Client 360 profile.',
            'user' => $agentName,
            'date' => $deal->updated_at ? $deal->updated_at->format('d M Y h:i A') : now()->format('d M Y h:i A'),
            'timestamp' => $deal->updated_at ? $deal->updated_at->timestamp : 999999999,
        ];
    }

    // Sort activities chronologically (latest first)
    usort($activities, fn($a, $b) => $b['timestamp'] <=> $a['timestamp']);
@endphp

<!-- 1. SMALL CURRENT STATUS CARD -->
<div class="card border-0 shadow-sm mb-4 bg-white rounded-lg p-3">
    <div class="d-flex flex-wrap justify-content-between align-items-center">
        <div>
            <h4 class="mb-1 font-weight-bold text-dark">{{ $deal->name }}</h4>
            <div class="d-flex align-items-center mt-1">
                <span class="badge badge-primary px-2 py-1 f-12 mr-2 font-weight-bold">{{ $dealCode }}</span>
                <span class="badge badge-light border text-dark px-2 py-1 f-12 mr-2">Source: {{ $dealSourceType }}</span>
                <span class="badge {{ $statusBadgeColor }} px-3 py-1 font-weight-bold f-13">Current Status: {{ $currentStage }}</span>
            </div>
        </div>
        <div class="text-right mt-2 mt-md-0">
            <div class="text-muted f-12">Last Updated: <span class="font-weight-bold text-dark">{{ $deal->updated_at ? $deal->updated_at->format('d M Y') : now()->format('d M Y') }}</span></div>
            <div class="text-muted f-12">Updated By: <span class="font-weight-bold text-dark">{{ $agentName }}</span></div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12">

        <!-- 2. LEAD / DEAL LIFECYCLE TRACKING TIMELINE -->
        <div class="card border-0 shadow-sm mb-4 rounded-lg">
            <div class="card-header bg-white border-bottom p-3 d-flex align-items-center">
                <i class="fa fa-route text-primary mr-2 f-18"></i>
                <h5 class="card-title mb-0 font-weight-bold text-dark">Lead / Deal Lifecycle Tracking</h5>
            </div>
            <div class="card-body p-3">
                <div class="d-flex flex-wrap align-items-center justify-content-around text-center py-2">
                    <div class="p-2">
                        <span class="badge badge-success rounded-circle p-2 mb-1"><i class="fa fa-check"></i></span>
                        <div class="font-weight-bold f-12 text-dark">Lead Created</div>
                        <small class="text-muted d-block">{{ $deal->created_at?->format('d M Y') }}</small>
                    </div>
                    <i class="fa fa-chevron-right text-muted f-12"></i>
                    <div class="p-2">
                        <span class="badge badge-success rounded-circle p-2 mb-1"><i class="fa fa-check"></i></span>
                        <div class="font-weight-bold f-12 text-dark">Converted to Deal</div>
                        <small class="text-muted d-block">{{ $dealSourceType }}</small>
                    </div>
                    <i class="fa fa-chevron-right text-muted f-12"></i>
                    <div class="p-2">
                        <span class="badge {{ in_array($currentStage, ['Follow Up 1', 'Follow Up 2', 'Follow Up 3', 'Won / Confirmed', 'Confirmed', 'Won']) ? 'badge-primary' : 'badge-light border' }} rounded-circle p-2 mb-1"><i class="fa fa-sync-alt"></i></span>
                        <div class="font-weight-bold f-12 text-dark">Follow Up 1</div>
                    </div>
                    <i class="fa fa-chevron-right text-muted f-12"></i>
                    <div class="p-2">
                        <span class="badge {{ in_array($currentStage, ['Follow Up 2', 'Follow Up 3', 'Won / Confirmed', 'Confirmed', 'Won']) ? 'badge-warning' : 'badge-light border' }} rounded-circle p-2 mb-1"><i class="fa fa-sync-alt"></i></span>
                        <div class="font-weight-bold f-12 text-dark">Follow Up 2</div>
                    </div>
                    <i class="fa fa-chevron-right text-muted f-12"></i>
                    <div class="p-2">
                        <span class="badge {{ in_array($currentStage, ['Follow Up 3', 'Won / Confirmed', 'Confirmed', 'Won']) ? 'badge-info' : 'badge-light border' }} rounded-circle p-2 mb-1"><i class="fa fa-sync-alt"></i></span>
                        <div class="font-weight-bold f-12 text-dark">Follow Up 3</div>
                    </div>
                    <i class="fa fa-chevron-right text-muted f-12"></i>
                    <div class="p-2">
                        <span class="badge {{ in_array($currentStage, ['Won / Confirmed', 'Won', 'Confirmed']) ? 'badge-success' : ($currentStage == 'Lost' ? 'badge-danger' : 'badge-light border') }} rounded-circle p-2 mb-1"><i class="fa fa-flag-checkered"></i></span>
                        <div class="font-weight-bold f-12 text-dark">Final Status</div>
                        <small class="text-muted d-block">{{ $currentStage }}</small>
                    </div>
                </div>
            </div>
        </div>

        <!-- 3. CUSTOMER INFORMATION CARD -->
        <div class="card border-0 shadow-sm mb-4 rounded-lg">
            <div class="card-header bg-white border-bottom p-3 d-flex align-items-center">
                <i class="fa fa-user-circle text-primary mr-2 f-18"></i>
                <h5 class="card-title mb-0 font-weight-bold text-dark">Customer Information</h5>
            </div>
            <div class="card-body p-3">
                <div class="row">
                    <div class="col-md-4 mb-3">
                        <label class="text-muted f-12 mb-0">Lead / Deal ID</label>
                        <p class="font-weight-bold text-dark mb-0"><span class="badge badge-primary px-2 py-1 f-12">{{ $dealCode }}</span></p>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label class="text-muted f-12 mb-0">Contact Person (Name)</label>
                        <p class="font-weight-bold text-dark mb-0">
                            @if($deal->contact_id)
                                <a href="{{ route('lead-contact.show', $deal->contact_id) }}" class="text-primary font-weight-bold">{{ $clientName }}</a>
                            @else
                                {{ $clientName }}
                            @endif
                        </p>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label class="text-muted f-12 mb-0">Mobile Number</label>
                        <p class="font-weight-bold text-dark mb-0"><i class="fa fa-phone text-muted mr-1"></i>{{ $mobile }}</p>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label class="text-muted f-12 mb-0">WhatsApp Number</label>
                        <p class="font-weight-bold text-dark mb-0"><i class="fa fa-whatsapp text-success mr-1"></i>{{ $whatsapp }}</p>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label class="text-muted f-12 mb-0">Email Address</label>
                        <p class="font-weight-bold text-dark mb-0"><i class="fa fa-envelope text-muted mr-1"></i>{{ $clientEmail }}</p>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label class="text-muted f-12 mb-0">Lead Source</label>
                        <p class="font-weight-bold text-dark mb-0">{{ $sourceName }}</p>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label class="text-muted f-12 mb-0">Assigned Deal Agent</label>
                        <p class="font-weight-bold text-dark mb-0"><i class="fa fa-user-shield text-info mr-1"></i>{{ $agentName }}</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- 4. COMPANY INFORMATION CARD -->
        <div class="card border-0 shadow-sm mb-4 rounded-lg">
            <div class="card-header bg-white border-bottom p-3 d-flex align-items-center">
                <i class="fa fa-building text-info mr-2 f-18"></i>
                <h5 class="card-title mb-0 font-weight-bold text-dark">Company Information</h5>
            </div>
            <div class="card-body p-3">
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="text-muted f-12 mb-0">Company Name</label>
                        <p class="font-weight-bold text-dark mb-0">{{ $companyName }}</p>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="text-muted f-12 mb-0">Company Website</label>
                        <p class="font-weight-bold text-dark mb-0">{{ $website }}</p>
                    </div>
                    <div class="col-md-12">
                        <label class="text-muted f-12 mb-0">Address & Location</label>
                        <p class="font-weight-bold text-dark mb-0">{{ $address }} ({{ $location }})</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- 5. REQUIREMENT DETAILS CARD -->
        <div class="card border-0 shadow-sm mb-4 rounded-lg">
            <div class="card-header bg-white border-bottom p-3 d-flex align-items-center">
                <i class="fa fa-cogs text-success mr-2 f-18"></i>
                <h5 class="card-title mb-0 font-weight-bold text-dark">Requirement Details</h5>
            </div>
            <div class="card-body p-3">
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="text-muted f-12 mb-0">Requirement Type</label>
                        <p class="font-weight-bold text-dark mb-0">{{ $requirementType }}</p>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="text-muted f-12 mb-0">Specification / Type</label>
                        <p class="font-weight-bold text-dark mb-0">{{ $specType }}</p>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label class="text-muted f-12 mb-0">Technology Preference / Specifications</label>
                        <p class="text-dark mb-0">{{ $describeReq }}</p>
                    </div>
                    <div class="col-md-12">
                        <label class="text-muted f-12 mb-0">Initial Notes</label>
                        <p class="text-dark mb-0 bg-light p-2 rounded">{{ $notes }}</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- 6. NEW DEDICATED ACTIVITY TIMELINE SECTION (REQUIREMENT 4) -->
        <div class="card border-0 shadow-sm mb-4 rounded-lg">
            <div class="card-header bg-white border-bottom p-3 d-flex align-items-center justify-content-between">
                <div class="d-flex align-items-center">
                    <i class="fa fa-history text-primary mr-2 f-18"></i>
                    <h5 class="card-title mb-0 font-weight-bold text-dark">Activity Timeline</h5>
                </div>
                <span class="badge badge-primary rounded-pill px-3 py-1">{{ count($activities) }} Activities Logged</span>
            </div>
            <div class="card-body p-3">
                <div class="timeline-wrapper">
                    @foreach($activities as $act)
                        <div class="d-flex mb-3 pb-3 border-bottom align-items-start">
                            <div class="mr-3 text-center">
                                <span class="badge badge-light border rounded-circle p-2 f-16"><i class="fa {{ $act['icon'] }}"></i></span>
                            </div>
                            <div class="flex-grow-1">
                                <div class="d-flex justify-content-between align-items-center">
                                    <h6 class="font-weight-bold text-dark mb-1 f-14">{{ $act['title'] }}</h6>
                                    <small class="text-muted font-weight-bold"><i class="fa fa-clock mr-1"></i>{{ $act['date'] }}</small>
                                </div>
                                <p class="text-muted mb-1 f-13">{{ $act['description'] }}</p>
                                <small class="text-dark font-weight-bold f-12"><i class="fa fa-user mr-1 text-secondary"></i>Updated By: {{ $act['user'] }}</small>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <!-- 7. FOLLOW-UP HISTORY TABLE -->
        <div class="card border-0 shadow-sm mb-4 rounded-lg">
            <div class="card-header bg-white border-bottom p-3 d-flex align-items-center justify-content-between">
                <div class="d-flex align-items-center">
                    <i class="fa fa-comments text-secondary mr-2 f-18"></i>
                    <h5 class="card-title mb-0 font-weight-bold text-dark">Follow-up History</h5>
                </div>
                <span class="badge badge-secondary rounded-pill px-3 py-1">{{ count($followUpsList) }} Records</span>
            </div>
            <div class="card-body p-0">
                @if(count($followUpsList) > 0)
                    <div class="table-responsive">
                        <table class="table table-hover mb-0 f-13">
                            <thead class="bg-light">
                                <tr>
                                    <th>Stage</th>
                                    <th>Notes & Discussion</th>
                                    <th>Next Follow-up Date</th>
                                    <th>Updated By</th>
                                    <th>Created Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($followUpsList as $flw)
                                    @php
                                        $badgeClass = 'badge-primary';
                                        if ($flw->status == 'Follow Up 2') $badgeClass = 'badge-warning';
                                        elseif ($flw->status == 'Follow Up 3') $badgeClass = 'badge-info';
                                        elseif (in_array($flw->status, ['Won / Confirmed', 'Won', 'Confirmed'])) $badgeClass = 'badge-success';
                                        elseif ($flw->status == 'Lost') $badgeClass = 'badge-danger';
                                    @endphp
                                    <tr>
                                        <td>
                                            <span class="badge {{ $badgeClass }} px-2 py-1">{{ $flw->status ?: 'Follow Up 1' }}</span>
                                        </td>
                                        <td>
                                            <div class="text-dark font-weight-normal">{{ $flw->remark ?: '--' }}</div>
                                        </td>
                                        <td>
                                            @if($flw->next_follow_up_date)
                                                <span class="text-primary font-weight-bold">{{ \Carbon\Carbon::parse($flw->next_follow_up_date)->format('d M Y') }}</span>
                                            @else
                                                <span class="text-muted">--</span>
                                            @endif
                                        </td>
                                        <td>
                                            <span class="text-dark">{{ $flw->addedBy?->name ?: $agentName }}</span>
                                        </td>
                                        <td>
                                            <span class="text-muted">{{ $flw->created_at?->format('d M Y, h:i A') }}</span>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                @else
                    <div class="p-4 text-center text-muted">
                        <i class="fa fa-info-circle f-24 mb-2 text-secondary"></i>
                        <p class="mb-0">No follow-up activity logged yet.</p>
                    </div>
                @endif
            </div>
        </div>

        <!-- 8. REDESIGNED COMPACT SAAS STYLE UPDATE FOLLOW-UP CARD -->
        <div class="card border-0 shadow-sm mb-4 rounded-lg">
            <div class="card-header bg-white border-bottom p-3 d-flex align-items-center justify-content-between">
                <div class="d-flex align-items-center">
                    <i class="fa fa-paper-plane text-warning mr-2 f-16"></i>
                    <h5 class="card-title mb-0 font-weight-bold text-dark f-15">Update Follow-up</h5>
                </div>
                <div>
                    <span class="badge {{ $statusBadgeColor }} px-2 py-1 font-weight-bold f-12">Current Status: {{ $currentStage }}</span>
                </div>
            </div>
            <div class="card-body p-3">
                <form id="deal-followup-form">
                    @csrf
                    <input type="hidden" name="deal_id" value="{{ $deal->id }}">

                    <!-- ROW 1: STAGE & NEXT FOLLOW-UP DATE -->
                    <div class="row">
                        <div class="col-md-6 form-group mb-2">
                            <label class="font-weight-bold text-dark f-12 mb-1">Stage *</label>
                            <select name="follow_up_stage" id="follow_up_stage_select" class="form-control height-38 f-13">
                                <option value="Follow Up 1" @selected($currentStage == 'Follow Up 1')>Follow Up 1</option>
                                <option value="Follow Up 2" @selected($currentStage == 'Follow Up 2')>Follow Up 2</option>
                                <option value="Follow Up 3" @selected($currentStage == 'Follow Up 3')>Follow Up 3</option>
                                <option value="Won / Confirmed" @selected(in_array($currentStage, ['Won / Confirmed', 'Won', 'Confirmed']))>Won / Confirmed</option>
                                <option value="Lost" @selected($currentStage == 'Lost')>Lost</option>
                            </select>
                        </div>

                        <div class="col-md-6 form-group mb-2" id="next_follow_up_container">
                            <label class="font-weight-bold text-dark f-12 mb-1">Next Follow-up Date *</label>
                            <input type="date" name="next_follow_up_date" id="next_follow_up_date" class="form-control height-38 f-13" value="{{ now()->addDays(3)->format('Y-m-d') }}">
                        </div>

                        <div class="col-md-12 form-group mb-2" id="lost_reason_container" style="display: none;">
                            <label class="font-weight-bold text-danger f-12 mb-1">Lost Reason *</label>
                            <textarea name="lost_reason" id="lost_reason_input" class="form-control f-13" placeholder="Enter reason why lead was lost..." rows="2"></textarea>
                        </div>

                        <!-- ROW 2: NOTES TEXTAREA -->
                        <div class="col-md-12 form-group mb-2">
                            <label class="font-weight-bold text-dark f-12 mb-1">Notes / Remarks *</label>
                            <textarea name="remark" id="followup_remark" class="form-control f-13" placeholder="Enter follow-up conversation notes..." rows="2" required></textarea>
                        </div>

                        <!-- ROW 3: SAVE BUTTON -->
                        <div class="col-md-12 mt-1">
                            <button type="button" id="save-deal-followup-btn" class="btn btn-primary font-weight-bold px-4 height-38 f-13">
                                <i class="fa fa-save mr-1"></i> Save Follow-up
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>
</div>

<script>
    $(document).ready(function() {
        $('body').on('change', '#follow_up_stage_select', function() {
            var selected = $(this).val();
            if (selected === 'Lost') {
                $('#lost_reason_container').slideDown();
                $('#next_follow_up_container').slideUp();
            } else if (selected === 'Won / Confirmed') {
                $('#lost_reason_container').slideUp();
                $('#next_follow_up_container').slideUp();
            } else {
                $('#lost_reason_container').slideUp();
                $('#next_follow_up_container').slideDown();
            }
        });

        $('body').on('click', '#save-deal-followup-btn', function(e) {
            e.preventDefault();
            var stage = $('#follow_up_stage_select').val();
            var remark = $('#followup_remark').val().trim();
            var nextDate = $('#next_follow_up_date').val();

            var hasError = false;

            if (!remark) {
                $('#followup_remark').addClass('is-invalid border-danger');
                hasError = true;
            } else {
                $('#followup_remark').removeClass('is-invalid border-danger');
            }

            if (['Follow Up 1', 'Follow Up 2', 'Follow Up 3'].indexOf(stage) !== -1 && !nextDate) {
                $('#next_follow_up_date').addClass('is-invalid border-danger');
                hasError = true;
            } else {
                $('#next_follow_up_date').removeClass('is-invalid border-danger');
            }

            if (hasError) {
                Swal.fire({
                    icon: 'error',
                    title: 'Mandatory Field Missing',
                    text: 'Please fill all mandatory fields highlighted in red.'
                });
                return false;
            }

            $.easyAjax({
                url: "{{ route('deals.follow_up_store') }}",
                container: '#deal-followup-form',
                type: "POST",
                disableButton: true,
                buttonSelector: "#save-deal-followup-btn",
                data: $('#deal-followup-form').serialize(),
                success: function(response) {
                    if (response.status == 'success') {
                        window.location.reload();
                    }
                }
            });
        });
    });
</script>
