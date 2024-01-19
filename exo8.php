<h1>Exercice 8</h1>

<p>Ecrire un algorithme qui renvoie la table de multiplication d'un nombre passé en paramètre sous la forme d'une table.<br>
<b>Remarque</b> : Proposer 2 solutions avec 2 type de boucles.</p>

<h2> Résultat </h2>

<?php
//Solution 1
$table = 8;
echo "Table de $table :<br>";
for($num = 1; $num<=10; $num++){ //boucle avec for. For = Pour //
    echo $num." x $table = ". $num*$table ." <br>";
}

echo" <br>";
//Solution 2


$num = 1;
echo "Table de $table :<br>"; //boucle avec while. While = Tant que //
while($num <= 10) {
    echo $num."x $table = ". $num*$table ." <br>";
    $num++;
}