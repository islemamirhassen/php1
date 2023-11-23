<html>
    <body>
        <?php
    class Ville {
        public $nom ;
        public $departement;
        public function __construct($nom,$departement){
            $this->nom = $nom;
            $this->departement=$departement;
        }
        public function getinfo(){
            echo "la ville ".$this->nom." est dans le departement ".$this->departement ;
        }
    }
        $v= new ville("sfax","sud");
        $v->getinfo();

?>

    </body>
    </html>