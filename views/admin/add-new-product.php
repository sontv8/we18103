<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="../../controllers/addNewProductController.php" method="POST" enctype="multipart/form-data">
        <input type="text" name="product-name" placeholder="Product Name">
        <textarea name="product-desc" id="" cols="30" rows="10" placeholder="Product Desc"></textarea>
        <input type="file" name="product-image">
        <input type="text" name="product-price" placeholder="Product Price">
        <select name="category" id="">
            <?php
            require_once "../../models/connect.php";
            $query = "SELECT * FROM categories";
            $categoryList = getAll($query);
            // echo "<pre>";
            // var_dump($categoryList);
            ?>
            <?php foreach($categoryList as $cate):?>
                <option value="<?php echo $cate["id"]?>"><?php echo $cate["categoryName"]?></option>
            <?php endforeach?>
        </select>
        <button>Add New</button>
    </form>
</body>

</html>