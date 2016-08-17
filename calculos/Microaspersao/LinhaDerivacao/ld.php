<?php
  session_start();

		$qll = $_POST ["vazao_l_l"];
		$nsld = $_POST ["numero_s_ld"];
		
		$c = $_POST ["Comprimento"];
        $dnlp = $_POST ["direnca_nivel_lp"];
		
		$mPs = $_POST ["microaspersor_pressao_de_servico"];
		
		$cgld = $_POST ["Cg_da_Linha_de_Derivacao"];
		
		$dnld = $_POST ["diametro_nivel_ld"];
		
		$pill = $_POST ["Pressao_de_Inicio_da_Linha_Lateral"];
				
		           
	   
     if($qll == "" && $nsld  == "" && $c  == "" && $dnlp  == "" && $mPs == "" && $cgld == "" && $dnld == ""){
	 
	 	  echo"<script language='javascript' type='text/javascript'>alert('Preencha os campos corretamente !');window.location.href='http://localhost:8080/LabWebII/Sysrriga/calculos/Microaspersao/LinhaDerivacao/linha_derivacao.php';</script>";
      }
	  
	 else{ 
	 
	 $_SESSION['vazao_l_l'] = $qll;
	 $_SESSION['numero_s_ld'] = $nsld;
	 $_SESSION['Comprimento'] = $c;
	 $_SESSION['direnca_nivel_lp'] = $dnlp;
	 $_SESSION['microaspersor_pressao_de_servico'] = $mPs;
	 $_SESSION['Cg_da_Linha_de_Derivacao'] = $cgld;
	 $_SESSION['diametro_nivel_ld'] = $dnld;



	 
	 /*calculo da vazaão da linha derivação*/
	 
	    if ($qll != 0 && $nsld!= 0){
            $qld = (($qll * $nsld * 2) / 1000);        
        } 
		else {
            $qld = 0;
        }
	
    /*calculo da diferença de nivel da linha de derivação*/

        if ($c != 0 && $dnlp != 0){
            $diferencan_ld = (($c * $dnlp) / 100);        
        }
		else {
            $diferencan_ld = 0;
        }
		
	/*F Linha de Derivação*/
	
		if($nsld!=0){
            $FLD = ((1/(1.85+1))+(1/(2*$nsld))+(sqrt(1.85-1)/(6*(pow($nsld,2)))));        
        }
		else {
            $FLD = 0;
        }
		
	/*HF Admissivel da Linha de Derivacao*/
		
		if ($mPs != 0){
            $hfadmld =(0.1*$mPs);       
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
	
	/* perda de carga da linha de derivação */
	
		if ($cgld != 0 && $FLD != 0 && $c != 0 && $dnld != 0){
            $pcld = (10.646*pow(($qld/$cgld),1.85)*($FLD * $c)/pow((($dnld/1000)),4.87));        
        } 
		else {
            $pcld = 0;
        }
		
	/*Pressao de Inicio da Linha de Derivacao*/

        if ($pill != 0 && $pcld != 0 && $diferencan_ld != 0){
            $pild = ($pill + $pcld + $diferencan_ld);        
         }
		 
		else {
            $pild = 0;
        }      
		
		

		

        /*Formatação de Números*/
        
		$qld = number_format($qld, 4, ',', ' ');
		$diferencan_ld = number_format($diferencan_ld, 2, ',', ' ');
		$FLD = number_format($FLD, 6, '.', ' ');
        $hfadmld = number_format($hfadmld, 4, ',', ' ');
        $dld = number_format($dld, 2, ',', ' ');	
        $pcld = number_format($pcld, 1, ',', ' ');	
        $pild = number_format($pild, 1, ',', ' ');			


			 
			
		 $_SESSION['vazaold'] = $qld;
		 $_SESSION['diferenca_nivel_linha_derivacao'] = $diferencan_ld;
		 $_SESSION['f_linha_derivacao'] = $FLD;
		 $_SESSION['hf_linha_derivacao'] = $hfadmld;
		 $_SESSION['diametro_linha_derivacao'] = $dld;
		 $_SESSION['perda_carga_linha_derivacao'] = $pcld;
		 $_SESSION['pressao_inicio_linha_derivacao'] = $pild;

		
		echo"<script language='javascript' type='text/javascript'>alert('Dados Salvos Temporariamente !');window.location.href='http://localhost:8080/LabWebII/Sysrriga/calculos/Microaspersao/Resultados/resultados.php';</script>";

    }		
	
        ?>