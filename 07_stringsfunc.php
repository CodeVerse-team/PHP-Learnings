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
</ul>
    <?php
    $name = "Zakir";
    $character = "Zakir is a Good Boy";
    echo "$name <br>";
    echo "Length of the Name:- ". strlen($name) . "<br>";
    echo "The Word Count of this is:- ". str_word_count($name). ".<br>";
    echo "The position of 'i' is in the " . strpos($character, "i"). "th Place <br>";
    echo "The Replaced of the 'Zakir' is " . str_replace("Zakir", "Hussain", $name);
    echo ".<br>";
    echo ".<br>";
    echo ".<br>";
    echo "$character <br>";
    echo "Length of the Name:- ". strlen($character) . "<br>";
    echo "The Word Count of this is:- ". str_word_count($character). "<br>";
    echo "The position of 'Good' is in the " . strpos($character, "Good"). "th Place<br>";
    echo "The Replaced of the 'Good' is " . str_replace("Good", "Bad", $character);
    echo ".<br>";
    echo ".<br>";
    echo ".<br>";
    echo "Reversed of the the Name and his Character is:- "."<br>" . strrev($name)  . "<br>" . strrev($character);
    echo str_repeat($name, 30). "<br>";
    echo "<pre>";
    echo rtrim("   My name is Zakir   "). "<br>";
    echo ltrim("   My name is Zakir   ");
    echo "</pre>";
?>
</div>


<script src="index.js"></script>
</body>
</html>