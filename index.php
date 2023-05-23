<?php
    session_start();
    //kullanıcı index sayfasına geldiğinde çıkış yaptırması için   $_SESSION['key'] değişkeni sıfır'a eşitlenir.
    $_SESSION['key']=0;
?>
<!doctype html>
<htl >
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Anasayfa</title>
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
                  <li class="nav-item ms-5"><a class="nav-link active" href="index.php">ANASAYFA</a></li>
                    <li class="nav-item ms-5"><a class="nav-link active" href="aboutUs.php">HAKKIMIZDA</a></li>
                    <li class="nav-item ms-5"><a class="nav-link active" href="iletisim.php">İLETİŞİM</a></li>

                  </ul>
              
              <div class="float-end">

                <a href="login.php"> <button class="btn btn-outline-primary rounded-pill order-0 ms-5" type="button">Giriş Yap</button></a>
                
                <a href="register.php"> <button class=" ms-3 btn btn-outline-success rounded-pill order-0" type="button">Kayıt Ol</button></a>

            </div>
            </div>
        </div>
        </nav>
    

      

      
 
    
    <div class="container mt-4">
        <div class="row">
          <div class="col-sm-3">
            <div class="card" style="width: 13rem;">
              <a href="depremsicakyemek.php"><img src="images/deprem.jpeg" class="card-img-top mx-auto" alt="card1"></a>
              <div class="card-body">
                <h5 class="card-title">Deprem-Sıcak Yemek</h5>
                <p class="card-text">Deprem mağduru kardeşlerimiz için her gün sıcak yemek ikramında bulunuyoruz</p>
              </div>
            </div>
          </div>
          <div class="col-sm-3">
            <div class="card" style="width: 13rem;">
              <a href="afetacilyardim.php"><img src="images/afetcadiri.jpg" class="card-img-top mx-auto" alt="card1"></a>
              <div class="card-body">
                <h5 class="card-title">Afet Acil Yardım Çadırı</h5>
                <p class="card-text">Deprem bölgesindeki afetzede kardeşlerimiz için desteklerinizle afet çadırları kuruyoruz</p>
              </div>
            </div>
          </div>
          <div class="col-sm-3">
            <div class="card" style="width: 13rem;">
              <a href="briketev.php"><img src="images/briketev.jpg" class="card-img-top mx-auto" alt="card1"></a>
              <div class="card-body">
                <h5 class="card-title">Briket Ev Projesi</h5>
                <p class="card-text">Kamplarda zor durumda olan mazlum kardeşlerimizin barınma ihtiyaçları için yeni briket evler inşa ediyoruz.</p>
              </div>
            </div>
          </div>
          <div class="col-sm-3">
            <div class="card" style="width: 13rem;">
              <a href="gazzebagis.php"><img src="images/gazzeyardim.png" class="card-img-top mx-auto" alt="card1"></a>
              <div class="card-body">
                <h5 class="card-title">Gazze Acil Yardım</h5>
                <p class="card-text">Gazze’deki kardeşlerimiz saldırı altında hayatlarını sürdürmeye gayret ediyor! Zor günlerinde yardımlarımızla kardeşlerimizin yanındayız.</p>
              </div>
            </div>
          </div>
        </div>
    </div>

    <div class="container mt-3">
      <div class="row">
        <div class="col-sm-3">
          <div class="card" style="width: 13rem;">
            <a href="kisyardim.php"><img src="images/kisyardim.png" class="card-img-top mx-auto" alt="card1"></a>
            <div class="card-body">
              <h5 class="card-title">Kış Yardım Paketi</h5>
              <p class="card-text">Soğuktan etkilenen İdlib, Afganistan, Pakistan, Yemen ve Gazze'deki kardeşlerimize yardımlarınızı ulaştırıyoruz.</p>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="card" style="width: 13rem;">
            <a href="yemenacilyardim.php"><img src="images/yemenyardim.png" class="card-img-top mx-auto" alt="card1"></a>
            <div class="card-body">
              <h5 class="card-title">Yemen Acil  Yardım</h5>
              <p class="card-text">Yemen Acil Yardım kampanyamızla sen de kardeşlerine yardım elini uzat! Yemen dünyanın en büyük açlık felaketiyle karşı karşıya...</p>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="card" style="width: 13rem;">
            <a href="pakistanacilyardim.php"><img src="images/pakistanyardim.png" class="card-img-top mx-auto" alt="card1"></a>
            <div class="card-body">
              <h5 class="card-title">Pakistan Acil  Yardım</h5>
              <p class="card-text">Pakistan’daki şiddetli yağıştan etkilenen kardeşlerimize insani yardım ulaştırıyoruz!</p>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="card " style="width: 13rem;">
            <a href="idlibyardim.php"><img src="images/idlibyardim.png" class="card-img-top mx-auto" alt="card1"></a>
            <div class="card-body">
              <h5 class="card-title">İdlib Yardımı-Un</h5>
              <p class="card-text">Güvenli ve huzurlu bir yaşam ortamına kavuşan İdlib'teki Suriyeli kardeşlerimizin ekmek ihtiyacını gidermek için una ihtiyaçları var!</p>
            </div>
          </div>
        </div>
      </div>
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