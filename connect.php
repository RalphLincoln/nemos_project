<?php
    $email = $_POST['email'];

    // DATABASE CONNECTION
    $conn = new mysqli('localhost', 'root', '', 'newsletter');
    if ($conn->connect_error){
        die('Connection failed : '.$conn->connect_error);
    }else{
        // $stmt = $conn->prepare("insert into registration(email)
        // values(?)")
        // $stmt->bind_param("s", $email);
    }
