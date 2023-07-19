<?php

class Testimony
{
    private $id;
    private $titre; // Ensure this property exists
    private $description;
    private $dateCreation;
    private $imagePath;

    public function __construct($id, $titre, $description, $dateCreation, $imagePath) 
    {
        $this->id = $id;
        $this->titre = $titre; // Initialize titre here
        $this->description = $description;
        $this->dateCreation = $dateCreation;
        $this->imagePath = $imagePath;
    }

    public function getImagePath()
    {
        return $this->imagePath;
    }

    public function setImagePath($imagePath)
    {
        $this->imagePath = $imagePath;
    }
    public function getId()
    {
        return $this->id;
    }

    public function getDateCreation()
    {
        return $this->dateCreation;
    }

    public function getTitre()
    {
        return $this->titre;
    }

    public function setTitre($titre)
    {
        $this->titre = $titre;
    }
    
    public function getDescription()
    {
        return $this->description;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function setDateCreation($dateCreation)
    {
        $this->dateCreation = $dateCreation;
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
