<?php
    require_once "config.php";
    require_once "yonlendirme.php";
    session_start();
    if(@$_SESSION['key']==1 ){  //Kullanıcının oturumu açık mı kontorlü yapılır
      if(isset($_POST["bagisYap"]))
    {
       
        $projeAdi="Kış Yardım Paketi";
	    $bagisTarihi=date("Y-m-d");
        $bagisMiktari=$_POST['miktar'];
        $userId=@$_SESSION['id'];
        //Kış yardım bağış kampanyasına oturumu açık olan kullanıcının bağış yapmasını sağlayan sorgu.
        $sql="INSERT INTO bagislarim(projeAdi,bagisTarihi,bagisMiktari,userId) values('$projeAdi','$bagisTarihi','$bagisMiktari','$userId')";
       
        $sonuc=mysqli_query($db_con,$sql);
        header("Location:homepage2.php");
	    exit();
       
    }
    }
    else{
      
        echo "<b>Bağış Yapmak İçin Önce Hesap Açmalısınız Ana Sayfaya  Yönlendiriliyorsunuz...<b>";
        go("index.php",1);
    }
    
?>




<!doctype html>
<html >
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>IDDEF Kış Yardım</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css" />
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>

  </head>
  <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand"><img  width="80px" src="images/logo.png" alt="logo"><span style="font-family:'Courier New', Courier, monospace;" class="fs-2">Bağış Yap</span></a>
            <div class="collapse navbar-collapse">
                
                  <ul class="navbar-nav ml-auto">
                  <li class="nav-item ms-5"><a class="nav-link active" href="homepage2.php">ANASAYFA</a></li>
                  <li class="nav-item ms-5"><a class="nav-link active" href="bagislarim.php">BAĞIŞLARIM</a></li>
                    <li class="nav-item ms-5"><a class="nav-link active" href="aboutUs.php">HAKKIMIZDA</a></li>
                    <li class="nav-item ms-5"><a class="nav-link active" href="iletisim.php">İLETİŞİM</a></li>

                  </ul>
              
              <div class="float-end">

                <a href="user.php"> <button class="btn btn-outline-primary rounded-pill order-0 ms-5" type="button">Hesabım</button></a>
                
                <a href="exit.php"> <button class=" ms-3 btn btn-outline-success rounded-pill order-0" type="button">Çıkış Yap</button></a>

            </div>
            </div>
        </div>
        </nav>
       
        <div class="container mt-4">
          <div class="row">
            <div class="col-sm-9">
              <div class="card" style="width: 80%;">
              <img src="images/kisyardim.png" class="card-img-top mx-auto" alt="card1" style="width: 50%; height:50%">
              <div class="card-body">
                <h5 class="card-title">Soğuktan etkilenen İdlib, Afganistan, Pakistan, Yemen ve Gazze'deki kardeşlerimize yardımlarınızı ulaştırıyoruz.</h5>
                <p class="card-text">İDDEF, iç savaş nedeniyle Türkiye sınırına sığınan Suriyeli kardeşlerimizin, çatışma ve istikrarsızlık nedeniyle yaşam mücadelesi veren Afgan kardeşlerimizin, sel felaketi nedeniyle zor günler geçiren Pakistanlı kardeşlerimizin, dünyanın en büyük insanlık krizinin yaşandığı Yemenli kardeşlerimizin ve abluka altında yoksulluk çeken Gazze’deki Filistinli kardeşlerimizin çetin kış şartlarından etkilenmemesi için kış yardım paketi yardımı yapıyor.</p>
                <h5>Savaştan Sonra En Büyük Zorluk: Kış Şartları</h5>
                <p>12'nci yılına giren Suriye savaşından etkilenen kardeşlerimizin ilk günden bu yana yanlarında olmaya gayret ediyoruz. Özellikle kış ayları geldiğinde soğuk hava ve çamur içerisindeki kamplarda hayatta kalma mücadelesi veren Suriyeli kardeşlerimizin yanında oluyoruz. İdlib kırsalında inşa ettiğimiz 620 briket ev ve çadırlarda yaşamaya başlayan kardeşlerimize hayırseverlerin desteğiyle kumanya, kışlık kıyafet, battaniye ve yakacak yardımı yapıyoruz. Bombardıman nedeniyle İdlib kırsalına göç etmek zorunda kalan aileler, çetin kış şartlarında soğuk hava ve sular altında kalan yağmur ve çamur içerisindeki alanlarda yaşam mücadelesi veriyor.</p>
              </div>
              </div>
            </div>
            <div class="col-sm-3">
                                <div class="input-group mb-3" >
                    <form action="" method="post">
                    <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" name="miktar">
                    <br>
                    <div class="container ">
                        <div class="col-md-12 text-center">
                            <button type="submit" class="btn btn-success" name="bagisYap">Bağış Yap</button>
                        </div>
                    </div>
                    </form>
                    <div class="input-group-append">
                        <span class="input-group-text">TL</span>
                    </div>
                    </div>
            </div>
          </div>
        </div>

        <div class="container-fluid mt-5 " style="background-color: white;">
    <div class="row shadow-1-strong">
      <ul class="nav justify-content-center mx-auto border-bottom pb-2 mb-2">
        <li class="nav-item"><a href="homepage2.php" class="nav-link px-2 text-muted">Home</a></li>
        <li class="nav-item"><a href="aboutUs.php" class="nav-link px-2 text-muted">About</a></li>
        <li class="nav item"><a href="https://www.linkedin.com/in/emirhan-baran-aa0a11222/" class="nav-link px-2 text-muted">LinkedIn</a></li>
        <li class="nav item"><a href="https://github.com/emirhanbaran0" class="nav-link px-2 text-muted">GitHub</a></li>
      </ul>
      <p class="text-center text-muted class="justify-content-center">© 2023  Emirhan Baran</p>
    </div>
  </div>
 
    
   
</body>
</html>