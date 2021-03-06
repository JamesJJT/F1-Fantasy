<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            F1
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        Seasons <i class="fa fa-lg fa-angle-down"></i>
                    </a>

                    <div class="dropdown-menu dropdown-menu-left" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item border-bottom" href="{{route('races')}}">Current Season</a>
                        <a class="dropdown-item border-bottom" href="{{route('pastRaces')}}">List of Seasons</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a href="{{route('drivers')}}" class="nav-link">Drivers</a>
                </li>
                <li class="nav-item">
                    <a href="{{route('showUsersTeam')}}" class="nav-link">Fantasy Team</a>
                </li>
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            <span class="fa fa-lg fa-user"></span>
                            <i class="fa fa-lg fa-angle-down"></i>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <div class="dropdown-item border-bottom bg-light mb-2">
                                {{ Auth::user()->name }} 
                            </div>
                            @if(Auth::check() && Auth::user()->isAdmin())
                                <a class="dropdown-item border-bottom bg-dark text-white" href="{{route('adminDashboard')}}">Admin Dashboard</a>
                            @endif
                            <a class="dropdown-item border-bottom" href="{{route('home')}}">Dashboard</a>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>