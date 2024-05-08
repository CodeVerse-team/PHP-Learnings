<?php
$insert = false;
if(isset($_POST['name'])){
    // Connection Variables 
    $server = "localhost";
    $username = "root";
    $password = "";

    // Create a database connection  
    $con = mysqli_connect($server, $username, $password);

    // Check for Connection success 
    if(!$con){
        die("connection to this database failed due to". mysqli_connect_error());
    }
    // echo "Your Data has been Succesfully Submitted to the DataBase";
    // Collect post variables 
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $desc = $_POST['desc'];
    $sql = "INSERT INTO `code`.`verse` (`name`, `age`, `gender`, `email`, `phone`, `other`, `dt`) VALUES ('$name', '$age', '$gender', '$email', '$phone', '$desc', current_timestamp());";

    // echo $sql;
    // Execute the Query 
    if($con->query($sql) == true){
        // echo "Successfully Inserted";
        $insert = true;
        // Flag for Successful insertion 
    }
    else{
        echo "ERROR: $sql <br> $con->error";
    }
    // Close the database connection 
    $con->close();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Login Form</title>
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="index.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
</head>
<body>
<nav class="navbar">
    <div class="logo">
        <a href="http://localhost/P-files/PHP Learning/Index.php"><img src="Codevere Logo1.png" alt="Logo"></a>    
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
        <h1>Welcome to CodeVerse Student Registration Form</h1>
        <p>Enter Your Details and Submit this form to take Addmission in the Course.</p>
        <?php
    if($insert == true){
        echo "<p class='submitmsg'>Thanks for Submiting your Details. In Couple of days you will get a E-mail to join us.</p>";}
        ?>
    <form action="Loginform.php" method="post">
        <input type="text" name="name" id="name" placeholder="Enter Your Name: ">
        <input type="text" name="age" id="age" placeholder="Enter Your Age: ">
        <input type="text" name="gender" id="gender" placeholder="Enter Your Gender: ">
        <input type="email" name="email" id="email" placeholder="Enter Your email: ">
        <input type="phone" name="phone" id="phone" placeholder="Enter Your Phone No.: ">    
        <textarea name="desc" id="desc" cols="30" rows="10" placeholder="Enter Any other info here: "></textarea>
        <button class="btn">Submit</button>
    </form>
    </div>
    <script src="login.js"></script>
</body>
</html>
