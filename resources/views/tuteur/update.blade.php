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
            <h1>MODIFIER UN TUTEUR</h1>
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

                <input type="text" name="id" style="display: none;" value="{{ $tuteurs->id }}">
             
                <div class="form-group">
                    <label for="Nom" style="font-weight:bolder">Nom</label>
                    <input type="text" class="form-control" id="Nom" name="nom" value="{{ $tuteurs->nom }}">
                </div>

                <div class="form-group">
                    <label for="Prenom" style="font-weight:bolder">Prénom</label>
                    <input type="text" class="form-control" id="Prenom" name="prenom" value="{{ $tuteurs->prenom }}">
                </div>

                <div class="form-group">
                    <label for="Profession" style="font-weight:bolder">Proféssion</label>
                    <input type="text" class="form-control" id="Profession" name="profession" value="{{ $tuteurs->profession }}">
                </div>

                <div class="form-group">
                    <label for="Telephone" style="font-weight:bolder">Téléphone</label>
                    <input type="text" class="form-control" id="Telephone" name="telephone" value="{{ $tuteurs->telephone }}">
                </div>

                <br>
                <button type="submit" class="btn btn-primary">MODIFIER UN TUTEUR</button>

                <br> <br />
                <a href="/tuteur" class="btn btn-danger"> Revenir à la liste des tuteurs</a>
            </form>

            
        </div>
    </div>

    <script src="bootstrap-5.3.1-dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>

</html>