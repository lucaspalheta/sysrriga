<?php
  session_start();

    	$qlr = $_POST ["Vazao_da_Linha_de_Recalque"];
		$vmlr = $_POST ["Velocidade_Maxima_da_Linha_de_Recalque"];

		$crlr = $_POST ["Coeficiente_de_Rugosidade_da_Linha_de_Recalque"];
		$clr = $_POST ["Comprimento_da_Linha_de_Recalque"];
		$mlr = $_POST ["materiallr"];		
		
     if($qlr == "" && $vmlr == "" && $crlr == "" && $clr == ""){
	 
	 	  echo"<script language='javascript' type='text/javascript'>alert('Preencha os campos corretamente !');window.location.href='..//../../../calculos/Gotejamento/LinhaRecalque/linha_recalque.php';</script>";
      }
	  
	 else{ 
	 
	 $_SESSION['Vazao_da_Linha_de_Recalque_g'] = $qlr;
	 $_SESSION['Velocidade_Maxima_da_Linha_de_Recalque_g'] = $vmlr;
	 $_SESSION['Coeficiente_de_Rugosidade_da_Linha_de_Recalque_g'] = $crlr;
	 $_SESSION['Comprimento_da_Linha_de_Recalque_g'] = $clr;
	 $_SESSION['materiallr_g'] = $mlr;

	 
	/* calculo do diametro calculado da linha de recalque */
       
        if ($qlr != 0 && $vmlr != 0){
            $dclr = (pow(((4 * $qlr) / (3.14 * $vmlr)),0.5) * 1000);        
        } 
		else {
            $dclr = 0;
        }
				
    /* calculo da perda de carga da linha de recalque */
	
	    if ($qlr != 0 && $crlr != 0 && $clr != 0 && $mlr != 0){
            $pclr = (10.646 * pow(($qlr / $crlr),1.85)*($clr) / pow((($mlr/1000)),4.87));  		
        }
		else {
            $pclr = 0;
        }
				

		/*Formatação de Números*/
        
		$dclr = number_format($dclr, 1, ',', ' ');
		$pclr = number_format($pclr, 1, ',', ' ');
	   
   
		 $_SESSION['diametro_calculado_linha_recalque_g'] = $dclr;
		 $_SESSION['perda_carga_linha_recalque_g'] = $pclr;
		 
		
		echo"<script language='javascript' type='text/javascript'>alert('Dados Salvos Temporariamente !');window.location.href='..//../../../calculos/Gotejamento/ResultadosGotejador/resultados_gotejador.php';</script>";

    }		
	
        ?>