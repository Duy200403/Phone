<?php
    include_once("../config/database.php");

    if(isset($_GET['cate_id'])){
        $sqlCheckDel = "SELECT * FROM category WHERE cate_id =".$_GET['cate_id'];
        $queryCheckDel = mysqli_query($conn, $sqlCheckDel);
        if(mysqli_num_rows($queryCheckDel) > 0 ){
            $sqlDel = "DELETE FROM category WHERE cate_id =".$_GET['cate_id'];
            mysqli_query($conn, $sqlDel);
            
            header("Location: category.php");
        }else{
            header("Location: category.php");
        }
    }
?>