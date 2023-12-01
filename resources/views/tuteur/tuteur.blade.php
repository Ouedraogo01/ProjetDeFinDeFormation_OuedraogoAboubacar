<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>GESTION DES TUTEURS</title>
    <link rel="stylesheet" href="bootstrap-5.3.1-dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container text-center">
        <div class="row">
            <div class="col s12">
                <h1>VUE DES TUTEURS</h1>
                <a href="/ajouterTuteur" class="btn btn-primary m-3">Ajouter un tuteur</a>
                <a href="/etudiant" class="btn btn-secondary m-3">Liste des étudiants</a>
                <a href="/post" class="btn btn-warning m-3">Liste des posts</a>
                <a href="/tag" class="btn btn-dark m-3">Liste des tags</a>
                <hr>
                @if (session('status'))
                    <div class="alert alert-success">
                        {{session('status')}}
                    </div>
                @endif

                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nom</th>
                            <th>Prénom</th>
                            <th>Profession</th>
                            <th>Téléphone</th>
                            <th>Etudiants à la charge</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $ide = 1;
                        @endphp
                        @foreach ($tuteurs as $tuteur)
                            <tr>
                                <td>{{ $ide}}</td>
                                <td>{{ $tuteur->nom}}</td>
                                <td>{{ $tuteur->prenom}}</td>
                                <td>{{ $tuteur->profession}}</td>
                                <td>{{ $tuteur->telephone}}</td>
                                <td>
                                    @foreach ($tuteur->etudiants as $etudiant)
                                        {{ $etudiant->nom }} {{ $etudiant->prenom }} ({{ $etudiant->classe }})
                                        <br>
                                    @endforeach
                                </td> 
                                <td>
                                    <a href="/update-tuteur/{{ $tuteur->id}}" class="btn btn-info">Update</a>
                                    <a href="/delete-tuteur/{{ $tuteur->id }}" class="btn btn-danger">Delete</a>
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