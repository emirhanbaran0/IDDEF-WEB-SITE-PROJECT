<?php
    require_once "config.php";
    require_once "yonlendirme.php";

    session_start();

    if(@$_SESSION['key']==1){  //Kullanıcının oturumu açık mı kontorlü yapılır
      if(isset($_POST["bagisYap"]))
      {
          
          $projeAdi="Pakistan Acil Yardım";
        $bagisTarihi=date("Y-m-d");
          $bagisMiktari=$_POST['miktar'];
          $userId=@$_SESSION['id'];
          //Pakistan Acil yardım bağış kampanyasına oturumu açık olan kullanıcının bağış yapmasını sağlayan sorgu. 
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
    <title>İDDEF Pakistan Yardım</title>
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
              <img src="images/pakistanyardim.png" class="card-img-top mx-auto" alt="card1" style="width: 50%; height:50%">
              <div class="card-body">
                <h5 class="card-title">Pakistan’daki şiddetli yağıştan etkilenen kardeşlerimize insani yardım ulaştırıyoruz!</h5>
                <p class="card-text">Güney Asya ülkesi Pakistan’da muson yağmurlarının yol açtığı seller etkisini artırırken milyonlarca Pakistanlı zor günler yaşıyor. İnsana Değer Veren Dernekler Federasyonu (İDDEF) olarak, Pakistan’ı etkisi altına alan şiddetli muson yağmurlarının neden olduğu selden etkilenen ve güvenli gıdaya ulaşmakta zorluk çeken kardeşlerimiz için acil yardım kampanyası başlattık. Kardeş ülke Pakistan’ın bu zor zamanında yanında olmak için harekete geçerken ulusal acil durum ilan ülkedeki kardeşlerimiz çaresizlik içinde yardım bekliyor.</p>
                <h5>Sel Felaketinin Bilançosu Ağırlaşıyor</h5>
                <p>14 Haziran’dan bu yana etkili muson yağmurları sebebiyle Pakistan’da meydana gelen sel felaketinden şu ana kadar 34 milyon kişi etkilenirken, ölenlerin sayısı 1650'ye yaklaştı ve 10 milyon kişi evsiz kaldı. Binlerce kişinin yaralandığı sel afetinde evler ve köprüler yıkıldı, yollar hasar gördü ve 1 milyonu aşkın hayvan telef oldu. Kurulan çadır kamplarında barınan kişi sayısı ise 500 bine çıktı. Yağışların önümüzdeki günlerde de devam edeceği ve çok sayıda insanın kurtarılması için çalışmaların sürdüğü açıklandı.</p>
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