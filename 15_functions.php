<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functions</title>
</head>
<body>
    <?php
    function happy_birthday($first_name, $age){
        echo "Happy Birthday Dear {$first_name}.!<br>";
        echo "Happy Birthday to you.!<br>";
        echo "Happy Birthday Dear {$first_name}.!<br>";
        echo "you are {$age} years old.!<br><br>";
    } 
    happy_birthday("Zakir", "18");
    happy_birthday("Tarif", "19");
    happy_birthday("Armaan", "20");
    ?>
</body>
</html>