<!DOCTYPE html>
<html>
    <head>
        <title>MySQL</title>
        <meta charset="utf-8">
        <style>
            div{
                font-size: 22px;
            }
        </style>
    </head>
    <body>
        <div>
            <?php
           if(DB::connection()->getPdo()){
            echo"Connexion reussie-a-la-base-de-donnees.=>";
                      DB::connection()->getDatabaseName();
           }

            ?>
        </div>
    </body>
</html>
