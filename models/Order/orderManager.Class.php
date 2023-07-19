<?php
require_once PATH_DIR."models/Order/order.Class.php";

class OrderManager extends Model
{
    private $orders;

    public function __construct()
    {
        $this->orders = array();
    }

    public function addOrder($order)
    {
        $this->orders[] = $order;
    }

    public function getAllOrders()
    {
        return $this->orders;
    }

    public function loadAllOrders()
    {
        $req = $this->getDatabase()->prepare("SELECT * FROM orders");
        $req->execute();
        $ordersData = $req->fetchAll(PDO::FETCH_ASSOC);
        $req->closeCursor();

        foreach ($ordersData as $orderData) {
            $newOrder = new Order();
            $newOrder->setId($orderData['id_commande']);
            $newOrder->setUtilisateurId($orderData['id_utilisateur']);
            $newOrder->setProduct($orderData['product']);
            $newOrder->setQuantity($orderData['quantity']);
            $newOrder->setDeliveryMode($orderData['id_mode_livraison']);
            $newOrder->setAddress($orderData['id_adresse']);

            $this->addOrder($newOrder);
        }
    }

    public function getOrderById($id)
    {
        $sql = "SELECT * FROM orders WHERE id_commande = :id_commande";
        $stmt = $this->getDatabase()->prepare($sql);
        $stmt->bindValue(':id_commande', $id, PDO::PARAM_INT);
        $stmt->execute();
        $orderData = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($orderData) {
            $order = new Order();
            $order->setId($orderData['id_commande']);
            $order->setUtilisateurId($orderData['id_utilisateur']);
            $order->setProduct($orderData['product']);
            $order->setQuantity($orderData['quantity']);
            $order->setDeliveryMode($orderData['id_mode_livraison']);
            $order->setAddress($orderData['id_adresse']);

            return $order;
        } else {
            return null;
        }
    }

    public function createNewOrder($utilisateurId, $product, $quantity, $deliveryMode, $address)
    {
        $orderDate = date('Y-m-d H:i:s');

        $sql = "INSERT INTO orders (date_commande, id_utilisateur, product, quantity, id_mode_livraison, id_adresse) 
                VALUES (:date_commande, :id_utilisateur, :product, :quantity, :id_mode_livraison, :id_adresse)";
        $stmt = $this->getDatabase()->prepare($sql);
        $stmt->bindParam(':date_commande', $orderDate);
        $stmt->bindParam(':id_utilisateur', $utilisateurId);
        $stmt->bindParam(':product', $product);
        $stmt->bindParam(':quantity', $quantity);
        $stmt->bindParam(':id_mode_livraison', $deliveryMode);
        $stmt->bindParam(':id_adresse', $address);
        $stmt->execute();

        $id = $this->getDatabase()->lastInsertId();

        $newOrder = new Order();
        $newOrder->setId($id);
        $newOrder->setUtilisateurId($utilisateurId);
        $newOrder->setProduct($product);
        $newOrder->setQuantity($quantity);
        $newOrder->setDeliveryMode($deliveryMode);
        $newOrder->setAddress($address);

        $this->addOrder($newOrder);

        return $id;
    }
}