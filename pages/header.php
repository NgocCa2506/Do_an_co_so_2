<?php

    $sql_danhmuc = "SELECT * FROM tbl_category ORDER BY id_danhmuc DESC";
    $query_danhmuc = mysqli_query($mysqli, $sql_danhmuc);
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
 <style>
    .nav{
        display: flex;
        padding: 5px;
        color: #fff;
        background-color: #273c75;
        font-size: 20px;
        text-align: right;
        cursor: pointer;
        display: none;
    }

    header{
        position: fixed;
        padding: 10px;
        display: flex;
        align-items: center;
        top: 0;
        width: 100%;
        z-index: 1;
        border-bottom: 1px solid #333;
    }

    .logo{
        flex: 0.5;
    }

    header .logo img{
        width: 60px;
        text-align: center;
    }

    li{
        list-style: none;
    }

    a{
        color: #333;
        text-decoration: none;
    }

    header .menu{
        display: flex;
        flex: 2.5;
        width: 103%;
    }

    .menu a{
        padding: 10px;
    }

    .menu a:hover{
        color: #fff;
        background-color: #273c75;
    }

    .other{
        display: flex;
        flex: 1;
        width: 100%;
    }

    .other a{
        padding: 10px;
    }

    .other input{
        border: none;
        border-bottom: 1px solid #333;
        outline: none;
    }

    .other button{
        border: none;
        cursor: pointer;
    }

    @media screen and (max-width: 435px){
        .nav{
            display: flex;
            align-items: center;
        }
        /* Logo */
        .nav-logo{
            flex: 0.5;
            text-align: center;
        }

        .nav img{
            width: 30px;
            border-radius: 50%;
        }
        /* Other */
        .nav-other form{
            margin-left: 30px;
            flex: 2.5;
            display: flex;
            color: #fff;
            padding: 5px;
        }
        .nav-other form a{
            color: #fff;
            padding: 3px;
            margin-left: 20px;
        }
        .nav-other form input{
            border: none;
            outline: none;
            border-radius: 3px;
        }
        .nav-other form button{
            border: none;
            outline: none;
            margin-left: 10px;
            color: #fff;
            background-color: #273c75;
        }
        /* Icon */
        .nav-icon{
            flex: 0.5;
        }
        /* Header */
        header{
            flex-direction: column;
            position: relative;
            display: none;
        }

        .logo{
            display: none;
            width: 30%;
        }

        .menu{
            flex-direction: column;
            /* background-color: antiquewhite; */
            background-color: #273c75;
            margin-left: -15px;
            margin-top: -10px;
        }

        .menu a{
            color: #fff;
            margin-left: 20px;
        }

        .menu a:hover{
            color: red;
        }

        .other{
            display: none;
        }
        
    }

    @media screen and (min-width:600px) and (max-width: 1035px){
        .nav{
            display: flex;
            align-items: center;
            width: 100%;
            
        }
        /* Logo */
        .nav-logo{
            flex: 1;
            text-align: left;
            margin-left: 30px;
        }

        .nav img{
            width: 30px;
            border-radius: 50%;
        }
        /* Other */
        .nav-other form{
            flex: 4;
            display: flex;
            color: #fff;
            padding: 10px;
            width: 150%;
            text-align: right;
            justify-content: center;
        }
        .nav-other form a{
            color: #fff;
            padding: 3px;
            margin-left: 25px;
        }
        .nav-other form input{
            border: none;
            outline: none;
            width: 70%;

        }
        .nav-other form button{
            border: none;
            background-color: #fff;
        }
        /* Icon */
        .nav-icon{
            flex: 1;
        }
        /* Header */
        header{
            flex-direction: column;
            position: relative;
            display: none;
            border: none;
        }

        .logo{
            display: none;
        }

        .menu{
            background-color: #273c75;
            flex-direction: column;
            width: 40%;
            margin-left: -15px;
            margin-top: -10px;
            color: #fff;
        }

        .menu a{
            color: #fff;
            margin-left: 20px;
        }

        .menu a:hover{
            color: red;
        }

        .other{
            display: none;
        }
        
    }

</style>   
</head>
<body>
    <?php
        if(isset($_GET['dangxuat']) && $_GET['dangxuat']==1){
            unset($_SESSION['dangky']);
        }
    ?>

    <div class="nav">
        <div class="nav-logo">
            <a href="http://localhost/tutphp/MBShop/index.php"><img src="images/icon.png"></a>
        </div>
        
        
        <div class="nav-other">      
            <form action="index.php?quanly=timkiem" method="POST">
            <input autocomplete="off" name="tukhoa" type="text" placeholder="Tìm kiếm ..."></i>
            <button name="timkiem" type="submit"><i class="fa fa-search"></i></button>
            <a class="fa fa-shopping-bag" href="index.php?quanly=giohang"></a>
                <?php
                    if(isset($_SESSION['dangky'])){
                ?>
                <a href="index.php?dangxuat=1"><i class="fa fa-sign-out"></i></a>
                <?php
                    } else {
                ?>
                <a href="index.php?quanly=dangky"><i class="fa fa-user"></i></a>
                <?php } ?>
            </form>
        </div>

        <div class="nav-icon" id="nav"><i class="fa-solid fa-bars"></i></div>
    </div>

    <header>

        <div class="logo">
        <a href="http://localhost/tutphp/MBShop/index.php"><img src="images/icon.png"></a>
        </div>
        <div class="menu">
            <?php
                while($row_danhmuc = mysqli_fetch_array($query_danhmuc)){
            ?>
            <li><a href="index.php?quanly=danhmucsanpham&id=<?php echo $row_danhmuc['id_danhmuc'] ?>"><?php echo $row_danhmuc['tendanhmuc'] ?></a></li>
            <?php } ?>
            <li><a href="index.php?quanly=lienhe">LIÊN HỆ</a></li>
            <li><a href="index.php?quanly=thongtin">THÔNG TIN</a></li>
        </div>

        <div class="other">      
            <form action="index.php?quanly=timkiem" method="POST">
                <input autocomplete="off" name="tukhoa" type="text" placeholder="Tìm kiếm ..."></i>
                <button name="timkiem" type="submit"><i class="fa fa-search"></i></button>
                <a class="fa fa-shopping-bag" href="index.php?quanly=giohang"></a>
                <?php
                    if(isset($_SESSION['dangky'])){
                ?>
                <a href="index.php?dangxuat=1"><i class="fa fa-sign-out"></i></a>
                <?php
                    } else {
                ?>
                <a href="index.php?quanly=dangky"><i class="fa fa-user"></i></a>
                <?php } ?>
            </form>
                <!-- <input type="text" placeholder="Tìm kiếm ..."><button name="timkiem" type="submit"><i class="fa fa-search"></i></button>
                <a class="fa fa-shopping-bag" href=""></a>
                <a class="fa fa-user" href=""></a> -->
        </div>
    </header>
</body>
<script>
    $(document).ready(function(){
        $('#nav').click(function(){
            $('header').slideToggle();
        });
    })
</script>
</html>