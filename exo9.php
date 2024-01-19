<h1>Exercice 9</h1>

<p>Nous souhaitons savoir si une personne est imposable en fonction de son âge et de son sexe.<br>
Si la personne est une femme dont l'âge est compris entre 18 et 35 ans ou si c'est un homme de plus de 20 ans, alors celle-ci est impossable (Sinon ce n'est pas le cas,« non imposable»).</p>

<h2>Résultat :</h2>

<?php

$age = 32;
$sexe = "F";
// && = and ; || = ou //
if($sexe == 'F') {//methode de comparaison et de réponse au cas par cas. Trop long//
    if($age>=18 && $age<=35) {
        $Imp = "La personne est imposable.";

    } else {
        $Imp = "La personne n'est pas imposable.";
    }
} elseif ($sexe == "M" && $age>=20){
    $Imp = "La personne est imposable";
} else ($Imp = "La personne n'est pas imposable" );

echo "Âge : $age<br>Sexe : $sexe <br> $Imp";

//Solution plus simple
echo "<i><h3>Solution plus simple</h3></i>";

$condition1 = $sexe == "F" && $age >= 18 && $age <= 35; //regrouper toute les condition en une variable econosime beaucoup de place//
$condition2 = $sexe == "M" && $age >= 20;
echo "Âge : $age<br> Sexe : $sexe<br>";
if($condition1 || $condition2){ //permet de vérifier si les condition sont vrais ou fausse//
    echo "La personne est impossable";
} else {
    echo "La personne n'est pas imposable";
}