<?php
// function happy(){
//     echo "happy";
// }
// happy();

// function is_even($number){
//     if ($number %2 ==0){
// echo "{$number} is even";
//     }
//     else{
//         echo 'nah';
//     }
// }
// is_even(4);

function hypotenuse( $a,$b){
    $c = sqrt($a*$a + $b*$b);
    return $c;
}

echo  hypotenuse( 4,5)
?>