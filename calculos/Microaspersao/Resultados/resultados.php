<?php
      session_start();
	
if((!isset ($_SESSION['nome_usuario']) == true) and (!isset ($_SESSION['senha_usuario']) == true))
{
	unset($_SESSION['nome_usuario']);
	unset($_SESSION['senha_usuario']);
	header('location:..//../../../index.php');
	}

$logado = $_SESSION['nome_usuario'];
?>

<html lang="pt-br">
<head>
	<title>Sysrriga - Beta</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="..//../../../css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="..//../../../css/font-awesome.css">
	<link rel='stylesheet' id='camera-css'  href='..//../../../css/camera.css' type='text/css' media='all'>

	<link rel="stylesheet" type="text/css" href="..//../../../css/slicknav.css">
	<link rel="stylesheet" href="..//../../../css/prettyPhoto.css" type="text/css" media="screen" title="prettyPhoto main stylesheet" charset="utf-8" />
	<link rel="stylesheet" type="text/css" href="..//../../../css/style.css">
	<link rel="stylesheet" href="..//../../../css/style.css">
	<link href="..//../../../css/style1.css" type="text/css" rel="stylesheet" media="all">


	<script type="text/javascript" src="..//../../../js/jquery-1.8.3.min.js"></script>

	<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,700|Open+Sans:700' rel='stylesheet' type='text/css'>
	<script type="text/javascript" src="..//../../../js/jquery.mobile.customized.min.js"></script>
	<script type="text/javascript" src="..//../../../js/jquery.easing.1.3.js"></script>
	<script type="text/javascript" src="..//../../../js/camera.min.js"></script>
	<script type="text/javascript" src="..//../../../js/myscript.js"></script>
	<script src="..//../../../js/sorting.js" type="text/javascript"></script>
	<script src="..//../../../js/jquery.isotope.js" type="text/javascript"></script>
	<!--script type="text/javascript" src="js/jquery.nav.js"></script-->


	<script>
		jQuery(function(){
			jQuery('#camera_wrap_1').camera({
				transPeriod: 500,
				time: 3000,
				height: '490px',
				thumbnails: false,
				pagination: true,
				playPause: false,
				loader: false,
				navigation: false,
				hover: false
			});
		});
	</script>





	<script>
		$(document).ready(function(){
			$("#login_entrar").click(function(evento){
				if ($("#login_div").attr("checked")){
					$("#login_div").css("display", "block");
				}else{
				}
			});
		});
	</script>


</head>
<body>

