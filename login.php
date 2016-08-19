<?php
 session_start();
   $nome2 = $_POST['email'];
   $senha2 = $_POST['senha'];
   
   
   
   
   include "IFPA_sysrriga_20160010019982000.inc";
   
    $resultado = mysql_query("SELECT * FROM usuarios WHERE email = '$nome2' ");
	$linhas = mysql_num_rows($resultado);
	
	if($linhas == 0){
	      echo"<script language='javascript' type='text/javascript'>alert('Email ou Senha Incorreto !');window.location.href='index.php';</script>";

	}
   
    else{

	    if($senha2 != mysql_result($resultado, 0, "senha")){
		   echo"<script language='javascript' type='text/javascript'>alert('Email ou Senha Incorreto !');window.location.href='index.php';</script>";

        }	
        else{
		    
		    $_SESSION['nome_usuario'] = $nome2;
		    $_SESSION['senha_usuario'] = $senha2;
			
						   header("Location:logado.php"); 
			 
			 
			
		}
		
    }	
	
	    mysql_close($conexao);
?>		
		 
