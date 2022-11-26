<?php
    require_once "../models/connect.php";
    // echo "<pre>";
    // var_dump($_POST);
    // var_dump($_FILES["product-image"]);
    // die;
    // import file connect.php từ thư mục models để thực hiện kết nối db
    
    // Lấy dữ liệu từ biến $_POST (dữ liệu được đẩy lên từ form thông qua method là POST)
    $productName = $_POST["product-name"];
    $productDesc = $_POST["product-desc"];
    $productImage = $_FILES["product-image"]["name"];
    $productPrice = $_POST["product-price"];
    $categoryId = $_POST["category"];

    /*
        câu lệnh insert dữ liệu vào DB
        lưu ý: giữ nguyên thứ tự cột trong DB
    */ 
    $query = "INSERT INTO products (productName, productDesc, productImage, productPrice, categoryId) VALUES ('$productName','$productDesc','$productImage',$productPrice,$categoryId)";
    move_uploaded_file($_FILES["product-image"]["tmp_name"],"../image/".$_FILES["product-image"]["name"]);
    
    connect($query); //gọi hàm connect() để thực thi câu lệnh insert
    header("location:../views/admin/product-management.php"); //điều hướng về trang quản lý sản phẩm
?>