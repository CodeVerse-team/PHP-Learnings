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
    echo "<h1 Align='center'>Operators in PHP</h1>". "<hr>";
?>
    <ul>
        <li>1) Arithmetic Operators</li>
        <li>2) Assignment Operators</li>
        <li>3) Comparision Operators</li>
        <li>4) Logical Operators</li>
    </ul>
    <?php
    $a = 30;
    $b = 20;
    
    // 1) Arithmetic Operators
    echo "A = 30<br>B = 20<br>";
    echo "For A + B, The Result is " . $a + $b . "<br>";
    echo "For A - B, The Result is " . $a - $b . "<br>";
    echo "For A * B, The Result is " . $a * $b . "<br>";
    echo "For A / B, The Result is " . $a / $b . "<br>";
    echo "For A % B, The Result is " . $a % $b . "<br>";
    echo "For A ** B, The Result is " . $a ** $b . "<br>";

    // 2) Arithmetic Operators
    // $x = $a;
    // echo "For X, The Value is " . $x . "<br>";
    $a += 10;
    echo "For a, the value is " . $a . "<br>";
    $a -= 10;
    echo "For a, the value is " . $a . "<br>";
    $a *= 10;
    echo "For a, the value is " . $a . "<br>";
    $a /= 10;
    echo "For a, the value is " . $a . "<br>";
 
// 2. Assignment Operators
// $x = $a;
// echo "For x, the value is ". $x . "<br>";

// $a += 6;
// echo "For a, the value is ". $a . "<br>";

// $a -= 6;
// echo "For a, the value is ". $a . "<br>";

// $a *= 6;
// echo "For a, the value is ". $a . "<br>";

// $a /= 5;
// echo "For a, the value is ". $a . "<br>";

// $a %= 5; // $a = $a % 5
// echo "For a, the value is ". $a . "<br>";


// 3. Comparison Operators 
$x = 78;
$y = 78;

// echo "For x > y, the result is ";
// echo var_dump($x > $y);

// echo "For x > y, the result is ";
// echo var_dump($x >= $y);

// echo "For x < y, the result is ";
// echo var_dump($x < $y);

// echo "For x < y, the result is ";
// echo var_dump($x <= $y);

echo "For x <> y, the result is "; 
echo var_dump($x <> $y);
echo "<br>";


// 4. Logical Operators

$m = true;
$n = true;

echo "For m and n, the result is "; 
echo var_dump($m and $n);
echo "<br>";

echo "For m && n, the result is "; 
echo var_dump($m && $n);
echo "<br>";

echo "For m or n, the result is "; 
echo var_dump($m or $n);
echo "<br>";

echo "For m || n, the result is "; 
echo var_dump($m || $n);
echo "<br>";

echo "For !m , the result is "; 
echo var_dump(!$m);
echo "<br>";
    ?>
</div>


<script src="index.js"></script>
</body>
</html>