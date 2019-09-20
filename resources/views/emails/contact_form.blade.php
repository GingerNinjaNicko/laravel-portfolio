@component('mail::message')
You have been sent a new email from NickoJRuddock.com

**Name:** {{ $enquiry['name'] }}

**Email:** {{ $enquiry['email'] }}

**Message:**<br>
{{ $enquiry['msg'] }}
@endcomponent