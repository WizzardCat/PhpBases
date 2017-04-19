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

<?php


    echo 'Bonjour '.$_POST['pseudo'].' ! ';
 // faire un isset permet de tester la variable NEVER FORGET NEVER TRUST USER

/*
 if (isset($_POST['name'])){
         echo 'Bonjour '.$_POST['pseudo'].' ! ';
    } else {
     echo 'Bonjour il faut renseigner un nom';
    }
*/

?>

</body>
</html>
