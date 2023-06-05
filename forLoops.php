<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="forLoops.php" method="post">
<label>enter a number</label>
<input type="number" name="num" id="num">
<input type="submit" value="start">
    </form>
    <form action="forLoops.php" method="post">
<label>enter a number to countdonw</label>
<input type="number" name="counter" id="num">
<input type="submit" value="start">
    </form>
</body>
</html>


<?php
// for($i=0;$i<5;$i++){
//     echo "{$i} <br>";
// }

$counter=$_POST["num"];
for($i=0;$i<$counter;$i++){
echo $i ."<br>";
}

$countdown=$_POST["counter"];
for($i=$countdown;$i>0;$i--){
    echo $i . "<br>";
}

?>
