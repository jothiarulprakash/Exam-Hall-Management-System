<?php
    $db = new PDO('mysql:host=localhost;dbname=eshai','root','');
     
    if (isset($_POST['input'])) 
    {
        $data = $_POST['input']; 
    }
    foreach($data as $d){
        $query = $db->query("SELECT lab FROM data where status = 1");
        $info = $query->fetchall(PDO::FETCH_ASSOC);
        while($row = array_shift($info)){
            foreach($row as $i){
                if($d == $i){
                   echo "<script language='javascript'>;
                   alert('Hall already in use');
                   window.location.href='c1.php';
                    </script>";
                    exit(0);
                }
            }
        }
    }
    $query = $db->query("SELECT * FROM data where status = 0");
    $info = $query->fetch(PDO::FETCH_ASSOC);
    if(empty($info)){
        echo "<script language='javascript'>;
                   alert('No Staff');
                   window.location.href='c1.php';
                    </script>";
                    exit(0);
    }
    else{
        foreach($data as $d){
            $query = $db->query("SELECT * FROM data where status = 0");
            $info = $query->fetch(PDO::FETCH_ASSOC);
            if($info['status'] == 0){
                $id = $info['id'];
                $query = $db->query("UPDATE data set lab = '$d',status = 1 WHERE id = '$id'");
            }
        }
    }
    header('Location: c1.php');
?>