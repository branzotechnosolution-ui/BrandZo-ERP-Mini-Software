@component('mail::message')
# @lang('email.hello')@if(!empty($notifiableName)){{ ' ' . $notifiableName }}@endif! <br>
# @lang('modules.tasks.newTask')

{!! $content !!}


@lang('email.regards'),<br>
{{ config('app.name') }}
@endcomponent
