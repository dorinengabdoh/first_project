<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset("css/paie.css") }}">

</head>

<body>
    <h1>Les formulaires</h1>

    <form method="post" action="statut">
        @csrf
        <fieldset>
            <legend>choix du produit a acheter</legend>
            <label for="nomID">produit choisit <small>(champ obligatoire)</small></label>
            <input type="text" name="choix" id="nomID" placeholder="Chien" required>
            @if($errors->has('choix'))
              <p>Le champ « choix » a une erreur</p>
            @endif

            <label for="mailID">input Email address<small>(champs obligatoire)</small></label>
            <input type="email" name="Email" id="mailID" placeholder="hello@gmail.com" required>
            @if($errors->has('Email'))
             <p>Le champ « Email » a une erreur</p>
            @endif

            <label for="motDePasseID">input your password</label>
            <input type="password" name="password" id="motDePasseID" placeholder="password" required>
            @if($errors->has('password'))
              <p>Le champ « password » a une erreur</p>
            @endif

        </fieldset>

        <fieldset>
            <legend>Choix du PAYEMENT</legend>
            <h2>choisir le mode de PAYEMENT</h2>
            <select name="mode_paiement" id="selectID">
                <option value="option1">OM(OrangeMoney)</option>
                <option value="option2">MOMO(MoblieMoney)</option>
                <option value="option3">BTC(bitcoin)</option>
                <option value="option4">pp(paypal)</option>
                <option value="option5">virement</option>
            </select>

            <label for="valeur_prod">input your valeur_prod</label>
            <input type="number" name="valeur_prod" placeholer="10000" required>
            @if($errors->has('valeur_prod'))
             <p>Le champ « valeur_prod » a une erreur </p>
            @endif

            <h2>connaissez-vous la valeur de votre produit??</h2>
            <label for="radioOUI">Oui</label>
            <input type="radio" name="radio" value="oui" id="radioOUI">
            <label for="radioNON">Non</label>
            <input type="radio" name="radio" value="non" id="radioNON">
            <h2>élément select</h2>

            <fieldset>
                <legend>information du compte</legend>
                <label for="nomID">les coordonnees du compte <small>(champ obligatoire)</small></label>
                <input type="text" name="coordonnees" id="coor" placeholder="Coordonnees" required>
                @if($errors->has('cooronnees'))
                 <p>Le champ « coordonnees » a une erreur</p>
                @endif

                <label for="MDP">motDePasse<small>(champs obligatoire)</small></label>
                <input type="password" name="MDP" id="mdp" placeholder="votre mot de passe" required>
                @if($errors->has('MDP'))
                 <p>Le champ « MDP» a une erreur</p>
                @endif

                <label for="motDePasseID">valeur transfert</label>
                <input type="number" name="valeur_transfert" id="valeur du transfert" placeholder="valeur du transfert" required>
                @if($errors->has('valeur_transfert'))
                  <p>Le champ «valeur_transfert» a une erreur</p>
                @endif
            </fieldset>
        </fieldset>
        <button type="submit">Valider</button>


    </form>

</body>

</html>
