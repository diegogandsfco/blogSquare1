<!--
<nav class="navbar navbar-dark fixed-top bg-dark navbar-expand-md shadow flex-md-nowrap">
-->
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-barraNavegacion">
    <!-- Brand -->
    <a class="navbar-brand navbar-dark bg-barraNavegacion" href="{{ url($URL)}}">
        
    </a>
    <h4 style="color:white" class="posicionTituloBarra">
        {{ $titulo }}
    </h4>
    
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse justify-content-end" id="collapsibleNavbar">
        <ul class="navbar-nav">

        <!-- Links -->
        @if (Auth::guest())
            <li class="nav-item">
                <a href="{{ route('login')}}"><span data-feather="log-in"></span> Ingresar </a>
            </li>
            <li>
                &nbsp;&nbsp;
            </li>
            <li class="nav-item">
                <a href="{{ route('register')}}"><span data-feather="user-plus"></span> Registrarse</a>
            </li>

        @else
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                  {{ Auth::user()->name }} <span class="caret"></span>
                </a>
                <div class="dropdown-menu">
                    <a class="nav-link dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        Logout
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>

                </div>
            </li>
        @endif
        </ul>
    </div>
    
</nav>