<?php
include '../Model/Product.php';
class OrderController{

    public function __construct($order_action){
        switch ($order_action) {
            case "add":
                var_dump($_POST);
                die;
                break;
            case "clear":

                break;
            default:
            $product = new Product("","","","","","","","");
            $data["product"] = $product->getAllProduct();
            $_SESSION['shop'] = $data;
        }
    }
    
}

$order_action = ""; 
if(isset($_POST['order_action'])){
    $order_action = $_POST['order_action'];
}else if(isset($_GET['order_action'])){
    $order_action = $_GET['order_action'];
}

$oderController = new OrderController($order_action);