@props(['showActions' => false])

@php
    $user = user();
    $tz = company()->timezone;
    $todayDate = now($tz)->translatedFormat('l, d M Y');
    $today = now($tz)->toDateString();

    $allAttendances = \App\Models\Attendance::with(['breaks', 'activeBreak'])
        ->where('user_id', $user->id)
        ->whereDate('clock_in_time', $today)
        ->orderBy('clock_in_time', 'asc')
        ->get();

    $attendance = \App\Models\Attendance::with(['breaks', 'activeBreak'])
        ->where('user_id', $user->id)
        ->whereDate('clock_in_time', $today)
        ->whereNull('clock_out_time')
        ->latest('id')
        ->first();

    $isClockedIn = $attendance && is_null($attendance->clock_out_time);
    $isClockedOut = !$isClockedIn && $allAttendances->count() > 0 && !is_null($allAttendances->last()->clock_out_time);
    $activeBreak = $attendance?->activeBreak;
    $isOnBreak = $attendance && !is_null($activeBreak);

    $totalBreakSeconds = 0;
    $workSeconds = 0;
    $timelineEvents = [];

    foreach ($allAttendances as $att) {
        if ($att->clock_in_time) {
            $timelineEvents[] = [
                'time' => $att->clock_in_time->timezone($tz)->format('h:i A'),
                'timestamp' => $att->clock_in_time->timestamp,
                'label' => 'Login / Checked In',
                'icon' => 'fa-check-circle text-success',
                'badge' => 'badge-success',
            ];

            $sessionEnd = $att->clock_out_time ?: now();
            $workSeconds += max(0, $att->clock_in_time->diffInSeconds($sessionEnd));
        }

        foreach ($att->breaks as $b) {
            if ($b->start_time) {
                $timelineEvents[] = [
                    'time' => $b->start_time->timezone($tz)->format('h:i A'),
                    'timestamp' => $b->start_time->timestamp,
                    'label' => 'Break Started',
                    'icon' => 'fa-coffee text-warning',
                    'badge' => 'badge-warning',
                ];
            }
            if ($b->end_time) {
                $timelineEvents[] = [
                    'time' => $b->end_time->timezone($tz)->format('h:i A'),
                    'timestamp' => $b->end_time->timestamp,
                    'label' => 'Break Ended',
                    'icon' => 'fa-play-circle text-primary',
                    'badge' => 'badge-primary',
                ];
                $totalBreakSeconds += $b->start_time->diffInSeconds($b->end_time);
            } else if ($b->start_time) {
                $totalBreakSeconds += $b->start_time->diffInSeconds(now());
            }
        }

        if ($att->clock_out_time) {
            $timelineEvents[] = [
                'time' => $att->clock_out_time->timezone($tz)->format('h:i A'),
                'timestamp' => $att->clock_out_time->timestamp,
                'label' => 'Logout',
                'icon' => 'fa-door-open text-danger',
                'badge' => 'badge-danger',
            ];
        }
    }

    usort($timelineEvents, fn($a, $b) => $a['timestamp'] <=> $b['timestamp']);

    $netWorkSeconds = max(0, $workSeconds - $totalBreakSeconds);

    $lastAtt = $allAttendances->last();
    $clockInFormatted = $lastAtt?->clock_in_time ? $lastAtt->clock_in_time->timezone($tz)->format('h:i A') : '--:--';
    $clockOutFormatted = $lastAtt?->clock_out_time ? $lastAtt->clock_out_time->timezone($tz)->format('h:i A') : '--:--';
    $loginTime = $user->last_login ? \Carbon\Carbon::parse($user->last_login)->timezone($tz)->format('h:i A') : $clockInFormatted;
@endphp

