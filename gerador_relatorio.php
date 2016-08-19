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
<?php
$id_projeto2 = $_GET['id'];

$query = "SELECT * FROM dados_projeto WHERE id_projeto = $id_projeto2";
  $qr    = mysql_query($query) or die(mysql_error());
			$ln    = mysql_fetch_assoc($qr);
																   
			$id_projeto = $ln['id_projeto'];
			$nome_do_projeto = $ln['proj_nome'];
			$tec = $ln['proj_tecResponsavel'];
		    $crea = $ln['proj_nCrea'];
			$proprietario = $ln['proj_proprietario'];

?>
 
	
	<?php
	
	echo "<h4>";
	 echo "Tecnico Responsavel: ";
	echo '.$tec.';
	 echo "<br><br>";	
						  
     echo " Nº CREA: ";						  
	  echo '.$crea.';
	  echo "<br><br>";

       echo " Proprietario: ";								
        echo '.$proprietario.';
	  echo "<br>";	  
	  
	?>
	<!--HTML-->
	



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