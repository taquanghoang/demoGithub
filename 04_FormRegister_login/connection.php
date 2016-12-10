<?php 
// 	$ketnoi['host'] = 'localhost'; //Tên server, nếu dùng hosting free thì cần thay đổi
//     $ketnoi['dbname'] = 'quanliktx'; //Đây là tên của Database
//     $ketnoi['username'] = 'root'; //Tên sử dụng Database
//     $ketnoi['password'] = '';//Mật khẩu của tên sử dụng Database
//     mysqli_set_charset(@mysql_connect(
//         "{$ketnoi['host']}",
//         "{$ketnoi['username']}",
//         "{$ketnoi['password']}"),"utf8");    
//     or
//         die("Không thể kết nối database");
//     @mysql_select_db(
//         "{$ketnoi['dbname']}") 
//     or
//         die("Không thể chọn database");
            $link = mysqli_connect("localhost","root","") or die ("Khong the ket noi den CSDL MySQL");
            mysqli_set_charset($link,"utf8");

            mysqli_select_db($link,"ql_kytucxa");
 ?>