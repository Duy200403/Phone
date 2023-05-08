<?php
    include_once("../config/database.php");

        if(isset($_GET['user_id'])){
            $sqlCheckDel = "SELECT * FROM user WHERE user_id =".$_GET['user_id'];
            $queryCheckDel = mysqli_query($conn, $sqlCheckDel);
        if(mysqli_num_rows($queryCheckDel) > 0 ){
            $sqlDel = "DELETE FROM user WHERE user_id =".$_GET['user_id'];
            mysqli_query($conn, $sqlDel);

            header("Location: user.php");
        }else{
            header("Location: user.php");
        }
    }
?>