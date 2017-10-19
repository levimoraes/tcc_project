<?php 

function descricao($metrica){
	if ($metrica == "LOC") {
		return "LOC representa o número de linhas de código fonte de uma classe.";
	}
	else if ($metrica == "DUPLICACAO") {
		return "A duplicação de código é o problema mais comum apontado pelos Bad Smells, que é uma coleção de más práticas que acontecem em desenvolvimento de software. Um dos problemas é o aumento da base de código. Isso pode não ser um problema para armazenamento, mas é um problema para o entendimento da aplicação.";
	}
	else if ($metrica == "ISSUES") {
		return "Issues são defeitos de código que podem ser classificados em: Blocker, Critical, Major, Minor e Info de acordo com a severidade do defeito" ;
	}
	else if ($metrica == "COMENTARIO") {
		return "Comentários podem aparecer em qualquer lugar em um documento fora de outra marcação; em adição, eles podem aparecer dentro da declação de tipo de documento em lugares permitidos pela gramática";
	}

	else{
		return "METRICA NAO ENCONTRADA";
	}


}


?>