            <?php
                 $showalert = false;
                 $showErr = false;
             
                 if ($_SERVER['REQUEST_METHOD'] == 'POST'){
                     $uname = $_POST['uname'];
                     $userpas = $_POST['paswd'];
                     $cpas = $_POST['cpaswd'];
                     require "additionals/_dbconnect.php";

                     $existSql = "select * from `register-user`where uname = '$uname'";
                     $result = mysqli_query($conn, $existSql);
                     $numrow = mysqli_num_rows($result);
                     if ($numrow>0){
                      echo 'User Already Exist';
                      header("Location: /code_solution/");
                     }
                     else{
                      if($userpas==$cpas){
                         $hash = password_hash($userpas, PASSWORD_DEFAULT);
                         $cre =  "INSERT INTO `register-user` ( `uname`, `userpas`, `reg-date`) 
                         VALUES ( '$uname', '$hash', current_timestamp());";
         
                         $result = mysqli_query($conn, $cre);
                                             
                         if($result){
                           $showalert = true;
                           header ("Location: /code_solutions/?signupsuccess=true");
                           exit();
                         }
                        else{
                           echo ' pasword did not match ';
                           header ("Location: /code_solutions/additionals/_registerModal.php?signuperror=false");
                           
                       }
                    }
                    header ("Location: /code_solutions/?signuperror=false");
                   }
              }
        ?>