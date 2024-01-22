<h1>Exercice 14</h1>

<p>Calculer l'âge d'une personne à partir de sa date de naissance (en années, mois, jours)</p>

<h2> Résultat </h2>

<?php
$day = new DateTime();
$naiss= new DateTime ("1985-01-17");
$age= $naiss->diff($day);

echo "Age de la personne :".$age->format('%y ans %m mois %d jours');