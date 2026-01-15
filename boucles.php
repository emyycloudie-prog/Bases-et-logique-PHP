<?php

// --- Étape 1 : Boucle FOR ----

for ($i = 1; $i <= 10; $i++) {
    echo "Nombre : $i <br>";
}

echo "<hr>";

// --- Étape 2 : Boucle WHILE ---

$j = 1;

while ($j <= 5) {
    echo "Itération : $j <br>";
    $j++;
}

echo "<hr>";

// --- Étape 3 : Boucle FOREACH -----

$animaux = ["Chat", "Chien", "Lapin"];

foreach ($animaux as $animal) {
    echo "Animal : $animal <br>";
}

echo "<hr>";

//---- Étape 4 : break et continue ---

for ($i = 1; $i <= 10; $i++) {

    if ($i == 5) {
        continue; // 
    }

    if ($i == 8) {
        break; // 
    }

    echo "Valeur : $i <br>";
}

?>
