<?php
$recipe = 'Etape 1 : des flageolets ! Etape 2 : de la saucisse toulousaine';
$length = strlen($recipe);
 
 
echo 'La phrase ci-dessous comporte ' . $length . ' caractères : </br> ' . $recipe;

// Enregistrons les informations de date dans des variables

$date = date('d/m/Y');
$time = date('H \h i');

// Maintenant on peut afficher ce qu'on a recueilli
echo "Bonjour ! Nous sommes le {$date} et il est {$time}";
?>