<?php 
	function GeraHash($qtd){ 
//Under the string $Caracteres you write all the characters you want to be used to randomly generate the code. 
$Caracteres = 'ABCDEFGHIJKLMOPQRSTUVXWYZ0123456789'; 
$QuantidadeCaracteres = strlen($Caracteres); 
$QuantidadeCaracteres--; 

$Hash=NULL; 
	    for($x=1;$x<=$qtd;$x++){ 
	        $Posicao = rand(0,$QuantidadeCaracteres); 
	        $Hash .= substr($Caracteres,$Posicao,1); 
	    } 

	return $Hash; 
	}
 	$dates = getdate(date("U"));
    $datestart = $dates['year'].'-'.$dates['mon'].'-'.$dates['mday'];
    echo "$datestart";
?>
