<?php

//La fonction readline() permet de rendre le script interactif, à voir dans le terminal
$note = readline('Veuillez entrer votre note : ');

//Je met ma condition entre les parenthèses :
if($note > 10) { //Si la valeur de $note est supérieure à 10...
    echo 'Bravo, vous avez la moyenne' . PHP_EOL ; //Alors on éxécute ce code
} elseif($note == 10) { //Sinon si la valeur est égale à 10...
    echo 'Vous avez tout juste la moyenne' . PHP_EOL ;
} else { //Sinon (si la condition si-dessus renvoie false)...
    echo 'Dommage, vous n\'avez pas la moyenne' . PHP_EOL ; //Alors on éxécute ce code à la place
};

/*
  Ici, l'opérateur de comparaison '===' dans le elseif renvoie false car il vérifie aussi le type, ici $note est une valeur
  rentrée par l'utilisateur par l'intermédiaire de la fonction readline(), soit une chaine de caractères.
  Cela signifie que la valeur de $note devient elle aussi une chaine de caractères et pas un nombre entier,
  comme l'opérateur de comparaison '===' compare la valeur et le type, le résultat renvoie false.

  Cependant, l'opérateur de comparaison '==' compare uniquement la valeur, par exemple si je fais :
  "0" == 0, le résultat renverra true car les deux valeurs on le même chiffre, malgré le fait qu'elles aient un type différent

  Pour terminer, l'opérateur de comparaison '=' renverra toujours true, si je change l'opérateur de comparaison '==' en '='
  dans le elseif, toute donnée inférieure à 10 renverra : 'Vous avez tout juste la moyenne'.

  Conclusion : Dans la majorité des cas, il est conseillé d'utiliser l'opérateur de comparaison stricte (===) mais dans ce cas là,
  je vais utiliser l'opérateur d'égalité lâche (==).
*/


//Je peux aussi tester une collection d'actions :
//Ici (int) va convertir toutes les données saisies en nombre entier, si j'entre une lettre, cette dernière sera transformée en 0
$actions = (int)readline('Veuillez entrer une action : (1: Attaquer ; 2: Défendre ; 3: Je passe mon tour) : ');

/* if($actions === 1) {
    echo 'J\'attaque';
} elseif($actions === 2) {
    echo 'Je défends';
} else {
    echo 'Je passe mon tour';
}; */

//Pour me simplifier la tâche, je peux le faire avec la condition Switch :
switch($actions) { //Ici ma condition est ma variable $actions
    case 1: //Dans le cas où la donnée saisie est 1...
        echo 'J\'attaque' . PHP_EOL; //J'éxécute ce code
        break; //Je dois mettre un break à la fin de chaque cas sinon le code par défaut sera éxécuté
    case 2:
        echo 'Je défends' . PHP_EOL;
        break;
    case 3:
        echo 'Je passe mon tour' . PHP_EOL;
        break;
    default:
        echo 'Commande inconnue' . PHP_EOL;
};


//Je peux aussi tester une condition if-else avec des opérateurs logiques :
$heure = (int)readline('Veuillez entrer une heure : ');

//Si $heure est supérieure à 9 ET inférieure à 12 OU qu'elle est supérieure à 13 ET inférieure à 17...
if((9 <= $heure && $heure < 12) || (13 <= $heure && $heure < 17)) {
    echo 'Le magasin est ouvert' . PHP_EOL; //Alors on éxécute ce code
} else {
    echo 'Le magasin est fermé' . PHP_EOL;
};


//Je peux aussi inverser la condition d'une façon très simple :
if(!((9 <= $heure && $heure < 12) || (13 <= $heure && $heure < 17))) { //J'entoure mes deux calculs d'une seule parenthèse puis j'y précède du signe !
    echo 'Le magasin est fermé' . PHP_EOL;
} else {
    echo 'Le magasin est ouvert' . PHP_EOL;
};

/*
  L'opérateur logique && (ET) requiert que les deux valeurs comparées soient vraies pour que le résultat renvoie true, exemples :
  - VRAI && VRAI = true;  Ici, les deux valeurs sont vraies, donc le résultat renvoie true.
  - VRAI && FAUX = false;  L'une des deux valeurs vaut false, donc le résultat renvoie false.
  - FAUX && FAUX = false;  Les deux valeurs valent false, sans surprise, le résultat renvoie false.


  L'opérateur logique || (OU) requiert que l'une des deux valeurs comparées soit vraie pour que le résultat renvoie true :
  - VRAI || VRAI = true;  Ici, les deux valeurs sont vraies, sans surprise, le résultat l'est aussi.
  - VRAI || FAUX = true;  L'une des deux valeurs est vraie, donc le résultat renvoie true.
  - FAUX || FAUX = false;  Les deux valeurs sont fausses, donc le résultat l'est aussi.


  L'opérateur logique ! (PAS logique) inverse la valeur booléene d'un calcul, par exemple :
  - !(VRAI || FAUX) = false;  Logiquement le résultat dois renvoyer true, cependant l'opérateur '!' inverse la valeur booléene du calcul, le résultat est donc false.
*/

?>