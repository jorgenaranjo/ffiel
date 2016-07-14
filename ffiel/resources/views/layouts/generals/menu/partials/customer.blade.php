<ul class="right hide-on-med-and-down">
    @if (Auth::guest())
        <li><a href="{{ route('login')  }}">Login</a></li>
        <li><a href="{{ route('register')  }}">Register</a></li>
    @else
        <li><a href="{{ route('workshopsCustomer.index') }}"><i class="material-icons left">camera</i> {{ trans('menus.workshops') }}</a></li>
        <li><a href="#!"><i class="material-icons left">record_voice_over</i> {{ trans('menus.conferences') }}</a></li>
        <li><a class="dropdown-button" href="#!" data-activates="dropdown1">
                {{ Auth::user()->name }}  <i class="material-icons right">arrow_drop_down</i></a></li>
    @endif
</ul>
<ul class="side-nav" id="mobile-demo">
    <li><a href="#!"><h5>{{ Auth::user()->name }}</h5></a></li>

    @if (Auth::guest())
        <li><a href="{{ route('login')  }}">Login</a></li>
        <li><a href="{{ route('register')  }}">Register</a></li>
    @else
        <li><a href="{{ route('workshopsCustomer.index') }}"><i class="material-icons left">camera</i> {{ trans('menus.workshops') }}</a></li>
        <li><a href="#!"><i class="material-icons left">record_voice_over</i> {{ trans('menus.conferences') }}</a></li>
        <li><a href="#!"><i class="material-icons left">person</i>Perfil</a></li>
        <li><a href="{{ route('logout') }}"><i class="fa fa-btn fa-sign-out"></i>{{ trans('menus.logout') }}</a></li>
    @endif
</ul>

<!-- Dropdown Logout -->
<ul id="dropdown1" class="dropdown-content">
    <li><a href="#!"><i class="tiny material-icons">person</i>Perfil</a></li>
    <li><a href="{{ route('logout') }}"><i class="fa fa-btn fa-sign-out"></i>{{ trans('menus.logout') }}</a></li>
</ul>
