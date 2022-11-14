<?php

class Ecole
{
    private $nom;
    private $adresse;
    private $tel;

    function __construct($nom, $adresse, $tel)
    {
        $this->nom = $nom;
        $this->adresse = $adresse;
        $this->tel = $tel;
    }

    public function getInfoEcole()
    {
        return "Nom :" . $this->nom . "Adresse :" . $this->adresse . "Télephone :" . $this->tel;


    }

    /**
     * Get the value of tel
     */
    public function getTel()
    {
        return $this->tel;
    }

    /**
     * Set the value of tel
     *
     * @return  self
     */
    public function setTel($tel)
    {
        $this->tel = $tel;
    }

    /**
     * Get the value of adresse
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set the value of adresse
     *
     * @return  self
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

    }

    /**
     * Get the value of nom
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set the value of nom      
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

    }
}

$el = new Ecole("ENSI", "Paris", "01456458");
$el2 = new Ecole("ENSI2", "Château", "01456458");
$el3 = new Ecole("ENSI3", "Soissons", "01456458");

$tab = array($el,$el2, $el3);

var_dump($tab);

foreach ($tab as $value) {
    # code...
}

// echo $el->getInfoEcole()."<br>";

// $el->setNom("New Name");
// echo $el->getInfoEcole()."<br>";







?>