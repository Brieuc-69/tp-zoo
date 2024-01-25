<?php

class Zoo {
    private $enclos = array();


    public function ajouterEnclos(enclo $enclos) {
        $this->enclos[] = $enclos;
    }

  
    public function afficherContenuEnclos() {
        echo "Contenu de tous les enclos :<br>";
        foreach ($this->enclos as $enclos) {
            $enclos->afficherCaracteristiques();
            $enclos->afficherCaracteristiquesAnimaux();
            echo "<br>";
        }
    }


    public function afficherNombreAnimaux() {
        $nombreAnimaux = 0;
        foreach ($this->enclos as $enclos) {
            $nombreAnimaux += $enclos->getNombreAnimaux();
        }
        echo "Nombre d'animaux présents dans le zoo : " . $nombreAnimaux . "<br>";
    }


    public function main() {
        foreach($this->enclos as $enclos) {
            foreach($enclos->getAnimaux() as $anaimal) {
                
            }
        }
    }

 
    }

    




?>