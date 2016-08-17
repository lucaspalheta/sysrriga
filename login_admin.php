<?php
 session_start();
   $nome_admin = $_POST['nome_admin'];
   $senha_admin = $_POST['senha_admin'];
   
   
   include "IFPA_sysrriga_20160010019982000.inc";
   
    $resultado = mysql_query("SELECT * FROM administrador WHERE nome_admin = '$nome_admin' ");
	$linhas = mysql_num_rows($resultado);
	
	if($linhas == 0){
	      echo"<script language='javascript' type='text/javascript'>alert('Nome ou Senha Incorreto !');window.location.href='index.php';</script>";

	}
   
    else{

	    if($senha_admin != mysql_result($resultado, 0, "senha")){
		   echo"<script language='javascript' type='text/javascript'>alert('Nome ou Senha Incorreto !');window.location.href='index.php';</script>";

        }	
        else{
		    
		    $_SESSION['nome_administrador'] = $nome_admin;
		    $_SESSION['senha_administrador'] = $senha_admin;
			
						   header("Location:admin.php"); 
			 
			 
			
		}
		
    }	
	
	    mysql_close($conexao);
?>		
		 
