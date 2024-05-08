<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Radio buttons</title>
</head>
<body>
    <form action="13_radiobtns.php" method="post">
        <input type="radio" value="Visa" name="credit_card">Visa<br>
        <input type="radio" value="Master Card" name="credit_card">Master Card<br>
        <input type="radio" value="American Express" name="credit_card">American Express<br>
        <input type="submit" value="confirm" name="confirm">
    </form>
    <?php

    if(isset($_POST["confirm"])){

        $credit_card = null;

        if(isset($_POST["credit_card"])){
           $credit_card == $_POST["credit_card"];
        }

        if($credit_card == "Visa"){
            echo "You Selected Visa";
        }

        elseif($credit_card == "Master Card"){
            echo "You Selected Master card";
        }

        elseif($credit_card == "American Express"){
            echo "You Selected American Express";
        }

        else echo "Please make a Selection";
    }
    ?>

</body>
</html>