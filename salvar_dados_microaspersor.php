<?php

  session_start();
  
	 include "IFPA_sysrriga_20160010019982000.inc";
	 
	 
	 $nome2 = $_SESSION['nome_usuario'];
	 $senha2 = $_SESSION['senha_usuario'];
     $id_projeto = $_SESSION['id_projeto'];	 
	 
	     $ve = $_SESSION['ve'];
	     $dm = $_SESSION['dm'];
		 $pam = $_SESSION['pam'];
		 $nep = $_SESSION['nep'];
		 $ia = $_SESSION['ia'];
		 $eee = $_SESSION['eee'];
		 $ti = $_SESSION['ti'];
		 $nms = $_SESSION['nms'];
		 
		 $irn = $_SESSION['Irrigacao_Real_Necessaria'];
         $eaplicacao = $_SESSION['Eficiencia_de_aplicacao'];
	     $pas = $_SESSION['Area_Sombreada'];
         $pamo = $_SESSION['Porcentagem_de_Area_Molhada'];
	     $eto = $_SESSION['Evapotranspiracao_da_Cultura'];
         $kc = $_SESSION['Coeficiente_de_Cultivo'];
	     $itn = $_SESSION['Irrigacao_Total_Necessaria'];
	     $sp = $_SESSION['Espacamento_entre_Plantas'];
         $sf = $_SESSION['Espacamento_entre_Fileiras'];
		 $lbi = $_SESSION['Lamina_Bruta_de_Irrigacao'];
		 $kl = $_SESSION['Evapotranspiracao_Localizada'];
		 $etcloc = $_SESSION['etcloc'];
		 $tr = $_SESSION['Turno_Rega'];
         $vp = $_SESSION['Volume_de_Agua_por_Planta'];
		 
		 $tra = $_SESSION['tra'];
         $etc = $_SESSION['etc'];	
		 $lla = $_SESSION['lla'];
		 $ea = $_SESSION['ea'];
         $lba = $_SESSION['lba'];
		 
		 $vazaoPorLL = $_SESSION['vazaoll'];
	     $ngll = $_SESSION['Numero_de_gotejadores_por_Linha_Lateral'];
	     $cgll = $_SESSION['Cg_da_Linha_Lateral'];
	     $cll = $_SESSION['Comprimento_da_Linha_Lateral'];
	     $hfadmll = $_SESSION['HF_Admissivel_da_Linha_Lateral'];
	     $dnll = $_SESSION['diametro_nominal_ll'];
	     $ps = $_SESSION['Pressao_de_Servico'];
	     $diferencanll = $_SESSION['Diferenca_de_Nivel_da_Linha_Lateral'];
		 $qll = $_SESSION['vazao_linha_lateral'];
		 $fll = $_SESSION['f_linha_lateral'];
		 $dll = $_SESSION['diametro_linha_lateral'];
		 $pcll = $_SESSION['perda_carga_linha_lateral'];
		 $pill = $_SESSION['pressao_inicio_linha_lateral'];
		 
	     $nsld = $_SESSION['numero_s_ld'];
	     $c = $_SESSION['Comprimento'];
	     $dnlp_ld = $_SESSION['direnca_nivel_lp'];
	     $mPs = $_SESSION['microaspersor_pressao_de_servico'];
	     $cgld = $_SESSION['Cg_da_Linha_de_Derivacao'];
	     $dnld = $_SESSION['diametro_nivel_ld'];
		 $qld = $_SESSION['vazaold'];
		 $diferencan_ld = $_SESSION['diferenca_nivel_linha_derivacao'];
		 $FLD = $_SESSION['f_linha_derivacao'];
		 $hfadmld = $_SESSION['hf_linha_derivacao'];
		 $dld = $_SESSION['diametro_linha_derivacao'];
		 $pcld = $_SESSION['perda_carga_linha_derivacao'];
		 $pild = $_SESSION['pressao_inicio_linha_derivacao'];
		 
		 $nld = $_SESSION['numerold'];
	     $ca = $_SESSION['Comprimento_a'];
	     $dna = $_SESSION['direnca_nivel_a'];
	     $vmlp = $_SESSION['Velocidade_Maxima_da_Linha_Principal'];
	     $crlp = $_SESSION['Coeficiente_de_Rugosidade_da_Linha_Principal'];
	     $clp = $_SESSION['Comprimento_da_Linha_Principal'];
	     $mlp = $_SESSION['materiallp'];
		 $qlp = $_SESSION['vazao_linha_principal'];
		 $dnlp = $_SESSION['diferenca_nivel_linha_principal'];
		 $dclp = $_SESSION['diametro_calculado_linha_principal'];
		 $pclp = $_SESSION['perda_carga_linha_principal'];
		 
		 $qlr = $_SESSION['Vazao_da_Linha_de_Recalque'];
	     $vmlr = $_SESSION['Velocidade_Maxima_da_Linha_de_Recalque'];
	     $crlr = $_SESSION['Coeficiente_de_Rugosidade_da_Linha_de_Recalque'];
	     $clr = $_SESSION['Comprimento_da_Linha_de_Recalque'];
	     $mlr = $_SESSION['materiall'];
		 $dclr = $_SESSION['diametro_calculado_lr'];
		 $pclr = $_SESSION['perda_carga_lr'];
		 
		 $qls = $_SESSION['Vazao_da_Linha_de_Succao'];
	     $vmls = $_SESSION['Velocidade_Maxima_da_Linha_de_Succao'];
	     $crls = $_SESSION['Coeficiente_de_Rugosidade_da_Linha_Succao'];
	     $cls = $_SESSION['Comprimento_da_Linha_Succao'];
	     $mls = $_SESSION['materialls'];
		 $dcls = $_SESSION['diametro_calculado_ls'];
		 $pcls = $_SESSION['perda_carga_ls'];
		 
	     $pccc = $_SESSION['Perda_de_Carga_no_Cabecal_de_Controle'];
	     $pcl = $_SESSION['Perda_de_Carga_Localizada'];
	     $eb = $_SESSION['Eficiencia_da_Bomba'];
	     $em = $_SESSION['Eficiencia_da_Motor'];
		 $pct = $_SESSION['perda_carga_totol_cm'];
		 $mpm = $_SESSION['potencia_motor_cm'];
         $cmcv = $_SESSION['media_consumo_cv'];
         $cmkw = $_SESSION['media_consumo_kw'];		 
		 

	 
	 $resultado = mysql_query("SELECT * FROM usuarios where email = '$nome2' and senha='$senha2' ");
     $linhas = mysql_num_rows($resultado);
 
       if($linhas == 0){
         echo"<script language='javascript' type='text/javascript'>alert('Nenhum dado foi encontrado !');window.location.href='http://localhost:8080/LabWebII/Sysrriga/calculos/Microaspersao/Resultados/resultados.php';</script>";
       }
  
        if($linhas != 0){
       for($i = 0; $i < $linhas; $i++){
       $registro = mysql_fetch_row($resultado);
         
       $idUsuario = $registro[0];

	   
      } 
  } 
		   

       $resultado2 = mysql_query("SELECT * FROM dados_projeto where id_projeto = '$id_projeto' ");
       $linhas2 = mysql_num_rows($resultado2);
 
       if($linhas2 == 0){
         echo"<script language='javascript' type='text/javascript'>alert('Nenhum dado foi encontrado !');window.location.href='http://localhost:8080/LabWebII/Sysrriga/calculos/Microaspersao/Resultados/resultados.php';</script>";
       }
  
        if($linhas2 != 0){
       for($i = 0; $i < $linhas2; $i++){
       $registro2 = mysql_fetch_row($resultado2);
         
       $idProjeto = $registro2[1];

	   
      } 
  } 		   


       $dados = "INSERT INTO micro_dados_do_microaspersao(id_usuario,id_projeto,micro_vazao_do_emissor,micro_diametro_molhado,micro_percentagem_de_area_molhada,micro_numero_de_emissores_por_planta,micro_intensidade_de_aplicacao,micro_espacamento_entre_emissores,micro_tempo_de_irrigacao,micro_numero_maximo_de_setores) VALUES('$idUsuario','$idProjeto','$ve','$dm','$pam','$nep','$ia','$eee','$ti','$nms')";	
	    
	     $teste = mysql_query($dados)or die("Não foi possível salvar os dados.");
		 
	   $lamina_irrigacao = "INSERT INTO micro_lamina_irrigacao(id_usuario,id_projeto,micro_Irrigacao_Real_Necessaria,micro_lamina_Eficiencia_de_aplicacao,micro_Area_Sombreada,micro_lamina_Porcentagem_de_Area_Molhada,micro_Evapotranspiracao_da_Cultura,	micro_Coeficiente_de_Cultivo,micro_Irrigacao_Total_Necessaria,micro_Espacamento_entre_Plantas,micro_Espacamento_entre_Fileiras,micro_Lamina_Bruta_de_Irrigacao,micro_Evapotranspiracao_Localizada,micro_lamina_etcloc,micro_lamina_Turno_Rega,micro_Volume_de_Agua_por_Planta) VALUES('$idUsuario','$idProjeto','$irn','$eaplicacao','$pas','$pamo','$eto','$kc','$itn','$sp','$sf','$lbi','$kl','$etcloc','$tr','$vp')";
		
         $teste3 = mysql_query($lamina_irrigacao)or die("Não foi possível salvar os dados.");	 
	   
	   $lamina_ajustada = "INSERT INTO micro_lamina_irrig_ajustada(id_usuario,id_projeto,micro_Turno_de_Rega_Adotado,micro_ETcloc,micro_Eficiencia_de_Aplicacao,micro_lla,micro_lba) VALUES('$idUsuario','$idProjeto','$tra','$etc','$lla','$ea','$lba')";
		
         $teste2 = mysql_query($lamina_ajustada)or die("Não foi possível salvar os dados.");

       $linha_lateral = "INSERT INTO micro_linha_lateral(id_usuario,id_projeto,micro_vazaoll,micro_N_gotejadores_por_LL,micro_Cg_da_LL,micro_Comprimento_da_LL,micro_HF_Admissivel_da_LL,micro_diametro_nominal_ll,micro_Pressao_de_Servico_ll,micro_Diferenca_de_Nivel_da_LL,micro_vazao_linha_lateral,micro_f_ll,micro_diametro_ll,micro_perda_carga_ll,micro_pressao_inicio_ll) VALUES('$idUsuario','$idProjeto','$vazaoPorLL','$ngll','$cgll','$cll','$hfadmll','$dnll','$ps','$diferencanll','$qll','$fll','$dll','$pcll','$pill')";
		
         $teste4 = mysql_query($linha_lateral)or die("Não foi possível salvar os dados.");	

       $linha_derivacao = "INSERT INTO micro_linha_derivacao(id_usuario,id_projeto,micro_numero_s_ld,micro_Comprimento_ld,micro_direnca_nivel_lp_no_ld,micro_pressao_de_servico_ld,micro_Cg_da_LD,micro_diametro_nivel_ld,micro_vazaold,micro_diferenca_nivel_ld,micro_f_ld,micro_hf_ld,micro_diametro_ld,micro_perda_carga_ld,micro_pressao_inicio_ld) VALUES('$idUsuario','$idProjeto','$nsld','$c','$dnlp_ld','$mPs','$cgld','$dnld','$qld','$diferencan_ld','$FLD','$hfadmld','$dld','$pcld','$pild')";
		
         $teste4 = mysql_query($linha_derivacao)or die("Não foi possível salvar os dados.");

       $linha_principal = "INSERT INTO micro_linha_principal(id_usuario,id_projeto,micro_numerold_lp,micro_Comprimento_a_lp,micro_direnca_nivel_a_lp,micro_Velocidade_Maxima_da_LP,micro_Cg_da_LP,micro_Comprimento_da_LP,micro_materiallp,micro_vazao_lp,micro_diferenca_nivel_lp,micro_diametro_calculado_lp,perda_carga_lp) VALUES('$idUsuario','$idProjeto','$nld','$ca','$dna','$vmlp','$crlp','$clp','$mlp','$qlp','$dnlp','$dclp','$pclp')";
		
         $teste4 = mysql_query($linha_principal)or die("Não foi possível salvar os dados.");
		 
       $linha_recalque = "INSERT INTO micro_linha_recalque(id_usuario,id_projeto,micro_Vazao_da_LR,micro_Velocidade_Maxima_da_LR,micro_Coeficiente_de_Rugosidade_da_LR,micro_Comprimento_da_LR,micro_materialr,micro_diametro_calculado_lr,micro_perda_carga_lr) VALUES('$idUsuario','$idProjeto','$qlr','$vmlr','$crlr','$clr','$mlr','$dclr','$pclr')";
		
         $teste4 = mysql_query($linha_recalque)or die("Não foi possível salvar os dados.");
		 
	   $linha_succao = "INSERT INTO micro_linha_succao(id_usuario,id_projeto,micro_Vazao_da_LS,micro_Velocidade_Maxima_da_LS,micro_Coeficiente_de_Rugosidade_da_LS,micro_Comprimento_da_LS,micro_materialls,micro_diametro_calculado_ls,micro_perda_carga_ls) VALUES('$idUsuario','$idProjeto','$qls','$vmls','$crls','$cls','$mls','$dcls','$pcls')";
		
         $teste4 = mysql_query($linha_succao)or die("Não foi possível salvar os dados.");
		 
	   $conjunto_motobomba = "INSERT INTO micro_conjunto_motobomba(id_usuario,id_projeto,micro_Perda_de_Carga_no_Cabecal_de_Controle,micro_Perda_de_Carga_Localizada,micro_Eficiencia_da_Bomba,micro_Eficiencia_da_Motor,micro_perda_carga_totol_cm,micro_potencia_motor_cm,micro_media_consumo_cv,micro_media_consumo_kw) VALUES('$idUsuario','$idProjeto','$pccc','$pcl','$eb','$em','$pct','$mpm','$cmcv','$cmkw')";
		
         $teste4 = mysql_query($conjunto_motobomba)or die("Não foi possível salvar os dados.");	 
		 
		 
        $_SESSION['ve'] = 0;
	    $_SESSION['dm'] = 0;
		$_SESSION['pam'] = 0;
		$_SESSION['nep'] = 0;
		$_SESSION['ia'] = 0;
		$_SESSION['eee'] = 0;
		$_SESSION['ti'] = 0;
		$_SESSION['nms'] = 0;
		
        $_SESSION['Irrigacao_Real_Necessaria'] = 0;
        $eaplicacao = $_SESSION['Eficiencia_de_aplicacao'] = 0;
	    $pas = $_SESSION['Area_Sombreada'] = 0;
        $pamo = $_SESSION['Porcentagem_de_Area_Molhada'] = 0;
	    $eto = $_SESSION['Evapotranspiracao_da_Cultura'] = 0;
        $kc = $_SESSION['Coeficiente_de_Cultivo'] = 0;
	    $itn = $_SESSION['Irrigacao_Total_Necessaria'] = 0;
	    $sp = $_SESSION['Espacamento_entre_Plantas'] = 0;
        $sf = $_SESSION['Espacamento_entre_Fileiras'] = 0;
		$lbi = $_SESSION['Lamina_Bruta_de_Irrigacao'] = 0;
		$kl = $_SESSION['Evapotranspiracao_Localizada'] = 0;
		$etcloc = $_SESSION['etcloc'] = 0;
		$tr = $_SESSION['Turno_Rega'] = 0;
        $vp = $_SESSION['Volume_de_Agua_por_Planta'] = 0; 
 
		$_SESSION['tra'] = 0;
        $_SESSION['etc'] = 0;	
		$_SESSION['lla'] = 0;
		$_SESSION['ea'] = 0;
        $_SESSION['lba'] = 0;
		
		$_SESSION['vazaoll'] = 0;
	    $_SESSION['Numero_de_gotejadores_por_Linha_Lateral'] = 0;
	    $_SESSION['Cg_da_Linha_Lateral'] = 0;
	    $_SESSION['Comprimento_da_Linha_Lateral'] = 0;
	    $_SESSION['HF_Admissivel_da_Linha_Lateral'] = 0;
	    $_SESSION['diametro_nominal_ll'] = 0;
	    $_SESSION['Pressao_de_Servico'] = 0;
	    $_SESSION['Diferenca_de_Nivel_da_Linha_Lateral'] = 0;
		$_SESSION['vazao_linha_lateral'] = 0;
		$_SESSION['f_linha_lateral'] = 0;
		$_SESSION['diametro_linha_lateral'] = 0;
		$_SESSION['perda_carga_linha_lateral'] = 0;
		$_SESSION['pressao_inicio_linha_lateral'] = 0;
		
		$_SESSION['numero_s_ld'] = 0;
	    $_SESSION['Comprimento'] = 0;
	    $_SESSION['direnca_nivel_lp'] = 0;
	    $_SESSION['microaspersor_pressao_de_servico'] = 0;
	    $_SESSION['Cg_da_Linha_de_Derivacao'] = 0;
	    $_SESSION['diametro_nivel_ld'] = 0;
		$_SESSION['vazaold'] = 0;
		$_SESSION['diferenca_nivel_linha_derivacao'] = 0;
		$_SESSION['f_linha_derivacao'] = 0;
		$_SESSION['hf_linha_derivacao'] = 0;
		$_SESSION['diametro_linha_derivacao'] = 0;
		$_SESSION['perda_carga_linha_derivacao'] = 0;
		$_SESSION['pressao_inicio_linha_derivacao'] = 0;
		
		$_SESSION['numerold'] = 0;
	    $_SESSION['Comprimento_a'] = 0;
	    $_SESSION['direnca_nivel_a'] = 0;
	    $_SESSION['Velocidade_Maxima_da_Linha_Principal'] = 0;
	    $_SESSION['Coeficiente_de_Rugosidade_da_Linha_Principal'] = 0;
	    $_SESSION['Comprimento_da_Linha_Principal'] = 0;
	    $_SESSION['materiallp'] = 0;
		$_SESSION['vazao_linha_principal'] = 0;
		$_SESSION['diferenca_nivel_linha_principal'] = 0;
		$_SESSION['diametro_calculado_linha_principal'] = 0;
        $_SESSION['perda_carga_linha_principal'] = 0;
		
		$_SESSION['Vazao_da_Linha_de_Recalque'] = 0;
	    $_SESSION['Velocidade_Maxima_da_Linha_de_Recalque'] = 0;
	    $_SESSION['Coeficiente_de_Rugosidade_da_Linha_de_Recalque'] = 0;
	    $_SESSION['Comprimento_da_Linha_de_Recalque'] = 0;
	    $_SESSION['materiall'] = 0;
		$_SESSION['diametro_calculado_lr'] = 0;
		$_SESSION['perda_carga_lr'] = 0;
		
		$_SESSION['Vazao_da_Linha_de_Succao'] = 0;
	    $_SESSION['Velocidade_Maxima_da_Linha_de_Succao'] = 0;
	    $_SESSION['Coeficiente_de_Rugosidade_da_Linha_Succao'] = 0;
	    $_SESSION['Comprimento_da_Linha_Succao'] = 0;
	    $_SESSION['materialls'] = 0;
		$_SESSION['diametro_calculado_ls'] = 0;
		$_SESSION['perda_carga_ls'] = 0;
		
		$_SESSION['Perda_de_Carga_no_Cabecal_de_Controle'] = 0;
	    $_SESSION['Perda_de_Carga_Localizada'] = 0;
	    $_SESSION['Eficiencia_da_Bomba'] = 0;
	    $_SESSION['Eficiencia_da_Motor'] = 0;
		$_SESSION['perda_carga_totol_cm'] = 0;
		$_SESSION['potencia_motor_cm'] = 0;
        $_SESSION['media_consumo_cv'] = 0;
        $_SESSION['media_consumo_kw'] = 0;	
	 	 
	   
        echo"<script language='javascript' type='text/javascript'>alert('Dados Salvos com Sucesso !!');window.location.href='projeto.php';</script>";

		 
		 /* fechar banco de dados */
		    mysql_close($conexao);
     
?>
