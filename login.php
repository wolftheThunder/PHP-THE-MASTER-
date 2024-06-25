<?php

$loginTrue = false;
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $uname = $_POST['uname'];
    $pass = $_POST['paswd'];

    require "additionals/_dbconnect.php";

    $sql = "select * from `register-user` where uname = '$uname'";
    $result = mysqli_query($conn, $sql);
    $numRow = mysqli_num_rows($result);
    if ($numRow==1){
        $row = mysqli_fetch_assoc($result);
        if (password_verify($pass, $row['userpas'])){
            $loginTrue = true;
            session_start();            
            $_SESSION['loggin']= true;
            $_SESSION['uname'] = $uname;
            echo 'welcome : '. $uname;

            header ("Location: /code_solutions/");

        }  
        else{
            echo "pasword do not match";
        } 
        // header ("Location: /code_solutions/"); 
    
    }
    
}

?>