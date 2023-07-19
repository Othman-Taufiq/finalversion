<?php
    if($_SERVER["REQUEST_METHOD"] === "POST"){
        if(!empty($_POST["action"])){

            if($_POST["action"]== "signup"){
                if(!empty($_POST["pnom"])){
                    if(!empty($_POST["nom"])){
                        if(!empty($_POST["dnaissance"])){
                            if(!empty($_POST["email"])){
                                if(!empty($_POST["password"])){
                                    if(!empty($_POST["loyalty"])){
                                        $user = new UserManager;
                                        $notification = $user->register();
                                        if($notification[0]== "success"){
                                            header('Location:'.URL_SITE.'?p=signupNotif');
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }

            if($_POST["action"]== "login"){
                if(!empty($_POST["email"])){
                    if(!empty($_POST["password"])){
                        $user = new UserManager;
                        $notification = $user->login();
                        if($notification[0]== "success"){
                            header('Location:'.URL_SITE.'?p=logged');
                        }
                    }
                }
            }

            if($_POST["action"]== "reset"){
                if(!empty($_POST["email"])){
                    $user = new UserManager;
                    $notification = $user->waitReset();
                    if($notification[0]== "success"){
                        header('Location:'.URL_SITE.'?p=resetpass');
                    }
                }
            }

            if($_POST["action"]== "resetpass"){
                if(!empty($_POST["password"])){
                    if(!empty($_POST["password2"])){
                        $user = new UserManager;
                        $notiResetpass = $user->resetPass();
                        if($notiResetpass[0]== "success"){
                            header('Location:'.URL_SITE.'?p=login');
                        }
                    } 
                }
            }
        }
    }

?>