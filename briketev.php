<?php
    require_once "config.php";
    require_once "yonlendirme.php";

    session_start();

    if(@$_SESSION['key']==1){  //Kullanıcının oturumu açık mı kontorlü yapılır
      if(isset($_POST["bagisYap"]))
      {
         
          $projeAdi="Briket Ev Projesi";
        $bagisTarihi=date("Y-m-d");
          $bagisMiktari=$_POST['miktar'];
          $userId=@$_SESSION['id'];
          //Briket Ev bağış kampanyasına oturumu açık olan kullanıcının bağış yapmasını sağlayan sorgu. 
          $sql="INSERT INTO bagislarim(projeAdi,bagisTarihi,bagisMiktari,userId) values('$projeAdi','$bagisTarihi','$bagisMiktari','$userId')";
         
          $sonuc=mysqli_query($db_con,$sql);
          header("Location:homepage2.php");
        exit();
         
      }
    }  else{
      
        echo "<b>Bağış Yapmak İçin Önce Hesap Açmalısınız Ana Sayfaya  Yönlendiriliyorsunuz...<b>";
        go("index.php",1);
    }
    
   
    
?>




<!doctype html>
<html >
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>IDDEF Briket Ev</title>
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

                <a href="user.php"> <button class="btn btn-outline-primary rounded-pill order-0 ms-5" type="submit">Hesabım</button></a>
                
                <a href="exit.php"> <button class=" ms-3 btn btn-outline-success rounded-pill order-0" type="button" >Çıkış Yap</button></a>

            </div>
            </div>
        </div>
        </nav>
       
        <div class="container mt-4">
          <div class="row">
            <div class="col-sm-9">
              <div class="card" style="width: 80%;">
              <img src="images/briketev.jpg" class="card-img-top mx-auto" alt="card1" style="width: 50%; height:50%">
              <div class="card-body">
                <h5 class="card-title">Kamplarda zor durumda olan mazlum kardeşlerimizin barınma ihtiyaçları için yeni briket evler inşa ediyoruz.</h5>
                <p class="card-text">Devlet millet el ele vererek Cumhurbaşkanlığımız himayelerinde İçişleri Bakanlığı AFAD koordinasyonuyla "Bir Aradayız İdlib'in Yanındayız" kampanyası kapsamında "İdlib 100 bin Briket Ev” hedefiyle başlatılan projeye destek veren İDDEF, yeni briket evler inşa ediyor. Siz de 'İyiliğe Çatı Ol' diyerek, zor şartlarda yaşam mücadelesi veren savaş mağduru kardeşlerimize yardım elinizi uzatarak duvara bir briket, çatıya bir kiremit koyabilirsiniz. </p>
                <h5>Hayat Normalleşecek, Gönüllü ve Güvenli Dönüşler Olacak</h5>
                <p>"Bir Aradayız İdlib'in Yanındayız" kampanyası kapsamında uzun süredir ülkemizde mülteci durumunda bulunan Suriyeli vatandaşların ülkelerine gönüllü, güvenli ve onurlu geri dönüşlerin sağlanması amaçlanıyor. İDDEF de hayırseverlerin desteğiyle bu kampanya kapsamında 2.390 adet briket ev inşası gerçekleştirerek bu geri dönüşe destek olmayı ve uzun süredir topraklarından uzak kalan Suriyeli mültecilerin ülkelerine dönüşlerinde yaşanacak İyiliğe Çatı Ol’mayı hedefliyor. Senelerdir tam kapasiteli yerleşik yaşama ulaşamayan savaş mağduru kardeşlerimizin toplumsal entegrasyonları briket evlerin inşasıyla kolaylaşacak. Temel barınma ihtiyaçlarının yanında duyulabilecek ihtiyaç çerçevesinde kurulacak sağlık merkezleri, büyük su kaynakları ve altyapı hizmetleriyle mini bir şehir yaşantısı inşa edilecek.</p>
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