<?php
echo "Veuillez entrer votre moyenne: ";
$handle = fopen ("php://stdin","r");
$moyenne = fgets($handle);

if ($moyenne < 0 || $moyenne > 20) {
    echo "Erreur: La note doit être entre 0 et 20.\n";
} else {
    switch (true) {
        case $moyenne < 10:
            echo "Mention: Insuffisant\n";
            break;
        case $moyenne < 12:
            echo "Mention: Passable\n";
            break;
        case $moyenne < 14:
            echo "Mention: Assez bien\n";
            break;
        case $moyenne < 16:
            echo "Mention: Bien\n";
            break;
        default:
            echo "Mention: Très bien\n";
            break;
    }
}
