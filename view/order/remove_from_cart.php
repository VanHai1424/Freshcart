<?php 
    session_start();
    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        $id = $_POST['id'];
        $index = array_search($id, array_column($_SESSION['cart'], 'id'));
        if($index !== false) {
            unset($_SESSION['cart'][$index]);
            $_SESSION['cart'] = array_values($_SESSION['cart']);
        } else {
            echo 'Sản phẩm không tồn tại';
        }

    } else {
        echo 'Yêu cầu không hợp lệ !';
    }
?>