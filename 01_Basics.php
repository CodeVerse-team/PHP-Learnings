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
    This is my first website in PHP <br>
    <?php
        // this is Single line comment
    // This 
    // is
    // a 
    // multiline
    // comment 
    define('Author', 30.12);
    echo "Hello World this is Printed Using PHP";
    echo "<br>";
    echo "variable1 = ";
    $variable1 = 20;    
    echo $variable1;
    echo "<br>";
    echo "variable2 = ";
    $variable2 = 30;
    echo $variable2;
    echo "<br>";
    ECHO "The addition of varable1 and variable2 is = ";
    Echo $variable1 + $variable2;
    echo "<br>";
    ?>
    <?php
    echo "Hello world again";
    echo "<br>";
    echo "<br>";
    // Operators in PHP
    // Arithmetic Operators
    echo "The Value of Variable1 + Variable2 is ";
    echo $variable1 + $variable2;
    echo "<br>";
    echo "The Value of Variable1 - Variable2 is ";
    echo $variable1 - $variable2;
    echo "<br>";
    echo "The Value of Variable1 * Variable2 is ";
    echo $variable1 * $variable2;
    echo "<br>";
    echo "The Value of Variable1 / Variable2 is ";
    echo $variable1 / $variable2;    
    echo "<br>";
    echo "<br>";
    // Assignment Operators
    $newVar = $variable2;
    // $newVar += 30;
    // $newVar -= 10;
    // $newVar *= 5;
    // $newVar /= 2;
    echo "The Value of New Variable is ";
    echo "$newVar";
    echo "<br>";
    // Comparison Operators
    echo "The Value of 1==4 is ";
    echo var_dump(1==4);
    echo "<br>";

    echo "The Value of 1!=4 is ";
    echo var_dump(1!=4);
    echo "<br>";

    echo "The Value of 1>=4 is ";
    echo var_dump(1>=4);
    echo "<br>";

    echo "The Value of 1<=4 is ";
    echo var_dump(1<=4);
    echo "<br>";
    // Increment/Decremant Operators
    // echo $variable1++;
    // echo $variable1--;
    // echo ++$variable1;
    echo --$variable1;
    echo "<br>";
    echo $variable1;
    // Logical Operators
    // and (&&)
    // or (||)
    // xor
    // !
    echo "<br>";
    // // $myVar = (False) and (true);
    // $myVar = (true and false);
    // $myVar = (false and false);
    $myVar = (true and true);
    echo var_dump($myVar); 
    // Same Applicable for all the gtaes in boolean
    ?>
    <?php
    // Data Types in PHP
    // 1. String
    // 2. Float
    // 3. Integer
    // 4. Boolean
    // 5. Array
    // 6. Object
    echo "<br> Data Types:- <br>";
    $var = "This is a string";
    echo var_dump($var);
    echo "<br>";

    $var = 45;
    echo var_dump($var);
    echo "<br>";

    $var = 45.5;
    echo var_dump($var);
    echo "<br>";

    $var = True;
    echo var_dump($var);
    echo "<br>";
    echo Author;
    
    ?>
</div>
</body>
</html>











