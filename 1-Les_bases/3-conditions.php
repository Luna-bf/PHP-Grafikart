<?php

//La fonction readline() permet de rendre le script interactif, à voir dans le terminal
$note = readline('Veuillez entrer votre note : ');

//Je met ma condition entre les parenthèses :
if($note > 10) { //Si la valeur de $note est supérieure à 10...
    echo 'Bravo, vous avez la moyenne'; //Alors on éxécute ce code
} elseif($note == 10) { //Sinon si la valeur est égale à 10...
    echo "Vous avez tout juste la moyenne";
} else { //Sinon (si la condition si-dessus renvoie false)...
    echo 'Dommage, vous n\'avez pas la moyenne'; //Alors on éxécute ce code à la place
};

/*
  Ici, l'opérateur de comparaison '===' dans le elseif renvoie false car il vérifie aussi le type, ici $note est une valeur
  rentrée par l'utilisateur par l'intermédiaire de la fonction readline(), soit une chaine de caractères.
  Cela signifie que la valeur de $note devient elle aussi une chaine de caractères et pas un nombre entier,
  comme l'opérateur de comparaison '===' compare la valeur et le type, le résultat renvoie false.

  Cependant, l'opérateur de comparaison '==' compare uniquement la valeur, par exemple si je fais :
  "0" == 0, le résultat renverra true car les deux valeurs on le même chiffre, malgré le fait qu'elles aient un type différent

  Pour terminer, l'opérateur de comparaison '=' renverra toujours true.

  Conclusion : Dans la majorité des cas, il est conseillé d'utiliser l'opérateur de comparaison stricte (===) mais dans ce cas là,
  je vais utiliser l'opérateur d'égalité lâche (==).
*/

?>