<?php
    $sql_lietke_kh = "SELECT * FROM tbl_dangki ORDER BY id_khachhang DESC";
    $query_lietke_kh = mysqli_query($mysqli, $sql_lietke_kh);
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
  <h2 align="center">KHÁCH HÀNG ĐĂNG KÝ</h2>
<table width="100%" style="border-collapse: collapse;" border="1px">
  <tr>
    <th>ID</th>
    <th>Tên khách hàng</th>
    <th>Số điện thoại</th>
    <th>Email</th>
    <th>Địa chỉ</th>
  </tr>

  <?php
    $i = 0;
    while($row = mysqli_fetch_array($query_lietke_kh)){ $i++;
  ?>

  <tr>
    <td><?php echo $i ?></td>
    <td><?php echo $row['user'] ?></td>
    <td><?php echo $row['sdt'] ?></td>
    <td><?php echo $row['email'] ?></td>
    <td><?php echo $row['diachi'] ?></td>
  </tr> 

  <?php
    } 
  ?>

</table>
  </div>
</body>
</html>