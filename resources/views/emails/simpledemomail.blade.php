@component('mail::layout')
    {{-- Header --}}
    @slot('header')
        @component('mail::header', ['url' => config('app.url')])
            <!-- header here -->
            Hey Mayank
        @endcomponent
    @endslot

    {{-- Body --}}
    hi there i am here how are you!
    <!-- Body here -->

    {{-- Subcopy --}}
    @slot('subcopy')
        @component('mail::subcopy')
            <!-- subcopy here -->
            Hey this sub copy
        @endcomponent
    @endslot


    {{-- Footer --}}
    @slot('footer')
        @component('mail::footer')
            <!-- footer here -->
            Hey this this is my sub copy
        @endcomponent
    @endslot
@endcomponent