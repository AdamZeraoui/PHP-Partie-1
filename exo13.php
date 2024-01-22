<h1> Exercice 13</h1>

<p>Calculer la moyenne dénérale d'un élève dont les notes sont renseignée dans un tableau (pas de coefficient). Elle devra être afichée avec 2 décimales.</p>

<h2>Résultat</h2>

<?php

$notes = [10,12,8,19,3,16,11,13,9];
function cM(array $tableau) : float {
    $nbnote = count($tableau);
    $sonote = array_sum($tableau);
    $moy = round($sonote / $nbnote,2);
    return $moy;
}
echo "les note obtenue par l'élève sont :";foreach($notes as $note){
    echo "$note ";
}
echo "<br>Sa moyenne générale est donc de : ".cM($notes);