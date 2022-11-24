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
        $connection = new PDO("mysql:host=localhost;dbname=we18103;charset=utf8","root","");
        $query = "SELECT * FROM products";
        $stmt = $connection -> prepare($query);
        $stmt -> execute();
        $productList = $stmt -> fetchAll();
        // echo "<pre>";
        // var_dump($productList);
    ?>

    <div class="container w-[1280px] m-auto grid grid-cols-3 gap-8">
        <?php foreach($productList as $product):?>
            
            <div>
                <img src="<?php echo $product["productImage"]?>" alt="" class="w-full">
                <h3><?php echo $product["productName"]?></h3>
                <p><?php echo $product["productDesc"]?></p>
                <p><?php echo $product["productPrice"]?></p>
            </div>
        <?php endforeach?>
    </div>
    <h2>Hello</h2>
</body>
</html>