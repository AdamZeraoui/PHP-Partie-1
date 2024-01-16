<h1>Exercice 4</h1>

<p>Ecrire un algorithme permettant de savoir si une phrase est un palindrome<br></p>

<h2>Resultat</h2>

<?php

$phrase1 = "Engage le jeu que je le gagne";
$phrase2 = str_replace(' ','', $phrase1);
$phrase2 = strtolower($phrase2);
$reverse = strrev($phrase2);

if($phrase2 == $reverse)
{
    echo "La phrase « $phrase1 » est palindrome";
}
else
{
    echo"La phrase « $phrase1 » n'est pas palindrome";
}
