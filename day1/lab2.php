<?php

class Etudiant
{
    // les attributs
    private $nom;
    private $age;
    public static $nbMax =20;
    public static $nbEtudiant;

    public function __construct(){
        self::$nbEtudiant++;
    }

    public static function getNbMax(){
        return self::$nbMax;
    }

    //les méthodes
    //les getters
    public function getNom()
    {
        return $this->nom;
    }

    public function getAge()
    {
        return $this->age;
    }
     // les setters
    public function setNom($nom)
    {
        $this->nom = $nom;
    }


    public function setAge($age)
    {
        if ($age>18) {
            $this->age = $age;
        } else {
            echo "Valeur de l age invalide!";
        }
    }

    public function infoEtudiant()
    {
        return "Nom : ".$this->nom ." Age : ".$this->age;
    }
}


$e1 = new Etudiant();

$e1->setNom("Amine");
$e1->setAge(-20);
echo "<br/>Nbre actuel etudiants : ".Etudiant::$nbEtudiant;


$e2 = new Etudiant();
$e2->setNom("Alain");
$e2->setAge(22);

echo $e2->infoEtudiant()."<b>";


echo "<br/> Nbre actuel etudiants : ".Etudiant::$nbEtudiant;

echo "<br/> Nbre actuel etudiants : ".Etudiant::getNbMax();

/*
echo"<br/>";
echo $e2->infoEtudiant();*/