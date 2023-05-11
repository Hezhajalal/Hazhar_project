<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shope online</title>
</head>
<body>
    <link rel="stylesheet" href="beatiful.css">
<?php
// require(insert.php)
?> 
    <center>

        <div class="main">
    <form action="insert.php" method="post" enctype="multipart/form-data">
        <h2>Online marketing site</h2>
        <img src="pacture.png" alt="Logo" width="450px">
        <input type="text" name="name"><br>
        <input type="text" name="price"><br>
        <input type="file" id="file" name="image">
        <label for="file">Upload image</label>
        <button name="upload">Upload the product</button><br><br>
        <a href="first.php">View all products</a>
    </form>        
        </div>
        <p>Developer By hezha and fryad</p>
    </center>

</body>

</html>