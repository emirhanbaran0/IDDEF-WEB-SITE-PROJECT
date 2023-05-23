<?php
    
    include("config.php");
    session_start();
    header('Content-Type: text/html; charset=UTF-8');
    


?>



<!doctype html>
<html >
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>IDDEF About Us</title>
    <link rel="icon" href="images/icon.png" type="image/x-icon" />
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
                    <li class="nav-item"></li>
                    <li class="nav-item ms-5"><a class="nav-link active" href="index.php">ANASAYFA</a></li>
                    <li class="nav-item ms-5"><a class="nav-link active" href="bagislarim.php">BAĞIŞLARIM</a></li>
                    <li class="nav-item ms-5"><a class="nav-link active" href="aboutUs.php">HAKKIMIZDA</a></li>
                    <li class="nav-item ms-5"><a class="nav-link active" href="iletisim.php">İLETİŞİM</a></li>
                   

                  </ul>
              
              <div class="float-end">

                <a href="hesapguncelle.php"> <button class="btn btn-outline-primary rounded-pill order-0 ms-5" type="button" >Hesabım</button></a>
                
                <a href="exit.php"> <button class=" ms-3 btn btn-outline-success rounded-pill order-0" type="button">Çıkış Yap</button></a>

            </div>
            </div>
        </div>
        </nav>
    


            <div class="jumbotron">

            <img src="images/yardim.png" class="img-rounded" align="right" >
            <h2 style="color:green; font-family: Times New Roman, Times, serif; text-align:center">İnsana Değer Veren Dernekler Federasyonu</h2>
            <p style="text-align:center"> Bugün, Türkiye dahil 55 ülke 309 bölgede hizmet veren İDDEF’in, Afrika, Asya, Ortadoğu ve Balkanlar’daki Külliye, Cami, Mescid ve ders halkalarıyla birlikte 80 Medresesinde 400’ün üzerinde hoca ile 10 bine yakın talebe ilim tahsilini sürdürüyor. İslami ve insani yardım çalışmalarını hummalı, sürdürülebilir ve etkin bir şekilde sürdüren İDDEF, İstanbul’da bulunan genel merkez ve 27 ildeki 30 temsilcilikle tüm faaliyetlerine kurumsal ve istikrarlı bir idari yapı ile devam ediyor.</p>
            <p style="text-align:center">
            İDDEF, susuzluğun ve yoksulluğun yaşandığı bölgelere ise insani yardım taşımaktadır. İslami eğitimin sıkıntısız şekilde gerçekleşmesi için başta talebeler, onların aileleri ve ihtiyaç sahibi Müslüman kardeşlerimize yardımlar ulaştırılmaktadır. Bu yardımlar, su kuyusu açılması, Ramazan ayında zekat, fitre ve kumanya yardımı, kurban, gıda ve eşya dağıtımı, mescid, külliye benzeri imar faaliyetleri, acil afet yardımı ve sağlık projelerinden oluşmaktadır. İnsanın yaşaması için en temel ihtiyacı olan su ve yiyecek yardımı aksatılmadan ihtiyaç sahibi ülkelere ulaştırılmaktadır.
            </p>
            <br>
            <a href="index.php"><button type="button" class="btn btn-success" align="center">
            Haydi Sizde Bu İyilik Zincire Katılarak Yardıma İhtiyacı Olanlara Destek Olun</button></a>
            </div>

            <div class="container-fluid mt-5 " style="background-color: white;">
    <div class="row shadow-1-strong">
      <ul class="nav justify-content-center mx-auto border-bottom pb-2 mb-2">
        <li class="nav-item"><a href="index.php" class="nav-link px-2 text-muted">Home</a></li>
        <li class="nav-item"><a href="aboutUs.php" class="nav-link px-2 text-muted">About</a></li>
        <li class="nav item"><a href="https://www.linkedin.com/in/emirhan-baran-aa0a11222/" class="nav-link px-2 text-muted">LinkedIn</a></li>
        <li class="nav item"><a href="https://github.com/emirhanbaran0" class="nav-link px-2 text-muted">GitHub</a></li>
      </ul>
      <p class="text-center text-muted class="justify-content-center">© 2023  Emirhan Baran</p>
    </div>
  </div>
 
   
 </body>
</html>