
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="Objects.php" method="post">
        <label>enter a country</label> 
       <input type="text" name="country">
       <input type="submit" value="enter">
    </form>
    
</body>
</html>
<?php
$capitals = array("USA"=>"Washington",
"JAPAN"=>"kyoto",
"INDIA"=>"new delhi",
"TUNISIA"=>"tunis");

$capital = $capitals[$_POST["country"]];
echo $capital

// echo $capitals["USA"]

// $capitals["USA"]="las vegas";
// $capitals["china"]="bejin";
// array_pop($capitals);
// array_shift($capitals);
// $keys= array_keys($capitals);
// $values=array_values($capitals);
// foreach($capitals as $key=>$value){
// echo "{$key} = {$value} <br>" ;
// }
?>