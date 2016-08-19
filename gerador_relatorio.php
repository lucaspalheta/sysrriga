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
</head>


<body>
<h1>Olá mundo</h1>
<?php
$id_projeto2 = $_GET['id'];

$query = "SELECT * FROM dados_projeto WHERE id_projeto = $id_projeto2";
  $result = $mysqli->query($query);

?>
 <table class="table table-bordered">
    <thead>
      <tr>
        <th>Nome do Projeto</th>
        <th>Técnico Responsável</th>
        
		
      </tr>
    </thead>
    <tbody>
	
	<?php
	
	foreach ($result as $fila) {
	  
	?>
	
	<tr>
        <td><?php echo $fila['proj_nome']?></td>
        <td><?php echo $fila['proj_tecResponsavel']?></td>
		<!--aqui se coloca as variáveis para serem passadas para a outra página, creio que devemos colocar uma página php apenas para receber e passar ao pdf como POST-->
        
      </tr>
     <?php
	
  }
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