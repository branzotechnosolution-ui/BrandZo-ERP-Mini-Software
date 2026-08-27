@component('mail::message')
# {{ \Carbon\Carbon::parse('01-' . $month . '-' . now()->year)->translatedFormat('F-Y') }} @lang('app.menu.attendanceReport')

{!! __('email.attendanceReport.text') !!}

@lang('email.regards'),<br>
{{ config('app.name') }}
@endcomponent
