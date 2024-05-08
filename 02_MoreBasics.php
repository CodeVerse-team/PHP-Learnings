<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Tutorial</title>
    <link rel="stylesheet" href="index.css">
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
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
        <h1>Let's Learn About PHP</h1>
        <p>Your party Status is here:</p>
        <?php
        $age = 10;
        if($age>18){
            echo "You can go to the party";
        }
        else if($age==10){
            echo "Your are just 10 years OLD"; 
        }
        else if($age==15){
            echo "Your are just 15 years OLD"; 
        }
        else{
            echo "You can not go to the party";
        }
        // Array in php
        $languages = array("Python", "C++", "PHP", "Nodejs");
        // echo ("<br>");
        // echo count($languages);
        // echo ($languages[1]);

        // LOOPS in PHP
        $a = 0;
        while ($a <= 10) {
            echo "<br>The value of a is:";
            echo $a;
            $a++;
        }

        // Iterating arrays in PHP Using While LOOPS
        $a = 0;
        while ($a < count($languages)) {
            echo "<br>The value of languages is: ";
            echo $languages[$a];
            $a++;
        }
        
        // Do While LOOPS
        $a = 0;
        do { 
        echo "<br>The value of a is: ";
        echo $a;
        $a++;
    } while ($a < 11);
    
        // For LOOPS
        for ($a=0; $a <= 10 ; $a++) { 
            echo "<br> The value of a from the for loop is: ";
            echo $a;
        }
        foreach ($languages as $value) {
            echo "<br> The Value of a from foreach is ";
            echo "$value";
        }
        function print5(){
            echo "<br> FIVE";
        }
        print5();
        print5();
        print5();

        function print_number($number){
            echo "<br> Your Number is ";
            echo $number;
        }
        print_number(10);
        print_number(20);
        print_number(30);
        ?>
    </div>
</body>
</html>