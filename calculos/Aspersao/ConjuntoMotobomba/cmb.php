<?php
  session_start();

		$pcl = $_POST ["Perda_de_Carga_Localizada"];
		$qll = $_POST ["vazao_ll"];
		$eb = $_POST ["Eficiencia_da_Bomba"];
		$em = $_POST ["Eficiencia_do_Motor"];
		

     if($pcl == "" && $qll == "" && $eb  == "" && $em == ""){
	 
	 	  echo"<script language='javascript' type='text/javascript'>alert('Preencha os campos corretamente !');window.location.href='..//../../../calculos/Aspersao/ConjuntoMotobomba/motobomba.php';</script>";
      }
	  
	 else{ 
	 
	 $_SESSION['Perda_de_Carga_Localizada_cmb_a'] = $pcl;
	 $_SESSION['vazao_ll_cmb_a'] = $qll;
	 $_SESSION['Eficiencia_da_Bomba_cmb_a'] = $eb;
	 $_SESSION['Eficiencia_do_Motor_cmb_a'] = $em;

	 
	/* calculo da perda de carga total */

	   if ($pcl != 0){
            
			$pct = ($_SESSION['pressao_servico_ll_a'] + $_SESSION['perda_carga_lp_a'] + $_SESSION['diferenca_nivel_lp_a'] + $_SESSION['perda_carga_lr_a'] + $_SESSION['dnlr_a'] + $_SESSION['perda_carga_ls_a'] + $dnlsa = $_SESSION['dnls_a'] + $pcl);    
        }			
		else {
            $pct = 0;
        }
	
    /* Calculo Potência do Motor */	
		
		if ($qll != 0 && $pct != 0 && $eb != 0){
            $mpm = (($qll * $pct) / (75 * ($eb / 100)));    
	    }
		else {
            $mpm = 0;
        }

	/* Calculo Consumo Médio (cv) */

	    if ($qll != 0 && $pct != 0 && $eb != 0 && $em != 0){
		
            $cmcv = (($qll * $pct) / (75 * ($eb / 100) * ($em / 100)));   
        }
		else {
            $cmcv = 0;
        }
    
    /* Calculo Consumo Médio (kw) */	
	
		if ($cmcv != 0){
		    $cmkw = ($cmcv * 0.736);  
		}	 
		else {
            $cmkw = 0;
        }
		
		/*Formatação de Números*/
        
		$pct = number_format($pct, 2, ',', ' ');
        $mpm = number_format($mpm, 1, ',', ' ');
        $cmcv = number_format($cmcv, 1, ',', ' ');
        $cmkw = number_format($cmkw, 1, ',', ' ');		

         $_SESSION['perda_carga_total_cmb_a'] = $pct;
		 $_SESSION['potencia_motor_cmb_a'] = $mpm;
		 $_SESSION['consumo_medio_cv_cmb_a'] = $cmcv;
		 $_SESSION['consumo_medio_kw_cmb_a'] = $cmkw;

		
		echo"<script language='javascript' type='text/javascript'>alert('Dados Salvos Temporariamente !');window.location.href='..//../../../calculos/Aspersao/Resultados/resultados_aspersao.php';</script>";

    }		
	
        ?>