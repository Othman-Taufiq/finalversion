<?php

require_once PATH_DIR."models/Testimony/testimony.Class.php";

class TestimonyManager extends Model
{
    private $testimonies;

    public function __construct()
    {
        $this->testimonies = array();
    }

    public function addTestimony($testimony)
    {
        $this->testimonies[] = $testimony;
    }

    public function getAllTestimonies()
    {
        return $this->testimonies;
    }

    public function loadAllTestimonies()
    {
        $req = $this->getDatabase()->prepare("SELECT * FROM temoignages");
        $req->execute();
        $testimoniesData = $req->fetchAll(PDO::FETCH_ASSOC);
        $req->closeCursor();

        foreach ($testimoniesData as $testimonyData) {
            $newTestimony = new Testimony(
                $testimonyData['id_temoignage'],
                $testimonyData['titre'],  // assuming 'titre' is in the fetched data
                $testimonyData['description'],
                $testimonyData['date_creation'],
                $testimonyData['image_path']
            );
            $this->addTestimony($newTestimony);
        }
    }

    public function getTestimonyById($id)
    {
        $sql = "SELECT * FROM temoignages WHERE id_temoignage = :id_temoignage";
        $stmt = $this->getDatabase()->prepare($sql);
        $stmt->bindValue(':id_temoignage', $id, PDO::PARAM_INT);
        $stmt->execute();
        $testimonyData = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($testimonyData) {
            return new Testimony(
                $testimonyData['id_temoignage'],
                $testimonyData['titre'],  // assuming 'titre' is in the fetched data
                $testimonyData['description'],
                $testimonyData['date_creation'],
                $testimonyData['image_path']
            );
        } else {
            return null;
        }
    }

    public function createNewTestimony($titre, $description, $image_path) 
    {
        $creationDate = date('Y-m-d H:i:s');

        $sql = "INSERT INTO temoignages (titre, description, date_creation, image_path) 
                VALUES (:titre, :description, :date_creation, :image_path)";
        $stmt = $this->getDatabase()->prepare($sql);
        $stmt->bindValue(':titre', $titre, PDO::PARAM_STR);
        $stmt->bindValue(':description', $description, PDO::PARAM_STR);
        $stmt->bindValue(':date_creation', $creationDate, PDO::PARAM_STR);
        $stmt->bindValue(':image_path', $image_path, PDO::PARAM_STR);
        $stmt->execute();

        $id = $this->getDatabase()->lastInsertId();

        $newTestimony = new Testimony($id, $titre, $description, $creationDate, $image_path);
        $this->addTestimony($newTestimony);

        return $id;
    }
}
