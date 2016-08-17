<?php
  session_start();

        $etc = $_POST ["ETcloc"];
		$tra = $_POST ["Turno_de_Rega_Adotado"];
		$ea = $_POST ["Eficiencia_de_Aplicacao"];		
		
     if($etc == "" && $tra == "" && $ea == ""){
	 
	 	  echo"<script language='javascript' type='text/javascript'>alert('Preencha os campos corretamente !');window.location.href='..//../../../calculos/Gotejamento/LaminaIrrigacao/LaminaIrrigacaoAjustada.php';</script>";
      }
	  
	 else{ 
	 
	 $_SESSION['ETcloc2_g'] = $etc;
     $_SESSION['Turno_de_Rega_Adotado2_g'] = $tra;
	 $_SESSION['Eficiencia_de_Aplicacao2_g'] = $ea;
	 
 /* calculo da lamina liquida ajustada */
        if($etc != 0 && $tra != 0){
            $lla = ($etc * $tra);
	    }
        else{
            $lla = 0;
        }
		
 /* calculo da lamina bruta ajustada */		
	    if($lla != 0 && $ea != 0){
            $lba = (($lla / ($ea/100)));
		}	
        else{
            $lba = 0;
        }

		

        /*Formatação de Números*/
		
		$lla = number_format($lla, 1, ',', ' ');
		$lba = number_format($lba, 1, ',', ' ');
		
		
         $_SESSION['lamina_liquida_ajustada2_g'] = $lla;
		 $_SESSION['lamina_bruta_ajustada2_g'] = $lba;
		 
		
		echo"<script language='javascript' type='text/javascript'>alert('Dados Salvos Temporariamente !');window.location.href='..//../../../calculos/Gotejamento/ResultadosGotejador/resultados_gotejador.php';</script>";

    }		
	
        ?>