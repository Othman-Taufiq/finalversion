<?php

require_once PATH_DIR."models/Product/product.Class.php";

class ProductManager extends Model
{
    private $products;

    public function __construct()
    {
        $this->products = array();
    }

    public function addProduct($product)
    {
        $this->products[] = $product;
    }

    public function getAllProducts()
    {
        return $this->products;
    }

    public function loadAllProducts()
    {
        $req = $this->getDatabase()->prepare("SELECT * FROM produits");
        $req->execute();
        $productsData = $req->fetchAll(PDO::FETCH_ASSOC);
        $req->closeCursor();

        foreach ($productsData as $productData) {
            $newProduct = new Product(
                $productData['id_produit'],
                $productData['date_creation'],
                $productData['nom_produit'],
                $productData['description'],
                $productData['prix_vente'],
                $productData['image_path']
            );

            $this->addProduct($newProduct);
        }
    }

    public function getProductById($id)
    {
        $sql = "SELECT * FROM produits WHERE id_produit = :id_produit";
        $stmt = $this->getDatabase()->prepare($sql);
        $stmt->bindValue(':id_produit', $id, PDO::PARAM_INT);
        $stmt->execute();
        $productData = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($productData) {
            return new Product(
                $productData['id_produit'],
                $productData['date_creation'],
                $productData['nom_produit'],
                $productData['description'],
                $productData['prix_vente'],
                $productData['image_path']
            );
        } else {
            return null;
        }
    }

    public function createNewProduct($productName, $description, $salePrice, $imagePath = null)
    {
        $creationDate = date('Y-m-d H:i:s');

        $sql = "INSERT INTO produits (date_creation, nom_produit, description, prix_vente, image_path) 
                VALUES (:date_creation, :nom_produit, :description, :prix_vente, :image_path)";
        $stmt = $this->getDatabase()->prepare($sql);
        $stmt->bindValue(':date_creation', $creationDate, PDO::PARAM_STR);
        $stmt->bindValue(':nom_produit', $productName, PDO::PARAM_STR);
        $stmt->bindValue(':description', $description, PDO::PARAM_STR);
        $stmt->bindValue(':prix_vente', $salePrice, PDO::PARAM_STR);
        $stmt->bindValue(':image_path', $imagePath, PDO::PARAM_STR);
        $stmt->execute();

        $id = $this->getDatabase()->lastInsertId();

        $newProduct = new Product($id, $creationDate, $productName, $description, $salePrice, $imagePath);
        $this->addProduct($newProduct);

        return $id;
    }
}
