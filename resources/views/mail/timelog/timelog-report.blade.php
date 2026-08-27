@component('mail::message')
# @lang('email.hello') {{$name}},
@lang('email.dailyTimelogReport.subject') {{ \Carbon\Carbon::parse($date)->translatedFormat('Y-m-d') }}

{!! __('email.dailyTimelogReport.text') !!}

@lang('email.regards'),<br>
{{ config('app.name') }}
@endcomponent
