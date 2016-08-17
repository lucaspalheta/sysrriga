<?php
  session_start();
       
	   $id = $_SESSION['id_projeto_alterar'];
	   
	   $nc = $_POST["nc"];
	   $dp = $_POST["dp"];
	   $eep = $_POST["eep"];
	   $eef = $_POST["eef"];
	   $as = $_POST["as"];
	   $pesr = $_POST["pesr"];
	   $fd = $_POST["fd"];
	   $cc = $_POST["cc"];
	   $etc = $_POST["etc"];
	   
	   $flag = 0;
	   
	  if($nc == "" && $dp == "" && $eep == "" && $eef == "" && $as == "" && $pesr == "" && $fd == "" && $cc == "" && $etc == ""){
	  
	   echo"<script language='javascript' type='text/javascript'>alert('Todos os campos estão vazios, por favor preencha os campos corretamente!');window.location.href='projeto.php';</script>";
		    $flag=1;		
		    return 0;
      }
  
	  if($nc == ""){
	  
	  echo"<script language='javascript' type='text/javascript'>alert('O campo (Nome da Cultura) esta vazio, por favor preencha o campo corretamente!');window.location.href='projeto.php';</script>";
            $flag=1;		
		    return 0;
      }	
      if($dp == ""){
	  
	  echo"<script language='javascript' type='text/javascript'>alert('O campo (Data de Plantio) esta vazio, por favor preencha o campo corretamente!');window.location.href='projeto.php';</script>";
		    $flag=1;		
		    return 0;
      }
	
	 if($eep == ""){
	 
	 echo"<script language='javascript' type='text/javascript'>alert('O campo (Espaçamento entre Plantas) esta vazio, por favor preencha o campo corretamente!');window.location.href='projeto.php';</script>";
	 	   $flag=1;
		   return 0;
	 }
	 
	 if($eef == ""){
	 
	 echo"<script language='javascript' type='text/javascript'>alert('O campo (Espaçamento entre Fileiras) esta vazio, por favor preencha o campo corretamente!');window.location.href='projeto.php';</script>";
	 	   $flag=1;
		   return 0;
	 }
	
	if($as == ""){
	 
	 echo"<script language='javascript' type='text/javascript'>alert('O campo (Área Sombreda) esta vazio, por favor preencha o campo corretamente!');window.location.href='projeto.php';</script>";
	 	   $flag=1;
		   return 0;
	 }
	 
	 if($pesr == ""){
	 
	 echo"<script language='javascript' type='text/javascript'>alert('O campo (Profundidade Efetiva do Sistema Radicular (Z)) esta vazio, por favor preencha o campo corretamente!');window.location.href='projeto.php';</script>";
	 	   $flag=1;
		   return 0;
	 }
	 
	 if($fd == ""){
	 
	 echo"<script language='javascript' type='text/javascript'>alert('O campo (Fator de Disponibilidade (F)) esta vazio, por favor preencha o campo corretamente!');window.location.href='projeto.php';</script>";
	 	   $flag=1;
		   return 0;
	 }
	 
	 if($cc == ""){
	 
	 echo"<script language='javascript' type='text/javascript'>alert('O campo (Coeficiente de Cultivo (Kc)) esta vazio, por favor preencha o campo corretamente!');window.location.href='projeto.php';</script>";
	 	   $flag=1;
		   return 0;
	 }
	
	if($etc == ""){
	 
	 echo"<script language='javascript' type='text/javascript'>alert('O campo (Evapotranspiração da Cultura (ETc)) esta vazio, por favor preencha o campo corretamente!');window.location.href='projeto.php';</script>";
	 	   $flag=1;
		   return 0;
	 }
	
	
	if($flag==0)
	{   
	    include "IFPA_sysrriga_20160010019982000.inc";
		
		$consulta = mysql_query("SELECT * FROM dados_cultura where id_projeto = '$id'");
        $linhas = mysql_num_rows($consulta);
 
       if($linhas == 0){
         echo"<script language='javascript' type='text/javascript'>alert('Os dados não coferem !');window.location.href='projeto.php';</script>";
       }
  
        if($linhas != 0){
		
		/* conexao com o banco de dados */
	      $sql = "UPDATE dados_cultura set cult_nome = '$nc', cult_data = '$dp', cult_esp_plantas = '$eep', cult_esp_fileiras = '$eef', cult_area_sombreada = '$as', cult_z = '$pesr', cult_f = '$fd', cult_kc = '$cc', cult_etc = '$etc' where id_projeto = $id";
	      
		  $resultado = mysql_query($sql)or die("Não foi possível Alterar os dados.");
		  
		
		//exibe mensagem 
		
		echo"<script language='javascript' type='text/javascript'>alert('Dados Alterados com Sucesso !');window.location.href='projeto.php';</script>";

		  
		  /* fechar banco de dados */
		    mysql_close($conexao);

	   
      } 
		   
			
	}
 
	 
 ?>