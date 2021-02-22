<?php
    session_start();
?>
<!DOCTYPE html>
<head>
<title>Quan Ly Admin Web</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link rel="stylesheet" href="css/bootstrap.min.css" >
<!-- //bootstrap-css -->
<!-- Custom CSS -->
<link href="back-end/css/style.css" rel='stylesheet' type='text/css' />
<link href="back-end/css/style-responsive.css" rel="stylesheet"/>
<!-- font CSS -->
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- font-awesome icons -->
<link rel="stylesheet" href="{{asset('public/back-end/css/font.css" type="text/css"/>
<link href="public/back-end/css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<script src="public/back-end/js/jquery2.0.3.min.js"></script>
<script src="https://kit.fontawesome.com/2066070c74.js" crossorigin="anonymous"></script>
</head>
<body>
<div class="log-w3">
<div class="w3layouts-main">
	<h2>Đăng Nhập</h2>
	<?php
	 
        if( isset($_SESSION["thongbao"])){
            echo $_SESSION["thongbao"];
            session_unset();
		}
    ?>
		<form action="admin_submit.php" method="POST">
			<input type="text" class="ggg" name="name" value="Tài Khoản" required="">
			<input type="password" class="ggg" name="password" value="Mật Khẩu" required="">
			<span><input type="checkbox" />Ghi Nhớ </span>
			<h6><a href="#">Quên Mật Khẩu?</a></h6>
				<div class="clearfix"></div>
				<input type="submit" value="Đăng Nhập" name="submit">
		</form>
		<p>Đăng Ký tài khoản !<a href="register2.php">Tạo mới</a></p>

	
</div>
</div>
<script src="back-end/js/bootstrap.js"></script>
<script src="back-end/js/jquery.dcjqaccordion.2.7.js"></script>
<script src="back-end/js/scripts.js"></script>
<script src="back-end/js/jquery.slimscroll.js"></script>
<script src="back-end/js/jquery.nicescroll.js"></script>
<script src="back-end/js/jquery.scrollTo.js"></script>
</body>
</html>



