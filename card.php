<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
       <link rel="preconnect" href="https://fonts.googleapis.com">
       <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
       <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200..1000&family=Dancing+Script:wght@400..700&family=Delius&family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
   
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> عربتى|منتجاتى</title>
    <style>
        h3{
        font-family:'=Dancing+Script',sans-serif;
        font-weight:bold;
        }
        main{
          width: 40%;
          margin-top: 30px;

        }
        table{
            box-shadow: 1px 1px 10px silver;
             
        }
        thead{
            background-color:#3498DB !important;
            color: white !important;
            text-align:center;      
        }
        tbody{     text-align: :center;      
             }



    </style>
    </head>
<body>
    <center>
<h3>منتجاتك المحجوزه</h3>
</center>
    <?php
include('config.php');
$result=mysqli_query($con,"SELECT*FROM addcard");
while($row=mysqli_fetch_array($result)){

    echo"
    <center>
<main>
<table class='table'>
    <thead>
     <tr>
         <th scope='col'>product name</th>
         <th scope='col'>product price</th>
         <th scope='col'> delete product</th>
     </tr>

    </thead>
<tbody>


<tr>
<td>$row[name]</td>
<td>$row[price]</td>
<td><a href='del_card.php?id=$row[id]'class='btn btn-danger'>ازاله</td>
</tr>
</tbody>


</table>
</main>
    </center> ";}?>

    <center>
<a href="shop.php">الرجوع الى صفحه المنتجات</a>


    </center>
</body>
</html>