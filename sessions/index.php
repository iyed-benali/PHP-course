 <?php
session_start();
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 </head>
 <body>
   <form action="index.php" method="post">
    <label>user name</label>
   <input type="text" name="username">
   <input type="password" name="password">
   <input type="submit" name="login" value="login">
   </form>
 </body>
 </html>
 

 <?php
if(isset($_POST["login"])){
    $_SESSION["username"]= $_POST["username"];
    $_SESSION["password"]= $_POST["password"];
    if(!empty($_POST["username"]) && !empty($_POST["username"])){
         $_SESSION["username"]= $_POST["username"];
         $_SESSION["password"]=$_POST["password"];

         echo  $_SESSION["username"];
         echo  $_SESSION["password"];
         header("Location: home.php");
    }
    else{
         echo "missing username / password ";
    }
}
 ?>