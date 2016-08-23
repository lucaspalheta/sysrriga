<?php ob_start();

include "IFPA_sysrriga_20160010019982000.inc";

/*Aqui se faz a busca e a declaração das variáveis que vamos usar*/


?>

<!--Aqui é o html normal-->
<html lang="pt-br">
<head>

<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/style_relatorio.css">
	
	
</head>


<body class="border-black font">
<?php
/*Área de busaca de tabelas*/


$id_projeto2 = $_GET['id'];
/*Projeto*/
$busca_projeto = "SELECT * FROM dados_projeto WHERE id_projeto = $id_projeto2";
  $result_projeto = $mysqli->query($busca_projeto);
 
 /*Propriedade*/
  $busca_propriedade = "SELECT * FROM dados_propriedade WHERE id_projeto = $id_projeto2";
  $result_propriedade = $mysqli->query($busca_propriedade);
  
  
  /*Área*/
  $busca_area = "SELECT * FROM dados_area WHERE id_projeto = $id_projeto2";
  $result_area = $mysqli->query($busca_area);
  
  /*Cultura*/
  $busca_cultura = "SELECT * FROM dados_cultura WHERE id_projeto = $id_projeto2";
  $result_cultura = $mysqli->query($busca_cultura);
  
  
  /*Setando o fuso ´orário*/
	date_default_timezone_set('America/Sao_Paulo');
		$day = date('d-m-d');
		$mes = date('m');

?>

	
	<?php
	
	foreach ($result_projeto as $fila_projeto) {
	  foreach ($result_propriedade as $fila_propriedade){
		  foreach ($result_area as $fila_area){
			   foreach ($result_cultura as $fila_cultura){
	?>
	<!--HTML-->
	
	 <?php
 /*Área de a calculos*/
 $area = 0;
 $largura= $fila_area['area_largura'];
 $comprimento= $fila_area['area_comprimento'];

 $area= ($largura * $comprimento)/10000;
 
 $esp_fileiras= $fila_cultura['cult_esp_fileiras'];
 $esp_plantas= $fila_cultura['cult_esp_plantas'];
  
  $area_planta = $esp_fileiras * $esp_plantas;
  
 /*a função ceil arredonda para cima*/
 $n_plantas= ceil (($area * 10000)/$area_planta);
 

 ?>
	
	
	<div class="container ">
		<center class="text-size-12">
	
			<h4 class="well well-sm remove-margin backgrund-laranja border-black-bottom">Projeto de Irrigação - <?php echo $fila_projeto['proj_nome']?></h4>
			<p class="sublinhado texto-justo-20 texto-maiusculo"> <!--Nome da Propriedade--><?php echo $fila_propriedade['prop_nome']?> </p>
			<p class="texto-justo-10 texto-maiusculo"> <!--Nome do Proprietário--><?php echo $fila_projeto['proj_proprietario']?> </p>
			<p class="texto-justo-10 "> <!--Cidade--><?php echo $fila_propriedade['prop_cidade']?> </p>
			
		</center>
		<p class="texto-justo-10 direita text-size-12"> <!--Cidade--><?php echo $fila_propriedade['prop_cidade']; echo ", $day";?> </p>
		<center class="text-size-12">
	
			
			<p class=" negrito ">RESPONSÁVEL TÉCNICO:  <!--Nome da Propriedade--><?php echo $fila_projeto['proj_tecResponsavel']?> - CREA/PA <?php echo $fila_projeto['proj_nCrea']?></p>
				
		</center>
		<p class="  ">Trata-se do projeto de irrigação da fazenda <?php echo $fila_propriedade['prop_nome']?>, localizada no <?php echo $fila_propriedade['prop_endereco']?>, município <?php echo $fila_propriedade['prop_cidade']?>,  
		<?php if($area != 0){echo ", a área a ser implantada totaliza " .$area. " ha";} else {echo ", a área a ser implantada não foi informada.";}?>
			<?php if($area != ""){echo "da cultura " .$fila_cultura['cult_nome'] ;} else {echo "da cultura indeterminada.";}?></p>
			
		<center class=" border-all margin-all cinza">
		
		<p>CARACTERÍSTICAS DA PLANTA CULTIVADA</p>
		
		</center>
		<div class="20porcento margin-all  remove-margin ">
			<ul>
				<li>Espécies Cultivadas</li>
				<li>Espaçamento (m)</li>
				<li>Área/Planta (m²)</li>
				<li>Área do cultivo (ha)</li>
				<li class="correcao" id="ultimo">Nº de Plantas</li>
			</ul>
		</div>
		<div class="20porcento margin-all remove-margin-top ">
			<ul>
				<li><?php echo $fila_cultura['cult_nome'] ?></li>
				<li><?php echo $esp_fileiras. " x " .$esp_plantas ?></li>
				<li><?php echo $area_planta ?></li>
				<li><?php echo $area ?></li>
				<li><?php echo $n_plantas ?></li>
			</ul>
		</div>
		<center class=" remove-margin backgrund-laranja border-black-bottom border-all margin-all"><p>CÁLCULO DE DIMENSIONAMENTO AGRONÔMICO</p></center>
		
		
	</div>
		
		
     
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
     <?php
	
	}}}}
	 ?>



</body>
</html>




<!--Aqui é onde gera o pdf-->
<?php
require_once("dompdf/dompdf_config.inc.php");
$dompdf = new DOMPDF();
$dompdf->load_html(ob_get_clean());
$dompdf->render();
$pdf = $dompdf->output();
$filename = 'relatorio.pdf';
$dompdf->stream($filename, array("Attachment" => 0));

?>