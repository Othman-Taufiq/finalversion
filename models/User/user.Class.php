<?php
    class User extends Model{

        private $id;
        private $prenom;
        private $nom;
        private $dateNaissance;
        private $email;
        private $password;
        private $adressePostale;
        private $numTel;
        private $ville;
        private $codePostale;
        
        // public function __construct($id, $prenom, $fname, $userName, $dateNaissance, $email, $password, $adressePostale, $numTel, $ville, $codePostale){
        //     $this->id = $id;
        //     $this->prenom = $prenom;
        //     $this->fname = $fname;
        //     $this->dateNaissance = $dateNaissance;
        //     $this->email = $email;
        //     $this->password = $password;
        //     $this->adressePostale = $adressePostale;
        //     $this->numTel = $numTel;
        //     $this->ville = $ville;
        //     $this->codePostale = $codePostale;
        // }

        // ID Getter and Setter
        public function getUserId(){
            return $this->id;
        }
        public function setUserId($id):void 
        //The void keyword is a return type declaration, specifying that the function does not return any value. In this case, the setPassword function is intended to modify the internal state of the class (setting the password property) rather than returning a value.
        {
           $this->id = $id;
        }

        //PRENOM Getter and Setter
        public function getPrenom(){
            return $this->prenom;
        }
        public function setPrenom($prenom):void{
           $this->prenom = $prenom;
        }

        //FNAME Getter and Setter
        public function getNom(){
            return $this->nom;
        }
        public function setNom($nom):void{
           $this->nom = $nom;
        }

        //DATENAISSANCE Getter and Setter
        public function getDateNaissance(){
            return $this->dateNaissance;
        }
        public function setDateNaissance($dateNaissance):void{
           $this->dateNaissance = $dateNaissance;
        }

        //EMAIL Getter and Setter
        public function getEmail(){
            return $this->email;
        }
        public function setEmail($email):void{
           $this->email = $email;
        }

        //PASSWORD Getter and Setter
        public function getPassword(){
            return $this->password;
        }
        public function setPassword($password):void{
           $this->password = $password;
        }

        //ADRESSE POSTALE Getter and Setter
        public function getAdressePostale(){
            return $this->adressePostale;
        }
        public function setAdressePostale($adressePostale):void{
           $this->adressePostale = $adressePostale;
        }

        //NUMTEL Getter and Setter
        public function getNumTel(){
            return $this->numTel;
        }
        public function setNumTel($numTel):void{
           $this->numTel = $numTel;
        }

        //VILLE Getter and Setter
        public function getVille(){
            return $this->ville;
        }
        public function setVille($ville):void{
           $this->ville = $ville;
        }

        //CODEPOSTALE Getter and Setter
        public function getCodePostale(){
            return $this->codePostale;
        }
        public function setCodePostale($codePostale):void{
           $this->codePostale = $codePostale;
        }
    }
?>