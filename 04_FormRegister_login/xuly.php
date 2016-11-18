<?php 
	include('ketnoi.php');
	header('Content-Type: text/html; charset=UTF-8');
	$name = $_POST['name'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	 if (!$name || !$email || !$password)
    {
        echo "Vui lòng nhập đầy đủ thông tin. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }
    $password = md5($password);
    if (mysql_num_rows(mysql_query("SELECT name FROM register WHERE name='$name'")) > 0){
        echo "Tên đăng nhập này đã có người dùng. Vui lòng chọn tên đăng nhập khác. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }
    //Kiểm tra email đã có người dùng chưa
    if (mysql_num_rows(mysql_query("SELECT email FROM register WHERE email='$email'")) >0 ){
        echo "Email này đã có người dùng. Vui lòng chọn Email khác. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }
    @$addmember = mysql_query("
        INSERT INTO register (
            name,
            email,
            password
        )
        VALUE (
            '{$name}',
            '{$email}',
            '{$password}'
        );
    "); 
     if ($addmember){
     	$URL = "login.php";
    	header ("Location: $URL");
     }
    else{
    	 $URL = "register.html";
    	header ("Location: $URL");
    }
            mysql_close();
?>