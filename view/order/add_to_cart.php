<?php 
    session_start();
    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $img = $_POST['img'];
        $quantity = $_POST['quantity'];
        $price = $_POST['price'];
        $quantityOrder = ($_POST['quantityOrder'] > 1) ? $_POST['quantityOrder'] : 1;
        $cart = $_SESSION['cart'] ?? [];
        $index = array_search($id, array_column($cart, 'id'));
        if($index !== false) {
            $_SESSION['cart'][$index]['quantityOrder']+= $quantityOrder;
            if($_SESSION['cart'][$index]['quantityOrder'] > $quantity) {
                $_SESSION['cart'][$index]['quantityOrder'] = $quantity;
            } 
            
        } else {
            $product = [
                'id' => $id,
                'name' => $name,
                'img' => $img,
                'quantity' => $quantity,
                'price' => $price,
                'quantityOrder' => ($quantityOrder > $quantity) ? $quantity : $quantityOrder 
            ];
            $_SESSION['cart'][] = $product;
        }
        echo count($_SESSION['cart']);
    } else {
        echo 'Yêu cầu không hợp lệ !';
    }
?>