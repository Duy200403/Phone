<?php
    if(isset($_POST['sbm'])) {
        $prd_name = $_POST['prd_name'];
        $prd_price = $_POST['prd_price'];
        $prd_new = $_POST['prd_new'];
        $cate_id = $_POST['cate_id'];
        $prd_ima = $_FILES['prd_ima']['name'];
        $prd_tmp_img = $_FILES['prd_ima']['tmp_name'];
        // Thêm dữ liệu vào csdl
        $sqlInsertProduct = "INSERT INTO products(cate_id, prd_name, prd_price, 
        prd_new, prd_ima)
        VALUES ($cate_id, '$prd_name', $prd_price,
        '$prd_new', '$prd_ima')";

        include_once("../config/database.php"); //Kết nối tới csdl
        mysqli_query($conn, $sqlInsertProduct);

        //Upload file ảnh
        move_uploaded_file($prd_tmp_img, "images/".$prd_ima);

        header("Location: product.php");
    }
?>