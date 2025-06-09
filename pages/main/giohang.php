<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giỏ hàng</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>
    
    .cart{
        margin-top: -80px;
    }

    @media screen and (max-width: 435px) {
        .cart-content{
            display: block;
            width: 123%;
            margin-top: -100px;
        }

        .cart-content-right-button{
            margin-left: 20px;
        }

        
    }

    @media screen and (max-width: 1035px) and (min-width: 700px) {
        .cart-content{
            display: block;
            width: 123%;
            margin-top: -100px;
        }

        .cart-content-right-button{
            justify-content: center;
            margin-left: 20px;
        }

        
    }
    
</style>
<body>



<div class="cart">
        <div class="container">
            <div class="cart-content row">
                <div class="cart-content-left">
                <p> <i class="fa fa-user"></i> 
                    <i style="color:brown;">
                    <?php
                        if(isset($_SESSION['dangky'])){
                            echo $_SESSION['dangky'];
                        }        
                    ?>
                    </i>
                </p>
                    <table>
                        <tr>
                            <th>Sản phẩm</th>
                            <th>Tên sản phẩm</th>
                            <th>Màu</th>
                            <th>Mã sản phẩm</th>
                            <th>Số lượng</th>
                            <th>Thành tiền</th>
                            <th>Xóa</th>
                        </tr>

                        <?php
                            if(isset($_SESSION['cart'])){
                                $tongtien = 0;
                                $soluong = 0;
                                foreach($_SESSION['cart'] as $cart_item){
                                    $thanhtien = $cart_item['soluong'] * $cart_item['giasp'];
                                    $tongtien += $thanhtien;
                                    $soluong += $cart_item['soluong'];
                                    
                        ?>
        
                        <tr>
                            <td><img src="admincp/modules/quanlysp/uploads/<?php echo $cart_item['hinhanh'] ?>" alt=""></td>
                            <td><p><?php echo $cart_item['tensanpham'] ?></p></td>
                            <td><img src="admincp/modules/quanlysp/uploads/<?php echo $cart_item['hinhanh'] ?>" alt=""></td>
                            <td><?php echo $cart_item['masp'] ?></td>
                            <td><?php echo $cart_item['soluong'] ?></td>
                            <td><p><?php echo number_format($thanhtien,0,',','.'); ?> VND</p></td>
                            <td><a href="pages/main/themsanpham.php?xoa=<?php echo $cart_item['id'] ?>"><span><i class="fa fa-trash"></i></span></a></td>
                        </tr>

                        <?php
                                }
                            } else {
                        ?>

                        <tr>
                            <td colspan=6>Hien tai khong co san pham</td>
                        </tr>

                        <?php } ?>

                    </table>
                </div>
        
                <div class="cart-content-right">
                    <table>
                        <tr>
                            <th colspan="2">TỔNG TIỀN GIỎ HÀNG</th>
                        </tr>
                        <tr>
                            <td>TỔNG SẢN PHẨM</td>
                            <td>
                                <?php 
                                if(isset($soluong)){
                                    echo $soluong;
                                } else {
                                    echo 0;
                                }
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td>TỔNG TIỀN HÀNG</td>
                            <td><p>    
                            <?php 
                            if(isset($soluong)){
                                echo number_format($tongtien,0,',','.');
                            } else {
                                echo 0;
                            }
                            ?> 
                            VND</p></td>
                        </tr>
                        <tr>
                            <td>TẠM TÍNH</td>
                            <td><p style="color:brown; font-weight: bold;">
                            <?php 
                            if(isset($soluong)){
                                echo number_format($tongtien,0,',','.');
                            } else {
                                echo 0;
                            }
                            ?>  VND</p></td>
                        </tr>
                    </table>
        
                    <div class="cart-content-right-text">
                        <p>Bạn sẽ được miễn phí ship khi đơn hàng của bạn có tổng giá trị trên 2.000.000 VND</p>
                        <p style="color: brown; font-weight: bold;">Mua thêm 
                        <?php 
                            if(isset($soluong)){
                                echo number_format(2000000-$tongtien,0,',','.');
                            } else {
                                echo 0;
                            }
                            ?>  VND để được miễn phí SHIP</p>
                    </div>
        
                    <div class="cart-content-right-button row">
                        
                        <a href="index.php?"><button>MUA THÊM</button></a>

                            <?php
                                if(isset($_SESSION['dangky'])){
                            ?>
                            <a href="index.php?quanly=thanhtoan"><button>ĐẶT HÀNG</button></a>
                            <?php
                                } else {
                            ?>
                            <a href="index.php?quanly=dangky"><button>ĐĂNG KÝ ĐẶT HÀNG</button></a>
                            <?php } ?>
                        
                    </div>
        
                    <div class="cart-content-right-dangnhap">
                        <p>TÀI KHOẢN *</p><br>
                        <p>Hãy <a href="" style="color: brown;">ĐĂNG NHẬP</a> tài khoản của bạn để tích điểm thành viên.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>