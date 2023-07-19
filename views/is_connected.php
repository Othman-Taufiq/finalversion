<?php
if(!is_connected()){
    echo 'Vous devez être connecté pour accéder à cette page';
    include PATH_DIR.'views/Common/footer.php';
    die;
}
?>
