<?php

//Database bağlanma burada gerçekleştirilir
$db_host="sql300.epizy.com:3306";
$db_user="epiz_34227945";
$db_pass="7QR5qtMkfpv";
$db_name="epiz_34227945_dhrs";

$db_con=mysqli_connect($db_host,$db_user,$db_pass,$db_name);

// Check connection
if (mysqli_connect_errno()) {
  mysqli_connect_error();
  echo "Connection failed: ";
  exit();
}

?>