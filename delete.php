<?php
include('config.php');
include('config.php');

$id = $_GET['id']; // جلب قيمة id من الرابط
 

  mysqli_query($con,"DELETE FROM products WHERE id=$id");
  header('location:products.php');
?>