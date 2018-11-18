<?php   
session_start(); //to ensure you are using same session
$a=session_destroy(); //destroy the session
if ($a){
header('location:index.html'); 
}//to redirect back to "index.php" after logging out
session_unset();
?>