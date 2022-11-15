<?php
class Voiture {
    private $couleur;
    private $prix;
    private $marque;

    public static $vitesseMax = "400km";
    private static $nbV=0;
  

    public function __construct($couleur, $prix, $marque) 

    {
        $this->nbV++;
        $this->couleur = $couleur;
        $this->prix = $prix;
        $this->marque = $marque;
    }

 
     /**
     * Get the value of couleur
     */ 
    public function getCouleur()
    {
        return $this->couleur;
    }

  
   

    /**
     * Get the value of prix
     */ 
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * Get the value of marque
     */ 
    public function getMarque()
    {
        return $this->marque;
    }




}

$v1 = new Voiture("Verte", "80000", "HONDA");
$v2 = new Voiture("Blue", "90000", "BMW");
$v3 = new Voiture("Verte", "80000", "DACIA");

$mesVoiture = array($v1,$v2,$v3);
?>





<h3>Vos Voiture de rêves</h3>
<table>
    <tr>
       <th> Couleur  </th>
       <th> Nom </th>
       <th> Prix </th>
       <th> Vitesse Max </th>
    </tr>
    <tr>
        <?php
    foreach ($mesVoiture as $e) {
    echo "<tr><td>".$e->getCouleur()."</td><td>".$e->getPrix()."</td><td>".$e->getMarque()."</td><td>".Voiture::$vitesseMax."</td></tr>" ;

}
?>

</table>

<?php

echo "<br> Nombres de voiture en totales :".count($mesVoiture);

?>










