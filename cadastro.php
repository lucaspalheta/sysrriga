﻿<?php

include "IFPA_sysrriga_20160010019982000.inc";

/*Variáveis de Propriedade*/
        $nome_usuario = $_POST ["nome_cadastro"];
        $email_cadastro = $_POST ["email_cadastro"];
        $senha_cadastro = $_POST ["senha_cadastro"];
		 $flag = 0;
	   
      	  
     if($nome_usuario == "" && $email_cadastro == "" && $senha_cadastro == "" )
	 {
	    echo"<script language='javascript' type='text/javascript'>alert('Todos os campos estão vazios, favor preecher os campos corretamente');window.location.href='index.php';</script>";
	 	$flag=1;		
		return 0;
	 }
	 
	 if($nome_usuario == "")
	 {
		echo"<script language='javascript' type='text/javascript'>alert('O campo (Nome) esta vazio, favor preecher o campo corretamente');window.location.href='index.php';</script>";
	 	$flag=1;		
		return 0;
	 }
	 
	 if($email_cadastro == "")
	 {
	    echo"<script language='javascript' type='text/javascript'>alert('O campo (Email) esta vazio, favor preecher o campo corretamente');window.location.href='index.php';</script>";
	 	$flag=1;		
		return 0;
	 }
	 
	 if($senha_cadastro == "")
	 {
	    echo"<script language='javascript' type='text/javascript'>alert('O campo (Senha) esta vazio, favor preecher o campo corretamente');window.location.href='index.php';</script>";
	 	$flag=1;		
		return 0;
	 }
	 
	 if($flag==0)
	{ 

       $sql = "INSERT INTO usuarios(id,nome_usuario,email,senha) VALUES('','$nome_usuario','$email_cadastro','$senha_cadastro')";
	      
		  $resultado = mysql_query($sql)or die("Não foi possível cadastrar os dados.");
	   
        echo"<script language='javascript' type='text/javascript'>alert('Usuário cadastrado com sucesso');window.location.href='index.php';</script>";

          /* fechar banco de dados */
		    mysql_close($conexao);
     }
?>
