<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title> 
    <link rel="icon" type="image/x-icon" href="/images/favicon.ico">
    <style>

        marquee{
            background-color: aquamarine;
            padding: 10px;
            margin-top: -10px;
            margin-left: 10px;
            margin-left: -1px;
            font-size: 20px;
            width: 100%;
        }

        .cartegory-right .row{
            display: grid;
            grid-template-columns: repeat(4,1fr);
            gap: 20px;
        }

        .cartegory-right-content-item{
            background-color: #fff;
            width: 100%;
            filter: drop-shadow(5px 8px 2px #ddd);
            margin-bottom: 40px;
            transition:all 0.3s ease-in-out;
        }

        .cartegory-right-content-item:hover{
            transform:scale(1.05);
        }

        .cartegory-right-content-item img:hover{
            border: none;       
        }

        * {box-sizing: border-box}
        body {font-family: Verdana, sans-serif; margin:0}
        .mySlides {display: none}
        img {vertical-align: middle;}

        /* Slideshow container */
        .slideshow-container {
            max-width: 1000px;
            position: relative;
            margin: auto;
        }

        /* Next & previous buttons */
        .prev, .next {
            cursor: pointer;
            position: absolute;
            top: 50%;
            width: auto;
            padding: 16px;
            margin-top: -22px;
            color: white;
            font-weight: bold;
            font-size: 18px;
            transition: 0.6s ease;
            border-radius: 0 3px 3px 0;
            user-select: none;
        }

        /* Position the "next button" to the right */
        .next {
            right: 0;
            border-radius: 3px 0 0 3px;
        }

        /* On hover, add a black background color with a little bit see-through */
        .prev:hover, .next:hover {
            background-color: rgba(0,0,0,0.8);
        }

        /* Caption text */
        .text {
            color: #f2f2f2;
            font-size: 15px;
            padding: 8px 12px;
            position: absolute;
            bottom: 8px;
            width: 100%;
            text-align: center;
        }

        /* Number text (1/3 etc) */
        .numbertext {
            color: #f2f2f2;
            font-size: 12px;
            padding: 8px 12px;
            position: absolute;
            top: 0;
        }

        /* The dots/bullets/indicators */
        .dot {
            cursor: pointer;
            height: 15px;
            width: 15px;
            margin: 0 2px;
            background-color: #bbb;
            border-radius: 50%;
            display: inline-block;
            transition: background-color 0.6s ease;
        }

        .active, .dot:hover {
        background-color: #717171;
        }

        /* Fading animation */
        .fade {
            animation-name: fade;
            animation-duration: 1.5s;
        }

        @keyframes fade {
            from {opacity: .4} 
            to {opacity: 1}
        }

        /* On smaller screens, decrease text size */
        @media only screen and (max-width: 300px) {
            .prev, .next,.text {font-size: 11px}
        }

        @media screen and (max-width: 435px) {
            .side-bar{
                padding: 10px;
                width: 125%;
                justify-content: center;
            }
            /* Slide */
            .slideshow-container{
                width: 100%;
                margin-top: -100px;
            }

            .dot{
                display: none;
            }

            /* San pham */
            .cartegory-right .row{
                display: grid;
                grid-template-columns: repeat(2,1fr);
                gap: 20px;
            }

            .cartegory-right-content-item{
                background-color: #fff;
                width: 100%;
                filter: drop-shadow(5px 8px 2px #ddd);
                margin-bottom: 40px;
                transition:all 0.3s ease-in-out;
            }

            .cartegory-right-content-item:hover{
                transform:scale(1.05);
            }

            .cartegory-right-content-item img:hover{
                border: none;       
            }
        }

        @media screen and (min-width:600px) and (max-width: 1035px) {
            .side-bar{
                padding: 10px;
                width: 125%;
                justify-content: center;
            }
            /* Slide */
            .slideshow-container{
                width: 100%;
                margin-top: -50px;
            }

            .dot{
                display: none;
            }

            /* San pham */
            .cartegory-right .row{
                display: grid;
                grid-template-columns: repeat(3,1fr);
                gap: 20px;
            }

            .cartegory-right-content-item{
                background-color: #fff;
                width: 100%;
                filter: drop-shadow(5px 8px 2px #ddd);
                margin-bottom: 40px;
                transition:all 0.3s ease-in-out;
            }

            .cartegory-right-content-item:hover{
                transform:scale(1.05);
            }

            .cartegory-right-content-item img:hover{
                border: none;       
            }
        }
    </style>
</head>
<body>
<!-- <marquee behavior="" direction="" scrolldelay="1">Nguyen Ngoc Ca</marquee> -->

    <div class="side-bar">
        <div class="slideshow-container">
            <div class="mySlides fade">
            <!-- <div class="numbertext">1 / 3</div> -->
            <img src="././images/slide1.jpeg" style="width:100%">
            <!-- <div class="text">Caption Text</div> -->
            </div>

            <div class="mySlides fade">
            <!-- <div class="numbertext">2 / 3</div> -->
            <img src="././images/slide2.webp" style="width:100%">
            <!-- <div class="text">Caption Two</div> -->
            </div>

            <div class="mySlides fade">
            <!-- <div class="numbertext">3 / 3</div> -->
            <img src="././images/slide3.webp" style="width:100%">
            <!-- <div class="text">Caption Three</div> -->
            </div>

            <a class="prev" onclick="plusSlides(-1)">❮</a>
            <a class="next" onclick="plusSlides(1)">❯</a>

        </div>
        <br>

        <div style="text-align:center">
            <span class="dot" onclick="currentSlide(1)"></span> 
            <span class="dot" onclick="currentSlide(2)"></span> 
            <span class="dot" onclick="currentSlide(3)"></span> 
        </div>


   
        <h3 align="center">SẢN PHẨM MỚI NHẤT</h3>
        <div class="cartegory-right-content row">

            <?php
            
            $sql_pro = "SELECT * FROM tbl_sanpham,tbl_category WHERE tbl_sanpham.id_danhmuc = tbl_category.id_danhmuc ORDER BY tbl_sanpham.id_sanpham DESC LIMIT 12";
            $query_pro = mysqli_query($mysqli, $sql_pro);
            while($row = mysqli_fetch_array($query_pro)){

            ?>

            <div class="cartegory-right-content-item">       
                <a href="index.php?quanly=sanpham&id=<?php echo $row['id_sanpham'] ?>">
                <img src="admincp/modules/quanlysp/uploads/<?php echo $row['hinhanh'] ?>" alt="">
                <h1><?php echo $row['tensanpham'] ?></h1>
                <p><?php echo number_format($row['giasp'],0,',','.') ?> VND</p>
                </a>
            </div>

            <?php } ?>
        </div>
    </div>

</body>
    <script>
        let slideIndex = 1;
        showSlides(slideIndex);

        function plusSlides(n) {
        showSlides(slideIndex += n);
        }

        function currentSlide(n) {
        showSlides(slideIndex = n);
        }

        function showSlides(n) {
        let i;
        let slides = document.getElementsByClassName("mySlides");
        let dots = document.getElementsByClassName("dot");
        if (n > slides.length) {slideIndex = 1}    
        if (n < 1) {slideIndex = slides.length}
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";  
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex-1].style.display = "block";  
        dots[slideIndex-1].className += " active";
        }
    </script>
</html>

