

@component('mail::layout')
    {{-- Header --}}
    @slot('header')
        @component('mail::header', ['url' => config('app.url')])
            <!-- header here -->
            Laravel
        @endcomponent
    @endslot

    {{-- Body --}}
    <!-- Body here -->
    Your message has being received. We will reply to you shortly.

    {{-- Subcopy --}}
    @slot('subcopy')
        @component('mail::subcopy')
            <!-- subcopy here -->
            here is a subcopy
        @endcomponent
    @endslot


    {{-- Footer --}}
    @slot('footer')
        @component('mail::footer')
            <!-- footer here -->
            {{ config('app.name') }}
        @endcomponent
    @endslot
@endcomponent
