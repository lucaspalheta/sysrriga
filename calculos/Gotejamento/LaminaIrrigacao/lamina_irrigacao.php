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
				    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><b>Gotejamento</b> <span class="caret"></span></a>
			    <li>
                    <a href="..//../../../gotejamento.php">Dados do Gotejador</a>
                </li>
                <li>
                    <a href="..//../../../calculos/Gotejamento/LaminaIrrigacao/lamina_irrigacao.php">Lâmina de Irrigação</a>
                </li>
                <li>
                    <a href="..//../../../calculos/Gotejamento/LaminaIrrigacaoAjustada/LaminaIrrigacaoAjustada.php">Lâmina de Irrigação Ajustada</a>
                </li>
                <li>
                    <a href="..//../../../calculos/Gotejamento/LinhaLateral/linha_lateral.php">Linha Lateral</a>
                </li>
                <li>
                    <a href="..//../../../calculos/Gotejamento/LinhaDerivacao/linha_derivacao.php">Linha de Derivação</a>
                </li>
                <li>
                    <a href="..//../../../calculos/Gotejamento/LinhaPrincipal/linha_principal.php">Linha Principal</a>
                </li>
                <li>
                    <a href="..//../../../calculos/Gotejamento/LinhaRecalque/linha_recalque.php">Linha de Recalque</a>
                </li>
		        <li>
                    <a href="..//../../../calculos/Gotejamento/LinhaSuccao/linha_succao.php">Linha de Sucção</a>
                </li>
				<li>
                    <a href="..//../../../calculos/Gotejamento/ConjuntoMotobomba/motobomba.php">Conjunto Motobomba</a>
                </li>
				<li>
                    <a href="..//../../../calculos/Gotejamento/ResultadosGotejador/resultados_gotejador.php">Resultados</a>
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
			 
                <h1><center>Lâmina de Irrigação</center></h1>
						
				<br><br>
						
			<form class="container form-horizontal  form-border "  id="formulario_total" role="form" method="post" action="li.php" >
						
			<fieldset>
			
				<div class="form-group col-md-3 col-sm-12 col-xs-12 evapotranspiracao">
						<label class="control-label color_black">Irrigação Real Necessária</label><input type="text" class="form-control " name='Irrigacao_Real_Necessaria' id="Irrigacao_Real_Necessaria" placeholder='Irrigação Real Necessária'/>
				</div>
				
				<div class="form-group col-md-3 col-sm-12 col-xs-12 evapotranspiracao">
						<label class="control-label color_black">Eficiência de aplicação</label><input type="text" class="form-control " name='Eficiencia_de_aplicacao' id="Eficiencia_de_aplicacao" placeholder='Eficiência de aplicação'/>
				</div>

				<div class="form-group col-md-3 col-sm-12 col-xs-12 evapotranspiracao">
						<label class="control-label color_black">Área Sombreada</label><input type="text" class="form-control " name='Area_Sombreada' id="Area_Sombreada" placeholder='Área Sombreada'/>
				</div>
				
				<div class="form-group col-md-3 col-sm-12 col-xs-12 evapotranspiracao">
						<label class="control-label color_black">Porcentagem de Área Molhada</label><input type="text" class="form-control " name='Porcentagem_de_Area_Molhada' id="Porcentagem_de_Area_Molhada" placeholder='Porcentagem de Área Molhada'/>
				</div>
			
				<div class="form-group col-md-3 col-sm-12 col-xs-12 evapotranspiracao">
						<label class="control-label color_black">Evapotranspiração da Cultura</label><input type="text" class="form-control " name='Evapotranspiracao_da_Cultura' id="Evapotranspiracao_da_Cultura" placeholder='Evapotranspiração da Cultura'/>
				</div>
				
				<div class="form-group col-md-3 col-sm-12 col-xs-12 evapotranspiracao">
						<label class="control-label color_black">Coeficiente de Cultivo</label><input type="text" class="form-control " name='Coeficiente_de_Cultivo' id="Coeficiente_de_Cultivo" placeholder='Coeficiente de Cultivo'/>
				</div>

				<div class="form-group col-md-3 col-sm-12 col-xs-12 evapotranspiracao">
						<label class="control-label color_black">Irrigação Total Necessária</label><input type="text" class="form-control " name='Irrigacao_Total_Necessaria' id="Irrigacao_Total_Necessaria" placeholder='Irrigação Total Necessária'/>
				</div>
				
				<div class="form-group col-md-3 col-sm-12 col-xs-12 evapotranspiracao">
						<label class="control-label color_black">Espaçamento Entre Plantas</label><input type="text" class="form-control " name='Espacamento_entre_Plantas' id="Espacamento_entre_Plantas" placeholder='Irrigação Total Necessária'/>
				</div>
				
				<div class="form-group col-md-3 col-sm-12 col-xs-12 evapotranspiracao">
						<label class="control-label color_black">Espaçamento Entre Fileiras</label><input type="text" class="form-control " name='Espacamento_entre_Fileiras' id="Espacamento_entre_Fileiras" placeholder='Espaçamento Entre Fileiras'/>
				</div>

				</fieldset>
				
				<br><br>
		        <div class="form-group">
				     <button type="submit" id="cadastro_btn" class="btn btn-primary btn-block">Submeter</button>
			    </div>

		</form>
		
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