<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset("css/test.css") }}">
    <style>
        .inpu{
            background-color: #1255a2;
            color: white;
            padding: 14px 40px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            align-items: center;
            margin-left: 81%;
        }

        .inpu:hover {
            background-color: #1872D9;
        }
    </style>
</head>

<body>
    <div class="elle">
        <h1 class="b"> <strong> WELCOME !!!
              VOTRE SATISFACTION DEMEURE NOTRE PRIORITE</strong> </h1>
    </div>
    <a href="tes" class="inpu">COMMENTAIRE</a>
    <section class="feature">
        <div class="container">
            <div class="row">

                <div class="col-md-4 col-sm-4">
                    <br>
                    <div class="card">
                        <img src="{{ asset("img/Le Beagle.jpg") }}" alt="Veille de Janvier 2020" style="width:70%">
                        <div class="container">
                            <h4><b> <strong>Un Beagle  :</strong></b></h4>
                            <a class="pou" href="beagle">Description</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-4">
                    <br>
                    <div class="card">
                        <img src="{{ asset("img/Le Berger allemand.jpg") }}" alt="Veille de Janvier 2020" style="width:70%">
                        <div class="container">
                            <h4><b> <strong>Le Berger allemand  :</strong> </b></h4>
                            <a class="pou" href="le_berger_allemand">Description</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-4 last-img">
                    <br>
                    <div class="card">
                        <img src="{{ asset("img/Le Bouledogue.jpg") }}"alt="Veille de Janvier 2020" style="width:70%">
                        <div class="container">
                            <h4><b> <strong>Le Bouledogue :</strong> </b></h4>
                            <a class="pou" href="bouledogue.html">Description</a>
                        </div>
                    </div>
                </div>


            </div>
            <div class="lol">
                <div class="row">

                    <div class="col-md-4 col-sm-4">
                        <br>
                        <div class="card">
                            <img src="{{asset("img/Le Cane Corso.jpg") }}" alt="Veille de Janvier 2020" style="width:70%">
                            <div class="container">
                                <h4><b> <strong>Le Cane Corso :</strong> </b></h4>
                                <a class="pou" href="le_cane_corso">Description</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-4">
                        <br>
                        <div class="card">
                            <img src="{{asset("img/Le Caniche.jpg") }}" alt="Veille de Janvier 2020" style="width:70%">
                            <div class="container">
                                <h4><b> <strong>Le Caniche :</strong> </b></h4>
                                <a class="pou" href="le_caniche">Description</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-4 last-img">
                        <br>
                        <div class="card">
                            <img src="{{asset("img/Le Carlin.jpg") }}" alt="Veille de Janvier 2020" style="width:70%">
                            <div class="container">
                                <h4><b> <strong>Le Carlin :</strong> </b></h4>
                                <a class="pou" href="le_carlin">Description</a>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
            <div class="hola">
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <br>
                        <div class="card">
                            <img src="{{asset("img/Le Golden Retriever.jpg") }}" alt="Veille de Janvier 2020" style="width:70%">
                            <div class="container">
                                <h4><b> <strong>Le Golden Retriever :</strong> </b></h4>
                                <a class="pou" href="le_golden_getriever">Description</a> </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-4">
                        <br>
                        <div class="card">
                            <img src="{{asset("img/Le Labrador Retriever.jpg") }}" alt="Veille de Janvier 2020" style="width:70%">
                            <div class="container">
                                <h4><b> <strong>Le Labrador Retriever :</strong> </b></h4>
                                <a class="pou" href="le_labrador_retriever">Description</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-4 last-img">
                        <br>
                        <div class="card">
                            <img src="{{asset("img/Le Rottweiler.jpg") }}"alt="Veille de Janvier 2020" style="width:70%">
                            <div class="container">
                                <h4><b> <strong>Le Rottweiler</strong> </b></h4>
                                <a class="pou" href="le_rottweiler">Description</a> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End row -->
        <!-- End container -->
    </section>
</body>

</html>
