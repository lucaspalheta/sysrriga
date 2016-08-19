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
$id_projeto2 = $_GET['id'];
/*Projeto*/
$busca_projeto = "SELECT * FROM dados_projeto WHERE id_projeto = $id_projeto2";
  $result_projeto = $mysqli->query($busca_projeto);
 
 /*Propriedade*/
  $busca_propriedade = "SELECT * FROM dados_propriedade WHERE id_projeto = $id_projeto2";
  $result_propriedade = $mysqli->query($busca_propriedade);
	date_default_timezone_set('America/Sao_Paulo');
		$day = date('d-m-d');
		$mes = date('m');

?>
 
	
	<?php
	
	foreach ($result_projeto as $fila_projeto) {
	  foreach ($result_propriedade as $fila_propriedade){
	?>
	<!--HTML-->
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
		<p class="  ">Trata-se do projeto de irrigação da fazenda <?php echo $fila_propriedade['prop_nome']?>, localizada no <?php echo $fila_propriedade['prop_endereco']?>, município <?php echo $fila_propriedade['prop_cidade']?></p>
	</div>
		
		
     
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
     <?php
	
  }}
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