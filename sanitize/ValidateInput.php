<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="ValidateInput.php" method="post">
        <label>user name</label>
        <input type="text" name="username">
        <label>age</label>
        <input type="text" name="age">
        <label>email</label>
        <input type="text" name="email">
        <input type="submit" name="login" value="login">
    </form>
</body>
</html>

<?php
// if(isset($_POST["login"])){
//     $username=filter_input(INPUT_POST,"username",FILTER_SANITIZE_SPECIAL_CHARS);

//     $email=filter_input(INPUT_POST,"email",FILTER_SANITIZE_EMAIL);

//     $age=filter_input(INPUT_POST,"age",FILTER_SANITIZE_NUMBER_INT);
//     echo $username;
//     echo $age;
//     echo $email;  
// }

if(isset($_POST["login"])){
    $age = filter_input(INPUT_POST,"age",FILTER_VALIDATE_INT);
    if(empty($age)){
        echo "that number is unvalid";
    }
    else{
        echo "you are is valid ";
    }
    $email = filter_input(INPUT_POST,"email",FILTER_VALIDATE_EMAIL) ;
    if(empty($email)){
        echo "nah wrong email";
    }
    else{
        echo "nice";
    }
}

?>