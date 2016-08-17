<?php
  session_start();

        $q = $_POST ["vazao"];
		$s1 = $_POST ["es1"];
		$s2 = $_POST ["es2"];
		$lb = $_POST ["lamina_bruta"];
		$t = $_POST ["Tmud"];
		$nhf = $_POST ["nhifp"];
		$c = $_POST ["comprimento"];
		$pi = $_POST ["pi"];
		$la = $_POST ["la"];

		
     if($q == "" && $s1 == "" && $s2 == "" && $lb == "" && $t == "" && $nhf == "" && $c == "" && $pi == "" && $la == ""){
	 
	 	  echo"<script language='javascript' type='text/javascript'>alert('Preencha os campos corretamente !');window.location.href='..//../../../calculos/Aspersao/aspersao/as_aspersao.php';</script>";
      }
	  
	 else{ 
	 
	 $_SESSION['as_vazao_a'] = $q;
	 $_SESSION['as_es1_a'] = $s1;
	 $_SESSION['as_es2_a'] = $s2;
	 $_SESSION['as_Tmud_a'] = $t;
	 $_SESSION['as_nhifp_a'] = $nhf;
	 $_SESSION['as_comprimento_a'] = $nhf;
	 $_SESSION['as_largura_area_a'] = $la;
	 
    /*calculo da intensidade de aplicação */
	
	    if($q != 0 && $s1 != 0 && $s2 != 0){
            $ia = ((1000 * $q)  / ($s1 * $s2));
		}
        else{
            $ia = 0;
        }
	
    /*calculo tempo necessario por posição */	
	
	    if($lb != 0 && $ia != 0){
            $tnp = ($lb / $ia);
		}
        else{
            $tnp = 0;
        }
    /*calculo tempo necessario por posição total */
		
		if($tnp != 0 && $t != 0){
            $tnpt = ($tnp + $t);
		}	
        else{
            $tnpt = 0;
        }
	
    /*calculo numero de posições irrigadas */	
	
	    if($nhf != 0 && $tnpt != 0){
            $npld = ($nhf / $tnpt);
		}
        else{
            $npld = 0;
        } 
	
	/*calculo numero total de posições */
	
	    if($c != 0 && $s2 != 0){
            $ntp = ((($c - $s2) / $s2) * 2);
		}
        else{
            $ntp = 0;
        }
		
	/*calculo numero de posições a serem irrigadas*/   
		
		if($ntp != 0 && $pi != 0){
            $npid = ($ntp / $pi);
		}
        else{
            $npid = 0;
        }
		
	/*calculo numero de linhas laterais */

         if($npid != 0 && $npld != 0){
            $nll = ($npid / $npld);
		}
        else{
            $nll = 0;
        }
 
	/*calculo numero total de aspersor por linha lateral */

        if($la != 0 && $s1 != 0){
            $ntall = (((($la / 2)-($s1)) / $s1));
		}
        else{
            $ntall = 0;
        }

	/*calculo numero total de aspersores em funcionamento */	

	    if($nll != 0 && $ntall != 0){
            $ntas = ($nll * $ntall);
		}
        else{
            $ntas = 0;
        }
	
    /* calculo da vazão da linha lateral */

        if($ntall != 0 && $q != 0){
            $qll = ($ntall * $q);
		}	
        else{
            $qll = 0;
        }

  	/* calculo da vazão total */
	
	    if($ntas != 0 && $q != 0){
            $qt = ($ntas * $q);
		}	
        else{
            $qt = 0;
        }


        /*Formatação de Números*/
        
		$ia = number_format($ia, 2, ',', ' ');
		$tnp = number_format($tnp, 2, ',', ' ');
		$tnpt = number_format($tnpt, 2, ',', ' ');
		$npld = number_format($npld, 2, ',', ' ');
		$ntp = number_format($ntp, 0, ',', ' ');
		$npid = number_format($npid, 0, ',', ' ');
		$nll = number_format($nll, 0, ',', ' ');
		$ntall = number_format($ntall, 0, ',', ' ');
		$ntas = number_format($ntas, 0, ',', ' ');
		$qll = number_format($qll, 1, ',', ' ');
		$qt = number_format($qt, 1, ',', ' ');

	
	
         $_SESSION['as_intensidade_aplicacao_a'] = $ia;
         $_SESSION['as_tempo_necessario_posicao_a'] = $tnp;
         $_SESSION['as_tempo_necessario_posicao_total_a'] = $tnpt;
         $_SESSION['as_numero_posicoes_irrigadas_a'] = $npld;
         $_SESSION['as_numero_total_posicoes_a'] = $ntp;		 
		 $_SESSION['as_numero_posicoes_serem_irrigadas_a'] = $npid;
		 $_SESSION['as_numero_linhas_laterais_a'] = $nll;
		 $_SESSION['as_ntall_a'] = $ntall;
		 $_SESSION['as_ntas_a'] = $ntas;
         $_SESSION['as_vazaoll_a'] = $qll;
         $_SESSION['as_vazaot_a'] = $qt;
	 


		
		echo"<script language='javascript' type='text/javascript'>alert('Dados Salvos Temporariamente !');window.location.href='..//../../../calculos/Aspersao/Resultados/resultados_aspersao.php';</script>";

    }		
	
        ?>