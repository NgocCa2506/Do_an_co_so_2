<?php
    $sql_lietke_danhmucsp = "SELECT * FROM tbl_category ORDER BY thutu DESC";
    $query_lietke_danhmucsp = mysqli_query($mysqli, $sql_lietke_danhmucsp);
?>

<h2>DANH SÁCH DANH MỤC</h2>
<table width="100%" style="border-collapse: collapse;" border="1px">
  <tr align="center">
    <th>ID</th>
    <th>Tên danh mục</th>
    <th>Quản lý</th>
  </tr>

  <?php
    $i = 0;
    while($row = mysqli_fetch_array($query_lietke_danhmucsp)){ $i++;
  ?>

  <tr align="center">
    <td><?php echo $i ?></td>
    <td><?php echo $row['tendanhmuc'] ?></td>
    <td>
        <a href="modules/quanlydanhmucsp/xuly.php?iddanhmuc=<?php echo $row['id_danhmuc'] ?>"><i class="fa fa-trash"></i> XÓA</a>
        <a href="?action=quanlydanhmucsanpham&query=sua&iddanhmuc=<?php echo $row['id_danhmuc'] ?>"><i class="fa fa-pencil-square-o"></i> SỬA</a>
    </td>
  </tr>

  <?php
    }
  ?>

</table>
