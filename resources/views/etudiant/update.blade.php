<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>GESTION DES ETUDIANTS</title>
    <link rel="stylesheet" href="bootstrap-5.3.1-dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <h1>MODIFIER UN ETUDIANT</h1>
            <hr>

            @if (session('status'))
                <div class="alert alert-success">
                    {{session('status')}}
                </div>
            @endif

            <ul>
                @foreach ($errors->all() as $error)
                    <li class="alert alert-danger">{{ $error }}</li>
                @endforeach
            </ul>

            <form action="/update/traitement" method="POST" class="form-group" enctype="multipart/form-data">
                @csrf

                <input type="text" name="id" style="display: none;" value="{{ $etudiants->id }}">
             
                <div style="display: grid; grid-template-columns: 1fr 1fr;">
                    <div class="separartin m-2">
                        <div class="form-group">
                            <label for="Nom" style="font-weight:bolder">Nom</label>
                            <input type="text" class="form-control" id="Nom" name="nom" value="{{ $etudiants->nom }}">
                        </div>

                        <div class="form-group">
                            <label for="Prenom" style="font-weight:bolder">Prénom</label>
                            <input type="text" class="form-control" id="Prenom" name="prenom" value="{{ $etudiants->prenom }}">
                        </div>

                        <div class="form-group">
                            <label for="Classe" style="font-weight:bolder">Classe</label>
                            <input type="text" class="form-control" id="Classe" name="classe" value="{{ $etudiants->classe }}">
                        </div>

                        <div class="form-group mb-5 ml-5">
                            <label for="Tuteur" style="font-weight:bolder">Sélectionnez votre  Tuteur</label>
                            <br>
                            <select class="form-select" aria-label="Default select example" name="tuteur_id">
                                @foreach ($tuteurs as $tuteur)
                                    <option value="{{ $tuteur->id }}" {{ $etudiants->tuteur_id == $tuteur->id ? 'selected' : '' }}>
                                        {{ $tuteur->nom}} {{ $tuteur->prenom}} ({{ $tuteur->profession}}) {{ $tuteur->telephone}}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="m-2">
                        <div class="form-group">
                            <label for="Ville" style="font-weight:bolder">Choisissez votre  Ville</label>
                            <br>
                            <select class="form-select" aria-label="Default select example" name="ville_id" id="ville_id">
                                @foreach ($villes as $ville)
                                    <option value="{{ $ville->id }}" {{ $etudiants->ville_id == $ville->id ? 'selected' : '' }}>
                                        {{ $ville->Nomville }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="nationalite" style="font-weight:bolder">Votre  Nationalite</label>
                            <br>
                            <select class="form-select" aria-label="Default select example" name="nationalite_id" id="nationalite_id">
                                @foreach ($nationalites as $nationalite)
                                    <option value="{{ $nationalite->id }}" {{ $etudiants->nationalite_id == $nationalite->id ? 'selected' : '' }}>
                                        {{ $nationalite->NomNationalite }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="groupesanguin" style="font-weight:bolder">Votre  Groupe sanguin</label>
                            <br>
                            <select class="form-select" aria-label="Default select example" name="groupe_sanguin_id" id="groupe_sanguin_id">
                                @foreach ($groupesanguins as $groupesanguin)
                                    <option value="{{ $groupesanguin->id }}" {{ $etudiants->groupe_sanguin_id == $groupesanguin->id ? 'selected' : '' }}>
                                        {{ $groupesanguin->NomGroupe }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group mt-2">
                            <label for="Photo_actuelle" style="font-weight:bolder">Votre photo de profile actuelle</label>
                            <br>
                            <img src="images/1697720136.jpg" alt="Photo de l'étudiant" width="50" style="border-radius: 50%;">
                        </div>

                        <div class="form-group mt-2">
                            <label for="Photo" style="font-weight:bolder">Télécharger un nouveau profile si vous le voulez</label>
                            <br>
                            <input type="file" class="form-control" id="photo" name="photo">
                        </div>
                    </div>
                </div>

                <br>
                <button type="submit" class="btn btn-primary">MODIFIER UN ETUDIANT</button>

                <br> <br />
                <a href="/etudiant" class="btn btn-danger"> Revenir à la liste des étudiants</a>
            </form>
        </div>
    </div>

    <script src="bootstrap-5.3.1-dist/js/bootstrap.min.js"></script>

</body>

</html>