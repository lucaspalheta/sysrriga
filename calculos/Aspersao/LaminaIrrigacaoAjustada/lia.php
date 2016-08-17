<?php
  session_start();

    $etc = $_POST ["ETcloc"];
	$tra = $_POST ["Turno_de_Rega_Adotado"]; 
	$ea = $_POST ["Eficiencia_de_Aplicacao"];
		
     if($etc == "" && $tra == "" && $ea  == ""){
	 
	 	  echo"<script language='javascript' type='text/javascript'>alert('Preencha os campos corretamente !');window.location.href='..//../../../calculos/Aspersao/LaminaIrrigacaoAjustada/lamina_irrigacao_ajustada.php';</script>";
      }
	  
	 else{ 
	 
	 $_SESSION['ETcloc_ajustada_a'] = $etc;
	 $_SESSION['Turno_de_Rega_Adotado_ajustada_a'] = $tra;
	 $_SESSION['Eficiencia_de_Aplicacao_ajustada_a'] = $ea;
	 
	 
	 /* calculo lamina liquida ajustada */
	 
	    if($etc != 0 && $tra != 0){
            $lla = ($etc * $tra);
		}	
        else{
            $lla = 0;
        }
		
	/* calculo lamina bruta ajustada */
	
	    if($lla != 0 && $ea != 0){
            $lba = (($lla / ($ea / 100)));
		}	
        else{
            $lba = 0;
        }	

        /*Formatação de Números*/
        
	
		$lla = number_format($lla, 2, ',', ' ');
		$lba = number_format($lba, 2, ',', ' ');

         $_SESSION['lamina_liquida_ajustada_a'] = $lla;	
         $_SESSION['lamina_bruta_ajustada_a'] = $lba;			 
		 


		
		echo"<script language='javascript' type='text/javascript'>alert('Dados Salvos Temporariamente !');window.location.href='..//../../../calculos/Aspersao/Resultados/resultados_aspersao.php';</script>";

    }		
	
        ?>