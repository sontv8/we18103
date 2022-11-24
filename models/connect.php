<?php
    function connect($query){ // hàm thực hiện việc connect tới db
        $connection = new PDO("mysql:host=localhost;dbname=we18103;charset=utf8","root","");
        // tạo kết nối tới db và truyền vào thông số của db
        $stmt = $connection -> prepare($query); //chuẩn bị câu lệnh $query và gán cho biến $stmt
        $stmt -> execute(); //thực thi câu lệnh $query
        return $stmt; // hàm return về biến $stmt để sử dụng ở những hàm bên dưới
    }
    function getOne($query){ //hàm thực hiện việc lấy ra 1 dòng dữ liệu trong db
        $data = connect($query) -> fetch();
        /*
            gọi hàm connect() bên trên để thực thi câu lệnh $query, 
            sau đó gọi ra phương thức fetch() để lấy ra 1 dòng dữ liệu
            sau khi lấy ra dữ liệu thì đổ dữ liệu vào biến $data
        */ 
        return $data; //return lại giá trị cho hàm để sử dụng ở hàm khác hoặc file khác
    }
    function getAll($query){ 
        /*
            hàm thực hiện việc lâý ra toàn bộ dữ liệu 
            dựa vào câu lệnh truy vấn db truyền 
            vào biến $query
        */
        $data = connect($query) -> fetchAll();
        /*
            gọi hàm connect để kết nối và thực thi câu lệnh sql
            gọi phương thức fetchAll() để lấy toàn bộ dữ liệu
        */ 
        return $data; //return về giá trị để sử dụng ở nơi khác
    }
?>
