<ul class="right hide-on-med-and-down">
    @if (Auth::guest())
        <li><a href="{{ route('login')  }}">Login</a></li>
        <li><a href="{{ route('register')  }}">Register</a></li>
    @else
        <li><a href="#!"><i class="material-icons left">camera</i> Talleres</a></li>
        <li><a href="#!"><i class="material-icons left">record_voice_over</i> Conferencias</a></li>
        <li><a href="#!"><i <i class="material-icons left">payment</i> Pagos</a></li>
        <li><a href="#!"><i class="medium material-icons left">supervisor_account</i> Usuarios</a></li>

        <li><a class="dropdown-button" href="#!" data-activates="dropdown1">
                {{ Auth::user()->name }} <i class="material-icons right">arrow_drop_down</i></a></li>
    @endif
</ul>
<ul class="side-nav" id="mobile-demo">
    <li>
        <img src="{{ asset(env('FFIELNEGRO')) }}" class="responsive-img">
    </li>
    <li><a href="#!"><h5>{{ Auth::user()->name }}</h5></a></li>
    @if (Auth::guest())
        <li><a href="{{ route('login')  }}">Login</a></li>
        <li><a href="{{ route('register')  }}">Register</a></li>
    @else
        <li><a href="#!"><i class="material-icons left">camera</i> Talleres</a></li>
        <li><a href="#!"><i class="material-icons left">record_voice_over</i> Conferencias</a></li>
        <li><a href="#!"><i <i class="material-icons left">payment</i> Pagos</a></li>
        <li><a href="#!"><i class="medium material-icons left">supervisor_account</i> Usuarios</a></li>
        <li><a href="{{ route('logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
    @endif
</ul>

<!-- Dropdown Logout -->
<ul id="dropdown1" class="dropdown-content">
    <li><a href="{{ route('logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
</ul>
