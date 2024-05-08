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
    echo "<h2 Align = 'center'>Welcome to Multi-Dimentional arrays in PHP.!</h2><br>";
    // Creating an 2 dimentional arrays
    $multiDim = array (
        array(2,6,8,4),
        array(1,2,3,4),
        array(5,6,7,8)
    );
    // echo var_dump($multiDim);
    // echo $multiDim[1][3];

    // Printing the contents of a 2 dimensional array
    
    // for ($i=0; $i < count($multiDim) ; $i++) { 
    //     echo var_dump($multiDim[$i]);
    //     echo "<br>";
    // }

    for ($i=0; $i < count($multiDim); $i++) { 
       for ($j=0; $j < count($multiDim[$i]) ; $j++) { 
        echo $multiDim[$i][$j];
        echo " ";
       }
       echo "<br> ";
    }
    ?>
</div>


<script src="index.js"></script>
</body>
</html>