<?php
/* Carrega a classe DOMPdf */
require_once("dompdf/dompdf_config.inc.php");

/* Cria a instância */
$dompdf = new DOMPDF();
$conteudo = ('<?php 
      if(!isset($_SESSION["id_projeto"])){
         $_SESSION["id_projeto"] = array();
      }
       
       
      if(isset($_GET["acao"])){
          
         if($_GET["acao"] == "add"){
            $id = intval($_GET["id"]);
            if(!isset($_SESSION["id_projeto"][$id])){
               $_SESSION["id_projeto"][$id] = 1;
            }else{
               $_SESSION["id_projeto"][$id] = 1 + 1;
            }
         }
  
                    include "IFPA_sysrriga_20160010019982000.inc";
         
                              $sql   = "SELECT *  FROM dados_projeto WHERE id_projeto= $id ";
                              $qr    = mysql_query($sql) or die(mysql_error());
                              $ln    = mysql_fetch_assoc($qr);
                               
                              $id_projeto = $ln[id_projeto];
							  $nome_do_projeto = $ln[proj_nome];
							  $tec = $ln["proj_tecResponsavel"];
							  $crea = $ln["proj_nCrea"];
							  $proprietario = $ln["roj_proprietario"];

							  
				        echo "<center><h1><font color="#006400">IFPA</font></h1></center>";
						 echo "<center><h2><font color="#006400"> Projeto $nome_do_projeto</font></h2></center><hr>";

                         echo "<h4>
						 echo " Tecnico Responsavel: .$tec.";

						  echo "<br><br>";	
						  
                         echo " Nº CREA: .$crea.";						  
						 echo " <br><br>";

                         echo "Proprietario: .$proprietario.";								
						 echo " <br>";
						  
                        echo "</h4>";
					 echo " <br><br>";					
	  						  
						  

                     }
		?>');
		
		
/* Carrega seu HTML */
 $dompdf->load_html($conteudo);

   

/* Renderiza */
$dompdf->render();

/* Exibe */
$dompdf->stream(
    "saida.pdf", /* Nome do arquivo de saída */
    array(
        "Attachment" => false /* Para download, altere para true */
    )
);
?>


