<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <?php
        require_once "../../models/connect.php";
        $productId = $_GET["id"];
        $query = "SELECT * FROM products WHERE id=$productId";
        $product = getOne($query);
        // echo "<pre>";
        // var_dump($product);die;
    ?>
    <form action="../../controllers/updateProductController.php" method="POST" enctype="multipart/form-data" class="w-[500px] m-auto">
        <input type="text" name="product-name" placeholder="Product Name" class="w-full border mt-8" value="<?php echo $product["productName"]?>">
        <textarea name="product-desc" id="" cols="30" rows="10" placeholder="Product Desc" class="w-full border mt-8"><?php echo $product["productDesc"]?></textarea>
        <input type="file" name="new-image" class="w-full border mt-8">
        <input type="text" name="old-image" value="<?php echo $product['productImage']?>" hidden>
        <input type="text" name="product-price" placeholder="Product Price" class="w-full border mt-8" value="<?php echo $product['productPrice']?>">
        <select name="category" id=""  class="w-full border mt-8">
            <?php
            $query = "SELECT * FROM categories";
            $categoryList = getAll($query);
            // echo "<pre>";
            // var_dump($categoryList);
            ?>
            <?php foreach($categoryList as $cate):?>
                <option value="<?php echo $cate["id"]?>"><?php echo $cate["categoryName"]?></option>
            <?php endforeach?>
        </select>
        <button class="w-full bg-green-700 text-white mt-8">Update Product</button>
    </form>
</body>

</html>