<?php
  session_start();

    	$la = $_POST ["la"];
		$e1 = $_POST ["e1"];
		$d = $_POST ["Declivid"];
		$ntall = $_POST ["Numero_total"];
		$ps = $_POST ["ps"];
		$qll = $_POST ["vazaoll"];
		$cgll = $_POST ["Cg_da_Linha_Lateral"];
		$diametro_nominal_ll = $_POST ["diametro_nominal_ll"];
		$a = $_POST ["Aa"];

		
     if($la == "" && $e1 == "" && $d  == "" && $ntall == "" && $ps == "" && $qll == "" && $cgll == "" && $a == ""){
	 
	 	  echo"<script language='javascript' type='text/javascript'>alert('Preencha os campos corretamente !');window.location.href='..//../../../calculos/Aspersao/LinhaLateral/linha_lateral.php';</script>";
      }
	  
	 else{ 
	 
	 $_SESSION['Declivid_ll_a'] = $d;
	 $_SESSION['Numero_total_ll_a'] = $ntall;
	 $_SESSION['vazaoll_a'] = $qll;
	 $_SESSION['Cg_da_Linha_Lateral_a'] = $cgll;
	 $_SESSION['diametro_nominal_ll_a'] = $diametro_nominal_ll;
	 $_SESSION['altura_area_ll_a'] = $a;
	 
	 
	/* calculo do comprimento da linha lateral */
	    
		if ($la != 0 && $e1){
		
            $c = (($la / 2) - $e1); 		
	    }
		else { 
            $c = 0;
        }
		
	/* calculo da diferença de nível da ll */

        if ($d != 0 && $c){
		
            $dnll = (($d / 100) * $c); 		
	    }
		else { 
            $dnll = 0;
        }
		
	/* calculo da F da ll */
   
        if ($ntall != 0){
	       
		    $fll = ((1/(1.852+1))+(1/(2*$ntall))+(sqrt(1.852-1)/(6*(pow($ntall,2)))));  
		}   
		else {
            $fll = 0;
        }
		
	/* calculo do hf limite da ll */
   
        if ($ps != 0 && $dnll){
		
            $hf = (((20 * $ps) / 100) - $dnll); 		
	    }
		else { 
            $hf = 0;
        }
		
	/* calculo do diametro da linha lateral*/
		
		if ($cgll!=0){
		
            $dll = (pow(((10.646 * pow((($qll) / $cgll),1.852) * ($c * $fll) / $hf)),0.2053) * 1000); 		
	    }
		else { 
            $dll = 0;
        }
	
    /* calculo da perda de carga da ll */

        if ($qll != 0 && $cgll != 0 && $fll != 0 && $c != 0 && $diametro_nominal_ll != 0){
		
            $pcll = (10.646*pow(($qll/$cgll),1.85)*($fll * $c)/pow((($diametro_nominal_ll/1000)),4.87));        
		}	
		else {
            $pcll = 0;
        }
		
    /* calculo da pressão de Inicio */

        if ($ps != 0 && $a != 0 && $pcll != 0 && $dnll != 0){
            $pill = (($ps + $a) + ((75 * $pcll / 100)) + ((50 * $dnll) / 100)); 
					
         }
		 
		else {
            $pill = 0;
        }      

				
        /*Formatação de Números*/
        
		$c = number_format($c, 0, ',', ' ');
        $dnll = number_format($dnll, 2, ',', ' ');
        $fll = number_format($fll, 3, ',', ' '); 
        $hf = number_format($hf, 2, ',', ' ');	
        $dll = number_format($dll, 2, ',', ' ');
        $pcll = number_format($pcll, 2, ',', ' ');
        $pill = number_format($pill, 2, ',', ' ');		
		
         $_SESSION['comprimentoll_a'] = $c;
         $_SESSION['diferenca_nivelll_a'] = $dnll;		
         $_SESSION['fll_a'] = $fll;	
         $_SESSION['hfll_a'] = $hf;
         $_SESSION['diametroll_a'] = $dll;
         $_SESSION['perda_carga_ll_a'] = $pcll;		 
		 $_SESSION['pressao_servico_ll_a'] = $pill;


		
		echo"<script language='javascript' type='text/javascript'>alert('Dados Salvos Temporariamente !');window.location.href='..//../../../calculos/Aspersao/Resultados/resultados_aspersao.php';</script>";

    }		
	
        ?>