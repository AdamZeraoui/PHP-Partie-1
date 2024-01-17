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
if(gettype($age) == "double" || gettype($age) == "integer") {
    if($age>= 12) {
        $Categ = "Cadet";
    }elseif(10<=$age or $age>=11){
        $Categ = "Minime";
    }elseif(8<=$age or $age>=9) { 
        $Categ = "Pupille";
    }elseif(6<=$age or $age>=7){
        $Categ = "Poussin";
    }elseif($age<=5){
        $Categ = "qui n'est pas gérée.";
    }
    echo "L'enfant qui a $age ans est dans la catégorie « $Categ »<br>";
}

