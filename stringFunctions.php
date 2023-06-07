<?php

$username=" bro code";

$username = strtolower($username);
$username = strtoupper($username);
$username = trim($username);
$username = str_pad($username,20,0);
$username = str_replace("b","a",$username);
$username = strrev($username);
$username = substr($username,0,5);


echo $username;
?>