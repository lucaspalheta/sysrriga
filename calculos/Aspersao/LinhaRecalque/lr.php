<?php
  session_start();

		$qlr = $_POST ["Vazao_da_Linha_de_Recalque"];
		$vmlr = $_POST ["Velocidade_Maxima_da_Linha_de_Recalque"];
		$crlr = $_POST ["Coeficiente_de_Rugosidade_da_Linha_de_Recalque"];
		$clr = $_POST ["Comprimento_da_Linha_de_Recalque"];
		$mlr = $_POST ["materiallr"];
		$dnlr = $_POST ["dn"];
		
		
     if($qlr == "" && $vmlr == "" && $crlr  == "" && $clr == "" && $dnlr == ""){
	 
	 	  echo"<script language='javascript' type='text/javascript'>alert('Preencha os campos corretamente !');window.location.href='..//../../../calculos/Aspersao/LinhaRecalque/linha_recalque.php';</script>";
      }
	  
	 else{ 
	 
	 $_SESSION['Vazao_da_Linha_de_Recalque_a'] = $qlr;
	 $_SESSION['Velocidade_Maxima_da_Linha_de_Recalque_a'] = $vmlr;
	 $_SESSION['Coeficiente_de_Rugosidade_da_Linha_de_Recalque_a'] = $crlr;
	 $_SESSION['Comprimento_da_Linha_de_Recalque_a'] = $clr;
	 $_SESSION['materiallr_a'] = $mlr;
	 $_SESSION['dnlr_a'] = $dnlr;
	 
	/* calculo do diametro calculado da LR */

        if ($qlr != 0 && $vmlr != 0){
            $dclr = (pow(((4 * $qlr) / (3.14 * $vmlr)),0.5) * 1000); 
        } 
		else {
            $dclr = 0;
        }
	
    /* calculo da perda de carga da LR */	
		
        if ($qlr != 0 && $crlr != 0 && $clr != 0 && $mlr != 0){
            $pclr = (10.646 * pow(($qlr / $crlr),1.852)*($clr) / pow((($mlr/1000)),4.87)); 
        }
		else {
            $pclr = 0;
        }

	/* calculo da perda de carga total da LR */		
	
	    if ($pclr!= 0 && $dnlr != 0)
            $pctlr = ($pclr + $dnlr); 
         
		else {
            $pctlr = 0;
        }
			
	/* calculo da velocidade de escoamento da LR */

        if ($qlr!= 0 && $mlr != 0){
            $velr = ((4 * $qlr) / pow((3.14 * ($mlr / 1000)),2)); 
        }
		else {
            $velr = 0;
        }
				

		/*Formatação de Números*/
        
		$dclr = number_format($dclr, 1, ',', ' ');
        $pclr = number_format($pclr, 1, ',', ' ');
        $pctlr = number_format($pctlr, 1, ',', ' ');
        $velr = number_format($velr, 2, ',', ' ');			

         $_SESSION['diametro_calculado_lr_a'] = $dclr;
         $_SESSION['perda_carga_lr_a'] = $pclr;
         $_SESSION['perda_carga_total_lr_a'] = $pctlr;
         $_SESSION['velocidade_escoamento_lr_a'] = $velr;		 
		 


		
		echo"<script language='javascript' type='text/javascript'>alert('Dados Salvos Temporariamente !');window.location.href='..//../../../calculos/Aspersao/Resultados/resultados_aspersao.php';</script>";

    }		
	
        ?>