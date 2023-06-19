<?php
$password = "ahmed";

$hash = password_hash($password,PASSWORD_DEFAULT);

echo $hash;


if((password_verify("hamburger",$hash))){
    echo "nice ";
}
else{
 echo "nahh";
}
?>