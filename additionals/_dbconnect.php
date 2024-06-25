<?php
    $servername = "sql307.infinityfree.com";
    $username = "if0_36646849";
    $password = "8x0V3QEKgFf";
    $database = "if0_36646849_code_solutions";

    $conn = mysqli_connect($servername, $username, $password, $database);

    if (!$conn){
        die ("Connection Failed".mysqli_connect_error());
    }


?>