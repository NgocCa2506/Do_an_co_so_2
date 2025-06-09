<?php
    $sql_lietke_dh = "SELECT * FROM tbl_cart, tbl_dangki WHERE tbl_cart.id_khachhang = tbl_dangki.id_khachhang ORDER BY tbl_cart.id_cart DESC";
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
  <h2 align="center">ĐƠN HÀNG ĐƯỢC ĐẶT</h2>
    <table width="100%" style="border-collapse: collapse;" border="1px">
      <tr>
        <th>ID</th>
        <th>Mã đơn hàng</th>
        <th>Tên khách hàng</th>
        <th>Xem đơn hàng</th>
      </tr>

      <?php
        $i = 0;
        while($row = mysqli_fetch_array($query_lietke_dh)){ $i++;
      ?>

      <tr>
        <td><?php echo $i ?></td>
        <td><?php echo $row['code_cart'] ?></td>
        <td><?php echo $row['user'] ?></td>
        <td>
            <a href="index.php?action=donhang&query=xemdonhang&code=<?php echo $row['code_cart'] ?>">Xem đơn hàng</a> | 
            <!-- <a href="?action=quanlydanhmucsanpham&query=sua&iddanhmuc=<?php echo $row['id_danhmuc'] ?>">Sua</a> -->
        </td>
      </tr>

      <?php
        }
      ?>

    </table>
  </div>
</body>
</html>