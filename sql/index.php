<?php
 $db_server = "localhost";
 $db_user ="root";
 $db_pass = "";
 $db_name = "iyed";
 $conn = "";


$conn = mysqli_connect($db_server
                      ,$db_user,
                       $db_name,
                       $db_pass) ;

       if($conn){
        echo "you are connected";
       }      
       else{
        echo "no";
       }          
?>