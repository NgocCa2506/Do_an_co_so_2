<?php
include "../../config/config.php";
    $tenloaisp = $_POST['tendanhmuc'];
    $thutu = $_POST['thutu'];

    if(isset($_POST['themdanhmuc'])){
        $sql_them = "INSERT INTO tbl_category(tendanhmuc, thutu) VALUES ('".$tenloaisp."', '".$thutu."')";
        mysqli_query($mysqli, $sql_them);
        header('location: ../../index.php?action=quanlydanhmucsanpham&query=them');

    } elseif (isset($_POST['suadanhmuc'])){
        $sql_update = "UPDATE tbl_category SET tendanhmuc='".$tenloaisp."', thutu='".$thutu."' WHERE id_danhmuc='$_GET[iddanhmuc]'";
        mysqli_query($mysqli, $sql_update);
        header('Location: ../../index.php?action=quanlydanhmucsanpham&query=them');
        
    } else{
        $id = $_GET['iddanhmuc'];
        $sql_xoa = "DELETE FROM tbl_category WHERE id_danhmuc='".$id."'";
        mysqli_query($mysqli, $sql_xoa);
        header('location: ../../index.php?action=quanlydanhmucsanpham&query=them');
    }
?>