<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
        <title>INDEX</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head>
    <body>
       <?php 
       if (isset($_SESSION['email']) && $_SESSION['email']){
           echo 'Bạn đã đăng nhập với tên là '.$_SESSION['email']."<br/>";
           echo 'Click vào đây để <a href="logout.php">Logout</a>';
       }
       else{

          //  <a href="login.php">Login</a>
           echo 'Bạn chưa đăng nhập. <a href="login.html">Login</a>';
       }
       ?>
       <a href="DBtablePHP.php">Database Table</a>
        <a href="time.php">Time</a>
        <a href="sendmail.php">Send mail</a>
        <a href="mangint.php">Mang So Nguyen</a>
    </body>
</html>