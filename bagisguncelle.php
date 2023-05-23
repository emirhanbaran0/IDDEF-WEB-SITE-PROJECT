<?php
 require_once "config.php";
 
 session_start();
 $userId=@$_SESSION['id'];

 $id=$_GET["id"];

 //Bağışı Güncelleyecek Olan Kullanıcıyı bulur ve getirir.
 $sql="SELECT * FROM bagislarim WHERE id= '$id'";
 $sorgu=mysqli_query($db_con,$sql);
 $satir=$sorgu->fetch_assoc();
 $projeAdi=$satir['projeAdi'];
 if(isset($_POST["guncelle"])){
    $bagisMiktari=$_POST["miktar"];
    $bagisTarihi=date("Y-m-d");
	//Bağış Güncellenir
    $sql="UPDATE `bagislarim` SET `bagisMiktari` = '$bagisMiktari', `bagisTarihi`='$bagisTarihi' WHERE `bagislarim`.`id` ='$id'" ;
    $sorgu=mysqli_query($db_con,$sql);
    header("Location:homepage2.php");
    exit();
 }
 


?>





<!doctype html>
<html lang="en">
  <head>
  	<title>IDDEF Bağış Güncelle</title>
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
					<h2 class="heading-section">İDDEF YARDIM KURULUŞU</h2>
				</div>
			</div>
			
		      	<h3 class="text-center mb-4">Bağış Bilgileri</h3>
						<form action="" class="login-form" method="post">
                            <div class="form-group">
                                <input type="text" class="form-control rounded-left" placeholder="Bağış Projesi" required name="ad"  value='<?=$projeAdi?>' disabled >
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control rounded-left" placeholder="Bağış Miktarı" required
								name="miktar" >
                            </div> 
	            <div class="form-group">
	            	<button type="submit" class="btn btn-primary rounded submit p-3 px-5" name="guncelle">Güncelle</button>
	            </div>
	          </form>
	        </div>
				</div>
			</div>
		</div>
	</section>

	<div class="container-fluid mt-5 " style="background-color: white;">
	<p class="text-center text-muted class="justify-content-center" >© 2023  Emirhan Baran</p>
    <div class="row shadow-1-strong">
	
      <ul class="nav justify-content-center mx-auto border-bottom pb-2 mb-2">
        <li class="nav-item"><a href="homepage2.php" class="nav-link px-2 text-muted">Home</a></li>
        <li class="nav-item"><a href="aboutUs.php" class="nav-link px-2 text-muted">About</a></li>
        <li class="nav item"><a href="https://www.linkedin.com/in/emirhan-baran-aa0a11222/" class="nav-link px-2 text-muted">LinkedIn</a></li>
        <li class="nav item"><a href="https://github.com/emirhanbaran0" class="nav-link px-2 text-muted">GitHub</a></li>
      </ul>
   
    </div>
  </div>
	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

	</body>
</html>

