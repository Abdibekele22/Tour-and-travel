<?php
 session_start();
try{

$conn =mysqli_connect('localhost','root','','login') or die('Unable to connect');
}catch(Exception $e){
  echo "Message".$e->getMessage();
}
?>