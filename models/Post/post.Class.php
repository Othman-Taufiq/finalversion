<?php

class Post 
{
    private $id_post;
    private $date_creation;
    private $titre;
    private $description;
    private $image_path;

    public function __construct($id_post, $date_creation, $titre, $description, $image_path)
    {
        $this->id_post = $id_post;
        $this->date_creation = $date_creation;
        $this->titre = $titre;
        $this->description = $description;
        $this->image_path = $image_path;
    }

    public function getImagePath()
    {
        return $this->image_path;
    }

    public function setImagePath($image_path)
    {
        $this->image_path = $image_path;
    }

    public function getId()
    {
        return $this->id_post;
    }

    public function getDateCreation()
    {
        return $this->date_creation;
    }

    public function getTitre()
    {
        return $this->titre;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setId($id_post)
    {
        $this->id_post = $id_post;
    }

    public function setDateCreation($date_creation)
    {
        $this->date_creation = $date_creation;
    }

    public function setTitre($titre)
    {
        $this->titre = $titre;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }

    // public function createSummary($maxLength = 200) {
    //     $description = $this->getDescription();
    //     if (strlen($description) <= $maxLength) {
    //         return $description;
    //     } else {
    //         $summary = substr($description, 0, $maxLength);
    //         $lastSpacePos = strrpos($summary, ' ');
    //         if ($lastSpacePos !== false) {
    //             $summary = substr($summary, 0, $lastSpacePos);
    //         }
    //         return $summary . '...';
    //     }
    // }
}
