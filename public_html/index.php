<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        include("../config.php");
       // session_start();
        $myusername = $_POST['adm_id'];
        $mypassword = $_POST['adm_pwd'];
        $sql = "SELECT * FROM admlog WHERE adm_id = '".$myusername."' and adm_pwd = '".$mypassword."'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        //$active = $row['active'];
        $count = mysqli_num_rows($result);
        if($count == 1) {
        //session_register("myusername");
        //$_SESSION['login_user'] = $myusername;

        header("Location: http://localhost/ex/public_html/main.html");
        
        }else {
        $error = "Your Login Name or Password is invalid";
        echo $error ;
        }
        //}
        ?>
        </body>
        </html>
