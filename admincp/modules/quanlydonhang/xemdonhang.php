<?php
    $code = $_GET['code'];
    $sql_lietke_dh = "SELECT * FROM tbl_cart_detail, tbl_sanpham WHERE tbl_cart_detail.id_sanpham = tbl_sanpham.id_sanpham AND tbl_cart_detail.code_cart = '".$code."' ORDER BY tbl_cart_detail.id_cart_detail DESC";
    $query_lietke_dh = mysqli_query($mysqli, $sql_lietke_dh);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    .main{
      padding: 30px;
    }
  </style>
</head>
<body>
  <div class="main">
  <h2 align="center">ĐƠN HÀNG</h2>
<table width="100%" style="border-collapse: collapse;" border="1px">
  <tr>
    <th>ID</th>
    <th>Mã đơn hàng</th>
    <th>Tên sản phẩm</th>
    <th>Số lượng</th>
    <th>Đơn giá</th>
    <th>Thành tiền</th>
  </tr>

  <?php
    $i = 0;
    $thanhtien=0;
    $tongtien=0;
    while($row = mysqli_fetch_array($query_lietke_dh)){ $i++;
        $thanhtien = $row['giasp'] * $row['soluongmua'];
        $tongtien += $thanhtien;
  ?>

  <tr>
    <td><?php echo $i ?></td>
    <td><?php echo $row['code_cart'] ?></td>
    <td><?php echo $row['tensanpham'] ?></td>
    <td><?php echo $row['soluongmua'] ?></td>
    <td><?php echo number_format($row['giasp'],0,',','.') ?> VND</td>
    <td><?php echo number_format($thanhtien,0,',','.') ?> VND</td>
  </tr>
  <?php
    }
  ?>
  <tr>
    <td colspan="6" style="text-align: right;"><b style="color:brown;">Tổng tiền: <?php echo number_format($tongtien,0,',','.') ?> VND</b></td>
  </tr>

</table>
  </div>
</body>
</html>