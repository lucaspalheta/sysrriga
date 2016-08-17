<?php
      session_start();
  
  include "valida_cookies.inc";
  
if((!isset ($_SESSION['nome_usuario']) == true) and (!isset ($_SESSION['senha_usuario']) == true))
{
	unset($_SESSION['nome_usuario']);
	unset($_SESSION['senha_usuario']);
	header('location:index.php');
	}

$logado = $_SESSION['nome_usuario'];
?>

<html lang="pt-br">
<head>
	<title>Sysrriga - Beta</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
	<link rel='stylesheet' id='camera-css'  href='css/camera.css' type='text/css' media='all'>

	<link rel="stylesheet" type="text/css" href="css/slicknav.css">
	<link rel="stylesheet" href="css/prettyPhoto.css" type="text/css" media="screen" title="prettyPhoto main stylesheet" charset="utf-8" />
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="css/style.css">
	<link href="css/style1.css" type="text/css" rel="stylesheet" media="all">


	<script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>

	<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,700|Open+Sans:700' rel='stylesheet' type='text/css'>
	<script type="text/javascript" src="js/jquery.mobile.customized.min.js"></script>
	<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
	<script type="text/javascript" src="js/camera.min.js"></script>
	<script type="text/javascript" src="js/myscript.js"></script>
	<script src="js/sorting.js" type="text/javascript"></script>
	<script src="js/jquery.isotope.js" type="text/javascript"></script>
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

	<!--script de login-->

</head>
<body>

<div id="wrapper">
	<div id="leftWrapper">
		<a href="#" class="container">
			<img src="images/logo.png">
		</a>
		<div id="listView" class="list">
			<li><a href="logado.php">Home</a></li>
            <li><a href="projeto.php">Mostrar Projeto</a></li>

		</div>
	</div>

	<div id="rightWrapper">
	
		<div id="header">
			
         <a id="fullPage" href="#">|||</a>
			<a href="#">
				<img src="images/logo.png">
			</a>
			<form class="navbar-form  navbar-right container div-pesquisa" role="Pesquisar" style="margin-right: 250px" >

					   <ul class="nav navbar-nav navbar-right">
						  <li class="dropdown">
							  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><img src="images/logado3.png" alt=""/> <?php echo "<font color='#FFF'> $logado </font>"; ?> </a>
							  <ul class="dropdown-menu">
								<li><a href="index.php">Sair</a></li>
							  </ul>
						  </li>
					  </ul>
			</form>
		</div>


		<div id="contentWrapper">


			<div id="news">
		<div id="contentWrapper">

<!--div de corpo da página-->
		<div class="fltr2">
					                     	
								
