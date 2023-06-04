<?php
// $age = 0;
// if($age>=18){
//     echo "you may enter this site";
// }
// elseif( $age == 0){
//     echo "you are minor";
// }

// else{
//     echo "you are not allowed to enter this site";
// }
// $adult=true;
// if($adult){
//     echo "you are adult";
// }

$hour=60;
$rate=15;
$weekly_pay=null;


if($hour<=0){
    $weekly_pay=0;
}
elseif($hour>=40){
    $weekly_pay=$hour * $rate;
}
else{
    $weekly_pay = ($rate * 40) +(($hour - 40)*($rate * 1.5));
}
echo "you made {$weekly_pay} this week"

?>