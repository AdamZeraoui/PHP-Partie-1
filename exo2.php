<h1>Exercice 2</h1>

<p>A partir de l'exercice 1, écrire l'instrusction permettant de compter le nombre de mots contenus dans celle-ci.<br>
</p>

<h2>Résultat</h2>

<?php

$phrase = "Notre formation DL commence aujourd'hui";
$nbMots = str_word_count($phrase); //compte les mots//
echo "La phrase « $phrase » contient $nbMots mots<br>";
echo "La phrase « $phrase » contient ".str_word_count($phrase)." mots<br>"; //version en une ligne//