<?php 
    $servername="localhost";
    $username="root";
    $password="";
    $dbname="game";

    $connect=new mysqli($servername,$username,$password,$dbname);   

    if ($connect) {
        $query = "SELECT * FROM playerchoice";
        $firequery=$connect->query($query);

    } else {
        echo"Failed to connect with database";
    }
    
?>