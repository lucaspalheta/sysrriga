<?php
session_start();

		$nome = $_POST ["name"];
		$marca = $_POST ["Marca"];
		$as_ps = $_POST ["Pressao_de_Servico"];
		$q = $_POST ["Vazao"];
		$cd = $_POST ["Coeficiente_de_descarga"];
		$ab = $_POST ["Area_dos_bocais"];
		$as_eda = $_POST ["Espacamento_dos_Apersores"];
		$as_eea = $_POST ["Espacamento_entre_aspersores"];
		$as_ell = $_POST ["Espacamento_entre_Linhas_Laterais"];

      	  
     if($nome != "" && $marca != "" && $as_ps != "" && $q != "" && $cd != "" && $ab != "" && $as_eda != "" && $as_eea != "" && $as_ell != "")
	 {
        $_SESSION['nome_a'] = $nome;
	    $_SESSION['marca_a'] = $marca;
		$_SESSION['as_ps_a'] = $as_ps;
		$_SESSION['q_a'] = $q;
		$_SESSION['cd_a'] = $cd;
		$_SESSION['ab_a'] = $ab;
		$_SESSION['as_eda_a'] = $as_eda;
		$_SESSION['as_eea_a'] = $as_eea;
		$_SESSION['as_ell_a'] = $as_ell;
	   
	   
        echo"<script language='javascript' type='text/javascript'>alert('Dados Salvos Temporariamente !');window.location.href='http://localhost:8080/LabWebII/Sysrriga/calculos/Aspersao/Resultados/resultados_aspersao.php';</script>";

	 }		
     else{ 
          echo"<script language='javascript' type='text/javascript'>alert('Por favor preencha o campos corretamente !');window.location.href='aspersao.php';</script>";
	 }
        ?>
		
	