<?php
// Déclarer une variable $sexe qui contient une chaîne de caractères
$sexe = "masculin"; // ou "féminin"

// Créer une condition qui affiche un message différent en fonction de la valeur de la variable
if ($sexe == "masculin") {
    echo "Bonjour Monsieur !";
} else if ($sexe == "féminin") {
    echo "Bonjour Madame !";
} else {
    echo "Bonjour !";
}