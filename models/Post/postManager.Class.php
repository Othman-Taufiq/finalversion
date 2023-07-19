<?php

require_once PATH_DIR."models/Post/post.Class.php";

class PostManager extends Model
{
    private $posts;

    public function __construct()
    {
        $this->posts = array();
    }

    public function addPost($post)
    {
        $this->posts[] = $post;
    }

    public function getAllPosts()
    {
        return $this->posts;
    }

    public function loadAllPosts()
    {
        $req = $this->getDatabase()->prepare("SELECT * FROM posts");
        $req->execute();
        $postsData = $req->fetchAll(PDO::FETCH_ASSOC);
        $req->closeCursor();

        foreach ($postsData as $postData) {
            $newPost = new Post(
                $postData['id_post'],
                $postData['date_creation'],
                $postData['titre'],
                $postData['description'],
                $postData['image_path']
            );

            $this->addPost($newPost);
        }
    }

    public function getPostById($id)
    {
        $sql = "SELECT * FROM posts WHERE id_post = :id_post";
        $stmt = $this->getDatabase()->prepare($sql);
        $stmt->bindValue(':id_post', $id, PDO::PARAM_INT);
        $stmt->execute();
        $postData = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($postData) {
            return new Post(
                $postData['id_post'],
                $postData['date_creation'],
                $postData['titre'],
                $postData['description'],
                $postData['image_path']
            );
        } else {
            return null;
        }
    }

    public function createNewPost($titre, $description, $imagePath = null)
    {
        $dateCreation = date('Y-m-d H:i:s');

        $sql = "INSERT INTO posts (date_creation, titre, description, image_path) 
                VALUES (:date_creation, :titre, :description, :image_path)";
        $stmt = $this->getDatabase()->prepare($sql);
        $stmt->bindValue(':date_creation', $dateCreation, PDO::PARAM_STR);
        $stmt->bindValue(':titre', $titre, PDO::PARAM_STR);
        $stmt->bindValue(':description', $description, PDO::PARAM_STR);
        $stmt->bindValue(':image_path', $imagePath, PDO::PARAM_STR);
        $stmt->execute();

        $id = $this->getDatabase()->lastInsertId();

        $newPost = new Post($id, $dateCreation, $titre, $description, $imagePath);
        $this->addPost($newPost);

        return $id;
    }
}
