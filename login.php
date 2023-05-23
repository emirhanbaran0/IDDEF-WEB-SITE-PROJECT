<?php
require_once "config.php";
require_once "yonlendirme.php";
session_start();

if($_SERVER["REQUEST_METHOD"] == "POST")
{
  $email = $_POST["email"];
  $sifre = $_POST["sifre"];
  $sifre_hash=hash("sha256",$sifre);
  if(empty($email))
      $uyari='Lütfen  Mailinizi  Giriniz!';
  else if(empty($sifre))
      $uyari='Lütfen Şifrenizi  Giriniz!';
  else
  {
    $sql="SELECT * FROM `kayitol` WHERE email='$email' AND sifre='$sifre_hash' ";
    $result=mysqli_query($db_con,$sql);
    $row=mysqli_fetch_array($result);
	if($row!=null){
		if ($row['email'] == $email && $row['sifre'] == $sifre_hash )
    {
        $_SESSION['id'] = $row['id'];
		$_SESSION['key']=1;
        header("location:homepage2.php");
        exit();
   } 
	}
    
   else
     $uyari= ' Giriş yapılamadı.Lütfen kullanıcı adınızı ve şifrenizi kontrol edin';
	echo $uyari;
  }
}



?>






<!doctype html>
<html lang="en">
  <head>
  	<title>IDDEF Giriş</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="css/style.css">

	</head>
	<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">İDDEF YARDIM KURULUŞU GİRİŞ SİSTEMİ</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-5">
					<div class="login-wrap p-4 p-md-5">
		      	<div class="icon d-flex align-items-center justify-content-center">
		      		<span class="fa fa-user-o"></span>
		      	</div>
		      	<h3 class="text-center mb-4">Giriş</h3>
						<form action="login.php" method="POST" class="login-form">
		      		<div class="form-group">
		      			<input type="email" class="form-control rounded-left" placeholder="Email" name="email" required>
		      		</div>
	            <div class="form-group d-flex">
	              <input type="password" class="form-control rounded-left" placeholder="Password" required name="sifre">
	            </div>
	            <div class="form-group d-md-flex">
	            	<div class="w-50">
	            		<label class="checkbox-wrap checkbox-primary">Remember Me
									  <input type="checkbox" checked>
									  <span class="checkmark"></span>
									</label>
								</div>
								
	            </div>
	            <div class="form-group">
	            	<button type="submit" class="btn btn-primary rounded submit p-3 px-5" name="oturumAc">Oturum Aç</button>
	            </div>
	          </form>
	        </div>
				</div>
			</div>
		</div>
	</section>

	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

	</body>
</html>

