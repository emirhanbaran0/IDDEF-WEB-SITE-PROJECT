<?php
 require_once "config.php";
 session_start();
 $userId=@$_SESSION['id'];

if(isset($_POST['guncelle'])){
    
    $isim=$_POST['isim'];
	$soyisim=$_POST['soyisim'];
	$dogumTarihi=date('Y-m-d', strtotime($_POST['dogumTarihi']));
	$email=$_POST['email'];
	$sifre=$_POST['sifre'];
	$sifre_hash=hash("sha256",$sifre);

	//Kullanınıcı bilgilerini bu sorgu ile günceller.
    $sql="UPDATE `kayitol` SET `isim` = '$isim', `soyisim` = '$soyisim', `dogumTarihi` = '$dogumTarihi', `email` = '$email', `sifre` = '$sifre_hash' WHERE `kayitol`.`id`='$userId' ";
    $sonuc=mysqli_query($db_con,$sql);
    header("Location:homepage2.php");
	exit();
}

if(isset($_POST['hesabiSil']) ){

    $sql= "SELECT * FROM kayitol WHERE id='$userId'";
    $sonuc=mysqli_query($db_con,$sql);
    $satir = $sonuc->fetch_assoc();

    $sifre_hash=$satir['sifre'];

    $yenisifre=$_POST['sifre'];
	$sifre_hash1=hash("sha256",$yenisifre);

    if($sifre_hash==$sifre_hash1){
		//Kullanınıcı bilgilerini bu sorgu ile günceller.
        $sql="DELETE FROM `kayitol` WHERE `kayitol`.`id` = $userId";
    $sonuc=mysqli_query($db_con,$sql);
    header("Location:index.php");
	exit();
    }
    else{
        echo "Şifrenizi Yanlış Girdiniz!";
    }
    
}

//Kullanıcı bilgilerini getirir.
 $sql= "SELECT * FROM kayitol WHERE id='$userId'";
 $sonuc=mysqli_query($db_con,$sql);
 $satir = $sonuc->fetch_assoc();
$isim=$satir['isim'];
$soyisim=$satir['soyisim'];
$cinsiyet=$satir['cinsiyet'];
$dogumTarihi=$satir['dogumTarihi'];
$email=$satir['email'];


?>





<!doctype html>
<html lang="en">
  <head>
  	<title>IDDEF Hesabım</title>
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
					<h2 class="heading-section">İDDEF YARDIM KURULUŞU HESABIM</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-5">
					<div class="login-wrap p-4 p-md-5">
		      	<div class="icon d-flex align-items-center justify-content-center">
		      		<span class="fa fa-user-o"></span>
		      	</div>
		      	<h3 class="text-center mb-4">Hesap Bilgilerim</h3>
						<form action="" class="login-form" method="post">
                            <input type="hidden" name="id" value="">
                            <div class="form-group">
                                <input type="text" class="form-control rounded-left" placeholder="İsim" required name="isim" value=<?=$isim?> >
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control rounded-left" placeholder="Soyisim" required
								name="soyisim" value=<?=$soyisim?>>
                            </div>
                            <div class="form-group">
                                <label for="start">Doğum  Tarihi:</label>
                                <input type="date" id="start" 
                                
                                min="1930-01-01" max="2010-12-31" name="dogumTarihi" value=<?=$dogumTarihi?>>
                               
                            </div>
		      		<div class="form-group">
		      			<input type="email" class="form-control rounded-left" placeholder="Email" required name="email" value=<?=$email?>>
		      		</div>
	            <div class="form-group d-flex">
	              <input type="password" class="form-control rounded-left" placeholder="Password" required name="sifre">
	            </div>
	            
	            <div class="form-group">
	            	<button type="submit" class="btn btn-primary rounded submit p-3 px-5" name="guncelle">Güncelle</button>
                    
	            </div>
                <br><br><br>
                        <div class="form-group ">
                <div class="col-md-12 text-center">
                    <button type="submit" class="btn btn-primary rounded submit p-3 px-5" name="hesabiSil">Hesabı Sil</button>
   
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

