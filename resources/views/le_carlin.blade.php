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
            background-color: rgb(225, 244, 250);
            margin: auto;
            height: auto;
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
        Le <strong>Carlin </strong> serait la race la plus populaire de Russie. C’est un chien très aimant. Malicieux et farceur, au point d’avoir été choisi pour tenir le rôle d’un personnage gouailleur dans Men in Black 2, il adore passer du temps avec
        son maître. Il demande beaucoup d'attention et si on ne lui accorde pas toute celle qu’il souhaite, il peut vite faire des bêtises.
    </div>
    <div class="row">

        <div class="col-md-4 col-sm-4">
            <br>
            <div class="card">
                <img src="{{ asset("img/car1.jpeg") }}" alt="Veille de Janvier 2020" style="width:90%">
            </div>
        </div>

        <div class="col-md-4 col-sm-4">
            <br>
            <div class="card">
                <img src="{{ asset("img/car2.jpeg") }}" alt="Veille de Janvier 2020" style="width:90%">
            </div>
        </div>

        <div class="col-md-4 col-sm-4 last-img">
            <br>
            <div class="card">
                <img src="{{ asset("img/car3.jpeg") }}" alt="Veille de Janvier 2020" style="width:90%">
            </div>
        </div>
        <div class="col-md-4 col-sm-4 last-img">
            <br>
            <div class="card">
                <img src="{{ asset("img/car4.jpeg") }}" alt="Veille de Janvier 2020" style="width:90%">
            </div>
        </div>


    </div>
    <div class="row">

        <div class="col-md-4 col-sm-4">
            <br>
            <div class="card">
                <img src="{{ asset("img/car5.jpeg") }}" alt="Veille de Janvier 2020" style="width:90%">
            </div>
        </div>

        <div class="col-md-4 col-sm-4">
            <br>
            <div class="card">
                <img src="{{ asset("img/car6.jpeg") }}" alt="Veille de Janvier 2020" style="width:80%">
            </div>
        </div>

        <div class="col-md-4 col-sm-4 last-img">
            <br>
            <div class="card">
                <img src="{{ asset("img/car7.jpeg") }}" alt="Veille de Janvier 2020" style="width:90%">
            </div>
        </div>
        <div class="col-md-4 col-sm-4 last-img">
            <br>
            <div class="card">
                <img src="{{ asset("img/car8.jpeg") }}" alt="Veille de Janvier 2020" style="width:90%">
            </div>
        </div>


    </div>

</body>

</html>
