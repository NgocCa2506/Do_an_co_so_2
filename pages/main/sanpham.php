<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
    <!-- <link rel="stylesheet" href="style.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
    .product {
        padding: 20px;
        width: 80%;
        margin-left: 20px;
    }

    .container-product .cartegory-right {
        width: 100%;
        display: grid;
        grid-template-columns: repeat(4,1fr);
        gap: 10px;
    }

    .cartegory-right-content-item{
        width: 100%;
        background-color: #fff;
    }

    .product-content-right-product-button input{
        color: #fff;
        background-color: brown;
        border: none;
        width: 200px;
        height: 40px;
        margin-left: 40px;
        border-radius: 0px;
    }

    .product-content-right-product-button input:hover{
        color: brown;
        background-color: transparent;
        border: 2px solid brown;
    }

    .product-content-right-bottom{
        cursor: pointer;
        margin-bottom: 20px;
    }

    .product-content-right-bottom-item{
        margin-top: 20px;
    }

    .product-content-right-bottom span{
        text-align: left;
        margin-left: 20px;
    }

    form{
        display: flex;
    }

    @media screen and (max-width: 435px){
        .product{
            padding: 10px;
            width: 120%;
        }
        .product-content form{
            display: block;
            margin-top: -90px;
            margin-left: -20px;
            width: 123%;
            align-items: center;
        }

        .product-content-left{
            padding: 10px;
            justify-content: center;
            width: 90%;
        }

        .product-content-left-big-img img{
            width: 120%;
            text-align: center;
        }

        .product-content-right{
            width: 100%;
            justify-content: center;
        }

        .product-content-right-product-button{
            display: flex;
        }

        .product-content-right-product-button input{
            width: 150px;
        }

        .container-product .cartegory-right {
            width: 120%;
            display: grid;
            grid-template-columns: repeat(2,1fr);
            gap: 10px;
        }
    }

    @media screen and (max-width: 1035px) and (min-width:700px) {
        body{
            font-size: 30px;
        }

        
        .product{
            padding: 10px;
            width: 120%;
        }
        .product-content form{
            display: block;
            margin-top: -90px;
            margin-left: -20px;
            width: 123%;
            align-items: center;
        }

        .product-content-left{
            padding: 10px;
            justify-content: center;
            width: 90%;
        }

        .product-content-left-big-img img{
            width: 120%;
            text-align: center;
        }

        .product-content-right{
            width: 100%;
            justify-content: center;
        }

        .product-content-right h1, p, a{
            font-size: 30px;
        }

        .product-content-right-product-button{
            display: flex;
        }

        .product-content-right-product-button input{
            width: 150px;
        }

        .container-product .cartegory-right {
            width: 120%;
            display: grid;
            grid-template-columns: repeat(3,1fr);
            gap: 10px;
        }

    }

    </style>
</head>
<body>

    <!-- ----- Product ----- -->

