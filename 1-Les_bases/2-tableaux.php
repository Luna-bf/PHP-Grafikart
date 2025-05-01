<?php

//Ici j'ai un tableau contenant deux valeurs
$games = ["Undertale", "Hollow Knight", "Celeste", "KinitoPET"];

//Le premier élément du tableau a pour index 0, donc si je veux afficher le deuxième du tableau, je devrais déclarer :
//Les [] indiquent que je demande à afficher un élément se trouvant dans un tableau
echo $games[1] . PHP_EOL; //Cela affichera Hollow Knight dans le terminal

//L'ancienne notation des tableaux en PHP, elle fonctionne de la même façon mais est moins utilisée
$animaux = array("Chat", "Chien", "Lapin");
echo $animaux[2] . PHP_EOL; //PHP_EOL déclare un retour à la ligne, cela rend le contenu de mon fichier plus lisible dans le terminal


//Je peux aussi utiliser les tableaux de façon plus complexe avec un tableau contenant un tableau :
$eleve = ["John", "Doe", [10, 17, 20, 18]];

/* Si je veux obtenir un des chiffres, je dois déclarer l'affichage de l'élément ayant le deuxième index (le tableau de chiffres)
afin de rentrer dans le tableau contenant les chiffres. */

/* Si je veux obtenir le quatrième chiffre de ce tableau, je dois déclarer l'affichage de l'élément ayant l'index 3
après avoir déclaré l'index du tableau contenant les chiffres */

// Ne pas déclarer l'affichage de l'uns des index du tableau m'affichera uniquement 'Array' dans le terminal
echo $eleve[2][3] . PHP_EOL; //Cela affichera 18 dans le terminal


//Je peux cependant déclarer des tableaux complexes de façons plus précise et lisible :
$monEleve = [
    'nom' => 'Bond', //Ici je déclare une variable sous forme de string et je lui associe une valeur avec ' => '
    'prenom' => 'Jean',
    'notes' => [10, 17, 20, 18], //Je peux lui associer tout type de valeur : strings, tableaux, booleens, nombres entiers/décimaux...
    'moyenne' => 16.25,
    'classe' => 'CM2',
];

//Je peux aussi modifier une de mes valeurs en dehors du tableau :
//Je récupère la variable désirée puis je lui assigne une nouvelle valeur avec le signe ' = '
$monEleve['prenom'] = 'James'; //Cela écrasera la valeur initialement déclarée dans la variable et la remplacera par celle-ci

//Je peux aussi ajouter une nouvelle valeur dans le tableau :
//J'indique que je veux ajouter une nouvelle valeur au quatrième index du tableau, puis je lui assigne la valeur désirée
$monEleve['notes'][4] = 14;
echo $monEleve['notes'][4] . PHP_EOL; //Demander l'affichage du quatrième index de la variable notes affiche bien 14

//Je modifie donc la valeur de la variable 'moyenne' en conséquences :
$monEleve['moyenne'] = 15.8; //79 : 5

//Pour afficher les informations d'un tableau sous forme graphique, je peux déclarer :
print_r($monEleve['notes']); //Voir ce que cela donne dans le terminal

//Je peux aussi rajouter une nouvelle variable à mon tableau :
$monEleve['vaRedoubler'] = false; //Si je ne déclare pas de nom à ma variable, cette dernière prendra l'index 0
print_r($monEleve); //Voir ce que cela donne dans le terminal


//Affichage d'une phrase complète utilisant les valeurs du tableau $monEleve ainsi que la concaténation
echo 'Mon élève, ' . $monEleve['prenom']  . ' ' . $monEleve['nom'] . ', a obtenu une moyenne de ' . $monEleve['moyenne'] . '/20.' . PHP_EOL;



//Je peux aussi déclarer un tableau contenant encore plus de données, par exemple :
//Ma variable $classe aura pour valeur un tableau contenant des tableau, un pour chaque élève 
$classe = [
    [
        'nom' => 'Smith',
        'prenom' => 'Jane',
        'notes' => [10, 17, 20, 18],
        'moyenne' => 16.25,
        'classe' => 'CM2',
        'vaRedoubler' => false,
    ],
    [
        'nom' => 'Williams',
        'prenom' => 'Johnny',
        'notes' => [11, 9, 13, 16],
        'moyenne' => 12.25,
        'classe' => 'CM2',
        'vaRedoubler' => false,
    ],
];
//Si je veux récupérer la deuxième note du premier élève du tableau $classe, je fais :
echo $classe[0]['notes'][1]; //Cela va bien m'afficher 17

?>