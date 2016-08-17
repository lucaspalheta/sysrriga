<?php
session_start();

		$ve = $_POST ["vazao_do_emissor"];
		$dm = $_POST ["diametro_molhado"];
		$pam = $_POST ["percentagem_de_area_molhada"];
		$nep = $_POST ["numero_de_emissores_por_planta"];
		$ia = $_POST ["intensidade_de_aplicacao"];
		$eee = $_POST ["espacamento_entre_emissores"];
		$ti = $_POST ["tempo_de_irrigacao"];
		$nms = $_POST ["numero_maximo_de_setores"];

      	/*Formatação de Números*/
        
		$ve = number_format($ve, 2, ',', ' '); 
        $dm = number_format($dm, 2, ',', ' '); 
        $pam = number_format($pam, 2, ',', ' ');
        $nep = number_format($nep, 2, ',', ' '); 
        $ia = number_format($ia, 2, ',', ' '); 
        $eee = number_format($eee, 2, ',', ' '); 
        $ti = number_format($ti, 2, ',', ' '); 
        $nms = number_format($nms, 2, ',', ' ');  		
     
	 
     if($ve == "" && $dm == "" && $pam == "" && $nep == "" && $ia == "" && $eee == "" && $ti == "" && $nms == "")
	 {
         echo"<script language='javascript' type='text/javascript'>alert('Por favor preencha o campos corretamente !');window.location.href='microaspersao.php';</script>";
	 }	
	 
     else{

        $_SESSION['ve'] = $ve;
	    $_SESSION['dm'] = $dm;
		$_SESSION['pam'] = $pam;
		$_SESSION['nep'] = $nep;
		$_SESSION['ia'] = $ia;
		$_SESSION['eee'] = $eee;
		$_SESSION['ti'] = $ti;
		$_SESSION['nms'] = $nms;
	   
        echo"<script language='javascript' type='text/javascript'>alert('Dados Salvos Temporariamente !');window.location.href='http://localhost:8080/LabWebII/Sysrriga/calculos/Microaspersao/Resultados/resultados.php';</script>";
	 
       	 }
        ?>
		
	