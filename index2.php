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
								<li><a href="index.php#">Sair</a></li>
							  </ul>
						  </li>
					  </ul>
			</form>
		</div>


		<div id="contentWrapper">


			<div id="news">
				<div class="container btn-lg padding-top-30"></div>
				<div id="formulario" style="display: " class="container">
					
						<div class="container">
							<div class="row">
								<div class="col-md-12 wwa">
									<span name="about" ></span>
									<h3>Formulário de Informações Gerais</h3>
								</div>
							</div>
						</div>
						
					<div class="fltr2">
					
			<form class="container form-horizontal  form-border "  id="formulario_total" role="form" method="post" action="formulario.php" >
                     <!--Tabela de dados do projeto-->
					 <div class="menu_4">
					     <div class="menu_4-box">
						      <span class="menu_4_left"><h3><big> Dados do Projeto 
							  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
							  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
							  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
							  <img src="images/dwn.png" alt=""/> </big></h3></span>

					     </div>
							<!-- script-for-menu -->
							 <script>					
										$( "span.menu_4_left" ).click(function(){
											$("ul.menu_4_left_nav").slideToggle( "slow", function(){
											});
										});
							 </script>
							 <!-- script-for-menu -->	

							<ul class="menu_4_left_nav">

						
						<fieldset> 
							<div class="form-group col-md-12 col-sm-12 col-xs-12 evapotranspiracao">
								<label class="control-label color_black">Nome</label><input type="text" class="form-control" name='proj_nome' id="proj_nome" placeholder='Nome *'/>
							</div>
							<div class="form-group col-md-12 col-sm-12 col-xs-12 evapotranspiracao">
								<label class="control-label color_black">Técnico Responsável</label><input type="text" class="form-control" name='proj_Tecnico_Responsavel' id="proj_Tecnico_Responsavel" placeholder='Técnico Responsável *'/>
							</div>
							<div class="form-group col-md-12 col-sm-12 col-xs-12 evapotranspiracao">
								<label class="control-label color_black">Nº CREA</label><input type="text" class="form-control" name='proj_CREA' id="proj_CREA" placeholder='Nº CREA *'/>
							</div>
							<div class="form-group col-md-12 col-sm-12 col-xs-12 evapotranspiracao">
								<label class="control-label color_black">Proprietário</label><input type="text" class="form-control" name='proj_Proprietario' id="proj_Proprietario" placeholder='Proprietário *'>
							</div>
						</fieldset>

							</ul>
							
					 </div>	

					 <!--Tabela de dados da propriedade-->
					 <div class="menu_3">
					     <div class="menu_1-box">

						      <span class="menu_3_left"><h3><big> Dados da Propriedade 
							  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
							  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
							  <img src="images/dwn.png" alt=""/> </big></h3></span>

					     </div>
							<!-- script-for-menu -->
							 <script>					
										$( "span.menu_3_left" ).click(function(){
											$("ul.menu_3_left_nav").slideToggle( "slow", function(){
											});
										});
							 </script>
							 <!-- script-for-menu -->	
                           
							<ul class="menu_3_left_nav">
						<fieldset>
							<div class="form-group col-md-12 col-sm-12 col-xs-12 evapotranspiracao">
								<label class="control-label color_black">Nome</label><input type="text" class="form-control" name='prop_nome' id="prop_nome" placeholder='Nome *'/>
							</div>
							<div class="form-group col-md-12 col-sm-12 col-xs-12 evapotranspiracao">
								<label class="control-label color_black">Endereço</label><input type="text" class="form-control" name='prop_endereco' id="prop_endereco" placeholder='Endereço *'/>
							</div>
							<div class="form-group col-md-12 col-sm-12 col-xs-12 evapotranspiracao">
								<label class="control-label color_black">CEP</label><input type="number" class="form-control" name='prop_cep' id="prop_cep" placeholder='CEP *'/>
							</div>
							<div class="form-group col-md-12 col-sm-12 col-xs-12 evapotranspiracao">
								<label class="control-label color_black">Cidade</label><input type="text" class="form-control" name='prop_cidade' id="prop_cidade" placeholder='Cidade *'>
							</div>
						</fieldset>
							</ul>
					 </div> 
				
                    <!--Tabela de dados gerais-->					 

                    <div class="menu_5">
					     <div class="menu_5-box">
						      <span class="menu_5_left"><h3><big> Dados Gerais 
							  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
							  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
							  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
							  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
							  </big><img src="images/dwn.png" alt=""/> </h3></span>

					     </div>
							<!-- script-for-menu -->
							 <script>					
										$( "span.menu_5_left" ).click(function(){
											$("ul.menu_5_left_nav").slideToggle( "slow", function(){
											});
										});
							 </script>
							 <!-- script-for-menu -->	

							<ul class="menu_5_left_nav">

						<fieldset>
							<div class="form-group col-md-3 col-sm-12 col-xs-12 evapotranspiracao">
								<label class="control-label color_black">Evapotranspiração de Referência (ETo)</label><input type="number" class="form-control " name='evapotranspiracao_de_referencia' id="evapotranspiracao_de_referencia" placeholder='Evapotranspiração de Referência (ETo) *'/>
							</div>
							<!--<div class="form-group col-md-3 col-sm-12 col-xs-12 evapotranspiracao">
								<label class="control-label color_black">Disponibilidade Total de Água (DTA)</label><input type="number" class="form-control " name='disponibilidade_total_de_agua' id="disponibilidade_total_de_agua" placeholder='Disponibilidade Total de Água (DTA) *'/>
							</div>-->
							<div class="form-group col-md-3 col-sm-12 col-xs-12 evapotranspiracao">
								<label class="control-label color_black">Eficiência de Aplicação (EA)</label><input type="number" class="form-control " name='eficiencia_de_aplicacao' id="eficiencia_de_aplicacao" placeholder='Eficiência de Aplicação (EA) *'>
							</div>
							<!--<div class="form-group col-md-3 col-sm-12 col-xs-12 evapotranspiracao">
								<label class="control-label color_black">Horas de Funcionamento</label><input type="number" class="form-control " name='horas_de_funcionamento' id="horas_de_funcionamento" placeholder='Horas de Funcionamento *'>
							</div>-->
							<!--<div class="form-group col-md-3 col-sm-12 col-xs-12 evapotranspiracao">
								<label class="control-label color_black">Turno de Rega (TR)</label><input type="number" class="form-control " name='turno_de_rega' id="turno_de_rega" placeholder='Turno de Rega (TR) *'>
								se o turno de rega for de 4,4 dias adota-se 4 e ajusta-se a IRN para os 4 dias
							</div>-->
							<!--<div class="form-group col-md-3 col-sm-12 col-xs-12 evapotranspiracao">
								<label class="control-label color_black">Dias de Folga</label><input type="number" class="form-control " name='dias_de_folga' id="dias_de_folga" placeholder='Dias de Folga *'>
							</div>-->
						</fieldset>
							</ul>
					 </div>	

					 <!--Tabela de dados da àrea-->
                    <div class="menu_6">
					     <div class="menu_6-box">
						      <span class="menu_6_left"><h3><big> Dados da Área 
							  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
							  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
							  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
							  <img src="images/dwn.png" alt=""/> </big></h3></span>

					     </div>
							<!-- script-for-menu -->
							 <script>					
										$( "span.menu_6_left" ).click(function(){
											$("ul.menu_6_left_nav").slideToggle( "slow", function(){
											});
										});
							 </script>
							 <!-- script-for-menu -->	

							<ul class="menu_6_left_nav">

						<fieldset>

							<div class="form-group col-md-3 col-sm-12 col-xs-12 evapotranspiracao">
								<label class="control-label color_black">Largura</label><input type="number" class="form-control " name='Largura' placeholder='Largura' id="Largura" />
							</div>
							<div class="form-group col-md-3 col-sm-12 col-xs-12 evapotranspiracao">
								<label class="control-label color_black">Comprimento</label><input type="number" class="form-control" name='Comprimento' placeholder='Comprimento *' id="Comprimento" onblur="areaRemover essa parte do código para funcionar()"/>
							</div>
							<div class="form-group col-md-3 col-sm-12 col-xs-12 evapotranspiracao">
								<label class="control-label color_black">DN da Linha Principal</label><input type="number" class="form-control " name='DN_da_Linha_Principal' placeholder='DN da Linha Principal *' id="DN_da_Linha_Principal" />
							</div>
							<div class="form-group col-md-3 col-sm-12 col-xs-12 evapotranspiracao">
								<label class="control-label color_black">DN da Linha Lateral</label><input type="number" class="form-control " name='DN_da_Linha_Lateral' id="dn_da_linha_lateral" placeholder='DN da Linha Lateral *'/>
							</div>
							<div class="form-group col-md-3 col-sm-12 col-xs-12 evapotranspiracao">
								<label class="control-label color_black">Comprimento da Linha de Recalque</label><input type="number" class="form-control " name='Comprimento_da_Linha_de_Recalque' placeholder='Comprimento da Linha de Recalque *'/>
							</div>
							<div class="form-group col-md-3 col-sm-12 col-xs-12 evapotranspiracao">
								<label class="control-label color_black">Comprimento da Linha de Sucção</label><input type="number" class="form-control " name='Comprimento_da_Linha_de_Succao' placeholder='Comprimento da Linha de Sucção *'>
							</div>
							<div class="form-group col-md-3 col-sm-12 col-xs-12 evapotranspiracao">
								<label class="control-label color_black">DN da Linha de Recalque</label><input type="number" class="form-control " name='DN_da_Linha_de_Recalque' placeholder='DN da Linha de Recalque *'>
							</div>
							<div class="form-group col-md-3 col-sm-12 col-xs-12 evapotranspiracao">
								<label class="control-label color_black">DN da Linha de Sucção</label><input type="number" class="form-control " name='DN_da_Linha_de_Succao' placeholder='DN da Linha de Sucção *'>
							</div>
							<!--<div class="form-group col-md-3 col-sm-12 col-xs-12 evapotranspiracao">
								<label class="control-label color_black">Tempo de Funcionamento</label><input type="number" class="form-control " name='Tempo_de_Funcionamento' placeholder='Tempo de Funcionamento *'>
							</div>-->
							<div class="form-group col-md-3 col-sm-12 col-xs-12 evapotranspiracao">
								<label class="control-label color_black">Número Total de Setores</label><input type="number" class="form-control " name='Numero_Total_de_Setores' placeholder='Número Total de Setores *'>
							</div>
						</fieldset>
							</ul>
					 </div>			

                      <!--Tabela de dados da cultura-->
                    <div class="menu_7">
					     <div class="menu_7-box">
						      <span class="menu_7_left"><h3><big> Dados da Cultura 
                                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
							  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
							  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
							  <img src="images/dwn.png" alt=""/> </big></h3></span>

					     </div>
							<!-- script-for-menu -->
							 <script>					
										$( "span.menu_7_left" ).click(function(){
											$("ul.menu_7_left_nav").slideToggle( "slow", function(){
											});
										});
							 </script>
							 <!-- script-for-menu -->	

							<ul class="menu_7_left_nav">

						<fieldset>
							<div class="form-group col-md-3 col-sm-12 col-xs-12 evapotranspiracao">
								<label class="control-label color_black">Nome da Cultura</label><input type="text" class="form-control " name='Nome_da_Cultura' placeholder='Nome da Cultura'/>
							</div>
							<div class="form-group col-md-3 col-sm-12 col-xs-12 evapotranspiracao">
								<label class="control-label color_black">Data de Plantio</label><input type="date" class="form-control  " name='Data_de_Plantio' placeholder='Data de Plantio'/>
							</div>
							<div class="form-group col-md-3 col-sm-12 col-xs-12 evapotranspiracao">
								<label class="control-label color_black">Espaçamento entre Plantas</label><input type="number" class="form-control " name='Espacamento_entre_Plantas' placeholder='Espaçamento entre Plantas *'/>
							</div>
							<div class="form-group col-md-3 col-sm-12 col-xs-12 evapotranspiracao">
								<label class="control-label color_black">Espaçamento entre Fileiras</label><input type="number" class="form-control " name='Espacamento_entre_Fileiras' placeholder='Espaçamento entre Fileiras *'/>
							</div>
							<!--<div class="form-group col-md-3 col-sm-12 col-xs-12 evapotranspiracao">
								<label class="control-label color_black">Área Sombreda</label><input type="number" class="form-control " name='Area_Sombreada' placeholder='Área Sombreda *'/>
							</div>-->
							<div class="form-group col-md-3 col-sm-12 col-xs-12 evapotranspiracao">
								<label class="control-label color_black">Profundidade Efetiva do Sistema Radicular (Z)</label><input type="number" class="form-control " name='Profundidade_Efetiva_Sistema_Radicular' placeholder='Profundidade Efetiva do Sistema Radicular (Z) *'/>
							</div>
							<div class="form-group col-md-3 col-sm-12 col-xs-12 evapotranspiracao">
								<label class="control-label color_black">Fator de Disponibilidade (f)</label><input type="number" class="form-control " name='Fator_de_Disponibilidade' id="Fator_de_Disponibilidade" placeholder='Fator de Disponibilidade (f) *'>
							</div>
							<div class="form-group col-md-3 col-sm-12 col-xs-12 evapotranspiracao">
								<label class="control-label color_black">Coeficiente de Cultivo (Kc)</label><input type="number" class="form-control " name='Coeficiente_de_Cultivo' id="Coeficiente_de_Cultivo" placeholder='Coeficiente de Cultivo (Kc) *'>
							</div>
							<div class="form-group col-md-3 col-sm-12 col-xs-12 evapotranspiracao">
								<label class="control-label color_black">Evapotranspiração da Cultura (ETc)</label><input type="number" class="form-control " name='Evapotranspiracao_da_Cultura' placeholder='Evapotranspiração da Cultura (ETc) *'>
							</div>
						</fieldset>
							</ul>
					 </div>	

                    <!--Tabela de dados do solo-->
                    <div class="menu_8">
					     <div class="menu_8-box">
						      <span class="menu_8_left"><h3><big> Dados do Solo 
							   &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
							  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
							  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
							  <img src="images/dwn.png" alt=""/> </big></h3></span>

					     </div>
							<!-- script-for-menu -->
							 <script>					
										$( "span.menu_8_left" ).click(function(){
											$("ul.menu_8_left_nav").slideToggle( "slow", function(){
											});
										});
							 </script>
							 <!-- script-for-menu -->	

							<ul class="menu_8_left_nav">

						<fieldset>
							<div class="form-group col-md-3 col-sm-12 col-xs-12 evapotranspiracao">
								<label class="control-label color_black">Capacidade de Campo (CC)</label><input type="number" class="form-control  " name='capacidade_de_campo' id="capacidade_de_campo" placeholder='Capacidade de Campo (CC)'/>
							</div>
							<div class="form-group col-md-3 col-sm-12 col-xs-12 evapotranspiracao">
								<label class="control-label color_black">Ponto de Murchamento (PM)</label><input type="number" class="form-control " name='ponto_de_murchamento' id="ponto_de_murchamento" placeholder='Ponto de Murchamento (PM)'/>
							</div>
							<div class="form-group col-md-3 col-sm-12 col-xs-12 evapotranspiracao">
								<label class="control-label color_black">Densidade-do-Solo (ds)</label><input type="number" class="form-control " name='densidade_do_solo' id="densidade_do_solo" placeholder='Densidade-do-Solo (ds)' onblur="irnremover esse pedaço para que o código funcione)()" >
							</div>
							<!--<div class="form-group col-md-3 col-sm-12 col-xs-12 evapotranspiracao">
								<label class="control-label color_black">Irrigacao Real Necessária (IRN)</label><input type="number" class="form-control " name='irrigacao_real_necessaria' id="irrigacao_real_necessaria" placeholder='Irrigacao Real Necessária (IRN)'>
							</div>
							<div class="form-group col-md-3 col-sm-12 col-xs-12 evapotranspiracao">
								<label class="control-label color_black">Irrigacao Total Necessária (ITN)</label><input type="number" class="form-control " name='irrigaca_total_necessaria' id="irrigaca_total_necessaria" placeholder='Irrigacao Total Necessária (ITN)'>
							</div>
							<div class="form-group col-md-3 col-sm-12 col-xs-12 evapotranspiracao">
								<label class="control-label color_black">Capacidade Real de Água no Solo (CRA)</label><input type="number" class="form-control " name='capacidade_real_de_agua_no_solo' id="capacidade_real_de_agua_no_solo" placeholder='Capacidade Real de Água no Solo (CRA)'>
							</div>
							<div class="form-group col-md-3 col-sm-12 col-xs-12 evapotranspiracao">
								<label class="control-label color_black">Capacidade Total de Água no Solo (CTA)</label><input type="number" class="form-control " name='capacidade_total_de_agua_no_solo' id="capacidade_total_de_agua_no_solo" placeholder='Capacidade Total de Água no Solo (CTA)'/>
							</div>-->
							<div class="form-group col-md-3 col-sm-12 col-xs-12 evapotranspiracao">
								<label class="control-label color_black">Velocidade de Infiltração Básica (Vib)</label><input type="number" class="form-control " name='velocidade_de_infiltracao_basica' id="velocidade_de_infiltracao_basica" placeholder='Velocidade de Infiltração Básica (Vib)'/>
							</div>
						</fieldset>

							</ul>
					 </div>						 
				   </div>
				   <br><br>
				  
					<center><button type="submit" id="cadastro_btn" class="myButton">Salvar</button></center>
				<br><br>
				
				</form>
				</div>
				<!--fim do formulário-->

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