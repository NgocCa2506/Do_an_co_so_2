<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>

        table{
            padding: 10px;
            margin-bottom: 30px;
        }

        input{
            width: 80%;
            height: 30px;
            border: none;
            outline: none;
        }

        button{
            background-color: brown;
            color: #fff;
            border: none;
            height: 30px;
        }

        button:hover{
            border: 2px solid brown;
            cursor: pointer;
            color: brown;
            background-color: transparent;
        }
    </style>
</head>
<body>
<?php
    $sql_sua_danhmucsp = "SELECT * FROM tbl_category WHERE id_danhmuc='$_GET[iddanhmuc]' LIMIT 1";
    $query_sua_danhmucsp = mysqli_query($mysqli, $sql_sua_danhmucsp);
?>

<h2 align="center">SỬA DANH MỤC SẢN PHẨM</h2>
<table border="1px" width="100%" style="border-collapse: collapse;">
    <form method="POST" action="modules/quanlydanhmucsp/xuly.php?iddanhmuc=<?php echo $_GET['iddanhmuc'] ?>"> 
        <?php
            while($dong = mysqli_fetch_array($query_sua_danhmucsp)){
        ?>
        <tr>
            <th colspan="2">Điền danh mục sản phẩm</th>
        </tr>

        <tr>
            <td>Tên danh mục</td>
            <td><input type="text" value="<?php echo $dong['tendanhmuc'] ?>" name="tendanhmuc"></td>
        </tr>

        <tr>
            <td>Thứ tự</td>
            <td><input type="text" value="<?php echo $dong['thutu'] ?>" name="thutu"></td>
        </tr>

        <tr>
            <td></td>
            <!-- <td align="center"><input type="submit" name="suadanhmuc" value="Sửa danh mục"></td> -->
            <td align="center"><button type="submit" name="suadanhmuc">Sửa danh mục</button></td>
        </tr>

        <?php
            }
        ?>

    </form>
</table>
</body>
</html>