<?php
	 
  
     if(!isset($_SESSION['id_projeto'])){
         $_SESSION['id_projeto'] = array();
      }
       
       
      if(isset($_GET['acao'])){
          
         if($_GET['acao'] == 'add'){
            $id = intval($_GET['id']);
            if(!isset($_SESSION['id_projeto'][$id])){
               $_SESSION['id_projeto'][$id] = 1;
            }else{
               $_SESSION['id_projeto'][$id] = 1 + 1;
            }
         }
  
                    include "IFPA_sysrriga_20160010019982000.inc";
         
                              $sql   = "SELECT *  FROM dados_projeto WHERE id_projeto= '$id'";
                              $qr    = mysql_query($sql) or die(mysql_error());
                              $ln    = mysql_fetch_assoc($qr);
                               
                              $id_projeto = $ln['id_projeto']; $_SESSION['id_projeto_alterar'] = $ln['id_projeto'];
							  $nome_do_projeto = $ln['proj_nome'];
							  $tec = $ln['proj_tecResponsavel'];
							  $crea = $ln['proj_nCrea'];
							  $proprietario = $ln['proj_proprietario'];
							  
							  /*------------------------------------------------*/
							  
							  $sql2   = "SELECT *  FROM dados_propriedade WHERE id_projeto= '$id'";
                              $qr2    = mysql_query($sql2) or die(mysql_error());
                              $ln2    = mysql_fetch_assoc($qr2);
                               
                              $nome = $ln2['prop_nome'];
							  $endereco = $ln2['prop_endereco'];
							  $cep = $ln2['prop_cep'];
							  $cidade = $ln2['prop_cidade'];
							  
							  /*------------------------------------------------*/
							  
							  $sql3   = "SELECT *  FROM dados_gerais WHERE id_projeto= '$id'";
                              $qr3    = mysql_query($sql3) or die(mysql_error());
                              $ln3    = mysql_fetch_assoc($qr3);
                               
                              $eto = $ln3['g_eto'];
							  $dta = $ln3['g_dta'];
							  $ea = $ln3['g_ea'];
							  $hd = $ln3['g_hd'];
							  $tr = $ln3['g_tr'];
							  $df = $ln3['g_df'];	

                             /*------------------------------------------------*/	

                              $sql4   = "SELECT *  FROM dados_area WHERE id_projeto= '$id'";
                              $qr4    = mysql_query($sql4) or die(mysql_error());
                              $ln4    = mysql_fetch_assoc($qr4);
                               
                              $area_largura = $ln4['area_largura'];
							  $area_comprimento = $ln4['area_comprimento'];
							  $area_dnlp = $ln4['area_dnlp'];
							  $area_dnll = $ln4['area_dnll'];
							  $area_comprimento_lr = $ln4['area_comprimento_lr'];
							  $area_comprimento_ls = $ln4['area_comprimento_ls'];
							  $area_dnlr = $ln4['area_dnlr'];
							  $area_dnls = $ln4['area_dnls'];
							  $area_tf = $ln4['area_tf'];
							  $area_nts = $ln4['area_nts'];			

                            /*------------------------------------------------*/

                              $sql5   = "SELECT *  FROM dados_cultura WHERE id_projeto= '$id'";
                              $qr5    = mysql_query($sql5) or die(mysql_error());
                              $ln5    = mysql_fetch_assoc($qr5);
                               
                              $cult_nome = $ln5['cult_nome'];
							  $cult_data = $ln5['cult_data'];
							  $cult_esp_plantas = $ln5['cult_esp_plantas'];
							  $cult_esp_fileiras = $ln5['cult_esp_fileiras'];
							  $cult_area_sombreada = $ln5['cult_area_sombreada'];
							  $cult_z = $ln5['cult_z'];
							  $cult_f = $ln5['cult_f'];
							  $cult_kc = $ln5['cult_kc'];
							  $cult_etc = $ln5['cult_etc'];	

                            /*------------------------------------------------*/	

                              $sql6   = "SELECT *  FROM dados_solo WHERE id_projeto= '$id'";
                              $qr6    = mysql_query($sql6) or die(mysql_error());
                              $ln6    = mysql_fetch_assoc($qr6);
                               
                              $solo_cc = $ln6['solo_cc'];
							  $solo_pm = $ln6['solo_pm'];
							  $solo_ds = $ln6['solo_ds'];
							  $solo_irn = $ln6['solo_irn'];
							  $solo_itn = $ln6['solo_itn'];
							  $solo_cra = $ln6['solo_cra'];
							  $solo_cta	 = $ln6['solo_cta'];
							  $solo_vib = $ln6['solo_vib'];							
						  
						    /*---------------------- Aspersão --------------------------*/
							
							  $sql7   = "SELECT * FROM as_caracteristicas_aspersor WHERE id_projeto= '$id'";
                              $qr7    = mysql_query($sql7) or die(mysql_error());
                              $ln7    = mysql_fetch_assoc($qr7);
                               
                              $as_nome_a = $ln7['as_nome_a'];
							  $as_marca_a = $ln7['as_marca_a'];
							  $as_ca_pressao_servico_a = $ln7['as_ca_pressao_servico_a'];
							  $as_vazao_a = $ln7['as_vazao_a'];
							  $as_coeficiente_descarga_a = $ln7['as_coeficiente_descarga_a'];
							  $as_area_bocais_a = $ln7['as_area_bocais_a'];
							  $as_espacamento_dos_aspersores_a = $ln7['as_espacamento_dos_aspersores_a'];
							  $as_espacamento_entre_aaspersores_a = $ln7['as_espacamento_entre_aaspersores_a'];
							  $as_espacamento_entre_ll_a = $ln7['as_espacamento_entre_ll_a'];
							  
							/*------------------------------------------------*/
							
							  $sql8   = "SELECT * FROM as_lamina_irrigacao WHERE id_projeto= '$id'";
                              $qr8    = mysql_query($sql8) or die(mysql_error());
                              $ln8    = mysql_fetch_assoc($qr8);
                               
                              $as_Irrigacao_Real_Necessaria_li_a = $ln8['as_Irrigacao_Real_Necessaria_li_a'];
							  $as_Eficiencia_de_aplicacao_li_a = $ln8['as_Eficiencia_de_aplicacao_li_a'];
							  $as_ETcloc_li_a = $ln8['as_ETcloc_li_a'];
							  $as_dias_li_a = $ln8['as_dias_li_a'];
							  $as_lamina_bruta_irrigacao_li_a = $ln8['as_lamina_bruta_irrigacao_li_a'];
							  $as_turno_rega_irrigacao_li_a = $ln8['as_turno_rega_irrigacao_li_a'];
							  $as_periodo_irrigacao_li_a = $ln8['as_periodo_irrigacao_li_a'];
							  
							/*------------------------------------------------*/
							
							  $sql9   = "SELECT * FROM as_lamina_irrigacao_ajustada WHERE id_projeto= '$id'";
                              $qr9    = mysql_query($sql9) or die(mysql_error());
                              $ln9    = mysql_fetch_assoc($qr9);
                               
							  $as_Turno_de_Rega_Adotado_ajustada_a = $ln9['as_Turno_de_Rega_Adotado_ajustada_a'];
							  $as_Eficiencia_de_Aplicacao_ajustada_a = $ln9['as_Eficiencia_de_Aplicacao_ajustada_a'];
							  $as_lamina_liquida_ajustada_a = $ln9['as_lamina_liquida_ajustada_a'];
							  $as_lamina_bruta_ajustada_a = $ln9['as_lamina_bruta_ajustada_a'];
							  
							/*------------------------------------------------*/

                              $sql10   = "SELECT * FROM as_aspersao WHERE id_projeto= '$id'";
                              $qr10    = mysql_query($sql10) or die(mysql_error());
                              $ln10    = mysql_fetch_assoc($qr10);
                               
							  $as_vazao_as_a = $ln10['as_vazao_as_a'];
							  $as_es1_as_a = $ln10['as_es1_as_a'];
							  $as_es2_as_a = $ln10['as_es2_as_a'];
							  $as_Tmud_a = $ln10['as_Tmud_a'];
							  $as_nhifp_a = $ln10['as_nhifp_a'];
							  $as_comprimento_as_a = $ln10['as_comprimento_as_a'];
							  $as_largura_area_as_a = $ln10['as_largura_area_as_a'];
							  $as_intensidade_aplicacao_as_a = $ln10['as_intensidade_aplicacao_as_a'];
							  $as_tempo_necessario_posicao_as_a = $ln10['as_tempo_necessario_posicao_as_a'];
							  $as_tempo_necessario_posicao_total_as_a = $ln10['as_tempo_necessario_posicao_total_as_a'];
							  $as_numero_posicoes_irrigadas_as_a = $ln10['as_numero_posicoes_irrigadas_as_a'];
							  $as_numero_total_posicoes_as_a = $ln10['as_numero_total_posicoes_as_a'];
							  $as_numero_posicoes_serem_irrigadas_as_a = $ln10['as_numero_posicoes_serem_irrigadas_as_a'];
							  $as_numero_linhas_laterais_as_a = $ln10['as_numero_linhas_laterais_as_a'];
							  $as_ntall_as_a = $ln10['as_ntall_as_a'];
							  $as_ntas_as_a = $ln10['as_ntas_as_a'];
							  $as_vazaoll_as_a = $ln10['as_vazaoll_as_a'];
							  $as_vazaot_as_a = $ln10['as_vazaot_as_a'];

                          /*------------------------------------------------*/

                              $sql11   = "SELECT * FROM as_linha_lateral WHERE id_projeto= '$id'";
                              $qr11    = mysql_query($sql11) or die(mysql_error());
                              $ln11    = mysql_fetch_assoc($qr11);
                               
							  $as_vazaoll_a = $ln11['as_vazaoll_a'];
							  $as_Cg_da_Linha_Lateral_a = $ln11['as_Cg_da_Linha_Lateral_a'];
							  $as_diametro_nominal_ll_a = $ln11['as_diametro_nominal_ll_a'];
							  $as_comprimentoll_a = $ln11['as_comprimentoll_a'];
							  $as_diferenca_nivelll_a = $ln11['as_diferenca_nivelll_a'];
							  $as_fll_a = $ln11['as_fll_a'];
							  $as_hfll_a = $ln11['as_hfll_a'];
							  $as_diametroll_a = $ln11['as_diametroll_a'];
							  $as_perda_carga_ll_a = $ln11['as_perda_carga_ll_a'];
							  $as_pressao_servico_ll_a = $ln11['as_pressao_servico_ll_a'];

                          /*------------------------------------------------*/

                              $sql12   = "SELECT * FROM as_linha_principal WHERE id_projeto= '$id'";
                              $qr12    = mysql_query($sql12) or die(mysql_error());
                              $ln12    = mysql_fetch_assoc($qr12);
                               
							  $as_vazaolp_a = $ln12['as_vazaolp_a'];
							  $as_Cg_lp_a = $ln12['as_Cg_lp_a'];
							  $as_diametro_nominal_lp_a = $ln12['as_diametro_nominal_lp_a'];
							  $as_comprimento_lp_a = $ln12['as_comprimento_lp_a'];
							  $as_diferenca_nivel_lp_a = $ln12['as_diferenca_nivel_lp_a'];
							  $as_f_lp_a = $ln12['as_f_lp_a'];
							  $as_diametro_calculado_lp_a = $ln12['as_diametro_calculado_lp_a'];
							  $as_perda_carga_lp_a = $ln12['as_perda_carga_lp_a'];
							  $as_perda_carga_total_lp_a = $ln12['as_perda_carga_total_lp_a'];
							  $as_velocidade_escoamento_lp_a = $ln12['as_velocidade_escoamento_lp_a'];	

                          /*------------------------------------------------*/		

                              $sql13   = "SELECT * FROM as_linha_recalque WHERE id_projeto= '$id'";
                              $qr13    = mysql_query($sql13) or die(mysql_error());
                              $ln13    = mysql_fetch_assoc($qr13);
                               
							  $as_Vazao_da_Linha_de_Recalque_a = $ln13['as_Vazao_da_Linha_de_Recalque_a'];
							  $as_Velocidade_Maxima_da_Linha_de_Recalque_a = $ln13['as_Velocidade_Maxima_da_Linha_de_Recalque_a'];
							  $as_Coeficiente_de_Rugosidade_da_Linha_de_Recalque_a = $ln13['as_Coeficiente_de_Rugosidade_da_Linha_de_Recalque_a'];
							  $as_Comprimento_da_Linha_de_Recalque_a = $ln13['as_Comprimento_da_Linha_de_Recalque_a'];
							  $as_materiallr_a = $ln13['as_materiallr_a'];
							  $as_dnlr_a = $ln13['as_dnlr_a'];
							  $as_diametro_calculado_lr_a = $ln13['as_diametro_calculado_lr_a'];
							  $as_perda_carga_lr_a = $ln13['as_perda_carga_lr_a'];
							  $as_perda_carga_total_lr_a = $ln13['as_perda_carga_total_lr_a'];
							  $as_velocidade_escoamento_lr_a = $ln13['as_velocidade_escoamento_lr_a'];	

                         /*------------------------------------------------*/		

                              $sql14   = "SELECT * FROM as_linha_succao WHERE id_projeto= '$id'";
                              $qr14    = mysql_query($sql14) or die(mysql_error());
                              $ln14    = mysql_fetch_assoc($qr14);
                               
							  $as_Vazao_da_Linha_de_Succao_a = $ln14['as_Vazao_da_Linha_de_Succao_a'];
							  $as_Velocidade_Maxima_da_Linha_de_Succao_a = $ln14['as_Velocidade_Maxima_da_Linha_de_Succao_a'];
							  $as_Coeficiente_de_Rugosidade_da_Linha_Succao_a = $ln14['as_Coeficiente_de_Rugosidade_da_Linha_Succao_a'];
							  $as_Comprimento_da_Linha_Succao_a = $ln14['as_Comprimento_da_Linha_Succao_a'];
							  $as_materialls_amaterialls_a = $ln14['as_materialls_amaterialls_a'];
							  $as_dnls_a = $ln14['as_dnls_a'];
							  $as_diametro_calculado_ls_a = $ln14['as_diametro_calculado_ls_a'];
							  $as_perda_carga_ls_a = $ln14['as_perda_carga_ls_a'];
							  $as_perda_carga_total_ls_a = $ln14['as_perda_carga_total_ls_a'];
							  $as_velocidade_escoamento_ls_a = $ln14['as_velocidade_escoamento_ls_a'];	

                         /*------------------------------------------------*/

                              $sql15   = "SELECT * FROM as_conjunto_bomba WHERE id_projeto= '$id'";
                              $qr15    = mysql_query($sql15) or die(mysql_error());
                              $ln15    = mysql_fetch_assoc($qr15);
                               
							  $as_Perda_de_Carga_Localizada_cmb_a = $ln15['as_Perda_de_Carga_Localizada_cmb_a'];
							  $as_Eficiencia_da_Bomba_cmb_a = $ln15['as_Eficiencia_da_Bomba_cmb_a'];
							  $as_Eficiencia_do_Motor_cmb_a = $ln15['as_Eficiencia_do_Motor_cmb_a'];
							  $as_perda_carga_total_cmb_a = $ln15['as_perda_carga_total_cmb_a'];
							  $as_potencia_motor_cmb_a = $ln15['as_potencia_motor_cmb_a'];
							  $as_consumo_medio_cv_cmb_a = $ln15['as_consumo_medio_cv_cmb_a'];
							  $as_consumo_medio_kw_cmb_a = $ln15['as_consumo_medio_kw_cmb_a'];

                         /*-----------------------  Gotejamento  -------------------------*/

                              $sql16   = "SELECT * FROM got_dados_gotejamento WHERE id_projeto= '$id'";
                              $qr16    = mysql_query($sql16) or die(mysql_error());
                              $ln16    = mysql_fetch_assoc($qr16);
                               
							  $got_vazao_gotejador = $ln16['got_vazao_gotejador'];
							  $got_largura_faixa_molhada = $ln16['got_largura_faixa_molhada'];
							  $got_diametro_molhado = $ln16['got_diametro_molhado'];
							  $got_porcentagem_area_molhada = $ln16['got_porcentagem_area_molhada'];
							  $got_pressao_servico = $ln16['got_pressao_servico'];
							  $got_numero_aspersores_planata = $ln16['got_numero_aspersores_planata'];
							  $got_intensidade_aplicacao = $ln16['got_intensidade_aplicacao'];
							  $got_tempo_irragacao = $ln16['got_tempo_irragacao'];
							  $got_numero_maximo_setores = $ln16['got_numero_maximo_setores'];
							  $got_conexao_gotejador_linha = $ln16['got_conexao_gotejador_linha'];
							  $got_comprimento_linha_lateral = $ln16['got_comprimento_linha_lateral'];
							  $got_perda_carga_admissivel = $ln16['got_perda_carga_admissivel'];
							  $got_perda_carga_admissivel_calculada = $ln16['got_perda_carga_admissivel_calculada'];
							  $got_numero_gotejador_ll = $ln16['got_numero_gotejador_ll'];
							  $got_vazao_por_ll = $ln16['got_vazao_por_ll'];	

                         /*------------------------------------------------*/

                              $sql17   = "SELECT * FROM got_lamina_irrigacao WHERE id_projeto= '$id'";
                              $qr17    = mysql_query($sql17) or die(mysql_error());
                              $ln17    = mysql_fetch_assoc($qr17);
                               
							  $got_Irrigacao_Real_Necessaria_g = $ln17['got_Irrigacao_Real_Necessaria_g'];
							  $got_Eficiencia_de_aplicacao_g = $ln17['got_Eficiencia_de_aplicacao_g'];
							  $got_Area_Sombreada_g = $ln17['got_Area_Sombreada_g'];
							  $got_Evapotranspiracao_da_Cultura_g = $ln17['got_Evapotranspiracao_da_Cultura_g'];
							  $got_Coeficiente_de_Cultivo_g = $ln17['got_Coeficiente_de_Cultivo_g'];
							  $got_Irrigacao_Total_Necessaria_g = $ln17['got_Irrigacao_Total_Necessaria_g'];
							  $got_Espacamento_entre_Plantas_g = $ln17['got_Espacamento_entre_Plantas_g'];
							  $got_Espacamento_entre_Fileiras_g = $ln17['got_Espacamento_entre_Fileiras_g'];
							  $got_lamina_bruta_irrigacao_g = $ln17['got_lamina_bruta_irrigacao_g'];
							  $got_evapotranspiracao_localizada_g = $ln17['got_evapotranspiracao_localizada_g'];
							  $got_etcloc_g = $ln17['got_etcloc_g'];
							  $got_turno_rega_g = $ln17['got_turno_rega_g'];
							  $got_volume_agua_planta_g = $ln17['got_volume_agua_planta_g'];	

                         /*------------------------------------------------*/	

                              $sql18   = "SELECT * FROM got_lamina_irrigacao_ajustada WHERE id_projeto= '$id'";
                              $qr18    = mysql_query($sql18) or die(mysql_error());
                              $ln18    = mysql_fetch_assoc($qr18);
                               
							  $got_Turno_de_Rega_Adotado2_g = $ln18['got_Turno_de_Rega_Adotado2_g'];
							  $got_Eficiencia_de_Aplicacao2_g = $ln18['got_Eficiencia_de_Aplicacao2_g'];
							  $got_lamina_liquida_ajustada2_g = $ln18['got_lamina_liquida_ajustada2_g'];
							  $got_lamina_bruta_ajustada2_g = $ln18['got_lamina_bruta_ajustada2_g'];

                         /*------------------------------------------------*/

                              $sql19   = "SELECT * FROM got_linha_lateral WHERE id_projeto= '$id'";
                              $qr19    = mysql_query($sql19) or die(mysql_error());
                              $ln19    = mysql_fetch_assoc($qr19);
                               
							  $got_Numero_de_gotejadores_por_Linha_Lateral_g = $ln19['got_Numero_de_gotejadores_por_Linha_Lateral_g'];
							  $got_Cg_da_Linha_Lateral_g = $ln19['got_Cg_da_Linha_Lateral_g'];
							  $got_Comprimento_da_Linha_Lateral_g = $ln19['got_Comprimento_da_Linha_Lateral_g'];
							  $got_HF_Admissivel_da_Linha_Lateral_g = $ln19['got_HF_Admissivel_da_Linha_Lateral_g'];
							  $got_diametro_nominal_ll_g = $ln19['got_diametro_nominal_ll_g'];
							  $got_Diferenca_de_Nivel_da_Linha_Lateral_g = $ln19['got_Diferenca_de_Nivel_da_Linha_Lateral_g'];
							  $got_vazao_linha_lateral_g = $ln19['got_vazao_linha_lateral_g'];
							  $got_f_linha_lateral_g = $ln19['got_f_linha_lateral_g'];
							  $got_diametro_linha_lateral_g = $ln19['got_diametro_linha_lateral_g'];
							  $got_perda_carga_linha_lateral_g = $ln19['got_perda_carga_linha_lateral_g'];
							  $got_pressao_inicio_linha_lateral_g = $ln19['got_pressao_inicio_linha_lateral_g'];	

                         /*------------------------------------------------*/

                              $sql20   = "SELECT * FROM got_linha_derivacao WHERE id_projeto= '$id'";
                              $qr20    = mysql_query($sql20) or die(mysql_error());
                              $ln20    = mysql_fetch_assoc($qr20);
                               
							  $got_numero_s_ld_g = $ln20['got_numero_s_ld_g'];
							  $got_Comprimento_ld_g = $ln20['got_Comprimento_ld_g'];
							  $got_Cg_da_Linha_de_Derivacao_g = $ln20['got_Cg_da_Linha_de_Derivacao_g'];
							  $got_diametro_nivel_ld_g = $ln20['got_diametro_nivel_ld_g'];
							  $got_vazao_linha_derivacao_g = $ln20['got_vazao_linha_derivacao_g'];
							  $got_diferenca_nivel_linha_derivacao_g = $ln20['got_diferenca_nivel_linha_derivacao_g'];
							  $got_f_linha_derivacao_g = $ln20['got_f_linha_derivacao_g'];
							  $got_hfadm_linha_derivacao_g = $ln20['got_hfadm_linha_derivacao_g'];
							  $got_diametro_linha_derivacao_g = $ln20['got_diametro_linha_derivacao_g'];
							  $got_perda_carga_linha_derivacao_g = $ln20['got_perda_carga_linha_derivacao_g'];
							  $got_pressao_inicio_linha_derivacao_g = $ln20['got_pressao_inicio_linha_derivacao_g'];	

                         /*------------------------------------------------*/

                              $sql21   = "SELECT * FROM got_linha_principal WHERE id_projeto= '$id'";
                              $qr21    = mysql_query($sql21) or die(mysql_error());
                              $ln21    = mysql_fetch_assoc($qr21);
                               
							  $got_numerold_g = $ln21['got_numerold_g'];
							  $got_Velocidade_Maxima_da_Linha_Principal_g = $ln21['got_Velocidade_Maxima_da_Linha_Principal_g'];
							  $got_Coeficiente_de_Rugosidade_da_Linha_Principal_g = $ln21['got_Coeficiente_de_Rugosidade_da_Linha_Principal_g'];
							  $got_Comprimento_da_Linha_Principal_g = $ln21['got_Comprimento_da_Linha_Principal_g'];
							  $got_materiallp_g = $ln21['got_materiallp_g'];
							  $got_vazao_linha_principal_g = $ln21['got_vazao_linha_principal_g'];
							  $got_diferenca_nivel_linha_principal_g = $ln21['got_diferenca_nivel_linha_principal_g'];
							  $got_diametro_calculado_linha_principal_g = $ln21['got_diametro_calculado_linha_principal_g'];
							  $got_perda_carga_linha_principal_g = $ln21['got_perda_carga_linha_principal_g'];	

                         /*------------------------------------------------*/

                              $sql22   = "SELECT * FROM got_linha_recalque WHERE id_projeto= '$id'";
                              $qr22    = mysql_query($sql22) or die(mysql_error());
                              $ln22    = mysql_fetch_assoc($qr22);
                               
							  $got_Vazao_da_Linha_de_Recalque_g = $ln22['got_Vazao_da_Linha_de_Recalque_g'];
							  $got_Velocidade_Maxima_da_Linha_de_Recalque_g	= $ln22['got_Velocidade_Maxima_da_Linha_de_Recalque_g'];
							  $got_Coeficiente_de_Rugosidade_da_Linha_de_Recalque_g = $ln22['got_Coeficiente_de_Rugosidade_da_Linha_de_Recalque_g'];
							  $got_Comprimento_da_Linha_de_Recalque_g = $ln22['got_Comprimento_da_Linha_de_Recalque_g'];
							  $got_materiallr_g = $ln22['got_materiallr_g'];
							  $got_diametro_calculado_linha_recalque_g = $ln22['got_diametro_calculado_linha_recalque_g'];
							  $got_perda_carga_linha_recalque_g = $ln22['got_perda_carga_linha_recalque_g'];

                         /*------------------------------------------------*/

                              $sql23   = "SELECT * FROM got_linha_succao WHERE id_projeto= '$id'";
                              $qr23    = mysql_query($sql23) or die(mysql_error());
                              $ln23    = mysql_fetch_assoc($qr23);
                               
							  $got_Vazao_da_Linha_de_Succao_g = $ln23['got_Vazao_da_Linha_de_Succao_g'];
							  $got_Velocidade_Maxima_da_Linha_de_Succao_g = $ln23['got_Velocidade_Maxima_da_Linha_de_Succao_g'];
							  $got_Coeficiente_de_Rugosidade_da_Linha_Succao_g = $ln23['got_Coeficiente_de_Rugosidade_da_Linha_Succao_g'];
							  $got_Comprimento_da_Linha_Succao_g = $ln23['got_Comprimento_da_Linha_Succao_g'];
							  $got_materialls_g = $ln23['got_materialls_g'];
							  $got_diametro_calculado_linha_succao_g = $ln23['got_diametro_calculado_linha_succao_g'];
							  $got_perda_carga_linha_succao_g = $ln23['got_perda_carga_linha_succao_g'];

                         /*------------------------------------------------*/

                              $sql24   = "SELECT * FROM got_conjunto_motobomba WHERE id_projeto= '$id'";
                              $qr24    = mysql_query($sql24) or die(mysql_error());
                              $ln24    = mysql_fetch_assoc($qr24);
                               
							  $got_Perda_de_Carga_no_Cabecal_de_Controle_g = $ln24['got_Perda_de_Carga_no_Cabecal_de_Controle_g'];
							  $got_Perda_de_Carga_Localizada_g = $ln24['got_Perda_de_Carga_Localizada_g'];
							  $got_Eficiencia_da_Bomba_g = $ln24['got_Eficiencia_da_Bomba_g'];
							  $got_Eficiencia_da_Motor_g = $ln24['got_Eficiencia_da_Motor_g'];
							  $got_perda_carga_totol_cm_g = $ln24['got_perda_carga_totol_cm_g'];
							  $got_potencia_motor_cm_g = $ln24['got_potencia_motor_cm_g'];
							  $got_media_consumo_cv_g = $ln24['got_media_consumo_cv_g'];
							  $got_media_consumo_kw_g = $ln24['got_media_consumo_kw_g'];

                         /*----------------------- Micro-Aspersor  -------------------------*/	
  
                              $sql25   = "SELECT * FROM micro_dados_do_microaspersao WHERE id_projeto= '$id'";
                              $qr25    = mysql_query($sql25) or die(mysql_error());
                              $ln25    = mysql_fetch_assoc($qr25);
                               
							  $micro_vazao_do_emissor = $ln25['micro_vazao_do_emissor'];
							  $micro_diametro_molhado = $ln25['micro_diametro_molhado'];
							  $micro_percentagem_de_area_molhada = $ln25['micro_percentagem_de_area_molhada'];
							  $micro_numero_de_emissores_por_planta = $ln25['micro_numero_de_emissores_por_planta'];
							  $micro_intensidade_de_aplicacao = $ln25['micro_intensidade_de_aplicacao'];
							  $micro_espacamento_entre_emissores = $ln25['micro_espacamento_entre_emissores'];
							  $micro_tempo_de_irrigacao = $ln25['micro_tempo_de_irrigacao'];
							  $micro_numero_maximo_de_setores = $ln25['micro_numero_maximo_de_setores']; 
							  
						 /*------------------------------------------------*/

                              $sql26   = "SELECT * FROM micro_lamina_irrigacao WHERE id_projeto= '$id'";
                              $qr26    = mysql_query($sql26) or die(mysql_error());
                              $ln26    = mysql_fetch_assoc($qr26);
                               
							  $micro_Irrigacao_Real_Necessaria = $ln26['micro_Irrigacao_Real_Necessaria'];
							  $micro_lamina_Eficiencia_de_aplicacao = $ln26['micro_lamina_Eficiencia_de_aplicacao'];
							  $micro_Area_Sombreada = $ln26['micro_Area_Sombreada'];
							  $micro_Evapotranspiracao_da_Cultura = $ln26['micro_Evapotranspiracao_da_Cultura'];
							  $micro_Coeficiente_de_Cultivo = $ln26['micro_Coeficiente_de_Cultivo'];
							  $micro_Irrigacao_Total_Necessaria	= $ln26['micro_Irrigacao_Total_Necessaria'];
							  $micro_Espacamento_entre_Plantas = $ln26['micro_Espacamento_entre_Plantas'];
							  $micro_Espacamento_entre_Fileiras = $ln26['micro_Espacamento_entre_Fileiras'];
							  $micro_Lamina_Bruta_de_Irrigacao	= $ln26['micro_Lamina_Bruta_de_Irrigacao'];
							  $micro_Evapotranspiracao_Localizada = $ln26['micro_Evapotranspiracao_Localizada'];
							  $micro_lamina_etcloc = $ln26['micro_lamina_etcloc'];
							  $micro_lamina_Turno_Rega = $ln26['micro_lamina_Turno_Rega'];
							  $micro_Volume_de_Agua_por_Planta = $ln26['micro_Volume_de_Agua_por_Planta'];	

                         /*------------------------------------------------*/

                              $sql27   = "SELECT * FROM micro_lamina_irrig_ajustada WHERE id_projeto= '$id'";
                              $qr27    = mysql_query($sql27) or die(mysql_error());
                              $ln27    = mysql_fetch_assoc($qr27);
                               
							  $micro_Turno_de_Rega_Adotado = $ln27['micro_Turno_de_Rega_Adotado'];
							  $micro_lla = $ln27['micro_lla'];
							  $micro_lba = $ln27['micro_lba'];						 
							
						 /*------------------------------------------------*/

                              $sql28   = "SELECT * FROM micro_linha_lateral WHERE id_projeto= '$id'";
                              $qr28    = mysql_query($sql28) or die(mysql_error());
                              $ln28    = mysql_fetch_assoc($qr28);
                               
							  $micro_N_gotejadores_por_LL = $ln28['micro_N_gotejadores_por_LL'];
							  $micro_Cg_da_LL = $ln28['micro_Cg_da_LL'];
							  $micro_Comprimento_da_LL = $ln28['micro_Comprimento_da_LL'];
							  $micro_HF_Admissivel_da_LL = $ln28['micro_HF_Admissivel_da_LL'];
							  $micro_diametro_nominal_ll = $ln28['micro_diametro_nominal_ll'];
							  $micro_Pressao_de_Servico_ll = $ln28['micro_Pressao_de_Servico_ll'];
							  $micro_Diferenca_de_Nivel_da_LL = $ln28['micro_Diferenca_de_Nivel_da_LL'];
							  $micro_vazao_linha_lateral = $ln28['micro_vazao_linha_lateral'];
							  $micro_f_ll = $ln28['micro_f_ll'];
							  $micro_diametro_ll = $ln28['micro_diametro_ll'];
							  $micro_perda_carga_ll = $ln28['micro_perda_carga_ll'];
							  $micro_pressao_inicio_ll = $ln28['micro_pressao_inicio_ll'];

						 /*------------------------------------------------*/

                              $sql29   = "SELECT * FROM micro_linha_derivacao WHERE id_projeto= '$id'";
                              $qr29    = mysql_query($sql29) or die(mysql_error());
                              $ln29    = mysql_fetch_assoc($qr29);
                               
							  $micro_numero_s_ld = $ln29['micro_numero_s_ld'];
							  $micro_Comprimento_ld = $ln29['micro_Comprimento_ld'];
							  $micro_Cg_da_LD = $ln29['micro_Cg_da_LD'];
							  $micro_diametro_nivel_ld = $ln29['micro_diametro_nivel_ld'];
							  $micro_vazaold = $ln29['micro_vazaold'];
							  $micro_diferenca_nivel_ld = $ln29['micro_diferenca_nivel_ld'];
							  $micro_f_ld = $ln29['micro_f_ld'];
							  $micro_hf_ld = $ln29['micro_hf_ld'];
							  $micro_diametro_ld = $ln29['micro_diametro_ld'];
							  $micro_perda_carga_ld = $ln29['micro_perda_carga_ld'];
							  $micro_pressao_inicio_ld = $ln29['micro_pressao_inicio_ld'];

						 /*------------------------------------------------*/	

                              $sql30   = "SELECT * FROM micro_linha_principal WHERE id_projeto= '$id'";
                              $qr30    = mysql_query($sql30) or die(mysql_error());
                              $ln30    = mysql_fetch_assoc($qr30);
                               
							  $micro_numerold_lp = $ln30['micro_numerold_lp'];
							  $micro_Velocidade_Maxima_da_LP = $ln30['micro_Velocidade_Maxima_da_LP'];
							  $micro_Cg_da_LP = $ln30['micro_Cg_da_LP'];
							  $micro_Comprimento_da_LP = $ln30['micro_Comprimento_da_LP'];
							  $micro_materiallp = $ln30['micro_materiallp'];
							  $micro_vazao_lp = $ln30['micro_vazao_lp'];
							  $micro_diferenca_nivel_lp	= $ln30['micro_diferenca_nivel_lp'];
							  $micro_diametro_calculado_lp = $ln30['micro_diametro_calculado_lp'];
							  $perda_carga_lp = $ln30['perda_carga_lp'];

                         /*------------------------------------------------*/

                              $sql31   = "SELECT * FROM micro_linha_recalque WHERE id_projeto= '$id'";
                              $qr31    = mysql_query($sql31) or die(mysql_error());
                              $ln31    = mysql_fetch_assoc($qr31);
                               
							  $micro_Vazao_da_LR = $ln31['micro_Vazao_da_LR'];
							  $micro_Velocidade_Maxima_da_LR = $ln31['micro_Velocidade_Maxima_da_LR'];
							  $micro_Coeficiente_de_Rugosidade_da_LR = $ln31['micro_Coeficiente_de_Rugosidade_da_LR'];
							  $micro_Comprimento_da_LR = $ln31['micro_Comprimento_da_LR'];
							  $micro_materialr = $ln31['micro_materialr'];
							  $micro_diametro_calculado_lr = $ln31['micro_diametro_calculado_lr'];
							  $micro_perda_carga_lr	= $ln31['micro_perda_carga_lr'];

                         /*------------------------------------------------*/

                              $sql32   = "SELECT * FROM micro_linha_succao WHERE id_projeto= '$id'";
                              $qr32    = mysql_query($sql32) or die(mysql_error());
                              $ln32    = mysql_fetch_assoc($qr32);
                               
							  $micro_Vazao_da_LS = $ln32['micro_Vazao_da_LS'];
							  $micro_Velocidade_Maxima_da_LS = $ln32['micro_Velocidade_Maxima_da_LS'];
							  $micro_Coeficiente_de_Rugosidade_da_LS = $ln32['micro_Coeficiente_de_Rugosidade_da_LS'];
							  $micro_Comprimento_da_LS = $ln32['micro_Comprimento_da_LS'];
							  $micro_materialls = $ln32['micro_materialls'];
							  $micro_diametro_calculado_ls = $ln32['micro_diametro_calculado_ls'];
							  $micro_perda_carga_ls	= $ln32['micro_perda_carga_ls'];
							  
						 /*------------------------------------------------*/	  

                              $sql33   = "SELECT * FROM micro_conjunto_motobomba WHERE id_projeto= '$id'";
                              $qr33    = mysql_query($sql33) or die(mysql_error());
                              $ln33    = mysql_fetch_assoc($qr33);
                               
							  $micro_Perda_de_Carga_no_Cabecal_de_Controle = $ln33['micro_Perda_de_Carga_no_Cabecal_de_Controle'];
							  $micro_Perda_de_Carga_Localizada = $ln33['micro_Perda_de_Carga_Localizada'];
							  $micro_Eficiencia_da_Bomba = $ln33['micro_Eficiencia_da_Bomba'];
							  $micro_Eficiencia_da_Motor = $ln33['micro_Eficiencia_da_Motor'];
							  $micro_perda_carga_totol_cm = $ln33['micro_perda_carga_totol_cm'];
							  $micro_potencia_motor_cm = $ln33['micro_potencia_motor_cm'];
							  $micro_media_consumo_cv = $ln33['micro_media_consumo_cv'];
							  $micro_media_consumo_kw = $ln33['micro_media_consumo_kw'];							  
				   
						  echo "<center><h1><font color='#006400'> Projeto $nome_do_projeto</font></h1></center><hr>";
						  
						  /* dados do projeto */
						
					 echo '<div class="menu_4">';
					     echo '<div class="menu_4-box">';
						     echo '<span class="menu_4_left"><h3><big> Dados do Projeto'; 
							  echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
							  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
							  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
							  echo '<img src="images/dwn.png" alt=""/> </big></h3></span>';

					    echo '</div>';
							
							echo '<script>					
										$( "span.menu_4_left" ).click(function(){
											$("ul.menu_4_left_nav").slideToggle( "slow", function(){
											});
										});
							 </script>
							 <!-- script-for-menu -->';

							echo '<ul class="menu_4_left_nav">';

						
						echo '<fieldset>';
						
		 echo '<div id="listView" class="list">';
			echo '<li class="dropdown list-item-active">';
				echo '<a href="#" class="dropdown-toggle" data-toggle="dropdown"><b><font color="#000000"><center>Alterar Dados do Projeto</center></font></b> <span class="caret"></span></a>';
				echo '<ul id="login-dp" class="dropdown-menu">';
					echo '<li id="login_li" class="form-login">';
						echo '<div class="row">';
							echo '<div class="col-md-12 input-style">';
								echo '<form class="form form-login" role="form" method="post" action="alterar_dados_do_projeto.php" accept-charset="UTF-8" id="login-nav">';
									
									echo '<div class="form-group">';
										echo '<label class="sr-only" >Tecnico Responsavel</label>';
										echo '<input type="name" class="form-control" id="tec" name="tec" placeholder="Tecnico Responsavel" >';
									echo '</div>';
									
									echo '<div class="form-group">';
										echo '<label class="sr-only" >Nº CREA</label>';
										echo '<input type="name" class="form-control" id="crea" name="crea" placeholder="Nº CREA" >';
									echo '</div>';
									
									echo '<div class="form-group">';
										echo '<label class="sr-only" >Proprietario</label>';
										echo '<input type="name" class="form-control" id="proprietario" name="proprietario" placeholder="Proprietario" >';
									echo '</div>';
									echo '<div class="form-group">';
										echo '<button type="submit" class="btn btn-primary btn-block" id="status">Alterar</button>';
									echo '</div>';
								echo '</form>';
							echo '</div>';
						echo '</div>';
					echo '</li>';
				echo '</ul>';
			echo '</li>';
        echo '</div>';	

                          echo "<h4>";
						  echo "&nbsp&nbsp Tecnico Responsavel: ";
						  echo '<tr>       
                                 <td>'.$tec.'</td>
								 </tr>';
						  echo "<br><br>";	
						  
                          echo "&nbsp&nbsp Nº CREA: ";						  
						  echo '<tr> 		 
                                 <td>'.$crea.'</td>
						        </tr>';
						  echo "<br><br>";

                          echo "&nbsp&nbsp Proprietario: ";								
                          echo '<tr>								
								 <td>'.$proprietario.'</td>
                              </tr>';
						  echo "<br>";	  
                        echo "</h4>";
					  echo "<br><br>";						
							
						echo '</fieldset>';

							echo '</ul>';						 
						
						
						/* dados da propriedade */    
							  
						 echo '<div class="menu_3">';
					     echo '<div class="menu_3-box">';
						     echo '<span class="menu_3_left"><h3><big> Dados da Propriedade'; 
							  echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
							  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
							  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
							  echo '<img src="images/dwn.png" alt=""/> </big></h3></span>';

					    echo '</div>';
							
							echo '<script>					
										$( "span.menu_3_left" ).click(function(){
											$("ul.menu_3_left_nav").slideToggle( "slow", function(){
											});
										});
							 </script>
							 <!-- script-for-menu -->';

							echo '<ul class="menu_3_left_nav">';

						
						echo '<fieldset>';
						
		echo '<div id="listView" class="list">';
			echo '<li class="dropdown list-item-active">';
				echo '<a href="#" class="dropdown-toggle" data-toggle="dropdown"><b><font color="#000000"><center>Alterar Dados da Propriedade</center></font></b> <span class="caret"></span></a>';
				echo '<ul id="login-dp" class="dropdown-menu">';
					echo '<li id="login_li" class="form-login">';
						echo '<div class="row">';
							echo '<div class="col-md-12 input-style">';
								echo '<form class="form form-login" role="form" method="post" action="alterar_dados_da_propriedade.php" accept-charset="UTF-8" id="login-nav">';
									
									echo '<div class="form-group">';
										echo '<label class="sr-only" >Nome</label>';
										echo '<input type="name" class="form-control" id="nome_propriedade" name="nome_propriedade" placeholder="Nome" >';
									echo '</div>';
									
									echo '<div class="form-group">';
										echo '<label class="sr-only" >Endereço</label>';
										echo '<input type="name" class="form-control" id="end_propriedade" name="end_propriedade" placeholder="Endereço" >';
									echo '</div>';
									
									echo '<div class="form-group">';
										echo '<label class="sr-only" >CEP</label>';
										echo '<input type="name" class="form-control" id="cep_propriedade" name="cep_propriedade" placeholder="CEP" >';
									echo '</div>';
									
									echo '<div class="form-group">';
										echo '<label class="sr-only" >Cidade</label>';
										echo '<input type="name" class="form-control" id="cidade_propriedade" name="cidade_propriedade" placeholder="Cidade" >';
									echo '</div>';
									echo '<div class="form-group">';
										echo '<button type="submit" class="btn btn-primary btn-block" id="status">Alterar</button>';
									echo '</div>';
								echo '</form>';
							echo '</div>';
						echo '</div>';
					echo '</li>';
				echo '</ul>';
			echo '</li>';
        echo '</div>';

                          echo "<h4>";
						  echo "&nbsp&nbsp Nome: ";
						  echo '<tr>       
                                 <td>'.$nome.'</td>
								 </tr>';
						  echo "<br><br>";	
						  
                          echo "&nbsp&nbsp Endereço: ";						  
						  echo '<tr> 		 
                                 <td>'.$endereco.'</td>
						        </tr>';
						  echo "<br><br>";

                          echo "&nbsp&nbsp CEP: ";								
                          echo '<tr>								
								 <td>'.$cep.'</td>
                              </tr>';
						  echo "<br><br>";

                          echo "&nbsp&nbsp Cidade: ";								
                          echo '<tr>								
								 <td>'.$cidade.'</td>
                              </tr>';
						  echo "<br><br><br>";						  
                        echo "</h4>";							
							
						echo '</fieldset>';

							echo '</ul>';	  
               
					  
						/* dados gerais */	  
							  
						 echo '<div class="menu_5">';
					     echo '<div class="menu_5-box">';
						     echo '<span class="menu_5_left"><h3><big> Dados Gerais'; 
							  echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
							  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
							  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
							  echo '<img src="images/dwn.png" alt=""/> </big></h3></span>';

					    echo '</div>';
							
							echo '<script>					
										$( "span.menu_5_left" ).click(function(){
											$("ul.menu_5_left_nav").slideToggle( "slow", function(){
											});
										});
							 </script>
							 <!-- script-for-menu -->';

							echo '<ul class="menu_5_left_nav">';

						
						echo '<fieldset>';
						
		echo '<div id="listView" class="list">';
			echo '<li class="dropdown list-item-active">';
				echo '<a href="#" class="dropdown-toggle" data-toggle="dropdown"><b><font color="#000000"><center>Alterar Dados Gerais</center></font></b> <span class="caret"></span></a>';
				echo '<ul id="login-dp" class="dropdown-menu">';
					echo '<li id="login_li" class="form-login">';
						echo '<div class="row">';
							echo '<div class="col-md-12 input-style">';
								echo '<form class="form form-login" role="form" method="post" action="alterar_dados_gerais.php" accept-charset="UTF-8" id="login-nav">';
									
									echo '<div class="form-group">';
										echo '<label class="sr-only" >Evapotranspiração de Referência (ETo)</label>';
										echo '<input type="name" class="form-control" id="eto" name="eto" placeholder="Evapotranspiração de Referência (ETo)" >';
									echo '</div>';
									
									echo '<div class="form-group">';
										echo '<label class="sr-only" >Disponibilidade Total de Água (DTA)</label>';
										echo '<input type="name" class="form-control" id="dta" name="dta" placeholder="Disponibilidade Total de Água (DTA)" >';
									echo '</div>';
									
									echo '<div class="form-group">';
										echo '<label class="sr-only" >Eficiência de Aplicação (EA)</label>';
										echo '<input type="name" class="form-control" id="ea" name="ea" placeholder="Eficiência de Aplicação (EA)" >';
									echo '</div>';
									
									echo '<div class="form-group">';
										echo '<label class="sr-only" >Horas de Funcionamento</label>';
										echo '<input type="name" class="form-control" id="hf" name="hf" placeholder="Horas de Funcionamento" >';
									echo '</div>';
									
									echo '<div class="form-group">';
										echo '<label class="sr-only" >Turno de Rega (TR)</label>';
										echo '<input type="name" class="form-control" id="tr" name="tr" placeholder="Turno de Rega (TR)" >';
									echo '</div>';
									
									echo '<div class="form-group">';
										echo '<label class="sr-only" >Dias de Folga</label>';
										echo '<input type="name" class="form-control" id="df" name="df" placeholder="Dias de Folga" >';
									echo '</div>';
									
									echo '<div class="form-group">';
										echo '<button type="submit" class="btn btn-primary btn-block" id="status">Alterar</button>';
									echo '</div>';
								echo '</form>';
							echo '</div>';
						echo '</div>';
					echo '</li>';
				echo '</ul>';
			echo '</li>';
        echo '</div>';

                          echo "<h4>";
						  echo "&nbsp&nbsp Evapotranspiração de Referência (ETo): ";
						  echo '<tr>       
                                 <td>'.$eto.'</td>
								 </tr>';
						  echo "<br><br>";	
						  
                          echo "&nbsp&nbsp Disponibilidade Total de Água (DTA): ";						  
						  echo '<tr> 		 
                                 <td>'.$dta.'</td>
						        </tr>';
						  echo "<br><br>";

                          echo "&nbsp&nbsp Eficiência de Aplicação (EA): ";								
                          echo '<tr>								
								 <td>'.$ea.'</td>
                              </tr>';
						  echo "<br><br>";

                          echo "&nbsp&nbsp Horas de Funcionamento: ";								
                          echo '<tr>								
								 <td>'.$hd.'</td>
                              </tr>';
						  echo "<br><br>";
               
                          echo "&nbsp&nbsp Turno de Rega (TR): ";								
                          echo '<tr>								
								 <td>'.$tr.'</td>
                              </tr>';
						  echo "<br><br>";

                     echo "&nbsp&nbsp Dias de Folga: ";								
                          echo '<tr>								
								<td>'.$df.'</td>
                                </tr>';

						 echo '</fieldset>';
						 echo "<br><br>";
						 echo '</ul>';	 

							  
						/* dados da área */	  
							  
						 echo '<div class="menu_6">';
					     echo '<div class="menu_6-box">';
						     echo '<span class="menu_6_left"><h3><big> Dados da Área'; 
							  echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
							  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
							  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
							  echo '<img src="images/dwn.png" alt=""/> </big></h3></span>';

					    echo '</div>';
							
							echo '<script>					
										$( "span.menu_6_left" ).click(function(){
											$("ul.menu_6_left_nav").slideToggle( "slow", function(){
											});
										});
							 </script>
							 <!-- script-for-menu -->';

							echo '<ul class="menu_6_left_nav">';

						
						echo '<fieldset>';
						
		echo '<div id="listView" class="list">';
			echo '<li class="dropdown list-item-active">';
				echo '<a href="#" class="dropdown-toggle" data-toggle="dropdown"><b><font color="#000000"><center>Alterar Dados da Área</center></font></b> <span class="caret"></span></a>';
				echo '<ul id="login-dp" class="dropdown-menu">';
					echo '<li id="login_li" class="form-login">';
						echo '<div class="row">';
							echo '<div class="col-md-12 input-style">';
								echo '<form class="form form-login" role="form" method="post" action="alterar_dados_da area.php" accept-charset="UTF-8" id="login-nav">';
									
									echo '<div class="form-group">';
										echo '<label class="sr-only" >Largura</label>';
										echo '<input type="name" class="form-control" id="largura" name="largura" placeholder="Largura" >';
									echo '</div>';
									
									echo '<div class="form-group">';
										echo '<label class="sr-only" >Comprimento</label>';
										echo '<input type="name" class="form-control" id="comprimento" name="comprimento" placeholder="Comprimento" >';
									echo '</div>';
									
									echo '<div class="form-group">';
										echo '<label class="sr-only" >DN da Linha Principal</label>';
										echo '<input type="name" class="form-control" id="dnlp" name="dnlp" placeholder="DN da Linha Principal" >';
									echo '</div>';
									
									echo '<div class="form-group">';
										echo '<label class="sr-only" >DN da Linha Lateral</label>';
										echo '<input type="name" class="form-control" id="dnll" name="dnll" placeholder="DN da Linha Lateral" >';
									echo '</div>';
									
									echo '<div class="form-group">';
										echo '<label class="sr-only" >Comprimento da Linha de Recalque</label>';
										echo '<input type="name" class="form-control" id="clr" name="clr" placeholder="Comprimento da Linha de Recalque" >';
									echo '</div>';
									
									echo '<div class="form-group">';
										echo '<label class="sr-only" >Comprimento da Linha de Sucção</label>';
										echo '<input type="name" class="form-control" id="cls" name="cls" placeholder="Comprimento da Linha de Sucção" >';
									echo '</div>';
									
									echo '<div class="form-group">';
										echo '<label class="sr-only" >DN da Linha de Recalque</label>';
										echo '<input type="name" class="form-control" id="dnlr" name="dnlr" placeholder="DN da Linha de Recalque" >';
									echo '</div>';
									
									echo '<div class="form-group">';
										echo '<label class="sr-only" >DN da Linha de Sucção</label>';
										echo '<input type="name" class="form-control" id="dnls" name="dnls" placeholder="DN da Linha de Sucção" >';
									echo '</div>';
									
									echo '<div class="form-group">';
										echo '<label class="sr-only" >Tempo de Funcionamento</label>';
										echo '<input type="name" class="form-control" id="tf" name="tf" placeholder="Tempo de Funcionamento" >';
									echo '</div>';
									
									echo '<div class="form-group">';
										echo '<label class="sr-only" >Número Total de Setores</label>';
										echo '<input type="name" class="form-control" id="nts" name="nts" placeholder="Número Total de Setores" >';
									echo '</div>';
									
									echo '<div class="form-group">';
										echo '<button type="submit" class="btn btn-primary btn-block" id="status">Alterar</button>';
									echo '</div>';
								echo '</form>';
							echo '</div>';
						echo '</div>';
					echo '</li>';
				echo '</ul>';
			echo '</li>';
        echo '</div>';

						   echo "<h4>";
						  echo "&nbsp&nbsp Largura: ";
						  echo '<tr>       
                                 <td>'.$area_largura.'</td>
								 </tr>';
						  echo "<br><br>";	
						  
                          echo "&nbsp&nbsp Comprimento: ";						  
						  echo '<tr> 		 
                                 <td>'.$area_comprimento.'</td>
						        </tr>';
						  echo "<br><br>";

                          echo "&nbsp&nbsp DN da Linha Principal: ";								
                          echo '<tr>								
								 <td>'.$area_dnlp.'</td>
                              </tr>';
						  echo "<br><br>";

                          echo "&nbsp&nbsp DN da Linha Lateral: ";								
                          echo '<tr>								
								 <td>'.$area_dnll.'</td>
                              </tr>';
						  echo "<br><br>";
               
                          echo "&nbsp&nbsp Comprimento da Linha de Recalque: ";								
                          echo '<tr>								
								 <td>'.$area_comprimento_lr.'</td>
                              </tr>';
						  echo "<br><br>";

                          echo "&nbsp&nbsp Comprimento da Linha de Sucção: ";								
                          echo '<tr>								
								 <td>'.$area_comprimento_ls.'</td>
                              </tr>';
						  echo "<br><br>";

                          echo "&nbsp&nbsp DN da Linha de Recalque: ";								
                          echo '<tr>								
								 <td>'.$area_dnlr.'</td>
                              </tr>';
						  echo "<br><br>";

                          echo "&nbsp&nbsp DN da Linha de Sucção: ";								
                          echo '<tr>								
								 <td>'.$area_dnls.'</td>
                              </tr>';
						  echo "<br><br>";

                          echo "&nbsp&nbsp Tempo de Funcionamento: ";								
                          echo '<tr>								
								 <td>'.$area_tf.'</td>
                              </tr>';
						  echo "<br><br>";	

                          echo "&nbsp&nbsp Número Total de Setores: ";								
                          echo '<tr>								
								 <td>'.$area_nts.'</td>
                              </tr>';
						  echo "<br><br><br><br><br>";	
                        
						 echo '</fieldset>';
						 
						 echo '</ul>';	
							  
						/* dados da cultura */	  
							  
						 echo '<div class="menu_7">';
					     echo '<div class="menu_7-box">';
						     echo '<span class="menu_7_left"><h3><big> Dados da Cultura'; 
							  echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
							  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
							  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
							  echo '<img src="images/dwn.png" alt=""/> </big></h3></span>';

					    echo '</div>';
							
							echo '<script>					
										$( "span.menu_7_left" ).click(function(){
											$("ul.menu_7_left_nav").slideToggle( "slow", function(){
											});
										});
							 </script>
							 <!-- script-for-menu -->';

							echo '<ul class="menu_7_left_nav">';

						
						echo '<fieldset>';
						
		echo '<div id="listView" class="list">';
			echo '<li class="dropdown list-item-active">';
				echo '<a href="#" class="dropdown-toggle" data-toggle="dropdown"><b><font color="#000000"><center>Alterar Dados da Cultura</center></font></b> <span class="caret"></span></a>';
				echo '<ul id="login-dp" class="dropdown-menu">';
					echo '<li id="login_li" class="form-login">';
						echo '<div class="row">';
							echo '<div class="col-md-12 input-style">';
								echo '<form class="form form-login" role="form" method="post" action="alterar_dados_da_cultura.php" accept-charset="UTF-8" id="login-nav">';
									
									echo '<div class="form-group">';
										echo '<label class="sr-only" >Nome da Cultura</label>';
										echo '<input type="name" class="form-control" id="nc" name="nc" placeholder="Nome da Cultura" >';
									echo '</div>';
									
									echo '<div class="form-group">';
										echo '<label class="sr-only" >Data de Plantio</label>';
										echo '<input type="date" class="form-control" id="dp" name="dp" placeholder="Data de Plantio" >';
									echo '</div>';
									
									echo '<div class="form-group">';
										echo '<label class="sr-only" >Espaçamento entre Plantas</label>';
										echo '<input type="name" class="form-control" id="eep" name="eep" placeholder="Espaçamento entre Plantas" >';
									echo '</div>';
									
									echo '<div class="form-group">';
										echo '<label class="sr-only" >Espaçamento entre Fileiras</label>';
										echo '<input type="name" class="form-control" id="eef" name="eef" placeholder="Espaçamento entre Fileiras" >';
									echo '</div>';
									
									echo '<div class="form-group">';
										echo '<label class="sr-only" >Área Sombreda</label>';
										echo '<input type="name" class="form-control" id="as" name="as" placeholder="Área Sombreda" >';
									echo '</div>';
									
									echo '<div class="form-group">';
										echo '<label class="sr-only" >Profundidade Efetiva do Sistema Radicular (Z)</label>';
										echo '<input type="name" class="form-control" id="pesr" name="pesr" placeholder="Profundidade Efetiva do Sistema Radicular (Z)" >';
									echo '</div>';
									
									echo '<div class="form-group">';
										echo '<label class="sr-only" >Fator de Disponibilidade (F)</label>';
										echo '<input type="name" class="form-control" id="fd" name="fd" placeholder="Fator de Disponibilidade (F)" >';
									echo '</div>';
									
									echo '<div class="form-group">';
										echo '<label class="sr-only" >Coeficiente de Cultivo (Kc)</label>';
										echo '<input type="name" class="form-control" id="cc" name="cc" placeholder="Coeficiente de Cultivo (Kc)" >';
									echo '</div>';
									
									echo '<div class="form-group">';
										echo '<label class="sr-only" >Evapotranspiração da Cultura (ETc)</label>';
										echo '<input type="name" class="form-control" id="etc" name="etc" placeholder="Evapotranspiração da Cultura (ETc)" >';
									echo '</div>';
									
									echo '<div class="form-group">';
										echo '<button type="submit" class="btn btn-primary btn-block" id="status">Alterar</button>';
									echo '</div>';
								echo '</form>';
							echo '</div>';
						echo '</div>';
					echo '</li>';
				echo '</ul>';
			echo '</li>';
        echo '</div>';
 
                           echo "<h4>";
						  echo "&nbsp&nbsp Nome da Cultura: ";
						  echo '<tr>       
                                 <td>'.$cult_nome.'</td>
								 </tr>';
						  echo "<br><br>";	
						  
                          echo "&nbsp&nbsp Data de Plantio: ";						  
						  echo '<tr> 		 
                                 <td>'.$cult_data.'</td>
						        </tr>';
						  echo "<br><br>";

                          echo "&nbsp&nbsp Espaçamento entre Plantas: ";								
                          echo '<tr>								
								 <td>'.$cult_esp_plantas.'</td>
                              </tr>';
						  echo "<br><br>";

                          echo "&nbsp&nbsp Espaçamento entre Fileiras: ";								
                          echo '<tr>								
								 <td>'.$cult_esp_fileiras.'</td>
                              </tr>';
						  echo "<br><br>";
               
                          echo "&nbsp&nbsp Área Sombreda: ";								
                          echo '<tr>								
								 <td>'.$cult_area_sombreada.'</td>
                              </tr>';
						  echo "<br><br>";

                          echo "&nbsp&nbsp Profundidade Efetiva do Sistema Radicular (Z): ";								
                          echo '<tr>								
								 <td>'.$cult_z.'</td>
                              </tr>';
						  echo "<br><br>";

                          echo "&nbsp&nbsp Fator de Disponibilidade (f): ";								
                          echo '<tr>								
								 <td>'.$cult_f.'</td>
                              </tr>';
						  echo "<br><br>";

                          echo "&nbsp&nbsp Coeficiente de Cultivo (Kc): ";								
                          echo '<tr>								
								 <td>'.$cult_kc.'</td>
                              </tr>';
						  echo "<br><br>";

                          echo "&nbsp&nbsp Evapotranspiração da Cultura (ETc): ";								
                          echo '<tr>								
								 <td>'.$cult_etc.'</td>
                              </tr>';
						  echo "<br><br><br><br>";					      

						 echo '</fieldset>';
						 
						 echo '</ul>';		  
                            
                          								  
						/* dados do solo */	  
						
			if($solo_cc == "" && $solo_pm == "" && $solo_ds == "" && $solo_irn == "" && $solo_itn == "" && $solo_cra == "" && $solo_cta == "" && $solo_vib == ""){
               echo "";
      		}
             else{			   
							  
						   echo '<div class="menu_8">';
					     echo '<div class="menu_8-box">';
						     echo '<span class="menu_8_left"><h3><big> Dados do Solo'; 
							  echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
							  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
							  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
							  echo '<img src="images/dwn.png" alt=""/> </big></h3></span>';

					    echo '</div>';
							
							echo '<script>					
										$( "span.menu_8_left" ).click(function(){
											$("ul.menu_8_left_nav").slideToggle( "slow", function(){
											});
										});
							 </script>
							 <!-- script-for-menu -->';

							echo '<ul class="menu_8_left_nav">';

						
						echo '<fieldset>';
						
						echo '<div id="listView" class="list">';
			echo '<li class="dropdown list-item-active">';
				echo '<a href="#" class="dropdown-toggle" data-toggle="dropdown"><b><font color="#000000"><center>Alterar Dados do Solo</center></font></b> <span class="caret"></span></a>';
				echo '<ul id="login-dp" class="dropdown-menu">';
					echo '<li id="login_li" class="form-login">';
						echo '<div class="row">';
							echo '<div class="col-md-12 input-style">';
								echo '<form class="form form-login" role="form" method="post" action="alterar_dados_do_solo.php" accept-charset="UTF-8" id="login-nav">';
									
									echo '<div class="form-group">';
										echo '<label class="sr-only" >Capacidade de Campo (CC)</label>';
										echo '<input type="name" class="form-control" id="ccampo" name="ccampo" placeholder="Capacidade de Campo (CC)" >';
									echo '</div>';
									
									echo '<div class="form-group">';
										echo '<label class="sr-only" >Ponto de Murchamento (PM)</label>';
										echo '<input type="name" class="form-control" id="pm" name="pm" placeholder="Ponto de Murchamento (PM)" >';
									echo '</div>';
									
									echo '<div class="form-group">';
										echo '<label class="sr-only" >Densidade do Solo (ds)</label>';
										echo '<input type="name" class="form-control" id="ds" name="ds" placeholder="Densidade do Solo (ds)" >';
									echo '</div>';
									
									echo '<div class="form-group">';
										echo '<label class="sr-only" >Irrigacao Real Necessária (IRN)</label>';
										echo '<input type="name" class="form-control" id="irn" name="irn" placeholder="Irrigacao Real Necessária (IRN)" >';
									echo '</div>';
									
									echo '<div class="form-group">';
										echo '<label class="sr-only" >Irrigacao Total Necessária</label>';
										echo '<input type="name" class="form-control" id="itn" name="itn" placeholder="Irrigacao Total Necessária" >';
									echo '</div>';
									
									echo '<div class="form-group">';
										echo '<label class="sr-only" >Capacidade Real de Água no Solo (CRA)</label>';
										echo '<input type="name" class="form-control" id="cra" name="cra" placeholder="Capacidade Real de Água no Solo (CRA)" >';
									echo '</div>';
									
									echo '<div class="form-group">';
										echo '<label class="sr-only" >Capacidade Total de Água no Solo (CTA)</label>';
										echo '<input type="name" class="form-control" id="cta" name="cta" placeholder="Capacidade Total de Água no Solo (CTA)" >';
									echo '</div>';
									
									echo '<div class="form-group">';
										echo '<label class="sr-only" >Velocidade de Infiltração Básica (Vib)</label>';
										echo '<input type="name" class="form-control" id="vib" name="vib" placeholder="Velocidade de Infiltração Básica (Vib)" >';
									echo '</div>';
									
									echo '<div class="form-group">';
										echo '<button type="submit" class="btn btn-primary btn-block" id="status">Alterar</button>';
									echo '</div>';
								echo '</form>';
							echo '</div>';
						echo '</div>';
					echo '</li>';
				echo '</ul>';
			echo '</li>';
        echo '</div>';
 
                            echo "<h4>";
						  echo "&nbsp&nbsp Capacidade de Campo (CC): ";
						  echo '<tr>       
                                 <td>'.$solo_cc.'</td>
								 </tr>';
						  echo "<br><br>";	
						  
                          echo "&nbsp&nbsp Ponto de Murchamento (PM): ";						  
						  echo '<tr> 		 
                                 <td>'.$solo_pm.'</td>
						        </tr>';
						  echo "<br><br>";

                          echo "&nbsp Densidade do Solo (ds): ";								
                          echo '<tr>								
								 <td>'.$solo_ds.'</td>
                              </tr>';
						  echo "<br><br>";

                          echo "&nbsp&nbsp Irrigacao Real Necessária (IRN): ";								
                          echo '<tr>								
								 <td>'.$solo_irn.'</td>
                              </tr>';
						  echo "<br><br>";
               
                          echo "&nbsp&nbsp Irrigacao Total Necessária (ITN): ";								
                          echo '<tr>								
								 <td>'.$solo_itn.'</td>
                              </tr>';
						  echo "<br><br>";

                          echo "&nbsp&nbsp Capacidade Real de Água no Solo (CRA): ";								
                          echo '<tr>								
								 <td>'.$solo_cra.'</td>
                              </tr>';
						  echo "<br><br>";

                          echo "&nbsp&nbsp Capacidade Total de Água no Solo (CTA): ";								
                          echo '<tr>								
								 <td>'.$solo_cta.'</td>
                              </tr>';
						  echo "<br><br>";

                          echo "&nbsp&nbsp Velocidade de Infiltração Básica (Vib): ";								
                          echo '<tr>								
								 <td>'.$solo_vib.'</td>
                              </tr>';
						  echo "<br><br><br><br>";
						
						 echo '</fieldset>';
						 
						 echo '</ul>';		  
                            
					}	  						  
						  
						  
						if($as_nome_a == "" && $as_Irrigacao_Real_Necessaria_li_a == "" && $as_Turno_de_Rega_Adotado_ajustada_a == "" && $as_vazao_as_a == "" && $as_vazaoll_a == "" && $as_vazaolp_a == "" && $as_Vazao_da_Linha_de_Recalque_a == "" && $as_Vazao_da_Linha_de_Succao_a == "" && $as_Perda_de_Carga_Localizada_cmb_a == ""){
						   echo "";
						}
						
						else{
						
						echo "<h2><br><center>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Tipo de Irrigação</center></h2>";

						  echo '<div class="menu_9">';
					     echo '<div class="menu_9-box">';
						     echo '<span class="menu_9_left"><h3><big> Aspersão'; 
							  echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
							  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
							  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
							  echo '<img src="images/dwn.png" alt=""/> </big></h3></span>';

					    echo '</div>';
							
							echo '<script>					
										$( "span.menu_9_left" ).click(function(){
											$("ul.menu_9_left_nav").slideToggle( "slow", function(){
											});
										});
							 </script>
							 <!-- script-for-menu -->';

							echo '<ul class="menu_9_left_nav">';

						
						echo '<fieldset>';
                            
                          /* Caracteristicas do Aspersor */
							
						 echo '<div class="menu_10">';
					     echo '<div class="menu_10-box">';
						     echo '<span class="menu_10_left"><h3><big> Caracteristicas do Aspersor'; 
							  echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
							  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
							  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
							  echo '<img src="images/dwn.png" alt=""/> </big></h3></span>';

					    echo '</div>';
							
							echo '<script>					
										$( "span.menu_10_left" ).click(function(){
											$("ul.menu_10_left_nav").slideToggle( "slow", function(){
											});
										});
							 </script>
							 <!-- script-for-menu -->';

							echo '<ul class="menu_10_left_nav">';
							
						 echo '<fieldset>';							
						  echo "<h4>";
						  echo "&nbsp&nbsp Nome: ";
						  echo '<tr>       
                                 <td>'.$as_nome_a.'</td>
								 </tr>';
						  echo "<br><br>";	
						  
                          echo "&nbsp&nbsp Marca: ";						  
						  echo '<tr> 		 
                                 <td>'.$as_marca_a.'</td>
						        </tr>';
						  echo "<br><br>";

                          echo "&nbsp&nbsp Pressão de Serviço: ";								
                          echo '<tr>								
								 <td>'.$as_ca_pressao_servico_a.'</td>
                              </tr>';
						  echo "<br><br>";

                          echo "&nbsp&nbsp Vazão: ";								
                          echo '<tr>								
								 <td>'.$as_vazao_a.'</td>
                              </tr>';
						  echo "<br><br>";
               
                          echo "&nbsp&nbsp Coeficiente de Descarga: ";								
                          echo '<tr>								
								 <td>'.$as_coeficiente_descarga_a.'</td>
                              </tr>';
						  echo "<br><br>";

                          echo "&nbsp&nbsp Área dos Bocais: ";								
                          echo '<tr>								
								 <td>'.$as_area_bocais_a.'</td>
                              </tr>';
						  echo "<br><br>";

                          echo "&nbsp&nbsp Espaçamento dos Aspersores: ";								
                          echo '<tr>								
								 <td>'.$as_espacamento_dos_aspersores_a.'</td>
                              </tr>';
						  echo "<br><br>";

                          echo "&nbsp&nbsp Espaçamento entre Aspersores: ";								
                          echo '<tr>								
								 <td>'.$as_espacamento_entre_aaspersores_a.'</td>
                              </tr>';
						  echo "<br><br>";
						  
						  echo "&nbsp&nbsp Espaçamento entre Linhas Laterais: ";								
                          echo '<tr>								
								 <td>'.$as_espacamento_entre_ll_a.'</td>
                              </tr>';
						  echo "<br>";
						  
						  echo '</fieldset>';
						 
						 echo '</ul>';	
						 							  
						/* Lâmina de Irrigação */ 	  
							                            
                          echo '<div class="menu_11">';
					     echo '<div class="menu_11-box">';
						     echo '<span class="menu_11_left"><h3><big> Lâmina de Irrigação'; 
							  echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
							  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
							  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
							  echo '<img src="images/dwn.png" alt=""/> </big></h3></span>';

					    echo '</div>';
							
							echo '<script>					
										$( "span.menu_11_left" ).click(function(){
											$("ul.menu_11_left_nav").slideToggle( "slow", function(){
											});
										});
							 </script>
							 <!-- script-for-menu -->';

							echo '<ul class="menu_11_left_nav">';
							
						 echo '<fieldset>';	
						 
						  echo "<h4>";
						  echo "&nbsp&nbsp Irrigação Real Necessária: ";
						  echo '<tr>       
                                 <td>'.$as_Irrigacao_Real_Necessaria_li_a.'</td>
								 </tr>';
						  echo "<br><br>";	
						  
                          echo "&nbsp&nbsp Eficiência de aplicação: ";						  
						  echo '<tr> 		 
                                 <td>'.$as_Eficiencia_de_aplicacao_li_a.'</td>
						        </tr>';
						  echo "<br><br>";

                          echo "&nbsp&nbsp Lâmina Bruta de Irrigação: ";								
                          echo '<tr>								
								 <td>'.$as_lamina_bruta_irrigacao_li_a.'</td>
                              </tr>';
						  echo "<br><br>";

                          echo "&nbsp&nbsp ETc: ";								
                          echo '<tr>								
								 <td>'.$as_ETcloc_li_a.'</td>
                              </tr>';
						  echo "<br><br>";
               
                          echo "&nbsp&nbsp Turno de Rega: ";								
                          echo '<tr>								
								 <td>'.$as_turno_rega_irrigacao_li_a.'</td>
                              </tr>';
						  echo "<br><br>";

                          echo "&nbsp&nbsp Dias de Folga: ";								
                          echo '<tr>								
								 <td>'.$as_dias_li_a.'</td>
                              </tr>';
						  echo "<br><br>";

                          echo "&nbsp&nbsp Período de Irrigação: ";								
                          echo '<tr>								
								 <td>'.$as_periodo_irrigacao_li_a.'</td>
                              </tr>';
						  echo "<br>";
						  
						  echo '</fieldset>';
						 
						 echo '</ul>';
						  
							  
						/* Lâmina de Irrigação Ajustada */	  
							                            
                          echo '<div class="menu_12">';
					     echo '<div class="menu_12-box">';
						     echo '<span class="menu_12_left"><h3><big> Lâmina de Irrigação Ajustada'; 
							  echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
							  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
							  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
							  echo '<img src="images/dwn.png" alt=""/> </big></h3></span>';

					    echo '</div>';
							
							echo '<script>					
										$( "span.menu_12_left" ).click(function(){
											$("ul.menu_12_left_nav").slideToggle( "slow", function(){
											});
										});
							 </script>
							 <!-- script-for-menu -->';

							echo '<ul class="menu_12_left_nav">';
							
						 echo '<fieldset>';	
						 
						  echo "<h4>";						  
                          echo "&nbsp&nbsp Turno de Rega Adotado: ";						  
						  echo '<tr> 		 
                                 <td>'.$as_Turno_de_Rega_Adotado_ajustada_a.'</td>
						        </tr>';
						  echo "<br><br>";

                          echo "&nbsp&nbsp Lâmina líquida ajustada: ";								
                          echo '<tr>								
								 <td>'.$as_lamina_liquida_ajustada_a.'</td>
                              </tr>';
						  echo "<br><br>";

                          echo "&nbsp&nbsp Eficiência de Aplicação: ";								
                          echo '<tr>								
								 <td>'.$as_Eficiencia_de_Aplicacao_ajustada_a.'</td>
                              </tr>';
						  echo "<br><br>";
               
                          echo "&nbsp&nbsp Lâmina Bruta Ajustada: ";								
                          echo '<tr>								
								 <td>'.$as_lamina_bruta_ajustada_a.'</td>
                              </tr>';
						  echo "<br>";
						  echo '</fieldset>';
						 
						 echo '</ul>';
						  
							  
						/* Aspersão */ 	  

							 echo '<div class="menu_13">';
					     echo '<div class="menu_13-box">';
						     echo '<span class="menu_13_left"><h3><big> Aspersão'; 
							  echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
							  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
							  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
							  echo '<img src="images/dwn.png" alt=""/> </big></h3></span>';

					    echo '</div>';
							
							echo '<script>					
										$( "span.menu_13_left" ).click(function(){
											$("ul.menu_13_left_nav").slideToggle( "slow", function(){
											});
										});
							 </script>
							 <!-- script-for-menu -->';

							echo '<ul class="menu_13_left_nav">';
							
						 echo '<fieldset>';	                            
                          
						  echo "<h4>";						  
                          echo "&nbsp&nbsp Vazão do Aspersor: ";						  
						  echo '<tr> 		 
                                 <td>'.$as_vazao_as_a.'</td>
						        </tr>';
						  echo "<br><br>";

                          echo "&nbsp&nbsp Espaçamento S1: ";								
                          echo '<tr>								
								 <td>'.$as_es1_as_a.'</td>
                              </tr>';
						  echo "<br><br>";

                          echo "&nbsp&nbsp Espaçamento S2: ";								
                          echo '<tr>								
								 <td>'.$as_es2_as_a.'</td>
                              </tr>';
						  echo "<br><br>";
               
                          echo "&nbsp&nbsp Intensidade de Aplicação: ";								
                          echo '<tr>								
								 <td>'.$as_intensidade_aplicacao_as_a.'</td>
                              </tr>';
						  echo "<br><br>";
						  
						  echo "&nbsp&nbsp Tempo Necessario por Posição: ";						  
						  echo '<tr> 		 
                                 <td>'.$as_tempo_necessario_posicao_as_a.'</td>
						        </tr>';
						  echo "<br><br>";

                          echo "&nbsp&nbsp Tmud: ";								
                          echo '<tr>								
								 <td>'.$as_Tmud_a.'</td>
                              </tr>';
						  echo "<br><br>";

                          echo "&nbsp&nbsp Tempo Necessario por Posição Total: ";								
                          echo '<tr>								
								 <td>'.$as_tempo_necessario_posicao_total_as_a.'</td>
                              </tr>';
						  echo "<br><br>";
               
                          echo "&nbsp&nbsp Nº de Horas de Funcionamento/Dia: ";								
                          echo '<tr>								
								 <td>'.$as_nhifp_a.'</td>
                              </tr>';
						  echo "<br><br>";
						  
						  echo "&nbsp&nbsp Nº de Posições Irrigadas: ";						  
						  echo '<tr> 		 
                                 <td>'.$as_numero_posicoes_irrigadas_as_a.'</td>
						        </tr>';
						  echo "<br><br>";

                          echo "&nbsp&nbsp Comprimento da Área: ";								
                          echo '<tr>								
								 <td>'.$as_comprimento_as_a.'</td>
                              </tr>';
						  echo "<br><br>";

                          echo "&nbsp&nbsp Nº Total de Posições: ";								
                          echo '<tr>								
								 <td>'.$as_numero_total_posicoes_as_a.'</td>
                              </tr>';
						  echo "<br><br>";
               
                          echo "&nbsp&nbsp Nº de Posições a serem Irrigadas: ";								
                          echo '<tr>								
								 <td>'.$as_numero_posicoes_serem_irrigadas_as_a.'</td>
                              </tr>';
						  echo "<br><br>";
						  
						  echo "&nbsp&nbsp Nº de Linhas Laterais: ";						  
						  echo '<tr> 		 
                                 <td>'.$as_numero_linhas_laterais_as_a.'</td>
						        </tr>';
						  echo "<br><br>";

                          echo "&nbsp&nbsp Largura da Área: ";								
                          echo '<tr>								
								 <td>'.$as_largura_area_as_a .'</td>
                              </tr>';
						  echo "<br><br>";

                          echo "&nbsp&nbsp Nº Total de Aspersores por LL: ";								
                          echo '<tr>								
								 <td>'.$as_ntall_as_a.'</td>
                               </tr>';
						  echo "<br><br>";
               
                          echo "&nbsp&nbsp Nº Total de Aspersores em Funcionamento: ";								
                          echo '<tr>								
								 <td>'.$as_ntas_as_a.'</td>
                              </tr>';
						  echo "<br><br>";
						  
						  echo "&nbsp&nbsp Vazão da Linha Lateral: ";								
                          echo '<tr>								
								 <td>'.$as_vazaoll_as_a.'</td>
                              </tr>';
						  echo "<br><br>";
						  
						  echo "&nbsp&nbsp Vazão Total: ";								
                          echo '<tr>								
								 <td>'.$as_vazaot_as_a.'</td>
                              </tr>';
						  echo "<br>";
						  
						  echo '</fieldset>';
						 
						 echo '</ul>';
						  
							  
						/* Linha Lateral */   
							                            
                        echo '<div class="menu_14">';
					     echo '<div class="menu_14-box">';
						     echo '<span class="menu_14_left"><h3><big> Linha Lateral'; 
							  echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
							  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
							  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
							  echo '<img src="images/dwn.png" alt=""/> </big></h3></span>';

					    echo '</div>';
							
							echo '<script>					
										$( "span.menu_14_left" ).click(function(){
											$("ul.menu_14_left_nav").slideToggle( "slow", function(){
											});
										});
							 </script>
							 <!-- script-for-menu -->';

							echo '<ul class="menu_14_left_nav">';
							
						 echo '<fieldset>';	  

						  echo "<h4>";						  
                          echo "&nbsp&nbsp Vazão da LL: ";						  
						  echo '<tr> 		 
                                 <td>'.$as_vazaoll_a.'</td>
						        </tr>';
						  echo "<br><br>";

                          echo "&nbsp&nbsp Coeficiente da LL (Cg): ";								
                          echo '<tr>								
								 <td>'.$as_Cg_da_Linha_Lateral_a.'</td>
                              </tr>';
						  echo "<br><br>";

                          echo "&nbsp&nbsp Comprimento da LL: ";								
                          echo '<tr>								
								 <td>'.$as_comprimentoll_a.'</td>
                              </tr>';
						  echo "<br><br>";
               
                          echo "&nbsp&nbsp Diferença de Nível da LL: ";								
                          echo '<tr>								
								 <td>'.$as_diferenca_nivelll_a.'</td>
                              </tr>';
						  echo "<br><br>";
						  
						  echo "&nbsp&nbsp F da LL: ";						  
						  echo '<tr> 		 
                                 <td>'.$as_fll_a.'</td>
						        </tr>';
						  echo "<br><br>";
						  
						  echo "&nbsp&nbsp HF do Limite da LL: ";						  
						  echo '<tr> 		 
                                 <td>'.$as_hfll_a.'</td>
						        </tr>';
						  echo "<br><br>";

                          echo "&nbsp&nbsp Diametro da LL: ";								
                          echo '<tr>								
								 <td>'.$as_diametroll_a.'</td>
                              </tr>';
						  echo "<br><br>";

                          echo "&nbsp&nbsp Diametro Nominal da LL: ";								
                          echo '<tr>								
								 <td>'.$as_diametro_nominal_ll_a.'</td>
                              </tr>';
						  echo "<br><br>";
               
                          echo "&nbsp&nbsp Perda de Carga da LL: ";								
                          echo '<tr>								
								 <td>'.$as_perda_carga_ll_a.'</td>
                              </tr>';
						  echo "<br><br>";
						  
						  echo "&nbsp&nbsp Pressão de Serviço da LL: ";						  
						  echo '<tr> 		 
                                 <td>'.$as_pressao_servico_ll_a.'</td>
						        </tr>';
						  echo "<br>";
						  
						   echo '</fieldset>';
						 
						 echo '</ul>';
						  
							  
						/* Linha Principal */ 	  
							                            
                          echo '<div class="menu_15">';
					     echo '<div class="menu_15-box">';
						     echo '<span class="menu_15_left"><h3><big> Linha Principal'; 
							  echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
							  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
							  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
							  echo '<img src="images/dwn.png" alt=""/> </big></h3></span>';

					    echo '</div>';
							
							echo '<script>					
										$( "span.menu_15_left" ).click(function(){
											$("ul.menu_15_left_nav").slideToggle( "slow", function(){
											});
										});
							 </script>
							 <!-- script-for-menu -->';

							echo '<ul class="menu_15_left_nav">';
							
						 echo '<fieldset>';	   

						  echo "<h4>";						  
                          echo "&nbsp&nbsp Vazão da LP: ";						  
						  echo '<tr> 		 
                                 <td>'.$as_vazaolp_a.'</td>
						        </tr>';
						  echo "<br><br>";

                          echo "&nbsp&nbsp Comprimento da LP: ";								
                          echo '<tr>								
								 <td>'.$as_comprimento_lp_a.'</td>
                              </tr>';
						  echo "<br><br>";

                          echo "&nbsp&nbsp Diferença de Nível da LP: ";								
                          echo '<tr>								
								 <td>'.$as_diferenca_nivel_lp_a.'</td>
                              </tr>';
						  echo "<br><br>";
               
                          echo "&nbsp&nbsp F da LP: ";								
                          echo '<tr>								
								 <td>'.$as_f_lp_a.'</td>
                              </tr>';
						  echo "<br><br>";
						  
						  echo "&nbsp&nbsp Diametro Calculado da LP: ";						  
						  echo '<tr> 		 
                                 <td>'.$as_diametro_calculado_lp_a.'</td>
						        </tr>';
						  echo "<br><br>";
						  
						  echo "&nbsp&nbsp Diametro Nominal da LP: ";						  
						  echo '<tr> 		 
                                 <td>'.$as_diametro_nominal_lp_a.'</td>
						        </tr>';
						  echo "<br><br>";

                          echo "&nbsp&nbsp Coeficiente da LP (Cg): ";								
                          echo '<tr>								
								 <td>'.$as_Cg_lp_a.'</td>
                              </tr>';
						  echo "<br><br>";

                          echo "&nbsp&nbsp Perda de Carga da LP: ";								
                          echo '<tr>								
								 <td>'.$as_perda_carga_lp_a.'</td>
                              </tr>';
						  echo "<br><br>";
               
                          echo "&nbsp&nbsp Perda de Carga Total da LP: ";								
                          echo '<tr>								
								 <td>'.$as_perda_carga_total_lp_a.'</td>
                              </tr>';
						  echo "<br><br>";
						  
						  echo "&nbsp&nbsp Velocidade de Escoamento da LP: ";						  
						  echo '<tr> 		 
                                 <td>'.$as_velocidade_escoamento_lp_a.'</td>
						        </tr>';
						  echo "<br>";
						  
						  echo '</fieldset>';
						 
						 echo '</ul>';
						  
							  
						/* Linha de Recalque */	  
							                            
                         echo '<div class="menu_16">';
					     echo '<div class="menu_16-box">';
						     echo '<span class="menu_16_left"><h3><big> Linha de Recalque'; 
							  echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
							  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
							  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
							  echo '<img src="images/dwn.png" alt=""/> </big></h3></span>';

					    echo '</div>';
							
							echo '<script>					
										$( "span.menu_16_left" ).click(function(){
											$("ul.menu_16_left_nav").slideToggle( "slow", function(){
											});
										});
							 </script>
							 <!-- script-for-menu -->';

							echo '<ul class="menu_16_left_nav">';
							
						 echo '<fieldset>';	   

						  echo "<h4>";						  
                          echo "&nbsp&nbsp Vazão da LR: ";						  
						  echo '<tr> 		 
                                 <td>'.$as_Vazao_da_Linha_de_Recalque_a.'</td>
						        </tr>';
						  echo "<br><br>";

                          echo "&nbsp&nbsp Velocidade Máxima da LR: ";								
                          echo '<tr>								
								 <td>'.$as_Velocidade_Maxima_da_Linha_de_Recalque_a.'</td>
                              </tr>';
						  echo "<br><br>";

                          echo "&nbsp&nbsp Diâmetro Calculado da LR: ";								
                          echo '<tr>								
								 <td>'.$as_diametro_calculado_lr_a.'</td>
                              </tr>';
						  echo "<br><br>";
               
                          echo "&nbsp&nbsp Coeficiente de Rugosidade da LR: ";								
                          echo '<tr>								
								 <td>'.$as_Coeficiente_de_Rugosidade_da_Linha_de_Recalque_a.'</td>
                              </tr>';
						  echo "<br><br>";
						  
						  echo "&nbsp&nbsp Comprimento da LR: ";						  
						  echo '<tr> 		 
                                 <td>'.$as_Comprimento_da_Linha_de_Recalque_a.'</td>
						        </tr>';
						  echo "<br><br>";
						  
						  echo "&nbsp&nbsp Material (DN/PN): ";						  
						  echo '<tr> 		 
                                 <td>'.$as_materiallr_a.'</td>
						        </tr>';
						  echo "<br><br>";

                          echo "&nbsp&nbsp Diferença de Nível da LR: ";								
                          echo '<tr>								
								 <td>'.$as_dnlr_a.'</td>
                              </tr>';
						  echo "<br><br>";

                          echo "&nbsp&nbsp Perda de Carga da LR: ";								
                          echo '<tr>								
								 <td>'.$as_perda_carga_lr_a.'</td>
                              </tr>';
						  echo "<br><br>";
               
                          echo "&nbsp&nbsp Perda de Carga Total da LR: ";								
                          echo '<tr>								
								 <td>'.$as_perda_carga_total_lr_a.'</td>
                              </tr>';
						  echo "<br><br>";
						  
						  echo "&nbsp&nbsp Velocidade de Escoamento da LR: ";						  
						  echo '<tr> 		 
                                 <td>'.$as_velocidade_escoamento_lr_a.'</td>
						        </tr>';
						  echo "<br>";
						  
						   echo '</fieldset>';
						 
						 echo '</ul>';
						 
							  
					    /* Linha de Sucção */	  
							                            
                        echo '<div class="menu_17">';
					     echo '<div class="menu_17-box">';
						     echo '<span class="menu_17_left"><h3><big> Linha de Sucção'; 
							  echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
							  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
							  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
							  echo '<img src="images/dwn.png" alt=""/> </big></h3></span>';

					    echo '</div>';
							
							echo '<script>					
										$( "span.menu_17_left" ).click(function(){
											$("ul.menu_17_left_nav").slideToggle( "slow", function(){
											});
										});
							 </script>
							 <!-- script-for-menu -->';

							echo '<ul class="menu_17_left_nav">';
							
						 echo '<fieldset>';	   

						  echo "<h4>";						  
                          echo "&nbsp&nbsp Vazão da Linha de Sucção: ";						  
						  echo '<tr> 		 
                                 <td>'.$as_Vazao_da_Linha_de_Succao_a.'</td>
						        </tr>';
						  echo "<br><br>";

                          echo "&nbsp&nbsp Velocidade Máxima da LS: ";								
                          echo '<tr>								
								 <td>'.$as_Velocidade_Maxima_da_Linha_de_Succao_a.'</td>
                              </tr>';
						  echo "<br><br>";

                          echo "&nbsp&nbsp Diâmetro Calculado da LS: ";								
                          echo '<tr>								
								 <td>'.$as_diametro_calculado_lr_a.'</td>
                              </tr>';
						  echo "<br><br>";
               
                          echo "&nbsp&nbsp Coeficiente de Rugosidade da LS: ";								
                          echo '<tr>								
								 <td>'.$as_Coeficiente_de_Rugosidade_da_Linha_Succao_a.'</td>
                              </tr>';
						  echo "<br><br>";
						  
						  echo "&nbsp&nbsp Comprimento da LS: ";						  
						  echo '<tr> 		 
                                 <td>'.$as_Comprimento_da_Linha_Succao_a.'</td>
						        </tr>';
						  echo "<br><br>";
						  
						  echo "&nbsp&nbsp Material (DN/PN): ";						  
						  echo '<tr> 		 
                                 <td>'.$as_materialls_amaterialls_a.'</td>
						        </tr>';
						  echo "<br><br>";

                          echo "&nbsp&nbsp Diferença de Nível da LS: ";								
                          echo '<tr>								
								 <td>'.$as_dnls_a.'</td>
                              </tr>';
						  echo "<br><br>";

                          echo "&nbsp&nbsp Perda de Carga da LS: ";								
                          echo '<tr>								
								 <td>'.$as_perda_carga_ls_a.'</td>
                              </tr>';
						  echo "<br><br>";
               
                          echo "&nbsp&nbsp Perda de Carga Total da LS: ";								
                          echo '<tr>								
								 <td>'.$as_perda_carga_total_ls_a.'</td>
                              </tr>';
						  echo "<br><br>";
						  
						  echo "&nbsp&nbsp Velocidade de Escoamento da LS: ";						  
						  echo '<tr> 		 
                                 <td>'.$as_velocidade_escoamento_ls_a.'</td>
						        </tr>';
						  echo "<br>";
						  
						   echo '</fieldset>';
						 
						 echo '</ul>';
						  
							  
						/* Conjunto Motobomba */	  
							                            
                         echo '<div class="menu_18">';
					     echo '<div class="menu_18-box">';
						     echo '<span class="menu_18_left"><h3><big> Conjunto Motobomba'; 
							  echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
							  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
							  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
							  echo '<img src="images/dwn.png" alt=""/> </big></h3></span>';

					    echo '</div>';
							
							echo '<script>					
										$( "span.menu_18_left" ).click(function(){
											$("ul.menu_18_left_nav").slideToggle( "slow", function(){
											});
										});
							 </script>
							 <!-- script-for-menu -->';

							echo '<ul class="menu_18_left_nav">';
							
						 echo '<fieldset>';	 

						  echo "<h4>";						  

                          echo "&nbsp&nbsp Perda de Carga Localizada: ";								
                          echo '<tr>								
								 <td>'.$as_Perda_de_Carga_Localizada_cmb_a.'</td>
                              </tr>';
						  echo "<br><br>";

                          echo "&nbsp&nbsp Perda de Carga Total: ";								
                          echo '<tr>								
								 <td>'.$as_perda_carga_total_cmb_a.'</td>
                              </tr>';
						  echo "<br><br>";
               
                          echo "&nbsp&nbsp Eficiência da Bomba: ";								
                          echo '<tr>								
								 <td>'.$as_Eficiencia_da_Bomba_cmb_a.'</td>
                              </tr>';
						  echo "<br><br>";
						  
						  echo "&nbsp&nbsp Potência do Motor: ";						  
						  echo '<tr> 		 
                                 <td>'.$as_potencia_motor_cmb_a.'</td>
						        </tr>';
						  echo "<br><br>";
						  
						  echo "&nbsp&nbsp Eficiência do Motor: ";						  
						  echo '<tr> 		 
                                 <td>'.$as_Eficiencia_do_Motor_cmb_a.'</td>
						        </tr>';
						  echo "<br><br>";

                          echo "&nbsp&nbsp Consumo Médio (cv): ";								
                          echo '<tr>								
								 <td>'.$as_consumo_medio_cv_cmb_a.'</td>
                              </tr>';
						  echo "<br><br>";

                          echo "&nbsp&nbsp Consumo Médio (kw): ";								
                          echo '<tr>								
								 <td>'.$as_consumo_medio_kw_cmb_a.'</td>
                              </tr>';
						  echo "<br><br>";
						  
                        echo "</h4>";

						  echo '</fieldset>';
						 
						 echo '</ul>';	
						
						 echo '</fieldset>';

							echo '</ul>';	
				  }
				  
				   /* Gotejamento */
				   
				    if($got_vazao_gotejador == "" && $got_Irrigacao_Real_Necessaria_g == "" && $got_Turno_de_Rega_Adotado2_g == "" && $got_Numero_de_gotejadores_por_Linha_Lateral_g == "" && $got_numero_s_ld_g == "" && $got_numerold_g == "" && $got_Vazao_da_Linha_de_Recalque_g == "" && $got_Vazao_da_Linha_de_Succao_g == "" && $got_Perda_de_Carga_no_Cabecal_de_Controle_g == ""){
					   echo "";
					}			

                    else{  
					
					echo "<h2><br><center>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Tipo de Irrigação</center></h2>";
	 
					 echo '<div class="menu_19">';
					     echo '<div class="menu_19-box">';
						     echo '<span class="menu_19_left"><h3><big> Gotejamento'; 
							  echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
							  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
							  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
							  echo '<img src="images/dwn.png" alt=""/> </big></h3></span>';

					    echo '</div>';
							
							echo '<script>					
										$( "span.menu_19_left" ).click(function(){
											$("ul.menu_19_left_nav").slideToggle( "slow", function(){
											});
										});
							 </script>
							 <!-- script-for-menu -->';

							echo '<ul class="menu_19_left_nav">';

						
						echo '<fieldset>';
							  
							  
					/* Dados do Gotejamento */	
					
							 
                      echo '<div class="menu_20">';
					     echo '<div class="menu_20-box">';
						     echo '<span class="menu_20_left"><h3><big> Dados do Gotejamento'; 
							  echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
							  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
							  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
							  echo '<img src="images/dwn.png" alt=""/> </big></h3></span>';

					    echo '</div>';
							
							echo '<script>					
										$( "span.menu_20_left" ).click(function(){
											$("ul.menu_20_left_nav").slideToggle( "slow", function(){
											});
										});
							 </script>
							 <!-- script-for-menu -->';

							echo '<ul class="menu_20_left_nav">';

						
						echo '<fieldset>';

							echo "<h4>";						  
                          echo "&nbsp&nbsp Vazão do Gotejador: ";						  
						  echo '<tr> 		 
                                 <td>'.$got_vazao_gotejador.'</td>
						        </tr>';
						  echo "<br><br>";

                          echo "&nbsp&nbsp Largura da Faixa Molhada: ";								
                          echo '<tr>								
								 <td>'.$got_largura_faixa_molhada.'</td>
                              </tr>';
						  echo "<br><br>";

                          echo "&nbsp&nbsp Diâmetro Molhado: ";								
                          echo '<tr>								
								 <td>'.$got_diametro_molhado.'</td>
                              </tr>';
						  echo "<br><br>";
               
                          echo "&nbsp&nbsp Porcentagem de Área Molhada: ";								
                          echo '<tr>								
								 <td>'.$got_porcentagem_area_molhada.'</td>
                              </tr>';
						  echo "<br><br>";
						  
						  echo "&nbsp&nbsp Pressão de Serviço: ";						  
						  echo '<tr> 		 
                                 <td>'.$got_pressao_servico.'</td>
						        </tr>';
						  echo "<br><br>";

                          echo "&nbsp&nbsp Nº de Aspersores por Planta: ";								
                          echo '<tr>								
								 <td>'.$got_numero_aspersores_planata.'</td>
                              </tr>';
						  echo "<br><br>";

                          echo "&nbsp&nbsp Intensidade de Aplicação: ";								
                          echo '<tr>								
								 <td>'.$got_intensidade_aplicacao.'</td>
                              </tr>';
						  echo "<br><br>";
               
                          echo "&nbsp&nbsp Tempo de Irrigação: ";								
                          echo '<tr>								
								 <td>'.$got_tempo_irragacao.'</td>
                              </tr>';
						  echo "<br><br>";
						  
						  echo "&nbsp&nbsp Nº Máximo de Setores: ";						  
						  echo '<tr> 		 
                                 <td>'.$got_numero_maximo_setores.'</td>
						        </tr>';
						  echo "<br><br>";

                          echo "&nbsp&nbsp Conexão do Gotejador na Linha: ";								
                          echo '<tr>								
								 <td>'.$got_conexao_gotejador_linha.'</td>
                              </tr>';
						  echo "<br><br>";

                          echo "&nbsp&nbsp Comprimento da LL: ";								
                          echo '<tr>								
								 <td>'.$got_comprimento_linha_lateral.'</td>
                              </tr>';
						  echo "<br><br>";
               
                          echo "&nbsp&nbsp Perda de Carga Admissível: ";								
                          echo '<tr>								
								 <td>'.$got_perda_carga_admissivel.'</td>
                              </tr>';
						  echo "<br><br>";
						  
						  echo "&nbsp&nbsp Perda de Carga Admissível Calculada: ";						  
						  echo '<tr> 		 
                                 <td>'.$got_perda_carga_admissivel_calculada.'</td>
						        </tr>';
						  echo "<br><br>";

                          echo "&nbsp&nbsp Nº de Gotejadores por LL: ";								
                          echo '<tr>								
								 <td>'.$got_numero_gotejador_ll.'</td>
                              </tr>';
						  echo "<br><br>";

                          echo "&nbsp&nbsp Vazão por LL: ";								
                          echo '<tr>								
								 <td>'.$got_vazao_por_ll.'</td>
                               </tr>';
						  echo "<br>";
							
                         echo '</fieldset>';

							echo '</ul>';	

							  
                      /* Lâmina de Irrigação */						
						
                      echo '<div class="menu_21">';
					     echo '<div class="menu_21-box">';
						     echo '<span class="menu_21_left"><h3><big> Lâmina de Irrigação'; 
							  echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
							  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
							  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
							  echo '<img src="images/dwn.png" alt=""/> </big></h3></span>';

					    echo '</div>';
							
							echo '<script>					
										$( "span.menu_21_left" ).click(function(){
											$("ul.menu_21_left_nav").slideToggle( "slow", function(){
											});
										});
							 </script>
							 <!-- script-for-menu -->';

							echo '<ul class="menu_21_left_nav">';

						
						echo '<fieldset>';

							echo "<h4>";						  
                          echo "&nbsp&nbsp Irrigação Real Necessária: ";						  
						  echo '<tr> 		 
                                 <td>'.$got_Irrigacao_Real_Necessaria_g.'</td>
						        </tr>';
						  echo "<br><br>";

                          echo "&nbsp&nbsp Eficiência de aplicação: ";								
                          echo '<tr>								
								 <td>'.$got_Eficiencia_de_aplicacao_g.'</td>
                              </tr>';
						  echo "<br><br>";

                          echo "&nbsp&nbsp Lâmina Bruta de Irrigação: ";								
                          echo '<tr>								
								 <td>'.$got_lamina_bruta_irrigacao_g.'</td>
                              </tr>';
						  echo "<br><br>";
               
                          echo "&nbsp&nbsp Área Sombreada: ";								
                          echo '<tr>								
								 <td>'.$got_Area_Sombreada_g.'</td>
                              </tr>';
						  echo "<br><br>";
						  
						  echo "&nbsp&nbsp Evapotranspiração Localizada: ";						  
						  echo '<tr> 		 
                                 <td>'.$got_evapotranspiracao_localizada_g.'</td>
						        </tr>';
						  echo "<br><br>";

                          echo "&nbsp&nbsp Evapotranspiração da Cultura: ";								
                          echo '<tr>								
								 <td>'.$got_Evapotranspiracao_da_Cultura_g.'</td>
                              </tr>';
						  echo "<br><br>";

                          echo "&nbsp&nbsp Coeficiente de Cultivo: ";								
                          echo '<tr>								
								 <td>'.$got_Coeficiente_de_Cultivo_g.'</td>
                              </tr>';
						  echo "<br><br>";
               
                          echo "&nbsp&nbsp ETc loc: ";								
                          echo '<tr>								
								 <td>'.$got_etcloc_g.'</td>
                              </tr>';
						  echo "<br><br>";
						  
						  echo "&nbsp&nbsp Turno de Rega: ";						  
						  echo '<tr> 		 
                                 <td>'.$got_turno_rega_g.'</td>
						        </tr>';
						  echo "<br><br>";

                          echo "&nbsp&nbsp Irrigação Total Necessária: ";								
                          echo '<tr>								
								 <td>'.$got_Irrigacao_Total_Necessaria_g.'</td>
                              </tr>';
						  echo "<br><br>";

                          echo "&nbsp&nbsp Espaçamento entre Plantas: ";								
                          echo '<tr>								
								 <td>'.$got_Espacamento_entre_Plantas_g.'</td>
                              </tr>';
						  echo "<br><br>";
               
                          echo "&nbsp&nbsp Espaçamento Entre Fileiras: ";								
                          echo '<tr>								
								 <td>'.$got_Espacamento_entre_Fileiras_g.'</td>
                              </tr>';
						  echo "<br><br>";
						  
						  echo "&nbsp&nbsp Vazamento de Água por Planta: ";						  
						  echo '<tr> 		 
                                 <td>'.$got_volume_agua_planta_g.'</td>
						        </tr>';
						  echo "<br>";
							
                         echo '</fieldset>';

							echo '</ul>';		

							  
					/* Lâmina de Irrigação Ajustada */	
						
                      echo '<div class="menu_22">';
					     echo '<div class="menu_22-box">';
						     echo '<span class="menu_22_left"><h3><big> Lâmina de Irrigação Ajustada'; 
							  echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
							  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
							  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
							  echo '<img src="images/dwn.png" alt=""/> </big></h3></span>';

					    echo '</div>';
							
							echo '<script>					
										$( "span.menu_22_left" ).click(function(){
											$("ul.menu_22_left_nav").slideToggle( "slow", function(){
											});
										});
							 </script>
							 <!-- script-for-menu -->';

							echo '<ul class="menu_22_left_nav">';

						
						echo '<fieldset>';

							echo "<h4>";						  

                          echo "&nbsp&nbsp Turno de Rega Adotado: ";								
                          echo '<tr>								
								 <td>'.$got_Turno_de_Rega_Adotado2_g.'</td>
                              </tr>';
						  echo "<br><br>";

                          echo "&nbsp&nbsp Lâmina líquida ajustada: ";								
                          echo '<tr>								
								 <td>'.$got_lamina_liquida_ajustada2_g.'</td>
                              </tr>';
						  echo "<br><br>";
               
                          echo "&nbsp&nbsp Eficiência de Aplicação: ";								
                          echo '<tr>								
								 <td>'.$got_Eficiencia_de_Aplicacao2_g.'</td>
                              </tr>';
						  echo "<br><br>";
						  
						  echo "&nbsp&nbsp Lâmina Bruta Ajustada: ";						  
						  echo '<tr> 		 
                                 <td>'.$got_lamina_bruta_ajustada2_g.'</td>
						        </tr>';
						  echo "<br>";
							
                         echo '</fieldset>';

							echo '</ul>';


							  
                     /* Linha Lateral */						
						
                      echo '<div class="menu_23">';
					     echo '<div class="menu_23-box">';
						     echo '<span class="menu_23_left"><h3><big> Linha Lateral'; 
							  echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
							  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
							  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
							  echo '<img src="images/dwn.png" alt=""/> </big></h3></span>';

					    echo '</div>';
							
							echo '<script>					
										$( "span.menu_23_left" ).click(function(){
											$("ul.menu_23_left_nav").slideToggle( "slow", function(){
											});
										});
							 </script>
							 <!-- script-for-menu -->';

							echo '<ul class="menu_23_left_nav">';

						
						echo '<fieldset>';

							echo "<h4>";						  

                          echo "&nbsp&nbsp Vazão da LL: ";								
                          echo '<tr>								
								 <td>'.$got_vazao_linha_lateral_g.'</td>
                              </tr>';
						  echo "<br><br>";

                          echo "&nbsp&nbsp Nº de gotejadores por LL: ";								
                          echo '<tr>								
								 <td>'.$got_Numero_de_gotejadores_por_Linha_Lateral_g.'</td>
                              </tr>';
						  echo "<br><br>";
               
                          echo "&nbsp&nbsp F da LL: ";								
                          echo '<tr>								
								 <td>'.$got_f_linha_lateral_g.'</td>
                              </tr>';
						  echo "<br><br>";
						  
						   echo "&nbsp&nbsp Coeficiente da LL: ";								
                          echo '<tr>								
								 <td>'.$got_Cg_da_Linha_Lateral_g.'</td>
                              </tr>';
						  echo "<br><br>";

                          echo "&nbsp&nbsp Comprimento: ";								
                          echo '<tr>								
								 <td>'.$got_Comprimento_da_Linha_Lateral_g.'</td>
                              </tr>';
						  echo "<br><br>";
               
                          echo "&nbsp&nbsp Perda de Carga Admissível: ";								
                          echo '<tr>								
								 <td>'.$got_HF_Admissivel_da_Linha_Lateral_g.'</td>
                              </tr>';
						  echo "<br><br>";
						  
						  echo "&nbsp&nbsp Diâmetro da LL: ";						  
						  echo '<tr> 		 
                                 <td>'.$got_diametro_linha_lateral_g.'</td>
						        </tr>';
						  echo "<br><br>";
						  
						   echo "&nbsp&nbsp Diâmetro Nominal da LL: ";								
                          echo '<tr>								
								 <td>'.$got_diametro_nominal_ll_g.'</td>
                              </tr>';
						  echo "<br><br>";

                          echo "&nbsp&nbsp Perca de Carga da LL: ";								
                          echo '<tr>								
								 <td>'.$got_perda_carga_linha_lateral_g.'</td>
                              </tr>';
						  echo "<br><br>";
               
                          echo "&nbsp&nbsp Diferença de Nivel da LL: ";								
                          echo '<tr>								
								 <td>'.$got_Diferenca_de_Nivel_da_Linha_Lateral_g.'</td>
                              </tr>';
						  echo "<br><br>";
						  
						  echo "&nbsp&nbsp Pressão de Início da LL: ";						  
						  echo '<tr> 		 
                                 <td>'.$got_pressao_inicio_linha_lateral_g.'</td>
						        </tr>';
						  echo "<br>";
							
                         echo '</fieldset>';

							echo '</ul>';	

							  
					/* 	Linha de Derivação */
					
                      echo '<div class="menu_24">';
					     echo '<div class="menu_24-box">';
						     echo '<span class="menu_24_left"><h3><big> Linha de Derivação'; 
							  echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
							  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
							  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
							  echo '<img src="images/dwn.png" alt=""/> </big></h3></span>';

					    echo '</div>';
							
							echo '<script>					
										$( "span.menu_24_left" ).click(function(){
											$("ul.menu_24_left_nav").slideToggle( "slow", function(){
											});
										});
							 </script>
							 <!-- script-for-menu -->';

							echo '<ul class="menu_24_left_nav">';

						
						echo '<fieldset>';

							echo "<h4>";						  
						  
						  echo "&nbsp&nbsp Número de Saídas da LD: ";								
                          echo '<tr>								
								 <td>'.$got_numero_s_ld_g.'</td>
                              </tr>';
						  echo "<br><br>";

                          echo "&nbsp&nbsp Vazão da LD: ";								
                          echo '<tr>								
								 <td>'.$got_vazao_linha_derivacao_g.'</td>
                              </tr>';
						  echo "<br><br>";
               
                          echo "&nbsp&nbsp Comprimento da LD: ";								
                          echo '<tr>								
								 <td>'.$got_Comprimento_ld_g.'</td>
                              </tr>';
						  echo "<br><br>";
						  
						   echo "&nbsp&nbsp Diferença de Nível da LD: ";								
                          echo '<tr>								
								 <td>'.$got_diferenca_nivel_linha_derivacao_g.'</td>
                              </tr>';
						  echo "<br><br>";

                          echo "&nbsp&nbsp F da LD: ";								
                          echo '<tr>								
								 <td>'.$got_f_linha_derivacao_g.'</td>
                              </tr>';
						  echo "<br><br>";
               
                          echo "&nbsp&nbsp HF da LD: ";								
                          echo '<tr>								
								 <td>'.$got_hfadm_linha_derivacao_g.'</td>
                              </tr>';
						  echo "<br><br>";
						  
						  echo "&nbsp&nbsp Cg da LD: ";						  
						  echo '<tr> 		 
                                 <td>'.$got_Cg_da_Linha_de_Derivacao_g.'</td>
						        </tr>';
						  echo "<br><br>";
						  
						   echo "&nbsp&nbsp Diâmetro da LD: ";								
                          echo '<tr>								
								 <td>'.$got_diametro_linha_derivacao_g.'</td>
                              </tr>';
						  echo "<br><br>";

                          echo "&nbsp&nbsp Diâmetro do Nível da LD: ";								
                          echo '<tr>								
								 <td>'.$got_diametro_nivel_ld_g.'</td>
                              </tr>';
						  echo "<br><br>";
               
                          echo "&nbsp&nbsp Perda de Carga da LD: ";								
                          echo '<tr>								
								 <td>'.$got_perda_carga_linha_derivacao_g.'</td>
                              </tr>';
						  echo "<br><br>";
						  
						  echo "&nbsp&nbsp Pressão de Inicio da LD: ";						  
						  echo '<tr> 		 
                                 <td>'.$got_pressao_inicio_linha_derivacao_g.'</td>
						        </tr>';
						  echo "<br>";
							
                         echo '</fieldset>';

							echo '</ul>';	

							  
					/* Linha Principal */
					
                      echo '<div class="menu_25">';
					     echo '<div class="menu_25-box">';
						     echo '<span class="menu_25_left"><h3><big> Linha Principal'; 
							  echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
							  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
							  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
							  echo '<img src="images/dwn.png" alt=""/> </big></h3></span>';

					    echo '</div>';
							
							echo '<script>					
										$( "span.menu_25_left" ).click(function(){
											$("ul.menu_25_left_nav").slideToggle( "slow", function(){
											});
										});
							 </script>
							 <!-- script-for-menu -->';

							echo '<ul class="menu_25_left_nav">';

						
						echo '<fieldset>';

							echo "<h4>";						  
               						  
						   echo "&nbsp&nbsp Número de Linhas da LD: ";								
                          echo '<tr>								
								 <td>'.$got_numerold_g.'</td>
                              </tr>';
						  echo "<br><br>";

                          echo "&nbsp&nbsp Vazão da LP: ";								
                          echo '<tr>								
								 <td>'.$got_vazao_linha_principal_g.'</td>
                              </tr>';
						  echo "<br><br>";
               
                          echo "&nbsp&nbsp Diferença de Nível da LP: ";								
                          echo '<tr>								
								 <td>'.$got_diferenca_nivel_linha_principal_g.'</td>
                              </tr>';
						  echo "<br><br>";
						  
						  echo "&nbsp&nbsp Velocidade Máxima: ";						  
						  echo '<tr> 		 
                                 <td>'.$got_Velocidade_Maxima_da_Linha_Principal_g.'</td>
						        </tr>';
						  echo "<br><br>";
						  
						   echo "&nbsp&nbsp Diâmetro Calculado da LP: ";								
                          echo '<tr>								
								 <td>'.$got_diametro_calculado_linha_principal_g.'</td>
                              </tr>';
						  echo "<br><br>";

                          echo "&nbsp&nbsp Coeficiente de Rugosidade: ";								
                          echo '<tr>								
								 <td>'.$got_Coeficiente_de_Rugosidade_da_Linha_Principal_g.'</td>
                              </tr>';
						  echo "<br><br>";
               
                          echo "&nbsp&nbsp Comprimento da LP: ";								
                          echo '<tr>								
								 <td>'.$got_Comprimento_da_Linha_Principal_g.'</td>
                              </tr>';
						  echo "<br><br>";
						  
						  echo "&nbsp&nbsp Material (DN/PN): ";						  
						  echo '<tr> 		 
                                 <td>'.$got_materiallp_g.'</td>
						        </tr>';
						  echo "<br><br>";
						  
						  echo "&nbsp&nbsp Perda de Carga LP: ";						  
						  echo '<tr> 		 
                                 <td>'.$got_perda_carga_linha_principal_g.'</td>
						        </tr>';
						  echo "<br>";
							
                         echo '</fieldset>';

							echo '</ul>';	

							  
					/* Linha de Recalque */
					
                      echo '<div class="menu_26">';
					     echo '<div class="menu_26-box">';
						     echo '<span class="menu_26_left"><h3><big> Linha de Recalque'; 
							  echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
							  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
							  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
							  echo '<img src="images/dwn.png" alt=""/> </big></h3></span>';

					    echo '</div>';
							
							echo '<script>					
										$( "span.menu_26_left" ).click(function(){
											$("ul.menu_26_left_nav").slideToggle( "slow", function(){
											});
										});
							 </script>
							 <!-- script-for-menu -->';

							echo '<ul class="menu_26_left_nav">';

						
						echo '<fieldset>';

							echo "<h4>";						  
               				               
                          echo "&nbsp&nbsp Vazão da Linha de Recalque: ";								
                          echo '<tr>								
								 <td>'.$got_Vazao_da_Linha_de_Recalque_g.'</td>
                              </tr>';
						  echo "<br><br>";
						  
						  echo "&nbsp&nbsp Velocidade Máxima da LR: ";						  
						  echo '<tr> 		 
                                 <td>'.$got_Velocidade_Maxima_da_Linha_de_Recalque_g.'</td>
						        </tr>';
						  echo "<br><br>";
						  
						   echo "&nbsp&nbsp Diâmetro Calculado da LR: ";								
                          echo '<tr>								
								 <td>'.$got_diametro_calculado_linha_recalque_g.'</td>
                              </tr>';
						  echo "<br><br>";

                          echo "&nbsp&nbsp Coeficiente de Rugosidade da LR: ";								
                          echo '<tr>								
								 <td>'.$got_Coeficiente_de_Rugosidade_da_Linha_de_Recalque_g.'</td>
                              </tr>';
						  echo "<br><br>";
               
                          echo "&nbsp&nbsp Comprimento da LR: ";								
                          echo '<tr>								
								 <td>'.$got_Comprimento_da_Linha_de_Recalque_g.'</td>
                              </tr>';
						  echo "<br><br>";
						  
						  echo "&nbsp&nbsp Material (DN/PN): ";						  
						  echo '<tr> 		 
                                 <td>'.$got_materiallr_g.'</td>
						        </tr>';
						  echo "<br><br>";
						  
						  echo "&nbsp&nbsp Perda de Carga da LR: ";						  
						  echo '<tr> 		 
                                 <td>'.$got_perda_carga_linha_recalque_g.'</td>
						        </tr>';
						  echo "<br>";
							
                         echo '</fieldset>';

							echo '</ul>';	

							  
					/* Linha de Sucção */
					
                      echo '<div class="menu_27">';
					     echo '<div class="menu_27-box">';
						     echo '<span class="menu_27_left"><h3><big> Linha de Sucção'; 
							  echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
							  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
							  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
							  echo '<img src="images/dwn.png" alt=""/> </big></h3></span>';

					    echo '</div>';
							
							echo '<script>					
										$( "span.menu_27_left" ).click(function(){
											$("ul.menu_27_left_nav").slideToggle( "slow", function(){
											});
										});
							 </script>
							 <!-- script-for-menu -->';

							echo '<ul class="menu_27_left_nav">';

						
						echo '<fieldset>';

							echo "<h4>";						  
               				               
                          echo "&nbsp&nbsp Vazão da Linha de Sucção: ";								
                          echo '<tr>								
								 <td>'.$got_Vazao_da_Linha_de_Succao_g.'</td>
                              </tr>';
						  echo "<br><br>";
						  
						  echo "&nbsp&nbsp Velocidade Máxima da LS: ";						  
						  echo '<tr> 		 
                                 <td>'.$got_Velocidade_Maxima_da_Linha_de_Succao_g.'</td>
						        </tr>';
						  echo "<br><br>";
						  
						   echo "&nbsp&nbsp Diâmetro Calculado da LS: ";								
                          echo '<tr>								
								 <td>'.$got_diametro_calculado_linha_succao_g.'</td>
                              </tr>';
						  echo "<br><br>";

                          echo "&nbsp&nbsp Coeficiente de Rugosidade da LS: ";								
                          echo '<tr>								
								 <td>'.$got_Coeficiente_de_Rugosidade_da_Linha_Succao_g.'</td>
                              </tr>';
						  echo "<br><br>";
               
                          echo "&nbsp&nbsp Comprimento da LS: ";								
                          echo '<tr>								
								 <td>'.$got_Comprimento_da_Linha_Succao_g.'</td>
                              </tr>';
						  echo "<br><br>";
						  
						  echo "&nbsp&nbsp Material (DN/PN): ";						  
						  echo '<tr> 		 
                                 <td>'.$got_materialls_g.'</td>
						        </tr>';
						  echo "<br><br>";
						  
						  echo "&nbsp&nbsp Perda de Carga da LS: ";						  
						  echo '<tr> 		 
                                 <td>'.$got_perda_carga_linha_succao_g.'</td>
						        </tr>';
						  echo "<br>";
							
                         echo '</fieldset>';

							echo '</ul>';	

							  
					/* Conjunto Motobomba */
					
                      echo '<div class="menu_28">';
					     echo '<div class="menu_28-box">';
						     echo '<span class="menu_28_left"><h3><big> Conjunto Motobomba'; 
							  echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
							  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
							  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
							  echo '<img src="images/dwn.png" alt=""/> </big></h3></span>';

					    echo '</div>';
							
							echo '<script>					
										$( "span.menu_28_left" ).click(function(){
											$("ul.menu_28_left_nav").slideToggle( "slow", function(){
											});
										});
							 </script>
							 <!-- script-for-menu -->';

							echo '<ul class="menu_28_left_nav">';

						
						echo '<fieldset>';

							echo "<h4>";						  
               				               
                          echo "&nbsp&nbsp Perda de Carga no Cabeçal de Controle: ";								
                          echo '<tr>								
								 <td>'.$got_Perda_de_Carga_no_Cabecal_de_Controle_g.'</td>
                              </tr>';
						  echo "<br><br>";
						  
						  echo "&nbsp&nbsp Perda de Carga Localizada: ";						  
						  echo '<tr> 		 
                                 <td>'.$got_Perda_de_Carga_Localizada_g.'</td>
						        </tr>';
						  echo "<br><br>";
						  
						   echo "&nbsp&nbsp Perda de Carga Total: ";								
                          echo '<tr>								
								 <td>'.$got_perda_carga_totol_cm_g.'</td>
                              </tr>';
						  echo "<br><br>";

                          echo "&nbsp&nbsp Eficiência da Bomba: ";								
                          echo '<tr>								
								 <td>'.$got_Eficiencia_da_Bomba_g.'</td>
                              </tr>';
						  echo "<br><br>";
               
                          echo "&nbsp&nbsp Potência do Motor: ";								
                          echo '<tr>								
								 <td>'.$got_potencia_motor_cm_g.'</td>
                              </tr>';
						  echo "<br><br>";
						  
						  echo "&nbsp&nbsp Eficiência do Motor: ";						  
						  echo '<tr> 		 
                                 <td>'.$got_Eficiencia_da_Motor_g.'</td>
						        </tr>';
						  echo "<br><br>";
						  
						  echo "&nbsp&nbsp Consumo Médio (cv): ";						  
						  echo '<tr> 		 
                                 <td>'.$got_media_consumo_cv_g.'</td>
						        </tr>';
						  echo "<br><br>";
						  
						  echo "&nbsp&nbsp Consumo Médio (kw): ";						  
						  echo '<tr> 		 
                                 <td>'.$got_media_consumo_kw_g.'</td>
						        </tr>';
						  echo "<br>";
							
                         echo '</fieldset>';

							echo '</ul>';							
							
							
						echo '</fieldset>';

							echo '</ul>';	
                     }
					 
					 /* Micro-Aspersor */
					 
					 if($micro_vazao_do_emissor == "" && $micro_Irrigacao_Real_Necessaria == "" && $micro_Turno_de_Rega_Adotado == "" && $micro_N_gotejadores_por_LL == "" && $micro_numero_s_ld == "" && $micro_numerold_lp == "" && $micro_Vazao_da_LR == "" && $micro_Vazao_da_LS == "" && $micro_Perda_de_Carga_no_Cabecal_de_Controle == ""){
					    echo "";
					 }
					 
					 else{
					 
					 echo "<h2><br><center>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Tipo de Irrigação</center></h2>";

                     echo '<div class="menu_29">';
					     echo '<div class="menu_29-box">';
						     echo '<span class="menu_29_left"><h3><big> Micro-Aspersão'; 
							  echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
							  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
							  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
							  echo '<img src="images/dwn.png" alt=""/> </big></h3></span>';

					    echo '</div>';
							
							echo '<script>					
										$( "span.menu_29_left" ).click(function(){
											$("ul.menu_29_left_nav").slideToggle( "slow", function(){
											});
										});
							 </script>
							 <!-- script-for-menu -->';

							echo '<ul class="menu_29_left_nav">';

						
						echo '<fieldset>';
							  
						/* Dados do Micro-Aspersor */	  
							  
					     echo '<div class="menu_30">';
					     echo '<div class="menu_30-box">';
						     echo '<span class="menu_30_left"><h3><big> Dados do Micro-Aspersor'; 
							  echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
							  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
							  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
							  echo '<img src="images/dwn.png" alt=""/> </big></h3></span>';

					    echo '</div>';
							
							echo '<script>					
										$( "span.menu_30_left" ).click(function(){
											$("ul.menu_30_left_nav").slideToggle( "slow", function(){
											});
										});
							 </script>
							 <!-- script-for-menu -->';

							echo '<ul class="menu_30_left_nav">';

						
						echo '<fieldset>';

							echo "<h4>";						  
               				               
                          echo "&nbsp&nbsp Vazão do Emissor: ";								
                          echo '<tr>								
								 <td>'.$micro_vazao_do_emissor.'</td>
                              </tr>';
						  echo "<br><br>";
						  
						  echo "&nbsp&nbsp Diâmetro Molhado: ";						  
						  echo '<tr> 		 
                                 <td>'.$micro_diametro_molhado.'</td>
						        </tr>';
						  echo "<br><br>";
						  
						   echo "&nbsp&nbsp Percentagem de Área Molhada: ";								
                          echo '<tr>								
								 <td>'.$micro_percentagem_de_area_molhada.'</td>
                              </tr>';
						  echo "<br><br>";

                          echo "&nbsp&nbsp Número de Emissores por Planta: ";								
                          echo '<tr>								
								 <td>'.$micro_numero_de_emissores_por_planta.'</td>
                              </tr>';
						  echo "<br><br>";
               
                          echo "&nbsp&nbsp Intensidade de Aplicação: ";								
                          echo '<tr>								
								 <td>'.$micro_intensidade_de_aplicacao.'</td>
                              </tr>';
						  echo "<br><br>";
						  
						  echo "&nbsp&nbsp Espaçamento entre Emissores: ";						  
						  echo '<tr> 		 
                                 <td>'.$micro_espacamento_entre_emissores.'</td>
						        </tr>';
						  echo "<br><br>";
						  
						  echo "&nbsp&nbsp Tempo de Irrigação: ";						  
						  echo '<tr> 		 
                                 <td>'.$micro_tempo_de_irrigacao.'</td>
						        </tr>';
						  echo "<br><br>";
						  
						  echo "&nbsp&nbsp Número Máximo de Setores: ";						  
						  echo '<tr> 		 
                                 <td>'.$micro_numero_maximo_de_setores.'</td>
						        </tr>';
						  echo "<br>";
							
                         echo '</fieldset>';

							echo '</ul>';	

							  
						/* Lâmina de Irrigação */	  
							  
					     echo '<div class="menu_31">';
					     echo '<div class="menu_31-box">';
						     echo '<span class="menu_31_left"><h3><big> Lâmina de Irrigação'; 
							  echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
							  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
							  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
							  echo '<img src="images/dwn.png" alt=""/> </big></h3></span>';

					    echo '</div>';
							
							echo '<script>					
										$( "span.menu_31_left" ).click(function(){
											$("ul.menu_31_left_nav").slideToggle( "slow", function(){
											});
										});
							 </script>
							 <!-- script-for-menu -->';

							echo '<ul class="menu_31_left_nav">';

						
						echo '<fieldset>';

							echo "<h4>";						  
               				               
                          echo "&nbsp&nbsp Irrigação Real Necessária: ";								
                          echo '<tr>								
								 <td>'.$micro_Irrigacao_Real_Necessaria.'</td>
                              </tr>';
						  echo "<br><br>";
						  
						  echo "&nbsp&nbsp Eficiência de aplicação: ";						  
						  echo '<tr> 		 
                                 <td>'.$micro_lamina_Eficiencia_de_aplicacao.'</td>
						        </tr>';
						  echo "<br><br>";
						  
						   echo "&nbsp&nbsp Lâmina Bruta de Irrigação: ";								
                          echo '<tr>								
								 <td>'.$micro_Lamina_Bruta_de_Irrigacao.'</td>
                              </tr>';
						  echo "<br><br>";

                          echo "&nbsp&nbsp Área Sombreada: ";								
                          echo '<tr>								
								 <td>'.$micro_Area_Sombreada.'</td>
                              </tr>';
						  echo "<br><br>";
               
                          echo "&nbsp&nbsp Evapotranspiração Localizada: ";								
                          echo '<tr>								
								 <td>'.$micro_Evapotranspiracao_Localizada.'</td>
                              </tr>';
						  echo "<br><br>";
						  
						  echo "&nbsp&nbsp Evapotranspiração da Cultura: ";								
                          echo '<tr>								
								 <td>'.$micro_Evapotranspiracao_da_Cultura.'</td>
                              </tr>';
						  echo "<br><br>";
						  
						  echo "&nbsp&nbsp Coeficiente de Cultivo: ";						  
						  echo '<tr> 		 
                                 <td>'.$micro_Coeficiente_de_Cultivo.'</td>
						        </tr>';
						  echo "<br><br>";
						  
						   echo "&nbsp&nbsp ETc loc: ";								
                          echo '<tr>								
								 <td>'.$micro_lamina_etcloc.'</td>
                              </tr>';
						  echo "<br><br>";

                          echo "&nbsp&nbsp Turno de Rega: ";								
                          echo '<tr>								
								 <td>'.$micro_lamina_Turno_Rega.'</td>
                              </tr>';
						  echo "<br><br>";
               
                          echo "&nbsp&nbsp Irrigação Total Necessária: ";								
                          echo '<tr>								
								 <td>'.$micro_Irrigacao_Total_Necessaria.'</td>
                              </tr>';
						  echo "<br><br>";
						  
						  echo "&nbsp&nbsp Espaçamento Entre Plantas: ";						  
						  echo '<tr> 		 
                                 <td>'.$micro_Espacamento_entre_Plantas.'</td>
						        </tr>';
						  echo "<br><br>";
						  
						  echo "&nbsp&nbsp Espaçamento Entre Fileiras: ";						  
						  echo '<tr> 		 
                                 <td>'.$micro_Espacamento_entre_Fileiras.'</td>
						        </tr>';
						  echo "<br><br>";
						  
						  echo "&nbsp&nbsp Volume de Água por Planta: ";						  
						  echo '<tr> 		 
                                 <td>'.$micro_Volume_de_Agua_por_Planta.'</td>
						        </tr>';
						  echo "<br>";
							
                         echo '</fieldset>';

							echo '</ul>';		

							  
					  /* Lâmina de Irrigação Ajustada */		  
							  
					     echo '<div class="menu_32">';
					     echo '<div class="menu_32-box">';
						     echo '<span class="menu_32_left"><h3><big> Lâmina de Irrigação Ajustada'; 
							  echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
							  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
							  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
							  echo '<img src="images/dwn.png" alt=""/> </big></h3></span>';

					    echo '</div>';
							
							echo '<script>					
										$( "span.menu_32_left" ).click(function(){
											$("ul.menu_32_left_nav").slideToggle( "slow", function(){
											});
										});
							 </script>
							 <!-- script-for-menu -->';

							echo '<ul class="menu_32_left_nav">';

						
						echo '<fieldset>';

							echo "<h4>";						  
               				            						  
						  echo "&nbsp&nbsp Turno de Rega Adotado: ";						  
						  echo '<tr> 		 
                                 <td>'.$micro_Turno_de_Rega_Adotado.'</td>
						        </tr>';
						  echo "<br><br>";
						  
						   echo "&nbsp&nbsp Lâmina líquida ajustada: ";								
                          echo '<tr>								
								 <td>'.$micro_lla.'</td>
                              </tr>';
						  echo "<br><br>";
						  
						  echo "&nbsp&nbsp Lâmina Bruta Ajustada: ";						  
						  echo '<tr> 		 
                                 <td>'.$micro_lba.'</td>
						        </tr>';
						  echo "<br>";
							
                         echo '</fieldset>';

							echo '</ul>';

							  
					/* Linha Lateral */		  
							  
					     echo '<div class="menu_33">';
					     echo '<div class="menu_33-box">';
						     echo '<span class="menu_33_left"><h3><big> Linha Lateral'; 
							  echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
							  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
							  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
							  echo '<img src="images/dwn.png" alt=""/> </big></h3></span>';

					    echo '</div>';
							
							echo '<script>					
										$( "span.menu_33_left" ).click(function(){
											$("ul.menu_33_left_nav").slideToggle( "slow", function(){
											});
										});
							 </script>
							 <!-- script-for-menu -->';

							echo '<ul class="menu_33_left_nav">';

						
						echo '<fieldset>';

							echo "<h4>";						  
               				            						  
						  echo "&nbsp&nbsp Vazão da LL: ";						  
						  echo '<tr> 		 
                                 <td>'.$micro_vazao_linha_lateral.'</td>
						        </tr>';
						  echo "<br><br>";
						  
						   echo "&nbsp&nbsp Nº de gotejadores por LL: ";								
                          echo '<tr>								
								 <td>'.$micro_N_gotejadores_por_LL.'</td>
                              </tr>';
						  echo "<br><br>";
						  
						  echo "&nbsp&nbsp F da LL: ";						  
						  echo '<tr> 		 
                                 <td>'.$micro_f_ll.'</td>
						        </tr>';
						  echo "<br><br>";
						  
						   echo "&nbsp&nbsp Coeficiente da LL: ";								
                          echo '<tr>								
								 <td>'.$micro_Cg_da_LL.'</td>
                              </tr>';
						  echo "<br><br>";
						  
						  echo "&nbsp&nbsp Comprimento: ";						  
						  echo '<tr> 		 
                                 <td>'.$micro_Comprimento_da_LL.'</td>
						        </tr>';
						  echo "<br><br>";
						  
						   echo "&nbsp&nbsp Perda de Carga Admissível: ";								
                          echo '<tr>								
								 <td>'.$micro_HF_Admissivel_da_LL.'</td>
                              </tr>';
						  echo "<br><br>";
						  
						  echo "&nbsp&nbsp Diâmetro da LL: ";						  
						  echo '<tr> 		 
                                 <td>'.$micro_diametro_ll.'</td>
						        </tr>';
						  echo "<br><br>";
						  
						   echo "&nbsp&nbsp Diâmetro do Nominal da LL: ";								
                          echo '<tr>								
								 <td>'.$micro_diametro_nominal_ll.'</td>
                              </tr>';
						  echo "<br><br>";
						  
						  echo "&nbsp&nbsp Perca de Carga da LL: ";						  
						  echo '<tr> 		 
                                 <td>'.$micro_perda_carga_ll.'</td>
						        </tr>';
						  echo "<br><br>";
						  
						   echo "&nbsp&nbsp Pressão de Serviço: ";								
                          echo '<tr>								
								 <td>'.$micro_Pressao_de_Servico_ll.'</td>
                              </tr>';
						  echo "<br><br>";
						  
						  echo "&nbsp&nbsp Diferença de Nivel da LL: ";						  
						  echo '<tr> 		 
                                 <td>'.$micro_Diferenca_de_Nivel_da_LL.'</td>
						        </tr>';
						  echo "<br><br>";
						  
						  echo "&nbsp&nbsp Pressão de Início da LL: ";						  
						  echo '<tr> 		 
                                 <td>'.$micro_pressao_inicio_ll.'</td>
						        </tr>';
						  echo "<br>";
							
                         echo '</fieldset>';

							echo '</ul>';

							  
					/* Linha de Derivação */ 		  
							  
					     echo '<div class="menu_34">';
					     echo '<div class="menu_34-box">';
						     echo '<span class="menu_34_left"><h3><big> Linha de Derivação'; 
							  echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
							  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
							  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
							  echo '<img src="images/dwn.png" alt=""/> </big></h3></span>';

					    echo '</div>';
							
							echo '<script>					
										$( "span.menu_34_left" ).click(function(){
											$("ul.menu_34_left_nav").slideToggle( "slow", function(){
											});
										});
							 </script>
							 <!-- script-for-menu -->';

							echo '<ul class="menu_34_left_nav">';

						
						echo '<fieldset>';

							echo "<h4>";						  
               				            						  
						  echo "&nbsp&nbsp Número de Saídas da LD: ";						  
						  echo '<tr> 		 
                                 <td>'.$micro_numero_s_ld.'</td>
						        </tr>';
						  echo "<br><br>";
						  
						   echo "&nbsp&nbsp Vazão da LD: ";								
                          echo '<tr>								
								 <td>'.$micro_vazaold.'</td>
                              </tr>';
						  echo "<br><br>";
						  
						  echo "&nbsp&nbsp Comprimento da LD: ";						  
						  echo '<tr> 		 
                                 <td>'.$micro_Comprimento_ld.'</td>
						        </tr>';
						  echo "<br><br>";
						  
						  echo "&nbsp&nbsp Diferença de Nível da LD: ";						  
						  echo '<tr> 		 
                                 <td>'.$micro_diferenca_nivel_ld.'</td>
						        </tr>';
						  echo "<br><br>";
						  
						   echo "&nbsp&nbsp F da LD: ";								
                          echo '<tr>								
								 <td>'.$micro_f_ld.'</td>
                              </tr>';
						  echo "<br><br>";
						  
						  echo "&nbsp&nbsp HF da LD: ";						  
						  echo '<tr> 		 
                                 <td>'.$micro_hf_ld.'</td>
						        </tr>';
						  echo "<br><br>";
						  
						   echo "&nbsp&nbsp Cg da LD: ";								
                          echo '<tr>								
								 <td>'.$micro_Cg_da_LD.'</td>
                              </tr>';
						  echo "<br><br>";
						  
						  echo "&nbsp&nbsp Diâmetro da LD: ";						  
						  echo '<tr> 		 
                                 <td>'.$micro_diametro_ld.'</td>
						        </tr>';
						  echo "<br><br>";
						  
						   echo "&nbsp&nbsp Diâmetro do Nível da LD: ";								
                          echo '<tr>								
								 <td>'.$micro_diametro_nivel_ld.'</td>
                              </tr>';
						  echo "<br><br>";
						  
						  echo "&nbsp&nbsp Perda de Carga da LD: ";						  
						  echo '<tr> 		 
                                 <td>'.$micro_perda_carga_ld.'</td>
						        </tr>';
						  echo "<br><br>";
						  
						  echo "&nbsp&nbsp Pressão de Inicio da LD: ";						  
						  echo '<tr> 		 
                                 <td>'.$micro_pressao_inicio_ld.'</td>
						        </tr>';
						  echo "<br>";
							
                         echo '</fieldset>';

							echo '</ul>';

							  
					/* Linha Principal */ 		  
							  
					     echo '<div class="menu_35">';
					     echo '<div class="menu_35-box">';
						     echo '<span class="menu_35_left"><h3><big> Linha Principal'; 
							  echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
							  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
							  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
							  echo '<img src="images/dwn.png" alt=""/> </big></h3></span>';

					    echo '</div>';
							
							echo '<script>					
										$( "span.menu_35_left" ).click(function(){
											$("ul.menu_35_left_nav").slideToggle( "slow", function(){
											});
										});
							 </script>
							 <!-- script-for-menu -->';

							echo '<ul class="menu_35_left_nav">';

						
						echo '<fieldset>';

							echo "<h4>";						  
               				            						  
						  echo "&nbsp&nbsp Número de Linhas da LD: ";						  
						  echo '<tr> 		 
                                 <td>'.$micro_numerold_lp.'</td>
						        </tr>';
						  echo "<br><br>";
						  
						   echo "&nbsp&nbsp Vazão da LP: ";								
                          echo '<tr>								
								 <td>'.$micro_vazao_lp.'</td>
                              </tr>';
						  echo "<br><br>";
						  
						   echo "&nbsp&nbsp Diferença de Nível da LP: ";								
                          echo '<tr>								
								 <td>'.$micro_diferenca_nivel_lp.'</td>
                              </tr>';
						  echo "<br><br>";
						  
						  echo "&nbsp&nbsp Velocidade Máxima: ";						  
						  echo '<tr> 		 
                                 <td>'.$micro_Velocidade_Maxima_da_LP.'</td>
						        </tr>';
						  echo "<br><br>";
						  
						   echo "&nbsp&nbsp Diâmetro Calculado da LP: ";								
                          echo '<tr>								
								 <td>'.$micro_diametro_calculado_lp.'</td>
                              </tr>';
						  echo "<br><br>";
						  
						  echo "&nbsp&nbsp Coeficiente de Rugosidade: ";						  
						  echo '<tr> 		 
                                 <td>'.$micro_Cg_da_LP.'</td>
						        </tr>';
						  echo "<br><br>";
						  
						   echo "&nbsp&nbsp Comprimento da LP: ";								
                          echo '<tr>								
								 <td>'.$micro_Comprimento_da_LP.'</td>
                              </tr>';
						  echo "<br><br>";
						  
						  echo "&nbsp&nbsp Material (DN/PN): ";						  
						  echo '<tr> 		 
                                 <td>'.$micro_materiallp.'</td>
						        </tr>';
						  echo "<br><br>";
						  
						  echo "&nbsp&nbsp Perda de Carga LP: ";						  
						  echo '<tr> 		 
                                 <td>'.$perda_carga_lp.'</td>
						        </tr>';
						  echo "<br>";
							
                         echo '</fieldset>';

							echo '</ul>';		


							  
						/* Linha de Recalque */ 	  
							  
					     echo '<div class="menu_36">';
					     echo '<div class="menu_36-box">';
						     echo '<span class="menu_36_left"><h3><big> Linha de Recalque'; 
							  echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
							  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
							  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
							  echo '<img src="images/dwn.png" alt=""/> </big></h3></span>';

					    echo '</div>';
							
							echo '<script>					
										$( "span.menu_36_left" ).click(function(){
											$("ul.menu_36_left_nav").slideToggle( "slow", function(){
											});
										});
							 </script>
							 <!-- script-for-menu -->';

							echo '<ul class="menu_36_left_nav">';

						
						echo '<fieldset>';

							echo "<h4>";						  
               				            						 						  
						   echo "&nbsp&nbsp Vazão da Linha de Recalque: ";								
                          echo '<tr>								
								 <td>'.$micro_Vazao_da_LR.'</td>
                              </tr>';
						  echo "<br><br>";
						  
						  echo "&nbsp&nbsp Velocidade Máxima da LR: ";						  
						  echo '<tr> 		 
                                 <td>'.$micro_Velocidade_Maxima_da_LR.'</td>
						        </tr>';
						  echo "<br><br>";
						  
						   echo "&nbsp&nbsp Diâmetro Calculado da LR: ";								
                          echo '<tr>								
								 <td>'.$micro_diametro_calculado_lr.'</td>
                              </tr>';
						  echo "<br><br>";
						  
						  echo "&nbsp&nbsp Coeficiente de Rugosidade da LR: ";						  
						  echo '<tr> 		 
                                 <td>'.$micro_Coeficiente_de_Rugosidade_da_LR.'</td>
						        </tr>';
						  echo "<br><br>";
						  
						   echo "&nbsp&nbsp Comprimento da LR: ";								
                          echo '<tr>								
								 <td>'.$micro_Comprimento_da_LR.'</td>
                              </tr>';
						  echo "<br><br>";
						  
						  echo "&nbsp&nbsp Material (DN/PN): ";						  
						  echo '<tr> 		 
                                 <td>'.$micro_materialr.'</td>
						        </tr>';
						  echo "<br><br>";
						  
						  echo "&nbsp&nbsp Perda de Carga da LR: ";						  
						  echo '<tr> 		 
                                 <td>'.$micro_perda_carga_lr.'</td>
						        </tr>';
						  echo "<br>";
							
                         echo '</fieldset>';

							echo '</ul>';	

							  
					/* Linha de Sucção */		  
							  
					     echo '<div class="menu_37">';
					     echo '<div class="menu_37-box">';
						     echo '<span class="menu_37_left"><h3><big> Linha de Sucção'; 
							  echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
							  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
							  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
							  echo '<img src="images/dwn.png" alt=""/> </big></h3></span>';

					    echo '</div>';
							
							echo '<script>					
										$( "span.menu_37_left" ).click(function(){
											$("ul.menu_37_left_nav").slideToggle( "slow", function(){
											});
										});
							 </script>
							 <!-- script-for-menu -->';

							echo '<ul class="menu_37_left_nav">';

						
						echo '<fieldset>';

							echo "<h4>";						  
               				            						 						  
						   echo "&nbsp&nbsp Vazão da Linha de Sucção: ";								
                          echo '<tr>								
								 <td>'.$micro_Vazao_da_LS.'</td>
                              </tr>';
						  echo "<br><br>";
						  
						  echo "&nbsp&nbsp Velocidade Máxima da LS: ";						  
						  echo '<tr> 		 
                                 <td>'.$micro_Velocidade_Maxima_da_LS.'</td>
						        </tr>';
						  echo "<br><br>";
						  
						   echo "&nbsp&nbsp Diâmetro Calculado da LS: ";								
                          echo '<tr>								
								 <td>'.$micro_diametro_calculado_ls.'</td>
                              </tr>';
						  echo "<br><br>";
						  
						  echo "&nbsp&nbsp Coeficiente de Rugosidade da LS: ";						  
						  echo '<tr> 		 
                                 <td>'.$micro_Coeficiente_de_Rugosidade_da_LS.'</td>
						        </tr>';
						  echo "<br><br>";
						  
						   echo "&nbsp&nbsp Comprimento da LS: ";								
                          echo '<tr>								
								 <td>'.$micro_Comprimento_da_LS.'</td>
                              </tr>';
						  echo "<br><br>";
						  
						  echo "&nbsp&nbsp Material (DN/PN): ";						  
						  echo '<tr> 		 
                                 <td>'.$micro_materialls.'</td>
						        </tr>';
						  echo "<br><br>";
						  
						  echo "&nbsp&nbsp Perda de Carga da LS: ";						  
						  echo '<tr> 		 
                                 <td>'.$micro_perda_carga_ls.'</td>
						        </tr>';
						  echo "<br>";
							
                         echo '</fieldset>';

							echo '</ul>';		

							  
					/* Conjunto Motobomba */ 		  
							  
					     echo '<div class="menu_38">';
					     echo '<div class="menu_38-box">';
						     echo '<span class="menu_38_left"><h3><big> Conjunto Motobomba'; 
							  echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
							  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
							  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
							  echo '<img src="images/dwn.png" alt=""/> </big></h3></span>';

					    echo '</div>';
							
							echo '<script>					
										$( "span.menu_38_left" ).click(function(){
											$("ul.menu_38_left_nav").slideToggle( "slow", function(){
											});
										});
							 </script>
							 <!-- script-for-menu -->';

							echo '<ul class="menu_38_left_nav">';

						
						echo '<fieldset>';

							echo "<h4>";						  
               				            						 						  
						   echo "&nbsp&nbsp Perda de Carga no Cabeçal de Controle: ";								
                          echo '<tr>								
								 <td>'.$micro_Perda_de_Carga_no_Cabecal_de_Controle.'</td>
                              </tr>';
						  echo "<br><br>";
						  
						  echo "&nbsp&nbsp Perda de Carga Localizada: ";								
                          echo '<tr>								
								 <td>'.$micro_Perda_de_Carga_Localizada.'</td>
                              </tr>';
						  echo "<br><br>";
						  
						  echo "&nbsp&nbsp Perda de Carga Total: ";						  
						  echo '<tr> 		 
                                 <td>'.$micro_perda_carga_totol_cm.'</td>
						        </tr>';
						  echo "<br><br>";
						  
						   echo "&nbsp&nbsp Eficiência da Bomba: ";								
                          echo '<tr>								
								 <td>'.$micro_Eficiencia_da_Bomba.'</td>
                              </tr>';
						  echo "<br><br>";
						  
						  echo "&nbsp&nbsp Potência do Motor: ";						  
						  echo '<tr> 		 
                                 <td>'.$micro_potencia_motor_cm.'</td>
						        </tr>';
						  echo "<br><br>";
						  
						   echo "&nbsp&nbsp Eficiência do Motor: ";								
                          echo '<tr>								
								 <td>'.$micro_Eficiencia_da_Motor.'</td>
                              </tr>';
						  echo "<br><br>";
						  
						  echo "&nbsp&nbsp Consumo Médio (cv): ";						  
						  echo '<tr> 		 
                                 <td>'.$micro_media_consumo_cv.'</td>
						        </tr>';
						  echo "<br><br>";
						  
						  echo "&nbsp&nbsp Consumo Médio (kw): ";						  
						  echo '<tr> 		 
                                 <td>'.$micro_media_consumo_kw.'</td>
						        </tr>';
						  echo "<br>";
							
                         echo '</fieldset>';

							echo '</ul>';								
							
                         echo '</fieldset>';

							echo '</ul>';								
						  
					   }
                     }
   
			
?>
<br><br><br><br><br><br><br><br><br>
 </div>	

<!---------------->

			<script src="js/jquery.prettyPhoto.js" type="text/javascript" charset="utf-8"></script>
			<script src="js/bootstrap.min.js"></script>
			<script src="js/jquery.slicknav.js"></script>
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

<script src="js/index.js"></script>




</body>

</html>