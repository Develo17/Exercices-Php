<?php
// Demande à l'utilisateur de choisir la forme du terrain
echo "Veuillez choisir la forme du terrain (carré, rectangle, triangle): ";
$handle = fopen ("php://stdin","r");
$forme = trim(fgets($handle));

switch ($forme) {
    case 'carré':
        echo "Veuillez entrer la longueur du côté: ";
        $cote = fgets($handle);
        echo "Veuillez entrer le prix du mètre carré: ";
        $prix = fgets($handle);
        $superficie = $cote * $cote;
        $prix_vente = $superficie * $prix;
        break;
    case 'rectangle':
        echo "Veuillez entrer la longueur: ";
        $longueur = fgets($handle);
        echo "Veuillez entrer la largeur: ";
        $largeur = fgets($handle);
        echo "Veuillez entrer le prix du mètre carré: ";
        $prix = fgets($handle);
        $superficie = $longueur * $largeur;
        $prix_vente = $superficie * $prix;
        break;
    case 'triangle':
        echo "Veuillez entrer la base: ";
        $base = fgets($handle);
        echo "Veuillez entrer la hauteur: ";
        $hauteur = fgets($handle);
        echo "Veuillez entrer le prix du mètre carré: ";
        $prix = fgets($handle);
        $superficie = 0.5 * $base * $hauteur;
        $prix_vente = $superficie * $prix;
        break;
    default:
        echo "Forme non reconnue. Veuillez réessayer.";
        exit();
}

echo "La superficie du terrain est " . $superficie . " mètres carrés.\n";
echo "Le prix de vente du terrain est " . $prix_vente . " FRANC CFA.\n";

