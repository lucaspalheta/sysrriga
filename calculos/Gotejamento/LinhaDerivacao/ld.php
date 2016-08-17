<?php
  session_start();

     	$qll = $_POST ["vazaoll"];
		$nsld = $_POST ["numero_s_ld"];
		
		$c = $_POST ["Comprimento"];
        $dnlp = $_POST ["direnca_nivel_lp"];
		
		$hf = $_POST ["hf_Admissivel"];
		$mPs = $_POST ["microaspersor_pressao_de_servico"];
		
		$cgld = $_POST ["Cg_da_Linha_de_Derivacao"];
		
		$dnld = $_POST ["diametro_nivel_ld"];
		
		$pill = $_POST ["Pressao_de_Inicio_da_Linha_Lateral"];
		
     if($qll == "" && $nsld == "" && $c == "" && $dnlp == "" && $hf == "" && $mPs == "" && $cgld == "" && $pill == ""){
	 
	 	  echo"<script language='javascript' type='text/javascript'>alert('Preencha os campos corretamente !');window.location.href='..//../../../calculos/Gotejamento/LinhaDerivacao/linha_derivacao.php';</script>";
      }
	  
	 else{ 
	 
	 $_SESSION['numero_s_ld_g'] = $nsld;
	 $_SESSION['Comprimento_ld_g'] = $c;
	 $_SESSION['direnca_nivel_lp_ld_g'] = $dnlp;
     $_SESSION['hf_Admissivel_ld_g'] = $hf;
	 $_SESSION['microaspersor_pressao_de_servico_ld_g'] = $mPs;
	 $_SESSION['Cg_da_Linha_de_Derivacao_g'] = $cgld;
	 $_SESSION['diametro_nivel_ld_g'] = $dnld;

	 
    /* calculo da vazão da linha de derivação */

	    if ($qll != 0){
            $qld = (($qll * $nsld * 2) / 1000); 
        }			
		else {
            $qld = 0;
        }
	/* calculo da diferença de nível da linha derivação */
	
		if ($c != 0 && $dnlp != 0){
            $diferencanld = (($c * $dnlp) / 100);        
        } 
		else {
            $diferencanld = 0;
        }				
	
    /* calculo da F Linha de Derivação*/
	
		if($nsld!=0){
            $FLD = ((1/(1.85+1))+(1/(2*$nsld))+(sqrt(1.85-1)/(6*(pow($nsld,2)))));        
        }
		else {
            $FLD = 0;
        }
		
	/*HF Admissivel da Linha de Derivacao*/
		
		if ($mPs != 0){
            $hfadmld =($hf * $mPs);       
        }
		else {
            $hfadmld = 0;
        }
		
	/*Diametro da Linha de Derivação*/
		
		if ($cgld!=0){
		
            $dld = (pow((10.646 * pow((($qld) / $cgld),1.85) * ($c) / ($hfadmld / $FLD)),0.205) * 1000);   
	    }
		else { 
            $dld = 0;
        }
		
	/* calculo da perda de carga da linha de derivação */
 	
	    if ($qld != 0 && $cgld != 0 && $FLD != 0 && $c != 0 && $dnld != 0){
            $pcld = (10.646 * pow(($qld / $cgld),1.85) * ($FLD * $c) / pow((($dnld / 1000)),4.87));        
		}	
		else {
            $pcld = 0;
        }
	
    /*Pressao de Inicio da Linha de Derivacao*/

        if ($pill != 0 && $pcld != 0 && $diferencanld != 0){
            $pild = ($pill + $pcld + $diferencanld);        
         }
		 
		else {
            $pild = 0;
        }      

		
        /*Formatação de Números*/
        
		$qld = number_format($qld, 5, ',', ' ');
		$diferencanld = number_format($diferencanld, 2, ',', ' ');
		$FLD = number_format($FLD, 6, '.', ' ');
		$hfadmld = number_format($hfadmld, 1, ',', ' ');
		$dld = number_format($dld, 2, ',', ' ');
		$pcld = number_format($pcld, 4, ',', ' ');	
		$pild = number_format($pild, 2, ',', ' ');	
	
		
		 $_SESSION['vazao_linha_derivacao_g'] = $qld;
		 $_SESSION['diferenca_nivel_linha_derivacao_g'] = $diferencanld;
		 $_SESSION['f_linha_derivacao_g'] = $FLD;
		 $_SESSION['hfadm_linha_derivacao_g'] = $hfadmld;
		 $_SESSION['diametro_linha_derivacao_g'] = $dld;
		 $_SESSION['perda_carga_linha_derivacao_g'] = $pcld;
		 $_SESSION['pressao_inicio_linha_derivacao_g'] = $pild;

		 
		
		echo"<script language='javascript' type='text/javascript'>alert('Dados Salvos Temporariamente !');window.location.href='..//../../../calculos/Gotejamento/ResultadosGotejador/resultados_gotejador.php';</script>";

    }		
	
        ?>