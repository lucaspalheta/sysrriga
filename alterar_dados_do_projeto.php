<?php
  session_start();
       
	   $id = $_SESSION['id_projeto_alterar'];
	   $tec = $_POST["tec"];
	   $crea = $_POST["crea"];
	   $proprietario = $_POST["proprietario"];
	   
	   $flag = 0;
	   
	  if($tec == "" && $crea == "" && $proprietario == ""){
	  
	   echo"<script language='javascript' type='text/javascript'>alert('Todos os campos estão vazios, por favor preencha os campos corretamente!');window.location.href='projeto.php';</script>";
		    $flag=1;		
		    return 0;
      }
  
	  if($tec == ""){
	  
	  echo"<script language='javascript' type='text/javascript'>alert('O campo (Tecnico Responsavel) esta vazio, por favor preencha o campo corretamente!');window.location.href='projeto.php';</script>";
            $flag=1;		
		    return 0;
      }	
      if($crea == ""){
	  
	  echo"<script language='javascript' type='text/javascript'>alert('O campo (Nº CREA) esta vazio, por favor preencha o campo corretamente!');window.location.href='projeto.php';</script>";
		    $flag=1;		
		    return 0;
      }
	
	 if($proprietario == ""){
	 
	 echo"<script language='javascript' type='text/javascript'>alert('O campo (Proprietario) esta vazio, por favor preencha o campo corretamente!');window.location.href='projeto.php';</script>";
	 	   $flag=1;
		   return 0;
	 }
	
	
	if($flag==0)
	{   
	    include "IFPA_sysrriga_20160010019982000.inc";
		
		$consulta = mysql_query("SELECT * FROM dados_projeto where id_projeto = '$id'");
        $linhas = mysql_num_rows($consulta);
 
       if($linhas == 0){
         echo"<script language='javascript' type='text/javascript'>alert('Os dados não coferem !');window.location.href='projeto.php';</script>";
       }
  
        if($linhas != 0){
		
		/* conexao com o banco de dados */
	      $sql = "UPDATE dados_projeto set proj_tecResponsavel = '$tec', proj_nCrea = '$crea', proj_proprietario = '$proprietario' where id_projeto = $id";
	      
		  $resultado = mysql_query($sql)or die("Não foi possível Alterar os dados.");
		
		//exibe mensagem 
		
		echo"<script language='javascript' type='text/javascript'>alert('Dados Alterados com Sucesso !');window.location.href='projeto.php';</script>";

		  
		  /* fechar banco de dados */
		    mysql_close($conexao);

	   
      } 
		   
			
	}
 
	 
 ?>