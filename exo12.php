<h1>Exercice 12</h1>

<p>À partir d'un fonction personnalisée et à partir d'un tableau de prénoms et de langue associé (tableau contenant clé et valeur), dire bonjour au différentes personnes dans leur langue respective.</p>  

<h2>Résultat</h2>

<?php
//retoure a la ligne sur visual studio = Alt+Z
$hi = [
    "Mickaël" => "Salut", //Ici "Mickaël" est la Key et "Salut" la Value
    "Virgile" => "Hola",
    "Marie-Claire" => "Hello"
];



foreach($hi as $prenom => $bon) {
    echo "$bon $prenom <br>";
}

echo"<h3>Variante</h3>";

ksort($hi);             // ksort permet de trier le tableau dans le sens alphabetique les mot Key.
foreach($hi as $prenom => $bon) {
    echo "$bon $prenom <br>";
}

echo"<br>**************************<br><h3>Correction </h3>";

$noms = [
    "Mickael" => "FRA",
    "Virgile" => "ESP",
    "Marie-Claire" => "ENG"
];

foreach($noms as $nom => $lang){
    if($lang=="FRA"){
        $hey="Salut";
    }
    elseif($lang=="ESP"){
        $hey="Hola";
    }
    else{
        $hey="Hello";
    }
echo"$hey $nom<br>";
}
echo "<h4>Variante</h4>";

ksort($noms);
foreach($noms as $nom => $lang){
    if($lang=="FRA"){
        $hey="Salut";
    }
    elseif($lang=="ESP"){
        $hey="Hola";
    }
    else{
        $hey="Hello";
    }
echo"$hey $nom<br>";
}