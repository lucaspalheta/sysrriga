<?php
  session_start();

     $qld = $_POST ["vazao_linha_derivacao"];
	 $nld = $_POST ["numerold"];
	 
	 $ca = $_POST ["Comprimento"];
     $dna = $_POST ["direnca_nivel_a"];
	 
	 $vmlp = $_POST ["Velocidade_Maxima_da_Linha_Principal"];
	 
	 $crlp = $_POST ["Coeficiente_de_Rugosidade_da_Linha_Principal"];
	 $clp = $_POST ["Comprimento_da_Linha_Principal"];
     $mlp = $_POST ["materiallp"];
		           
    
	   
     if($qld == "" && $nld == "" && $ca == "" && $dna == "" && $vmlp == "" && $crlp == "" && $clp == ""){
	 
	 	  echo"<script language='javascript' type='text/javascript'>alert('Preencha os campos corretamente !');window.location.href='http://localhost:8080/LabWebII/Sysrriga/calculos/Microaspersao/LinhaPrincipal/linha_principal.php';</script>";
      }
	  
	 else{ 
	 
	 $_SESSION['numerold'] = $nld;
	 $_SESSION['Comprimento_a'] = $ca;
	 $_SESSION['direnca_nivel_a'] = $dna;
	 $_SESSION['Velocidade_Maxima_da_Linha_Principal'] = $vmlp;
	 $_SESSION['Coeficiente_de_Rugosidade_da_Linha_Principal'] = $crlp;
	 $_SESSION['Comprimento_da_Linha_Principal'] = $clp;
	 $_SESSION['materiallp'] = $mlp;
	 
	 

	 
	 /* calculo vazão da linha principal */
	 
        if ($qld != 0 && $nld != 0){
            $qlp = ($qld * $nld);        
        } 
		else {
            $qlp = 0;
        }
		
	/* Calculo Diferença de Nível da Linha Principal */

	   if ($ca != 0 && $dna != 0){
            $dnlp = (($ca/2) * ($dna/100));        
         }
		else {
            $dnlp = 0;
        }
	
	/* Diâmetro Calculado da Linha Principal */
	
	   if ($qlp != 0 && $vmlp != 0){
            $dclp = (pow(((4*$qlp)/(3.14*$vmlp)),0.5)*1000);        
        } 
		else {
            $dclp = 0;
        }
	/* Calculo Perda de Carga da Linha Principal */

        if ($qlp != 0 && $crlp != 0 && $clp != 0 && $mlp != 0){
            $pclp = (10.646 * pow(($qlp / $crlp),1.85)*($clp) / pow((($mlp/1000)),4.87));        
         }
		else {
            $pclp = 0;
        }	
	
        /*Formatação de Números*/
        
		$qlp = number_format($qlp, 4, ',', ' ');
		$dnlp = number_format($dnlp, 2, ',', ' ');
		$dclp = number_format($dclp, 1, ',', ' ');
        $pclp = number_format($pclp, 1, ',', ' ');

			 
			 
	     $_SESSION['vazao_linha_principal'] = $qlp;
		 $_SESSION['diferenca_nivel_linha_principal'] = $dnlp;
		 $_SESSION['diametro_calculado_linha_principal'] = $dclp;
		 $_SESSION['perda_carga_linha_principal'] = $pclp;

		
		echo"<script language='javascript' type='text/javascript'>alert('Dados Salvos Temporariamente !');window.location.href='http://localhost:8080/LabWebII/Sysrriga/calculos/Microaspersao/Resultados/resultados.php';</script>";

    }		
	
        ?>