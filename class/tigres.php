<?php
class Tigre extends Animaux {

    public function vagabonder() {
        echo $this->getEspece() . " vagabonde.<br>";
    }

    public function feuler() {
        echo $this->getEspece() . " feuler.<br>";
    }
}
    


?>