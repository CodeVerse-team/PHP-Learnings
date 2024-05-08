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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
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
        <a href="Index.php"><img src="Codeverse" alt="Codeverse"></a>
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
    <h1 Align="center">Welcome to file handling in php</h1>
    <?php

    $fptr = fopen("file.txt","r");
    // echo fgets($fptr);
    // echo var_dump(fgets($fptr));
    
    // Reading a file line by line
    // while($a = fgets($fptr)){
    // echo $a;
    // }
    // echo "<br>!.End of the file has been reached.!";

    /*
    echo fgets($fptr);
    // Reading a file character by character
    while($a = fgetc($fptr)){
        echo $a;
        break;
        }
        echo "<br>!.End of the file has been reached.!";
    */

   // Write a progream which reads the content of the file untill it encountered 7 ___.
   while($a = fgetc($fptr)){
    echo $a;
    if ($a == "7"){
        break;
    }
    // echo "<br>!.End of the file has been reached the letter 7.!";
}
fclose($fptr);
    ?>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="index.js"></script>
</body>
</html>