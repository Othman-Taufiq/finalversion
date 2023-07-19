<?php
if(is_connected()){
    echo 'Seul les utilisateurs non connectés peuvent accéder à cette page';
    include PATH_DIR.'views/Common/footer.php';
    die;
}
?>