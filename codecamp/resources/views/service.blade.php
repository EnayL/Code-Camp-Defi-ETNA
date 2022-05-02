<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="{{ 'css/service.css' }}">
    <link rel="stylesheet" type="text/css" href="{{ 'css/header.css' }}">
    <title>Code Camp</title>
</head>

<body>
    @extends('layouts.header')
    @section('content')
        <div class="oneforall">
            <div class="styleheader"></div>
            <div class="contenairbloc">
                <h1>Trombinoscope</h1>

                <div class="contenairservice">
                    <h3>service</h3>
                </div>

                <div class="serviceclass">

                    <select id="choose" onchange="selectService(this)">
                        <option selected disabled>Choisir un service
                        <option value="Tous">Tous
                        <option value="Service Pédagogique">Service Pédagogique
                        <option value="Service Administratif">Service Administratif
                        <option value="Service Paie">Service Paie
                        <option value="Service RH">Service RH
                        <option value="Service com et admissions">Service com et admissions
                        <option value="Service Relations École-Entreprise">Service Relations École-Entreprise
                        <option value="Le Studio">Le Studio
                        <option value="Le BLU">Le BLU
                        <option value="Service d'entretien">Service d'entretien
                    </select>
                </div>
                <h5 id="demo"></h5>
                <div class="contenair">

                    <h1 class="title2">Responsable</h1>
                    <div class="contenairbloc2">
                        <div class="column1">
                        </div>
                    </div>
                    <div class="column">

                        @foreach ($profils as $profils)
                            <div class="taille" data-service="{{ $profils['service'] }}">

                                <img class="pp" src="{{ asset('storage/avatars/' . $profils->photo) }}">
                                <p>{{ $profils['nom'] }}</p>
                                <a href="/profil/{{ $profils['id'] }}">
                                    <input type="button" value="Voir Profil" class="showprofil">
                                </a>

                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        @endsection
</body>
<script src="../js/service.js">

</script>

</html>
