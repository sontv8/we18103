<?php
    require_once "../models/connect.php";
    // echo "<pre>";
    // var_dump($_POST);die;
    $productName = $_POST["product-name"];
    $productDesc = $_POST["product-desc"];
    $productImage = $_POST["product-image"];
    $productPrice = $_POST["product-price"];
    $categoryId = $_POST["category"];
    $query = "INSERT INTO products (productName, productDesc, productImage, productPrice, categoryId) VALUES ('$productName','$productDesc','$productImage',$productPrice,$categoryId)";
    connect($query);
    header("location:../views/admin/product-management.php");
?>