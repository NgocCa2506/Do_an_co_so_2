<?php
    if(isset($_GET['dangxuat']) && $_GET['dangxuat']==1){
        unset($_SESSION['dangnhap']);
        header('Location: login.php');
    }
?>

<!-- <p>
    <a href="index.php?dangxuat=1">Dang xuat: 
        <?php
            if(isset($_SESSION['dangnhap'])){
                echo $_SESSION['dangnhap'];
            }
        ?>
    </a>
</p> -->

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  position: fixed;
  width: 100%;
  top: 0;
  z-index: 1;
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #04AA6D;
  color: white;
}
</style>
</head>
<body>
   
  <div class="topnav">
      <a href="index.php"><i style="font-size: 20px;" class="fa fa-home"></i> Admin</a>
      <a href="index.php?action=quanlydanhmucsanpham&query=them"><i class="fa fa-bars"></i> Danh mục sản phẩm</a>
      <a href="index.php?action=quanlysanpham&query=them"><i class="fa fa-print"></i> Sản phẩm</a>
      <a href="index.php?action=quanlybaiviet&query=them"><i class="fa fa-edit"></i> Bài viết</a>
      <a href="index.php?action=quanlykh&query=lietke"><i class="fa fa-edit"></i> Danh mục KH</a>
      <a href="index.php?action=quanlydonhang&query=lietke"><i class="fa fa-line-chart"></i> Quản lý đơn hàng</a>
      <a href="index.php?dangxuat=1"><i style="font-size: 20px;" class="fa fa-sign-out"></i> Đăng xuất: 
          <?php
              if(isset($_SESSION['dangnhap'])){
                  echo $_SESSION['dangnhap'];
              }
          ?>
      </a>
  </div>

</body>
</html>
