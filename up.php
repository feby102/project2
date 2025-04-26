<?php
include('config.php');
if(isset($_POST['update'])){
    $id=$_POST['id'];
$name=$_POST['name'];
$price=$_POST['price'];
$image=$_FILES['image'];
$image_location=$_FILES['image']['tmp_name'];
$image_name = $_FILES['image']['name'];
$image_up="images/" . $image_name;
$updata="UPDATE `products`SET `name`='$name',`price`='$price',`image`='$image_up' WHERE id=$id";
 mysqli_query($con,$updata);
if(move_uploaded_file($image_location,'images/'.$image_name)){
    echo "<script>
    alert('تم تحديث بنجاح');
    if(confirm('هل تريد الانتقال إلى الصفحة الرئيسية؟')) {
        window.location.href = 'project2.php';
    }
</script>";
exit();
} else {
echo "<script>
    alert('حدثت مشكلة، لم يتم تحديث المنتج');
    if(confirm('هل تريد إعادة المحاولة؟')) {
        window.location.href = 'project2.php';
    }
</script>";
exit();
}
}
 

?>