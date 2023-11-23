<html>
    <body>
        <?php
        class personne {
            public $nom;
            public $prenom;
            public $adresse;
            public function __construct($name,$prenom,$adresse) {
                $this->name = $name;
                $this->prenom = $prenom;
                $this->adresse=$adresse;
            }
            public function getpersonne(){
               echo "nom :" .$this->name."<br> prenom :" .$this->prenom."<br> adresse :".$this->adresse;
            }
            public function setadresse($adresse){
                $this->adresse=$adresse;
            }
            p1=new personne("islem","amir-hassan","sfax");
            p1->setadresse("bizert");
            p1->getpersonne();





?>
    </body>
</html>