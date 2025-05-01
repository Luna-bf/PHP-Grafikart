<?php

//La boucle while (tant que) continue de s'éxécuter tant que le résultat de la condition vaut false
$chiffre = null; //Je met null car, par défaut, la variable est vide

while($chiffre !== 10) { //Tant que le chiffre n'est pas égal à 10...
    $chiffre = (int)readline('Veuillez entrer un chiffre : '); //On demande de saisir une donnée
    //break;  On peut sortir de la boucle par la force même si la condition n'est pas remplie avec break 
}

echo 'Bravo, vous avez gagné !'; //Quand on sort de la boucle, c'est-à-dire quand la condition est remplie, on envoie un echo


?>