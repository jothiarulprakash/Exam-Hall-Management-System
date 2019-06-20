<?php
     $db = new PDO('mysql:host=localhost;dbname=eshai','root','');
        $query = $db->query("SELECT * FROM data where status = 1");
        $info = $query->fetchall(PDO::FETCH_ASSOC);
        foreach($info as $i){            
        echo "<span style = 'font-size:24px;'>" .$i['first_name'] . " alloted to" . $i['lab'] . "<br>";       
        }
    ?>