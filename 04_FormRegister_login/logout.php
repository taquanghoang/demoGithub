<?php session_start(); 
 
if (isset($_SESSION['email'])){
    unset($_SESSION['email']); 
    $URL = "index.php";
    	header ("Location: $URL");
    // xóa session login
}
?>