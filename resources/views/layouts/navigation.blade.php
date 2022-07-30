@if (Route::has('login'))
    <nav class="navbar navbar-expand-lg bg-light mb-4">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                @auth
                <a class="navbar-brand" href="#">Dashboard</a>
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{ url('/home') }}">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{ route('logout') }}">Logout</a>
                </li>
                @else
                <a class="navbar-brand" href="#">Login Registration Portal</a>
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{ route('login') }}">Login</a>
                </li>
                <li class="nav-item">
                @if (Route::has('register'))
                <a class="nav-link" href="{{ route('register') }}">Register</a>
                @endif
                </li>
                @endauth

                </ul>
            </div>
        </div>
    </nav>
@endif