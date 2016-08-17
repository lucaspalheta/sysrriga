
<?php
   
   //testa se os cookies foram definidos
		 
	  if(IsSet($_SESSION["nome_usuario"]))
	     $nome_usuario = $_SESSION["nome_usuario"];
		 
	  if(IsSet($_SESSION["senha_usuario"]))
         $senha_usuario=$_SESSION["senha_usuario"];	  
		 
	//verifica se os cookies existem	 
	
	   if(!(empty($nome_usuario) OR empty($senha_usuario)))
	   {
	      include"IFPA_sysrriga_20160010019982000.inc";
		  
		    $resultado=mysql_query("SELECT * FROM usuarios WHERE email='$nome_usuario'");
			
			 if(mysql_num_rows($resultado)==1)
			 {
			      if($senha_usuario!=mysql_result($resultado,0,"senha"))
				   {
	                //se os cookies existem, mas a senha não confere, apaga os cookies, exibe mensagem de erro e sai
                    	 
						 unset($_SESSION['nome_usuario']);
						 unset($_SESSION['senha_usuario']);
						 echo"<script language='javascript' type='text/javascript'>alert('Você não efetuou o LOGIN!');window.location.href='index.php';</script>";
						 exit;
			 }		
			 }	 
			 //se os cookies existem, mas o nome do usuário não confere, apaga os cookies, exibe mensagem de erro e sai.
			 else{
			    unset($_SESSION['nome_usuario']);
				unset($_SESSION['senha_usuario']);
				echo"<script language='javascript' type='text/javascript'>alert('Você não efetuou o LOGIN!');window.location.href='index.php';</script>";
				exit;
			  }
          }	
            else{
                  //se os cookies não existem, exibe mensagem de erro e sai.
			   echo"<script language='javascript' type='text/javascript'>alert('Você não efetuou o LOGIN!');window.location.href='index.php';</script>";
               exit;
           }

       mysql_close($conexao);
?>	   