@component('mail::message')
# Contact Form Submission

You have received a new contact form submission. Here are the details:

- **Full Name:** {{ $contact['full_name'] }}
- **Email:** {{ $contact['email'] }}
- **Phone Number:** {{ $contact['phone'] }}
- **Service:** {{ $contact['service'] }}
- **Day:** {{ $contact['day'] }}
- **Time:** {{ $contact['time'] }}

@if ($contact['details'])
**Additional Details:**
{{ $contact['details'] }}
@endif

Thanks,<br>
{{ config('app.name') }}
@endcomponent
