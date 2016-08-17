<?php
  session_start();

		$vazaoPorLL = $_POST ["vazaoll"];
		$ngll = $_POST ["Numero_de_gotejadores_por_Linha_Lateral"];
		
		$cgll = $_POST ["Cg_da_Linha_Lateral"];
        $cll = $_POST ["Comprimento_da_Linha_Lateral"];
		$hfadmll = $_POST ["HF_Admissivel_da_Linha_Lateral"];
		
		$dnll= $_POST ["diametro_nominal_ll"];
		
		$ps = $_POST ["Pressao_de_Servico"];  
		$diferencanll = $_POST ["Diferenca_de_Nivel_da_Linha_Lateral"];
		           
	   
     if($vazaoPorLL  == "" && $ngll == "" && $cgll  == "" && $cll == "" && $hfadmll == "" && $ps == "" && $diferencanll == ""){
	 
	 	  echo"<script language='javascript' type='text/javascript'>alert('Preencha os campos corretamente !');window.location.href='http://localhost:8080/LabWebII/Sysrriga/calculos/Microaspersao/LinhaLateral/linha_lateral.php';</script>";
      }
	  
	 else{ 
	 
	 $_SESSION['vazaoll'] = $vazaoPorLL;
	 $_SESSION['Numero_de_gotejadores_por_Linha_Lateral'] = $ngll;
	 
	 $_SESSION['Cg_da_Linha_Lateral'] = $cgll;
	 $_SESSION['Comprimento_da_Linha_Lateral'] = $cll;
	 $_SESSION['HF_Admissivel_da_Linha_Lateral'] = $hfadmll;
	 
	 $_SESSION['diametro_nominal_ll'] = $dnll;
	 
	 $_SESSION['Pressao_de_Servico'] = $ps;
	 $_SESSION['Diferenca_de_Nivel_da_Linha_Lateral'] = $diferencanll;


	 
	 /*calculo da vazaão da linha lateral*/
	 
		if ($vazaoPorLL != 0)
            $qll = ($vazaoPorLL / 1000);        
		else {
            $qll = 0;
        }
		
	/*calculo da f da linha lateral*/
        
        if ($ngll != 0){
	       
		    $fll = ((1/(1.85+1))+(1/(2*$ngll))+(sqrt(1.85-1)/(6*(pow($ngll,2)))));  
		 }  
		else {
            $fll = 0;
        }
		
	/*Diâmetro da Linha Lateral*/	
       
	    if ($cgll!=0){
		
            $dll = (pow((10.646 * pow((($qll) / $cgll),1.85) * ($cll) / ($hfadmll / $fll)),0.205) * 1000); 		
        }
		else { 
            $dll = 0;
        }
	
    /*perda de carga da linha lateral*/	
 
        if ($qll != 0 && $cgll != 0 && $fll != 0 && $cll != 0 && $dnll != 0){
            $pcll = (10.646*pow(($qll/$cgll),1.85)*($fll * $cll)/pow((($dnll/1000)),4.87));        
		}	
		else {
            $pcll = 0;
        }
		
	/*Pressão de Início da Linha Lateral*/

        if ($pcll != 0 && $ps != 0 && $diferencanll != 0){
            $pill = ($pcll + $ps + $diferencanll);        
         }
		 
		else {
            $pill = 0;
        }      

		
        /*Formatação de Números*/
        
		    $qll = number_format($qll, 5, ',', ' ');
			$fll = number_format($fll, 3, ',', ' ');
			$dll = number_format($dll, 2, ',', ' ');
			$pcll = number_format($pcll, 1, ',', ' ');
			$pill = number_format($pill, 1, ',', ' ');	

			 
			 
	     $_SESSION['vazao_linha_lateral'] = $qll;
		 $_SESSION['f_linha_lateral'] = $fll;
		 $_SESSION['diametro_linha_lateral'] = $dll;
		 $_SESSION['perda_carga_linha_lateral'] = $pcll;
		 $_SESSION['pressao_inicio_linha_lateral'] = $pill;

		
		echo"<script language='javascript' type='text/javascript'>alert('Dados Salvos Temporariamente !');window.location.href='http://localhost:8080/LabWebII/Sysrriga/calculos/Microaspersao/Resultados/resultados.php';</script>";

    }		
	
        ?>