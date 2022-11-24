<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        img{
            width: 25%;
        }
        table,th,td{
            border: 1px solid orange;
        }
    </style>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Product Name</th>
                <th>Product Desc</th>
                <th>Product Image</th>
                <th>Product Price</th>
                <th>Category</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
                require_once "../../models/connect.php"; //import file connect.php từ thư mục models vào
                $query = "SELECT * FROM categories"; //tạo câu lệnh truy vấn db
                $productList = getAll($query);
                /*
                    gọi hàm getAll() từ file connect.php và truyền vào tham số là câu lệnh sql ở trên
                    sau khi thực thi hàm getAll() lấy ra dữ liệu và đổ vào biến $productList
                */
            ?>
            <?php foreach($productList as $product):?>
                <tr>
                    <td><?php echo $product["id"]?></td>
                    <td><?php echo $product["productName"]?></td>
                    <td><?php echo $product["productDesc"]?></td>
                    <td><img src="<?php echo $product["productImage"]?>" alt=""></td>
                    <td><?php echo $product["productPrice"]?></td>
                    <td><?php echo $product["categoryId"]?></td>
                    <td>
                        <button>Update</button>
                        <button>Delete</button>
                    </td>
                </tr>
            <?php endforeach?>
        </tbody>
    </table>
</body>
</html>