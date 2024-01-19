<h1>Exercice 6</h1>

<p>Ecrire un algorithme permettant de calculer un montant de facture à régler à partir de la quantité d'article, son prix hors taxe et un taux de TVA (exprimé en décimal. <b>Ex</b> : 20%->0.2)</p><br>

<h2>Résultat</h2>

<?php

$prixUnit = 9.99;
$Quantité = 5;
$TVA = 0.2;
$prixHT = bcmul($prixUnit,$Quantité,2); //bcmul permet de faire des multiplication. Le ,2 permet de l'imiter à 2 chiffres après la virgule.//
$prixTVA = bcmul($prixHT,$TVA,2);
$PrixTTC = bcadd($prixHT,$prixTVA,2);

echo "Prix unitaire de l'article : $prixUnit €<br>";
echo "Quantité : $Quantité<br>";
echo "Taux de TVA : ". 100*$TVA . "% <br>";
echo "Le montant de la facture à régler est de : $PrixTTC €";