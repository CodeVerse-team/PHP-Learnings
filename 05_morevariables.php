<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">
    <title>More Variables</title>
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
    <h2 Align="center">#5 More Variables in PHP</h2><hr><br>
    <h3>Rules for Creating Variables in PHP</h3>
    <ul>
        <li>A Variable always starts with a $ sign</li>
        <li>Cannot Start with a No. character</li>
        <li>Must Start with a letter or an underscore character</li>
        <li>Can only contain alphanumeric character and underscore</li>
        <li>Variables are Case sensitive. ($Zakir, zaKir and $ZaKir are Different)</li>
  </ul>
    <?php
    $name="Zakir";  
    echo "$name";
    ?>

</div>
<script src="index.js"></script>
</body>
</html>