<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="get-post.php" method="post">
    <label>user name</label><br>
    <input type="text" name="username">
    <label>password</label><br>
    <input type="password" name="password"><br>
    <input type="submit" value="submit">    
    </form>
</body>
</html>
<?php
// echo "{$_POST["username"]} <br>"; 
// echo "{$_POST["password"]}<br>"
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="get-post.php" method="get">
    <label>user name</label><br>
    <input type="text" name="username">
    <label>password</label><br>
    <input type="password" name="password"><br>
    <input type="submit" value="submit">    
    </form>
</body>
</html>
<?php
// echo "{$_GET["username"]} <br>"; 
// echo "{$_GET["password"]}<br>"
?> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="get-post.php" method="post">
<label>quantity</label>
<input type="number" name="quantity">
<input type="submit" value="total">

    </form>
</body>
</html>
<?php

$item= "pizza";
$price = 5;
$quantity =$_POST["quantity"];
$total=null ;

$total =$price * $quantity;
echo "your ordered {$quantity} {$item}/s <br>           ";
echo "total : {$total}";
?>