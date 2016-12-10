<?php 
	$ketnoi1['host'] = 'localhost'; //Tên server, nếu dùng hosting free thì cần thay đổi
    $ketnoi1['dbname'] = 'hoang'; //Đây là tên của Database
    $ketnoi1['username'] = 'root'; //Tên sử dụng Database
    $ketnoi1['password'] = '';//Mật khẩu của tên sử dụng Database
    @mysql_connect(
        "{$ketnoi1['host']}",
        "{$ketnoi1['username']}",
        "{$ketnoi1['password']}")
    or
        die("Không thể kết nối database");
    @mysql_select_db(
        "{$ketnoi1['dbname']}") 
    or
        die("Không thể chọn database");
?>