<?php

$host= $_SERVER['HTTP_HOST'];

if($_SERVER['HTTP_HOST']=='localhost')
{
  $user='root';
  $password='';

}
else
{
  $user='stockeaic_stockeaiadmin';
  $password='Dk8,hu0=x';
}
$con = mysqli_connect($_SERVER['HTTP_HOST'],$user,$password,'stockeaic_test');

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();

}


?>