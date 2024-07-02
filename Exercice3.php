<?php
// Demande à l'utilisateur d'entrer trois nombres
echo "Veuillez entrer trois nombres: ";
$handle = fopen ("php://stdin","r");
$num1 = fgets($handle);
$num2 = fgets($handle);
$num3 = fgets($handle);

// Trouve le plus grand nombre
$max = max($num1, $num2, $num3);

// Trouve le plus petit nombre
$min = min($num1, $num2, $num3);

// Affiche le plus grand et le plus petit des trois nombres
echo "Le plus grand des trois nombres est " . $max . "\n";
echo "Le plus petit des trois nombres est " . $min . "\n";
