<?php
  session_start();
       
	   $id = $_SESSION['id_projeto_alterar'];
	   $eto = $_POST["eto"];
	   $dta = $_POST["dta"];
	   $ea = $_POST["ea"];
	   $hf = $_POST["hf"];
	   $tr = $_POST["tr"];
	   $df = $_POST["df"];
	   
	   $flag = 0;
	   
	  if($eto == "" && $dta == "" && $ea == "" && $hf == "" && $tr == "" && $df == ""){
	  
	   echo"<script language='javascript' type='text/javascript'>alert('Todos os campos estão vazios, por favor preencha os campos corretamente!');window.location.href='projeto.php';</script>";
		    $flag=1;		
		    return 0;
      }
  
	  if($eto == ""){
	  
	  echo"<script language='javascript' type='text/javascript'>alert('O campo (Evapotranspiração de Referência (ETo)) esta vazio, por favor preencha o campo corretamente!');window.location.href='projeto.php';</script>";
            $flag=1;		
		    return 0;
      }	
      if($dta == ""){
	  
	  echo"<script language='javascript' type='text/javascript'>alert('O campo (Disponibilidade Total de Água (DTA)) esta vazio, por favor preencha o campo corretamente!');window.location.href='projeto.php';</script>";
		    $flag=1;		
		    return 0;
      }
	
	 if($ea == ""){
	 
	 echo"<script language='javascript' type='text/javascript'>alert('O campo (Eficiência de Aplicação (EA)) esta vazio, por favor preencha o campo corretamente!');window.location.href='projeto.php';</script>";
	 	   $flag=1;
		   return 0;
	 }
	 
	 if($hf == ""){
	 
	 echo"<script language='javascript' type='text/javascript'>alert('O campo (Horas de Funcionamento) esta vazio, por favor preencha o campo corretamente!');window.location.href='projeto.php';</script>";
	 	   $flag=1;
		   return 0;
	 }
	
	if($tr == ""){
	 
	 echo"<script language='javascript' type='text/javascript'>alert('O campo (Turno de Rega (TR)) esta vazio, por favor preencha o campo corretamente!');window.location.href='projeto.php';</script>";
	 	   $flag=1;
		   return 0;
	 }
	 
	 if($df == ""){
	 
	 echo"<script language='javascript' type='text/javascript'>alert('O campo (Dias de Folga) esta vazio, por favor preencha o campo corretamente!');window.location.href='projeto.php';</script>";
	 	   $flag=1;
		   return 0;
	 }
	
	if($flag==0)
	{   
	    include "IFPA_sysrriga_20160010019982000.inc";
		
		$consulta = mysql_query("SELECT * FROM dados_gerais where id_projeto = '$id'");
        $linhas = mysql_num_rows($consulta);
 
       if($linhas == 0){
         echo"<script language='javascript' type='text/javascript'>alert('Os dados não coferem !');window.location.href='projeto.php';</script>";
       }
  
        if($linhas != 0){
		
		/* conexao com o banco de dados */
	      $sql = "UPDATE dados_gerais set g_eto = '$eto', g_dta = '$dta', g_ea = '$ea', g_hd = '$hf', g_tr = '$tr', g_df = '$df' where id_projeto = $id";
	      
		  $resultado = mysql_query($sql)or die("Não foi possível Alterar os dados.");
		
		//exibe mensagem 
		
		echo"<script language='javascript' type='text/javascript'>alert('Dados Alterados com Sucesso !');window.location.href='projeto.php';</script>";

		  
		  /* fechar banco de dados */
		    mysql_close($conexao);

	   
      } 
		   
			
	}
 
	 
 ?>