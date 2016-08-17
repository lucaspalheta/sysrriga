<?php
  session_start();

        $ca = $_POST ["Comprimento_area"];
		$e2 = $_POST ["e2"];
		$dlp = $_POST ["Declividade_da_Linha_Principal"];
		$nll = $_POST ["numero_linhas_laterais"];
		$qlp = $_POST ["vazaolp"];
		$v = $_POST ["Velocidade"];
        $cglp = $_POST ["Cg"];
		$diametro_nominal_lp = $_POST ["diametro_nominal"];
		
     if($ca == "" && $e2 == "" && $dlp  == "" && $nll == "" && $qlp == "" && $v == "" && $cglp == "" && $a == ""){
	 
	 	  echo"<script language='javascript' type='text/javascript'>alert('Preencha os campos corretamente !');window.location.href='..//./../../calculos/Aspersao/LinhaPrincipal/linha_principal.php';</script>";
      }
	  
	 else{ 
	 
	 $_SESSION['Comprimento_area_lp_a'] = $ca;
	 $_SESSION['Declivid_lp_a'] = $dlp;
	 $_SESSION['numero_linhas_laterais_lp_a'] = $nll;
	 $_SESSION['vazaolp_a'] = $qlp;
	 $_SESSION['Cg_lp_a'] = $cglp;
	 $_SESSION['diametro_nominal_lp_a'] = $diametro_nominal_lp;
		 
		 
	/* calculo do comprimento da LP */

        if ($ca != 0 && $e2 != 0){
		
            $clp = ($ca - $e2); 
					
         }
		 
		else {
            $clp= 0;
        }    

    /* calculo da diferença de nível da LP */
	
	   if ($dlp != 0 && $clp != 0){
            $dnlp = (($dlp / 100) * $clp);        
         }
		else {
            $dnlp = 0;
        }
		
    /* calculo F Linha da LP */
	
		if($nll!=0){
            $flp = ((1/(1.85+1))+(1/(2*$nll))+(sqrt(1.85-1)/(6*(pow($nll,2)))));    	
        }
		else {
            $flp = 0;
        }
	
	/* calculo do diametro calculado da LP */
	
	    if ($qlp != 0 && $v != 0)
            $dclp = (pow(((4 * $qlp) / (3.14 * $v)),0.5)*1000);        
         
		else {
            $dclp = 0;
        }
	
    /* calculo da perda de carga da LP */
	
	    if ($qlp != 0 && $cglp != 0 && $flp != 0 && $clp != 0 && $diametro_nominal_lp != 0){
		
            $pclp = (10.646 * pow(($qlp / $cglp),1.852) * ($clp) / pow((($diametro_nominal_lp / 1000)),4.87) * $flp);   
        }			
		else {
            $pclp = 0;
        }

	/* calaculo da perda de carga total da LP */
	
	    if ($pclp != 0 && $dnlp != 0){
            $pctlp = ($pclp + $dnlp);   
        }			
		else {
            $pctlp = 0;
        }
	
    /* calculo da velocidade de escoamento da LP */

        if ($qlp != 0 && $diametro_nominal_lp != 0){
		
            $ve = ((4 * $qlp) / pow((3.14 * ($diametro_nominal_lp / 1000)),2));      
  
         }
		 
		else {
            $ve = 0;
        }      
		
			
		/*Formatação de Números*/
		$clp = number_format($clp, 0, ',', ' ');
		$dnlp = number_format($dnlp, 2, ',', ' ');
		$flp = number_format($flp, 6, '.', ' ');
		$dclp = number_format($dclp, 0, ',', ' ');
		$pclp = number_format($pclp, 2, ',', ' ');
		$pctlp = number_format($pctlp, 2, ',', ' ');
		$ve = number_format($ve, 2, ',', ' ');
		
		
		
		 $_SESSION['comprimento_lp_a'] = $clp;
		 $_SESSION['diferenca_nivel_lp_a'] = $dnlp;
		 $_SESSION['f_lp_a'] = $flp;
		 $_SESSION['diametro_calculado_lp_a'] = $dclp;
		 $_SESSION['perda_carga_lp_a'] = $pclp;
		 $_SESSION['perda_carga_total_lp_a'] = $pctlp;
		 $_SESSION['velocidade_escoamento_lp_a'] = $ve;


		
		echo"<script language='javascript' type='text/javascript'>alert('Dados Salvos Temporariamente !');window.location.href='..//../../../calculos/Aspersao/Resultados/resultados_aspersao.php';</script>";

    }		
	
        ?>