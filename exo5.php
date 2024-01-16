<h1>Exercice 5</h1>

<p>Ecrire un algorithme qui déclare une valeur en francs et qui la convertit en euros.<br>
Attention, la valeur générée devra être arrondie à 2 décimales.<br></p>

<h2>Resultat</h2>

<?php

$francs = 100;
$taux= 15.24;
$euroEnFrancs = $francs / $taux;
echo "Montant en francs : $francs <br>
$francs francs = $taux €<br>";
echo "1 Euro = ". round($euroEnFrancs,2) . " Francs"; 
