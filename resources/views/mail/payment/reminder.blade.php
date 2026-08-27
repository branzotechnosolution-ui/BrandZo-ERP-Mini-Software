@component('mail::message')
# <center> @lang('email.paymentReminder.subject') </center>

# @lang('app.invoiceDetails') -

{!! $content !!}

@component('mail::button', ['url' => $paymentUrl, 'themeColor' => $themeColor])
    @lang('app.viewInvoices')
@endcomponent

@lang('email.regards'),<br>
    {{ config('app.name') }}
@endcomponent
