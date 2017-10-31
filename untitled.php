<?php

function converter_portugues($metrica){
	if ($metrica == 'DOCUMENTATION') {
		return 'DOCUMENTACAO';
	}
	else if ($metrica == 'ERROR_PRONE'){
		return 'ERROR_PHONE';
	}
	else if ($metrica == 'CODE_STYLE'){
		return 'ESTILO_DE_CODIGO';
	}
	else if ($metrica == 'CODE_COMPLEXITY'){
		return 'COMPLEXIDADE_DE_CODIGO';
	}
	else if ($metrica == 'UNUSED_CODE'){
		return 'CODIGO_NAO_UTILIZADO';
	}
	else if ($metrica == 'PERFORMANCE'){
		return 'PERFORMANCE';
	}
	else if ($metrica == 'SECURITY'){
		return 'SEGURANCA';
	}
	else if ($metrica == 'COMPATIBILITY'){
		return 'COMPATIBILIDADE';
	}

}
