<?php

/***
 *  SCRIPT D'EXEMPLE !
 * 
 * 
 */


//on inclut la class Validate qui va nous aider à valider les formulaires
require_once("class_validate.php");

//on inclut la class Form qui va nous aider à valider les formulaires
require_once("class_form.php");

//on vérifie si une action post est en cours (détecte si un formulaire vient d'être validé)
if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST)){

    $form = new Validate($_POST); //on initialise l'objet de vérification de formulaire avec en paramètre les champs de formulaire contenu dans la superglobale $_POST

    //on vérifie que le formulaire est sécurisé contre la faille csrf
    //if(Form::is_csrf_valid()){
        
        if(isset($_SESSION)){
            //print_r($_POST);
            //on vérifie que le nom du contrôleur ainsi que le nom de la méthode sont passées par $_POST et sont de type alphabétique (lettres majuscules/minscules uniquement)
            if(isset($_POST['c']) && isset($_POST['action']) && ctype_alpha($_POST['c']) && ctype_alpha($_POST['action'])){
                
                $controller = ucfirst($_POST['c']).'Controller'; //on met une majuscule au début du nom du contrôleur
                $action = $_POST['action'];

                $file_controller = lcfirst($controller).'.php'; //on met une minuscule au début du nom du controleur pour retrouver le fichier contenant la classe
                //echo DIR_PATH.'controllers/'.$file_controller;
                //if(is_file($file_controller)){
                    //echo'ok';
                    require_once($file_controller); //on vérifie si le fichier contenant la class existe

                    // On instancie le contrôleur
                    $controller = new $controller($form);
                    //on vérifie que la méthode existe pour ce contrôleur
                    if(method_exists($controller, $action)){
                        $controller->$action(); //lance la méthode de l'objet controller
                    }
                //}
                //$form->logs();
            }

        }else die("session inexistente");

        $_POST = $form->getDatas(); //on réinitialise les données de la superglobale $_POST en lui mettant uniquement les champs traités

    //} elseif(isset($_SESSION)) $_SESSION['form_errors'] = array('Veuillez réactualiser le formulaire');
    //else die("une erreur est survenue");
}

?>