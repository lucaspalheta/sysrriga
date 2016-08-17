<?php
  session_start();
       
	   $id = $_SESSION['id_projeto_alterar'];
	   
	   $ccampo = $_POST["ccampo"];
	   $pm = $_POST["pm"];
	   $ds = $_POST["ds"];
	   $irn = $_POST["irn"];
	   $itn = $_POST["itn"];
	   $cra = $_POST["cra"];
	   $cta = $_POST["cta"];
	   $vib = $_POST["vib"];
	   
	   $flag = 0;
	   
	  if($ccampo == "" && $pm == "" && $ds == "" && $irn == "" && $itn == "" && $cra == "" && $cta == "" && $vib == ""){
	  
	   echo"<script language='javascript' type='text/javascript'>alert('Todos os campos estão vazios, por favor preencha os campos corretamente!');window.location.href='projeto.php';</script>";
		    $flag=1;		
		    return 0;
      }
  
	  if($ccampo == ""){
	  
	  echo"<script language='javascript' type='text/javascript'>alert('O campo (Capacidade de Campo (CC)) esta vazio, por favor preencha o campo corretamente!');window.location.href='projeto.php';</script>";
            $flag=1;		
		    return 0;
      }	
      if($pm == ""){
	  
	  echo"<script language='javascript' type='text/javascript'>alert('O campo (Ponto de Murchamento (PM)) esta vazio, por favor preencha o campo corretamente!');window.location.href='projeto.php';</script>";
		    $flag=1;		
		    return 0;
      }
	 
	 if($ds == ""){
	 
	 echo"<script language='javascript' type='text/javascript'>alert('O campo (Densidade do Solo (ds)) esta vazio, por favor preencha o campo corretamente!');window.location.href='projeto.php';</script>";
	 	   $flag=1;
		   return 0;
	 }
	
	if($irn == ""){
	 
	 echo"<script language='javascript' type='text/javascript'>alert('O campo (Irrigacao Real Necessária (IRN)) esta vazio, por favor preencha o campo corretamente!');window.location.href='projeto.php';</script>";
	 	   $flag=1;
		   return 0;
	 }
	 
	 if($itn == ""){
	 
	 echo"<script language='javascript' type='text/javascript'>alert('O campo (Irrigacao Total Necessária) esta vazio, por favor preencha o campo corretamente!');window.location.href='projeto.php';</script>";
	 	   $flag=1;
		   return 0;
	 }
	 
	 if($cra == ""){
	 
	 echo"<script language='javascript' type='text/javascript'>alert('O campo (Capacidade Real de Água no Solo (CRA)) esta vazio, por favor preencha o campo corretamente!');window.location.href='projeto.php';</script>";
	 	   $flag=1;
		   return 0;
	 }
	 
	 if($cta == ""){
	 
	 echo"<script language='javascript' type='text/javascript'>alert('O campo (Capacidade Total de Água no Solo (CTA)) esta vazio, por favor preencha o campo corretamente!');window.location.href='projeto.php';</script>";
	 	   $flag=1;
		   return 0;
	 }
	
	if($vib == ""){
	 
	 echo"<script language='javascript' type='text/javascript'>alert('O campo (Velocidade de Infiltração Básica (Vib)) esta vazio, por favor preencha o campo corretamente!');window.location.href='projeto.php';</script>";
	 	   $flag=1;
		   return 0;
	 }
	
	
	if($flag==0)
	{   
	    include "IFPA_sysrriga_20160010019982000.inc";
		
		$consulta = mysql_query("SELECT * FROM dados_solo where id_projeto = '$id'");
        $linhas = mysql_num_rows($consulta);
 
       if($linhas == 0){
         echo"<script language='javascript' type='text/javascript'>alert('Os dados não coferem !');window.location.href='projeto.php';</script>";
       }
  
        if($linhas != 0){
		
		/* conexao com o banco de dados */
	      $sql = "UPDATE dados_solo set solo_cc = '$ccampo', solo_pm = '$pm', solo_ds = '$ds', solo_irn = '$irn', solo_itn = '$itn', solo_cra = '$cra', solo_cta = '$cta', solo_vib = '$vib' where id_projeto = $id";
	      
		  $resultado = mysql_query($sql)or die("Não foi possível Alterar os dados.");

		
		//exibe mensagem 
		
		echo"<script language='javascript' type='text/javascript'>alert('Dados Alterados com Sucesso !');window.location.href='projeto.php';</script>";

		  
		  /* fechar banco de dados */
		    mysql_close($conexao);

	   
      } 
		   
			
	}
 
	 
 ?>