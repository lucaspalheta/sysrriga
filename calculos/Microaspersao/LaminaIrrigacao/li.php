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
		           
    
	   
     if($irn == "" && $ea == "" && $pas == "" && $pam == "" && $eto == "" && $kc == "" && $itn == "" && $sp == "" && $sf == ""){
	 
	 	  echo"<script language='javascript' type='text/javascript'>alert('Preencha os campos corretamente !');window.location.href='..//../../../calculos/Microaspersao/LaminaIrrigacao/lamina_irrigacao.php';</script>";
      }
	  
	 else{ 
	 
	 $_SESSION['Irrigacao_Real_Necessaria'] = $irn;
     $_SESSION['Eficiencia_de_aplicacao'] = $ea;
	 
	 $_SESSION['Area_Sombreada'] = $pas;
     $_SESSION['Porcentagem_de_Area_Molhada'] = $pam;
	 
	 $_SESSION['Evapotranspiracao_da_Cultura'] = $eto;
     $_SESSION['Coeficiente_de_Cultivo'] = $kc;
	 
	 $_SESSION['Irrigacao_Total_Necessaria'] = $itn;
	 $_SESSION['Espacamento_entre_Plantas'] = $sp;
     $_SESSION['Espacamento_entre_Fileiras'] = $sf;
	 
	 /*calculo da lamina brutade irrigação*/
	 
     if($irn != "" && $ea != "" && $irn != 0 && $ea != 0)
	 {
	     $lbi = (($irn /($ea / 100))); 
	 }
     else {
            $lbi = 0;
        }  
		

	 /*calculo da evapotranspiração localizada*/
	 
	 if($pas > $pam){
		
        $kl = (0.1*(pow($pas, 0.5)));
	 }
     else{
		
        $kl = (0.1*(pow($pam, 0.5)));
     }

	
	/*Calculo ETc loc*/ 
		 
        if($eto != 0 && $kc != 0){
		
           $etcloc = ($eto * $kc * $kl);
		}
        else{
		
            $etcloc = 0;
        }

		
	/*Calculo Turno de Rega*/
		
		if($etcloc != 0){
		
            $tr = ($irn  / $etcloc);
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
        
		     $lbi = number_format($lbi, 1, ',', ' ');
             $kl = number_format($kl, 2, ',', ' ');
			 $etcloc = number_format($etcloc, 2, ',', ' '); 
		     $tr = number_format($tr, 4, ',', ' ');
             $vp = number_format($vp, 2, ',', ' ');
			 
			 
	     $_SESSION['Lamina_Bruta_de_Irrigacao'] = $lbi;
		 $_SESSION['Evapotranspiracao_Localizada'] = $kl;
		 $_SESSION['etcloc'] = $etcloc;
		 $_SESSION['Turno_Rega'] = $tr;
         $_SESSION['Volume_de_Agua_por_Planta'] = $vp;	
		
		echo"<script language='javascript' type='text/javascript'>alert('Dados Salvos Temporariamente !');window.location.href='..//../../../calculos/Microaspersao/Resultados/resultados.php';</script>";

    }		
	
        ?>