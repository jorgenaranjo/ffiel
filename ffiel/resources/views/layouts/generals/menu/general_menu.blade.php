<nav class="purple darken-3">
    <div class="nav-wrapper">
        <a href="{{ route('home') }}" class="brand-logo" style="padding-left: 15px">
            <img src="{{ asset(env('LOGO')) }}" class="responsive-img" style="max-width: 150px; max-height: 200px">
        </a>
        <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
        @if(Auth::user()->type == 'admin')
            @include('layouts.generals.menu.partials.admin')
        @endif
        @if(Auth::user()->type == 'customer')
            @include('layouts.generals.menu.partials.customer')
        @endif
    </div>
</nav>