<h1>Exercice 15</h1>

<p>Créer une classe Personne (nom, prénom et date de naissance).<br>
Instancier 2 personnes et afficher leurs informations : nom prénom âge.<br><br>

$p1 = new Personne("DUPONT","Michel","1980-02-19");<br>
$p2 = new Personne("DUCHEMIN","Alice","1985-01-17");</p>

<h2>Résultat</h2>

<?php

$p1 = new Personne("DUPONT", "Michel", "1980-02-19");
$p2 = new Personne("DUCHEMIN", "Alice", "1994-01-25");

Class Personne{ //Normalement le Titre du fichier est égale à la dénomination de la class. /!\ATTENTION/!\ les class commence toujours avec une Majuscule /!\ // 
    private $nom;
    private $prenom;
    private $naiss;

    public function __construct($nom, $prenom, $naiss) { // Ici __construct (qui possède deux fois le underscore) est obligatoire//
        //On renseigne toute les données après la fonction avec "$this->"//
        $this->nom = $nom; //On ne peut pas écrire $this->$nom /!\//
        $this->prenom = $prenom;
        $this->naiss = $naiss;
    }

    public function getNom(){ //Les "getXXX" appeler Getter permet de retourner la valeur. Il existe aussi les Setter sous le format "setXXX". le Seter permet de modifier la valeur, "d'écrasser" la variable//S
        return $this->nom; //Dans le getter on ne doit pas mettre de $Variable//
    }
    public function setNom($nom){
        $this->nom =$nom; //Dans le setter on écrit sur la $Variable et on l'indique dans le setter comme suis "setDonnée($VariableDonnée){//
    }

    public function getPrenom(){
        return $this->prenom;
    }
    public function setPrenom($prenom){
        $this->prenom = $prenom;
    }
    public function getNaiss(){
        return $this->naiss;
    }
    public function setNaiss($naiss){
        $this->naiss=$naiss;
    }
    public function getAge(){
        $naiss = new DateTime($this->naiss);
        $day = new DateTime();
        $diff=$naiss->diff($day);
        return $diff->y;
    }

    //pas besoin de setter pour la fonction Âge, qui est calculer automatiquement et n'as pas besoin d'entrer manuel//
}

echo $p1->getPrenom().' '.$p1->getNom().' a '. $p1->getAge().' ans <br>';
echo $p2->getPrenom().' '.$p2->getNom().' a '. $p2->getAge().' ans <br>';