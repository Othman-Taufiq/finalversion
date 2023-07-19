<?php

class Product
{
    private $id_produit;
    private $date_creation;
    private $nom_produit;
    private $description;
    private $prix_vente;
    private $image_path;
  
    public function __construct($id_produit, $date_creation, $nom_produit, $description, $prix_vente, $image_path)
    {
        // parent::__construct($balisetitle, $metaDescription, $metaKeywords);
        $this->id_produit = $id_produit;
        $this->date_creation = $date_creation;
        $this->nom_produit = $nom_produit;
        $this->description = $description;
        $this->prix_vente = $prix_vente;
        $this->image_path = $image_path;
    }  

    // Existing getter and setter methods

    public function getImagePath()
    {
        return $this->image_path;
    }

    public function setImagePath($image_path)
    {
        $this->image_path = $image_path;
    }

    // Existing method


    public function getId()
    {
        return $this->id_produit;
    }

    public function getDateCreation()
    {
        return $this->date_creation;
    }

    public function getNomProduit()
    {
        return $this->nom_produit;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function getPrixVente()
    {
        return $this->prix_vente;
    }


    public function setId($id_produit)
    {
        $this->id_produit = $id_produit;
    }

    public function setDateCreation($date_creation)
    {
        $this->date_creation = $date_creation;
    }

    public function setNomProduit($nom_produit)
    {
        $this->nom_produit = $nom_produit;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function setPrixVente($prix_vente)
    {
        $this->prix_vente = $prix_vente;
    }
    
        // public function createSummary($maxLength = 100) {
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
    
        // ...
    
   

