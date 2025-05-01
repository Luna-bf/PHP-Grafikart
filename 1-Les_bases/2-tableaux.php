<?php

//Ici j'ai un tableau contenant deux valeurs
$games = ["Undertale", "Hollow Knight", "Celeste", "KinitoPET"];

//L'ancienne notation des tableaux en PHP, elle fonctionne de la même façon mais est moins utilisée
// $animaux = array("Chat", "Chien", "Lapin");
// echo $animaux[2];

//Le premier élément du tableau a pour index 0, donc si je veux afficher le deuxième du tableau, je devrais déclarer :
//Les [] indiquent que je demande à afficher un élément se trouvant dans un tableau
echo $games[1]; //Cela affichera Hollow Knight dans le terminal


//Je peux aussi utiliser les tableaux de façon plus complexe avec un tableau contenant un tableau :
$eleve = ["John", "Doe", [10, 17, 20, 18]];

/* Si je veux obtenir un des chiffres, je dois déclarer l'affichage de l'élément ayant le deuxième index (le tableau de chiffres)
afin de rentrer dans le tableau contenant les chiffres. */

/* Si je veux obtenir le quatrième chiffre de ce tableau, je dois déclarer l'affichage de l'élément ayant l'index 3
après avoir déclaré l'index du tableau contenant les chiffres */

// Ne pas déclarer l'affichage de l'uns des index du tableau m'affichera uniquement 'Array' dans le terminal
echo $eleve[2][3]; //Cela affichera 18 dans le terminal


?>