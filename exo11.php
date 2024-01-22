<h1>Exercice11</h1>

<p>Initialisier un tableau de x marques de voiture. Ecrire un algorithme permettant de parcourir ce tableau et d'en afficher le contenu (un marque de voiture par ligne). il est également demandé d'afficher le nombre de marques de voitures présentes dans le tableau.<br>
<b>Exemple</b> : Tableau → «Peugeot»,«Renault»,«BMW»,«Mercedes»</p>

<h2>Résultat</h2>

<?php
$Marque = array(1=> 'Peugot', 'Renault','BMW','Mercedes');
$NbMar = count($Marque);
$n = 1;
if($NbMar > 1){
    $s="s";
}
else $s ="";
echo "Il y a $NbMar marque$s de voitures dans le tableau :<br><br>";
while($n <= $NbMar){
    echo "<li>$Marque[$n]</li> <br>"; // permet d'afficher chaque élément du tableau
    $n++;
}