<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title> 
    <style>
        .cartegory-right .row{
            display: grid;
            grid-template-columns: repeat(4,1fr);
            gap: 20px;
        }

        .cartegory-right-content-item{
            background-color: #fff;
            width: 100%;
            filter: drop-shadow(5px 8px 2px #ddd);
            margin-bottom: 40px;
            transition:all 0.3s ease-in-out;
        }

        .cartegory-right-content-item:hover{
            transform:scale(1.05);
        }

        @media screen and (max-width:435px){
            .cartegory-right-content{
                width: 125%;
                margin-top: -50px;
            }
            .cartegory-right .row{
                display: grid;
                grid-template-columns: repeat(2,1fr);
                gap: 20px;
            }

            .cartegory-right-content-item{
                background-color: #fff;
                width: 100%;
                filter: drop-shadow(5px 8px 2px #ddd);
                margin-bottom: 40px;
                transition:all 0.3s ease-in-out;
            }

            .cartegory-right-content-item:hover{
                transform:scale(1.05);
            }

            .cartegory-right-content-item img:hover{
                border: none;       
            }
        }

        @media screen and (min-width:600px) and (max-width:825px){
            .cartegory-right-content{
                width: 125%;
                margin-top: -50px;
            }
            .cartegory-right .row{
                display: grid;
                grid-template-columns: repeat(3,1fr);
                gap: 20px;
            }

            .cartegory-right-content-item{
                background-color: #fff;
                width: 100%;
                filter: drop-shadow(5px 8px 2px #ddd);
                margin-bottom: 40px;
                transition:all 0.3s ease-in-out;
            }

            .cartegory-right-content-item:hover{
                transform:scale(1.05);
            }

            .cartegory-right-content-item img:hover{
                border: none;       
            }
        }
    </style>
</head>
<body>
   
<?php
    $sql_pro = "SELECT *FROM tbl_category,tbl_sanpham WHERE tbl_sanpham.id_danhmuc=tbl_category.id_danhmuc AND tbl_sanpham.id_danhmuc='$_GET[id]' ORDER BY tbl_sanpham.id_sanpham DESC";
    $query_pro = mysqli_query($mysqli, $sql_pro);
?>

<div class="cartegory-right-content row">
    
        <?php
            while($row_pro = mysqli_fetch_array($query_pro)){
        ?>
        <div class="cartegory-right-content-item">
        <a href="index.php?quanly=sanpham&id=<?php echo $row_pro['id_sanpham'] ?>">
                <img src="admincp/modules/quanlysp/uploads/<?php echo $row_pro['hinhanh'] ?>" alt="">
                <h1><?php echo $row_pro['tensanpham'] ?></h1>
                <p><?php echo number_format($row_pro['giasp'],0,',','.') ?> VND</p>
            </a>
        </div>
        <?php } ?>
    
</div>


</body>
</html>
