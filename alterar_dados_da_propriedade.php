<?php
  session_start();
       
	   $id = $_SESSION['id_projeto_alterar'];
	   $nome = $_POST["nome_propriedade"];
	   $end = $_POST["end_propriedade"];
	   $cep = $_POST["cep_propriedade"];
	   $cidade = $_POST["cidade_propriedade"];
	   
	   $flag = 0;
	   
	  if($nome == "" && $end == "" && $cep == "" && $cidade == ""){
	  
	   echo"<script language='javascript' type='text/javascript'>alert('Todos os campos estão vazios, por favor preencha os campos corretamente!');window.location.href='projeto.php';</script>";
		    $flag=1;		
		    return 0;
      }
  
	  if($nome == ""){
	  
	  echo"<script language='javascript' type='text/javascript'>alert('O campo (Nome) esta vazio, por favor preencha o campo corretamente!');window.location.href='projeto.php';</script>";
            $flag=1;		
		    return 0;
      }	
      if($end == ""){
	  
	  echo"<script language='javascript' type='text/javascript'>alert('O campo (Endereço) esta vazio, por favor preencha o campo corretamente!');window.location.href='projeto.php';</script>";
		    $flag=1;		
		    return 0;
      }
	
	 if($cep == ""){
	 
	 echo"<script language='javascript' type='text/javascript'>alert('O campo (CEP) esta vazio, por favor preencha o campo corretamente!');window.location.href='projeto.php';</script>";
	 	   $flag=1;
		   return 0;
	 }
	 
	 if($cidade == ""){
	 
	 echo"<script language='javascript' type='text/javascript'>alert('O campo (Cidade) esta vazio, por favor preencha o campo corretamente!');window.location.href='projeto.php';</script>";
	 	   $flag=1;
		   return 0;
	 }
	
	
	if($flag==0)
	{   
	    include "IFPA_sysrriga_20160010019982000.inc";
		
		$consulta = mysql_query("SELECT * FROM dados_propriedade where id_projeto = '$id'");
        $linhas = mysql_num_rows($consulta);
 
       if($linhas == 0){
         echo"<script language='javascript' type='text/javascript'>alert('Os dados não coferem !');window.location.href='projeto.php';</script>";
       }
  
        if($linhas != 0){
		
		/* conexao com o banco de dados */
	      $sql = "UPDATE dados_propriedade set prop_nome = '$nome', prop_endereco = '$end', prop_cep = '$cep', prop_cidade = '$cidade' where id_projeto = $id";
	      
		  $resultado = mysql_query($sql)or die("Não foi possível Alterar os dados.");
		
		//exibe mensagem 
		
		echo"<script language='javascript' type='text/javascript'>alert('Dados Alterados com Sucesso !');window.location.href='projeto.php';</script>";

		  
		  /* fechar banco de dados */
		    mysql_close($conexao);

	   
      } 
		   
			
	}
 
	 
 ?>