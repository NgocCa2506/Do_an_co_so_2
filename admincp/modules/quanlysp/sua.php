<?php
    $sql_sua_sp = "SELECT * FROM tbl_sanpham WHERE id_sanpham='$_GET[idsanpham]' LIMIT 1";
    $query_sua_sp = mysqli_query($mysqli, $sql_sua_sp);
?>

<p>Sua san pham</p>
<table border="1px" width="50%" style="border-collapse: collapse;">
    <form method="POST" action="modules/quanlysp/xuly.php" enctype="multipart/form-data"> 
         <?php
            while($row = mysqli_fetch_array($query_sua_sp)){
        ?>
        <tr>
            <th>Ten san pham</th>
            <td><input type="text" name="tensanpham"></td>
        </tr>

        <tr>
            <td>Ma san pham</td>
            <td><input type="text" name="masp"></td>
        </tr>

        <tr>
            <td>Gia san pham</td>
            <td><input type="text" name="giasp"></td>
        </tr>

        <tr>
            <td>So luong</td>
            <td><input type="text" name="soluong"></td>
        </tr>

        <tr>
            <td>Hinh anh</td>
            <td><input type="file" name="hinhanh"></td>
        </tr>

        <tr>
            <td>Tom tat</td>
            <td><textarea rows="10" name="tomtat" style="resize: none;"></textarea></td>
        </tr>

        <tr>
            <td>Noi dung</td>
            <td><textarea rows="10" name="noidung" style="resize: none;"></textarea></td>
        </tr>

        <tr>
            <td>Tinh trang</td>
            <td>
                <select name="tinhtrang">
                    <option value="1">Kich hoat</option>
                    <option value="0">An</option>
                </select>
            </td>
        </tr>

        <tr>
            <td colspan="2"><input type="submit" name="themsanpham" value="Them san pham"></td>
        </tr>

        <?php
            }
        ?>

    </form>
</table>