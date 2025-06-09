<?php
    session_start();
    if(!isset($_SESSION['dangnhap'])){
        header('Location: login.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="styleadmincp.css">
    <style>
        /* .main{
            margin-bottom: 50px;
        } */
        marquee{
            margin-top: 30px;
            margin-bottom: -30px;
            background-color: #fff;
            color: brown;
            font-size: 20px;
            width: 100%;
        }
    </style>
</head>
<body>
   <div class="main">
        <!-- <div class="title_admin">
            <h3>Xin chao admin</h3>
        </div> -->

        <marquee behavior="" direction="">🚗 Chào mừng bạn đến với trang của Admin 🎊</marquee>
          </div>   
        <!-- <div class="wrapper"> -->
        <?php
            include "config/config.php";
            include "modules/header.php";
            include "modules/menu.php";
            include "modules/main.php";
            include "modules/footer.php";
            ?>
        <!-- </div> -->
  
</body>
</html>