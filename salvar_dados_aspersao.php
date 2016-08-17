<?php

  session_start();
  
	 include "IFPA_sysrriga_20160010019982000.inc";
	 
	 
	 $nome2 = $_SESSION['nome_usuario'];
	 $senha2 = $_SESSION['senha_usuario'];
     $id_projeto = $_SESSION['id_projeto'];	 
	 
	    $nome = $_SESSION['nome_a'];
	    $marca = $_SESSION['marca_a'];
		$as_ps = $_SESSION['as_ps_a'];
		$q = $_SESSION['q_a'];
		$cd = $_SESSION['cd_a'];
		$ab = $_SESSION['ab_a'];
		$as_eda = $_SESSION['as_eda_a'];
		$as_eea = $_SESSION['as_eea_a'];
		$as_ell = $_SESSION['as_ell_a'];
		
		$irn = $_SESSION['Irrigacao_Real_Necessaria_a'];
	    $ea = $_SESSION['Eficiencia_de_aplicacao_a'];
	    $etc = $_SESSION['ETcloc_a'];
	    $dias = $_SESSION['dias_a'];
		$lbi = $_SESSION['lamina_bruta_irrigacao_a'];	
        $tr = $_SESSION['turno_rega_irrigacao_a'];
        $pi = $_SESSION['periodo_irrigacao_a'];
		
		$etca = $_SESSION['ETcloc_ajustada_a'];
	    $tra = $_SESSION['Turno_de_Rega_Adotado_ajustada_a'];
	    $ea_lia = $_SESSION['Eficiencia_de_Aplicacao_ajustada_a'];
		$lla = $_SESSION['lamina_liquida_ajustada_a'];	
        $lba = $_SESSION['lamina_bruta_ajustada_a'];
		
		$q_as = $_SESSION['as_vazao_a'];
	    $s1_as = $_SESSION['as_es1_a'];
	    $s2_as = $_SESSION['as_es2_a'];
	    $t_as = $_SESSION['as_Tmud_a'];
	    $nhf_as = $_SESSION['as_nhifp_a'];
	    $nhf_as = $_SESSION['as_comprimento_a'];
	    $la_as = $_SESSION['as_largura_area_a'];
		$ia_as = $_SESSION['as_intensidade_aplicacao_a'];
        $tnp_as = $_SESSION['as_tempo_necessario_posicao_a'];
        $tnpt_as = $_SESSION['as_tempo_necessario_posicao_total_a'];
        $npld_as = $_SESSION['as_numero_posicoes_irrigadas_a'];
        $ntp_as = $_SESSION['as_numero_total_posicoes_a'];		 
		$npid_as = $_SESSION['as_numero_posicoes_serem_irrigadas_a'];
		$nll_as = $_SESSION['as_numero_linhas_laterais_a'];
		$ntall_as = $_SESSION['as_ntall_a'];
		$ntas_as = $_SESSION['as_ntas_a'];
        $qll_as = $_SESSION['as_vazaoll_a'];
        $qt_as = $_SESSION['as_vazaot_a'];
		
	    $qll = $_SESSION['vazaoll_a'];
	    $cgll = $_SESSION['Cg_da_Linha_Lateral_a'];
	    $diametro_nominal_ll = $_SESSION['diametro_nominal_ll_a'];
		$cll = $_SESSION['comprimentoll_a'];
        $dnll = $_SESSION['diferenca_nivelll_a'];		
        $fll = $_SESSION['fll_a'];	
        $hfll = $_SESSION['hfll_a'];
        $dll = $_SESSION['diametroll_a'];
        $pcll = $_SESSION['perda_carga_ll_a'];		 
		$pill = $_SESSION['pressao_servico_ll_a'];
		
	    $qlp = $_SESSION['vazaolp_a'];
	    $cglp = $_SESSION['Cg_lp_a'];
	    $diametro_nominal_lp = $_SESSION['diametro_nominal_lp_a'];
		$clp = $_SESSION['comprimento_lp_a'];
		$dnlp = $_SESSION['diferenca_nivel_lp_a'];
		$flp = $_SESSION['f_lp_a'];
		$dclp = $_SESSION['diametro_calculado_lp_a'];
		$pclp = $_SESSION['perda_carga_lp_a'];
		$pctlp = $_SESSION['perda_carga_total_lp_a'];
		$velp = $_SESSION['velocidade_escoamento_lp_a'];
		
		$qlr = $_SESSION['Vazao_da_Linha_de_Recalque_a'];
	    $vmlr = $_SESSION['Velocidade_Maxima_da_Linha_de_Recalque_a'];
	    $crlr = $_SESSION['Coeficiente_de_Rugosidade_da_Linha_de_Recalque_a'];
	    $clr = $_SESSION['Comprimento_da_Linha_de_Recalque_a'];
	    $mlr = $_SESSION['materiallr_a'];
	    $dnlr = $_SESSION['dnlr_a'];
		$dclr = $_SESSION['diametro_calculado_lr_a'];
        $pclr = $_SESSION['perda_carga_lr_a'];
        $pctlr = $_SESSION['perda_carga_total_lr_a'];
        $velr = $_SESSION['velocidade_escoamento_lr_a'];
		
		$qls = $_SESSION['Vazao_da_Linha_de_Succao_a'];
	    $vmls = $_SESSION['Velocidade_Maxima_da_Linha_de_Succao_a'];
	    $crls = $_SESSION['Coeficiente_de_Rugosidade_da_Linha_Succao_a'];
	    $cls = $_SESSION['Comprimento_da_Linha_Succao_a'];
	    $mls = $_SESSION['materialls_a'];
	    $dnls = $_SESSION['dnls_a'];
        $dcls = $_SESSION['diametro_calculado_ls_a'];
 		$pcls = $_SESSION['perda_carga_ls_a'];
	    $pctls = $_SESSION['perda_carga_total_ls_a'];
		$vels = $_SESSION['velocidade_escoamento_ls_a'];
		
		$pcl = $_SESSION['Perda_de_Carga_Localizada_cmb_a'];
	    $eb = $_SESSION['Eficiencia_da_Bomba_cmb_a'];
	    $em = $_SESSION['Eficiencia_do_Motor_cmb_a'];
		$pct = $_SESSION['perda_carga_total_cmb_a'];
		$mpm = $_SESSION['potencia_motor_cmb_a'];
		$cmcv = $_SESSION['consumo_medio_cv_cmb_a'];
		$cmkw = $_SESSION['consumo_medio_kw_cmb_a'];
	 
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


       $caracteristicas = "INSERT INTO as_caracteristicas_aspersor(id_usuario,id_projeto,as_nome_a,as_marca_a,as_ca_pressao_servico_a,as_vazao_a,as_coeficiente_descarga_a,as_area_bocais_a,as_espacamento_dos_aspersores_a,as_espacamento_entre_aaspersores_a,as_espacamento_entre_ll_a) VALUES('$idUsuario','$idProjeto','$nome','$marca','$as_ps','$q','$cd','$ab','$as_eda','$as_eea','$as_ell')";	
	    
	     $teste = mysql_query($caracteristicas)or die("Não foi possível salvar os dados.");
		 
	   $lamina_irrigacao = "INSERT INTO as_lamina_irrigacao(id_usuario,id_projeto,as_Irrigacao_Real_Necessaria_li_a,as_Eficiencia_de_aplicacao_li_a,as_ETcloc_li_a,as_dias_li_a,as_lamina_bruta_irrigacao_li_a,as_turno_rega_irrigacao_li_a,as_periodo_irrigacao_li_a) VALUES('$idUsuario','$idProjeto','$irn','$ea','$etc','$dias','$lbi','$tr','$pi')";	
	    
	     $teste2 = mysql_query($lamina_irrigacao)or die("Não foi possível salvar os dados."); 
		 
	   $lamina_irrigacao_ajustada = "INSERT INTO as_lamina_irrigacao_ajustada(id_usuario,id_projeto,as_ETcloc_ajustada_a,as_Turno_de_Rega_Adotado_ajustada_a,as_Eficiencia_de_Aplicacao_ajustada_a,as_lamina_liquida_ajustada_a,as_lamina_bruta_ajustada_a) VALUES('$idUsuario','$idProjeto','$etca','$tra','$ea_lia','$lla','$lba')";	
	    
	     $teste3 = mysql_query($lamina_irrigacao_ajustada)or die("Não foi possível salvar os dados."); 
		 
	   $aspersao = "INSERT INTO as_aspersao(id_usuario,id_projeto,as_vazao_as_a,as_es1_as_a,as_es2_as_a,as_Tmud_a,as_nhifp_a,as_comprimento_as_a,as_largura_area_as_a,as_intensidade_aplicacao_as_a,as_tempo_necessario_posicao_as_a,as_tempo_necessario_posicao_total_as_a,as_numero_posicoes_irrigadas_as_a,as_numero_total_posicoes_as_a,as_numero_posicoes_serem_irrigadas_as_a,as_numero_linhas_laterais_as_a,as_ntall_as_a,as_ntas_as_a,as_vazaoll_as_a,as_vazaot_as_a) VALUES('$idUsuario','$idProjeto','$q_as','$s1_as','$s2_as','$t_as','$nhf_as','$nhf_as','$la_as','$ia_as','$tnp_as','$tnpt_as','$npld_as','$ntp_as','$npid_as','$nll_as','$ntall_as','$ntas_as','$qll_as','$qt_as')";	
	    
	     $teste4 = mysql_query($aspersao)or die("Não foi possível salvar os dados.");

       $linha_lateral = "INSERT INTO as_linha_lateral(id_usuario,id_projeto,as_vazaoll_a,as_Cg_da_Linha_Lateral_a,as_diametro_nominal_ll_a,as_comprimentoll_a,as_diferenca_nivelll_a,as_fll_a,as_hfll_a,as_diametroll_a,as_perda_carga_ll_a,as_pressao_servico_ll_a) VALUES('$idUsuario','$idProjeto','$qll','$cgll','$diametro_nominal_ll','$cll','$dnll','$fll','$hfll','$dll','$pcll','$pill')";	
	    
	     $teste5 = mysql_query($linha_lateral)or die("Não foi possível salvar os dados.");

       $linha_principal = "INSERT INTO as_linha_principal(id_usuario,id_projeto,as_vazaolp_a,as_Cg_lp_a,as_diametro_nominal_lp_a,as_comprimento_lp_a,as_diferenca_nivel_lp_a,as_f_lp_a,as_diametro_calculado_lp_a,as_perda_carga_lp_a,as_perda_carga_total_lp_a,as_velocidade_escoamento_lp_a) VALUES('$idUsuario','$idProjeto','$qlp','$cglp','$diametro_nominal_lp','$clp','$dnlp','$flp','$dclp','$pclp','$pctlp','$velp')";	
	    
	     $teste6 = mysql_query($linha_principal)or die("Não foi possível salvar os dados.");

       $linha_recalque = "INSERT INTO as_linha_recalque(id_usuario,id_projeto,as_Vazao_da_Linha_de_Recalque_a,as_Velocidade_Maxima_da_Linha_de_Recalque_a,as_Coeficiente_de_Rugosidade_da_Linha_de_Recalque_a,as_Comprimento_da_Linha_de_Recalque_a,as_materiallr_a,as_dnlr_a,as_diametro_calculado_lr_a,as_perda_carga_lr_a,as_perda_carga_total_lr_a,as_velocidade_escoamento_lr_a) VALUES('$idUsuario','$idProjeto','$qlr','$vmlr','$crlr','$clr','$mlr','$dnlr','$dclr','$pclr','$pctlr','$velr')";	
	    
	     $teste7 = mysql_query($linha_recalque)or die("Não foi possível salvar os dados.");

       $linha_succao = "INSERT INTO as_linha_succao(id_usuario,id_projeto,as_Vazao_da_Linha_de_Succao_a,as_Velocidade_Maxima_da_Linha_de_Succao_a,as_Coeficiente_de_Rugosidade_da_Linha_Succao_a,as_Comprimento_da_Linha_Succao_a,as_materialls_amaterialls_a,as_dnls_a,as_diametro_calculado_ls_a,as_perda_carga_ls_a,as_perda_carga_total_ls_a,as_velocidade_escoamento_ls_a) VALUES('$idUsuario','$idProjeto','$qls','$vmls','$crls','$cls','$mls','$dnls','$dcls','$pcls','$pctls','$vels')";	
	    
	     $teste8 = mysql_query($linha_succao)or die("Não foi possível salvar os dados.");

       $conjunto_motobomba = "INSERT INTO as_conjunto_bomba(id_usuario,id_projeto,as_Perda_de_Carga_Localizada_cmb_a,as_Eficiencia_da_Bomba_cmb_a,as_Eficiencia_do_Motor_cmb_a,as_perda_carga_total_cmb_a,as_potencia_motor_cmb_a,as_consumo_medio_cv_cmb_a,as_consumo_medio_kw_cmb_a) VALUES('$idUsuario','$idProjeto','$pcl','$eb','$em','$pct','$mpm','$cmcv','$cmkw')";	
	    
	     $teste9 = mysql_query($conjunto_motobomba)or die("Não foi possível salvar os dados.");		 
		 

	  

        $_SESSION['nome_a'] = 0;
	    $_SESSION['marca_a'] = 0;
		$_SESSION['as_ps_a'] = 0;
		$_SESSION['q_a'] = 0;
		$_SESSION['cd_a'] = 0;
		$_SESSION['ab_a'] = 0;
		$_SESSION['as_eda_a'] = 0;
		$_SESSION['as_eea_a'] = 0;
		$_SESSION['as_ell_a'] = 0;
		
		$_SESSION['Irrigacao_Real_Necessaria_a'] = 0;
	    $_SESSION['Eficiencia_de_aplicacao_a'] = 0;
	    $_SESSION['ETcloc_a'] = 0;
	    $_SESSION['dias_a'] = 0;
		$_SESSION['lamina_bruta_irrigacao_a'] =0;	
        $_SESSION['turno_rega_irrigacao_a'] = 0;
        $_SESSION['periodo_irrigacao_a'] = 0;
		
		$_SESSION['ETcloc_ajustada_a'] = 0;
	    $_SESSION['Turno_de_Rega_Adotado_ajustada_a'] = 0;
	    $_SESSION['Eficiencia_de_Aplicacao_ajustada_a'] = 0;
		$_SESSION['lamina_liquida_ajustada_a'] = 0;	
        $_SESSION['lamina_bruta_ajustada_a'] = 0;
		
		$_SESSION['as_vazao_a'] = 0;
	    $_SESSION['as_es1_a'] = 0;
	    $_SESSION['as_es2_a'] = 0;
	    $_SESSION['as_Tmud_a'] = 0;
	    $_SESSION['as_nhifp_a'] = 0;
	    $_SESSION['as_comprimento_a'] = 0;
	    $_SESSION['as_largura_area_a'] = 0;
		$_SESSION['as_intensidade_aplicacao_a'] = 0;
        $_SESSION['as_tempo_necessario_posicao_a'] = 0;
        $_SESSION['as_tempo_necessario_posicao_total_a'] = 0;
        $_SESSION['as_numero_posicoes_irrigadas_a'] = 0;
        $_SESSION['as_numero_total_posicoes_a'] = 0;		 
		$_SESSION['as_numero_posicoes_serem_irrigadas_a'] = 0;
		$_SESSION['as_numero_linhas_laterais_a'] = 0;
		$_SESSION['as_ntall_a'] = 0;
		$_SESSION['as_ntas_a'] = 0;
        $_SESSION['as_vazaoll_a'] = 0;
        $_SESSION['as_vazaot_a'] = 0;
		
		$_SESSION['vazaoll_a'] = 0;
	    $_SESSION['Cg_da_Linha_Lateral_a'] = 0;
	    $_SESSION['diametro_nominal_ll_a'] = 0;
		$_SESSION['comprimentoll_a'] = 0;
        $_SESSION['diferenca_nivelll_a'] = 0;		
        $_SESSION['fll_a'] = 0;	
        $_SESSION['hfll_a'] = 0;
        $_SESSION['diametroll_a'] = 0;
        $_SESSION['perda_carga_ll_a'] = 0;		 
		$_SESSION['pressao_servico_ll_a'] = 0;
		
		$_SESSION['vazaolp_a'] = 0;
	    $_SESSION['Cg_lp_a'] = 0;
	    $_SESSION['diametro_nominal_lp_a'] = 0;
		$_SESSION['comprimento_lp_a'] = 0;
		$_SESSION['diferenca_nivel_lp_a'] = 0;
		$_SESSION['f_lp_a'] = 0;
		$_SESSION['diametro_calculado_lp_a'] = 0;
		$_SESSION['perda_carga_lp_a'] = 0;
		$_SESSION['perda_carga_total_lp_a'] = 0;
		$_SESSION['velocidade_escoamento_lp_a'] = 0;
		
		$_SESSION['Vazao_da_Linha_de_Recalque_a'] = 0;
	    $_SESSION['Velocidade_Maxima_da_Linha_de_Recalque_a'] = 0;
	    $_SESSION['Coeficiente_de_Rugosidade_da_Linha_de_Recalque_a'] = 0;
	    $_SESSION['Comprimento_da_Linha_de_Recalque_a'] = 0;
	    $_SESSION['materiallr_a'] = 0;
	    $_SESSION['dnlr_a'] = 0;
		$_SESSION['diametro_calculado_lr_a'] = 0;
        $_SESSION['perda_carga_lr_a'] = 0;
        $_SESSION['perda_carga_total_lr_a'] = 0;
        $_SESSION['velocidade_escoamento_lr_a'] = 0;
		
		$_SESSION['Vazao_da_Linha_de_Succao_a'] = 0;
	    $_SESSION['Velocidade_Maxima_da_Linha_de_Succao_a'] = 0;
	    $_SESSION['Coeficiente_de_Rugosidade_da_Linha_Succao_a'] = 0;
	    $_SESSION['Comprimento_da_Linha_Succao_a'] = 0;
	    $_SESSION['materialls_a'] = 0;
	    $_SESSION['dnls_a'] = 0;
        $_SESSION['diametro_calculado_ls_a'] = 0;
 		$_SESSION['perda_carga_ls_a'] = 0;
	    $_SESSION['perda_carga_total_ls_a'] = 0;
		$_SESSION['velocidade_escoamento_ls_a'] = 0;
		
		$_SESSION['Perda_de_Carga_Localizada_cmb_a'] = 0;
	    $_SESSION['vazao_ll_cmb_a'] = 0;
	    $_SESSION['Eficiencia_da_Bomba_cmb_a'] = 0;
	    $_SESSION['Eficiencia_do_Motor_cmb_a'] = 0;
		$_SESSION['perda_carga_total_cmb_a'] = 0;
		$_SESSION['potencia_motor_cmb_a'] = 0;
		$_SESSION['consumo_medio_cv_cmb_a'] = 0;
		$_SESSION['consumo_medio_kw_cmb_a'] = 0;
	    		
	   
        echo"<script language='javascript' type='text/javascript'>alert('Dados Salvos com Sucesso !!');window.location.href='projeto.php';</script>";

		 
		 /* fechar banco de dados */
		    mysql_close($conexao);
     
?>
