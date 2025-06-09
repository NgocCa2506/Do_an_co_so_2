<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Delivery</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <style>
            .delivery{
                padding: 20px 0;
            }

            .delivery-content-left{
                width: 60%;
                padding-right: 12px;
                margin-left: 10px;
            }

            .delivery-content-left p{
                font-size: 13px;
                font-weight: bold;
            }

            .delivery-content-left-input-top{
                font-size: 13px;
                padding: 12px 0;
                font-weight: bold;
            }

            .delivery-content-left-input-top input{
                width: 100%;
                height: 25px;
                font-size: 12px;
                border: none;
                border-bottom: 1px solid #868484;
                border-right: 1px solid #868484;
                outline: none;
            }

            .delivery-content-left-input-top-item{
                margin-bottom: 10px;
            }

            .delivery-content-left-input-bottom{
                font-size: 13px;
                font-weight: bold;
            }

            .delivery-content-left-input-bottom input{
                font-size: 12px;
                width: 100%;
                height: 25px;
                border: none;
                margin-top: 10px;
                margin-bottom: 16px;
                outline: none;
                border-bottom: 1px solid #868484;
                border-right: 1px solid #868484;
            }

            .delivery-content-left-button{
                justify-content: space-between;
                margin-top: 20px;
            }

            .delivery-content-left-button span{
                font-size: 13px;
                display: inline-block;
                color: #9b0101;
            }

            .delivery-content-left-button span:hover{
                color: #d03030;
            }

            .delivery-content-left-button button{
                height: 35px;
                padding: 6px 12px;
                cursor: pointer;
                justify-content: center;
                background-color: #9b0101;
                color: #ffffff;
                border: none;
            }

            .delivery-content-left-button button:hover{
                background-color: transparent;
                color: brown;
                border: 2px solid brown;
            }

            .phuongthuc{
                display: flex;
            }

            .phuongthuc input{
                margin-left: 20px;
            }

            .delivery-content-right{
                width: 40%;
                font-size: 13px;
                padding-left: 12px;
                border-left: 2px solid #dddddd;
                height: auto;
                margin-right: 20px;
            }

            .delivery-content-right table{
                width: 100%;
                font-size: 12px;
                text-align: center;
            }

            .delivery-content-right table tr th:first-child{
                text-align: left;
            }

            .delivery-content-right table tr th{
                padding-bottom: 12px;
                border-bottom: 1px solid #dddddd;
            }

            .delivery-content-right table tr th:last-child{
                text-align: right;
            }

            .delivery-content-right table tr td{
                padding: 6px 0;
            }

            .delivery-content-right table tr:nth-child(4){
                border-top: 1px solid #dddddd;
            }

            .delivery-content-right table tr td:last-child{
                text-align: right;
            }

            .delivery-content-right table tr td:first-child{
                text-align: left;
            }

            @media screen and (max-width: 435px) {
                .delivery-content{
                    display: block;
                    margin-top: -100px;
                }

                .delivery-content-left{
                    width: 125%;
                }

                .delivery-content-right{
                    width: 125%;
                    margin-bottom: 20px;
                }
            }

            @media screen and (max-width: 1035px) and (min-width: 700px) {
                .delivery-content{
                    display: block;
                    margin-top: -100px;
                }

                .delivery-content-left{
                    width: 125%;
                }

                .delivery-content-right{
                    width: 125%;
                    margin-bottom: 20px;
                }
            }
            
            </style>
    </head>
<body>

    <!-- ----- Delivery ----- -->

    <section class="delivery">
        <div class="container">
            <div class="delivery-content row">
                

                <div class="delivery-content-right">
                    <table>
                        <tr>
                            <th>Tên sản phẩm</th>
                            <th>Số lượng</th>
                            <th>Thành tiền</th>
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
                            <td><?php echo $cart_item['tensanpham'] ?></td>
                            <td><?php echo $cart_item['soluong'] ?></td>
                            <td><?php echo number_format($thanhtien,0,',','.'); ?> VND</td>
                            
                        </tr>
                        

                        <?php
                                }
                            } 
                        ?>
                        
                        <tr>
                            <td >Tổng tiền hàng</td>
                            <td colspan="2" style="font-weight: bold; color: brown;"><p>    
                            <?php 
                            if(isset($soluong)){
                                echo number_format($tongtien,0,',','.');
                            } else {
                                echo 0;
                            }
                            ?> 
                            VND</p></td>
                        </tr>

                    </table>
                </div>

                <div class="delivery-content-left">
                    <p>Vui lòng nhập thông tin giao hàng &#9997;</p>
                    <div class="delivery-content-left-input-top">
                        <div class="delivery-content-left-input-top-item">
                            <label for="">Họ và tên <span style="color: red;">*</span></label>
                            <input type="text" name="" id="" placeholder="&#10149; Họ và tên ...">
                        </div>
                        <div class="delivery-content-left-input-top-item">
                            <label for="">Điện thoại <span style="color: red;">*</span></label>
                            <input type="text" name="" id="" placeholder="&#10149; Số điện thoại ...">
                        </div>

                        <div class="delivery-content-left-input-top-item">
                            <label for="">Địa chỉ <span style="color: red;">*</span></label>
                            <input type="text" name="" id="" placeholder="&#10149; Địa chỉ ...">
                        </div>

                        <div class="delivery-content-left-input-top-item">
                            <label for="">Mã giảm giá (nếu có) <span style="color: red;">*</span></label>
                            <input type="text" name="" id="" placeholder="&#10149; Mã giảm giá ...">
                        </div>

                    </div>
                    <!-- <div class="phuongthuc">
                        <input type="radio" name="atm" id="bank">
                        <label for="bank">Thanh toán bằng tài khoản ngân hàng</label>
                        <input type="radio" name="tienmat" id="cash">
                        <label for="payment">Thanh toán khi nhận hàng</label>
                    </div> -->
                    <div class="phuongthuc">
                        <input type="radio" name="payment" id="bank">
                        <label for="bank">🏧Thanh toán bằng ATM</label>

                        <input type="radio" name="payment" id="cash">
                        <label for="cash">💵Thanh toán khi nhận hàng</label>
                    </div>
                    <div class="delivery-content-left-input-bottom">
                        <div class="delivery-content-left-button row">
                            <a href="index.php?quanly=giohang"><span>&#8617; Quay lại trang giỏ hàng</span></a>
                            <a href="index.php?quanly=xulythanhtoan"><button><p>THANH TOÁN VÀ GIAO HÀNG</p></button></a>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>

