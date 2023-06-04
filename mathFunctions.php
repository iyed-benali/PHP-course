<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action='mathFunctions.php' method="get">
    <label>X:</label>
    <input type="number" name="x">
    <label>Y:</label>
    <input type="number" name="y">
    <label>Z:</label>
    <input type="number" name="z">
    <input type="submit" value="total">
    </form>
</body>
</html>

<?php 
// $x= $_GET["x"];
// $y= $_GET["y"];
// $z= $_GET["z"];
// $total=null;
// $total = abs($x);
// $total = round($x)
// $total = floor($x)
// $total = ceil($x)
// $total=pow($x,$y);
// $total = sqrt($x);
// $total=max($x,$y,$z);
// $total=min($x,$y,$z);
// $total = pi();
// $total = rand(1,6);
// echo $total;



?> -->


/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
<!-- Exercice; -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form action="mathFunctions.php" method="post">
<label>radius:</label>
<input type="text" name="radius">
<input type="submit" value="submit">
</form>
</body>
</html>
<?php

$radius=$_POST["radius"];
$mo7it=null;
$area=null;
$area = pi() * pow($radius,2);
$area=round($area,2);
$mo7it=2 * pi() * $radius;  
$mo7it=round($mo7it,2);
$volume = 4/3 * pi() * pow($radius,3);
$volume = round($volume,2);

echo "mo7it$mo7it={$mo7it}cm";
echo "<br>area={$area}cm²";
echo "<br>volume={$volume}cm3";
?>