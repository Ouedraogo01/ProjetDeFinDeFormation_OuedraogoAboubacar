
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
            <h1>AJOUTER UN ETUDIANT</h1>
            <hr>

            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif

            <ul>
                @foreach ($errors->all() as $error)
                    <li class="alert alert-danger">{{ $error }}</li>
                @endforeach
            </ul>

            <form action="/ajouter/traitement" method="POST" class="form-group" enctype="multipart/form-data">
                @csrf

                <div style="display: grid; grid-template-columns: 1fr 1fr;">
                    <div class="separartin m-2">
                        <div class="form-group m-3">
                            <label for="Nom" style="font-weight:500">Nom</label>
                            <input type="text" class="form-control" id="Nom" name="nom">
                        </div>

                        <div class="form-group m-3">
                            <label for="Prenom" style="font-weight:500">Prénom</label>
                            <input type="text" class="form-control" id="Prenom" name="prenom">
                        </div>

                        <div class="form-group m-3">
                            <label for="Classe" style="font-weight:500">Classe</label>
                            <input type="text" class="form-control" id="Classe" name="classe">
                        </div>

                        <div class="form-group m-3">
                            <label for="Tuteur" style="font-weight:500">Sélectionnez votre  Tuteur</label>
                            <br>
                            <select name="tuteur_id" id="tuteur_id">
                                <option value="selected">Choisissez Votre tuteur ici !</option>
                                @foreach ($tuteurs as $tuteur)
                                    <option value="{{ $tuteur->id }}">
                                        {{ $tuteur->nom }} {{ $tuteur->prenom }} ({{ $tuteur->profession }}) {{ $tuteur->telephone }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="m-2">
                        <div class="form-group m-3">
                            <label for="Ville" style="font-weight:500">Choisissez votre  Ville</label>
                            <br>
                            <select name="ville_id" id="ville_id">
                                <option value="selected">Choisissez Votre ville ici !</option>
                                @foreach ($villes as $ville)
                                    <option value="{{ $ville->id }}">
                                        {{ $ville->Nomville }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group m-3">
                            <label for="nationalite" style="font-weight:500">Votre  Nationalite</label>
                            <br>
                            <select name="nationalite_id" id="nationalite_id">
                                <option value="selected">Choisissez Votre nationalite ici !</option>
                                @foreach ($nationalites as $nationalite)
                                    <option value="{{ $nationalite->id }}">
                                        {{ $nationalite->NomNationalite }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group m-3">
                            <label for="groupesanguin" style="font-weight:500">Votre  Groupe sanguin</label>
                            <br>
                            <select name="groupe_sanguin_id" id="groupe_sanguin_id">
                                <option value="selected">Choisissez Votre groupe sanguin ici !</option>
                                @foreach ($groupesanguins as $groupesanguin)
                                    <option value="{{ $groupesanguin->id }}">
                                        {{ $groupesanguin->NomGroupe }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group mt-2 m-3">
                            <label for="Photo" style="font-weight:500">Télécharger votre photo de profile</label>
                            <input type="file" class="form-control" id="photo" name="photo">
                        </div>
                    </div>
                </div>

                <br>
                <button type="submit" class="btn btn-primary">AJOUTER UN ETUDIANT</button>

                <br> <br />
                <a href="/etudiant" class="btn btn-danger">Revenir à la liste des étudiants</a>
            </form>
        </div>
    </div>

    <script src="bootstrap-5.3.1-dist/js/bootstrap.min.js"></script>
</body>

</html>
