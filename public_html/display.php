<html>
    <head>
    </head>
    <body style="text-align:center" bgcolor = "#1ABC9C">
        <div style="position:relative;top:300px;border:1px solid;padding:20px;color:white;">
        <?php
        $db = new PDO('mysql:host=localhost;dbname=eshai','root','');
        $query = $db->query("SELECT * FROM data where status = 1");
        $info = $query->fetchall(PDO::FETCH_ASSOC);
        foreach($info as $i){
        echo "<span style = 'font-size:24px'>" .$i['first_name'] . " alloted to" . $i['lab'] . "<br>";
        }
    ?>
        </div>
    </body>
</html>