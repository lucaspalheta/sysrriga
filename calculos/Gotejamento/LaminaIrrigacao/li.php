<?php
  session_start();

		$irn = $_POST ["Irrigacao_Real_Necessaria"];
		$ea = $_POST ["Eficiencia_de_aplicacao"]; 
       
	    $pas = $_POST ["Area_Sombreada"];
		$pam = $_POST ["Porcentagem_de_Area_Molhada"];

        $eto = $_POST ["Evapotranspiracao_da_Cultura"];
		$kc = $_POST ["Coeficiente_de_Cultivo"];		
	   
	    $itn = $_POST ["Irrigacao_Total_Necessaria"];
		$sp = $_POST ["Espacamento_entre_Plantas"];
        $sf = $_POST ["Espacamento_entre_Fileiras"];
		
     if($irn == "" && $ea == "" && $pas == "" && $eto == "" && $kc == "" && $itn == "" && $sp == "" && $sf == ""){
	 
	 	  echo"<script language='javascript' type='text/javascript'>alert('Preencha os campos corretamente !');window.location.href='..//../../../calculos/Gotejamento/LaminaIrrigacao/lamina_irrigacao.php';</script>";
      }
	  
	 else{ 
	 
	 $_SESSION['Irrigacao_Real_Necessaria_g'] = $irn;
	 $_SESSION['Eficiencia_de_aplicacao_g'] = $ea;
	 $_SESSION['Area_Sombreada_g'] = $pas;
	 $_SESSION['Porcentagem_de_Area_Molhada_g'] = $pam;
	 $_SESSION['Evapotranspiracao_da_Cultura_g'] = $eto;
	 $_SESSION['Coeficiente_de_Cultivo_g'] = $kc;
	 $_SESSION['Irrigacao_Total_Necessaria_g'] = $itn;
	 $_SESSION['Espacamento_entre_Plantas_g'] = $sp;
	 $_SESSION['Espacamento_entre_Fileiras_g'] = $sf;
	 

    /* calculo da lâmina bruta de irrigação */
        
		if ($irn != 0 && $ea != 0){
            $lbi = (($irn /($ea / 100)));        
         }
		 
		else {
            $lbi = 0;
        }      
		
	/* Calculo Evapotranspiração Localizada */
	
	   if($pas > $pam){
        $kl = (0.1*(pow($pas, 0.5)));
		}
        else{
		
            $kl = (0.1*(pow($pam, 0.5)));
        }
		
    /* Calculo ETc loc */
	 
	    if($eto != 0 && $kc != 0 && $kl != 0){
		
        $etcloc = ($eto * $kc* $kl);
		}
        else{
		
            $etcloc = 0;
        }
	
    /*Turno de Rega*/
		  
        if($etcloc != 0){
		
            $tr = ($irn / $etcloc);
		}	
        else{
		
            $tr=0;
        }
	
    /*Volume de Agua por Planta*/
	 
        if($itn != 0){
            $vp = ($itn * $sp * $sf);
		}	
        else{
            $vp = 0;
        }
		
			

        /*Formatação de Números*/
        
	
		$lbi = number_format($lbi, 1, ',', ' ');
		$kl = number_format($kl, 2, ',', ' ');
		$etcloc = number_format($etcloc, 2, ',', ' ');
		$tr = number_format($tr, 1, ',', ' ');
        $vp = number_format($vp, 2, ',', ' ');		
		
		
		
         $_SESSION['lamina_bruta_irrigacao_g'] = $lbi;
         $_SESSION['evapotranspiracao_localizada_g'] = $kl;
         $_SESSION['etcloc_g'] = $etcloc;
         $_SESSION['turno_rega_g'] = $tr;	
         $_SESSION['volume_agua_planta_g'] = $vp;			 
		 


		
		echo"<script language='javascript' type='text/javascript'>alert('Dados Salvos Temporariamente !');window.location.href='..//../../../calculos/Gotejamento/ResultadosGotejador/resultados_gotejador.php';</script>";

    }		
	
        ?>