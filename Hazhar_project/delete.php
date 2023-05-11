<?php
include('connection.php');
 $ID = $_GET['id'];
mysqli_query($conn,"DELETE FROM product1 WHERE id=$ID");
header("location:products.php");
?>