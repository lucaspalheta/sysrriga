<?php

 session_start();
 
     include "IFPA_sysrriga_20160010019982000.inc";
	 
	  	  $nome2 = $_SESSION['nome_usuario'];
		  $senha2 = $_SESSION['senha_usuario']; 
		  
	   /*dados dp projeto*/	
	    $proj_nome = $_POST ["proj_nome"];
        $proj_Tecnico_Responsavel = $_POST ["proj_Tecnico_Responsavel"];
        $proj_CREA = $_POST ["proj_CREA"];
		$proj_Proprietario = $_POST ["proj_Proprietario"];
		
      /* dados da propriedade */
        $prop_nome = $_POST ["prop_nome"];
        $prop_endereco = $_POST ["prop_endereco"];
        $prop_cep = $_POST ["prop_cep"];
		$prop_cidade = $_POST ["prop_cidade"];
		
	  /*dados gerais */
        $er = $_POST ["evapotranspiracao_de_referencia"];	  
        /*$dta = $_POST ["disponibilidade_total_de_agua"];*/
		$ea = $_POST ["eficiencia_de_aplicacao"];
		/*$hf = $_POST ["horas_de_funcionamento"];
		$tr = $_POST ["turno_de_rega"];
		$df = $_POST ["dias_de_folga"];*/
		
	 /*dados da area */
        $l = $_POST ["Largura"];	  
        $c = $_POST ["Comprimento"];
		$a_dnlp = $_POST ["DN_da_Linha_Principal"];
		$a_dnll = $_POST ["DN_da_Linha_Lateral"];
		$a_clr = $_POST ["Comprimento_da_Linha_de_Recalque"];
		$a_cls = $_POST ["Comprimento_da_Linha_de_Succao"];
		$a_dnlr = $_POST ["DN_da_Linha_de_Recalque"];
		$a_dnls = $_POST ["DN_da_Linha_de_Succao"];
		/*$tf = $_POST ["Tempo_de_Funcionamento"];*/
		
	
		
	/*dados da cultura*/
        $nome_cultura = $_POST ["Nome_da_Cultura"];	  
        $data = $_POST ["Data_de_Plantio"];
		$eep = $_POST ["Espacamento_entre_Plantas"];
		$eef = $_POST ["Espacamento_entre_Fileiras"];
		/*$as = $_POST ["Area_Sombreada"];*/
		$pesr = $_POST ["Profundidade_Efetiva_Sistema_Radicular"];
		$fd = $_POST ["Fator_de_Disponibilidade"];
		$cc = $_POST ["Coeficiente_de_Cultivo"];
		$ec = $_POST ["Evapotranspiracao_da_Cultura"];	
	
    /*dados do solo*/
        $solo_cc = $_POST ["capacidade_de_campo"];	  
        $solo_pm = $_POST ["ponto_de_murchamento"];
		$solo_ds = $_POST ["densidade_do_solo"];
		/*$solo_irn = $_POST ["irrigacao_real_necessaria"];
		$solo_itn = $_POST ["irrigaca_total_necessaria"];
		$cras = $_POST ["capacidade_real_de_agua_no_solo"];
		$ctas = $_POST ["capacidade_total_de_agua_no_solo"];*/
		$vib = $_POST ["velocidade_de_infiltracao_basica"];
	
		 $flag = 0;
	   
      
      	  
     if($proj_nome == "" && $proj_Tecnico_Responsavel == "" && $proj_CREA == "" && $proj_Proprietario == "" && $prop_nome == "" && $prop_endereco == "" && $prop_cep == "" && $prop_cidade == "" && $er == "" &&  $ea == "" &&  $l ==  "" && $c == "" && $a_dnlp == "" && $a_dnll == "" && $a_clr == "" && $a_cls == "" && $a_dnlr == "" && $a_dnls == "" &&  $a_nts == "" && $nome_cultura == "" && $data == "" && $eep == "" && $eef == "" &&  $pesr == "" && $fd == "" && $cc == "" && $ec == "" || $proj_nome == "" || $proj_Tecnico_Responsavel == "" || $proj_CREA == "" || $proj_Proprietario == "" || $prop_nome == "" || $prop_endereco == "" || $prop_cep == "" || $prop_cidade == "" || $er == "" || $ea == "" || $l ==  "" || $c == "" || $a_dnlp == "" || $a_dnll == "" || $a_clr == "" || $a_cls == "" || $a_dnlr == "" || $a_dnls == "" || $a_nts == "" || $nome_cultura == "" || $data == "" || $eep == "" || $eef == "" || $pesr == "" || $fd == "" || $cc == "" || $ec == ""){
																																																																																																																																														
		echo"<script language='javascript' type='text/javascript'>alert('Por favor preencha os campos corretamente');window.location.href='index2.php';</script>";
	 	$flag=1;		
		return 0;
	 }
	 
	 
	  if($flag==0)
	{ 
	   $resultado = mysql_query("SELECT * FROM usuarios where email = '$nome2' and senha='$senha2' ");
       $linhas = mysql_num_rows($resultado);
 
       if($linhas == 0){
         echo"<script language='javascript' type='text/javascript'>alert('Nenhum dado encontrado !');window.location.href='index2.php';</script>";
       }
  
        if($linhas != 0){
       for($i = 0; $i < $linhas; $i++){
       $registro = mysql_fetch_row($resultado);
         
       $idUsuario = $registro[0];

	   
      } 
  } 
  
	 
	   /* dados do projeto */
	  $projeto = "INSERT INTO dados_projeto(id_usuario,id_projeto,proj_nome,proj_tecResponsavel,proj_nCrea,proj_proprietario) VALUES('$idUsuario','','$proj_nome','$proj_Tecnico_Responsavel','$proj_CREA','$proj_Proprietario')";    
	        $teste = mysql_query($projeto)or die("Não foi possível salvar os dados1.");  
         
		   $resultado3 = mysql_query("SELECT * FROM dados_projeto where id_usuario = '$idUsuario' ");
             $linhas3 = mysql_num_rows($resultado3);
 
       if($linhas3 == 0){
         echo"<script language='javascript' type='text/javascript'>alert('Nenhum dado encontrado !');window.location.href='index2.php';</script>";
       }
  
        if($linhas3 != 0){
       for($i = 0; $i < $linhas3; $i++){
       $registro3 = mysql_fetch_row($resultado3);
         
       $id_projeto = $registro3[1];

	   
      } 
  }   	 
		 /* dados da propriedade */
       $propriedade = "INSERT INTO dados_propriedade(id_usuario,id_projeto,prop_nome,prop_endereco,prop_cep,prop_cidade) VALUES('$idUsuario','$id_projeto','$prop_nome','$prop_endereco','$prop_cep','$prop_cidade')";
	   	    $teste2 = mysql_query($propriedade)or die("Não foi possível cadastrar os dados2.");
			
	    /* dados gerais */
       $gerais = "INSERT INTO dados_gerais(id_usuario,id_projeto,g_eto,g_dta,g_ea,g_hd,g_tr,g_df) VALUES('$idUsuario','$id_projeto','$er','$ea')";
	   	    $teste3 = mysql_query($gerais)or die("Não foi possível cadastrar os dados3.");
      
	  /* dados da area */
       $area = "INSERT INTO dados_area(id_usuario,id_projeto,area_largura,area_comprimento,area_dnlp,area_dnll,area_comprimento_lr,area_comprimento_ls,area_dnlr,area_dnls,area_tf,area_nts) VALUES('$idUsuario','$id_projeto','$l','$c','$a_dnlp','$a_dnll','$a_clr','$a_cls','$a_dnlr','$a_dnls','$a_nts')";
	   	    $teste4 = mysql_query($area)or die("Não foi possível cadastrar os dados4.");			
		  
      /* dados da cultura */
       $cultura = "INSERT INTO dados_cultura(id_usuario,id_projeto,cult_nome,cult_data,cult_esp_plantas,cult_esp_fileiras,cult_area_sombreada,cult_z,cult_f,cult_kc,cult_etc) VALUES('$idUsuario','$id_projeto','$nome_cultura','$data','$eep','$eef','$pesr','$fd','$cc','$ec')";
	   	    $teste5= mysql_query($cultura)or die("Não foi possível cadastrar os dados5.");	

      /* dados do solo */
       $solo = "INSERT INTO dados_solo(id_usuario,id_projeto,solo_cc,solo_pm,solo_ds,solo_irn,solo_itn,solo_cra,solo_cta,solo_vib) VALUES('$idUsuario','$id_projeto','$solo_cc','$solo_pm','$solo_ds','$vib')";
	   	    $teste6= mysql_query($solo)or die("Não foi possível cadastrar os dados6.");				

		$_SESSION['id_projeto'] = $id_projeto;
	   
        echo"<script language='javascript' type='text/javascript'>alert('Dados Salvos Com Sucesso !');window.location.href='tipos_irrigacao.php';</script>";

          /* fechar banco de dados */
		    mysql_close($conexao);
     }
	 

?>
