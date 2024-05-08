<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strings</title>
<link rel="stylesheet" href="index.css">
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
    $str = "This is a string";
    echo "$str";
    echo "<br>";
    $len = strlen($str);
    echo "The length of the string is " . $len ;
    echo "<br>The Number of the words in ths string is " . str_word_count($str);
    echo "<br>The reversed String is " . strrev($str) ;
    echo "<br>The Position of 'a' is  " . strpos($str, "a");
    echo "<br>The Replaced word of is is  " . str_replace("is", "at", $str ) . "<br> Thank you to visit";
    // echo $len
?>
</div>
</body>
</html>