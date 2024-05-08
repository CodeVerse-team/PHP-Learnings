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
    <?php
    echo "<h2 Align = 'center'>Welcome to PHP tutorial on Functions.!</h2>";
    function MarksObt($marksArr){
        $sum = 0;
        foreach ($marksArr as $value) {
            $sum += $value;
        }
        return $sum;
    }
    function AvgMarksObt($marksArr){
        $sum = 0;
        $i = 1;
        foreach ($marksArr as $value) {
            $sum += $value;
            $i++;
        }
        return $sum/$i;
    }
    
    $zakirDas = [23,34,64,78,43,86,94];
    // $sumMarks = MarksObt($zakirDas);
    $sumMarks = AvgMarksObt($zakirDas);

    $tarif = [99,98,97,96,95,94,100,23];
    // $sumMarksTarif = MarksObt($tarif);
    $sumMarksTarif = AvgMarksObt($tarif);
    echo "Total marks scored by ZakirDas out of 600 is $sumMarks" . "<br>";
    echo "Total marks scored by Tarif out of 600 is $sumMarksTarif";
    
    ?>

</div>


<script src="index.js"></script>
</body>
</html>