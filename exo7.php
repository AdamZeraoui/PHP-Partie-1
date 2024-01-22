<h1>Exercice 7</h1>

<p>Ecrire un algorithme permettant de renvoyer la catégorie d'un enfant en fonction de son âge :<br>
<b>Poussin</b> : entre 6 et 7 ans<br>
<b>Pupille</b> : entre 8 et 9 ans<br>
<b>Minime</b> : entre 10 et 11 ans<br>
<b>Cadet</b> : à partir de 12 ans<br>
Si la catégorie n'est pas gérée, merci de préciser.

<h2>Résultat</h2>

<?php

$age = 10;
if(gettype($age) == "double" || gettype($age) == "integer") { //double = décimal ; integer = entier. Pour vérifier si $age est bien un nombre entier ou décimal.//
    if($age >= 12) {
        $Categ = "Cadet";
    }elseif($age >= 10){
        $Categ = "Minime";
    }elseif($age>=8) { 
        $Categ = "Pupille";
    }elseif($age >= 6){
        $Categ = "Poussin";
    }else {
        $Categ = "qui n'est pas gérée.";
    }
    echo "L'enfant qui a $age ans est dans la catégorie « $Categ »<br>";
}

