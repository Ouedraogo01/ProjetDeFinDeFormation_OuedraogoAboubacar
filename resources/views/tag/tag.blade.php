<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>GESTION DES TAGS</title>
    <link rel="stylesheet" href="bootstrap-5.3.1-dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container text-center">
        <div class="row">
            <div class="col s12">
                <h1>VUE DES TAGS</h1>
                <a href="/ajouterTag" class="btn btn-primary m-3">Ajouter un tag</a>
                <a href="/etudiant" class="btn btn-secondary m-3">Liste des étudiants</a>
                <a href="/tuteur" class="btn btn-dark m-3">Liste des tuteurs</a>
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
                            <th>#</th>
                            <th>Nom du tag</th>
                            <th>Posts associé</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $ide = 1;
                        @endphp
                        @foreach ($tags as $tag)
                            <tr>
                                <td>{{ $ide}}</td>
                                <td>{{ $tag->nom}}</td>
                                <td>
                                    @foreach ($tag->posts as $post)
                                        {{ $post->titre}}
                                        <br>
                                    @endforeach
                                </td>
                                <td>
                                    <a href="/updateTag-tag/{{ $tag->id}}" class="btn btn-info">Update</a>
                                    <a href="/deleteTag-tag/{{ $tag->id }}" class="btn btn-danger">Delete</a>
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