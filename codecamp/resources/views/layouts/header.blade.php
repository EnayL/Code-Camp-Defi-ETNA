<header>
        <nav>
            <ul>
                <li><a href="{{ '/service' }}">Trombi des Employés</a></li>
            </ul>
        </nav>
        @if (Auth::check())
            @if (Auth::user()->role != 'student')
            <div>
                <form action="/ajoutProfil" method="GET" class="add">
                    @csrf
                <input type="image" src="../images/add.png">
                </form>
                @endif
                <form class="lo" action="/service" method="POST">
                    @csrf
                    <input class="logout" type="submit" value="Logout">
                </form>
            </div>
        @endif
</header>

@yield('content')

{{-- @elseif (Auth::user()->role == 'supadm')
<form action="" method="">
    @csrf
    <button>Changer le role de l'utilisateur</button>
</form> --}}
