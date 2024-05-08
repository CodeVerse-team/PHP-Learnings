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
<h2 Align="center">#6 Data Types in PHP</h2><hr><br>
    <h3>PHP Various Data Types.</h3>
    <ul style="text-decoration: none;">
        <li>1) String</li>
        <li>2) Integer</li>
        <li>3) Float</li>
        <li>4) Boolean</li>
        <li>5) Object</li>
        <li>6) Arrays</li>
        <li>7) NULL</li>
</ul>
    <?php
    echo "<h5>1) String - Sequence of Character</h5>";
    $name = "Zakir";
    $friend = "Umar";
    echo "$name ka Friend $friend Hai"; 

    echo "<h5>2) Integer - Non Decimal Number</h5>";
    $income = 455;
    $debts = -655;
    echo $income;
    echo "<br>";
    echo $debts;

    echo "<h5>3) Float - Decimal Point Number</h5>";
    $income = 45.5;
    $debts = -655.2;
    echo $income;
    echo "<br>";
    echo $debts;
    echo "<br>";

    echo "<h5>4) Boolean - Can be either True or False</h5>";
    $x = true;
    $is_friend = false;
    echo var_dump($x);
    echo "<br>";
    echo var_dump($is_friend);
    echo "<br>";

    echo "<h5>5) Object - Instances of Classes</h5>";
    echo "<h5>Employee is a class --> Zakir can be one Object</h5>";    
    echo "<h5>6) Array - Used  to Store  Multiple  Values  in a single variable</h5>";
    $friends = array("Zakir", "Armaan", "Tarif", "Umar");
    echo var_dump($friends);
    echo "$friends[0]<br>";
    echo "$friends[1]<br>";
    echo "$friends[2]<br>";
    echo "$friends[3]<br>";
    echo "<h5>NULL in PHP</h5>";
    $name = NULL;
    echo var_dump($name)
    ?>
</div>


<script src="index.js"></script>
</body>
</html>