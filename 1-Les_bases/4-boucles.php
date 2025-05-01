<?php

//La boucle While (tant que) continue de s'éxécuter tant que le résultat de la condition vaut false
$chiffre = null; //Je met null car, par défaut, la variable est vide

while($chiffre !== 10) { //Tant que le chiffre n'est pas égal à 10...
    $chiffre = (int)readline('Veuillez entrer un chiffre : '); //On demande de saisir une donnée
    //break;  On peut sortir de la boucle par la force même si la condition n'est pas remplie avec break 
}

echo 'Bravo, vous avez gagné !' . PHP_EOL; //Quand on sort de la boucle, c'est-à-dire quand la condition est remplie, on envoie un echo


//La boucle For (pour) continue de s'éxécuter tant que la variable de la condition doit être itérée
//J'ai une variable $i que j'initialise à zéro, tant que cette dernière est strictement inférieure à 10, je l'incrémente ($i++) 
for($i = 0; $i < 10; $i++) {
    echo "- $i \n"; //A chaque incrémentation/tour de boucle, j'affiche la valeur de $i en partant de zéro
}

//Si je veux afficher 10, je dois itérer la variable $i tant que cette dernière n'est pas égale à 10, elle sera donc incrémentée 11 fois
for($i2 = 0; $i2 <= 10; $i2++) { //Je dois déclarer '<=' au lieu de '<', la boucle s'arrêtera quand $i sera égale à 10
    echo "- $i2 \n";
}

//Je peux aussi itérer ma variable par d'autres chiffres :
for($i3 = 0; $i3 <= 10; $i3 += 2) { //+= est un raccourci qui signifie : $i3 = $i3 + 2;
    echo "- $i3 \n";
}

?>