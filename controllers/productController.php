<?php
require_once PATH_DIR.'models/Product/productManager.Class.php';
// Vérification du formulaire soumis
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (!empty($_POST["action"]) && $_POST["action"] === "addproduct") {
        // Récupération des données du formulaire
        // $baliseTitle = $_POST["title"];
        // $metaDescription = $_POST["metadescription"];
        // $metaKeywords = $_POST["keywords"];
        $nomProduit = $_POST["nom"];
        $description = $_POST["description"];
        $prixVente = $_POST["prix"];
        $imageFile = $_FILES["image"];
        
        // Vérification des champs obligatoires
        if (!empty($nomProduit) && !empty($description) && !empty($prixVente) && !empty($imageFile)) {
            // Gestion du téléchargement de l'image
            $uploadedFile = $imageFile['tmp_name'];
            $fileName = $imageFile['name'];
            $destination = PATH_IMG . $fileName;

            if (move_uploaded_file($uploadedFile, $destination)) {
                // Le fichier a été téléchargé avec succès, vous pouvez continuer le traitement

                // Enregistrement du produit dans la base de données avec le chemin de l'image
                $productManager = new ProductManager();
                $idProduit = $productManager->createNewProduct($nomProduit, $description, $prixVente, $destination);


                if (!is_null($idProduit)) {
                    $productt = $productManager->getProduitById($idProduit);
                    if (!is_null($product)) {
                        include PATH_DIR."views/Product/productDetail.php";
                        exit; 
                } else {
                    // Gestion des erreurs lors de la création du produit
                }
            } else {
                // Une erreur s'est produite lors du téléchargement du fichier
            }
        } else {
            // Des champs obligatoires sont manquants
        }
    }
}
}
// Le reste du code du script...

?>
