<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .dori {
            text-align: center;
            float: left;
            position: absolute;
            background-color: rgb(195, 152, 201);
            margin: auto;
            height: auto;
            color: rgb(14, 13, 13);
        }

        .row {
            display: flex;
            justify-content: center;
            align-items: center;
            margin: auto;
            height: auto;
            padding: 60px;
            width: 1000px;
        }
    </style>
</head>

<body>
    <div class="dori">
        Le <strong>Rottweiler </strong> est populaire en Italie et, plus largement, à travers le monde grâce à ses talents de chien de garde : il donnerait sa vie pour protéger son maître et sa maison. Joueur, il est un bon compagnon pour les enfants.
        Il faudra toutefois prendre quelques précautions car c’est un chien plein de force, sans qu’il en ait bien conscience ; il peut donc faire des maladresses dans le feu de l’action.
    </div>
    <div class="row">

        <div class="col-md-4 col-sm-4">
            <br>
            <div class="card">
                <img src="{{ asset("img/ro1.jpeg") }}" alt="Veille de Janvier 2020" style="width:90%">
            </div>
        </div>

        <div class="col-md-4 col-sm-4">
            <br>
            <div class="card">
                <img src="{{ asset("img/ro2.jpeg") }}" alt="Veille de Janvier 2020" style="width:90%">
            </div>
        </div>

        <div class="col-md-4 col-sm-4 last-img">
            <br>
            <div class="card">
                <img src="{{ asset("img/ro3.jpeg") }}" alt="Veille de Janvier 2020" style="width:90%">
            </div>
        </div>
        <div class="col-md-4 col-sm-4 last-img">
            <br>
            <div class="card">
                <img src="{{ asset("img/ro4.jpeg") }}" alt="Veille de Janvier 2020" style="width:90%">
            </div>
        </div>


    </div>
    <div class="row">

        <div class="col-md-4 col-sm-4">
            <br>
            <div class="card">
                <img src="{{ asset("img/ro5.jpeg") }}" alt="Veille de Janvier 2020" style="width:90%">
            </div>
        </div>

        <div class="col-md-4 col-sm-4">
            <br>
            <div class="card">
                <img src="{{ asset("img/ro6.jpeg") }}" alt="Veille de Janvier 2020" style="width:90%">
            </div>
        </div>

        <div class="col-md-4 col-sm-4 last-img">
            <br>
            <div class="card">
                <img src="{{ asset("img/ro7.jpeg") }}" alt="Veille de Janvier 2020" style="width:90%">
            </div>
        </div>
        <div class="col-md-4 col-sm-4 last-img">
            <br>
            <div class="card">
                <img src="{{ asset("img/ro8.jpeg") }}" alt="Veille de Janvier 2020" style="width:90%">
            </div>
        </div>


    </div>

</body>

</html>
