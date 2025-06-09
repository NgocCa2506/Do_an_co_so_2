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

    <style>
        header{
            border-bottom: 1px solid black;
        }

        header .logo img{
            width: 35%;
        }

        .others{
            width: 100%;
        }
        .others button{
            margin-left: -20px;
            width: 30px;
            height: 20px;
            border: none;
            cursor: pointer;
            background-color: #fff;
        }
        .others button:hover{
            color: brown;
        }
        .others form{
            display: flex;
        }

        .others form a:hover{
            color: brown;
        }

        .others .sub-menu{
            margin-top: -30px;
            margin-left: -30px;
            text-align: left;
        }

        .menu li p{
            margin-left: -25px;
            font-size: 20px;
        }

        .menu li p:hover{
            color: brown;
        }
    </style>
</head>
<body>
<header>
    <div class="logo">
        <a href="http://localhost/tutphp/MBShop/index.php"><img src="images/icon.png"></a>
    </div>

    <?php
        if(isset($_GET['dangxuat']) && $_GET['dangxuat']==1){
            unset($_SESSION['dangky']);
        }
    ?>

    <div class="menu">
        <?php
            while($row_danhmuc = mysqli_fetch_array($query_danhmuc)){
        ?>
        <li><a href="index.php?quanly=danhmucsanpham&id=<?php echo $row_danhmuc['id_danhmuc'] ?>"><?php echo $row_danhmuc['tendanhmuc'] ?></a></li>
        <?php } ?>
        <!-- <li><a href="index.php?quanly=giohang">GIO HANG</a></li> -->
        <li><a href="index.php?quanly=lienhe">LIEN HE</a></li>
        <li><a href="index.php?quanly=thongtin">THÔNG TIN</a></li>
        <!-- <li><a href="index.php?quanly=dangky">ĐĂNG KÝ</a></li> -->
    </div>
    
    <div class="others">
        <form action="index.php?quanly=timkiem" method="POST">
        <li><input autocomplete="off" name="tukhoa" type="text" placeholder="Tìm kiếm ..."><i class="fa fa-search"></i></li>
        <li><button name="timkiem" type="submit"><i class="fa fa-search"></i></button></li>

        <div class="menu">
            <li>
                 <p class="fa fa-user">
                 </p>
                <ul class="sub-menu">
                <?php
                    if(isset($_SESSION['dangky'])){
                ?>
                <li><a href="index.php?dangxuat=1">ĐĂNG XUẤT</a></li>
                <?php
                    } else {
                ?>
                <li><a href="index.php?quanly=dangky">ĐĂNG KÝ</a></li>
                <?php } ?>
                <li><a href="index.php?quanly=dangnhap">ĐĂNG NHẬP</a></li>
                </ul>
            </li>
        </div>
        
        <li><a class="fa fa-shopping-bag" href="index.php?quanly=giohang"></a></li>

        </form>
        
    </div>
    
</header>
</body>
</html>