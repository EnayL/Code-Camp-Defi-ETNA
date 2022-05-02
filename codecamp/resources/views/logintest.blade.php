<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="{{ '../css/header.css' }}">
    <link rel="stylesheet" type="text/css" href="{{ '../css/login.css' }}">
    <title>Login Pour Test</title>
</head>

<body>

    @extends('layouts.header')

    @section('content')
        <div class="corps">
            <h1>Connexion</h1>
            <div class="log">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form class="form1" action="/test" method="POST">
                    @csrf
                    <input type="text" name="email" placeholder="login">
                    <input type="password" name="password" placeholder="password">
                    <input type="submit" value="entrer" action="/service" method="get">
                </form>
            </div>
        </div>

    @endsection
</body>

</html>
