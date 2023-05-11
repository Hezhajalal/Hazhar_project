<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
   <style>
    .card{
    float: right;
    margin-top:20px;
    margin-left:10px;
    margin-right:10px;
    /* style='width:16rem; hieght:36rem;'  */
    width: 30%;
    height: 320px;
}
.card img{
    width:100%;
    height: 200px;

}
main{
width:60%;    
}
   </style>

</head>
<body>
<link rel="stylesheet" href="beatiful.css">
<center>

<h3>All products available</h3>

</center>

<?php
include("connection.php");
$result = mysqli_query($conn,"SELECT * FROM product1");
while($row = mysqli_fetch_array($result)){
    echo "
    <center> 
    <main>

<div class='card' >
  <img class='card-img-top' src='$row[image]' >
  <div class='card-body'>
    <h5 class='card-title'>$row[name]</h5>
    <p class='card-text'>$row[price]</p>
    <a href='delete.php? id=$row[id]' class='btn btn-danger'>Delete the product</a>
    <a href='update.php? id=$row[id]' class='btn btn-primary'>Edit the product</a>
  </div>
</div>
</main>
    <center>
  ";
}
?>


</body>

</html>