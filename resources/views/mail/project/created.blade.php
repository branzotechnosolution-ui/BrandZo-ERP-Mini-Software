@component('mail::message')
# @lang('email.hello')@if(!empty($notifiableName)){{ ' '.$notifiableName }}@endif!

{!! $content !!}

@component('mail::button', ['url' => $url, 'themeColor' => $themeColor])
@lang('app.viewProject')
@endcomponent

@lang('email.regards'),<br>
{{ config('app.name') }}
@endcomponent