<div id="wrapper">
	<div id="leftWrapper">
		<a href="#" class="container">
			<img src="..//../../../images/logo.png">
		</a>
		<div id="listView" class="list">	
                 <li>
			         <a href="..//../../../projeto.php">Mostrar Projeto</a>
                </li>
				
				<li>
					 <a href="..//../../../tipos_irrigacao.php">Tipos de Irrigação</a>
                </li>
			
			    <li class="dropdown list-item-active">
				    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><b>Micro-Aspersão</b> <span class="caret"></span></a>
			    <li>
                    <a href="..//../../../microaspersao.php">Dados do Microaspersor</a>
                </li>
                <li>
                    <a href="..//../../../calculos/Microaspersao/LaminaIrrigacao/lamina_irrigacao.php">Lâmina de Irrigação</a>
                </li>
                <li>
                    <a href="..//../../../calculos/Microaspersao/LaminaIrrigacaoAjustada/lamina_irrigacao_ajustada.php">Lâmina de Irrigação Ajustada</a>
                </li>
                <li>
                    <a href="..//../../../calculos/Microaspersao/LinhaLateral/linha_lateral.php">Linha Lateral</a>
                </li>
                <li>
                    <a href="..//../../../calculos/Microaspersao/LinhaDerivacao/linha_derivacao.php">Linha de Derivação</a>
                </li>
                <li>
                    <a href="..//../../../calculos/Microaspersao/LinhaPrincipal/linha_principal.php">Linha Principal</a>
                </li>
                <li>
                    <a href="..//../../../calculos/Microaspersao/LinhaRecalque/linha_recalque.php">Linha de Recalque</a>
                </li>
		        <li>
                    <a href="..//../../../calculos/Microaspersao/LinhaSuccao/linha_succao.php">Linha de Sucção</a>
                </li>
				<li>
                    <a href="..//../../../calculos/Microaspersao/ConjuntoMotobomba/motobomba.php">Conjunto Motobomba</a>
                </li>
				<li>
                    <a href="..//../../../calculos/Microaspersao/Resultados/resultados.php">Resultados</a>
                </li>
            </li>

		</div>
	</div>

	<div id="rightWrapper">
		<div id="header">
			<a id="fullPage" href="#">|||</a>
			<a href="#">
				<img src="..//../../../images/logo.png">
			</a>
			<form class="navbar-form  navbar-right container div-pesquisa" role="Pesquisar" style="margin-right: 250px" >

					   <ul class="nav navbar-nav navbar-right">
						  <li class="dropdown">
							  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><img src="..//../../../images/logado3.png" alt=""/> <?php echo "<font color='#FFF'> $logado </font>"; ?> </a>
							  <ul class="dropdown-menu">
								<li><a href="..//../../../index.php">Sair</a></li>
							  </ul>
						  </li>
					  </ul>
			</form>

					   

		</div>


		<div id="contentWrapper">


			<div id="news">
                        
				<div class="CSSTableGenerator">	
                <h1><center>Resultados</center></h1>				

			
				<?php			

                 echo "<table >";
                    echo "<tr>";
                        echo "<td>";
                            echo "Dados do Micro-Aspersor";
                        echo "</td>";
                        echo "<td >";
                            echo "Lâmina de Irrigação";
                        echo "</td>";
                        echo "<td>";
                           echo " Lâmina de Irrigação Ajustada";
                        echo "</td>";
						echo "<td>";
                           echo " Linha Lateral";
                        echo "</td>";
						echo "<td>";
                           echo " Linha de Derivação";
                        echo "</td>";
						echo "<td>";
                           echo " Linha Principal";
                        echo "</td>";
						echo "<td>";
                           echo " Linha de Recalque";
                        echo "</td>";
						echo "<td>";
                           echo " Linha de Sucção";
                        echo "</td>";
						echo "<td>";
                           echo " Conjunto Motobomba";
                        echo "</td>";
                    echo "</tr>";
					
                    echo "<tr>";
                        echo "<td >";
						    echo "Vazão do Emissor: ";
							if (isset($_SESSION['ve']) == false){
                                 unset($_SESSION['ve']);
								 echo "0";
                             }
							 else{
                            echo $_SESSION['ve'];
							}
                        echo "</td>";
                        echo "<td>";
						    echo"Irrigação Real Necessária: ";
							if (isset($_SESSION['Irrigacao_Real_Necessaria']) == false){
                                 unset($_SESSION['Irrigacao_Real_Necessaria']);
								 echo "0";
                             }	
                            else{							 
							echo $_SESSION['Irrigacao_Real_Necessaria'];
                            }							
                        echo "</td>";
                        echo "<td>";
						    echo "Turno de Rega Adotado: ";
							if (isset($_SESSION['tra']) == false){
                                 unset($_SESSION['tra']);
								 echo "0";
                             }
							else{
                               echo $_SESSION['tra'];
							}

                        echo "</td>";
						echo "<td >";
                            echo "Vazão por LL: ";
							if (isset($_SESSION['vazaoll']) == false){
                                 unset($_SESSION['vazaoll']);
								 echo "0";
                             }
							 else{
                            echo $_SESSION['vazaoll'];
							}
							
                        echo "</td>";
						echo "<td >";
                            echo "Número de Saídas da LD: ";
							 if (isset($_SESSION['numero_s_ld']) == false){
                                 unset($_SESSION['numero_s_ld']);
								 echo "0";
                             }
							else{
                             echo $_SESSION['numero_s_ld'];
							}
                        echo "</td>";
						echo "<td >";
                            echo "Número de Linhas da LD: ";
							 if (isset($_SESSION['numerold']) == false){
                                 unset($_SESSION['numerold']);
								 echo "0";
                             }
							else{
                             echo $_SESSION['numerold'];
							}
                        echo "</td>";
						echo "<td >";
                            echo "Vazão da Linha de Recalque: ";
							 if (isset($_SESSION['Vazao_da_Linha_de_Recalque']) == false){
                                 unset($_SESSION['Vazao_da_Linha_de_Recalque']);
								 echo "0";
                             }
							else{
                             echo $_SESSION['Vazao_da_Linha_de_Recalque'];
							}
                        echo "</td>";
						echo "<td >";
                            echo "Vazão da Linha de Sucção: ";
							 if (isset($_SESSION['Vazao_da_Linha_de_Succao']) == false){
                                 unset($_SESSION['Vazao_da_Linha_de_Succao']);
								 echo "0";
                             }
							else{
                             echo $_SESSION['Vazao_da_Linha_de_Succao'];
							}
                        echo "</td>";
						echo "<td >";
                            echo "Perda de Carga no Cabeçal de Controle: ";
							 if (isset($_SESSION['Perda_de_Carga_no_Cabecal_de_Controle']) == false){
                                 unset($_SESSION['Perda_de_Carga_no_Cabecal_de_Controle']);
								 echo "0";
                             }
							else{
                             echo $_SESSION['Perda_de_Carga_no_Cabecal_de_Controle'];
							}
                        echo "</td>";
                    echo "</tr>";
					
                    echo "<tr>";
                        echo "<td >";
                            echo "Diâmetro Molhado: ";
							if (isset($_SESSION['dm']) == false){
                                 unset($_SESSION['dm']);
								 echo "0";
                             }
							 else{
                            echo $_SESSION['dm'];
							}
                            
                        echo "</td>";
                        echo "<td>";
						     echo"Eficiência de aplicação: ";
							if (isset($_SESSION['Eficiencia_de_aplicacao']) == false){
                                 unset($_SESSION['Eficiencia_de_aplicacao']);
								 echo "0";
                             }
							 else{
                            echo $_SESSION['Eficiencia_de_aplicacao'];
							}							 
							                          
                        echo "</td>";
                        echo "<td>";
						    echo "ETc loc: ";
                            if (isset($_SESSION['etc']) == false){
                                 unset($_SESSION['etc']);
								 echo "0";
                             }
							else{
                            echo $_SESSION['etc'];
							}							
                            
                        echo "</td>";
						echo "<td >";
                             echo "Vazão da LL: ";
							 if (isset($_SESSION['vazao_linha_lateral']) == false){
                                 unset($_SESSION['vazao_linha_lateral']);
								 echo "0";
                             }
							else{
                             echo $_SESSION['vazao_linha_lateral'];
							}	
							
                        echo "</td>";
						echo "<td >";
                            echo "Vazão da LD: ";
							 if (isset($_SESSION['vazaold']) == false){
                                 unset($_SESSION['vazaold']);
								 echo "0";
                             }
							else{
                             echo $_SESSION['vazaold'];
							}
                        echo "</td>";
						echo "<td >";
                            echo "Vazão da LP: ";
							 if (isset($_SESSION['vazao_linha_principal']) == false){
                                 unset($_SESSION['vazao_linha_principal']);
								 echo "0";
                             }
							else{
                             echo $_SESSION['vazao_linha_principal'];
							}
                        echo "</td>";
						echo "<td >";
                            echo "Velocidade Máxima da LR: ";
							 if (isset($_SESSION['Velocidade_Maxima_da_Linha_de_Recalque']) == false){
                                 unset($_SESSION['Velocidade_Maxima_da_Linha_de_Recalque']);
								 echo "0";
                             }
							else{
                             echo $_SESSION['Velocidade_Maxima_da_Linha_de_Recalque'];
							}
                        echo "</td>";
						echo "<td >";
                            echo "Velocidade Máxima da LS: ";
							 if (isset($_SESSION['Velocidade_Maxima_da_Linha_de_Succao']) == false){
                                 unset($_SESSION['Velocidade_Maxima_da_Linha_de_Succao']);
								 echo "0";
                             }
							else{
                             echo $_SESSION['Velocidade_Maxima_da_Linha_de_Succao'];
							}
                        echo "</td>";
						echo "<td >";
                                echo "Perda de Carga Localizada: ";
							 if (isset($_SESSION['Perda_de_Carga_Localizada']) == false){
                                 unset($_SESSION['Perda_de_Carga_Localizada']);
								 echo "0";
                             }
							else{
                             echo $_SESSION['Perda_de_Carga_Localizada'];
							}
                        echo "</td>";
						
                    echo "</tr>";
                    echo "<tr>";
                        echo "<td >";
                           echo "Percentagem de Área Molhada: ";
						   if (isset($_SESSION['pam']) == false){
                                 unset($_SESSION['pam']);
								 echo "0";
                             }
							else{
                             echo $_SESSION['pam'];
							}
						   
                        echo "</td>";
                        echo "<td>";
						    echo"Lâmina Bruta de Irrigação: ";
							if (isset($_SESSION['Lamina_Bruta_de_Irrigacao']) == false){
                                 unset($_SESSION['Lamina_Bruta_de_Irrigacao']);
								 echo "0";
                             }
							else{
                             echo $_SESSION['Lamina_Bruta_de_Irrigacao'];
							}
						    
                        echo "</td>";
                        echo "<td>";
						   echo "Lâmina líquida ajustada: ";
						   if (isset($_SESSION['lla']) == false){
                                 unset($_SESSION['lla']);
								 echo "0";
                             }
							else{
                             echo $_SESSION['lla'];
							}
                           
                        echo "</td>";
						echo "<td >";
                            echo "Nº de gotejadores por LL: ";
							if (isset($_SESSION['Numero_de_gotejadores_por_Linha_Lateral']) == false){
                                 unset($_SESSION['Numero_de_gotejadores_por_Linha_Lateral']);
								 echo "0";
                             }
							else{
                             echo $_SESSION['Numero_de_gotejadores_por_Linha_Lateral'];
							}
							
                        echo "</td>";
						echo "<td >";
                            echo "Comprimento da LD: ";
							 if (isset($_SESSION['Comprimento']) == false){
                                 unset($_SESSION['Comprimento']);
								 echo "0";
                             }
							else{
                             echo $_SESSION['Comprimento'];
							}
                        echo "</td>";
						echo "<td >";
                            echo "Comprimento da Área: ";
							 if (isset($_SESSION['Comprimento_a']) == false){
                                 unset($_SESSION['Comprimento_a']);
								 echo "0";
                             }
							else{
                             echo $_SESSION['Comprimento_a'];
							}
                        echo "</td>";
						echo "<td >";
                            echo "Diâmetro Calculado da LR: ";
							 if (isset($_SESSION['diametro_calculado_lr']) == false){
                                 unset($_SESSION['diametro_calculado_lr']);
								 echo "0";
                             }
							else{
                             echo $_SESSION['diametro_calculado_lr'];
							}
                        echo "</td>";
						echo "<td >";
                            echo "Diâmetro Calculado da LS: ";
							 if (isset($_SESSION['diametro_calculado_ls']) == false){
                                 unset($_SESSION['diametro_calculado_ls']);
								 echo "0";
                             }
							else{
                             echo $_SESSION['diametro_calculado_ls'];
							}
                        echo "</td>";
						echo "<td >";
                            echo "Perda de Carga Total: ";
							 if (isset($_SESSION['perda_carga_totol_cm']) == false){
                                 unset($_SESSION['perda_carga_totol_cm']);
								 echo "0";
                             }
							else{
                             echo $_SESSION['perda_carga_totol_cm'];
							}
                        echo "</td>";
						
                    echo "</tr>";
					
				echo "<tr>";
                    echo "<td>";
                        echo "Número de Emissores por Planta: "; 
						if (isset($_SESSION['nep']) == false){
                                 unset($_SESSION['nep']);
								 echo "0";
                             }
							else{
                             echo $_SESSION['nep'];
							}
                        						
                    echo "</td>";
					echo "<td>";
					    echo "Área Sombreada: ";
						if (isset($_SESSION['Area_Sombreada']) == false){
                                 unset($_SESSION['Area_Sombreada']);
								 echo "0";
                             }
							else{
                             echo $_SESSION['Area_Sombreada'];
							}
						                          
                    echo "</td>";
					echo "<td>";
					       echo "Eficiência de Aplicação: ";
						   if (isset($_SESSION['ea']) == false){
                                 unset($_SESSION['ea']);
								 echo "0";
                             }
							else{
                             echo $_SESSION['ea'];
							}
                           
                    echo "</td>";
					echo "<td >";
                           echo "F da LL: ";
						   if (isset($_SESSION['f_linha_lateral']) == false){
                                 unset($_SESSION['f_linha_lateral']);
								 echo "0";
                             }
							else{
                             echo $_SESSION['f_linha_lateral'];
							}
                           						   
                    echo "</td>";
					echo "<td >";
                         echo "Diferença de Nível da Linha Principal: ";
							 if (isset($_SESSION['direnca_nivel_lp']) == false){
                                 unset($_SESSION['direnca_nivel_lp']);
								 echo "0";
                             }
							else{
                             echo $_SESSION['direnca_nivel_lp'];
							}   
                    echo "</td>";
					echo "<td >";
                         echo "Diferença de Nível da Área: ";
							 if (isset($_SESSION['direnca_nivel_a']) == false){
                                 unset($_SESSION['direnca_nivel_a']);
								 echo "0";
                             }
							else{
                             echo $_SESSION['direnca_nivel_a'];
							}   
                    echo "</td>";
					echo "<td >";
                         echo "Coeficiente de Rugosidade da LR: ";
							 if (isset($_SESSION['Coeficiente_de_Rugosidade_da_Linha_de_Recalque']) == false){
                                 unset($_SESSION['Coeficiente_de_Rugosidade_da_Linha_de_Recalque']);
								 echo "0";
                             }
							else{
                             echo $_SESSION['Coeficiente_de_Rugosidade_da_Linha_de_Recalque'];
							}  
                    echo "</td>";
					echo "<td >";
                         echo "Coeficiente de Rugosidade da LS: ";
							 if (isset($_SESSION['Coeficiente_de_Rugosidade_da_Linha_Succao']) == false){
                                 unset($_SESSION['Coeficiente_de_Rugosidade_da_Linha_Succao']);
								 echo "0";
                             }
							else{
                             echo $_SESSION['Coeficiente_de_Rugosidade_da_Linha_Succao'];
							}      
                    echo "</td>";
                    echo "<td >";
                         echo "Eficiência da Bomba: ";
							 if (isset($_SESSION['Eficiencia_da_Bomba']) == false){
                                 unset($_SESSION['Eficiencia_da_Bomba']);
								 echo "0";
                             }
							else{
                             echo $_SESSION['Eficiencia_da_Bomba'];
							}   
                    echo "</td>";						

				echo "</tr>";	

				echo "<tr>";
				   	echo "<td>";
                        echo"Intensidade de Aplicação: ";
						 if (isset($_SESSION['ia']) == false){
                                 unset($_SESSION['ia']);
								 echo "0";
                             }
							else{
                             echo $_SESSION['ia'];
							}
                        						
                    echo "</td>";
					echo "<td>";
					    echo "Porcentagem de Área Molhada: ";
						 if (isset($_SESSION['Porcentagem_de_Area_Molhada']) == false){
                                 unset($_SESSION['Porcentagem_de_Area_Molhada']);
								 echo "0";
                             }
							else{
                             echo $_SESSION['Porcentagem_de_Area_Molhada']; 
							}
						                          
                    echo "</td>";
					echo "<td>";
					        echo "Lâmina Bruta Ajustada: ";
							if (isset($_SESSION['lba']) == false){
                                 unset($_SESSION['lba']);
								 echo "0";
                             }
							else{
                             echo $_SESSION['lba'];
							}
                            
                    echo "</td>";
					echo "<td >";
                        echo "Coeficiente da LL: "; 
						if (isset($_SESSION['Cg_da_Linha_Lateral']) == false){
                                 unset($_SESSION['Cg_da_Linha_Lateral']);
								 echo "0";
                             }
							else{
                             echo $_SESSION['Cg_da_Linha_Lateral'];
							}
                        						
                    echo "</td>";
					echo "<td >";
                          echo "Diferença de Nível da LD: ";
							 if (isset($_SESSION['diferenca_nivel_linha_derivacao']) == false){
                                 unset($_SESSION['diferenca_nivel_linha_derivacao']);
								 echo "0";
                             }
							else{
                             echo $_SESSION['diferenca_nivel_linha_derivacao'];
							}    
                    echo "</td>";
                    echo "<td >";
                         echo "Diferença de Nível da LP: ";
							 if (isset($_SESSION['diferenca_nivel_linha_principal']) == false){
                                 unset($_SESSION['diferenca_nivel_linha_principal']);
								 echo "0";
                             }
							else{
                             echo $_SESSION['diferenca_nivel_linha_principal'];
							}     
                    echo "</td>";
                    echo "<td >";
                         echo "Comprimento da LR: ";
							 if (isset($_SESSION['Comprimento_da_Linha_de_Recalque']) == false){
                                 unset($_SESSION['Comprimento_da_Linha_de_Recalque']);
								 echo "0";
                             }
							else{
                             echo $_SESSION['Comprimento_da_Linha_de_Recalque'];
							}   
                    echo "</td>";
                    echo "<td >";
                         echo "Comprimento da LS: ";
							 if (isset($_SESSION['Comprimento_da_Linha_Succao']) == false){
                                 unset($_SESSION['Comprimento_da_Linha_Succao']);
								 echo "0";
                             }
							else{
                             echo $_SESSION['Comprimento_da_Linha_Succao'];
							}    
                    echo "</td>";
                    echo "<td >";
                         echo "Potência do Motor: ";
							 if (isset($_SESSION['potencia_motor_cm']) == false){
                                 unset($_SESSION['potencia_motor_cm']);
								 echo "0";
                             }
							else{
                             echo $_SESSION['potencia_motor_cm'];
							}     
                    echo "</td>";						

				echo "</tr>";
				
				echo "<tr>";
				   	echo "<td>";
                        echo "Espaçamento entre Emissores: ";
						if (isset($_SESSION['eee']) == false){
                                 unset($_SESSION['eee']);
								 echo "0";
                             }
							else{
                             echo $_SESSION['eee'];
							}
                        						
                    echo "</td>";
					echo "<td>";
					    echo "Evapotranspiração Localizada: ";
						if (isset($_SESSION['Evapotranspiracao_Localizada']) == false){
                                 unset($_SESSION['Evapotranspiracao_Localizada']);
								 echo "0";
                             }
							else{
                             echo $_SESSION['Evapotranspiracao_Localizada']; 
							}
						                          
                    echo "</td>";
					echo "<td>";
                    echo "</td>";
					echo "<td >";
                         echo "Comprimento: ";
						 if (isset($_SESSION['Comprimento_da_Linha_Lateral']) == false){
                                 unset($_SESSION['Comprimento_da_Linha_Lateral']);
								 echo "0";
                             }
							else{
                             echo $_SESSION['Comprimento_da_Linha_Lateral'];
							}
                         						 
                    echo "</td>";
					echo "<td >";
                          echo "F da LD: ";
							 if (isset($_SESSION['f_linha_derivacao']) == false){
                                 unset($_SESSION['f_linha_derivacao']);
								 echo "0";
                             }
							else{
                             echo $_SESSION['f_linha_derivacao'];
							}     
                    echo "</td>";
                    echo "<td >";
                         echo "Velocidade Máxima: ";
							 if (isset($_SESSION['Velocidade_Maxima_da_Linha_Principal']) == false){
                                 unset($_SESSION['Velocidade_Maxima_da_Linha_Principal']);
								 echo "0";
                             }
							else{
                             echo $_SESSION['Velocidade_Maxima_da_Linha_Principal'];
							}       
                    echo "</td>";
                    echo "<td >";
                         echo "Material (DN/PN): ";
							 if (isset($_SESSION['materiall']) == false){
                                 unset($_SESSION['materiall']);
								 echo "0";
                             }
							else{
                             echo $_SESSION['materiall'];
							}    
                    echo "</td>";
                    echo "<td >";
                         echo "Material (DN/PN): ";
							 if (isset($_SESSION['materialls']) == false){
                                 unset($_SESSION['materialls']);
								 echo "0";
                             }
							else{
                             echo $_SESSION['materialls'];
							}    
                    echo "</td>";
                    echo "<td >";
                          echo "Eficiência do Motor: ";
							 if (isset($_SESSION['Eficiencia_da_Motor']) == false){
                                 unset($_SESSION['Eficiencia_da_Motor']);
								 echo "0";
                             }
							else{
                             echo $_SESSION['Eficiencia_da_Motor'];
							}    
                    echo "</td>";						

				echo "</tr>";
				
				echo "<tr>";
				   	echo "<td>";
                        echo "Tempo de Irrigação: ";
						if (isset($_SESSION['ti']) == false){
                                 unset($_SESSION['ti']);
								 echo "0";
                             }
							else{
                             echo $_SESSION['ti'];
							}
                        						
                    echo "</td>";
					echo "<td>";
                        echo "Evapotranspiração da Cultura: ";
						if (isset($_SESSION['Evapotranspiracao_da_Cultura']) == false){
                                 unset($_SESSION['Evapotranspiracao_da_Cultura']);
								 echo "0";
                             }
							else{
                             echo $_SESSION['Evapotranspiracao_da_Cultura'];
							}
						   
                    echo "</td>";
					echo "<td>";
                    echo "</td>";
					echo "<td >";
                         echo "Perda de Carga Admissível: ";
						 if (isset($_SESSION['HF_Admissivel_da_Linha_Lateral']) == false){
                                 unset($_SESSION['HF_Admissivel_da_Linha_Lateral']);
								 echo "0";
                             }
							else{
                             echo $_SESSION['HF_Admissivel_da_Linha_Lateral'];
							}
                         						 
                    echo "</td>";
					echo "<td >";
                         echo "Pressão de Serviço: ";
							 if (isset($_SESSION['microaspersor_pressao_de_servico']) == false){
                                 unset($_SESSION['microaspersor_pressao_de_servico']);
								 echo "0";
                             }
							else{
                             echo $_SESSION['microaspersor_pressao_de_servico'];
							}       
                    echo "</td>";
                    echo "<td >";
                         echo "Diâmetro Calculado da LP: ";
							 if (isset($_SESSION['diametro_calculado_linha_principal']) == false){
                                 unset($_SESSION['diametro_calculado_linha_principal']);
								 echo "0";
                             }
							else{
                             echo $_SESSION['diametro_calculado_linha_principal'];
							}    
                    echo "</td>";
                    echo "<td >";
                         echo "Perda de Carga da LR: ";
							 if (isset($_SESSION['perda_carga_lr']) == false){
                                 unset($_SESSION['perda_carga_lr']);
								 echo "0";
                             }
							else{
                             echo $_SESSION['perda_carga_lr'];
							}    
                    echo "</td>";
                    echo "<td >";
                        echo "Perda de Carga da LS: ";
							 if (isset($_SESSION['perda_carga_ls']) == false){
                                 unset($_SESSION['perda_carga_ls']);
								 echo "0";
                             }
							else{
                             echo $_SESSION['perda_carga_ls'];
							}     
                    echo "</td>";
                    echo "<td >";
                          echo "Consumo Médio (cv): ";
							 if (isset($_SESSION['media_consumo_cv']) == false){
                                 unset($_SESSION['media_consumo_cv']);
								 echo "0";
                             }
							else{
                             echo $_SESSION['media_consumo_cv'];
							}     
                    echo "</td>";						

				echo "</tr>";
				
				echo "<tr>";
				   	echo "<td>";
                        echo "Número Máximo de Setores: ";
						 if (isset($_SESSION['nms']) == false){
                                 unset($_SESSION['nms']);
								 echo "0";
                             }
							else{
                             echo $_SESSION['nms'];
							}
                        						
                    echo "</td>";
					echo "<td>";
                        echo "Coeficiente de Cultivo: ";
						if (isset($_SESSION['Coeficiente_de_Cultivo']) == false){
                                 unset($_SESSION['Coeficiente_de_Cultivo']);
								 echo "0";
                             }
							else{
                             echo $_SESSION['Coeficiente_de_Cultivo'];
							}
						  
                    echo "</td>";
					echo "<td>";
                    echo "</td>";
					echo "<td >";
                          echo "Diâmetro da LL: ";
						  if (isset($_SESSION['diametro_linha_lateral']) == false){
                                 unset($_SESSION['diametro_linha_lateral']);
								 echo "0";
                             }
							else{
                             echo $_SESSION['diametro_linha_lateral'];
							}
                          						  
                    echo "</td>";
					echo "<td >";
                          echo "HF da LD: ";
							 if (isset($_SESSION['hf_linha_derivacao']) == false){
                                 unset($_SESSION['hf_linha_derivacao']);
								 echo "0";
                             }
							else{
                             echo $_SESSION['hf_linha_derivacao'];
							}     
                    echo "</td>";
                    echo "<td >";
                          echo "Coeficiente de Rugosidade: ";
							 if (isset($_SESSION['Coeficiente_de_Rugosidade_da_Linha_Principal']) == false){
                                 unset($_SESSION['Coeficiente_de_Rugosidade_da_Linha_Principal']);
								 echo "0";
                             }
							else{
                             echo $_SESSION['Coeficiente_de_Rugosidade_da_Linha_Principal'];
							}  
                    echo "</td>";
                    echo "<td >";
                           
                    echo "</td>";
                    echo "<td >";
                            
                    echo "</td>";
                    echo "<td >";
                         echo "Consumo Médio (kw): ";
							 if (isset($_SESSION['media_consumo_kw']) == false){
                                 unset($_SESSION['media_consumo_kw']);
								 echo "0";
                             }
							else{
                             echo $_SESSION['media_consumo_kw'];
							}      
                    echo "</td>";						

				echo "</tr>";
				
				echo "<tr>";
				   	echo "<td>";						
                    echo "</td>";
					echo "<td>";
                        echo "ETc loc: ";
						if (isset($_SESSION['etcloc']) == false){
                                 unset($_SESSION['etcloc']);
								 echo "0";
                             }
							else{
                             echo $_SESSION['etcloc'];
							}
						 
                    echo "</td>";
					echo "<td>";
                    echo "</td>";
					echo "<td >";
                          echo "Diâmetro do Nominal da LL: ";
						  if (isset($_SESSION['diametro_nominal_ll']) == false){
                                 unset($_SESSION['diametro_nominal_ll']);
								 echo "0";
                             }
							else{
                             echo $_SESSION['diametro_nominal_ll'];
							}
						  
                    echo "</td>";
					echo "<td >";
                         echo "Cg da LD: ";
							 if (isset($_SESSION['Cg_da_Linha_de_Derivacao']) == false){
                                 unset($_SESSION['Cg_da_Linha_de_Derivacao']);
								 echo "0";
                             }
							else{
                             echo $_SESSION['Cg_da_Linha_de_Derivacao'];
							}     
                    echo "</td>";
                    echo "<td >";
                          echo "Comprimento da LP: ";
							 if (isset($_SESSION['Comprimento_da_Linha_Principal']) == false){
                                 unset($_SESSION['Comprimento_da_Linha_Principal']);
								 echo "0";
                             }
							else{
                             echo $_SESSION['Comprimento_da_Linha_Principal'];
							}      
                    echo "</td>";
                    echo "<td >";
                            
                    echo "</td>";
                    echo "<td >";
                            
                    echo "</td>";
                    echo "<td >";
                            
                    echo "</td>";						

				echo "</tr>";
				
				echo "<tr>";
				   	echo "<td>";						
                    echo "</td>";
					echo "<td>";
                        echo "Turno de Rega: ";
						if (isset($_SESSION['Turno_Rega']) == false){
                                 unset($_SESSION['Turno_Rega']);
								 echo "0";
                             }
							else{
                             echo $_SESSION['Turno_Rega'];
							}
						  
                    echo "</td>";
					echo "<td>";
                    echo "</td>";
					echo "<td >";
                          echo "Perca de Carga da LL: ";
						  if (isset($_SESSION['perda_carga_linha_lateral']) == false){
                                 unset($_SESSION['perda_carga_linha_lateral']);
								 echo "0";
                             }
							else{
                             echo $_SESSION['perda_carga_linha_lateral'];
							}
                          						  
                    echo "</td>";
					echo "<td >";
                         echo "Diâmetro da LD: ";
							 if (isset($_SESSION['diametro_linha_derivacao']) == false){
                                 unset($_SESSION['diametro_linha_derivacao']);
								 echo "0";
                             }
							else{
                             echo $_SESSION['diametro_linha_derivacao'];
							}   
                    echo "</td>";
                    echo "<td >";
                        echo "Material (DN/PN): ";
							 if (isset($_SESSION['materiallp']) == false){
                                 unset($_SESSION['materiallp']);
								 echo "0";
                             }
							else{
                             echo $_SESSION['materiallp'];
							}     
                    echo "</td>";
                    echo "<td >";
                            
                    echo "</td>";
                    echo "<td >";
                            
                    echo "</td>";
                    echo "<td >";
                            
                    echo "</td>";						

				echo "</tr>";
				
				echo "<tr>";
				   	echo "<td>";						
                    echo "</td>";
					echo "<td>";
                        echo "Irrigação Total Necessária: ";
						if (isset($_SESSION['Irrigacao_Total_Necessaria']) == false){
                                 unset($_SESSION['Irrigacao_Total_Necessaria']);
								 echo "0";
                             }
							else{
                             echo $_SESSION['Irrigacao_Total_Necessaria']; 
							}
						 
                    echo "</td>";
					echo "<td>";
                    echo "</td>";
					echo "<td >";
                         echo "Pressão de Serviço: ";
						 if (isset($_SESSION['Pressao_de_Servico']) == false){
                                 unset($_SESSION['Pressao_de_Servico']);
								 echo "0";
                             }
							else{
                             echo $_SESSION['Pressao_de_Servico']; 
							}
                         						 
                    echo "</td>";
					echo "<td >";
                         echo "Diâmetro do Nível da LD: ";
							 if (isset($_SESSION['diametro_nivel_ld']) == false){
                                 unset($_SESSION['diametro_nivel_ld']);
								 echo "0";
                             }
							else{
                             echo $_SESSION['diametro_nivel_ld'];
							}     
                    echo "</td>";
                    echo "<td >";
                         echo "Perda de Carga LP: ";
							 if (isset($_SESSION['perda_carga_linha_principal']) == false){
                                 unset($_SESSION['perda_carga_linha_principal']);
								 echo "0";
                             }
							else{
                             echo $_SESSION['perda_carga_linha_principal'];
							}      
                    echo "</td>";
                    echo "<td >";
                            
                    echo "</td>";
                    echo "<td >";
                            
                    echo "</td>";
                    echo "<td >";
                            
                    echo "</td>";						

				echo "</tr>";
				
				echo "<tr>";
				   	echo "<td>";						
                    echo "</td>";
					echo "<td>";
                        echo "Espaçamento Entre Plantas: ";
						if (isset($_SESSION['Espacamento_entre_Plantas']) == false){
                                 unset($_SESSION['Espacamento_entre_Plantas']);
								 echo "0";
                             }
							else{
                             echo $_SESSION['Espacamento_entre_Plantas'];
							}
						  
                    echo "</td>";
					echo "<td>";
                    echo "</td>";
					echo "<td >";
                         echo "Diferença de Nivel da LL: ";
						 if (isset($_SESSION['Diferenca_de_Nivel_da_Linha_Lateral']) == false){
                                 unset($_SESSION['Diferenca_de_Nivel_da_Linha_Lateral']);
								 echo "0";
                             }
							else{
                             echo $_SESSION['Diferenca_de_Nivel_da_Linha_Lateral'];
							}
                         						 
                    echo "</td>";
					echo "<td >";
                        echo "Perda de Carga da LD: ";
							 if (isset($_SESSION['perda_carga_linha_derivacao']) == false){
                                 unset($_SESSION['perda_carga_linha_derivacao']);
								 echo "0";
                             }
							else{
                             echo $_SESSION['perda_carga_linha_derivacao'];
							}     
                    echo "</td>";
                    echo "<td >";
                            
                    echo "</td>";
                    echo "<td >";
                            
                    echo "</td>";
                    echo "<td >";
                            
                    echo "</td>";
                    echo "<td >";
                            
                    echo "</td>";						

				echo "</tr>";
				
				echo "<tr>";
				   	echo "<td>";						
                    echo "</td>";
					echo "<td>";
                        echo "Espaçamento Entre Fileiras: ";
						if (isset($_SESSION['Espacamento_entre_Fileiras']) == false){
                                 unset($_SESSION['Espacamento_entre_Fileiras']);
								 echo "0";
                             }
							else{
                             echo $_SESSION['Espacamento_entre_Fileiras'];
							}
						  
                    echo "</td>";
					echo "<td>";
                    echo "</td>";
					echo "<td >";
                        echo "Pressão de Início da LL: ";
						if (isset($_SESSION['pressao_inicio_linha_lateral']) == false){
                                 unset($_SESSION['pressao_inicio_linha_lateral']);
								 echo "0";
                             }
							else{
                             echo $_SESSION['pressao_inicio_linha_lateral'];
							}
                        						
                    echo "</td>";
					echo "<td >";
                            echo "Pressão de Inicio da LD: ";
							 if (isset($_SESSION['pressao_inicio_linha_derivacao']) == false){
                                 unset($_SESSION['pressao_inicio_linha_derivacao']);
								 echo "0";
                             }
							else{
                             echo $_SESSION['pressao_inicio_linha_derivacao'];
							}  
                    echo "</td>";
                    echo "<td >";
                            
                    echo "</td>";
                    echo "<td >";
                            
                    echo "</td>";
                    echo "<td >";
                            
                    echo "</td>";
                    echo "<td >";
                            
                    echo "</td>";						

				echo "</tr>";
				
				echo "<tr>";
				   	echo "<td>";						
                    echo "</td>";
					echo "<td>";
                        echo "Volume de Água por Planta: ";
						if (isset($_SESSION['Volume_de_Agua_por_Planta']) == false){
                                 unset($_SESSION['Volume_de_Agua_por_Planta']);
								 echo "0";
                             }
							else{
                             echo $_SESSION['Volume_de_Agua_por_Planta'];  
							}
						
                    echo "</td>";
					echo "<td>";

                    echo "</td>";
					echo "<td >";
                            
                    echo "</td>";
					echo "<td >";
    
                    echo "</td>";
                    echo "<td >";
                            
                    echo "</td>";
                    echo "<td >";
                            
                    echo "</td>";
                    echo "<td >";
                            
                    echo "</td>";
                    echo "<td >";
                            
                    echo "</td>";						

				echo "</tr>";
				
                echo "</table>";
				
                ?>
				      
				</div>
				<br><br>
				   
				   <center><a href="..//../../../salvar_dados_microaspersor.php" class="myButton">Salvar Dados</a></center>
					
				<br><br>	
                     </div>        <!-- /#page-content-wrapper -->

    </div>


			<script src="..//../../../js/jquery.prettyPhoto.js" type="text/javascript" charset="utf-8"></script>
			<script src="..//../../../js/bootstrap.min.js"></script>
			<script src="..//../../../js/jquery.slicknav.js"></script>
			<script>
				$(document).ready(function(){
					$(".bhide").click(function(){
						$(".hideObj").slideDown();
						$(this).hide(); //.attr()
						return false;
					});
					$(".bhide2").click(function(){
						$(".container.hideObj2").slideDown();
						$(this).hide(); // .attr()
						return false;
					});

					$('.heart').mouseover(function(){
						$(this).find('i').removeClass('fa-heart-o').addClass('fa-heart');
					}).mouseout(function(){
						$(this).find('i').removeClass('fa-heart').addClass('fa-heart-o');
					});

					function sdf_FTS(_number,_decimal,_separator)
					{
						var decimal=(typeof(_decimal)!='undefined')?_decimal:2;
						var separator=(typeof(_separator)!='undefined')?_separator:'';
						var r=parseFloat(_number);
						var exp10=Math.pow(10,decimal);
						r=Math.round(r*exp10)/exp10;
						rr=Number(r).toFixed(decimal).toString().split('.');
						b=rr[0].replace(/(\d{1,3}(?=(\d{3})+(?:\.\d|\b)))/g,"\$1"+separator);
						r=(rr[1]?b+'.'+rr[1]:b);

						return r;
					}

					setTimeout(function(){
						$('#counter').text('0');
						$('#counter1').text('0');
						$('#counter2').text('0');
						setInterval(function(){

							var curval=parseInt($('#counter').text());
							var curval1=parseInt($('#counter1').text().replace(' ',''));
							var curval2=parseInt($('#counter2').text());
							if(curval<=707){
								$('#counter').text(curval+1);
							}
							if(curval1<=12280){
								$('#counter1').text(sdf_FTS((curval1+20),0,' '));
							}
							if(curval2<=245){
								$('#counter2').text(curval2+1);
							}
						}, 2);

					}, 500);
				});
			</script>
			<script type="text/javascript">
				jQuery(document).ready(function(){
					jQuery('#menu').slicknav();

				});
			</script>

			<script type="text/javascript">
				$(document).ready(function(){

					var $menu = $("#menuF");

					$(window).scroll(function(){
						if ( $(this).scrollTop() > 100 && $menu.hasClass("default") ){
							$menu.fadeOut('fast',function(){
								$(this).removeClass("default")
									.addClass("fixed transbg")
									.fadeIn('fast');
							});
						} else if($(this).scrollTop() <= 100 && $menu.hasClass("fixed")) {
							$menu.fadeOut('fast',function(){
								$(this).removeClass("fixed transbg")
									.addClass("default")
									.fadeIn('fast');
							});
						}
					});
				});
				//jQuery
			</script>
			<script>
				/*menu*/
				function calculateScroll() {
					var contentTop      =   [];
					var contentBottom   =   [];
					var winTop      =   $(window).scrollTop();
					var rangeTop    =   200;
					var rangeBottom =   500;
					$('.navmenu').find('a').each(function(){
						contentTop.push( $( $(this).attr('href') ).offset().top );
						contentBottom.push( $( $(this).attr('href') ).offset().top + $( $(this).attr('href') ).height() );
					});
					$.each( contentTop, function(i){
						if ( winTop > contentTop[i] - rangeTop && winTop < contentBottom[i] - rangeBottom ){
							$('.navmenu li')
								.removeClass('active')
								.eq(i).addClass('active');
						}
					})
				}
				$(document).ready(function(){
					calculateScroll();
					$(window).scroll(function(event) {
						calculateScroll();
					});
					$('.navmenu ul li a').click(function() {
						$('html, body').animate({scrollTop: $(this.hash).offset().top - 80}, 800);
						return false;
					});
				});
			</script>
			<script type="text/javascript" charset="utf-8">

				jQuery(document).ready(function(){
					jQuery(".pretty a[rel^='prettyPhoto']").prettyPhoto({animation_speed:'normal',theme:'light_square',slideshow:3000, autoplay_slideshow: true, social_tools: ''});

				});
			</script>


		</div>
	</div>
</div>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

<script src="..//../../../js/index.js"></script>




</body>

</html>