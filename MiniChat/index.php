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



<form method="post" action="index.php">

    <p>Entrez votre pseudo </p>
    <input type="text" name="identifiant"/>
    <p>Mot de passe</p>
    <input type="text" name="password"/>

    
    <br>

    <p>Entrez un message</p>  
    <textarea name="message" rows="8" cols="45">
        Votre message ici.
    </textarea>
    
    <br>
    <br>
    <input type="submit" value="valider"/>

    <br>
    <br>
    
    <a href="formulary.php" target="_blank">Inscription</a>

</form>
<?php
echo 'identifiant '.$_POST['identifiant'].' ! ';
echo 'Message'.$_POST['message']. ' ! ';

?>

</body>    
</html>