<style>
    .btn-hrms-action {
        transition: all 0.25s ease-in-out;
        font-weight: 700;
        letter-spacing: 0.3px;
        box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
    }
    .btn-hrms-action:hover:not(:disabled) {
        transform: translateY(-2px);
        box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.15), 0 4px 6px -2px rgba(0, 0, 0, 0.08);
    }
    .badge-status-working {
        background-color: #10B981;
        color: #ffffff;
    }
    .badge-status-break {
        background-color: #F59E0B;
        color: #ffffff;
    }
    .badge-status-checkout {
        background-color: #6B7280;
        color: #ffffff;
    }
    .pulse-dot {
        width: 8px;
        height: 8px;
        border-radius: 50%;
        background-color: #fff;
        display: inline-block;
        animation: pulse 1.5s infinite;
    }
    @keyframes pulse {
        0% { opacity: 1; transform: scale(1); }
        50% { opacity: 0.4; transform: scale(1.3); }
        100% { opacity: 1; transform: scale(1); }
    }
</style>

<div class="card border-0 b-shadow-4 rounded-lg mb-4 bg-white" id="hrms-attendance-widget">
    <!-- HEADER -->
    <div class="card-header bg-white border-bottom-grey font-weight-bold f-16 py-3 px-4 d-flex flex-column flex-md-row justify-content-between align-items-md-center">
        <div class="d-flex align-items-center mb-2 mb-md-0">
            <div class="rounded-circle text-primary font-weight-bold d-flex align-items-center justify-content-center mr-3 shadow-xs" style="width: 46px; height: 46px; background-color: #EFF6FF;">
                <i class="fa fa-user-clock text-primary f-20"></i>
            </div>
            <div>
                <h4 class="f-16 font-weight-bold text-darkest-grey mb-0">{{ $user->name }}</h4>
                <p class="f-12 text-dark-grey mb-0 mt-1">
                    <i class="fa fa-calendar-alt text-primary mr-1"></i>{{ $todayDate }}
                </p>
            </div>
        </div>

        <div id="hrms-status-badge-container">
            @if($isOnBreak)
                <span class="badge badge-status-break px-3 py-2 font-weight-bold f-13 rounded-pill shadow-xs" style="background-color: #F59E0B;">
                    <i class="fa fa-coffee mr-1"></i>On Break
                </span>
            @elseif($isClockedIn)
                <span class="badge badge-status-working px-3 py-2 font-weight-bold f-13 rounded-pill shadow-xs" style="background-color: #10B981;">
                    <span class="pulse-dot mr-1"></span>Working (Checked In)
                </span>
            @elseif($isClockedOut)
                <span class="badge badge-status-checkout px-3 py-2 font-weight-bold f-13 rounded-pill shadow-xs">
                    <i class="fa fa-door-open mr-1"></i>Checked Out
                </span>
            @else
                <span class="badge badge-light border text-dark-grey px-3 py-2 font-weight-bold f-13 rounded-pill shadow-xs">
                    <i class="fa fa-clock mr-1"></i>Not Checked In
                </span>
            @endif
        </div>
    </div>

    <div class="card-body p-4">
        <!-- 3 CARDS RESPONSIVE GRID -->
        <div class="row text-center mb-2">
            <!-- CARD 1: WORK DURATION -->
            <div class="col-xl-4 col-lg-4 col-md-4 col-12 mb-3 mb-md-0">
                <div class="p-3 bg-light rounded-lg border border-grey h-100">
                    <span class="f-12 text-lightest d-block mb-1 font-weight-semibold">
                        <i class="fa fa-history text-success mr-1"></i>Work Duration
                    </span>
                    <span class="f-20 font-weight-bold text-success d-block mt-1" id="widget-work-timer">00h 00m 00s</span>
                </div>
            </div>

            <!-- CARD 2: BREAK DURATION -->
            <div class="col-xl-4 col-lg-4 col-md-4 col-12 mb-3 mb-md-0">
                <div class="p-3 bg-light rounded-lg border border-grey h-100">
                    <span class="f-12 text-lightest d-block mb-1 font-weight-semibold">
                        <i class="fa fa-coffee text-warning mr-1"></i>Break Duration
                    </span>
                    <span class="f-20 font-weight-bold text-warning d-block mt-1" id="widget-break-timer" style="color: #F59E0B;">00h 00m 00s</span>
                </div>
            </div>

            <!-- CARD 3: NET WORKING HOURS -->
            <div class="col-xl-4 col-lg-4 col-md-4 col-12">
                <div class="p-3 bg-light rounded-lg border border-grey h-100">
                    <span class="f-12 text-lightest d-block mb-1 font-weight-semibold">
                        <i class="fa fa-business-time text-info mr-1"></i>Net Working Hours
                    </span>
                    <span class="f-20 font-weight-bold text-info d-block mt-1" id="widget-net-timer">00h 00m 00s</span>
                </div>
            </div>
        </div>

        @if($showActions)
            <!-- SEPARATE MODULE ACTION BUTTONS AREA -->
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-end gap-3 mt-3 pt-3 border-top-grey" id="hrms-action-buttons-container">
                @if(!$isClockedIn)
                    <button type="button" class="btn btn-success text-white btn-lg px-4 py-2 rounded-pill btn-hrms-action" id="btn-hrms-checkin-widget" onclick="hrmsAction('checkin')" style="background-color: #10B981; border: none;">
                        <i class="fa fa-sign-in-alt mr-2"></i>Login
                    </button>
                @elseif($isClockedIn && !$isOnBreak)
                    <button type="button" class="btn btn-warning text-white btn-lg px-4 py-2 rounded-pill mr-3 btn-hrms-action" id="btn-hrms-startbreak-widget" onclick="hrmsAction('startbreak')" style="background-color: #F59E0B; border: none;">
                        <i class="fa fa-coffee mr-2"></i>Start Break
                    </button>
                    <button type="button" class="btn btn-danger btn-lg px-4 py-2 rounded-pill btn-hrms-action" id="btn-hrms-checkout-widget" onclick="hrmsOpenCheckoutModal()" style="background-color: #EF4444; border: none;">
                        <i class="fa fa-sign-out-alt mr-2"></i>Logout
                    </button>
                @elseif($isClockedIn && $isOnBreak)
                    <button type="button" class="btn btn-primary text-white btn-lg px-4 py-2 rounded-pill btn-hrms-action" id="btn-hrms-endbreak-widget" onclick="hrmsAction('endbreak')" style="background-color: #2563EB; border: none;">
                        <i class="fa fa-play-circle mr-2"></i>End Break
                    </button>
                @endif
            </div>
        @endif

        <!-- ATTENDANCE TIMELINE -->
        <div class="mt-4 pt-3 border-top-grey">
            <h5 class="f-14 font-weight-bold text-darkest-grey mb-3">
                <i class="fa fa-stream text-primary mr-2"></i>Today's Attendance Timeline
            </h5>
            <div class="d-flex flex-wrap align-items-center gap-3" id="hrms-timeline-container">
                @if(!empty($timelineEvents))
                    @foreach($timelineEvents as $event)
                        <div class="d-flex align-items-center bg-light p-2 px-3 rounded-lg border border-grey mr-3 mb-2">
                            <span class="f-12 font-weight-bold text-darkest-grey mr-2">{{ $event['time'] }}</span>
                            <span class="badge {{ $event['badge'] }} px-2 py-1 font-weight-semibold f-11 rounded">
                                <i class="fa {{ $event['icon'] }} mr-1 text-white"></i>{{ $event['label'] }}
                            </span>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </div>
