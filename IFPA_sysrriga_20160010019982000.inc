<?php
     /* conexao com banco de dados */
	    $hostname = "mysql.hostinger.com.br";
	    $username = "u714972837_root";
		$senha = "sysrriga1234";
		$banco = "u714972837_sys";
		
		$conexao = mysql_connect($hostname,$username,$senha);
		
		mysql_select_db($banco,$conexao);
			   
?>	