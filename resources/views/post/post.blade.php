<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>GESTION DES POSTS</title>
    <link rel="stylesheet" href="bootstrap-5.3.1-dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container text-center">
        <div class="row">
            <div class="col s12">
                <h1>VUE DES POSTS</h1>
                <a href="/ajouterPost" class="btn btn-primary m-3">Ajouter un post</a>
                <a href="/tuteur" class="btn btn-secondary m-3">Liste des tuteurs</a>
                <a href="/etudiant" class="btn btn-warning m-3">Liste des étudiants</a>
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
                            <th style="font-weight: bolder;">#</th>
                            <th style="font-weight: bolder;">Titre Posts</th>
                            <th style="font-weight: bolder;">Contenu</th>
                            <th style="font-weight: bolder;">Tags associés</th>
                            <th style="font-weight: bolder;">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $ide = 1;
                        @endphp
                        @foreach ($posts as $post)
                        <tr>
                            <td>{{ $ide}}</td>

                            <td> {{ $post->titre}} </td>
                            <td> {{ $post->content}} </td>
                            <td>
                                @foreach ($post->tags as $tag)
                                    {{ $tag->nom}}
                                    <br>
                                @endforeach
                            </td>
                        
                            <td>
                                <a href="/updatePost-post/{{ $post->id }}" class="btn btn-info m-2">Update</a>
                                <a href="/deletePost-post/{{ $post->id }}" class="btn btn-danger m-2">Delete</a>
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