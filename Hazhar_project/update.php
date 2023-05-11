<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
</head>
<body>
    <link rel="stylesheet" href="beatiful.css">
<?php
include("connection.php");
$ID = $_GET['id'];
$up = mysqli_query($conn,"SELECT * FROM product1 WHERE id=$ID");
$data = mysqli_fetch_array($up);
?> 
    <center>

        <div class="main">
    <form action="up.php" method="post" enctype="multipart/form-data">
        <h2>Edit the projects</h2>
        <input type="text" name="id" value='<?php echo $data['id']?>'><br>
        <input type="text" name="name" value='<?php echo $data['name']?>'><br>
        <input type="text" name="price" value='<?php echo $data['price']?>'><br>
        <input type="file" id="file" name="image">
        <label for="file">Update image</label>
        <button name="updata" type="submit">Edit the product</button><br><br>
        <a href="products.php">View all products</a>
    </form>        
        </div>
        <p>Developer By hezha and fryad</p>
    </center>

</body>

</html>