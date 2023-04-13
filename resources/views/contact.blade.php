<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset("css/contact.css") }}">
</head>

<body>
    <div class="container">
        <h1>Formulaire de contact</h1>
        <form method="POST" action="/create">
            {{ csrf_field() }}
            <label for="fname">Nom & prénom</label>
            <input type="text" id="fname" name="firstname" placeholder="Votre nom et prénom">

            <label for="sujet">Sujet</label>
            <input type="text" id="sujet" name="sujet" placeholder="Le sujet de votre commentaire porte sur un chat ou un chiens?">

            <label for="emailAddress">Email</label>
            <input id="emailAddress" type="Email" name="Email" placeholder="Votre Email">

            <label for="sujet">commentaire</label>
            <textarea id="sujet" name="comment" placeholder="Votre commentaire" style="height:200px"></textarea>

            <input type="submit" value="Envoyer">
        </form>
    </div>

</body>

</html>
