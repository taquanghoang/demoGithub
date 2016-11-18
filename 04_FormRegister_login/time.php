<?php 
	//echo date("d/m/Y "."</br>");
	$date = "21-04-2008";
	$d = getdate(strtotime($date));
	print $d['mday'].'/'.$d['mon'].'/'.$d['year'];
?>