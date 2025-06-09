<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .cartegory-left{
            margin-right: 20px;
            border-right: 2px solid #333;
            margin-top: -20px;
        }

        /* .fixed-bar{
            position: fixed;
            top: 1;
            right: 0;
        } */

        @media screen and (max-width: 435px) {
            .cartegory-left{
                display: none;
            }
        }

        @media screen and (max-width: 1035px) and (min-width:700px){
            .cartegory-left{
                display: none;
            }
        }

        .cartegory-left li {
            padding: 20px;
            margin: 20px;
            color: #fff;
            background-color: #fff;
        }

        .cartegory-left li:hover{
            color: #fff;
            background-color: #7f8fa6;
        }
    </style>
</head>
<body onload="startTime()">

<div class="cartegory-left fixed-bar">
    <!-- <div style="text-align: center; font-weight:bold;" id="txt"></div> -->
    <ul>
    <?php
        $sql_danhmuc = "SELECT * FROM tbl_category ORDER BY id_danhmuc DESC";
        $query_danhmuc = mysqli_query($mysqli, $sql_danhmuc);
        while($row = mysqli_fetch_array($query_danhmuc)){
    ?>

        <li><a href="index.php?quanly=danhmucsanpham&id=<?php echo $row['id_danhmuc'] ?>"><?php echo $row['tendanhmuc'] ?></a></li>

    <?php
        }
    ?> 

    <li><a href="index.php?quanly=lienhe">LIÊN HỆ</a></li>
    <li><a href="index.php?quanly=thongtin">THÔNG TIN</a></li>

 </ul>

</div>
<script>
    function startTime(){
            const today = new Date();
            let h = today.getHours();
            let m = today.getMinutes();
            let s = today.getSeconds();
            m = checkTime(m);
            s = checkTime(s);
            document.getElementById('txt').innerHTML = h + ":" + m + ":" + s;
            setTimeout(startTime, 1000);
        }

        function checkTime(i){
            if(i<10){
                i = "0" + i;
            }
            return i;
        }
</script>
</body>

</html>