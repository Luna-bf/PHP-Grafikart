<?php

//La boucle While (tant que) continue de s'éxécuter tant que le résultat de la condition vaut false
$chiffre = null; //Je met null car, par défaut, la variable est vide

while($chiffre !== 10) { //Tant que le chiffre n'est pas égal à 10...
    $chiffre = (int)readline('Veuillez entrer un chiffre : '); //On demande de saisir une donnée
    //break;  On peut sortir de la boucle par la force même si la condition n'est pas remplie avec break 
}

echo "Bravo, vous avez gagné ! \n"; //Quand on sort de la boucle, c'est-à-dire quand la condition est remplie, on envoie un echo


//La boucle For (pour) continue de s'éxécuter tant que la variable de la condition doit être itérée
//J'ai une variable $i que j'initialise à zéro, tant que cette dernière est strictement inférieure à 10, je l'incrémente ($i++)
//Ici, 10 n'est pas inclus car j'ai déclaré le signe < , soit "strictement inférieur à"
for($i = 0; $i < 10; $i++) {
    echo "- $i \n"; //A chaque incrémentation/tour de boucle, j'affiche la valeur de $i en partant de zéro
}
echo "\n";

//Si je veux afficher 10, je dois itérer la variable $i tant que cette dernière n'est pas égale à 10, elle sera donc incrémentée 11 fois
for($i2 = 0; $i2 <= 10; $i2++) { //Je dois déclarer '<=' au lieu de '<', la boucle s'arrêtera quand $i sera égale à 10
    echo "- $i2 \n";
}
echo "\n";

//Je peux aussi itérer ma variable par d'autres chiffres :
for($i3 = 0; $i3 <= 10; $i3 += 2) { //+= est un raccourci qui signifie : $i3 = $i3 + 2;
    echo "- $i3 \n";
}
echo "\n";


//Boucle Foreach (Pour chaque)
$notes = [12, 15, 18];
$eleves = [
    'CM2' => 'John', //CM2 représente la clé 'classe'
    'CM1' => 'Jane',
];

//Ici, la variable $eleve va stocker les valeurs de la variable $eleves
foreach($eleves as $classe => $eleve) { //Je peux aussi récupérer la classe de mes élèves en déclarant la variable $key => $variableAssociée, soit $classe => $eleve dans mon cas
    echo "$eleve est en classe de $classe \n"; //Déclarer la variable $eleves (le tableau) renverra une erreur "Array to string conversion"
}
echo "\n";


$etudiants = [
    'CAP' => ['Lily', 'Benoît', 'Lucas'], //Ici CAP représente la clé 'diplome'
    'BAC' => ['Julien', 'Marion', 'Tristan'],
    'BTS' => ['Emily'],
];

//La variable qui va stocker les données peut s'appeller n'importe comment, mais il faut que le nom soit précis et en rapport avec la première variable, ici les données de $etudiants seront stockées dans $listeEtudiants
//Si je veux déclarer le diplôme préparé par les étudiants ainsi que leur nom, je dois :
foreach($etudiants as $diplome => $listeEtudiants) {
    echo "Le diplôme préparé est : $diplome \n"; //Ici je déclare un premier echo avec la variable $diplome 

    //Puis je déclare un deuxième foreach dans le premier foreach pour avoir les deux données déclarées
    //Ici je ne veux que les noms des élèves, je ne déclare donc pas la clé $diplome
    foreach($listeEtudiants as $etudiant) { //listeEtudiants représente les tableaux contenant les noms des étudiants
        echo "Par : $etudiant \n";
    }
    echo "\n"; //Je rajoute juste un saut de ligne pour que le code soit plus lisible
}

?>