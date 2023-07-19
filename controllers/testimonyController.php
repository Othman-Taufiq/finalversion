<?php
require_once PATH_DIR.'models/Testimony/testimony.Class.php';

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (!empty($_POST["action"]) && $_POST["action"] === "addtestimony") {
        // Retrieve form data
        $titre = $_POST["titre"];
        $description = $_POST["description"];
        $imageFile = $_FILES["image"];

        // Check mandatory fields
        if (!empty($titre) && !empty($description) && !empty($imageFile)) {
            // Handling image upload

            $uploadedFile = $imageFile['tmp_name'];
            $fileName = $imageFile['name'];
            $destination = PATH_IMG . $fileName;

            if (move_uploaded_file($uploadedFile, $destination)) {
                // File has been uploaded successfully, you can continue processing

                // Record the testimony in the database with the image path
                $testimoniesManager = new TestimonyManager();
                $idTemoignage = $testimoniesManager->createNewTestimony($titre, $description, $destination);

                if (!is_null($idTemoignage)) {
                    $testimony = $testimoniesManager->getTestimonyById($idTemoignage);
                    if (!is_null($testimony)) {
                        include PATH_DIR."views/Testimony/testimonyDetail.php";
                        exit; 
                    } else {
                        // Error handling - testimony not found
                    }
                } else {
                    // Error handling - testimony creation failed
                }
            }
        }
    }
}
// Rest of the script code...
?>
