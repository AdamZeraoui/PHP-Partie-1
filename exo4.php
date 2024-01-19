<h1>Exercice 4</h1>

<p>Ecrire un algorithme permettant de savoir si une phrase est un palindrome<br></p>

<h2>Resultat</h2>

<?php

$phrase1 = "Engage le jeu que je le gagne";
$phrase2 = str_replace(' ','', $phrase1); //pour supprimer les espaces//
$phrase2 = strtolower($phrase2); //met tous en minuscule//
$reverse = strrev($phrase2);//inverse le sens de la phrase//

if($phrase2 == $reverse) //vérifi si la phrase2 à ce stade est bien la même sont inverse//
{
    echo "La phrase « $phrase1 » est palindrome";
}
else
{
    echo"La phrase « $phrase1 » n'est pas palindrome";
}
