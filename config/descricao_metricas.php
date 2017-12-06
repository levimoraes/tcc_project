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

	else if ($metrica == "COMPLEXIDADE") {
		return "é a complexidade baseada no número de caminhos pelo código. Sempre que o  uxo de um caminho se divide, o contador da complexidade é incre- mentado em 1. Toda função tem, no mínimo, complexidade igual a 1.";
	}

	else if ($metrica == "IM") {
		return "também conhecido como Índice SQALE, é dado a um projeto relacionando-o com o valor do TDR. A escala padrão do Índice de Manutenibilidade é:
A 0-0.5
B 0.06-0.1 C 0.11-0.20 D 0.21-0.5 E 0.5-1";
	}

	else if ($metrica == "ESTILO_DE_CODIGO") {
		return "formatação de código e problemas de sintaxe. Ex: estilo de nome de variáveis, uso de chaves e aspas para marcação";
	}

	else if ($metrica == "PERFORMANCE") {
		return "código que pode afetar o desempenho da aplicação";
	}

	else if ($metrica == "COMPATIBILIDADE") {
		return "usado, primariamente, para código front-end, detecta problemas de compatibilidade de versão entre diferentes versões de browsers.";
	}

	else if ($metrica == "SEGURANCA") {
		return "problemas de segurança";
	}

	else{
		return "METRICA NAO ENCONTRADA";
	}


}


?>