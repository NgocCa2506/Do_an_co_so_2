<?php
    include "././admincp/config/config.php";
    $id_khachhang = $_SESSION['id_khachhang'];
    $code_order = rand(0,9999);
    $insert_cart = "INSERT INTO tbl_cart(id_khachhang, code_cart, cart_status) VALUE ('".$id_khachhang."', '".$code_order."', 1)";
    $cart_query = mysqli_query($mysqli, $insert_cart);
    if($cart_query){
        foreach($_SESSION['cart'] as $key => $value){
            $id_sanpham = $value['id'];
            $soluongmua = $value['soluong'];
            $insert_order_detail = "INSERT INTO tbl_cart_detail(id_sanpham, code_cart, soluongmua) VALUE ('".$id_sanpham."', '".$code_order."', '".$soluongmua."')";
            mysqli_query($mysqli, $insert_order_detail);
        }
    }
    unset($_SESSION['cart']);
    echo '<script>alert("Bạn đã đặt hàng thành công!");</script>';
?>

