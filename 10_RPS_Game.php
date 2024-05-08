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
        
        h1 {
            color: #333;
        }

        .container {
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

form {
    display: flex;
    flex-direction: column;
    margin-top: 20px;
}

label {
    margin-bottom: 8px;
}

select, button {
    padding: 10px;
    margin-bottom: 10px;
}

.result-box {
    margin-top: 20px;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
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
    <h1 Align='center'>Rock, Paper, Scissors Game</h1>
    <?php
        // Add a result box to display choices and outcome
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            echo '<div class="result-box">';
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $playerChoice = $_POST["choice"];
                $choices = ["rock", "paper", "scissors"];
                $computerChoice = $choices[array_rand($choices)];
    
                echo "<p Align='center'>You chose: $playerChoice</p>";
                echo "<p Align='center'>Computer chose: $computerChoice</p>";
    
                if ($playerChoice == $computerChoice) {
                    echo "<p Align='center'>It's a tie!</p>";
                } else {
                    // Determine the winner
                    $result = "";
                    if (($playerChoice == "rock" && $computerChoice == "scissors") ||
                        ($playerChoice == "paper" && $computerChoice == "rock") ||
                        ($playerChoice == "scissors" && $computerChoice == "paper")) {
                        $result = "You win!";
                    } else {
                        $result = "Computer wins!";
                    }
                    echo "<p Align='center'>$result</p>";
                }
            }
            echo '</div>';
        }
    ?>

        <form method="post">
            <label for="choice">Choose: </label>
            <select name="choice" id="choice">
                <option value="rock">Rock</option>
                <option value="paper">Paper</option>
                <option value="scissors">Scissors</option>
            </select>
            <button type="submit">Play</button>
        </form>
<script src="index.js"></script>
</body>
</html>