<?php
require("connection.php");

if(isset($_POST['updata'])){
$ID = $_POST['id'];    
$name=$_POST['name'];
$price=$_POST['price'];
$image = $_FILES['image'];
$image_location = $_FILES['image']['tmp_name'];
$image_name = $_FILES['image']['name'];
$image_up = "image/".$image_name;
$update = "UPDATE product1 SET name='$name',price='$price',image = '$image_up' WHERE id = $ID";
mysqli_query($conn,$update);
if(move_uploaded_file($image_location,'image/'.$image_name)){
 echo "<script>alert('The product has been uploaded successfully')</script>";   
}else{
 echo "<script>alert('The product was not uploaded successfully')</script>";   

}
header('location: interface.php');
}
?>