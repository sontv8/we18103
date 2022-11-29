<?php
    require_once "../models/connect.php";
    // echo 1; die;
    // echo "<pre>";
    // var_dump($_POST);
    // var_dump($_FILES);
    // die;



    $productId = $_POST["product-id"];
    $productName = $_POST["product-name"];
    $productDesc = $_POST["product-desc"];
    $productPrice =  $_POST["product-price"];
    $categoryId =  $_POST["category"];

    if(empty($_FILES["new-image"]["name"])){ //kiểm tra xem có chọn ảnh hay không bằng cách check key "name" có trả về chuỗi rỗng hay không
        $productImage = $_POST["old-image"];//nếu "name" trả về rỗng thì thực hiện lấy tên ảnh cũ từ $_POST theo key "old-image" để gán cho biến $productImage
    }else{ //ngược lại nếu "name" không rỗng
        $productImage =  $_FILES["new-image"]["name"]; //lấy ra tên ảnh từ file mới chọn và gán cho biến $productImage
        move_uploaded_file($_FILES["new-image"]["tmp_name"],"../image/".$_FILES["new-image"]["name"]);//thực hiện chuyển file từ thư mục tạm vào thư mục image
    }

    $query = "UPDATE products SET productName='$productName' , productDesc='$productDesc' , productImage='$productImage' , productPrice=$productPrice , categoryId=$categoryId WHERE id=$productId";
    connect($query);
    

    header("location: ../views/admin/product-management.php");
?>