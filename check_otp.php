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
<div class="reg-w3">
<div class="w3layouts-main">
	<h2>Xác Nhận Mã OTP</h2>
		<form action="#" method="post" enctype="multipart/form-data">
			<input type="text" class="ggg" name="otp" placeholder="OTP" required="">
				<div class="clearfix"></div>
				<input type="submit" value="Xác Nhận OTP" name="submit_otp">
				
		</form>
		<p>Đăng Nhập Tại Đây.<a href="index.php">Login</a></p>
</div>
</div>

	<?php
		$connect = mysqli_connect("localhost", "root", "", "thi_php");
		mysqli_set_charset($connect, 'UTF8');
		
	?>
		<?php
			$msg = "";
            if(isset($_POST['submit_otp']) && $_POST['email_otp'] ){
				
				$email_otp = $_POST['email_otp'];
		
		}
	?>
<script src="back-end/js/bootstrap.js"></script>
<script src="back-end/js/jquery.dcjqaccordion.2.7.js"></script>
<script src="back-end/js/scripts.js"></script>
<script src="back-end/js/jquery.slimscroll.js"></script>
<script src="back-end/js/jquery.nicescroll.js"></script>
<script src="back-end/js/jquery.scrollTo.js"></script>
</body>
</html>



