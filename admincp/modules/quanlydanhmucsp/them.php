<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<style>

    .main{
        padding: 30px;
        text-align: center;
    }

    table{
        text-align: left;
    }

    td{
        height: 30px;
    }

    input{
        width: 50%;
        font-size: 15px;
        border: none;
        outline: none;
    }

    .main button{
        border: none;
        width: 50%;
        height: 30px;
        cursor: pointer;
        color: #fff;
        background-color: brown;
    }

    .main button:hover{
        border: 2px solid brown;
        background-color: transparent;
        color: brown;
    }

    td i{
        margin-left: 30px;
    }
</style>
<body>
<div class="mainn">
<h2>DANH MỤC SẢN PHẨM</h2>
<table border="1px" width="100%" style="border-collapse: collapse;">
    <form method="POST" action="modules/quanlydanhmucsp/xuly.php"> 
        <tr align="center">
            <th colspan="2">Điền danh mục sản phẩm</th>
        </tr>

        <tr>
            <td>Tên danh mục</td>
            <td><input type="text" name="tendanhmuc" autocomplete="off" placeholder="Tên danh mục ..."></td>
        </tr>

        <tr>
            <td>Thứ tự danh mục</td>
            <td><input type="text" name="thutu" autocomplete="off" placeholder="Thứ tự danh mục ..."></td>
        </tr>

        <tr>
            <td></td>
            <!-- <td colspan="2"><input type="submit" name="themdanhmuc" value="Them danh muc san pham"></td> -->
            <td align="center"><button type="submit" name="themdanhmuc">Thêm danh mục sản phẩm</button></td>
        </tr>

    </form>
</table>
</div>
</body>
</html>