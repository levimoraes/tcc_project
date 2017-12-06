<?php

ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);


function perfil_exibicao($projeto_id,$perfil){

		    $metricas = pega_metricas_projeto($projeto_id);
			$pieces = explode(",", $metricas);


		if($perfil == 'Excesso'){

			cria_widget_menor($projeto_id, $pieces[0], $pieces[1], $pieces[2], $pieces[3]);
			pega_metricas_loc($projeto_id);
			pega_metricas_comentario($projeto_id);
		    echo "<div class='clearfix'></div>";
      		pega_metricas_duplicacao($projeto_id);
      		pega_metricas_issues($projeto_id);
      		echo "<div class='clearfix'></div>";
      		

		}

		else if($perfil == 'Novato'){

			cria_widget_menor($projeto_id, $pieces[0], $pieces[1], $pieces[2], $pieces[3]);
			pega_metricas_loc($projeto_id);
			pega_metricas_comentario($projeto_id);
		    echo "<div class='clearfix'></div>";
      		pega_metricas_duplicacao($projeto_id);
      		pega_metricas_issues($projeto_id);
      		echo "<div class='clearfix'></div>";

		}



}


?>