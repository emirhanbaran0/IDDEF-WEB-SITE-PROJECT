<?php
    require_once "config.php";
    require_once "yonlendirme.php";
    session_start();
    if(@$_SESSION['key']==1){
        
        $userId=@$_SESSION['id'];
        //Oturumu açık olan kullanıcının bağışlarını ekrana getirir
        
    
        if(isset($_GET['sil'])){
            $id=$_GET['sil'];
            //Seçilen bağışı silen sorgudur.
            $sqlsil="DELETE FROM bagislarim WHERE `bagislarim`.`id` = '$id'";
            $sonucsil=mysqli_query($db_con,$sqlsil);
        }

        $sql= "SELECT * FROM bagislarim WHERE userId='$userId'";
        $sonuc=mysqli_query($db_con,$sql);
    } else{
      
        echo "<b>Bağış Yapmak İçin Önce Hesap Açmalısınız Ana Sayfaya  Yönlendiriliyorsunuz...<b>";
        go("index.php",1);
    }
   

?>




<!doctype html>
<html >
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>IDDEF Bağışlarım</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css" />
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>

  </head>
  <body >
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
                
                <a href="index.php"> <button class=" ms-3 btn btn-outline-success rounded-pill order-0" type="button">Çıkış Yap</button></a>

            </div>
            </div>
        </div>
        </nav>
        <br>
        <div class="container mt-4">
        <div class="row">
            <div class="col">
                <div class="btn-group">
                    <a href="bagislarim.php" class="btn btn-outline-primary">Tüm Bağışlarım</a>
                </div>
            </div>
        </div>
        </div>
            <div class="container">
                <div class="row">
                    <div class="col">
                        <table class="table table-hover table-striped " >
                            <thead >
                                <tr>
                                    <th>Bağış Yapılan Proje</th>
                                    <th>Bağış Miktarı</th>
                                    <th>Bağış Tarihi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php while($satir = $sonuc->fetch_assoc()){  ?>
                                    <tr>
                                        <td><?=$satir['projeAdi']?></td>
                                        <td><?=$satir['bagisMiktari']?> TL</td>
                                        <td><?=$satir['bagisTarihi']?></td>
                                        <td>
                                            <div class="btngorup">
                                                <a href="bagisguncelle.php?id=<?=$satir['id']?>" class="btn btn-success">Güncelle</a>
                                                <a href="?sil=<?=$satir['id']?>" onclick="return confirm('Bağış Silinsin Mi?')" class="btn btn-danger">Sil</a>
                                            </div>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
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