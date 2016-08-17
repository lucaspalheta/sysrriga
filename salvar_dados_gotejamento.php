<?php

  session_start();
  
	 include "IFPA_sysrriga_20160010019982000.inc";
	 
	 
	 $nome2 = $_SESSION['nome_usuario'];
	 $senha2 = $_SESSION['senha_usuario'];
     $id_projeto = $_SESSION['id_projeto'];	 
	 
	    $vg = $_SESSION['vg_g'];
	    $lfm = $_SESSION['lfm_g'];
		$dm = $_SESSION['dm_g'];
		$pam = $_SESSION['pam_g'];
		$ps = $_SESSION['ps_g'];
		$nap = $_SESSION['nap_g'];
		$ia = $_SESSION['ia_g'];
		$ti = $_SESSION['ti_g'];
		$nms = $_SESSION['nms_g'];
	    $cgl = $_SESSION['cgl_g'];
		$cll = $_SESSION['cll_g'];
		$pca = $_SESSION['pca_g'];
		$pcac = $_SESSION['pcac_g'];
		$ngporll = $_SESSION['ngporll_g'];
		$vporll = $_SESSION['vporll_g'];  
		 
		$irn = $_SESSION['Irrigacao_Real_Necessaria_g'];
	    $ea = $_SESSION['Eficiencia_de_aplicacao_g'];
	    $pas = $_SESSION['Area_Sombreada_g'];
	    $eto = $_SESSION['Evapotranspiracao_da_Cultura_g'];
	    $kc = $_SESSION['Coeficiente_de_Cultivo_g'];
	    $itn = $_SESSION['Irrigacao_Total_Necessaria_g'];
	    $sp = $_SESSION['Espacamento_entre_Plantas_g'];
	    $sf = $_SESSION['Espacamento_entre_Fileiras_g']; 
		$lbi = $_SESSION['lamina_bruta_irrigacao_g'];
        $kl = $_SESSION['evapotranspiracao_localizada_g'];
        $etcloc = $_SESSION['etcloc_g'];
        $tr = $_SESSION['turno_rega_g'];	
        $vp = $_SESSION['volume_agua_planta_g'];
		
		$etc = $_SESSION['ETcloc2_g'];
        $tra = $_SESSION['Turno_de_Rega_Adotado2_g'];
	    $ea = $_SESSION['Eficiencia_de_Aplicacao2_g'];
		$lla = $_SESSION['lamina_liquida_ajustada2_g'];
		$lba = $_SESSION['lamina_bruta_ajustada2_g'];
		
		$vazaoPorLL = $_SESSION['vazaoll_g'];
	    $ngll = $_SESSION['Numero_de_gotejadores_por_Linha_Lateral_g'];
	    $cgll = $_SESSION['Cg_da_Linha_Lateral_g'];
	    $cll2 = $_SESSION['Comprimento_da_Linha_Lateral_g'];
	    $hfadmll = $_SESSION['HF_Admissivel_da_Linha_Lateral_g'];
	    $dnll = $_SESSION['diametro_nominal_ll_g'];
	    $psll = $_SESSION['Pressao_de_Servico_g'];
	    $dnivelll = $_SESSION['Diferenca_de_Nivel_da_Linha_Lateral_g'];
		$qll = $_SESSION['vazao_linha_lateral_g'];
		$fll = $_SESSION['f_linha_lateral_g'];
		$dll = $_SESSION['diametro_linha_lateral_g'];
		$pcll = $_SESSION['perda_carga_linha_lateral_g'];
		$pill = $_SESSION['pressao_inicio_linha_lateral_g'];
		
		$nsld = $_SESSION['numero_s_ld_g'];
	    $cld = $_SESSION['Comprimento_ld_g'];
	    $dnlp = $_SESSION['direnca_nivel_lp_ld_g'];
	    $mPs = $_SESSION['microaspersor_pressao_de_servico_ld_g'];
	    $cgld = $_SESSION['Cg_da_Linha_de_Derivacao_g'];
	    $dnld = $_SESSION['diametro_nivel_ld_g']; 
        $qld = $_SESSION['vazao_linha_derivacao_g'];
		$diferencanld = $_SESSION['diferenca_nivel_linha_derivacao_g'];
		$FLD = $_SESSION['f_linha_derivacao_g'];
		$hfadmld = $_SESSION['hfadm_linha_derivacao_g'];
		$dld = $_SESSION['diametro_linha_derivacao_g'];
		$pcld = $_SESSION['perda_carga_linha_derivacao_g'];
		$pild = $_SESSION['pressao_inicio_linha_derivacao_g'];	

        $nld = $_SESSION['numerold_g'];
	    $ca = $_SESSION['ComprimentoA_g'];
	    $dna = $_SESSION['direnca_nivel_a_g'];
	    $vmlp = $_SESSION['Velocidade_Maxima_da_Linha_Principal_g'];
	    $crlp = $_SESSION['Coeficiente_de_Rugosidade_da_Linha_Principal_g'];
	    $clp = $_SESSION['Comprimento_da_Linha_Principal_g'];
	    $mlp = $_SESSION['materiallp_g'];
        $qlp = $_SESSION['vazao_linha_principal_g'];
		$dnlp2 = $_SESSION['diferenca_nivel_linha_principal_g'];
		$dclp = $_SESSION['diametro_calculado_linha_principal_g'];
		$pclp = $_SESSION['perda_carga_linha_principal_g'];	

	    $qlr = $_SESSION['Vazao_da_Linha_de_Recalque_g'];
	    $vmlr = $_SESSION['Velocidade_Maxima_da_Linha_de_Recalque_g'];
	    $crlr = $_SESSION['Coeficiente_de_Rugosidade_da_Linha_de_Recalque_g'];
	    $clr = $_SESSION['Comprimento_da_Linha_de_Recalque_g'];
	    $mlr = $_SESSION['materiallr_g'];		
	    $dclr = $_SESSION['diametro_calculado_linha_recalque_g'];
		$pclr = $_SESSION['perda_carga_linha_recalque_g'];
		
		$qls = $_SESSION['Vazao_da_Linha_de_Succao_g'];
	    $vmls = $_SESSION['Velocidade_Maxima_da_Linha_de_Succao_g'];
	    $crls = $_SESSION['Coeficiente_de_Rugosidade_da_Linha_Succao_g'];
	    $cls = $_SESSION['Comprimento_da_Linha_Succao_g'];
	    $mls = $_SESSION['materialls_g'];
	    $dcls = $_SESSION['diametro_calculado_linha_succao_g'];
		$pcls = $_SESSION['perda_carga_linha_succao_g'];
		
	    $pccc = $_SESSION['Perda_de_Carga_no_Cabecal_de_Controle_g'];
	    $pcl = $_SESSION['Perda_de_Carga_Localizada_g'];
	    $eb = $_SESSION['Eficiencia_da_Bomba_g'];
	    $em = $_SESSION['Eficiencia_da_Motor_g'];
		$pct = $_SESSION['perda_carga_totol_cm_g'];
		$mpm = $_SESSION['potencia_motor_cm_g'];
        $cmcv = $_SESSION['media_consumo_cv_g'];
        $cmkw = $_SESSION['media_consumo_kw_g'];	

	 
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


       $dados = "INSERT INTO got_dados_gotejamento(id_usuario,id_projeto,got_vazao_gotejador,got_largura_faixa_molhada,got_diametro_molhado,got_porcentagem_area_molhada,got_pressao_servico,got_numero_aspersores_planata,got_intensidade_aplicacao,got_tempo_irragacao,got_numero_maximo_setores,got_conexao_gotejador_linha,got_comprimento_linha_lateral,got_perda_carga_admissivel,got_perda_carga_admissivel_calculada,got_numero_gotejador_ll,got_vazao_por_ll) VALUES('$idUsuario','$idProjeto','$vg','$lfm','$dm','$pam','$ps','$nap','$ia','$ti','$nms','$cgl','$cll','$pca','$pcac','$ngporll','$vporll')";	
	    
	     $teste = mysql_query($dados)or die("Não foi possível salvar os dados.");
		 
	   $lamina_irrigacao = "INSERT INTO got_lamina_irrigacao(id_usuario,id_projeto,got_Irrigacao_Real_Necessaria_g,got_Eficiencia_de_aplicacao_g,got_Area_Sombreada_g,got_Evapotranspiracao_da_Cultura_g,got_Coeficiente_de_Cultivo_g,got_Irrigacao_Total_Necessaria_g,got_Espacamento_entre_Plantas_g,got_Espacamento_entre_Fileiras_g,got_lamina_bruta_irrigacao_g,got_evapotranspiracao_localizada_g,got_etcloc_g,got_turno_rega_g,got_volume_agua_planta_g) VALUES('$idUsuario','$idProjeto','$irn','$ea','$pas','$eto','$kc','$itn','$sp','$sf','$lbi','$kl','$etcloc','$tr','$vp')";	
	    
	     $teste2 = mysql_query($lamina_irrigacao)or die("Não foi possível salvar os dados.");

       $lamina_irrigacao_ajustada = "INSERT INTO got_lamina_irrigacao_ajustada(id_usuario,id_projeto,got_ETcloc2_g,got_Turno_de_Rega_Adotado2_g,got_Eficiencia_de_Aplicacao2_g,got_lamina_liquida_ajustada2_g,got_lamina_bruta_ajustada2_g) VALUES('$idUsuario','$idProjeto','$etc','$tra','$ea','$lla','$lba')";	
	    
	     $teste3 = mysql_query($lamina_irrigacao_ajustada)or die("Não foi possível salvar os dados.");	

       $linha_lateral = "INSERT INTO got_linha_lateral(id_usuario,id_projeto,got_vazaoll_g,got_Numero_de_gotejadores_por_Linha_Lateral_g,got_Cg_da_Linha_Lateral_g,got_Comprimento_da_Linha_Lateral_g,got_HF_Admissivel_da_Linha_Lateral_g,got_diametro_nominal_ll_g,got_Pressao_de_Servico_g,got_Diferenca_de_Nivel_da_Linha_Lateral_g,got_vazao_linha_lateral_g,got_f_linha_lateral_g,got_diametro_linha_lateral_g,got_perda_carga_linha_lateral_g,got_pressao_inicio_linha_lateral_g) VALUES('$idUsuario','$idProjeto','$vazaoPorLL','$ngll','$cgll','$cll2','$hfadmll','$dnll','$psll','$dnivelll','$qll','$fll','$dll','$pcll','$pill')";	
	    
	     $teste4 = mysql_query($linha_lateral)or die("Não foi possível salvar os dados.");	

       $linha_derivacao = "INSERT INTO got_linha_derivacao(id_usuario,id_projeto,got_numero_s_ld_g,got_Comprimento_ld_g,got_direnca_nivel_lp_ld_g,got_microaspersor_pressao_de_servico_ld_g,got_Cg_da_Linha_de_Derivacao_g,got_diametro_nivel_ld_g,got_vazao_linha_derivacao_g,got_diferenca_nivel_linha_derivacao_g,got_f_linha_derivacao_g,got_hfadm_linha_derivacao_g,got_diametro_linha_derivacao_g,got_perda_carga_linha_derivacao_g,got_pressao_inicio_linha_derivacao_g) VALUES('$idUsuario','$idProjeto','$nsld','$cld','$dnlp','$mPs','$cgld','$dnld','$qld','$diferencanld','$FLD','$hfadmld','$dld','$pcld','$pild')";	
	    
	     $teste5 = mysql_query($linha_derivacao)or die("Não foi possível salvar os dados.");			 		 
		
       $linha_principal = "INSERT INTO got_linha_principal(id_usuario,id_projeto,got_numerold_g,got_ComprimentoA_g,got_direnca_nivel_a_g,got_Velocidade_Maxima_da_Linha_Principal_g,got_Coeficiente_de_Rugosidade_da_Linha_Principal_g,got_Comprimento_da_Linha_Principal_g,got_materiallp_g,got_vazao_linha_principal_g,got_diferenca_nivel_linha_principal_g,got_diametro_calculado_linha_principal_g,got_perda_carga_linha_principal_g) VALUES('$idUsuario','$idProjeto','$nld','$ca','$dna','$vmlp','$crlp','$clp','$mlp','$qlp','$dnlp2','$dclp','$pclp')";	
	    
	     $teste6 = mysql_query($linha_principal)or die("Não foi possível salvar os dados.");

       $linha_recalque = "INSERT INTO got_linha_recalque(id_usuario,id_projeto,got_Vazao_da_Linha_de_Recalque_g,got_Velocidade_Maxima_da_Linha_de_Recalque_g,got_Coeficiente_de_Rugosidade_da_Linha_de_Recalque_g,got_Comprimento_da_Linha_de_Recalque_g,got_materiallr_g,got_diametro_calculado_linha_recalque_g,got_perda_carga_linha_recalque_g) VALUES('$idUsuario','$idProjeto','$qlr','$vmlr','$crlr','$clr','$mlr','$dclr','$pclr')";	
	    
	     $teste7 = mysql_query($linha_recalque)or die("Não foi possível salvar os dados.");

       $linha_succao = "INSERT INTO got_linha_succao(id_usuario,id_projeto,got_Vazao_da_Linha_de_Succao_g,got_Velocidade_Maxima_da_Linha_de_Succao_g,got_Coeficiente_de_Rugosidade_da_Linha_Succao_g,got_Comprimento_da_Linha_Succao_g,got_materialls_g,got_diametro_calculado_linha_succao_g,got_perda_carga_linha_succao_g) VALUES('$idUsuario','$idProjeto','$qls','$vmls','$crls','$cls','$mls','$dcls','$pcls')";	
	    
	     $teste8 = mysql_query($linha_succao)or die("Não foi possível salvar os dados.");	

      $conjunto_motobomba = "INSERT INTO got_conjunto_motobomba(id_usuario,id_projeto,got_Perda_de_Carga_no_Cabecal_de_Controle_g,got_Perda_de_Carga_Localizada_g,got_Eficiencia_da_Bomba_g,got_Eficiencia_da_Motor_g,got_perda_carga_totol_cm_g,got_potencia_motor_cm_g,got_media_consumo_cv_g,got_media_consumo_kw_g) VALUES('$idUsuario','$idProjeto','$pccc','$pcl','$eb','$em','$pct','$mpm','$cmcv','$cmkw')";	
	    
	     $teste9 = mysql_query($conjunto_motobomba)or die("Não foi possível salvar os dados.");			 
 
	  

        $_SESSION['vg_g'] = 0;
	    $_SESSION['lfm_g'] = 0;
		$_SESSION['dm_g'] = 0;
		$_SESSION['pam_g'] = 0;
		$_SESSION['ps_g'] = 0;
		$_SESSION['nap_g'] = 0;
		$_SESSION['ia_g'] = 0;
		$_SESSION['ti_g'] = 0;
		$_SESSION['nms_g'] = 0;
	    $_SESSION['cgl_g'] = 0;
		$_SESSION['cll_g'] = 0;
		$_SESSION['pca_g'] = 0;
		$_SESSION['pcac_g'] = 0;
		$_SESSION['ngporll_g'] = 0;
		$_SESSION['vporll_g'] = 0;  
	 	
        $_SESSION['Irrigacao_Real_Necessaria_g'] = 0;
	    $_SESSION['Eficiencia_de_aplicacao_g'] = 0;
	    $_SESSION['Area_Sombreada_g'] = 0;
	    $_SESSION['Evapotranspiracao_da_Cultura_g'] = 0;
	    $_SESSION['Coeficiente_de_Cultivo_g'] = 0;
	    $_SESSION['Irrigacao_Total_Necessaria_g'] = 0;
	    $_SESSION['Espacamento_entre_Plantas_g'] = 0;
	    $_SESSION['Espacamento_entre_Fileiras_g'] = 0; 
		$_SESSION['lamina_bruta_irrigacao_g'] = 0;
        $_SESSION['evapotranspiracao_localizada_g'] = 0;
        $_SESSION['etcloc_g'] = 0;
        $_SESSION['turno_rega_g'] = 0;	
        $_SESSION['volume_agua_planta_g'] = 0;	

        $_SESSION['ETcloc2_g'] = 0;
        $_SESSION['Turno_de_Rega_Adotado2_g'] = 0;
	    $_SESSION['Eficiencia_de_Aplicacao2_g'] = 0;
		$_SESSION['lamina_liquida_ajustada2_g'] = 0;
		$_SESSION['lamina_bruta_ajustada2_g'] = 0;	

        $_SESSION['vazaoll_g'] = 0;
	    $_SESSION['Numero_de_gotejadores_por_Linha_Lateral_g'] = 0;
	    $_SESSION['Cg_da_Linha_Lateral_g'] = 0;
	    $_SESSION['Comprimento_da_Linha_Lateral_g'] = 0;
	    $_SESSION['HF_Admissivel_da_Linha_Lateral_g'] = 0;
	    $_SESSION['diametro_nominal_ll_g'] = 0;
	    $_SESSION['Pressao_de_Servico_g'] = 0;
	    $_SESSION['Diferenca_de_Nivel_da_Linha_Lateral_g'] = 0;
		$_SESSION['vazao_linha_lateral_g'] = 0;
		$_SESSION['f_linha_lateral_g'] = 0;
		$_SESSION['diametro_linha_lateral_g'] = 0;
		$_SESSION['perda_carga_linha_lateral_g'] = 0;
		$_SESSION['pressao_inicio_linha_lateral_g'] = 0;	

        $_SESSION['numero_s_ld_g'] = 0;
	    $_SESSION['Comprimento_ld_g'] = 0;
	    $_SESSION['direnca_nivel_lp_ld_g'] = 0;
	    $_SESSION['microaspersor_pressao_de_servico_ld_g'] = 0;
	    $_SESSION['Cg_da_Linha_de_Derivacao_g'] = 0;
	    $_SESSION['diametro_nivel_ld_g'] = 0; 
        $_SESSION['vazao_linha_derivacao_g'] = 0;
		$_SESSION['diferenca_nivel_linha_derivacao_g'] = 0;
		$_SESSION['f_linha_derivacao_g'] = 0;
		$_SESSION['hfadm_linha_derivacao_g'] = 0;
		$_SESSION['diametro_linha_derivacao_g'] = 0;
		$_SESSION['perda_carga_linha_derivacao_g'] = 0;
		$_SESSION['pressao_inicio_linha_derivacao_g'] = 0;

        $_SESSION['numerold_g'] = 0;
	    $_SESSION['ComprimentoA_g'] = 0;
	    $_SESSION['direnca_nivel_a_g'] = 0;
	    $_SESSION['Velocidade_Maxima_da_Linha_Principal_g'] = 0;
	    $_SESSION['Coeficiente_de_Rugosidade_da_Linha_Principal_g'] = 0;
	    $_SESSION['Comprimento_da_Linha_Principal_g'] = 0;
	    $_SESSION['materiallp_g'] = 0;
        $_SESSION['vazao_linha_principal_g'] = 0;
		$_SESSION['diferenca_nivel_linha_principal_g'] = 0;
		$_SESSION['diametro_calculado_linha_principal_g'] = 0;
		$_SESSION['perda_carga_linha_principal_g'] = 0;	

        $_SESSION['Vazao_da_Linha_de_Recalque_g'] = 0;
	    $_SESSION['Velocidade_Maxima_da_Linha_de_Recalque_g'] = 0;
	    $_SESSION['Coeficiente_de_Rugosidade_da_Linha_de_Recalque_g'] = 0;
	    $_SESSION['Comprimento_da_Linha_de_Recalque_g'] = 0;
	    $_SESSION['materiallr_g'] = 0;		
	    $_SESSION['diametro_calculado_linha_recalque_g'] = 0;
		$_SESSION['perda_carga_linha_recalque_g'] = 0;	

        $_SESSION['Vazao_da_Linha_de_Succao_g'] = 0;
	    $_SESSION['Velocidade_Maxima_da_Linha_de_Succao_g'] = 0;
	    $_SESSION['Coeficiente_de_Rugosidade_da_Linha_Succao_g'] = 0;
	    $_SESSION['Comprimento_da_Linha_Succao_g'] = 0;
	    $_SESSION['materialls_g'] = 0;
	    $_SESSION['diametro_calculado_linha_succao_g'] = 0;
		$_SESSION['perda_carga_linha_succao_g'] = 0;	

        $_SESSION['Diferenca_de_Nivel_na_Linha_de_Recalque_g'] = 0;
	    $_SESSION['Diferenca_de_Nivel_na_Linha_de_Succao_g'] = 0;
	    $_SESSION['Perda_de_Carga_no_Cabecal_de_Controle_g'] = 0;
	    $_SESSION['Perda_de_Carga_Localizada_g'] = 0;
	    $_SESSION['Eficiencia_da_Bomba_g'] = 0;
	    $_SESSION['Eficiencia_da_Motor_g'] = 0;
		$_SESSION['perda_carga_totol_cm_g'] = 0;
		$_SESSION['potencia_motor_cm_g'] = 0;
        $_SESSION['media_consumo_cv_g'] = 0;
        $_SESSION['media_consumo_kw_g'] = 0;			
	   
        echo"<script language='javascript' type='text/javascript'>alert('Dados Salvos com Sucesso !!');window.location.href='projeto.php';</script>";

		 
		 /* fechar banco de dados */
		    mysql_close($conexao);
     
?>
