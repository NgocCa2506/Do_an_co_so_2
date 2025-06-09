<?php
    if(isset($_POST['dangky'])){
        $username = $_POST['tendangnhap'];
		$sdt = $_POST['sdt'];
		$email = $_POST['email'];
		$diachi = $_POST['diachi'];
        $password = md5($_POST['matkhau']);
        $sql_dangki = mysqli_query($mysqli, "INSERT INTO tbl_dangki(user, pass, sdt, email, diachi) VALUE('".$username."', '".$password."', '".$sdt."', '".$email."', '".$diachi."')");
        if($sql_dangki){
           
			// $_SESSION['id_khachhang'] = mysqli_insert_id($mysqli);
			$_SESSION['dangky'] = $username;
			$_SESSION['id_khachhang'] = mysqli_insert_id($mysqli);
			$_SESSION['sdt'] = $email;
			// $_SESSION['id_khachhang'] = $row_data['id'];
			// header('location: index.php?quanly=giohang');
			echo '<script>alert("Bạn đã đăng ký thành công!");</script>';
        }
    }
?>

<?php
	if(isset($_POST['dangnhap'])){
		$user = $_POST['user'];
		$pass = md5($_POST['pass']);
		$sql = "SELECT * FROM tbl_dangki WHERE user='".$user."' AND pass='".$pass."' LIMIT 1";
		$row = mysqli_query($mysqli, $sql);
		$count = mysqli_num_rows($row);
		if($count>0){
            $row_data = mysqli_fetch_array($row);
			$_SESSION['dangky'] = $row_data['user'];
            echo '<script>alert("Đăng nhập thành công!");</script>';
			// header("location: index.php?quanly=giohang");
            
		} else {
			echo '<script>alert("Đăng nhập thất bại!");</script>';
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Slide Navbar</title>
	<link rel="stylesheet" type="text/css" href="slide navbar style.css">
<link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
<style>
    /* body{
	margin: 0;
	padding: 0;
	display: flex;
	justify-content: center;
	align-items: center;
	min-height: 100vh;
	font-family: 'Jost', sans-serif;
	background: linear-gradient(to bottom, #0f0c29, #302b63, #24243e);
} */


.mainn{
	width: 350px;
	height: 450px;
	background: red;
	overflow: hidden;
    margin-left: 200px;
    margin-bottom: 50px;
	background: url("https://doc-08-2c-docs.googleusercontent.com/docs/securesc/68c90smiglihng9534mvqmq1946dmis5/fo0picsp1nhiucmc0l25s29respgpr4j/1631524275000/03522360960922298374/03522360960922298374/1Sx0jhdpEpnNIydS4rnN4kHSJtU1EyWka?e=view&authuser=0&nonce=gcrocepgbb17m&user=03522360960922298374&hash=tfhgbs86ka6divo3llbvp93mg4csvb38") no-repeat center/ cover;
	border-radius: 10px;
	box-shadow: 5px 20px 50px #000;
    text-align: center;
}
#chk{
	display: none;
}
.signup{
	position: relative;
	width:100%;
	height: 100%;
}
.mainn form label{
	color: #573b8a;
	font-size: 2.3em;
	justify-content: center;
	display: flex;
	margin: 60px;
	font-weight: bold;
	cursor: pointer;
	transition: .5s ease-in-out;
}
.mainn form input{
	width: 60%;
	height: 40px;
	background: #e0dede;
	justify-content: center;
	display: flex;
	margin: 20px auto;
	padding: 10px;
	border: none;
	outline: none;
	border-radius: 5px;
}
.mainn form button{
	width: 60%;
	height: 40px;
	margin: 10px auto;
	justify-content: center;
	display: block;
	color: #fff;
	background: #573b8a;
	font-size: 1em;
	font-weight: bold;
	margin-top: 20px;
	outline: none;
	border: none;
	border-radius: 5px;
	transition: .2s ease-in;
	cursor: pointer;
}
.mainn form button:hover{
	background: #6d44b8;
}
.mainn form p{
    background-color: #ddddd;
}
.login{
	height: 400px;
	background: #eee;
	border-radius: 60% / 10%;
	transform: translateY(-180px);
	transition: .3s ease-in-out;
}
.login label{
	color: #573b8a;
	transform: scale(.6);
}

#chk:checked ~ .login{
	transform: translateY(-500px);
}
#chk:checked ~ .login label{
	transform: scale(1);	
}
#chk:checked ~ .signup label{
	transform: scale(.6);
}

@media screen and (max-width: 435px) {
	.body{
		width: 125%;
		padding: 10px;
		justify-content: center;
		
	}

	.mainn{
		margin-left: 0px;
		margin-right: -20px;
	}
}

</style>
</head>
<body>
	
	<div class="body">
	<div class="mainn">  	
		<input type="checkbox" id="chk" aria-hidden="true">

			<div class="signup">
				<form action="" autocomplete="off" method="POST">
					<!-- <label for="chk" aria-hidden="true">ĐĂNG KÝ</label> -->
					<input type="text" name="tendangnhap" placeholder="Tên khách hàng" required="">
					<input type="text" name="sdt" placeholder="Số điện thoại" required="">
					<input type="email" name="email" placeholder="Email" required="">
					<input type="text" name="diachi" placeholder="Địa chỉ" required="">
					<input type="password" name="matkhau" placeholder="Password" required="">
					<button type="submit" name="dangky">ĐĂNG KÝ</button>
				</form>
			</div>

			<div class="login">
				<form action="" autocomplete="off" method="POST">
					<label for="chk" aria-hidden="true">ĐĂNG NHẬP</label>
					<input type="text" name="user" placeholder="User Name" required="">
					<input type="password" name="pass" placeholder="Password" required="">
					<button type="submit" name="dangnhap">ĐĂNG NHẬP</button>
				</form>
			</div>
	</div>
	</div>
	<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</body>
</html>