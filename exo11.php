<h1>Exercice11</h1>

<p>Initialisier un tableau de x marques de voiture. Ecrire un algorithme permettant de parcourir ce tableau et d'en afficher le contenu (un marque de voiture par ligne). il est également demandé d'afficher le nombre de marques de voitures présentes dans le tableau.<br>
<b>Exemple</b> : Tableau → «Peugeot»,«Renault»,«BMW»,«Mercedes»</p>

<h2>Résultat</h2>

<?php
$Marques = ['Peugot', 'Renault','BMW','Mercedes'];
$NbMar = count($Marques);
$n = 0;
if($NbMar > 0){
    $s="s";
}
else $s ="";
echo "Il y a $NbMar marque$s de voitures dans le tableau :<br><br>";
echo "<ul>";
while($n <= $NbMar){
    echo "<li>$Marques[$n]</li> <br>"; // permet d'afficher chaque élément du tableau
    $n++;
}
echo "</ul>";


echo "<ul>";
foreach ($Marques as $marque) {
    echo "<li>$marque</li>";
}
echo "</ul>";