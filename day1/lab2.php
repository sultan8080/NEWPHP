<?php
class Etudiant
{
    //les attribute
    public $nom;
    public $age;


    // les methods
    //les getter
    public function getNom()
    {
        return $this->nom;
    }
    public function getAge()
    {
        return $this->age;
    }

    //les getter
    public function setNom($nom)
    {
        $this->nom= $nom;
    }
    public function setAge($age)
    {
        $this->age = $age;
    }

    public function infoEtudiant(){
        return "Nom : ".$this->nom." Age : ".$this->age;
    }
}


$el = new Etudiant();
$el->setNom("Amin");
$el->setAge(42);


$el2 = new Etudiant();
$el2->setNom("Moti");
$el2->setAge(41);

echo $el->infoEtudiant()."<br>";

echo $el2->infoEtudiant();
?>