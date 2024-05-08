<?php
    $db_server = "localhost";
    $db_user = "root";
    $db_pass = "";
    $db_name = "businessdb";
    $conn = "";

    try{
        $conn = mysqli_connect($db_server, $db_user, $db_pass, $db_name);
    }
    catch(mysqli_sql_exception){
        echo "Could not Connect!<br>";
    }
    if($conn){
        echo "You are connected !<br>";
    }

    $username = "Armaan";
    $password = "Tarif";
    $hash = password_hash($password, PASSWORD_DEFAULT);
    $sql = "INSERT INTO users (user, password) VALUES ('$username', '$hash')";
    
    try{
        mysqli_query($conn, $sql);
        echo "User is now registered";
    }
    catch(mysqli_sql_exception){
        echo "Could not register User";
    }
?>