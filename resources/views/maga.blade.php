<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset("css/mega.css") }}">
    <style>
        .row {
            display: flex;
            justify-content: center;
            align-items: center;
            margin: auto;
            height: auto;
            padding: 20px;
            width: 1000px;
        }
    </style>
</head>

<body>
    <div class="elle">
        <nav id="menu">
            <ul class="unlisted flex gap-16 jcc bold">
                <li class="nav-item relative"><a href="" class="p-21 block dropdown">ACCUEIL</a>
                    <ul class="unlisted absolute">
                        <li class="nav-items"><a href="{{('test')}}" class="p-22 block">DES CHIENS</a></li>
                        <li class="nav-items"><a href="{{('chat')}}" class="p-22 block">DES CHATS</a></li>
                    </ul>
                </li>

                <li class="nav-item"><a href="{{('tes')}}" class="p-21 block">contact</a></li>
                <li class="nav-item  relative"><a href="{{('hello')}}" class="p-21 block dropdown">PAYEMENT</a>
                </li>
            </ul>
        </nav>
        <h class="b"> <strong> WELCOME !!!
              TOUT SAVOIR SUR LES CHIENS ET LES CHATS</strong> </h>
    </div>
    <div class="row">

        <div class="col-md-4 col-sm-4">
            <br>
            <div class="card">
                <img src="{{ asset("img/cc1.jpeg") }}" alt="Veille de Janvier 2020" style="width:94%">
            </div>
        </div>

        <div class="col-md-4 col-sm-4">
            <br>
            <div class="card">
                <img src="{{ asset("img/cc2.jpeg") }}" alt="Veille de Janvier 2020" style="width:94%">
            </div>
        </div>

        <div class="col-md-4 col-sm-4 last-img">
            <br>
            <div class="card">
                <img src="{{ asset("img/cc3.jpeg") }}" alt="Veille de Janvier 2020" style="width:95%">
            </div>
        </div>
        <div class="col-md-4 col-sm-4 last-img">
            <br>
            <div class="card">
                <img src="{{ asset("img/cc4.jpeg") }}" alt="Veille de Janvier 2020" style="width:94%">
            </div>
        </div>


    </div>
    <div class="row">

        <div class="col-md-4 col-sm-4">
            <br>
            <div class="card">
                <img src="{{ asset("img/cc5.jpeg") }}" alt="Veille de Janvier 2020" style="width:98%">
            </div>
        </div>

        <div class="col-md-4 col-sm-4">
            <br>
            <div class="card">
                <img src="{{ asset("img/cc6.jpeg") }}" alt="Veille de Janvier 2020" style="width:95%">
            </div>
        </div>

        <div class="col-md-4 col-sm-4 last-img">
            <br>
            <div class="card">
                <img src="{{ asset("img/cc7.jpeg") }}" alt="Veille de Janvier 2020" style="width:95%">
            </div>
        </div>
        <div class="col-md-4 col-sm-4 last-img">
            <br>
            <div class="card">
                <img src="{{ asset("img/cc8.jpeg") }}" alt="Veille de Janvier 2020" style="width:98%">
            </div>
        </div>


    </div>
    <h5>NB:Veuillez allez sur l'option <strong>ACCUEIL</strong> pour plus de decouverte</h5>

</body>

</html>
