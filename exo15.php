<h1>Exercice 15</h1>

<p>Créer une classe Personne (nom, prénom et date de naissance).<br>
Instancier 2 personnes et afficher leurs informations : nom prénom âge.<br><br>

$p1 = new Personne("DUPONT","Michel","1980-02-19");<br>
$p2 = new Personne("DUCHEMIN","Alice","1985-01-17");</p>

<h2>Résultat</h2>


<?php
//poo
class Personne {
    private $nom;
    private $prenom;
    private $naiss;

    public function __construct($nom, $prenom, $naiss) {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->naiss = $naiss;
    }

    public function getNom() {
        return $this->nom;
    } 
    public function setNom($nom){
        $this->nom = $nom;
    }
    public function getPrenom() {
        return $this->prenom;
    }
    public function setPrenom($prenom){
        $this->prenom = $prenom;
    }

    public function getNaiss() {
        return $this->naiss;
    }
    public function setNaiss($naiss){
        $this->naiss=$naiss;
    }

    public function calcAge() {
        $naiss = new DateTime($this->naiss);
        $aujourdHui = new DateTime();
        $difference = $naiss->diff($aujourdHui);
        return $difference->y;
    }
    public function __toString(){
        return $this->getPrenom() . ' ' . $this->getNom() . ' a ' .$this->calcAge() . ' ans' . "<br>";
    }
} 

$p1 = new Personne("DUPONT", "Michel", "1980-02-19");
$p2 = new Personne("DUCHEMIN", "Alice", "1985-01-17");

echo $p1;
echo $p2;