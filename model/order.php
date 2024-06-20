<?php 
    function loadall_order() {
        $sql = "SELECT * FROM `order` WHERE 1 ORDER BY id DESC";
        $listOrder = pdo_query($sql);
        return $listOrder;
    }

    function loadall_order_top5() {
        $sql = "SELECT * FROM `order` WHERE 1 ORDER BY id DESC LIMIT 0,5";
        $listOrder = pdo_query($sql);
        return $listOrder;
    }

    function loadall_orderDetail($id){
        $sql =  "SELECT 
                    orders.id AS order_id,
                    orders.name AS order_name,
                    orders.tel AS order_tel,
                    orders.address AS order_address,
                    orders.pay_method AS order_pay_method,
                    orders.total AS order_total,
                    orders.date AS order_date,
                    users.user AS user_name,
                    users.email AS user_email,
                    order_details.quantity AS order_detail_quantity,
                    order_details.price AS order_detail_price,
                    products.name AS product_name,
                    products.img AS product_img
                FROM 
                    `order` AS orders
                JOIN 
                    `user` AS users ON orders.id_user = users.id
                JOIN 
                    `order_details` ON orders.id = order_details.id_order
                JOIN 
                    `product` AS products ON order_details.id_product = products.id
                WHERE 
                    orders.id = $id;    
                ";
                
        $listOrderDetail = pdo_query($sql);
        return $listOrderDetail;
    }


    function addOrder($name, $tel, $address, $payMethod, $total, $date, $status, $idUser){
        $sql="INSERT INTO `order` (`name`, `tel`, `address`, `pay_method`, `total`, `date`, `status`, `id_user`) 
        VALUES ('$name', '$tel', '$address', $payMethod, $total, '$date', $status, $idUser);";
        $id = pdo_executeid($sql);
        return $id;
    }

    function addOrderDetail($quantity, $price, $idProduct, $idOrder){
        $sql="INSERT INTO `order_details` (`quantity`, `price`, `id_product`, `id_order`) 
        VALUES ($quantity, $price, $idProduct, $idOrder);";
        pdo_execute($sql);
    }
?>