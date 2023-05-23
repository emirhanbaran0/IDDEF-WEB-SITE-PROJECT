<?php
require_once "config.php";
session_start();

if (isset($_POST["gonder"])) {
	
	$isim=$_POST['isim'];
	$email=$_POST['email'];
	$konu=$_POST['konu'];
	$mesaj=$_POST['mesaj'];

	//Kullanıcın yolladğı mesaj veritanına iletilir
	$sql="INSERT INTO iletisimmail(isim,email,konu,mesaj) values('$isim','$email','$konu','$mesaj')";
	$sonuc=mysqli_query($db_con,$sql);
	header("Location:index.php");
	exit();
 }
?>

<!DOCTYPE html>
<html lang="tr">
<head>
	<title>IDDEF İletişim</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="icon" href="images/icon.png" type="image/x-icon" />

	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">

	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">

	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">

	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">

	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">

</head>
<body>

	<div class="contact1">
		<div class="container-contact1">
			<div class="contact1-pic js-tilt" data-tilt>
				<img src="images/img-01.png" alt="IMG">
			</div>

			<form class="contact1-form validate-form" action="" method="post">
				<span class="contact1-form-title">
					İletişim Formu
				</span>

				<div class="wrap-input1 validate-input" >
					<input class="input1" type="text" name="isim" placeholder="İsim Soyisim" required>
					<span class="shadow-input1"></span>
				</div>

				<div class="wrap-input1 validate-input" >
					<input class="input1" type="text" name="email" placeholder="Email" required> 
					<span class="shadow-input1"></span>
				</div>

				<div class="wrap-input1 validate-input" >
					<input class="input1" type="text" name="konu" placeholder="Konu" required>
					<span class="shadow-input1"></span>
				</div>

				<div class="wrap-input1 validate-input" >
					<textarea class="input1" name="mesaj" placeholder="Mesaj" required></textarea>
					<span class="shadow-input1"></span>
				</div>

				<div class="container-contact1-form-btn">
					<button class="contact1-form-btn" name="gonder" type="submit" >Gönder</button>
				</div>
			</form>
		</div>
	</div>





	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>

	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>

	<script src="vendor/select2/select2.min.js"></script>

	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>


<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>


	<script src="js/main.js"></script>

</body>
</html>
