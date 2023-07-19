<?php
require_once PATH_DIR.'models/Post/postManager.Class.php';

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (!empty($_POST["action"]) && $_POST["action"] === "addpost") {
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

                // Record the post in the database with the image path
                $postsManager = new PostManager();
                $idPost = $postsManager->createNewPost($titre, $description, $destination);

                if (!is_null($idPost)) {
                    $post = $postsManager->getPostById($idPost);
                    if (!is_null($post)) {
                        include PATH_DIR."views/Post/postDetail.php";
                        exit; 
                    } else {
                        // Error handling during product creation
                    }
                }
            } else {
                // An error occurred during file upload
            }
        } else {
            // Mandatory fields are missing
        }
    }
}
// Rest of the script code...
?>
