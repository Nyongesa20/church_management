<div class="w-64 h-screen bg-white shadow-lg">
    @if (Auth::check())
        @if (Auth::user()->role == 'admin')
            @include('layouts.sidebars.admin')
        @elseif (Auth::user()->role == 'pastor')
            @include('layouts.sidebars.pastor')
        @elseif (Auth::user()->role == 'member')
            @include('layouts.sidebars.member')
        @endif
    @endif
</div>
