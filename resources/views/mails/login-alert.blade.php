<x-mail::message>
    # Login Alert

    Hi {{ $user_name }}
    Recently your account has been logged in at {{ $time }}

    {{ config('app.name') }}
</x-mail::message>