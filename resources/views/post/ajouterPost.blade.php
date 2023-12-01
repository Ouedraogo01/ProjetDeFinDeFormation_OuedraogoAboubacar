
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>GESTION DES POSTS</title>
    <link rel="stylesheet" href="bootstrap-5.3.1-dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <h1>AJOUTER UN POST</h1>
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

            <form action="/ajouterPost/traitement" method="POST" class="form-group" enctype="multipart/form-data">
                @csrf
                <div style="display: grid; grid-template-columns: 1fr 1fr;">
                    <div>
                        <div class="form-group m-3">
                            <label for="Titre" style="font-weight:500">Titre du post</label>
                            <input type="text" class="form-control" id="titre" name="titre">
                        </div>

                        <div class="form-group m-3">
                            <label for="Titre" style="font-weight:500">Contenu du post</label>
                            <textarea rows="10" name="content" class="form-control"></textarea>
                        </div>

                        {{-- <div class="form-group m-3">
                            <label for="Etudiant" style="font-weight:500">Choisissez les tags</label>
                            <br>
                            <select name="tag_id" id="tag_id">
                                <option value="selected">Choisissez le tag ici !</option>
                                @foreach ($tags as $tag)
                                    <option value="{{ $tag->id }}">
                                        {{ $tag->nom }}
                                    </option>
                                @endforeach
                            </select>
                        </div> --}}

                        <div class="form-group m-3">
                            <label for="tag" style="font-weight:500">Choisissez les tags :</label>
                            <br>
                                @foreach ($tags as $tag)
                                    <input type="checkbox" name="tags[]" value="{{ $tag->id }}">{{ $tag->nom }}
                                    <br>
                                @endforeach
                        </div>


                    </div>
                </div>

                <br>
                <button type="submit" class="btn btn-primary">AJOUTER UN POST</button>

                <br> <br />
                <a href="/post" class="btn btn-danger">Revenir à la liste des posts</a>
            </form>
        </div>
    </div>

    <script src="bootstrap-5.3.1-dist/js/bootstrap.min.js"></script>
</body>

</html>
