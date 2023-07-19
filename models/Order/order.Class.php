<?php


class Order {
    private $id;
    private $utilisateurId;
    private $product;
    private $quantity;
    private $deliveryMode;
    private $address;

    // Ajoutez des getters et des setters pour chaque propriété

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        if (is_int($id)) {
            $this->id = $id;
        }
    }

    public function getUtilisateurId() {
        return $this->utilisateurId;
    }

    public function setUtilisateurId($utilisateurId) {
        if (is_int($utilisateurId)) {
            $this->utilisateurId = $utilisateurId;
        }
    }

    public function getProduct() {
        return $this->product;
    }   

    public function setProduct($product) {
        if (is_string($product)) {
            $this->product = $product;
        }
    }

    public function getQuantity() {
        return $this->quantity;
    }

    public function setQuantity($quantity) {
        if (is_int($quantity)) {
            $this->quantity = $quantity;
        }
    }

    public function getDeliveryMode() {
        return $this->deliveryMode;
    }

    public function setDeliveryMode($deliveryMode) {
        if (is_string($deliveryMode)) {
            $this->deliveryMode = $deliveryMode;
        }
    }

    public function getAddress() {
        return $this->address;
    }

    public function setAddress($address) {
        if (is_string($address)) {
            $this->address = $address;
        }
    }   

    public function __construct() {
        // Affectez des valeurs par défaut aux propriétés
        $this->id = 0;
        $this->utilisateurId = 0;
        $this->product = '';
        $this->quantity = 0;
        $this->deliveryMode = '';
        $this->address = '';
    }
}