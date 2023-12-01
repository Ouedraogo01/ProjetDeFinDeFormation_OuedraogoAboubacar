
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>GESTION DES TUTEURS</title>
    <link rel="stylesheet" href="bootstrap-5.3.1-dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <h1>AJOUTER UN TUTEUR</h1>
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

            <form action="/ajouterTuteur/traitement" method="POST" class="form-group" enctype="multipart/form-data">
                @csrf

                    <div class="form-group">
                        <label for="Nom" style="font-weight: bolder">Nom</label>
                        <input type="text" class="form-control" id="nom" name="nom">
                    </div>
                    <div class="form-group">
                        <label for="Prenom" style="font-weight: bolder">Prénom</label>
                        <input type="text" class="form-control" id="prenom" name="prenom">
                    </div>
                    <div class="form-group">
                        <label for="Profession" style="font-weight: bolder">Proféssion</label>
                        <input type="text" class="form-control" id="profesion" name="profession">
                    </div>
                    <div class="form-group">
                        <label for="Telephone" style="font-weight: bolder">Téléphone</label>
                        <input type="text" class="form-control" id="telephone" name="telephone">
                    </div>

                <br>
                <button type="submit" class="btn btn-primary">AJOUTER UN TUTEUR</button>

                <br> <br />
                <a href="/tuteur" class="btn btn-danger">Revenir à la liste des tuteurs</a>
            </form>
        </div>
    </div>

    <script src="bootstrap-5.3.1-dist/js/bootstrap.min.js"></script>
</body>

</html>
