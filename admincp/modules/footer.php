<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<style>
li{
    list-style: none;
}
.app-container{
    text-align: center;
    align-items: center;
    border-top: 2px solid #000000;
    padding: 10px 0 50px 0;
}
.app-container p{
    line-height: 20px;
    letter-spacing: 1px;
    font-size: 17px;
    color: #333;
    font-weight: bold;
}
.app-container input{
    margin-top: 50px;
    border: none;
    border-bottom: 1px solid #000;
    padding-bottom: 20px;
    width: 400px;
    text-align: center;
    outline: none;
}

.app-google{
    margin: 50px;

}
.app-google img{
    height: 50px;
}

/*footer*/
.footer{
    text-align: center;
}
.footer-top{
    display: flex;
    text-align: center;
    justify-content: center;
    align-items: center;
    margin-bottom: 20px;
    height: 70px;
}
.footer-top li{
    padding: 0 12px;
    position: relative;
}
.footer-top li::after{
    content: "";
    display: block;
    width: 1px;
    height: 80%;
    background: #cccccc;
    position: absolute;
    right: 0;
    top: 50%;
    transform: translateY(-50%);
}
.footer-top li:last-child::after{
    display: none;
}
.footer-top li:last-child a{
    margin-right: 12px;
    color: #333;
}

.footer-center{
    text-align: center;
}

.footer-bottom{
    padding: 5px;
    width: 100%;
    color: #fff;
    background-color: #333;
    text-align: center;
}
</style>
<body>
<section class="app-container">
        <p>Nhận bản tin</p>
        <input type="text" placeholder="Nhập Email của bạn ...">
    </section>

    <div class="footer-top">
        <li><a href="">Liên hệ</a></li>
        <li><a href="">Tuyển dụng</a></li>
        <li><a href="">Giới thiệu</a></li>
        <li>
            <a href="" class="fa fa-facebook"></a>
            <a href="" class="fa fa-twitter"></a>
            <a href="" class="fa fa-youtube"></a>
        </li>
    </div>

    <div class="footer-center">
        <p>
            Trường Đại học Công nghệ thông tin & truyền thông - Việt Hàn<br>
            Nguyễn Ngọc Ca<br>
            Số điện thoại: 0365408881<br>
            Email: cann.22ce@vku.udn.vn
        </p>
    </div>
    
    <div class="footer-bottom">
        <p>@ Nguyễn Ngoc Ca</p>
    </div>

</body>
</html>