</div>

<!-- CHECKOUT SUMMARY MODAL -->
<div class="modal fade" id="hrmsCheckoutModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content border-0 b-shadow-4 rounded-lg">
            <div class="modal-header bg-white border-bottom-grey py-3 px-4">
                <h5 class="modal-title font-weight-bold text-darkest-grey f-16">
                    <i class="fa fa-clipboard-check text-primary mr-2"></i>Attendance Summary
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body p-4">
                <div class="text-center mb-4">
                    <div class="rounded-circle text-primary font-weight-bold d-inline-flex align-items-center justify-content-center mb-2 shadow-xs" style="width: 56px; height: 56px; background-color: #EFF6FF; font-size: 24px;">
                        <i class="fa fa-user-clock text-primary"></i>
                    </div>
                    <h4 class="f-16 font-weight-bold text-darkest-grey mb-1">{{ $user->name }}</h4>
                    <p class="f-12 text-lightest mb-0">{{ $todayDate }}</p>
                </div>

                <div class="list-group list-group-flush rounded-lg border border-grey mb-3">
                    <div class="list-group-item d-flex justify-content-between align-items-center f-14 py-3">
                        <span class="text-dark-grey"><i class="fa fa-key text-primary mr-2"></i>Login Time</span>
                        <span class="font-weight-bold text-darkest-grey">{{ $loginTime }}</span>
                    </div>
                    <div class="list-group-item d-flex justify-content-between align-items-center f-14 py-3">
                        <span class="text-dark-grey"><i class="fa fa-sign-in-alt text-success mr-2"></i>Check In Time</span>
                        <span class="font-weight-bold text-darkest-grey" id="modal-clockin-time">{{ $clockInFormatted }}</span>
                    </div>
                    <div class="list-group-item d-flex justify-content-between align-items-center f-14 py-3">
                        <span class="text-dark-grey"><i class="fa fa-sign-out-alt text-danger mr-2"></i>Logout Time</span>
                        <span class="font-weight-bold text-darkest-grey" id="modal-clockout-time">{{ now($tz)->format('h:i A') }}</span>
                    </div>
                    <div class="list-group-item d-flex justify-content-between align-items-center f-14 py-3">
                        <span class="text-dark-grey"><i class="fa fa-history text-success mr-2"></i>Total Work Duration</span>
                        <span class="font-weight-bold text-success" id="modal-work-hours">00h 00m</span>
                    </div>
                    <div class="list-group-item d-flex justify-content-between align-items-center f-14 py-3">
                        <span class="text-dark-grey"><i class="fa fa-coffee text-warning mr-2"></i>Total Break Duration</span>
                        <span class="font-weight-bold text-warning" id="modal-break-hours" style="color: #F59E0B;">00h 00m</span>
                    </div>
                    <div class="list-group-item d-flex justify-content-between align-items-center f-14 py-3 bg-light">
                        <span class="text-dark-grey font-weight-bold"><i class="fa fa-business-time text-info mr-2"></i>Net Working Hours</span>
                        <span class="font-weight-bold text-info f-16" id="modal-net-hours">00h 00m</span>
                    </div>
                </div>
            </div>
            <div class="modal-footer bg-light border-top-grey py-3 px-4">
                <button type="button" class="btn btn-secondary px-4 font-weight-bold rounded-pill" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-danger px-4 font-weight-bold rounded-pill btn-hrms-action" id="btn-confirm-checkout" onclick="hrmsAction('checkout')" style="background-color: #EF4444; border: none;">
                    <i class="fa fa-check mr-2"></i>Confirm Logout
                </button>
            </div>
        </div>
    </div>
