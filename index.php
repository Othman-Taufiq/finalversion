<?php

session_start();

require_once 'conf.php';
require_once 'controllers/helpers.php';
require_once 'controllers/class_validate.php';
require_once "models/model.Class.php";

require_once "models/Product/productManager.Class.php";
require_once "models/Testimony/testimonyManager.Class.php";
require_once "models/Post/postManager.Class.php";
require_once "models/Order/orderManager.Class.php";
require_once "models/User/userManager.Class.php";

if(isset($_GET['logout'])){
    if(isset($_SESSION)){
        session_unset(); 
        session_destroy(); 
    }
}

$p = $_GET["p"] ?? "";

include "views/Common/header.php";
include "views/Common/navbar.php";

$productManager = new ProductManager();
$productManager->loadAllProducts();
$products = $productManager->getAllProducts();

$testimonyManager = new TestimonyManager();
$testimonyManager->loadAllTestimonies();
$testimonies = $testimonyManager->getAllTestimonies();

$postManager = new PostManager();
$postManager->loadAllPosts();
$posts = $postManager->getAllPosts();

$orderManager = new OrderManager();
$orderManager->loadAllOrders();
$orders = $orderManager->getAllOrders();

switch ($p) {
    case "":
        include PATH_DIR."views/home.php";
        break;

    case "admin":
        require PATH_DIR."views/is_admin.php";
        include PATH_DIR."views/admin.php";
        break;

    case "contact":
        include PATH_DIR."views/Contact.php";
        break;

    case "cfp":
        include PATH_DIR."assets/cfp.php";
        break;

    // Application "Order" //

    case "vieworders":
    case "orders":
        require PATH_DIR."views/is_admin.php";
        include PATH_DIR."views/Order/ordersList.php";
        break;
        
    case "vieworder":
        require PATH_DIR."views/is_connected.php";
        $orderId = $_GET['id'] ?? null;
        if (!empty($orderId)) {
            $order = $orderManager->getOrderById($orderId);
            if (!is_null($order)) {
                include PATH_DIR."views/Order/orderDetail.php";
            } else {
                echo "Order not found";
            }
        } else {
            echo "Invalid ID";
        }
        break;
            
    case "addorder":
    case "order":
    case "command":
    case "comand":
        require PATH_DIR."views/is_connected.php";
        include PATH_DIR."controllers/orderController.php";
        include PATH_DIR."views/Order/addOrder.php";
        break;

    // Application "Product" //

    case "viewproducts":
    case "products":
        include PATH_DIR."views/Product/productsList.php";
        break;

    case "viewproduct":
        $productId = $_GET['id'] ?? null;
        if (!empty($productId)) {
            $product = $productManager->getProductById($productId);
            if (!is_null($product)) {
                include PATH_DIR."views/Product/productDetail.php";
            } else {
                echo "Product not found";
            }
        } else {
            echo "Invalid ID";
        }
        break;

    case "addproduct":
        require PATH_DIR."views/is_admin.php";
        include PATH_DIR."controllers/productController.php";
        include PATH_DIR."views/Product/addProduct.php";
        break;

    // Application "Testimony" //

    case "viewtestimonies":
        include PATH_DIR."views/Testimony/testimoniesList.php";
        break;

    case "viewtestimony":
        $testimonyId = $_GET['id'] ?? null;
        if (!empty($testimonyId)) {
            $testimony = $testimonyManager->getTestimonyById($testimonyId);
            if (!is_null($testimony)) {
                include PATH_DIR."views/Testimony/testimonyDetail.php";
            } else {
                echo "Testimony not found";
            }
        } else {
            echo "Invalid ID";
        }
        break;

    case "addtestimony":
        require PATH_DIR."views/is_admin.php";
        include PATH_DIR."controllers/testimonyController.php";
        include PATH_DIR."views/Testimony/addTestimony.php";
        break;

    // Application "Post" //

    case "viewposts":
    case "posts":
        include PATH_DIR."views/Post/postsList.php";
        break;

    case "viewpost":
        $postId = $_GET['id'] ?? null;
        if (!empty($postId)) {
            $post = $postManager->getPostById($postId);
            if (!is_null($post)) {
                include PATH_DIR."views/Post/postDetail.php";
            } else {
                echo "Post not found";
            }
        } else {
            echo "Invalid ID";
        }
        break;

    case "addpost":
        require PATH_DIR."views/is_admin.php";
        include PATH_DIR."controllers/postController.php";
        include PATH_DIR."views/Post/addPost.php";
        break;

    // Static Pages //

    case "perou":
        include PATH_DIR."views/Static/perou.php";
        break;

    case "qeros":
        include PATH_DIR."views/Static/qeros.php";
        break;

    case "voyages":
        include PATH_DIR."views/Static/voyages.php";
        break;

    case "engagement":
        include PATH_DIR."views/Static/engagement.php";
        break;

    case "about":
        include PATH_DIR."views/Static/about.php";
        break;

    case "faq":
        include PATH_DIR."views/Static/faq.php";
        break;

    case "signup":
        require_once PATH_DIR."controllers/userController.php";
        require PATH_DIR."views/is_not_connected.php";
        include PATH_DIR."views/User/signup.php";
        break;

    case "signupNotif":
        include PATH_DIR."views/User/signupNotif.php";
        break;

    case "login":
        require_once PATH_DIR."controllers/userController.php";
        require PATH_DIR."views/is_not_connected.php";
        include PATH_DIR."views/User/login.php";
        break;

    case "reset":
        require_once PATH_DIR."controllers/userController.php";
        require PATH_DIR."views/is_not_connected.php";
        include PATH_DIR."views/User/reset.php";
        break;

    case "resetnotif":
        require PATH_DIR."views/is_not_connected.php";
        include PATH_DIR."views/User/resetnotif.php";
        break;

    case "logged":
        require PATH_DIR."views/is_connected.php"; //si pas connecté die
        include PATH_DIR."views/User/logged.php";
        break;

    case "resetpass":
        require_once PATH_DIR."controllers/userController.php";
        require PATH_DIR."views/is_not_connected.php";
        include PATH_DIR."views/User/resetpass.php";
        break;

    default:
        echo "Page not found";
        break;
}

include PATH_DIR."views/Common/footer.php";
?>
