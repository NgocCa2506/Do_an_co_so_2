<?php
    $sql_lietke_sp = "SELECT * FROM tbl_sanpham,tbl_category WHERE tbl_sanpham.id_danhmuc = tbl_category.id_danhmuc ORDER BY id_sanpham DESC";
    $query_lietke_sp = mysqli_query($mysqli, $sql_lietke_sp);
?>

<h2 align="center">DANH SÁCH SẢN PHẨM</h2>
<table width="100%" style="border-collapse: collapse;" border="1px">
  <tr>
    <th>ID</th>
    <th>Tên sản phẩm</th>
    <th>Hình ảnh</th>
    <th>Giá sản phẩm</th>
    <th>Số lượng</th>
    <th>Danh mục</th>
    <th>Mã sản phẩm</th>
    <th>Tóm tắt</th>
    <th>Trạng thái</th>
    <th>Quản lý</th>
  </tr>

  <?php
    $i = 0;
    while($row = mysqli_fetch_array($query_lietke_sp)){ $i++;
  ?>

  <tr>
    <td><?php echo $i ?></td>
    <td><?php echo $row['tensanpham'] ?></td>
    <td><img width="150px" src="modules/quanlysp/uploads/<?php echo $row['hinhanh'] ?>"></td>
    <td><?php echo $row['giasp'] ?></td>
    <td><?php echo $row['soluong'] ?></td>
    <td><?php echo $row['tendanhmuc'] ?></td>
    <td><?php echo $row['masp'] ?></td>
    <td><?php echo $row['tomtat'] ?></td>
    <td><?php 
      if($row['tinhtrang']==1){
        echo "Kich hoat";
      } else {
        echo "An";
      }
    ?></td>
    <td>
        <a href="modules/quanlysp/xuly.php?idsanpham=<?php echo $row['id_sanpham'] ?>"><i class="fa fa-trash"></i> XÓA</a>
        <a href="?action=quanlysp&query=sua?idsanpham=<?php echo $row['id_sanpham'] ?>"><i class="fa fa-pencil-square-o"></i> SỬA</a>
    </td>
  </tr>

  <?php
    }
  ?>

</table>