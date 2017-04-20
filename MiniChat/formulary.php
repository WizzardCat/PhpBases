<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<p>Identifiant
    <input type="text" name="pseudo"/>
</p>

<p>Mot de passe
    <input type="password" name="password"/>
</p>

<p>Adresse mail
    <input type="email" name="mail"/>
</p>

<p>Vous êtes ?
<select name="select">
    <option value="...">...</option>
    <option value="femme">Une femme</option>
    <option value="homme">Un homme</option>
    </select>
</p>

<form method="post" action="formulary.php">

<p>Ma tante me demande de trouver un endroit pour y entreposer 667 noix. A la cave il y a de la place pour 595, à la remise
 il y a la place pour 337. Qu'est-ce que je fais ? Je les ?... Allez on cherche bon dieu ! Je les....?</p>

<input type="radio" name="oui" value="oui" /> <label for="oui">Oui</label>
<input type="radio" name="non" value="non" /><label for="non">Non</label>
<input type="radio" name="zbradaraldjan" value="Zbradaraldjan" ><label for="Zbradaraldjan"/>Zbradaraldjan l'grenier</label>
<input type="radio" name="HODOR!!!" value="HODOR!!!" /><label for="HODOR!!!">HODOR!!!</label>
</form>

<p>Décrivez-vous</p>
<textarea name="message" rows="8" cols="45">
    Votre message ici.
</textarea>
<br>
<br>
<input type="checkbox" name="case" id="case" /> <label for="case">Je certifie avoir plus de 15ans.</label>
<br>
<input type="checkbox" name="case" id="case" /> <label for="case">J'ai bien pris connaissance des <a href="cgu.php" target="_blank">CGU du site</a>
<br>
<br>
<input type="submit" value="Valider">

<?php

echo 'identifiant '.$_POST['identifiant'].'!';
echo 'password'.$_POST['password'].'!';
echo 'email'.$_POST['email'].'!';
echo 'select'$_POST['select'].'!';
echo 'radio'$_POST['radio'].'!';
echo 'textarea'.$_POST['textArea'].'!';
echo 'checkbox'$_POST['checkbox'].'!';

?>

</body>
</html>
