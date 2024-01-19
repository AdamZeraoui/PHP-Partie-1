<h1>Exercice 1</h1>

<p>Soit la phrase "Notre formation DL commence aujourd'hui".<br>
Ecrire un algorithme permettant de compter le nombre de cacartères contenus dans cette phrase.<br></p>

<h2>Résultat</h2>

<?php

$phrase = "Notre formation DL commence aujourd'hui";
$longueur = strlen($phrase); //compte les caractères et les espaces//
echo "La phrase « $phrase » contient $longueur caractères<br>";
echo "La phrase « $phrase » contient ". strlen($phrase). " carcatères<br>"; //version en une ligne//