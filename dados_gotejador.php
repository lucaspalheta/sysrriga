<?php
session_start();

		$vg = $_POST ["vazao_do_gotejador"];
		$lfm = $_POST ["largura_da_faixa_molhada"];
		$dm = $_POST ["diametro_molhado"];
		$pam = $_POST ["porcentagem_de_area_molhada"];
		$ps = $_POST ["pressao_de_servoco"];
		$nap = $_POST ["numero_de_aspersores_por_planta"];
		$ia = $_POST ["intensidade_de_aplicacao"];
		$ti = $_POST ["tempo_de_irrigacao"];
		$nms = $_POST ["numero_maximo_de_setores"];
		$cgl = $_POST ["conexao_do_gotejador_na_linha"];
		$cll = $_POST ["comprimento_da_linha_lateral"];
		$pca = $_POST ["perda_de_carga_admissivel"];
		$pcac = $_POST ["perda_de_carga_admissivel_calculada"];
		$ngporll = $_POST ["numero_de_gotejadores_por_linha_lateral"];
		$vporll = $_POST ["vazao_por_linha_lateral"];

      	  
     if($vg != "" && $lfm != "" && $dm != "" && $pam != "" && $ps != "" && $nap != "" && $ia != "" && $ti != "" && $nms != "" && $cgl != "" && $cll != "" && $pca != "" && $pcac != "" && $ngporll != "" && $vporll != "")
	 {
        $_SESSION['vg_g'] = $vg;
	    $_SESSION['lfm_g'] = $lfm;
		$_SESSION['dm_g'] = $dm;
		$_SESSION['pam_g'] = $pam;
		$_SESSION['ps_g'] = $ps;
		$_SESSION['nap_g'] = $nap;
		$_SESSION['ia_g'] = $ia;
		$_SESSION['ti_g'] = $ti;
		
		$_SESSION['nms_g'] = $nms;
	    $_SESSION['cgl_g'] = $cgl;
		$_SESSION['cll_g'] = $cll;
		$_SESSION['pca_g'] = $pca;
		$_SESSION['pcac_g'] = $pcac;
		$_SESSION['ngporll_g'] = $ngporll;
		$_SESSION['vporll_g'] = $vporll;

	   
        echo"<script language='javascript' type='text/javascript'>alert('Dados Salvos Temporariamente !');window.location.href='calculos/Gotejamento/ResultadosGotejador/resultados_gotejador.php';</script>";

	 }		
     else{ 
          echo"<script language='javascript' type='text/javascript'>alert('Por favor preencha o campos corretamente !');window.location.href='gotejamento.php';</script>";
	 }
        ?>
		
	