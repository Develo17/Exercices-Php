<?php
// Demande à l'utilisateur d'entrer un nombre
echo "Veuillez entrer un nombre: ";
$handle = fopen ("php://stdin","r");
$num = fgets($handle);

// Affiche la racine carrée du nombre entré
echo "La racine carrée de " . $num . " est " . sqrt($num);

