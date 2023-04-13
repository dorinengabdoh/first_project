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
            background-color: bisque;
            margin: auto;
            height: auto;
        }

        .row {
            display: flex;
            justify-content: center;
            align-items: center;
            margin: auto;
            height: auto;
            padding: 65px;
            width: 1000px;
        }
    </style>
</head>

<body>
    <div class="dori">
        Le <strong> Beagle  </strong> fait partie des races de chiens les plus populaires en Pologne, pays qui compte un chien pour 5 habitants, un des ratios les plus élevés d’Europe. C’est un chien qui a besoin de beaucoup d’exercice. Sportif, il convient
        particulièrement aux personnes qui cherchent à faire du sport avec leur compagnon à quatre pattes (cani-cross ou VTT par exemple), d’autant plus qu’il peut s’ennuyer rapidement. L’inqualifiable Snoopy est inspiré de cette race, très liée à son
        groupe social. dose quotidienne d’exercice.
    </div>
    <div class="row">

        <div class="col-md-4 col-sm-4">
            <br>
            <div class="card">
                <img src="{{ asset("img/b1.jpg") }}" alt="Veille de Janvier 2020" style="width:90%">
            </div>
        </div>

        <div class="col-md-4 col-sm-4">
            <br>
            <div class="card">
                <img src="{{ asset("img/b2.jpg") }}" alt="Veille de Janvier 2020" style="width:96%">
            </div>
        </div>

        <div class="col-md-4 col-sm-4 last-img">
            <br>
            <div class="card">
                <img src="{{ asset("img/b4.jpg") }}" alt="Veille de Janvier 2020" style="width:90%">
            </div>
        </div>
        <div class="col-md-4 col-sm-4 last-img">
            <br>
            <div class="card">
                <img src="{{ asset("img/b7.jpeg") }}" alt="Veille de Janvier 2020" style="width:90%">
            </div>
        </div>


    </div>
    <div class="row">

        <div class="col-md-4 col-sm-4">
            <br>
            <div class="card">
                <img src="{{ asset("img/b4.jpg") }}" alt="Veille de Janvier 2020" style="width:90%">
            </div>
        </div>

        <div class="col-md-4 col-sm-4">
            <br>
            <div class="card">
                <img src="{{ asset("img/b5.jpg") }}" alt="Veille de Janvier 2020" style="width:90%">
            </div>
        </div>

        <div class="col-md-4 col-sm-4 last-img">
            <br>
            <div class="card">
                <img src="{{ asset("img/b6.jpg") }}" alt="Veille de Janvier 2020" style="width:90%">
            </div>
        </div>
        <div class="col-md-4 col-sm-4 last-img">
            <br>
            <div class="card">
                <img src="{{ asset("img/b8.jpeg") }}" alt="Veille de Janvier 2020" style="width:96%">
            </div>
        </div>


    </div>

</body>

</html>
