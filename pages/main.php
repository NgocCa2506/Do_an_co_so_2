<section class="cartegory">
    <div class="container row">
            
        <?php
            include "pages/thanhben.php";
        ?>
        <div class="cartegory-right row">
            
            <?php
                if(isset($_GET['quanly'])){
                    $tam = $_GET['quanly'];
                } else {
                    $tam = '';
                }

                if($tam=='danhmucsanpham'){
                    include "main/danhmuc.php";
                } elseif($tam=='giohang') {
                    include "main/giohang.php";
                } elseif($tam=='lienhe') {
                    include "main/lienhe.php";
                } elseif($tam=='thongtin') {
                    include "main/thongtin.php";
                } elseif($tam=='sanpham'){
                    include "main/sanpham.php";
                } elseif($tam=='dangky'){
                    include "main/dangky.php";
                } elseif($tam=='timkiem'){
                    include "main/timkiem.php";
                }elseif($tam=='thanhtoan'){
                        include "main/thanhtoan.php";
                }elseif($tam=='xulythanhtoan'){
                        include "main/xulythanhtoan.php";
                }elseif($tam=='dangnhap'){
                        include "main/dangnhap.php";
                } else {
                    include "main/index.php";
                }
            ?>
            
        </div>

    </div>
    </section>