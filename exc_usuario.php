 
<?php
       
	   $id = $_POST["id"];
	   $flag=0;
	   
	 if($id == "")
	 {
			echo"<script language='javascript' type='text/javascript'>alert('O campo (ID do Usuário) esta vazio, por favor preencha o campo corretamente!');window.location.href='alterar_dados_usuario.php';</script>";
            $flag=1;		
		    return 0;
	}
	
	if($flag==0){

      include "IFPA_sysrriga_20160010019982000.inc";
		
		$consulta = mysql_query("SELECT * FROM usuarios where id = '$id'");
        $linhas = mysql_num_rows($consulta);
 
       if($linhas == 0){
         echo"<script language='javascript' type='text/javascript'>alert('Usuário Não Existe !');window.location.href='excluir_usuario.php';</script>";
       }
  
        if($linhas != 0){	
		   
		   /* conexao com o banco de dados */
	      $sql = "DELETE FROM usuarios WHERE id = $id";
	      
		  $resultado = mysql_query($sql)or die("Não foi possível Deletar os dados.");
		
		//exibe mensagem 
		  echo"<script language='javascript' type='text/javascript'>alert('Usuário Excluido com Sucesso !');window.location.href='admin.php';</script>";

		  
		  /* fechar banco de dados */
		    mysql_close($conexao);
			
	}
	}
 
	 
 ?>