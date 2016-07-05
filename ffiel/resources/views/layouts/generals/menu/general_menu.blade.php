<!-- Dropdown Logout -->
<ul id="dropdown1" class="dropdown-content">
    <li><a href="{{ route('logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
</ul>

<nav style="background-color: #9fcc49">
    <div class="nav-wrapper">
        <a href="{{ route('home') }}" class="brand-logo" style="padding-left: 15px">FFIEL</a>
        <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
        <ul class="right hide-on-med-and-down">
            @if (Auth::guest())
                <li><a href="{{ route('login')  }}">Login</a></li>
                <li><a href="{{ route('register')  }}">Register</a></li>
            @else
                <li><a class="dropdown-button" href="#!" data-activates="dropdown1">
                        {{ Auth::user()->name }} <i class="material-icons right">arrow_drop_down</i></a></li>
            @endif
        </ul>
        <ul class="side-nav" id="mobile-demo">
            <li><a href="#!"><h5>{{ Auth::user()->name }}</h5></a></li>

            @if (Auth::guest())
                <li><a href="{{ route('login')  }}">Login</a></li>
                <li><a href="{{ route('register')  }}">Register</a></li>
            @else
                <li><a href="{{ route('logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
            @endif
        </ul>
    </div>
</nav>