<?php
  session_start();

     $qls = $_POST ["Vazao_da_Linha_de_Succao"];
	 $vmls = $_POST ["Velocidade_Maxima_da_Linha_de_Succao"];
	 $crls = $_POST ["Coeficiente_de_Rugosidade_da_Linha_Succao"];
	 $cls = $_POST ["Comprimento_da_Linha_Succao"];
	 $mls = $_POST ["materialls"];
		           
	   
     if($qls == "" && $vmls == "" && $crls == "" && $cls == ""){
	 
	 	  echo"<script language='javascript' type='text/javascript'>alert('Preencha os campos corretamente !');window.location.href='http://localhost:8080/LabWebII/Sysrriga/calculos/Microaspersao/LinhaSuccao/linha_succao.php';</script>";
      }
	  
	 else{ 
	 
	 $_SESSION['Vazao_da_Linha_de_Succao'] = $qls;
	 $_SESSION['Velocidade_Maxima_da_Linha_de_Succao'] = $vmls;
	 $_SESSION['Coeficiente_de_Rugosidade_da_Linha_Succao'] = $crls;
	 $_SESSION['Comprimento_da_Linha_Succao'] = $cls;
	 $_SESSION['materialls'] = $mls;

    /* calculo do diametro calculado da linha de sucção */

        if ($qls != 0 && $vmls != 0){
            $dcls = (pow(((4 * $qls) / (3.14 * $vmls)),0.5) * 1000);    
		
        } 
		else {
            $dcls = 0;
        }
				
    /* calculo da perda de carga da linha de sucção */
	
	    if ($qls != 0 && $crls != 0 && $cls != 0 && $mls != 0){
            $pcls = (10.646 * pow(($qls / $crls),1.85)*($cls) / pow((($mls/1000)),4.87));  	
        }
         
		else {
            $pcls = 0;
        }
				

				
		/*Formatação de Números*/
        
		
				
		/*Formatação de Números*/
        
		$dcls = number_format($dcls, 1, ',', ' ');	
        $pcls = number_format($pcls, 1, ',', ' ');

		
		 $_SESSION['diametro_calculado_ls'] = $dcls;
		 $_SESSION['perda_carga_ls'] = $pcls;
		 


		
		echo"<script language='javascript' type='text/javascript'>alert('Dados Salvos Temporariamente !');window.location.href='http://localhost:8080/LabWebII/Sysrriga/calculos/Microaspersao/Resultados/resultados.php';</script>";

    }		
	
        ?>