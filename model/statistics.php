<?php
    function load_statistics() {
        $sql = "SELECT
                    COUNT(DISTINCT u.id) AS total_user,
                    COUNT(DISTINCT o.id) AS total_order,
                    SUM(o.total) AS total_income
                FROM `user` u
                LEFT JOIN `order` o ON u.id = o.id_user
                WHERE u.role = 1;
                ";
        $statistics = pdo_query_one($sql);
        return $statistics;
    }

    function loadall_total_sold() {
        $sql = "SELECT 	c.name AS category_name,
                SUM(od.quantity) AS total_sold
                FROM category c
                JOIN product p ON c.id = p.id_category
                JOIN order_details od ON p.id = od.id_product
                GROUP BY c.name
                ORDER BY total_sold DESC;";
        $listTotalSold = pdo_query($sql);
        return $listTotalSold;

    }
?>