<?php
if(!is_admin()){
    echo 'Vous devez être un administrateur connecté pour accéder à cette page';
    include PATH_DIR.'views/Common/footer.php';
    die;
}
?>