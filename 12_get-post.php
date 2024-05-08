<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WebOs</title>
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
        <form action="12_get-post.php" method="post">
         <label>Quantity: </label><br>
         <input type="text" name="quantity">   
         <input type="submit" name="total">   
    </form>
</div>
    <?php
    $item = "pizza";
    $price = 5.5;
    $quantity = $_POST["quantity"];
    
    $total = $quantity * $price;

    echo "You Have Ordered {$quantity} x {$item}'s <br>";
    echo "Your total Prce is \${$total}";
    ?>
</div>
</body>
</html>











