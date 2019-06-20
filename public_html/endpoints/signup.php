<?php

    include("../config.php");

    $fn = $_POST['firstname'];
    $ln = $_POST['lastname'];
    $email = $_POST['email'];
    $dep = $_POST['dep'];
    $pw = $_POST['pass'];

    $query = "INSERT INTO data (first_name,last_name,department,email,password,status) VALUES ('".$fn."','".$ln."','".$dep."','".$email."','".$pw."',0)";
    
    $result = mysqli_query($conn,$query);

    if($result){
        header("Location: http://localhost/ex/public_html/success.html");
    }else {
        echo "error da panada";
    }

?>