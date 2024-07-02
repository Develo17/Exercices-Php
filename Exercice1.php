<?php
// Demande à l'utilisateur d'entrer un nombre
echo "Veuillez entrer un nombre: ";
$handle = fopen ("php://stdin","r");
$num = fgets($handle);

// Affiche la table de multiplication de 1 à 12 pour le nombre entré
for($i = 1; $i <= 12; $i++) {
    echo "$num x $i = " . $num * $i;
    echo "\n";
}

