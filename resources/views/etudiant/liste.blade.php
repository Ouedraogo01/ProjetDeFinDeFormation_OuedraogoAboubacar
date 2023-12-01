<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>GESTION DES ETUDIANTS</title>
    <link rel="stylesheet" href="bootstrap-5.3.1-dist/css/bootstrap.min.css">
</head>

<body>



    <div class="container text-center">
        <div class="row">
            <div class="col s12">
                <h1>VUE DES ETUDIANTS</h1>
                <a href="/ajouter" class="btn btn-primary m-3">Ajouter un étudiant</a>
                <a href="/tuteur" class="btn btn-secondary m-3">Liste des tuteurs</a>
                <a href="/tag" class="btn btn-dark m-3">Liste des tags</a>
                <a href="post" class="btn btn-warning m-3">Liste des posts</a>
                <hr>
                @if (session('status'))
                    <div class="alert alert-success">
                        {{session('status')}}
                    </div>
                @endif

                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th style="font-weight: bolder;">#</th>
                            <th style="font-weight: bolder;">Nom</th>
                            <th style="font-weight: bolder;">Prénom</th>
                            <th style="font-weight: bolder;">Classe</th>
                            <th style="font-weight: bolder;">Photo</th>
                            <th style="font-weight: bolder;">Ville</th>
                            <th style="font-weight: bolder;">Nationalite</th>
                            <th style="font-weight: bolder;">Groupe sanguin</th>
                            <th style="font-weight: bolder;">Tuteur</th>
                            <th style="font-weight: bolder;">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $ide = 1;
                        @endphp
                        @foreach ($etudiants as $etudiant)
                        <tr>
                            <td>{{ $ide}}</td>
                            <td>{{ $etudiant->nom}}</td>
                            <td>{{ $etudiant->prenom}}</td>
                            <td>{{ $etudiant->classe}}</td>
                            <td>
                                <img src="images/{{ $etudiant->photo }}" alt="Photo de l'étudiant" width="50" style="border-radius: 50%;">
                            </td>
                            <td>{{ $etudiant->ville->Nomville }}</td>
                            <td>{{ $etudiant->nationalite->NomNationalite }}</td>
                            <td>{{ $etudiant->groupe_sanguin->NomGroupe }}</td>
                            <td>{{ $etudiant->tuteur->nom }} {{ $etudiant->tuteur->prenom }}</td>
                        
                            <td>
                                <a href="/update-etudiant/{{ $etudiant->id }}" class="btn btn-info m-2">Update</a>
                                <a href="/delete-etudiant/{{ $etudiant->id }}" class="btn btn-danger m-2">Delete</a>
                            </td>
                        </tr>
                        @php
                            $ide += 1;
                        @endphp
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="bootstrap-5.3.1-dist/js/bootstrap.min.js"></script>
</body>

</html>