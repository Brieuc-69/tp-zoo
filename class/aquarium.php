<?php

class Aquarium {

    private $saliniteEau;


    public function __construc($nom, $saliniteEau, $propreter = "correct") {
        $this->saliniteEau = $saliniteEau;
    }

    public function getSaliniteEau() {
        return $this->saliniteEau;
    }

    public function setSaliniteEau($saliniteEau) {
        $this->saliniteEau = $saliniteEau;
    }

    public function entretenirAquarium() {
        echo "Vérification de la salinité de l'eau pour l'aquarium " . $this->getNom() . "<br>";
    }
}


?>