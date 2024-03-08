@component('mail::message')
# Introduction

The body of your message.
- 1
- 2
- 3

@component('mail::button', ['url' => ''])
Button Text 1
@endcomponent

@component('mail::button', ['url' => ''])
Button Text 2
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
