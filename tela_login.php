<!DOCTYPE html>
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
			<img src="images/logo.png" style="padding-left: 30px;">
		</a>
		<div id="listView" class="list">
			<li class="dropdown list-item-active">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown"><b>Login Usuário</b> <span class="caret"></span></a>
				<ul id="login-dp" class="dropdown-menu">
					<li id="login_li" class="form-login">
						<div class="row">
							<div class="col-md-12 input-style">
								<form class="form form-login" role="form" method="post" action="login.php" accept-charset="UTF-8" id="login-nav">
								<center><h3>Usuário</h3></center>
									<div class="form-group">
										<label class="sr-only" >Email</label>
										<input type="email" class="form-control" id="email" name="email" placeholder="Email" >
									</div>
									<div class="form-group">
										<label class="sr-only" >Senha</label>
										<input type="password" class="form-control" id="senha" name="senha" placeholder="Senha" >
										<div class="help-block text-right"><a href="">Esqueceu sua senha ?</a></div>
									</div>
									<div class="form-group">
										<button type="submit" class="btn btn-primary btn-block" id="status">Entrar</button>
									</div>
									<div class="checkbox">
										<label class="text-left">
											<input type="checkbox">Lembrar
										</label>
									</div>
								</form>
							</div>
						</div>
					</li>
				</ul>
			</li>

		</div>
		
				<div id="listView" class="list">
			<li class="dropdown list-item-active">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown"><b>Login Administrador</b> <span class="caret"></span></a>
				<ul id="login-dp" class="dropdown-menu">
					<li id="login_li" class="form-login">
						<div class="row">
							<div class="col-md-12 input-style">
								<form class="form form-login" role="form" method="post" action="login_admin.php" accept-charset="UTF-8" id="login-nav">
								   <center><h3>Administrador</h3></center>
									<div class="form-group">
										<label class="sr-only" >Nome</label>
										<input type="nome" class="form-control" id="nome_admin" name="nome_admin" placeholder="Nome" >
									</div>
									<div class="form-group">
										<label class="sr-only" >Senha</label>
										<input type="password" class="form-control" id="senha_admin" name="senha_admin" placeholder="Senha" >
										<div class="help-block text-right"><a href="">Esqueceu sua senha ?</a></div>
									</div>
									<div class="form-group">
										<button type="submit" class="btn btn-primary btn-block" id="status">Entrar</button>
									</div>
									<div class="checkbox">
										<label class="text-left">
											<input type="checkbox">Lembrar
										</label>
									</div>
								</form>
							</div>
						</div>
					</li>
				</ul>
			</li>
			<li><a href="#">Fale Conosco</a></li>

		</div>
	</div>

	<div id="rightWrapper" class="full-page">
	
		<div id="header" class="full-page log-img">
			<a id="fullPage" href="#">|||</a>
			<a href="#">
				<img src="images/logo.png">
			</a>

		</div>


		<div id="contentWrapper">


			<!--home start-->
			<div id="home">

				
    
  

				<!--formulário de cadastro-->

				<div id="cadas ">
					<div class="container btn-lg padding-top-30"></div>
					<div class="container cadastro pb300" id="cadastro_div">
						<div class="row col-lg-offset-2 col-lg-8 cBusiness"  >
							<div class=" col-lg-offset-1 col-md-10 cBusiness " >
							<div class="col-md-12 input-style">
								
								<form class="form" role="form" method="post" action="login.php" accept-charset="UTF-8"  id="login_nav">
									<h3>Faça Login para começar a dimensionar</h3>
									<h4>E tenha acesso a todas as funções do sistema.</h4>
									<div class="form-group">
										<label class="sr-only" >Email</label>
										<input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
									</div>
									<div class="form-group">
										<label class="sr-only" >Senha</label>
										<input type="password" class="form-control" id="senha" name="senha" placeholder="Senha" >
										<div class="help-block text-right"><a href="">Esqueceu sua senha ?</a></div>
									</div>
									<div class="form-group">
										<button type="submit" class="btn btn-primary btn-block" id="status">Entrar</button>
									</div>
									<div class="checkbox">
										<label class="text-left">
											<input type="checkbox">Lembrar
										</label>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>




			<div id="contact">




				<div class="lineBlack">
					<div class="container">
						<div class="row downLine">
							<div class="col-md-12 text-right">
								<!--input  id="searchPattern" type="search" name="pattern" value="Search the Site" onblur="if(this.value=='') {this.value='Search the Site'; }" onfocus="if(this.value =='Search the Site' ) this.value='';this.style.fontStyle='normal';" style="font-style: normal;"/-->
								<input  id="searchPattern" type="search" placeholder="Procurar"/><i class="glyphicon glyphicon-search" style="font-size: 13px; color:#a5a5a5;" id="iS"></i>
							</div>
							<div class="col-md-6 text-left copy">
								<p>Copyright &copy; 2016 CAPSI, IFPA-Campus CAstanhal.</p>
							</div>
							<div class="col-md-6 text-right dm">
								<ul id="downMenu">
									<li class="active"><a href="#home">Início</a></li>
									<li><a href="#about">o que é</a></li>
									<!--<li><a href="#project1">Projects</a></li>-->
									<li><a href="#news">Projetos</a></li>
									<li class="last"><a href="#contact">Contatos</a></li>
									<!--li><a href="#features">Features</a></li-->
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>


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