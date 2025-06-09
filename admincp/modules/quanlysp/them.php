<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .main{
            padding: 30px;
        }
        button{
            background-color: brown;
            color: #fff;
            border: none;
            cursor: pointer;
            width: 30%;
            height: 30px;
        }

        button:hover{
            background-color: transparent;
            color: brown;
            border: 2px solid brown;
        }

        input{
            border: none;
            outline: none;
            width: 80%;
            height: 30px;
        }

        textarea{
            border: none;
            outline: none;
        }

        td i{
            margin-left: 20px;
        }

        table{
            margin-bottom: 20px;
        }

    </style>
</head>
<body>

<div class="main">
<h2 align="center">SẢN PHẨM</h2>
<table border="1px" width="100%" style="border-collapse: collapse;">
    <form method="POST" action="modules/quanlysp/xuly.php" enctype="multipart/form-data"> 

        <tr>
            <td>Tên sản phẩm</td>
            <td><input type="text" name="tensanpham" placeholder="Tên sản phẩm ..." autocomplete="off"></td>
        </tr>

        <tr>
            <td>Mã sản phẩm</td>
            <td><input type="text" name="masp" placeholder="Mã sản phẩm ..." autocomplete="off"></td>
        </tr>

        <tr>
            <td>Giá sản phẩm</td>
            <td><input type="text" name="giasp" placeholder="Giá sản phẩm ..." autocomplete="off"></td>
        </tr>

        <tr>
            <td>Số lượng</td>
            <td><input type="text" name="soluong" placeholder="Số lượng ..." autocomplete="off"></td>
        </tr>

        <tr>
            <td>Hình ảnh</td>
            <td><input type="file" name="hinhanh"></td>
        </tr>

        <tr>
            <td>Tóm tắt</td>
            <td><textarea rows="10" cols="50" name="tomtat" style="resize: none;"></textarea></td>
        </tr>

        <tr>
            <td>Nội dung</td>
            <td><textarea rows="10" cols="50" name="noidung" style="resize: none;"></textarea></td>
        </tr>

        <tr>
            <td>Danh mục sản phẩm</td>
            <td>
                <select name="danhmuc">
                    <?php
                        $sql_danhmuc = "SELECT * FROM tbl_category ORDER BY id_danhmuc DESC";
                        $query_danhmuc = mysqli_query($mysqli, $sql_danhmuc);
                        while($row_danhmuc = mysqli_fetch_array($query_danhmuc)){
                    ?>
                    <option value="<?php echo $row_danhmuc['id_danhmuc'] ?>"><?php echo $row_danhmuc['tendanhmuc'] ?></option>

                    <?php } ?>
                </select>
            </td>
        </tr>

        <tr>
            <td>Tình trạng</td>
            <td>
                <select name="tinhtrang">
                    <option value="1">Kích hoạt</option>
                    <option value="0">Ẩn</option>
                </select>
            </td>
        </tr>

        <tr>
            <td></td>
            <td><button type="submit" name="themsanpham">Thêm sản phẩm</button></td>
            <!-- <td colspan="2"><input type="submit" name="themsanpham" value="Them san pham"></td> -->
        </tr>

    </form>
</table>
</div>
</body>
</html>