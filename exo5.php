<h1>Exercice 5</h1>

<p>Ecrire un algorithme qui déclare une valeur en francs et qui la convertit en euros.<br>
Attention, la valeur générée devra être arrondie à 2 décimales.<br></p>

<h2>Resultat</h2>

<?php

$taux = 15.24/100;
$Vfranc = 100;
$resultaF = $Vfranc * $taux;

echo "Montant en francs : $Vfranc<br> $Vfranc francs = $resultaF €";