<?php
    $sql_chitiet = "SELECT * FROM tbl_sanpham,tbl_category WHERE tbl_sanpham.id_danhmuc = tbl_category.id_danhmuc AND tbl_sanpham.id_sanpham='$_GET[id]' LIMIT 1";
    $query_chitiet = mysqli_query($mysqli, $sql_chitiet);
    while($row_chitiet = mysqli_fetch_array($query_chitiet)){
?>

    <section class="product">
        <div class="container">
            <div class="product-content row">

                <form method="POST" action="pages/main/themsanpham.php?idsanpham=<?php echo $row_chitiet['id_sanpham'] ?>">
                    <div class="product-content-left row">
                        <div class="product-content-left-big-img">
                            <img src="admincp/modules/quanlysp/uploads/<?php echo $row_chitiet['hinhanh'] ?>" alt="">
                        </div>
                        <!-- <div class="product-content-left-small-img">
                            <img src="admincp/modules/quanlysp/uploads/<?php echo $row_chitiet['hinhanh1'] ?>" alt="">
                            <img src="admincp/modules/quanlysp/uploads/<?php echo $row_chitiet['hinhanh2'] ?>" alt="">
                            <img src="admincp/modules/quanlysp/uploads/<?php echo $row_chitiet['hinhanh3'] ?>" alt="">
                            <img src="admincp/modules/quanlysp/uploads/<?php echo $row_chitiet['hinhanh4'] ?>" alt="">
                        </div> -->
                    </div>

                    <div class="product-content-right">
                        <div class="product-content-right-product-name">
                            <h1> <?php echo $row_chitiet['tensanpham'] ?> </h1>
                            <br><p>(51 đánh giá / 62 lượt mua)</p>
                        </div>
                        <div class="product-content-right-product-price">
                            <p style="color: brown;"><?php echo number_format($row_chitiet['giasp'],0,',','.') ?> VND</p>
                        </div>
                        <div class="product-content-right-product-color">
                            <a href=""><img src="admincp/modules/quanlysp/uploads/<?php echo $row_chitiet['hinhanh'] ?>" alt=""></a>
                        </div>

                        <div class="product-content-right-product-size">
                            <p style="font-weight: bold;">Size : </p>
                            <div class="size">
                                <span><a href="">S</a></span>
                                <span><a href="">M</a></span>
                                <span><a href="">L</a></span>
                                <span><a href="">XL</a></span>
                                <span><a href="">XXL</a></span>
                            </div>
                        </div><br>

                        <div class="quatity">
                            <p style="font-weight: bold;">Số lượng : </p>
                            <input name="sl" type="number" min="1" value="1">
                        </div>

                        <div class="product-content-right-product-button row">
                            <a href=""><input type="submit" name="muahang" value="MUA HÀNG"></input></a>
                            <a href=""><input  type="submit" name="themgiohang" value="GIỎ HÀNG"></input></a>
                        </div>

                        <div class="product-content-right-product-icon">
                            <div class="product-content-right-product-icon-item">
                                <a href=""><i class="fa fa-phone"></i> Liên hệ</a>
                                <a href=""><i class="fa fa-comment"></i> Bình luận</a>
                                <a href=""><i class="fa fa-envelope"></i> EMail</a>
                            </div>
                        </div>

                        <div class="product-content-right-bottom">
                            <p><b>ĐẶC ĐIỂM NỔI BẬT </b><span>&#10010;</span></p>
                            <div class="product-content-right-bottom-item">
                                <?php echo $row_chitiet['noidung'] ?>
                            </div>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </section>
    <?php } ?>

    <div class="container-product">
        <div class="cartegory-right row">
                
            <!-- <div class="cartegory-right-item">
                <div class="cartegory-right-top-item">
                    <p>Sản phẩm liên quan</p>
                </div>
    
            </div> -->

            <!-- <?php
                $sql_lienquan = "SELECT * FROM tbl_category,tbl_sanpham WHERE tbl_sanpham.id_danhmuc=tbl_category.id_danhmuc ORDER BY tbl_sanpham.id_sanpham DESC LIMIT 8";
                $query_lienquan = mysqli_query($mysqli, $sql_lienquan);
                while($row_lienquan = mysqli_fetch_array($query_lienquan))
            ?> -->

            <?php
                $sql_lienquan = "SELECT *FROM tbl_category,tbl_sanpham WHERE tbl_sanpham.id_danhmuc=tbl_category.id_danhmuc ORDER BY tbl_sanpham.id_danhmuc DESC LIMIT 4";
                $query_lienquan = mysqli_query($mysqli, $sql_lienquan);
                while($row_lienquan = mysqli_fetch_array($query_lienquan)){
            ?>
    
            <div class="cartegory-right-content row">
                <div class="cartegory-right-content-item">
                    <a href="index.php?quanly=sanpham&id=<?php echo $row_lienquan['id_sanpham'] ?>">
                        <img src="admincp/modules/quanlysp/uploads/<?php echo $row_lienquan['hinhanh'] ?>" alt="">
                        <h1><?php echo $row_lienquan['tensanpham'] ?></h1>
                        <p><?php echo number_format($row_lienquan['giasp'],0,',','.') ?> VND</p>
                    </a>
                </div>
            </div>
    
            <?php } ?>
        </div>
    </div>

</body>
<script>
    const itemsidebar = document.querySelectorAll(".product-content-right-bottom")
    itemsidebar.forEach(function(menu, index){
        menu.addEventListener("click", function(){
            menu.classList.toggle("block")
        })
    })

    //----- Product -----

    const bigImg = document.querySelector(".product-content-left-big-img img")
    const smallImg = document.querySelectorAll(".product-content-left-small-img img")
    smallImg.forEach(function(imgItem, X){
        imgItem.addEventListener("click", function(){
            bigImg.src = imgItem.src
        })
    })
</script>
</html>