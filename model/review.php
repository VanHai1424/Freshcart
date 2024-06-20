<?php 
    function loadall_review($id_product = 0) {
        $sql = "SELECT r.*, u.user AS user_name FROM `review` r
        JOIN `user` u ON r.id_user = u.id 
        WHERE 1";
        if(isset($id_product) && ($id_product > 0)) {
            $sql .= " AND id_product = $id_product";
        }
        $listReview = pdo_query($sql);
        return $listReview;
    }

    function delete_review($id) {
        $sql = "DELETE FROM `review` WHERE id=$id";
        pdo_execute($sql);
    }

    function insert_review($idUser, $idProduct, $content, $date){
        $sql = "INSERT INTO `review`(`id_user`, `id_product`, `content`, `date`) VALUES ($idUser, $idProduct, '$content', '$date')";
        pdo_execute($sql);
    }

?>