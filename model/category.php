<?php 
    function loadall_category($key_word=""){
        $sql = "SELECT * FROM category WHERE 1";

        if($key_word!=""){
            $sql.=" AND name LIKE '%".$key_word."%'";
        }

        $listCategory = pdo_query($sql);
        return  $listCategory;
    }

    function insert_category($name, $img) {
        $sql = "INSERT INTO `category`(`name`, `img`) VALUES ('$name','$img')";
        pdo_execute($sql);
    }

    function loadone_category($id){
        $sql="SELECT * FROM category WHERE id=".$id;
        $category = pdo_query_one($sql);
        return $category;
    }

    function update_category($name, $fileName, $id) {
        if($fileName != "") {
            $sql = "UPDATE `category` SET `name`='$name',`img`='$fileName' WHERE id = $id";
        } else 
            $sql = "UPDATE `category` SET `name`='$name' WHERE `id`= $id";
        pdo_execute($sql);
    }

    function delete_category($id) {
        $sql = "DELETE FROM `category` WHERE id=$id";
        pdo_execute($sql);
    }
?>