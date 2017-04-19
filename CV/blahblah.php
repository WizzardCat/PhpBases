

                        // Procédural PhP


<?php

// Déclaration de variables
$age = 26;
$message = " lol ";
$size = 150;
$name = "Happy";

?>

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
<p>hello world</p>
<?php
echo $message.$age;
?>
<p>cooolll</p>
<?php
/**
 * Created by PhpStorm.
 * User: Patate
 * Date: 19/04/2017
 * Time: 10:44
 */
// Println
echo "hello world <br>";
echo "bonjour, je m'appelle $name et j'ai $age ans et je mesure $size cm<br>";
echo 'Bonjour, je m\'appelle '.$name.' et j\'ai '.$age.' ans'.$message.'<br>';
echo "blabla $message <br>";

// Déclaration d'un echo en plus détaillé.
$nb1 = 1;
$nb2 = 2;
$result = $nb1+$nb2;

var_dump($result);
echo "<br>";

// Modulo (division euclidienne)
$nb3 = 1;
$nb4 = 2;
$modulo = $nb3%$nb4;

var_dump($modulo);
echo "<br>";

// Division basique
$nb5 = 1;
$nb6 = 2;
$division = $nb3/$nb4;

var_dump($division);
echo "<br>";

// boolean
$nb7 = 1;
$nb8 = 2;
$condition = true;
var_dump($condition);
echo "<br>";

if ($nb1 === $nb2){
    echo "blaaaaaah";
} else {
    echo "boooooo <br>";
}

switch ($age) {
    case $age == 26:
        echo 'on fait la teuffff <br>';
        break;
    case $age == 35:
        echo 'beuuuuuh';
}
// Quand on fait de l'objet et qu'on va chercher un static ou non il ne faut pas mettre "$" pour aller la chercher

for ($i = 0; $i <= 10; $i++){
    echo $i;
}
echo '<br>';
/*
// Boucle infinie
$i=true;
do {} while($i==true);
*/

// Tableau

$firstname = array('claire', 'bruno', 'serge', 'roger');
$names = ['claire', 'bruno', 'serge', 'roger'];

// Ne pas faire
$blum = ['claire', 10];

echo '<br>';

// Tableau associatif ou littéral
$note = ['claire' => 16, 'bruno' =>18];

// Parcourir un tableau

$tabs = array('Yuka, ', 'hiromi, ', 'Masato, ');
for ($i = 0, $j = count($tabs); $i<$j; $i++){
    echo $tabs[$i];
}

echo '<br>';

// Parcourir un tableau associatif, on ne peux pas faire un for normal pour le parcourir car les tableaux ne sont pas pris par les index mais par les valeurs.

// Juste la valeur
foreach ($tabs as $tab) {
    echo $tab;
}
/* ou poour afficher l'index

foreach ($tabs as $nom->$note){
    echo "$nom $note<br>";
}
*/
echo '<br>';

// Les fonctions
// ATTENTION!!! quand il est appelé dans une class c'est une méthode, sinon c'est une fonction

function decrisToi($name, $age){
    echo 'Miss'.$name.' vous avez '.$age.' ans.<br>';
}
echo decrisToi(' Konami', 32);

// Pour donner une taille par défault
function giveAge($size=150){
    echo 'Vous mesurez '.$size.'cm<br>';
}
 echo giveAge();

/*
        Les arguments par défault sont toujours à la fin.
function decrisToi($name, $size=null){
    if (is_null($size)){
        echo 'coucou'.$name<.' et '.$size<br>;
    }
}
 echo decrisToi();
 */

function givesAges(){
    $listArg = func_get_args();
    foreach ($listArg as $age){
        echo $age;
    }
}
givesAges(12, 14, 16, 18);
include ("contact.php");
// !== l'incluse va servir a inclure des morceaux de pages html(copier/coller), le require va interprêter le code à l'intérieur du fichier(copier/coller/executer)
require ("contact.php");

// Wordpress utilise beaucoup les includes.


echo "<br>";
?>

</body>
</html>

