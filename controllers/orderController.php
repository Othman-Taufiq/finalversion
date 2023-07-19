<?php
require_once PATH_DIR.'models/Order/orderManager.Class.php';

// Vérification du formulaire soumis
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (!empty($_POST["action"]) && $_POST["action"] === "addorder") {
        // Récupération des données du formulaire
        $userId = $_POST["id_utilisateur"];
        $productId = $_POST["product"];
        $quantity = $_POST["quantity"];
        $deliveryMode = $_POST["delivery"];
        $addressId = $_POST["address"];
        $date = $_POST["date"];

        // Vérification des champs obligatoires
        if (!empty($userId) && !empty($productId) && !empty($quantity) && !empty($deliveryMode) && !empty($addressId) && !empty($date)) {
            // Création de la commande dans la base de données
            $orderManager = new OrderManager();

            // Appel de la méthode createNewOrder avec les paramètres appropriés
            $orderId = $orderManager->createNewOrder($userId, $productId, $quantity, $deliveryMode, $addressId, $date);

            if (!is_null($orderId)) {
                // Redirection vers la page de détail de la commande
                header("Location: ".URL_SITE."index.php?p=vieworder&id=" . $orderId);
                exit;
            } else {
                echo "Erreur lors de la création de la commande.";
            }
        } else {
            echo "Veuillez remplir tous les champs obligatoires.";
        }
    }
}
// Le reste du code du script...
?>
