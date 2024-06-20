<?php 
    function loadall_product($key_word = "", $id_category = 0, $offset = "", $countPage = 0) {
        $sql = "SELECT p.*, c.name AS category_name
                FROM product p
                JOIN category c ON p.id_category = c.id
                WHERE 1";
    
        if ($key_word != "") {
            $sql .= " AND p.name LIKE '%" . $key_word . "%'";
        }
    
        if ($id_category > 0) {
            $sql .= " AND p.id_category =" . $id_category . "";
        }
        $sql .= " ORDER BY p.price ASC";

        if ($countPage > 0 && $offset >= 0) {
            $sql .= " LIMIT $offset, $countPage";
        }
        
        $listProduct = pdo_query($sql);
        return  $listProduct;
    }

    function loadCount($table) {
        $sql = "SELECT COUNT(*) AS total FROM $table";
        $total = pdo_query($sql);
        return $total[0]['total'];
    }

    function loadall_sanpham_top10(){
        $sql="SELECT * FROM product WHERE 1 ORDER BY id DESC LIMIT 0,10";
        $listProduct = pdo_query($sql);
        return $listProduct;
    }

    function insert_product($name, $img, $price, $quantity, $desc, $id_category) {
        $sql = "INSERT INTO `product`(`name`, `img`, `price`, `quantity`, `desc`, `id_category`) VALUES ('$name', '$img', $price, $quantity, '$desc', $id_category)";
        pdo_execute($sql);
    }

    function loadone_product($id){
        $sql="SELECT p.*, c.name AS category_name FROM product p 
        JOIN category c ON p.id_category = c.id 
        WHERE p.id=$id";
        $product = pdo_query_one($sql);
        return $product;
    }

    function loadall_product_related($id, $idCategory) {
        $sql = "SELECT * FROM `product` WHERE id_category = $idCategory AND id <> $id";
        $productRelated = pdo_query($sql);
        return $productRelated;
    }

    function update_product($name, $fileName, $price, $quantity, $desc, $id_category, $id) {
        if($fileName != "") {
            $sql = "UPDATE `product` SET `name`='$name',`img`='$fileName', `price`=$price, `quantity`=$quantity, `desc`='$desc', `id_category`=$id_category WHERE id = $id";
        } else 
            $sql = "UPDATE `product` SET `name`='$name', `price`=$price, `quantity`=$quantity, `desc`='$desc', `id_category`=$id_category WHERE id = $id";
        pdo_execute($sql);
    }

    function delete_product($id) {
        $sql = "DELETE FROM `product` WHERE id=$id";
        pdo_execute($sql);
    }
?>