<?php
include('config.php');
if(isset($_POST['upload'])){
$name=$_POST['name'];
$price=$_POST['price'];
$image=$_FILES['image'];
$image_location=$_FILES['image']['tmp_name'];
$image_name = $_FILES['image']['name'];
$image_up="images/" . $image_name;
$insert="INSERT INTO products(name,price,image) VALUES('$name','$price','$image_up')";
mysqli_query($con,$insert);
if(move_uploaded_file($image_location,'images/'.$image_name)){
    echo "<script>
    alert('تم رفع الصورة بنجاح');
    if(confirm('هل تريد الانتقال إلى الصفحة الرئيسية؟')) {
        window.location.href = 'project2.php';
    }
</script>";
exit();
} else {
echo "<script>
    alert('حدثت مشكلة، لم يتم رفع المنتج');
    if(confirm('هل تريد إعادة المحاولة؟')) {
        window.location.href = 'project2.php';
    }
</script>";
exit();
}
}
 

?>