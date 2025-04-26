<!DOCTYPE html>
<html lang="en">
<head>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200..1000&family=Dancing+Script:wght@400..700&family=Delius&family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
     <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>تعديل المنتجات |update</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <?php
include('config.php'); 
$id=$_GET['id'];   
    $up=mysqli_query($con,"select *from products where id=$id");
   $data=mysqli_fetch_array($up); 
    
    
    
    ?>    <center>
        <div class= "main">
<form action=" up.php"method="POST" enctype="multipart/form-data">
<h2> تعديل المنتجات </h2>    
    
<input type="text" name='id' value='<?php echo $data['id']?>'>
    <br>
    <input type="text" name='name' value='<?php echo $data['name']?>'>
    <br>
    <input type="text" name='price'value='<?php echo $data['price']?>'> 
     <br>
     <input type="file" id="file" name='image' style="display:none;">
     <label for="file"> تحديث صوره للمنتج</label>
     <button name="update">  تعديل المنتج</button>
     <br>
     <a href="products.php">عرض كل المنتجات📦</a>
</form>
</div>
<p>Developed by FEBY EMAD</p>
    </center>
</body>
</html>