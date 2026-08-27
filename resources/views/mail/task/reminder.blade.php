@component('mail::message')
# @lang('email.taskReminder.subject')

@lang('email.reminder.subject')

## @lang('app.taskDetails')

{!! $content !!}

@component('mail::button', ['url' => $url, 'themeColor' => $themeColor])
@lang('app.viewTask')
@endcomponent

@lang('email.regards'),<br>
{{ config('app.name') }}
@endcomponent
