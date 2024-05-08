<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check Box</title>
</head>
<body>
    <form action="14_checkbox.php" method="post">
        <input type="checkbox" name="pizza" value="pizza">Pizza<br>
        <input type="checkbox" name="Hamburger" value="Hamburger">Hamburger<br>
        <input type="checkbox" name="Hotdog" value="Hotdog">Hotdog<br>
        <input type="checkbox" name="Taco" value="Taco">Taco<br>
        <input type="submit" name="submit">
    </form>
    <?php
    if(isset($_POST["submit"])){
        if(isset($_POST["pizza"])){
            echo "You Like..! Pizza<br>";
        }
        if(isset($_POST["Hamburger"])){
            echo "You Like..! Hamburger<br>";
        }
        if(isset($_POST["Hotdog"])){
            echo "You Like..! Hotdog<br>";
        }
        if(isset($_POST["Taco"])){
            echo "You Like..! Taco<br>";
        }
        if(empty($_POST["pizza"])){
            echo "You You don't Like Pizza<br>";
        }
        if(empty($_POST["Hamburger"])){
            echo "You You don't Like Hamburger<br>";
        }
        if(empty($_POST["Hotdog"])){
            echo "You You don't Like Hotdog<br>";
        }
        if(empty($_POST["Taco"])){
            echo "You You don't Like Taco<br>";
        }
    }
    ?>
</body>
</html>