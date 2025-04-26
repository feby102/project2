<?php 
include('config.php');
$id=$_GET['id'];
$up=mysqli_query($con,"SELECT *FROM products where id=$id");
$data=mysqli_fetch_array($up);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
       <link rel="preconnect" href="https://fonts.googleapis.com">
       <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
       <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200..1000&family=Dancing+Script:wght@400..700&family=Delius&family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
   
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> تاكيد شراء المنتج</title>
    <style>
input{
display:none;

}
.main{

    width:30%;
    padding: 20px;
    box-shadow:1px 1px 10px black;
    margin-top: 50px;
}




    </style>
</head>

    <body>
 <center>

        <div class="main">

         <form action="insert_card.php" method="post">
         <h2>هل فعلا تريد شراء المنتج</h2>
         <input type="text" name="id" value='<?php echo $data['id']?>' >
         <input type="text" name="name"value='<?php echo $data['name']?>' >
         <input type="text" name="price"value='<?php echo $data['price']?>'>
         <button name="add" type="submit" class='btn btn-warning'> تاكيد اضافه  المنتج للعربه</button>
        <br>
        <a href="shop.php">الرجوع لصفحه المنتجات</a>

        </form>
        </div>




    </center>
</body>
</html>