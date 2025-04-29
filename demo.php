<?php

$prenom = "John";
$nom = "Doe";
$note1 = 10;
$note2 = 20;
$moyenne = ($note1 + $note2) / 2;

// Ceci est une concaténation
//Je dois bien mettre les parenthèses lors de l'addition des deux variable sinon le calcul sera mal effectué
echo "Bonjour " . $prenom . " " . $nom . ",". " vous avez " . $moyenne . " de moyenne.";

?>