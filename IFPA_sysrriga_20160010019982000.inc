<?php
     /* conexao com banco de dados */
	    $hostname = "mysql.hostinger.com.br";
	    $username = "u882424909_sys";
		$senha = "sysrriga1234";
		$banco = "u882424909_sys";
		
		$conexao = mysql_connect($hostname,$username,$senha);
		
		mysql_select_db($banco,$conexao);
			   
?>	