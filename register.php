<?php
 require_once "config.php";

 if (isset($_POST["kayitol"])) {
	
	$isim=$_POST['isim'];
	$soyisim=$_POST['soyisim'];
	$dogumTarihi=date('Y-m-d', strtotime($_POST['dogumTarihi']));
	$cinsiyet=$_POST['cinsiyet'];
	$email=$_POST['email'];
	$sifre=$_POST['sifre'];
	$sifre_hash=hash("sha256",$sifre);
	//Kullanıcı bu sorgu ile kaydını gerçekleştirir ve veritabanına eklenir.
	$sql="INSERT INTO kayitol(isim,soyisim,dogumTarihi,cinsiyet,email,sifre) values('$isim','$soyisim','$dogumTarihi','$cinsiyet','$email','$sifre_hash')";
	$sonuc=mysqli_query($db_con,$sql);
	header("Location:index.php");
	exit();
 }


?>





<!doctype html>
<html lang="en">
  <head>
  	<title>Kayıt Ol</title>
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
					<h2 class="heading-section">İDDEF YARDIM KURULUŞU KAYIT SİSTEMİ</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-5">
					<div class="login-wrap p-4 p-md-5">
		      	<div class="icon d-flex align-items-center justify-content-center">
		      		<span class="fa fa-user-o"></span>
		      	</div>
		      	<h3 class="text-center mb-4">Kayıt Ol</h3>
						<form action="" class="login-form" method="post">
                            <div class="form-group">
                                <input type="text" class="form-control rounded-left" placeholder="İsim" required name="isim">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control rounded-left" placeholder="Soyisim" required
								name="soyisim">
                            </div>
                            <div class="form-group">
                                <label for="start">Doğum  Tarihi:</label>
                                <input type="date" id="start" 
                                value="2018-07-22"
                                min="1930-01-01" max="2010-12-31" name="dogumTarihi">
                                <label for="start">Cinsiyet:</label>
                                <input type="radio" id="erkek"  value="Erkek" name="cinsiyet">
                                <label >E</label>
                                <input type="radio" id="kadin" value="Kadın" name="cinsiyet">
                                <label >K</label>
                            </div>
		      		<div class="form-group">
		      			<input type="email" class="form-control rounded-left" placeholder="Email" required name="email">
		      		</div>
	            <div class="form-group d-flex">
	              <input type="password" class="form-control rounded-left" placeholder="Password" required name="sifre">
	            </div>
	            
	            <div class="form-group">
	            	<button type="submit" class="btn btn-primary rounded submit p-3 px-5" name="kayitol">Kayıt Ol</button>
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

