<?php
    if(isset($_POST['timkiem'])){
        $tukhoa = $_POST['tukhoa'];
    }
    $sql_pro = "SELECT * FROM tbl_sanpham WHERE tbl_sanpham.tensanpham LIKE '%".$tukhoa."%'";
    $query_pro = mysqli_query($mysqli, $sql_pro);
?>
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
            gap: 10px;
        }

        .cartegory-right-content-item{
            background-color: #fff;
            width: 100%;
        }
    </style>
</head>
<body>
   
<h3>Kết quả tìm kiếm: <i style="color:red;"><?php echo $_POST['tukhoa']; ?></i></h3>

<div class="cartegory-right-content row">

    <?php
    
    while($row = mysqli_fetch_array($query_pro)){ 
    ?>

    <div class="cartegory-right-content-item">       
        <a href="index.php?quanly=sanpham&id=<?php echo $row['id_sanpham'] ?>">
        <img src="admincp/modules/quanlysp/uploads/<?php echo $row['hinhanh'] ?>" alt="">
        <h1><?php echo $row['tensanpham'] ?></h1>
        <p><?php echo number_format($row['giasp'],0,',','.') ?> VND</p>
        </a>
    </div>

    <?php 
        }
    ?>
</div>

</body>
</html>

