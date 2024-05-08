<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Types</title>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">
    <link rel="stylesheet" href="normalize.css">
    <style>
.container{
    color: black;
    text-align: left;
    margin: 5px;
    padding: 10px;
    border-radius: 10px;
    font-size: 20px;
    height: auto;
    background-color: white;
        }
    </style>
</head>
<body>
<nav class="navbar">
    <div class="logo">
        <a href="Index.php"><img src="Codevere Logo1.png" alt="Logo"></a>
    </div>
    <ul class="nav-links">
        <li><a href="#">Projects</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Contact</a></li>
    </ul>
    <div class="user-actions">
        <a href="Loginform.php" class="button">Register</a>
        <a href="Loginform.php" class="button">Login</a>
    </div>
</nav>
<div class="container">
    <?php
    echo "<h2 Align = 'center'>Welcome to Associative arrays in PHP.!</h2>";
    
    #Example of arrays
    $arr = array('this', 'that', 'what');
    echo $arr[0]. "<br>";
    echo $arr[1]. "<br>";
    echo $arr[2]. "<br>";

    #Associative array
    $facColor = array('Zakir' => 'red', 'Armaan' => 'green', 'Umar' => 'yellow', 'tarif' => 'brown');
    // echo $facColor['zakir1'] . "<br>";
    // echo $facColor['zakir2'] . "<br>";
    // echo $facColor['zakir3'] . "<br>";
    
    foreach ($facColor as $key => $value) {
        echo "<br>Favorite color of $key is $value";
    }
    ?>
</div>


<script src="index.js"></script>
</body>
</html>