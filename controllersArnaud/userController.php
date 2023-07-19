<?php
/***
 *  SCRIPT D'EXEMPLE !
 * 
 * 
 */

require_once(DIR_PATH.'/models/class_users.php');

class UserController {

    public $form;
    public $user;

   function __construct($formObj){
        $this->form = $formObj;
        $user = new User();
    }

    function register(){

        //global $form;

        $this->form->validate([
            'login' => ['required', 'maxLength:150'],
            'prenom_utilisateur' => ['required', 'maxLength:150'],
            'nom_utilisateur' => ['required', 'maxLength:150'],
            'email' => ['required', 'maxLength:150','type:email'],
            'num_telephone' => ['type:phone'],
            'code_postal' => ['type:zipcode'],
            'sexe' => ['required', 'type:int', 'maxValue:2'],
            'password' => ['required', 'maxLength:150','type:password'],
            'password_verify' => ['samePassword'], //compare avec le data['password'] existant (intervient toujours APRES un data data['password'])
            'date_naissance' => ['required','type:date-fr'],
            'adresse_postale' => ['exists'], // vérifie juste que le champ existe
            'ville' => ['exists'] // vérifie juste que le champ existe
        ]);

          
        if ($this->form->ok()) {
            if($this->user->addUer()){
                header('Location: '.URL_SITE);
                exit;
            }
        } else {
            //var_dump($this->form->errors());
        }

    }

    function login(){

        $this->form->validate([
            'login' => ['required', 'minLength:3', 'maxLength:150'],
            'password' => ['required', 'maxLength:150']
        ]);

          
        if($this->form->ok()) {
            if($this->user->login()){
                header('Location: '.URL_SITE);
                exit;
            }
        } else {
            var_dump($this->form->errors());
        }

    }    
}