<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
  <form action="issetIsempty.php" method="post">

 <label>user name:</label>
 <input type="text" name="username">
 <label>password</label>
 <input type="password" name="password">
 <input type="submit" name="login" value="log in">
  </form>
</body>
</html>
<?php

foreach($_POST as $key=>$value){
    echo "{$key} = {$value}<br>";
}

if(isset($_POST["login"])){
    $username = $_POST["username"];
    $password = $_POST["password"];

     if(empty($username)){
        echo "username is required";
     }

    elseif(empty($password)){
        echo "password is missing";
    }

     else {
        echo "username is not required";
     }
}





///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//isset()= return true if a variable is declared and not null
//epmty()= return true if a variable is not declared ,false,null,""
//  $name="null";

// if(isset($name)){
//     echo "this var is declared or setted";
// }
// else{
//     echo "nahh";
// }
// if(empty($name)){
//     echo "this var is empty ";
// }
// else{
//     echo "is not z";
// }
?>