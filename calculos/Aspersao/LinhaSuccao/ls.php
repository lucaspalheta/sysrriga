<?php
  session_start();

	$qls = $_POST ["Vazao_da_Linha_de_Succao"];
	$vmls = $_POST ["Velocidade_Maxima_da_Linha_de_Succao"];
	$crls = $_POST ["Coeficiente_de_Rugosidade_da_Linha_Succao"];
	$cls = $_POST ["Comprimento_da_Linha_Succao"];
	$mls = $_POST ["materialls"];	
	$dnls = $_POST ["dn"];
		
     if($qls == "" && $vmls == "" && $crls  == "" && $cls == "" && $dnls == ""){
	 
	 	  echo"<script language='javascript' type='text/javascript'>alert('Preencha os campos corretamente !');window.location.href='..//../../../calculos/Aspersao/LinhaSuccao/linha_succao.php';</script>";
      }
	  
	 else{ 
	 
	 $_SESSION['Vazao_da_Linha_de_Succao_a'] = $qls;
	 $_SESSION['Velocidade_Maxima_da_Linha_de_Succao_a'] = $vmls;
	 $_SESSION['Coeficiente_de_Rugosidade_da_Linha_Succao_a'] = $crls;
	 $_SESSION['Comprimento_da_Linha_Succao_a'] = $cls;
	 $_SESSION['materialls_a'] = $mls;
	 $_SESSION['dnls_a'] = $dnls;

	 
	/* calculo do diametro calculado da LS */

	   if ($qls != 0 && $vmls != 0){
            $dcls = (pow(((4 * $qls) / (3.14 * $vmls)),0.5) * 1000);    
		}
        else {
            $dcls = 0;
        }
	
    /* calculo da perda de carga da LS */	
		
        if ($qls != 0 && $crls != 0 && $cls != 0 && $mls != 0){
            $pcls = (10.646 * pow(($qls / $crls),1.852) * ($cls) / pow((($mls / 1000)),4.87));
 		}         
		else {
            $pcls = 0;
        }

	/* calculo da perda de carga total da LS */		
	
        if ($pcls!= 0 && $dnls != 0){
            $pctls = ($pcls + $dnls); 
        } 
		else {
            $pctls = 0;
        }
			
	/* calculo da velocidade de escoamento da LS */

        if ($qls!= 0 && $mls != 0){
            $vels = ((4 * $qls) / pow((3.14 * ($mls / 1000)),2)); 
        } 
		else {
            $vels = 0;
        }
				
				/*Formatação de Números*/
        
		$dcls = number_format($dcls, 1, ',', ' ');
		$pcls = number_format($pcls, 1, ',', ' ');
		$pctls = number_format($pctls, 1, ',', ' ');
        $vels = number_format($vels, 2, ',', ' ');
		
	        $_SESSION['diametro_calculado_ls_a'] = $dcls;
 		    $_SESSION['perda_carga_ls_a'] = $pcls;
			$_SESSION['perda_carga_total_ls_a'] = $pctls;
			$_SESSION['velocidade_escoamento_ls_a'] = $vels;

		
		echo"<script language='javascript' type='text/javascript'>alert('Dados Salvos Temporariamente !');window.location.href='..//../../../calculos/Aspersao/Resultados/resultados_aspersao.php';</script>";

    }		
	
        ?>