<?php

if($_SERVER['REQUEST_METHOD'] ==  'POST'){
    $sub = $_POST['sub'];

    require "additionals/_dbconnect.php";
     $sql = "INSERT INTO `subsribers` (`sub_email`, `sub_date`) 
     VALUES ( '$sub', '2024-04-11 17:48:21.000000');";
}

?>