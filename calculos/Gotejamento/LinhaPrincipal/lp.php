<?php
  session_start();

     	$qld = $_POST ["vazaold"];
        $nld = $_POST ["numerold"];
		
		$ca = $_POST ["ComprimentoA"];
        $dna = $_POST ["direnca_nivel_a"];
		
        $vmlp = $_POST ["Velocidade_Maxima_da_Linha_Principal"];
		
        $crlp = $_POST ["Coeficiente_de_Rugosidade_da_Linha_Principal"];
		$clp = $_POST ["Comprimento"];
        $mlp = $_POST ["materiallp"];

		
     if($qld == "" && $nld == "" && $ca == "" && $dna == "" && $vmlp == "" && $crlp == "" && $clp == ""){
	 
	 	  echo"<script language='javascript' type='text/javascript'>alert('Preencha os campos corretamente !');window.location.href='..//../../../calculos/Gotejamento/LinhaDerivacao/linha_derivacao.php';</script>";
      }
	  
	 else{ 
	 
	 $_SESSION['numerold_g'] = $nld;
	 $_SESSION['ComprimentoA_g'] = $ca;
	 $_SESSION['direnca_nivel_a_g'] = $dna;
	 $_SESSION['Velocidade_Maxima_da_Linha_Principal_g'] = $vmlp;
	 $_SESSION['Coeficiente_de_Rugosidade_da_Linha_Principal_g'] = $crlp;
	 $_SESSION['Comprimento_da_Linha_Principal_g'] = $clp;
	 $_SESSION['materiallp_g'] = $mlp;
	
	/* calculo da vazão da linha principal */
	    
		if ($qld != 0 && $nld != 0){
            $qlp = ($qld*$nld);        
        } 
		else {
            $qlp = 0;
        }
	/* calculo da diferença de nivel da linha principal */
	
		if ($ca != 0 && $dna != 0){
            $dnlp = (($ca/2) * ($dna/100));        
        }
		else {
            $dnlp = 0;
        }
		
    /* calculo do diametro calculado da linha principal */
	
	    if ($qlp != 0 && $vmlp != 0){
            $dclp = (pow(((4*$qlp)/(3.14*$vmlp)),0.5)*1000);       
        }
		else {
            $dclp = 0;
        }

	/* calculo da perda de carga da linha principal */
	
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
		
		 $_SESSION['vazao_linha_principal_g'] = $qlp;
		 $_SESSION['diferenca_nivel_linha_principal_g'] = $dnlp;
		 $_SESSION['diametro_calculado_linha_principal_g'] = $dclp;
		 $_SESSION['perda_carga_linha_principal_g'] = $pclp;
		 
 
		
		echo"<script language='javascript' type='text/javascript'>alert('Dados Salvos Temporariamente !');window.location.href='..//../../../calculos/Gotejamento/ResultadosGotejador/resultados_gotejador.php';</script>";

    }		
	
        ?>