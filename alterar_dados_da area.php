<?php
  session_start();
       
	   $id = $_SESSION['id_projeto_alterar'];
	   
	   $largura = $_POST["largura"];
	   $comprimento = $_POST["comprimento"];
	   $dnlp = $_POST["dnlp"];
	   $dnll = $_POST["dnll"];
	   $clr = $_POST["clr"];
	   $cls = $_POST["cls"];
	   $dnlr = $_POST["dnlr"];
	   $dnls = $_POST["dnls"];
	   $tf = $_POST["tf"];
	   $nts = $_POST["nts"];
	   
	   $flag = 0;
	   
	  if($largura == "" && $comprimento == "" && $dnlp == "" && $dnll == "" && $clr == "" && $cls == "" && $dnlr == "" && $dnls == "" && $tf == "" && $nts == ""){
	  
	   echo"<script language='javascript' type='text/javascript'>alert('Todos os campos estão vazios, por favor preencha os campos corretamente!');window.location.href='projeto.php';</script>";
		    $flag=1;		
		    return 0;
      }
  
	  if($largura == ""){
	  
	  echo"<script language='javascript' type='text/javascript'>alert('O campo (Largura) esta vazio, por favor preencha o campo corretamente!');window.location.href='projeto.php';</script>";
            $flag=1;		
		    return 0;
      }	
      if($comprimento == ""){
	  
	  echo"<script language='javascript' type='text/javascript'>alert('O campo (Comprimento) esta vazio, por favor preencha o campo corretamente!');window.location.href='projeto.php';</script>";
		    $flag=1;		
		    return 0;
      }
	
	 if($dnlp == ""){
	 
	 echo"<script language='javascript' type='text/javascript'>alert('O campo (DN da Linha Principal) esta vazio, por favor preencha o campo corretamente!');window.location.href='projeto.php';</script>";
	 	   $flag=1;
		   return 0;
	 }
	 
	 if($dnll == ""){
	 
	 echo"<script language='javascript' type='text/javascript'>alert('O campo (DN da Linha Lateral) esta vazio, por favor preencha o campo corretamente!');window.location.href='projeto.php';</script>";
	 	   $flag=1;
		   return 0;
	 }
	
	if($clr == ""){
	 
	 echo"<script language='javascript' type='text/javascript'>alert('O campo (Comprimento da Linha de Recalque) esta vazio, por favor preencha o campo corretamente!');window.location.href='projeto.php';</script>";
	 	   $flag=1;
		   return 0;
	 }
	 
	 if($cls == ""){
	 
	 echo"<script language='javascript' type='text/javascript'>alert('O campo (Comprimento da Linha de Sucção) esta vazio, por favor preencha o campo corretamente!');window.location.href='projeto.php';</script>";
	 	   $flag=1;
		   return 0;
	 }
	 
	 if($dnlr == ""){
	 
	 echo"<script language='javascript' type='text/javascript'>alert('O campo (DN da Linha de Recalque) esta vazio, por favor preencha o campo corretamente!');window.location.href='projeto.php';</script>";
	 	   $flag=1;
		   return 0;
	 }
	 
	 if($dnls == ""){
	 
	 echo"<script language='javascript' type='text/javascript'>alert('O campo (DN da Linha de Sucção) esta vazio, por favor preencha o campo corretamente!');window.location.href='projeto.php';</script>";
	 	   $flag=1;
		   return 0;
	 }
	
	if($tf == ""){
	 
	 echo"<script language='javascript' type='text/javascript'>alert('O campo (Tempo de Funcionamento) esta vazio, por favor preencha o campo corretamente!');window.location.href='projeto.php';</script>";
	 	   $flag=1;
		   return 0;
	 }
	 
	 if($nts == ""){
	 
	 echo"<script language='javascript' type='text/javascript'>alert('O campo (Número Total de Setores) esta vazio, por favor preencha o campo corretamente!');window.location.href='projeto.php';</script>";
	 	   $flag=1;
		   return 0;
	 }
	
	if($flag==0)
	{   
	    include "IFPA_sysrriga_20160010019982000.inc";
		
		$consulta = mysql_query("SELECT * FROM dados_area where id_projeto = '$id'");
        $linhas = mysql_num_rows($consulta);
 
       if($linhas == 0){
         echo"<script language='javascript' type='text/javascript'>alert('Os dados não coferem !');window.location.href='projeto.php';</script>";
       }
  
        if($linhas != 0){
		
		/* conexao com o banco de dados */
	      $sql = "UPDATE dados_area set area_largura = '$largura', area_comprimento = '$comprimento', area_dnlp = '$dnlp', area_dnll = '$dnll', area_comprimento_lr = '$clr', area_comprimento_ls = '$cls', area_dnlr = '$dnlr', area_dnls = '$dnls', area_tf = '$tf', area_nts = '$nts' where id_projeto = $id";
	      
		  $resultado = mysql_query($sql)or die("Não foi possível Alterar os dados.");
		  
		
		//exibe mensagem 
		
		echo"<script language='javascript' type='text/javascript'>alert('Dados Alterados com Sucesso !');window.location.href='projeto.php';</script>";

		  
		  /* fechar banco de dados */
		    mysql_close($conexao);

	   
      } 
		   
			
	}
 
	 
 ?>