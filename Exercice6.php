<?php
// Demande à l'utilisateur d'entrer cinq nombres
echo "Veuillez entrer cinq nombres: ";
$handle = fopen ("php://stdin","r");
$num1 = fgets($handle);
$num2 = fgets($handle);
$num3 = fgets($handle);
$num4 = fgets($handle);
$num5 = fgets($handle);

// Trouve le plus grand nombre
$max = max($num1, $num2, $num3, $num4, $num5);

// Trouve le plus petit nombre
$min = min($num1, $num2, $num3, $num4, $num5);

// Affiche le plus grand et le plus petit des trois nombres
echo "Le plus grand des cinq nombres est " . $max . "\n";
echo "Le plus petit des cinq nombres est " . $min . "\n";

