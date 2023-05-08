<?php
    include_once("../config/database.php");

    if(isset($_GET['prd_id'])){
        $sqlCheckDel = "SELECT * FROM products WHERE prd_id =".$_GET['prd_id'];
        $queryCheckDel = mysqli_query($conn, $sqlCheckDel);
        if(mysqli_num_rows($queryCheckDel) > 0 ){
            $sqlDel = "DELETE FROM products WHERE prd_id =".$_GET['prd_id'];
            mysqli_query($conn, $sqlDel);
            
            header("Location: product.php");
        }else{
            header("Location: product.php");
        }
    }
?>