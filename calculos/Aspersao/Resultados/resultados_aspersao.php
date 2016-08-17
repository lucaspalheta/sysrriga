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
				    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><b>Aspersão</b> <span class="caret"></span></a>
			    <li>
                    <a href="..//../../../aspersao.php">Características do Aspersor</a>
                </li>
                <li>
                    <a href="..//../../../calculos/Aspersao/LaminaIrrigacao/lamina_irrigacao.php">Lâmina de Irrigação</a>
                </li>
                <li>
                    <a href="..//../../../calculos/Aspersao/LaminaIrrigacaoAjustada/lamina_irrigacao_ajustada.php">Lâmina de Irrigação Ajustada</a>
                </li>
                <li>
                    <a href="..//../../../calculos/Aspersao/aspersao/as_aspersao.php">Aspersão</a>
                </li>
                <li>
                    <a href="..//../../../calculos/Aspersao/LinhaLateral/linha_lateral.php">Linha Lateral</a>
                </li>
                <li>
                    <a href="..//../../../calculos/Aspersao/LinhaPrincipal/linha_principal.php">Linha Principal</a>
                </li>
                <li>
                    <a href="..//../../../calculos/Aspersao/LinhaRecalque/linha_recalque.php">Linha de Recalque</a>
                </li>
		        <li>
                    <a href="..//../../../calculos/Aspersao/LinhaSuccao/linha_succao.php">Linha de Sucção</a>
                </li>
				<li>
                    <a href="..//../../../calculos/Aspersao/ConjuntoMotobomba/motobomba.php">Conjunto Motobomba</a>
                </li>
				<li>
                    <a href="..//../../../calculos/Aspersao/Resultados/resultados_aspersao.php">Resultados</a>
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
							  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><img src="http://localhost:8080/LabWebII/Sysrriga/images/logado3.png" alt=""/> <?php echo "<font color='#FFF'> $logado </font>"; ?> </a>
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
                            echo "Características do Aspersor";
                        echo "</td>";
                        echo "<td >";
                            echo "Lâmina de Irrigação";
                        echo "</td>";
                        echo "<td>";
                           echo " Lâmina de Irrigação Ajustada";
                        echo "</td>";
						echo "<td>";
                           echo " Aspersão";
                        echo "</td>";
						echo "<td>";
                           echo " Linha Lateral";
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
						    echo "Nome: ";
							if (isset($_SESSION['nome_a']) == false){
                                 unset($_SESSION['nome_a']);
								 echo "0";
                             }
							 else{
                            echo $_SESSION['nome_a'];
							}
                        echo "</td>";
                        echo "<td>";
						    echo"Irrigação Real Necessária: ";
							if (isset($_SESSION['Irrigacao_Real_Necessaria_a']) == false){
                                 unset($_SESSION['Irrigacao_Real_Necessaria_a']);
								 echo "0";
                             }	
                            else{							 
							echo $_SESSION['Irrigacao_Real_Necessaria_a'];
                            }							
                        echo "</td>";
                        echo "<td>";
						    echo "ETc: ";
							if (isset($_SESSION['ETcloc_ajustada_a']) == false){
                                 unset($_SESSION['ETcloc_ajustada_a']);
								 echo "0";
                             }
							else{
                               echo $_SESSION['ETcloc_ajustada_a'];
							}

                        echo "</td>";
						echo "<td >";
                            echo "Vazão do Aspersor: ";
							if (isset($_SESSION['as_vazao_a']) == false){
                                 unset($_SESSION['as_vazao_a']);
								 echo "0";
                             }
							 else{
                            echo $_SESSION['as_vazao_a'];
							}
							
                        echo "</td>";
						echo "<td >";
                            echo "Vazão da LL: ";
							 if (isset($_SESSION['vazaoll_a']) == false){
                                 unset($_SESSION['vazaoll_a']);
								 echo "0";
                             }
							else{
                             echo $_SESSION['vazaoll_a'];
							}
                        echo "</td>";
						echo "<td >";
                            echo "Vazão da LP: ";
							 if (isset($_SESSION['vazaolp_a']) == false){
                                 unset($_SESSION['vazaolp_a']);
								 echo "0";
                             }
							else{
                             echo $_SESSION['vazaolp_a'];
							}
                        echo "</td>";
						echo "<td >";
                            echo "Vazão da LR: ";
							 if (isset($_SESSION['Vazao_da_Linha_de_Recalque_a']) == false){
                                 unset($_SESSION['Vazao_da_Linha_de_Recalque_a']);
								 echo "0";
                             }
							else{
                             echo $_SESSION['Vazao_da_Linha_de_Recalque_a'];
							}
                        echo "</td>";
						echo "<td >";
                            echo "Vazão da Linha de Sucção: ";
							 if (isset($_SESSION['Vazao_da_Linha_de_Succao_a']) == false){
                                 unset($_SESSION['Vazao_da_Linha_de_Succao_a']);
								 echo "0";
                             }
							else{
                             echo $_SESSION['Vazao_da_Linha_de_Succao_a'];
							}
                        echo "</td>";
						echo "<td >";
                            echo "Perda de Carga Localizada: ";
							 if (isset($_SESSION['Perda_de_Carga_Localizada_cmb_a']) == false){
                                 unset($_SESSION['Perda_de_Carga_Localizada_cmb_a']);
								 echo "0";
                             }
							else{
                             echo $_SESSION['Perda_de_Carga_Localizada_cmb_a'];
							}
                        echo "</td>";
                    echo "</tr>";
					
                    echo "<tr>";
                        echo "<td >";
                            echo "Marca: ";
							if (isset($_SESSION['marca_a']) == false){
                                 unset($_SESSION['marca_a']);
								 echo "0";
                             }
							 else{
                            echo $_SESSION['marca_a'];
							}
                            
                        echo "</td>";
                        echo "<td>";
						     echo"Eficiência de aplicação: ";
							if (isset($_SESSION['Eficiencia_de_aplicacao_a']) == false){
                                 unset($_SESSION['Eficiencia_de_aplicacao_a']);
								 echo "0";
                             }
							 else{
                            echo $_SESSION['Eficiencia_de_aplicacao_a'];
							}							 
							                          
                        echo "</td>";
                        echo "<td>";
						    echo "Turno de Rega Adotado: ";
                            if (isset($_SESSION['Turno_de_Rega_Adotado_ajustada_a']) == false){
                                 unset($_SESSION['Turno_de_Rega_Adotado_ajustada_a']);
								 echo "0";
                             }
							else{
                            echo $_SESSION['Turno_de_Rega_Adotado_ajustada_a'];
							}							
                            
                        echo "</td>";
						echo "<td >";
                             echo "Espaçamento S1: ";
							 if (isset($_SESSION['as_es1_a']) == false){
                                 unset($_SESSION['as_es1_a']);
								 echo "0";
                             }
							else{
                             echo $_SESSION['as_es1_a'];
							}	
							
                        echo "</td>";
						echo "<td >";
                            echo "Coeficiente da LL (Cg): ";
							 if (isset($_SESSION['Cg_da_Linha_Lateral_a']) == false){
                                 unset($_SESSION['Cg_da_Linha_Lateral_a']);
								 echo "0";
                             }
							else{
                             echo $_SESSION['Cg_da_Linha_Lateral_a'];
							}
                        echo "</td>";
						echo "<td >";
                            echo "Comprimento da LP: ";
							 if (isset($_SESSION['comprimento_lp_a']) == false){
                                 unset($_SESSION['comprimento_lp_a']);
								 echo "0";
                             }
							else{
                             echo $_SESSION['comprimento_lp_a'];
							}
                        echo "</td>";
						echo "<td >";
                            echo "Velocidade Máxima da LR: ";
							 if (isset($_SESSION['Velocidade_Maxima_da_Linha_de_Recalque_a']) == false){
                                 unset($_SESSION['Velocidade_Maxima_da_Linha_de_Recalque_a']);
								 echo "0";
                             }
							else{
                             echo $_SESSION['Velocidade_Maxima_da_Linha_de_Recalque_a'];
							}
                        echo "</td>";
						echo "<td >";
                            echo "Velocidade Máxima da LS: ";
							 if (isset($_SESSION['Velocidade_Maxima_da_Linha_de_Succao_a']) == false){
                                 unset($_SESSION['Velocidade_Maxima_da_Linha_de_Succao_a']);
								 echo "0";
                             }
							else{
                             echo $_SESSION['Velocidade_Maxima_da_Linha_de_Succao_a'];
							}
                        echo "</td>";
						echo "<td >";
                                echo "Perda de Carga Total: ";
							 if (isset($_SESSION['perda_carga_total_cmb_a']) == false){
                                 unset($_SESSION['perda_carga_total_cmb_a']);
								 echo "0";
                             }
							else{
                             echo $_SESSION['perda_carga_total_cmb_a'];
							}
                        echo "</td>";
						
                    echo "</tr>";
                    echo "<tr>";
                        echo "<td>";
                           echo "Pressão de Serviço: ";
						   if (isset($_SESSION['as_ps_a']) == false){
                                 unset($_SESSION['as_ps_a']);
								 echo "0";
                             }
							else{
                             echo $_SESSION['as_ps_a'];
							}
						   
                        echo "</td>";
                        echo "<td>";
						    echo"Lâmina Bruta de Irrigação: ";
							if (isset($_SESSION['lamina_bruta_irrigacao_a']) == false){
                                 unset($_SESSION['lamina_bruta_irrigacao_a']);
								 echo "0";
                             }
							else{
                             echo $_SESSION['lamina_bruta_irrigacao_a'];
							}
						    
                        echo "</td>";
                        echo "<td>";
						   echo "Lâmina líquida ajustada: ";
						   if (isset($_SESSION['lamina_liquida_ajustada_a']) == false){
                                 unset($_SESSION['lamina_liquida_ajustada_a']);
								 echo "0";
                             }
							else{
                             echo $_SESSION['lamina_liquida_ajustada_a'];
							}
                           
                        echo "</td>";
						echo "<td >";
                            echo "Espaçamento S2: ";
							if (isset($_SESSION['as_es2_a']) == false){
                                 unset($_SESSION['as_es2_a']);
								 echo "0";
                             }
							else{
                             echo $_SESSION['as_es2_a'];
							}
							
                        echo "</td>";
						echo "<td >";
                            echo "Comprimento da LL: ";
							 if (isset($_SESSION['comprimentoll_a']) == false){
                                 unset($_SESSION['comprimentoll_a']);
								 echo "0";
                             }
							else{
                             echo $_SESSION['comprimentoll_a'];
							}
                        echo "</td>";
						echo "<td >";
                            echo "Diferença de Nível da LP: ";
							 if (isset($_SESSION['diferenca_nivel_lp_a']) == false){
                                 unset($_SESSION['diferenca_nivel_lp_a']);
								 echo "0";
                             }
							else{
                             echo $_SESSION['diferenca_nivel_lp_a'];
							}
                        echo "</td>";
						echo "<td >";
                            echo "Diâmetro Calculado da LR: ";
							 if (isset($_SESSION['diametro_calculado_lr_a']) == false){
                                 unset($_SESSION['diametro_calculado_lr_a']);
								 echo "0";
                             }
							else{
                             echo $_SESSION['diametro_calculado_lr_a'];
							}
                        echo "</td>";
						echo "<td >";
                            echo "Diâmetro Calculado da LS: ";
							 if (isset($_SESSION['diametro_calculado_ls_a']) == false){
                                 unset($_SESSION['diametro_calculado_ls_a']);
								 echo "0";
                             }
							else{
                             echo $_SESSION['diametro_calculado_ls_a'];
							}
                        echo "</td>";
						echo "<td >";
                            echo "Vazão da LL em L/s: ";
							 if (isset($_SESSION['vazao_ll_cmb_a']) == false){
                                 unset($_SESSION['vazao_ll_cmb_a']);
								 echo "0";
                             }
							else{
                             echo $_SESSION['vazao_ll_cmb_a'];
							}
                        echo "</td>";
						
                    echo "</tr>";
					
				echo "<tr>";
                    echo "<td>";
                        echo "Vazão: "; 
						if (isset($_SESSION['q_a']) == false){
                                 unset($_SESSION['q_a']);
								 echo "0";
                             }
							else{
                             echo $_SESSION['q_a'];
							}
                        						
                    echo "</td>";
					echo "<td>";
					    echo "ETc: ";
						if (isset($_SESSION['ETcloc_a']) == false){
                                 unset($_SESSION['ETcloc_a']);
								 echo "0";
                             }
							else{
                             echo $_SESSION['ETcloc_a'];
							}
						                          
                    echo "</td>";
					echo "<td>";
					       echo "Eficiência de Aplicação: ";
						   if (isset($_SESSION['Eficiencia_de_Aplicacao_ajustada_a']) == false){
                                 unset($_SESSION['Eficiencia_de_Aplicacao_ajustada_a']);
								 echo "0";
                             }
							else{
                             echo $_SESSION['Eficiencia_de_Aplicacao_ajustada_a'];
							}
                           
                    echo "</td>";
					echo "<td >";
                           echo "Intensidade de Aplicação: ";
						   if (isset($_SESSION['as_intensidade_aplicacao_a']) == false){
                                 unset($_SESSION['as_intensidade_aplicacao_a']);
								 echo "0";
                             }
							else{
                             echo $_SESSION['as_intensidade_aplicacao_a'];
							}
                           						   
                    echo "</td>";
					echo "<td >";
                         echo "Diferença de Nível da LL: ";
							 if (isset($_SESSION['diferenca_nivelll_a']) == false){
                                 unset($_SESSION['diferenca_nivelll_a']);
								 echo "0";
                             }
							else{
                             echo $_SESSION['diferenca_nivelll_a'];
							}   
                    echo "</td>";
					echo "<td >";
                         echo "F da LP: ";
							 if (isset($_SESSION['f_lp_a']) == false){
                                 unset($_SESSION['f_lp_a']);
								 echo "0";
                             }
							else{
                             echo $_SESSION['f_lp_a'];
							}   
                    echo "</td>";
					echo "<td >";
                         echo "Coeficiente de Rugosidade da LR: ";
							 if (isset($_SESSION['Coeficiente_de_Rugosidade_da_Linha_de_Recalque_a']) == false){
                                 unset($_SESSION['Coeficiente_de_Rugosidade_da_Linha_de_Recalque_a']);
								 echo "0";
                             }
							else{
                             echo $_SESSION['Coeficiente_de_Rugosidade_da_Linha_de_Recalque_a'];
							}  
                    echo "</td>";
					echo "<td >";
                         echo "Coeficiente de Rugosidade da LS: ";
							 if (isset($_SESSION['Coeficiente_de_Rugosidade_da_Linha_Succao_a']) == false){
                                 unset($_SESSION['Coeficiente_de_Rugosidade_da_Linha_Succao_a']);
								 echo "0";
                             }
							else{
                             echo $_SESSION['Coeficiente_de_Rugosidade_da_Linha_Succao_a'];
							}      
                    echo "</td>";
                    echo "<td >";
                         echo "Eficiência da Bomba: ";
							 if (isset($_SESSION['Eficiencia_da_Bomba_cmb_a']) == false){
                                 unset($_SESSION['Eficiencia_da_Bomba_cmb_a']);
								 echo "0";
                             }
							else{
                             echo $_SESSION['Eficiencia_da_Bomba_cmb_a'];
							}   
                    echo "</td>";						

				echo "</tr>";	

				echo "<tr>";
				   	echo "<td>";
                        echo"Coeficiente de Descarga: ";
						 if (isset($_SESSION['cd_a']) == false){
                                 unset($_SESSION['cd_a']);
								 echo "0";
                             }
							else{
                             echo $_SESSION['cd_a'];
							}
                        						
                    echo "</td>";
					echo "<td>";
					    echo "Turno de Rega: ";
						 if (isset($_SESSION['turno_rega_irrigacao_a']) == false){
                                 unset($_SESSION['turno_rega_irrigacao_a']);
								 echo "0";
                             }
							else{
                             echo $_SESSION['turno_rega_irrigacao_a']; 
							}
						                          
                    echo "</td>";
					echo "<td>";
					        echo "Lâmina Bruta Ajustada: ";
							if (isset($_SESSION['lamina_bruta_ajustada_a']) == false){
                                 unset($_SESSION['lamina_bruta_ajustada_a']);
								 echo "0";
                             }
							else{
                             echo $_SESSION['lamina_bruta_ajustada_a'];
							}
                            
                    echo "</td>";
					echo "<td >";
                        echo "Tempo Necessario por Posição: "; 
						if (isset($_SESSION['as_tempo_necessario_posicao_a']) == false){
                                 unset($_SESSION['as_tempo_necessario_posicao_a']);
								 echo "0";
                             }
							else{
                             echo $_SESSION['as_tempo_necessario_posicao_a'];
							}
                        						
                    echo "</td>";
					echo "<td >";
                          echo "F da LL: ";
							 if (isset($_SESSION['fll_a']) == false){
                                 unset($_SESSION['fll_a']);
								 echo "0";
                             }
							else{
                             echo $_SESSION['fll_a'];
							}    
                    echo "</td>";
                    echo "<td >";
                         echo "Diametro Calculado da LP: ";
							 if (isset($_SESSION['diametro_calculado_lp_a']) == false){
                                 unset($_SESSION['diametro_calculado_lp_a']);
								 echo "0";
                             }
							else{
                             echo $_SESSION['diametro_calculado_lp_a'];
							}     
                    echo "</td>";
                    echo "<td >";
                         echo "Comprimento da LR: ";
							 if (isset($_SESSION['Comprimento_da_Linha_de_Recalque_a']) == false){
                                 unset($_SESSION['Comprimento_da_Linha_de_Recalque_a']);
								 echo "0";
                             }
							else{
                             echo $_SESSION['Comprimento_da_Linha_de_Recalque_a'];
							}   
                    echo "</td>";
                    echo "<td >";
                         echo "Comprimento da LS: ";
							 if (isset($_SESSION['Comprimento_da_Linha_Succao_a']) == false){
                                 unset($_SESSION['Comprimento_da_Linha_Succao_a']);
								 echo "0";
                             }
							else{
                             echo $_SESSION['Comprimento_da_Linha_Succao_a'];
							}    
                    echo "</td>";
                    echo "<td >";
                         echo "Potência do Motor: ";
							 if (isset($_SESSION['potencia_motor_cmb_a']) == false){
                                 unset($_SESSION['potencia_motor_cmb_a']);
								 echo "0";
                             }
							else{
                             echo $_SESSION['potencia_motor_cmb_a'];
							}     
                    echo "</td>";						

				echo "</tr>";
				
				echo "<tr>";
				   	echo "<td>";
                        echo "Área dos Bocais: ";
						if (isset($_SESSION['ab_a']) == false){
                                 unset($_SESSION['ab_a']);
								 echo "0";
                             }
							else{
                             echo $_SESSION['ab_a'];
							}
                        						
                    echo "</td>";
					echo "<td>";
					    echo "Dias de Folga: ";
						if (isset($_SESSION['dias_a']) == false){
                                 unset($_SESSION['dias_a']);
								 echo "0";
                             }
							else{
                             echo $_SESSION['dias_a']; 
							}
						                          
                    echo "</td>";
					echo "<td>";
                    echo "</td>";
					echo "<td >";
                         echo "Tmud: ";
						 if (isset($_SESSION['as_Tmud_a']) == false){
                                 unset($_SESSION['as_Tmud_a']);
								 echo "0";
                             }
							else{
                             echo $_SESSION['as_Tmud_a'];
							}
                         						 
                    echo "</td>";
					echo "<td >";
                          echo "HF do Limite da LL: ";
							 if (isset($_SESSION['hfll_a']) == false){
                                 unset($_SESSION['hfll_a']);
								 echo "0";
                             }
							else{
                             echo $_SESSION['hfll_a'];
							}     
                    echo "</td>";
                    echo "<td >";
                         echo "Diametro Nominal da LP: ";
							 if (isset($_SESSION['diametro_nominal_lp_a']) == false){
                                 unset($_SESSION['diametro_nominal_lp_a']);
								 echo "0";
                             }
							else{
                             echo $_SESSION['diametro_nominal_lp_a'];
							}       
                    echo "</td>";
                    echo "<td >";
                         echo "Material (DN/PN): ";
							 if (isset($_SESSION['materiallr_a']) == false){
                                 unset($_SESSION['materiallr_a']);
								 echo "0";
                             }
							else{
                             echo $_SESSION['materiallr_a'];
							}    
                    echo "</td>";
                    echo "<td >";
                         echo "Material (DN/PN): ";
							 if (isset($_SESSION['materialls_a']) == false){
                                 unset($_SESSION['materialls_a']);
								 echo "0";
                             }
							else{
                             echo $_SESSION['materialls_a'];
							}    
                    echo "</td>";
                    echo "<td >";
                          echo "Eficiência do Motor: ";
							 if (isset($_SESSION['Eficiencia_do_Motor_cmb_a']) == false){
                                 unset($_SESSION['Eficiencia_do_Motor_cmb_a']);
								 echo "0";
                             }
							else{
                             echo $_SESSION['Eficiencia_do_Motor_cmb_a'];
							}    
                    echo "</td>";						

				echo "</tr>";
				
				echo "<tr>";
				   	echo "<td>";
                        echo "Espaçamento dos Aspersores: ";
						if (isset($_SESSION['as_eda_a']) == false){
                                 unset($_SESSION['as_eda_a']);
								 echo "0";
                             }
							else{
                             echo $_SESSION['as_eda_a'];
							}
                        						
                    echo "</td>";
					echo "<td>";
                        echo "Período de Irrigação: ";
						if (isset($_SESSION['periodo_irrigacao_a']) == false){
                                 unset($_SESSION['periodo_irrigacao_a']);
								 echo "0";
                             }
							else{
                             echo $_SESSION['periodo_irrigacao_a'];
							}
						   
                    echo "</td>";
					echo "<td>";
                    echo "</td>";
					echo "<td >";
                         echo "Tempo Necessario por Posição Total: ";
						 if (isset($_SESSION['as_tempo_necessario_posicao_total_a']) == false){
                                 unset($_SESSION['as_tempo_necessario_posicao_total_a']);
								 echo "0";
                             }
							else{
                             echo $_SESSION['as_tempo_necessario_posicao_total_a'];
							}
                         						 
                    echo "</td>";
					echo "<td >";
                         echo "Diametro da LL: ";
							 if (isset($_SESSION['diametroll_a']) == false){
                                 unset($_SESSION['diametroll_a']);
								 echo "0";
                             }
							else{
                             echo $_SESSION['diametroll_a'];
							}       
                    echo "</td>";
                    echo "<td >";
                         echo "Coeficiente da LP (Cg): ";
							 if (isset($_SESSION['Cg_lp_a']) == false){
                                 unset($_SESSION['Cg_lp_a']);
								 echo "0";
                             }
							else{
                             echo $_SESSION['Cg_lp_a'];
							}    
                    echo "</td>";
                    echo "<td >";
                         echo "Diferença de Nível da LR: ";
							 if (isset($_SESSION['dnlr_a']) == false){
                                 unset($_SESSION['dnlr_a']);
								 echo "0";
                             }
							else{
                             echo $_SESSION['dnlr_a'];
							}    
                    echo "</td>";
                    echo "<td >";
                        echo "Diferença de Nível da LS: ";
							 if (isset($_SESSION['dnls_a']) == false){
                                 unset($_SESSION['dnls_a']);
								 echo "0";
                             }
							else{
                             echo $_SESSION['dnls_a'];
							}     
                    echo "</td>";
                    echo "<td >";
                          echo "Consumo Médio (cv): ";
							 if (isset($_SESSION['consumo_medio_cv_cmb_a']) == false){
                                 unset($_SESSION['consumo_medio_cv_cmb_a']);
								 echo "0";
                             }
							else{
                             echo $_SESSION['consumo_medio_cv_cmb_a'];
							}     
                    echo "</td>";						

				echo "</tr>";
				
				echo "<tr>";
				   	echo "<td>";
                        echo "Espaçamento entre Aspersores: ";
						 if (isset($_SESSION['as_eea_a']) == false){
                                 unset($_SESSION['as_eea_a']);
								 echo "0";
                             }
							else{
                             echo $_SESSION['as_eea_a'];
							}
                        						
                    echo "</td>";
					echo "<td>";
                    echo "</td>";
					echo "<td>";
                    echo "</td>";
					echo "<td >";
                          echo "Nº de Horas de Funcionamento/Dia: ";
						  if (isset($_SESSION['as_nhifp_a']) == false){
                                 unset($_SESSION['as_nhifp_a']);
								 echo "0";
                             }
							else{
                             echo $_SESSION['as_nhifp_a'];
							}
                          						  
                    echo "</td>";
					echo "<td >";
                          echo "Diametro Nominal da LL: ";
							 if (isset($_SESSION['diametro_nominal_ll_a']) == false){
                                 unset($_SESSION['diametro_nominal_ll_a']);
								 echo "0";
                             }
							else{
                             echo $_SESSION['diametro_nominal_ll_a'];
							}     
                    echo "</td>";
                    echo "<td >";
                          echo "Perda de Carga da LP: ";
							 if (isset($_SESSION['perda_carga_lp_a']) == false){
                                 unset($_SESSION['perda_carga_lp_a']);
								 echo "0";
                             }
							else{
                             echo $_SESSION['perda_carga_lp_a'];
							}  
                    echo "</td>";
                    echo "<td >";
                         echo "Perda de Carga da LR: ";
							 if (isset($_SESSION['perda_carga_lr_a']) == false){
                                 unset($_SESSION['perda_carga_lr_a']);
								 echo "0";
                             }
							else{
                             echo $_SESSION['perda_carga_lr_a'];
							}   
                    echo "</td>";
                    echo "<td >";
                         echo "Perda de Carga da LS: ";
							 if (isset($_SESSION['perda_carga_ls_a']) == false){
                                 unset($_SESSION['perda_carga_ls_a']);
								 echo "0";
                             }
							else{
                             echo $_SESSION['perda_carga_ls_a'];
							}      
                    echo "</td>";
                    echo "<td >";
                         echo "Consumo Médio (kw): ";
							 if (isset($_SESSION['consumo_medio_kw_cmb_a']) == false){
                                 unset($_SESSION['consumo_medio_kw_cmb_a']);
								 echo "0";
                             }
							else{
                             echo $_SESSION['consumo_medio_kw_cmb_a'];
							}      
                    echo "</td>";						

				echo "</tr>";
				
				echo "<tr>";
				   	echo "<td>";
                        echo "Espaçamento entre Linhas Laterais: ";
						if (isset($_SESSION['as_ell_a']) == false){
                                 unset($_SESSION['as_ell_a']);
								 echo "0";
                             }
							else{
                             echo $_SESSION['as_ell_a'];
							}					
                    echo "</td>";
					echo "<td>";
                    echo "</td>";
					echo "<td>";
                    echo "</td>";
					echo "<td >";
                          echo "Nº de Posições Irrigadas: ";
						  if (isset($_SESSION['as_numero_posicoes_irrigadas_a']) == false){
                                 unset($_SESSION['as_numero_posicoes_irrigadas_a']);
								 echo "0";
                             }
							else{
                             echo $_SESSION['as_numero_posicoes_irrigadas_a'];
							}
						  
                    echo "</td>";
					echo "<td >";
                         echo "Perda de Carga da LL: ";
							 if (isset($_SESSION['perda_carga_ll_a']) == false){
                                 unset($_SESSION['perda_carga_ll_a']);
								 echo "0";
                             }
							else{
                             echo $_SESSION['perda_carga_ll_a'];
							}     
                    echo "</td>";
                    echo "<td >";
                          echo "Perda de Carga Total da LP: ";
							 if (isset($_SESSION['perda_carga_total_lp_a']) == false){
                                 unset($_SESSION['perda_carga_total_lp_a']);
								 echo "0";
                             }
							else{
                             echo $_SESSION['perda_carga_total_lp_a'];
							}      
                    echo "</td>";
                    echo "<td >";
                            echo "Perda de Carga Total da LR: ";
							 if (isset($_SESSION['perda_carga_total_lr_a']) == false){
                                 unset($_SESSION['perda_carga_total_lr_a']);
								 echo "0";
                             }
							else{
                             echo $_SESSION['perda_carga_total_lr_a'];
							}  
                    echo "</td>";
                    echo "<td >";
                            echo "Perda de Carga Total da LS: ";
							 if (isset($_SESSION['perda_carga_total_ls_a']) == false){
                                 unset($_SESSION['perda_carga_total_ls_a']);
								 echo "0";
                             }
							else{
                             echo $_SESSION['perda_carga_total_ls_a'];
							}      
                    echo "</td>";
                    echo "<td >";
                            
                    echo "</td>";						

				echo "</tr>";
				
				echo "<tr>";
				   	echo "<td>";						
                    echo "</td>";
					echo "<td>";
                    echo "</td>";
					echo "<td>";
                    echo "</td>";
					echo "<td >";
                          echo "Comprimento da Área: ";
						  if (isset($_SESSION['as_comprimento_a']) == false){
                                 unset($_SESSION['as_comprimento_a']);
								 echo "0";
                             }
							else{
                             echo $_SESSION['as_comprimento_a'];
							}
                          						  
                    echo "</td>";
					echo "<td >";
                         echo "Pressão de Serviço da LL: ";
							 if (isset($_SESSION['pressao_servico_ll_a']) == false){
                                 unset($_SESSION['pressao_servico_ll_a']);
								 echo "0";
                             }
							else{
                             echo $_SESSION['pressao_servico_ll_a'];
							}   
                    echo "</td>";
                    echo "<td >";
                        echo "Velocidade de Escoamento da LP: ";
							 if (isset($_SESSION['velocidade_escoamento_lp_a']) == false){
                                 unset($_SESSION['velocidade_escoamento_lp_a']);
								 echo "0";
                             }
							else{
                             echo $_SESSION['velocidade_escoamento_lp_a'];
							}     
                    echo "</td>";
                    echo "<td >";
                            echo "Velocidade de Escoamento da LR: ";
							 if (isset($_SESSION['velocidade_escoamento_lr_a']) == false){
                                 unset($_SESSION['velocidade_escoamento_lr_a']);
								 echo "0";
                             }
							else{
                             echo $_SESSION['velocidade_escoamento_lr_a'];
							}       
                    echo "</td>";
                    echo "<td >";
                          echo "Velocidade de Escoamento da LS: ";
							 if (isset($_SESSION['velocidade_escoamento_ls_a']) == false){
                                 unset($_SESSION['velocidade_escoamento_ls_a']);
								 echo "0";
                             }
							else{
                             echo $_SESSION['velocidade_escoamento_ls_a'];
							}       
                    echo "</td>";
                    echo "<td >";
                            
                    echo "</td>";						

				echo "</tr>";
				
				echo "<tr>";
				   	echo "<td>";						
                    echo "</td>";
					echo "<td>";
                    echo "</td>";
					echo "<td>";
                    echo "</td>";
					echo "<td >";
                         echo "Nº Total de Posições: ";
						 if (isset($_SESSION['as_numero_total_posicoes_a']) == false){
                                 unset($_SESSION['as_numero_total_posicoes_a']);
								 echo "0";
                             }
							else{
                             echo $_SESSION['as_numero_total_posicoes_a']; 
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
                    echo "<td >";
                            
                    echo "</td>";						

				echo "</tr>";
				
				echo "<tr>";
				   	echo "<td>";						
                    echo "</td>";
					echo "<td>"; 
                    echo "</td>";
					echo "<td>";
                    echo "</td>";
					echo "<td >";
                         echo "Nº de Posições a serem Irrigadas: ";
						 if (isset($_SESSION['as_numero_posicoes_serem_irrigadas_a']) == false){
                                 unset($_SESSION['as_numero_posicoes_serem_irrigadas_a']);
								 echo "0";
                             }
							else{
                             echo $_SESSION['as_numero_posicoes_serem_irrigadas_a'];
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
                    echo "<td >";
                            
                    echo "</td>";						

				echo "</tr>";
				
				echo "<tr>";
				   	echo "<td>";						
                    echo "</td>";
					echo "<td>";						  
                    echo "</td>";
					echo "<td>";
                    echo "</td>";
					echo "<td >";
                        echo "Nº de Linhas Laterais: ";
						if (isset($_SESSION['as_numero_linhas_laterais_a']) == false){
                                 unset($_SESSION['as_numero_linhas_laterais_a']);
								 echo "0";
                             }
							else{
                             echo $_SESSION['as_numero_linhas_laterais_a'];
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
                    echo "<td >";
                            
                    echo "</td>";						

				echo "</tr>";
				
				echo "<tr>";
				   	echo "<td>";						
                    echo "</td>";
					echo "<td>";						  
                    echo "</td>";
					echo "<td>";
                    echo "</td>";
					echo "<td >";
                        echo "Largura da Área: ";
						if (isset($_SESSION['as_largura_area_a']) == false){
                                 unset($_SESSION['as_largura_area_a']);
								 echo "0";
                             }
							else{
                             echo $_SESSION['as_largura_area_a'];
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
                    echo "<td >";
                            
                    echo "</td>";						

				echo "</tr>";
				
				echo "<tr>";
				   	echo "<td>";						
                    echo "</td>";
					echo "<td>";						  
                    echo "</td>";
					echo "<td>";
                    echo "</td>";
					echo "<td >";
                        echo "Nº Total de Aspersores por LL: ";
						if (isset($_SESSION['as_ntall_a']) == false){
                                 unset($_SESSION['as_ntall_a']);
								 echo "0";
                             }
							else{
                             echo $_SESSION['as_ntall_a'];
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
                    echo "<td >";
                            
                    echo "</td>";						

				echo "</tr>";
				
				echo "<tr>";
				   	echo "<td>";						
                    echo "</td>";
					echo "<td>";						  
                    echo "</td>";
					echo "<td>";
                    echo "</td>";
					echo "<td >";
                        echo "Nº Total de Aspersores em Funcionamento: ";
						if (isset($_SESSION['as_ntas_a']) == false){
                                 unset($_SESSION['as_ntas_a']);
								 echo "0";
                             }
							else{
                             echo $_SESSION['as_ntas_a'];
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
                    echo "<td >";
                            
                    echo "</td>";						

				echo "</tr>";
				
				echo "<tr>";
				   	echo "<td>";						
                    echo "</td>";
					echo "<td>";						  
                    echo "</td>";
					echo "<td>";
                    echo "</td>";
					echo "<td >";
                        echo "Vazão da Linha Lateral: ";
						if (isset($_SESSION['as_vazaoll_a']) == false){
                                 unset($_SESSION['as_vazaoll_a']);
								 echo "0";
                             }
							else{
                             echo $_SESSION['as_vazaoll_a'];
							 echo " m³/h";
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
                    echo "<td >";
                            
                    echo "</td>";						

				echo "</tr>";
				
				echo "<tr>";
				   	echo "<td>";						
                    echo "</td>";
					echo "<td>";						  
                    echo "</td>";
					echo "<td>";
                    echo "</td>";
					echo "<td >";
                        echo "Vazão Total: ";
						if (isset($_SESSION['as_vazaot_a']) == false){
                                 unset($_SESSION['as_vazaot_a']);
								 echo "0";
                             }
							else{
                             echo $_SESSION['as_vazaot_a'];
							 echo " m³/h";
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
                    echo "<td >";
                            
                    echo "</td>";						

				echo "</tr>";
				
				
				
                echo "</table>";
				
                ?>
				      
				</div>
				<br><br>
				   
				   <center><a href="..//../../../salvar_dados_aspersao.php" class="myButton"><font color='#FFF'>Salvar Dados</font></a></center>
					
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