</div>

<script>
    window.hrmsWorkSecs = parseInt("{{ $workSeconds }}") || 0;
    window.hrmsBreakSecs = parseInt("{{ $totalBreakSeconds }}") || 0;
    window.hrmsIsClockedIn = Boolean({{ $isClockedIn ? 'true' : 'false' }});
    window.hrmsIsOnBreak = Boolean({{ $isOnBreak ? 'true' : 'false' }});

    function formatHrmsTimer(totalSeconds) {
        let hrs = Math.floor(totalSeconds / 3600);
        let mins = Math.floor((totalSeconds % 3600) / 60);
        let secs = totalSeconds % 60;
        return String(hrs).padStart(2, '0') + 'h ' + String(mins).padStart(2, '0') + 'm ' + String(secs).padStart(2, '0') + 's';
    }

    function formatHrmsHM(totalSeconds) {
        let hrs = Math.floor(totalSeconds / 3600);
        let mins = Math.floor((totalSeconds % 3600) / 60);
        return String(hrs).padStart(2, '0') + 'h ' + String(mins).padStart(2, '0') + 'm';
    }

    if (!window.hrmsTimerInterval) {
        window.hrmsTimerInterval = setInterval(function () {
            if (window.hrmsIsClockedIn) {
                if (window.hrmsIsOnBreak) {
                    window.hrmsBreakSecs++;
                } else {
                    window.hrmsWorkSecs++;
                }
            }
            let netSecs = Math.max(0, window.hrmsWorkSecs - window.hrmsBreakSecs);
            
            let elWork = document.getElementById('widget-work-timer');
            let elBreak = document.getElementById('widget-break-timer');
            let elNet = document.getElementById('widget-net-timer');

            if (elWork) elWork.innerText = formatHrmsTimer(window.hrmsWorkSecs);
            if (elBreak) elBreak.innerText = formatHrmsTimer(window.hrmsBreakSecs);
            if (elNet) elNet.innerText = formatHrmsTimer(netSecs);
        }, 1000);
    }

    window.hrmsDisabledCheckoutAlert = function () {
        if (typeof Swal !== 'undefined') {
            Swal.fire({
                icon: 'warning',
                title: 'Logout Blocked',
                text: 'Please end break before logout',
                confirmButtonText: 'OK',
                customClass: { confirmButton: 'btn btn-primary' },
                buttonsStyling: false
            });
        } else {
            alert('Please end break before logout');
        }
    };

    window.hrmsOpenCheckoutModal = function () {
        let netSecs = Math.max(0, window.hrmsWorkSecs - window.hrmsBreakSecs);
        let elW = document.getElementById('modal-work-hours');
        let elB = document.getElementById('modal-break-hours');
        let elN = document.getElementById('modal-net-hours');
        if (elW) elW.innerText = formatHrmsHM(window.hrmsWorkSecs);
        if (elB) elB.innerText = formatHrmsHM(window.hrmsBreakSecs);
        if (elN) elN.innerText = formatHrmsHM(netSecs);
        window.jQuery('#hrmsCheckoutModal').modal('show');
    };

    window.hrmsAction = function (actionType) {
        console.log('HRMS Action triggered:', actionType);
        let routes = {
            'checkin': "{{ route('attendances.quick_clock_in') }}",
            'startbreak': "{{ route('attendances.start_break') }}",
            'endbreak': "{{ route('attendances.end_break') }}",
            'checkout': "{{ route('attendances.quick_clock_out') }}"
        };

        let btnIdMap = {
            'checkin': '#btn-hrms-checkin',
            'startbreak': '#btn-hrms-startbreak',
            'endbreak': '#btn-hrms-endbreak',
            'checkout': '#btn-confirm-checkout'
        };

        let btnNameMap = {
            'checkin': 'Logging in...',
            'startbreak': 'Starting Break...',
            'endbreak': 'Ending Break...',
            'checkout': 'Logging out...'
        };

        let btnSelector = btnIdMap[actionType];
        let btn = window.jQuery ? window.jQuery(btnSelector) : null;
        if (btn && btn.length) {
            btn.prop('disabled', true).html('<i class="fa fa-spinner fa-spin mr-2"></i>' + btnNameMap[actionType]);
        }

        let csrfToken = "{{ csrf_token() }}";

        if (window.jQuery) {
            window.jQuery.ajax({
                url: routes[actionType],
                type: "POST",
                data: { _token: csrfToken },
                dataType: "json",
                success: function (response) {
                    if (response && (response.status === 'success' || response.status === 'OK')) {
                        let msg = response.message || 'Action completed successfully.';
                        if (typeof toastr !== 'undefined') {
                            toastr.success(msg);
                        }
                        if (actionType === 'checkout') {
                            window.jQuery('#hrmsCheckoutModal').modal('hide');
                            setTimeout(function() {
                                window.location.reload();
                            }, 400);
                            return;
                        }
                        setTimeout(function () {
                            window.location.reload();
                        }, 400);
                    } else {
                        let errMsg = (response && response.message) ? response.message : 'Action failed.';
                        if (typeof toastr !== 'undefined') {
                            toastr.error(errMsg);
                        } else {
                            alert(errMsg);
                        }
                        if (btn && btn.length) {
                            btn.prop('disabled', false).html('Try Again');
                        }
                    }
                },
                error: function (xhr) {
                    let errMsg = 'Action failed';
                    if (xhr.responseJSON && xhr.responseJSON.message) {
                        errMsg = xhr.responseJSON.message;
                    }
                    if (typeof toastr !== 'undefined') {
                        toastr.error(errMsg);
                    } else {
                        alert(errMsg);
                    }
                    if (btn && btn.length) {
                        btn.prop('disabled', false).html('Try Again');
                    }
                }
            });
        } else {
            console.error('jQuery not loaded');
        }
    };
</script>
