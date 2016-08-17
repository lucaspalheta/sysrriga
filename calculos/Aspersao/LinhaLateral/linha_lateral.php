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
                        <h1><center>Linha Lateral</center></h1>
						
				<br><br>
				
        <form class="container form-horizontal  form-border "  id="formulario_total" role="form" method="post" action="ll.php" >
		
			<fieldset>
			
				<div class="form-group col-md-3 col-sm-12 col-xs-12 evapotranspiracao">
						<label class="control-label color_black">Largura da Área</label><input type="text" class="form-control " name='la' id="la" placeholder='Largura da Área'/>
				</div>
				
				<div class="form-group col-md-3 col-sm-12 col-xs-12 evapotranspiracao">
						<label class="control-label color_black">Espaçamento S1</label><input type="text" class="form-control " name='e1' id="e1" placeholder='Espaçamento S1'/>
			    </div>
			
				<div class="form-group col-md-3 col-sm-12 col-xs-12 evapotranspiracao">
						<label class="control-label color_black">Declividade da Área</label><input type="text" class="form-control " name='Declivid' id="Declivid" placeholder='Declivid. da Área'/>
				</div>
			
				<div class="form-group col-md-3 col-sm-12 col-xs-12 evapotranspiracao">
						<label class="control-label color_black">Número Total de Aspersores por LL</label><input type="text" class="form-control " name='Numero_total' id="Numero_total" placeholder='Número Total de Aspersores por Linha Lateral'/>
				</div>
			
				<div class="form-group col-md-3 col-sm-12 col-xs-12 evapotranspiracao">
						<label class="control-label color_black">Pressão de Serviço</label><input type="text" class="form-control " name='ps' id="ps" placeholder='Pressão de Serviço'/>
				</div>
			
				<div class="form-group col-md-3 col-sm-12 col-xs-12 evapotranspiracao">
						<label class="control-label color_black">Vazão da Linha Lateral (m³/s)</label><input type="text" class="form-control " name='vazaoll' id="vazaoll" placeholder='Vazão da Linha Lateral'/>
				</div>
				
				<div class="form-group col-md-3 col-sm-12 col-xs-12 evapotranspiracao">
						<label class="control-label color_black">Coeficiente da Linha Lateral (Cg)</label><input type="text" class="form-control " name='Cg_da_Linha_Lateral' id="Cg_da_Linha_Lateral" placeholder='Cg da Linha de Dericação'/>
			    </div>
			
				<div class="form-group col-md-3 col-sm-12 col-xs-12 evapotranspiracao">

						<label class="control-label color_black">Diâmetro do Nominal da Linha Lateral</label>
						
						<select class="form-control" name="diametro_nominal_ll" placeholder='diametro_nominal_ll'>
							<option value="147.6" selected>PEAD 160/PN6</option>
							<option value="184.6">PEAD 200/PN6</option>
							<option value="230.8">PEAD 250/PN6</option>
							<option value="291.0">PEAD 315/PN6</option>
							<option value="300.0">AZ 12</option>
							<option value="350.0">AZ 14</option>
							<option value="93.8">MANG 110MM</option>
							<option value="106.6">MANG 125MM</option>
							<option value="141.0">MANG 160MM</option>
							<option value="179.6">MANG 200MM</option>
							<option value="150.0">FOFO 6</option>
							<option value="200.0">FOFO 8</option>
							<option value="250.0">FOFO 10</option>
							<option value="300.0">FOFO 12</option>
							<option value="350.0">FOFO 14</option>
							<option value="35.7">PVC 35/40</option>
							<option value="48.1">PVC 50/40</option>
							<option value="72.5">PVC 75/40</option>
							<option value="97.6">PVC 100/40</option>
							<option value="120.0">PVC 125/40</option>
							<option value="144.0">PVC 150/40</option>
							<option value="35.3">PVC 35/60</option>
							<option value="47.7">PVC 50/60</option>
							<option value="71.5">PVC 75/60</option>
							<option value="112.6">PVC 100/60</option>
							<option value="147.6">PVC 150/60</option>
							<option value="212.0">PVC 200/60</option>
							<option value="261.6">PVC 250/60</option>
							<option value="311.2">PVC 300/60</option>
							<option value="111.8">PVC 100/80</option>
							<option value="161.2">PVC 150/80</option>
							<option value="210.4">PVC 200/80</option>
							<option value="259.8">PVC 250/80</option>
							<option value="309.0">PVC 300/80</option>
							<option value="309.0">PVC 300/80</option>
							<option value="108.4">PVC 100/125</option>
							<option value="394.6">PVC 400/125</option>
						</select>
					</div>
					
				<div class="form-group col-md-3 col-sm-12 col-xs-12 evapotranspiracao">
						<label class="control-label color_black">Altura do Aspersor</label><input type="text" class="form-control " name='Aa' id="Aa" placeholder='Altura do Aspersor'/>
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