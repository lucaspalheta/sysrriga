<?php
  session_start();

	$qlr = $_POST ["Vazao_da_Linha_de_Recalque"];
	$vmlr = $_POST ["Velocidade_Maxima_da_Linha_de_Recalque"];		

	$crlr = $_POST ["Coeficiente_de_Rugosidade_da_Linha_de_Recalque"];
	$clr = $_POST ["Comprimento_da_Linha_de_Recalque"];
	$mlr = $_POST ["materiallr"];	
		           
	   
     if($qlr == "" && $vmlr == "" && $crlr == "" && $clr == ""){
	 
	 	  echo"<script language='javascript' type='text/javascript'>alert('Preencha os campos corretamente !');window.location.href='..//../../../calculos/Microaspersao/LinhaRecalque/linha_recalque.php';</script>";
      }
	  
	 else{ 
	 
	 $_SESSION['Vazao_da_Linha_de_Recalque'] = $qlr;
	 $_SESSION['Velocidade_Maxima_da_Linha_de_Recalque'] = $vmlr;
	 $_SESSION['Coeficiente_de_Rugosidade_da_Linha_de_Recalque'] = $crlr;
	 $_SESSION['Comprimento_da_Linha_de_Recalque'] = $clr;
	 $_SESSION['materiall'] = $mlr;



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

		
			
		 $_SESSION['diametro_calculado_lr'] = $dclr;
		 $_SESSION['perda_carga_lr'] = $pclr;


		
		echo"<script language='javascript' type='text/javascript'>alert('Dados Salvos Temporariamente !');window.location.href='..//../../../calculos/Microaspersao/Resultados/resultados.php';</script>";

    }		
	
        ?>