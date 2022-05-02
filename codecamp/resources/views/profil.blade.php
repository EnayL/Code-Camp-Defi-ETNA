<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title> Profil</title>
    <link rel="stylesheet" type="text/css" href="{{ '../css/profil.css' }}">
    <link rel="stylesheet" type="text/css" href="{{ '../css/header.css' }}">
</head>

<body>
    @extends('layouts.header')
    @section('content')
        <div class="styleheader"></div>
        <div class="content">
            <img class="pics" src="{{ asset('storage/avatars/' . $profils->photo) }}">
            <div class="principal">
                <div class="infos">
                    <h1>{{ $profils['nom'] }}</h1>
                    <h1>{{ $profils['prenom'] }}</h1>
                    <h2>{{ $profils['service'] }}</h2>
                    <ul>
                        <li>
                            <p>{{ $profils['email'] }} </p>
                        </li>
                        <li>
                            <p> {{ $profils['telephone'] }} </p>
                        </li>
                    </ul>
                    @if (Auth::check())
                        @if (Auth::user()->role != 'student')
                            <form action="/modifProfil/{{ $profils->id }}" method="GET">
                                @csrf
                                <button class="modif">Modifier</button>
                            </form>
                            <td>
                                <form action="/profil/{{ $profils->id }}" method="post">
                                    @csrf
                                    <button class="delete" type="submit"
                                        onclick=" return confirm('Confirmer la suppression ?');">Supprimer</button>
                                </form>
                            </td>
                </div>
                <div class="box">
                    <div>
                        <h3> {{ $profils['responsable'] }} </h3>
                        <h3> {{ $profils['tags'] }} </h3>
                    </div>
                </div>
            </div>
        </div>
        <form action="/modifProfil/{{ $profils->id }}" method="GET">
            @csrf
            <button>Modifier le profil</button>
        </form>
    @else
        </div>
        <div class="box">

        </div>
        @endif
    @else
        </div>
        <div class="box">

        </div>
        @endif
        </div>
        </div>
    @endsection
</body>
<script src="../js/delete.js">

</script>

</html>
