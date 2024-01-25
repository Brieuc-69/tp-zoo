<?php


class Animaux {

    private $espece;
    private $poids;
    private $taille;
    private $age;
    private $faim = false;
    private $dort = false;
    private $malade = false;

    // Constructeur
    public function __construct($espece, $poids, $taille, $age) {
        $this->espece = $espece;
        $this->poids = $poids;
        $this->taille = $taille;
        $this->age = $age;
    }


    public function getEspece() {
        return $this->espece;
    }

    public function getPoids() {
        return $this->poids;
    }

    public function setPoids($poids) {
        $this->poids = $poids;
    }

    public function getTaille() {
        return $this->taille;
    }

    public function setTaille($taille) {
        $this->taille = $taille;
    }

    public function getAge() {
        return $this->age;
    }

    public function setAge($age) {
        $this->age = $age;
    }

    public function aFaim() {
        return $this->faim;
    }

    public function setFaim($faim) {
        $this->faim = $faim;
    }

    public function dort() {
        return $this->dort;
    }

    public function setDort($dort) {
        $this->dort = $dort;
    }

    public function estMalade() {
        return $this->malade;
    }

    public function setMalade($malade) {
        $this->malade = $malade;
    }


    public function manger() {
        echo $this->espece . " mange.<br>";
    }

    public function emettreSon() {
        echo $this->espece . " émet un son.<br>";
    }

    public function soigner() {
        echo $this->espece . " est soigné.<br>";
    }

    public function dormir() {
        echo $this->espece . " dort.<br>";
    }

    public function reveiller() {
        echo $this->espece . " se réveille.<br>";
    }


    public function afficherCaracteristiques() {
        echo "Espèce : " . $this->espece . "<br>";
        echo "Poids : " . $this->poids . "<br>";
        echo "Taille : " . $this->taille . "<br>";
        echo "Âge : " . $this->age . "<br>";
        echo "Faim : " . ($this->faim ? "Oui" : "Non") . "<br>";
        echo "Dort : " . ($this->dort ? "Oui" : "Non") . "<br>";
        echo "Malade : " . ($this->malade ? "Oui" : "Non") . "<br>";
    }
}




?>