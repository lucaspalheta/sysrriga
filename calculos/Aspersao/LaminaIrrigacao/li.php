<?php
  session_start();

     $irn = $_POST ["Irrigacao_Real_Necessaria"];
	 $ea = $_POST ["Eficiencia_de_aplicacao"];  
	 $etc = $_POST ["ETcloc"];	
     $dias = $_POST ["dias"];	 
		
     if($irn == "" && $ea == "" && $etc == "" && $dias == ""){
	 
	 	  echo"<script language='javascript' type='text/javascript'>alert('Preencha os campos corretamente !');window.location.href='..//../../../calculos/Aspersao/LaminaIrrigacao/lamina_irrigacao.php';</script>";
      }
	  
	 else{ 
	 
	 $_SESSION['Irrigacao_Real_Necessaria_a'] = $irn;
	 $_SESSION['Eficiencia_de_aplicacao_a'] = $ea;
	 $_SESSION['ETcloc_a'] = $etc;
	 $_SESSION['dias_a'] = $dias;
	 
	 
	/* calculo lamina bruta */ 
	
	    if ($irn != 0 && $ea != 0){
            $lbi = (($irn /($ea / 100)));        
         }
		 
		else {
            $lbi = 0;
        }      
		
	/* calculo turno de rega */
	
	    if($etc != 0){
		
            $tr = ($irn / $etc);
		}	
        else{
		
            $tr=0;
        }
		
    /* calculo periodo de irrigação */
	
	    if($tr != 0 && $dias != 0){
		
            $pi = ($tr-$dias);
		}	
        else{
		
            $pi=0;
        }
			
	
        /*Formatação de Números*/
        
	
		$lbi = number_format($lbi, 1, ',', ' ');
        $tr = number_format($tr, 1, ',', ' ');
		$pi = number_format($pi, 1, ',', ' ');
		
		
         $_SESSION['lamina_bruta_irrigacao_a'] = $lbi;	
         $_SESSION['turno_rega_irrigacao_a'] = $tr;
         $_SESSION['periodo_irrigacao_a'] = $pi;		 
		 


		
		echo"<script language='javascript' type='text/javascript'>alert('Dados Salvos Temporariamente !');window.location.href='..//../../../calculos/Aspersao/Resultados/resultados_aspersao.php';</script>";

    }		
	
        ?>