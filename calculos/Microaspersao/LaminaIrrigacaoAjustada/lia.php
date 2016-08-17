<?php
session_start();
		$tra = $_POST ["Turno_de_Rega_Adotado"];
		$etc = $_POST ["ETcloc"];
		
		$ea = $_POST ["Eficiencia_de_Aplicacao"];

	   
     if($tra == "" && $etc == "" && $ea == "" || $tra == "" || $etc == "" || $ea == "")
	 { 
	     echo"<script language='javascript' type='text/javascript'>alert('Preencha os campos corretamente !');window.location.href='http://localhost:8080/LabWebII/Sysrriga/calculos/Microaspersao/LaminaIrrigacaoAjustada/lamina_irrigacao_ajustada.php';</script>";
      }	
     else{ 	 
     $_SESSION['tra'] = $tra;
     $_SESSION['etc'] = $etc;
	 $_SESSION['ea'] = $ea;
	 
     if($tra != "" && $etc != "" && $tra != 0 && $etc != 0)
	 {
            $lla = ($tra * $etc);
			
	 }		
     
	 else{
            $lla = 0;
     }
	 
	 $lla = number_format($lla, 1, ',', ' ');

     $_SESSION['lla'] = $lla;
     
	 if($ea != "" && $ea != 0)
	 {
	    $lba = (($_SESSION['lla'] / ($ea/100)));
		
	 }	
        else{
            $lba = 0;
	 }

	 $lba = number_format($lba, 1, ',', ' ');
		
     $_SESSION['lba'] = $lba;

     echo"<script language='javascript' type='text/javascript'>alert('Dados Salvos Temporariamente !');window.location.href='http://localhost:8080/LabWebII/Sysrriga/calculos/Microaspersao/Resultados/resultados.php';</script>";
	}
        ?>
		
	