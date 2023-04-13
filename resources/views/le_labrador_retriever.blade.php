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
        Le <strong>Labrador Retriever </strong> serait le chien le plus populaire en Allemagne. Comptant parmi les chiens les plus adaptés aux familles avec enfants, c’est un formidable compagnon de jeu. Son caractère joyeux et amical contribue à son
        succès. Docile, intelligent et patient, il est un très bon chien guide d’aveugle. C’est d’ailleurs en Allemagne que s’est ouverte en 1915 la première école mondiale pour chiens guide d’aveugles.
    </div>
    <div class="row">

        <div class="col-md-4 col-sm-4">
            <br>
            <div class="card">
                <img src="{{ asset("img/la1.jpeg") }}" alt="Veille de Janvier 2020" style="width:90%">
            </div>
        </div>

        <div class="col-md-4 col-sm-4">
            <br>
            <div class="card">
                <img src="{{ asset("img/la2.jpeg") }}" alt="Veille de Janvier 2020" style="width:90%">
            </div>
        </div>

        <div class="col-md-4 col-sm-4 last-img">
            <br>
            <div class="card">
                <img src="{{ asset("img/la3.jpeg") }}" alt="Veille de Janvier 2020" style="width:90%">
            </div>
        </div>
        <div class="col-md-4 col-sm-4 last-img">
            <br>
            <div class="card">
                <img src="{{ asset("img/la4.jpeg") }}" alt="Veille de Janvier 2020" style="width:90%">
            </div>
        </div>


    </div>
    <div class="row">

        <div class="col-md-4 col-sm-4">
            <br>
            <div class="card">
                <img src="{{ asset("img/la5.jpeg") }}" alt="Veille de Janvier 2020" style="width:90%">
            </div>
        </div>

        <div class="col-md-4 col-sm-4">
            <br>
            <div class="card">
                <img src="{{ asset("img/la6.jpeg") }}" alt="Veille de Janvier 2020" style="width:90%">
            </div>
        </div>

        <div class="col-md-4 col-sm-4 last-img">
            <br>
            <div class="card">
                <img src="{{ asset("img/la7.jpeg") }}" alt="Veille de Janvier 2020" style="width:90%">
            </div>
        </div>
        <div class="col-md-4 col-sm-4 last-img">
            <br>
            <div class="card">
                <img src="{{ asset("img/la8.jpeg") }}" alt="Veille de Janvier 2020" style="width:90%">
            </div>
        </div>


    </div>

</body>

</html>
