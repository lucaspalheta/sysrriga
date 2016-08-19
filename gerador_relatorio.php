<?php ob_start();

include "IFPA_sysrriga_20160010019982000.inc";

/*Aqui se faz a busca e a declaração das variáveis que vamos usar*/
$id_projeto = $_GET['id'];

$query = "SELECT * FROM dados_projeto WHERE id_projeto = 'id_projeto'"
?>

<!--Aqui é o html normal-->
<html lang="pt-br">
<head>

<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>


<body>
<h1>Olá mundo</h1>


<!--Como abaixo, é necessário inserir as variáveis dentro de uma tag php-->
<?php
	echo $id_projeto;
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