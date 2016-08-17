<?php
  session_start();

	$dnlr = $_POST ["Diferenca_de_Nivel_na_Linha_de_Recalque"];
	$dnls = $_POST ["Diferenca_de_Nivel_na_Linha_de_Succao"];
	$pccc = $_POST ["Perda_de_Carga_no_Cabecal_de_Controle"];
	$pcl = $_POST ["Perda_de_Carga_Localizada"];
	
    $qlp = $_POST ["vazao_lp"];
	$eb = $_POST ["Eficiencia_da_Bomba"];
	
	$em = $_POST ["Eficiencia_do_Motor"];
		           
	   
     if($pccc == "" && $pcl == "" && $qlp == "" && $dnlr == "" && $dnls == "" && $eb == "" && $em == ""){
	 
	 	  echo"<script language='javascript' type='text/javascript'>alert('Preencha os campos corretamente !');window.location.href='..//../../../calculos/Gotejamento/ConjuntoMotobomba/motobomba.php';</script>";
      }
	  
	 else{ 
	 
	 $_SESSION['Diferenca_de_Nivel_na_Linha_de_Recalque_g'] = $dnlr;
	 $_SESSION['Diferenca_de_Nivel_na_Linha_de_Succao_g'] = $dnls;
	 $_SESSION['Perda_de_Carga_no_Cabecal_de_Controle_g'] = $pccc;
	 $_SESSION['Perda_de_Carga_Localizada_g'] = $pcl;
	 $_SESSION['Eficiencia_da_Bomba_g'] = $eb;
	 $_SESSION['Eficiencia_da_Motor_g'] = $em;
	 


    /* calculo da perda de carga total */
	
	    if ($pccc != 0 && $pcl != 0){
            
			$pct = ($_SESSION['pressao_inicio_linha_derivacao_g'] + $_SESSION['perda_carga_linha_principal_g'] + $_SESSION['diferenca_nivel_linha_principal_g'] + $_SESSION['perda_carga_linha_recalque_g'] + $dnlr + $_SESSION['perda_carga_linha_succao_g'] + $dnls + $pccc + $pcl);    
        }
		
		else {
            $pct = 0;
        }
	
    /* calculo da potencia do motor */

        if ($pct != 0 && $eb != 0){
            $mpm = (($qlp * 1000) * ($pct / 75) / ($eb / 100));    
		 
		}	 
		else {
            $mpm = 0;
        }
	
    /* consumo medio (cv) */

        if ($pct != 0 && $eb != 0 && $em != 0){
		
            $cmcv = (($qlp * 1000) * ($pct / (75 * ($eb / 100) * ($em /100))));   
		}	 
		else {
            $cmcv = 0;
        }
				
    /* consumo medio (kw) */
	
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

		
		 $_SESSION['perda_carga_totol_cm_g'] = $pct;
		 $_SESSION['potencia_motor_cm_g'] = $mpm;
         $_SESSION['media_consumo_cv_g'] = $cmcv;
         $_SESSION['media_consumo_kw_g'] = $cmkw;		 
		 


		
		echo"<script language='javascript' type='text/javascript'>alert('Dados Salvos Temporariamente !');window.location.href='..//../../../calculos/Gotejamento/ResultadosGotejador/resultados_gotejador.php';</script>";

    }		
	
        ?>