<?php
session_start();
$_SESSION['key']=0;
session_destroy();
header("location:index.php");
?>