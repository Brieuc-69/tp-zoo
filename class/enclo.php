<?php
class Enclo {

    private $nom;

    private $nombreAnimaux = 6;

    private $sexe;

    private $propreter = "correct";

    private $animaux = array();


    public function __construct($nom, $propreter = "correcte") {
        $this->nom = $nom;
        $this->propreter = $propreter;
    }

    public function getNom() {
        return $this->nom;
    }

    public function getProprete() {
        return $this->propreter;
    }

    public function setProprete($proprete) {
        $this->propreter = $proprete;
    }

    public function getNombreAnimaux() {
        return $this->nombreAnimaux;
    }

     public function afficherCaracteristiques() {
        echo "Nom de l'enclos : " . $this->nom . "<br>";
        echo "Propreté : " . $this->proprete . "<br>";
        echo "Nombre d'animaux : " . $this->nombreAnimaux . "<br>";
    }


    public function afficherCaracteristiquesAnimaux() {
        echo "Caractéristiques des animaux dans l'enclos :<br>";
        foreach ($this->animaux as $animal) {
            $animal->afficherCaracteristiques();
        }
    }


    public function ajouterAnimal(Animaux $animal) {
        $this->animaux[] = $animal;
        $this->nombreAnimaux++;
    }

    public function enleverAnimal(Animaux $animal) {
        $key = array_search($animal, $this->animaux);
        if ($key !== false) {
            unset($this->animaux[$key]);
            $this->nombreAnimaux--;
        }
    }

    public function entretenirEnclos() {
        if ($this->nombreAnimaux === 0) {
            $this->setProprete("bonne");
        }
    }
}



 





}


?>