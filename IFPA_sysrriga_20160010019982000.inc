<?php
     /* conexao com banco de dados */
	    $hostname = "localhost";
	    $username = "root";
		$senha = "usbw";
		$banco = "sysrriga";
		
		$conexao = mysql_connect($hostname,$username,$senha);
		
		mysql_select_db($banco,$conexao);
			   
?>	