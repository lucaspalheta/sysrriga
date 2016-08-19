<?php
     /* conexao com banco de dados */
	    $hostname = "localhost";
	    $username = "root";
		$senha = "usbw";
		$banco = "u882424909_sys";
		
		$conexao = mysql_connect($hostname,$username,$senha);
		
		mysql_select_db($banco,$conexao);
		
		$mysqli = new mysqli('localhost','root','usbw','u882424909_sys');
			   
?>	