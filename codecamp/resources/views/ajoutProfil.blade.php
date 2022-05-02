<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title> Ajouter un Profil</title>
    <link rel="stylesheet" type="text/css" href="{{ '../css/ajout.css' }}">
    <link rel="stylesheet" type="text/css" href="{{ '../css/header.css' }}">
</head>

<body>
    @extends('.layouts.header')
    @section('content')
        <div class="content">
            <div class="styleheader"></div>
            <div class="w">
                <div class="title">
                    <h4>Créer un Profil</h4>
                </div>
                <div class="formulaire">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="/ajoutProfil" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div>
                            <label for="nom">
                                <p>Nom:</p>
                            </label>
                            <input type="text" id="nom" name="nom">
                        </div>
                        <br>
                        <div>
                            <label for="prenom">
                                <p>Prénom:</p>
                            </label>
                            <input type="text" id="prenom" name="prenom">
                        </div>
                        <br>
                        <div>
                            <label for="photo">
                                <p>Photo de Profil:</p>
                            </label>
                            <input type="file" id="photo" name="photo">
                        </div>
                        <br>
                        <div>
                            <label for="service">
                                <p>Service:</p>
                            </label>
                            <select required name="service">
                                <option value="Non-service">Choisissez un service</option>
                                <option value="Service Pédagogique">Service Pédagogique</option>
                                <option value="Service Administratif">Service Administratif</option>
                                <option value="Service Paie">Service Paie</option>
                                <option value="Service RH">Service RH</option>
                                <option value="Service com et admissions">Service com et admissions</option>
                                <option value="ervice Relations École-Entreprise">Service Relations École-Entreprise
                                </option>
                                <option value="Le Studio">Le Studio</option>
                                <option value="Le BLU">Le BLU</option>
                                <option value="Service d'entretien">Service d'entretien</option>
                            </select>
                        </div>
                        <br>
                        <div>
                            <label for="reponsable">
                                <p>Responsable:</p>
                            </label>
                            <select required name="responsable">

                                <option value="Membre Etna">Choisissez la catégorie du responsable</option>
                                <option value="employé">Employé(e)</option>
                                <option value="direction">Direction</option>
                                <option value="chefpedago">Responsable Pédagogique</option>
                                <option value="chefadministratif">Responsable Administratif</option>
                                <option value="chefpaie">Responsable Paie</option>
                                <option value="chefRH">Responsable RH</option>
                                <option value="chefcom">Responsable com</option>
                                <option value="chefreen">Responsable REE</option>
                                <option value="chefstudio">Responsable Studio</option>
                                <option value="chefBLU">Responsable BLU</option>
                                <option value="chefentretien">Responsable d'entretien</option>
                            </select>
                        </div>
                        <br>
                        <div>
                            <div>
                                <label for="tags">
                                    <p>Tags:</p>
                                </label>
                                <select required name="tags">
                                    <option value="Utilisateur">Choisissez les tags</option>
                                    <option value="Direction">Direction</option>
                                    <option value="Admin">Administration</option>
                                    <option value="Technique">Technique</option>
                                    <option value="Admission">Admission</option>
                                    <option value="Com">Com</option>
                                    <option value="Propreté">Propreté</option>
                                    <option value="Dev">Dev</option>
                                    <option value="Ip">Ip</option>
                                    <option value="Suivi">Suivi</option>
                                    <option value="Manager">Manager</option>
                                    <option value="Office">Office</option>
                                    <option value="Master">Master</option>
                                    <option value="Ap2Bachelor">Ap2Bachelor</option>
                                    <option value="Bachelor">Bachelor</option>
                                    <option value="Alternant"> Alternant</option>
                                    <option value="Assistant">Assistant</option>
                                    <option value="Asys">Asys</option>
                                    <option value="Ap">Ap</option>
                                </select>
                            </div>
                            <br>
                        </div>
                        <br>
                        <div>
                            <label for="telephone">
                                <p>Téléphone:</p>
                            </label>
                            <input type="number" id="telephone" name="telephone">
                        </div>
                        <br>
                        <div>
                            <label for="email">
                                <p>Mail Pro:</p>
                            </label>
                            <input type="email" id="email" name="email">
                        </div>
                        <input class="button" type="submit" value="Créer le profil">
                    </form>
                </div>
            </div>
        @endsection
</body>
<script src="../js/tags.js">
</script>

</html>
