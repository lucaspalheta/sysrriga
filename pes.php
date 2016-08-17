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
			<li><a href="pesquisa.php">Pesquisar Projeto</a></li>

		</div>
	</div>

	<div id="rightWrapper" class="full-page">
	
		<div id="header" class="full-page log-img">
			
         <a id="fullPage" href="#">|||</a>
			<a href="#">
				<img src="images/logo.png">
			</a>
			<a href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" class="dropdown-smile"> <img src="http://localhost:8080/LabWebII/Sysrriga/images/logado3.png" alt=""/></a>
			<form class="navbar-form  navbar-right container div-pesquisa" role="Pesquisar" style="margin-right: 250px" >

					   <ul class="nav navbar-nav navbar-right">
						  <li class="dropdown">
							  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><img src="http://localhost:8080/LabWebII/Sysrriga/images/logado3.png" alt=""/> <?php echo "<font color='#FFF'> $logado </font>"; ?> </a>
							  <ul class="dropdown-menu">
								<li><a href="index.php">Sair</a></li>
							  </ul>
						  </li>
					  </ul>
			</form>
		</div>


		<div id="contentWrapper">


	<div id="news">
				<div class="container btn-lg padding-top-30"></div>
				<div id="formulario"  class="container">

				

					<div class="fltr2">
						<center>
			<form class="container" >



							<ul  class="col-lg-12">
								<?php
	 
	  include "IFPA_sysrriga_20160010019982000.inc";
	 
	 $pesquisa = $_POST['pesquisa'];
     $resultado = mysql_query("select * from dados_projeto where proj_nome LIKE '%".$pesquisa."%' ");
     $linhas = mysql_num_rows($resultado);

if($linhas == 0){

   echo"<script language='javascript' type='text/javascript'>alert('Nenhum projeto foi encontrado !!');window.location.href='http://localhost:8080/LabWebII/Sysrriga/pesquisa.php';</script>";

}

if($linhas != 0){

  echo "<center><h1>Projetos Encontrados</h1><hr></center>";
  
   for($i = 0; $i < $linhas; $i++){
     $registro = mysql_fetch_row($resultado);
	 
	  $cod = $registro[1];
      $nome = $registro[2];
	 
	  echo '<li class="info-01 col-lg-12">';
	  echo "<center><a href='resultado_pesquisa.php?id=".$cod."&acao=pes''>$nome</a></center>";
	  echo '</li>';
    }
	 mysql_close($conexao);
  }
	?>
							</ul>



			</form>
						</center>
					</div>

				</div>




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