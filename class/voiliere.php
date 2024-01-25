<?php

class Voiliere extends Enclo {

    private $hauteur;

    public function __construct($nom, $hauteur, $propreter = "correct" ) {

        $this->hauteur = $hauteur;

    }
    
    public function getHauteur() {
        return $this->hauteur;
    }



    public function setHauteur($hauteur) {
        $this->hauteur = $hauteur;
    }
    

    public function entretenirVoiliere() {
        echo "Vérification du sommet de la cage pour la volière " . $this->getNom() . "<br>";

    }
    
        
    
}


?>