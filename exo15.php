<h1>Exercice 15</h1>

<p>Créer une classe Personne (nom, prénom et date de naissance).<br>
Instancier 2 personnes et afficher leurs informations : nom prénom âge.<br><br>

$p1 = new Personne("DUPONT","Michel","1980-02-19");<br>
$p2 = new Personne("DUCHEMIN","Alice","1985-01-17");</p>

<h2>Résultat</h2>


<?php

// POO

// classe : un modèle, moule, template (c'est "un concept abstrait" jusqu'au moment où on reçoit une instance (grâce à "new"))
// objet : instance de classe (c'est du concret)

class Personne {

    // attributs (ce qui compose la classe, ce qui la définit, son état (state))
    private string $nom;
    private string $prenom;
    private DateTime $dateNaiss;

    // constructeur (initialise les attributs, est appelé par "new" et renvoie une instance de cette classe)
    public function __construct(string $nom,string $prenom, string $dateNaissString) {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->dateNaiss = new DateTime($dateNaissString);
    }

    // getters/setters

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

    public function getDateNaiss() {
        return $this->dateNaiss;
    }
    public function setDateNaiss(string $dateNaissString){
        $this->dateNaiss = new DateTime($dateNaissString);
    }

    // méthodes (comportements, actions possibles sur un objet de cette classe)

    public function calcAge() {
        $aujourdHui = new DateTime();
        $difference = $this->dateNaiss->diff($aujourdHui);
        return $difference->y;
    }

    public function getInfos() {
        return $this . ' a ' .$this->calcAge() . ' ans' . "<br>";
    }

    // méthode magique, doit retourner un string, donne la représentation de l'objet sous forme de string
    public function __toString(){
        return $this->getPrenom() . ' ' . $this->getNom();
    }
} 

$p1 = new Personne("DUPONT", "Michel", "1980-02-19");
$p2 = new Personne("DUCHEMIN", "Alice", "1985-01-17");

echo $p1->getInfos();
echo $p2->getInfos();

// echo new Personne("NOM", "Prénom", "1901-01-01");
