<?php   
session_start();  
if(!isset($_SESSION["sess_user"])){  
    header("location:register.php");  
} else {  
?>  