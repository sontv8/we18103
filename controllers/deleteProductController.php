<?php
    require_once "../models/connect.php";
    $productId = $_GET["id"];
    $query = "DELETE FROM products WHERE id=$productId";
    // echo 1; die;
    connect($query);

    header("location:../views/admin/product-management.php");
?>