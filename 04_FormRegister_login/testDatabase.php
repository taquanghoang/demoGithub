<?php 
	include('connection.php');
	$sql2 = "SELECT MaCV,TenNV,SDT FROM nhanvien";
	$query = mysqli_query($link,$sql2);
	


	//$sql3 = "SELECT TenNV,SDT FROM nhanvien ";
	

	while($row = mysqli_fetch_array($query,MYSQL_ASSOC)){
		$sql1 = "SELECT TenCV,MaPB FROM chucvu WHERE MaCV='{$row['MaCV']}'";
		$query1 = mysqli_query($link,$sql1);
		while($row1 = mysqli_fetch_array($query1,MYSQL_ASSOC)){
			
			$sql3 = "SELECT TenPB FROM phongban where MaPB='{$row1['MaPB']}'";
			$query2 = mysqli_query($link,$sql3);
			while($row2 = mysqli_fetch_array($query2,MYSQL_ASSOC)){
				echo "{$row['TenNV']} <br>";
				echo "{$row2['TenPB']} <br>";
				echo "{$row['SDT']} <br>";
				echo "{$row1['TenCV']} <br>";	
			}
			
		}	
	}
	
	//
?>