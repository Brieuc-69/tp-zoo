<?php

class Employer{
    private $nom;

    private $age;

    private $sexe;


    public function __construct($nom, $age, $sexe) {
        $this->nom = $nom;
        $this->age = $age;
        $this->sexe = $sexe;
    }

    public function examinerEnclos($enclos) {
        echo "L'employé {$this->nom} examine l'enclos.\n";

        
        echo "Animaux dans l'enclos:\n";
        foreach ($enclos->animaux as $animal) {
            echo "- {$animal->nom} ({$animal->espece})\n";
        }

    
        echo "Caractéristiques de l'enclos:\n";
        echo "- Taille: {$enclos->taille} mètres carrés\n";
        echo "- Environnement: {$enclos->environnement}\n";
    }

    
   
    public function nettoyerEnclos($enclos) {
    
        if (empty($enclos->animaux) && $enclos->estSale()) {
            echo "L'employé {$this->nom} nettoie l'enclos.\n";
            $enclos->setnettoyerEnclos('propre');
        } else {
            echo "L'enclos n'a pas besoin d'être nettoyé pour le moment.\n";
        }
    }

    
    public function nourrirAnimaux($enclos) {
 
        if ($enclos->animauxNeDormentPas()) {
            echo "L'employé {$this->nom} nourrit les animaux de l'enclos.\n";
            $enclos->nourrirAnimaux();
        } else {
            echo "Les animaux dorment, ils seront nourris plus tard.\n";
        }
    }

    public function ajouterNouvelAnimal($enclos, $nouvelAnimal) {
        if ($enclos->peutAjouterAnimal()) {
            echo "L'employé {$this->nom} ajoute un nouvel animal à l'enclos.\n";
            $enclos->ajouterAnimal($nouvelAnimal);
        } else {
            echo "L'enclos est plein, impossible d'ajouter un nouvel animal.\n";
        }
    }

    public function enleverAnimal($enclos, $animal) {
        if ($enclos->contientAnimal($animal)) {
            echo "L'employé {$this->nom} enlève l'animal {$animal->nom} de l'enclos.\n";
            $enclos->enleverAnimal($animal);
        } else {
            echo "L'animal n'est pas dans l'enclos.\n";
        }
    }


    public function transfererAnimal($enclosSource, $enclosCible, $animal) {
        if ($enclosSource->contientAnimal($animal) && $enclosCible->peutAjouterAnimal()) {
            echo "L'employé {$this->nom} transfère l'animal {$animal->nom} de l'enclos {$enclosSource->environnement} à l'enclos {$enclosCible->environnement}.\n";
            

            $enclosSource->enleverAnimal($animal);

       
            $enclosCible->ajouterAnimal($animal);
        } else {
            echo "Le transfert de l'animal n'est pas possible.\n";
        }



        public function interfaceUtilisateur() {
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                // Traitement du formulaire
                if (isset($_POST['id'])) {
                    $id = $_POST['id'];
    
                    switch ($action) {
                        case 'examiner':
                            $enclosId = $_POST['enclos'];
                            $enclos = $this->listeEnclos[$enclosId];
                            $this->examinerEnclos($enclos);
                            break;
                        case 'nourrir':
                            $enclosId = $_POST['enclos'];
                            $enclos = $this->listeEnclos[$enclosId];
                            $this->nourrirAnimaux($enclos);
                            break;
                        case 'nettoyer':
                            $enclosId = $_POST['enclos'];
                            $enclos = $this->listeEnclos[$enclosId];
                            $this->nettoyerEnclos($enclos);
                            break;
                        case 'ajouterAnimal':
                
                            break;
                        case 'enleverAnimal':
                          
                            break;
                        case 'transfererAnimal':
                    
                            break;
                    }
                }
            }

    
        }

    }
    

}






?>