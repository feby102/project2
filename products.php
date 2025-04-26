<!DOCTYPE html>
<html lang="en">
<head>
       <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
       <link rel="preconnect" href="https://fonts.googleapis.com">
       <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
       <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200..1000&family=Dancing+Script:wght@400..700&family=Delius&family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
   
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>products| المنتجات📦</title>
    <style>
h3{
    font-family: "cairo",sans-serif;
    font-weight: bold;
}
.card{
 float:right;
 margin-top: 20px;  
 margin-left: 10px;
 margin-right: 10px; 
}

.card img{
    width: 100%;
    height: 200%;
}
.main{
width: 60%;

}
    </style>
</head>
<body>
   <center>
    <h3>جميع المنتجات المتوفره</h3>
   </center> 
<?php
include ('config.php');
$res=mysqli_query($con,"SELECT *FROM products");
while($row=mysqli_fetch_array($res)){

    echo"<center>
    <main>
   <div class= 'card' style='width:15rem'>
    <img src='$row[image]'class='card-img-top'>
    <div class ='card-body'>
<h5 class='card-title'>$row[name]</h5>
<p class='card-text'>$row[price]</p>
<a href='delete.php? id=$row[id]' class ='btn btn-danger'> حذف المنتج</a>
<a href='update.php? id=$row[id]' class ='btn btn-primary'> تعديل المنتتج</a>
</div>
</div>
</main>
    </center >
    ";
}

?>


</body>
</html>