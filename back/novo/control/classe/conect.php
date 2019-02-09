<?php 
function conectar(){

	try {
			date_default_timezone_set('America/Recife');
			$pdo = new PDO ("mysql:host=localhost;dbname=nfoods_data","nfoods","2016-lumen");

		} catch (PDOException $e) {
		
					echo $e->getMessage();
		
		}
		return $pdo;
}

function decodeHTML($texto) {

		$texto = str_replace("&Aacute;","Á",   $texto);
		$texto = str_replace("&aacute;","á",   $texto);
		$texto = str_replace("&Acirc;","Â",   $texto);
		$texto = str_replace("&acirc;","â",   $texto);
		$texto = str_replace("&Agrave;","À",   $texto);
		$texto = str_replace("&agrave;","à",   $texto);
		$texto = str_replace("&Aring;","Å",   $texto);
		$texto = str_replace("&aring;","å",   $texto);
		$texto = str_replace("&Atilde;","Ã",   $texto);
		$texto = str_replace("&atilde;","ã",   $texto);
		$texto = str_replace("&Auml;","Ä",   $texto);
		$texto = str_replace("&auml;","ä",   $texto);
		$texto = str_replace("&AElig;","Æ",   $texto);
		$texto = str_replace("&aelig;","æ",   $texto);
		$texto = str_replace("&Eacute;","É",   $texto);
		$texto = str_replace("&eacute;","é",   $texto);
		$texto = str_replace("&Ecirc;","Ê",   $texto);
		$texto = str_replace("&ecirc;","ê",   $texto);
		$texto = str_replace("&Egrave;","È",   $texto);
		$texto = str_replace("&egrave;","è",   $texto);
		$texto = str_replace("&Euml;","Ë",   $texto);
		$texto = str_replace("&euml;","ë",   $texto);
		$texto = str_replace("&ETH;","Ð",   $texto);
		$texto = str_replace("&eth;","ð",   $texto);
		$texto = str_replace("&Iacute;","Í",   $texto);
		$texto = str_replace("&iacute;","í",   $texto);
		$texto = str_replace("&Icirc;","Î",   $texto);
		$texto = str_replace("&icirc;","î",   $texto);
		$texto = str_replace("&Igrave;","Ì",   $texto);
		$texto = str_replace("&igrave;","ì",   $texto);
		$texto = str_replace("&Iuml;","Ï",   $texto);
		$texto = str_replace("&iuml;","ï",   $texto);
		$texto = str_replace("&Oacute;","Ó",   $texto);
		$texto = str_replace("&oacute;","ó",   $texto);
		$texto = str_replace("&Ocirc;","Ô",   $texto);
		$texto = str_replace("&ocirc;","ô",   $texto);
		$texto = str_replace("&Ograve;","Ò",   $texto);
		$texto = str_replace("&ograve;","ò",   $texto);
		$texto = str_replace("&Oslash;","Ø",   $texto);
		$texto = str_replace("&oslash;","ø",   $texto);
		$texto = str_replace("&Otilde;","Õ",   $texto);
		$texto = str_replace("&otilde;","õ",   $texto);
		$texto = str_replace("&Ouml;","Ö",   $texto);
		$texto = str_replace("&ouml;","ö",   $texto);
		$texto = str_replace("&Uacute;","Ú",   $texto);
		$texto = str_replace("&uacute;","ú",   $texto);
		$texto = str_replace("&Ucirc;","Û",   $texto);
		$texto = str_replace("&ucirc;","û",   $texto);
		$texto = str_replace("&Ugrave;","Ù",   $texto);
		$texto = str_replace("&ugrave;","ù",   $texto);
		$texto = str_replace("&Uuml;","Ü",   $texto);
		$texto = str_replace("&uuml;","ü",   $texto);
		$texto = str_replace("&Ccedil;","Ç",   $texto);
		$texto = str_replace("&ccedil;","ç",   $texto);
		$texto = str_replace("&Ntilde;","Ñ",   $texto);
		$texto = str_replace("&ntilde;","ñ",   $texto);
		$texto = str_replace("&lt;","<",   $texto);
		$texto = str_replace("&gt;",">",   $texto);
		//$texto = str_replace("&",  "&amp;", $texto);
		$texto = str_replace("&reg;","®",   $texto);
		$texto = str_replace("&copy;","©",   $texto);
		$texto = str_replace("&Yacute;","Ý",   $texto);
		$texto = str_replace("&yacute;","ý",   $texto);
		$texto = str_replace("&THORN;","Þ",   $texto);
		$texto = str_replace("&thorn;","þ",   $texto);
		$texto = str_replace("&szlig;","ß",  $texto);

		return $texto;
	}
	function encodeHTML($texto) {

		$texto = str_replace("Á",  "&Aacute;", $texto);
		$texto = str_replace("á",  "&aacute;", $texto);
		$texto = str_replace("Â",  "&Acirc;", $texto);
		$texto = str_replace("â",  "&acirc;", $texto);
		$texto = str_replace("À",  "&Agrave;", $texto);
		$texto = str_replace("à",  "&agrave;", $texto);
		$texto = str_replace("Å",  "&Aring;", $texto);
		$texto = str_replace("å",  "&aring;", $texto);
		$texto = str_replace("Ã",  "&Atilde;", $texto);
		$texto = str_replace("ã",  "&atilde;", $texto);
		$texto = str_replace("Ä",  "&Auml;", $texto);
		$texto = str_replace("ä",  "&auml;", $texto);
		$texto = str_replace("Æ",  "&AElig;", $texto);
		$texto = str_replace("æ",  "&aelig;", $texto);
		$texto = str_replace("É",  "&Eacute;", $texto);
		$texto = str_replace("é",  "&eacute;", $texto);
		$texto = str_replace("Ê",  "&Ecirc;", $texto);
		$texto = str_replace("ê",  "&ecirc;", $texto);
		$texto = str_replace("È",  "&Egrave;", $texto);
		$texto = str_replace("è",  "&egrave;", $texto);
		$texto = str_replace("Ë",  "&Euml;", $texto);
		$texto = str_replace("ë",  "&euml;", $texto);
		$texto = str_replace("Ð",  "&ETH;", $texto);
		$texto = str_replace("ð",  "&eth;", $texto);
		$texto = str_replace("Í",  "&Iacute;", $texto);
		$texto = str_replace("í",  "&iacute;", $texto);
		$texto = str_replace("Î",  "&Icirc;", $texto);
		$texto = str_replace("î",  "&icirc;", $texto);
		$texto = str_replace("Ì",  "&Igrave;", $texto);
		$texto = str_replace("ì",  "&igrave;", $texto);
		$texto = str_replace("Ï",  "&Iuml;", $texto);
		$texto = str_replace("ï",  "&iuml;", $texto);
		$texto = str_replace("Ó",  "&Oacute;", $texto);
		$texto = str_replace("ó",  "&oacute;", $texto);
		$texto = str_replace("Ô",  "&Ocirc;", $texto);
		$texto = str_replace("ô",  "&ocirc;", $texto);
		$texto = str_replace("Ò",  "&Ograve;", $texto);
		$texto = str_replace("ò",  "&ograve;", $texto);
		$texto = str_replace("Ø",  "&Oslash;", $texto);
		$texto = str_replace("ø",  "&oslash;", $texto);
		$texto = str_replace("Õ",  "&Otilde;", $texto);
		$texto = str_replace("õ",  "&otilde;", $texto);
		$texto = str_replace("Ö",  "&Ouml;", $texto);
		$texto = str_replace("ö",  "&ouml;", $texto);
		$texto = str_replace("Ú",  "&Uacute;", $texto);
		$texto = str_replace("ú",  "&uacute;", $texto);
		$texto = str_replace("Û",  "&Ucirc;", $texto);
		$texto = str_replace("û",  "&ucirc;", $texto);
		$texto = str_replace("Ù",  "&Ugrave;", $texto);
		$texto = str_replace("ù",  "&ugrave;", $texto);
		$texto = str_replace("Ü",  "&Uuml;", $texto);
		$texto = str_replace("ü",  "&uuml;", $texto);
		$texto = str_replace("Ç",  "&Ccedil;", $texto);
		$texto = str_replace("ç",  "&ccedil;", $texto);
		$texto = str_replace("Ñ",  "&Ntilde;", $texto);
		$texto = str_replace("ñ",  "&ntilde;", $texto);
		$texto = str_replace("<",  "&lt;", $texto);
		$texto = str_replace(">",  "&gt;", $texto);
		//$texto = str_replace("&",  "&amp;", $texto);
		$texto = str_replace("®",  "&reg;", $texto);
		$texto = str_replace("©",  "&copy;", $texto);
		$texto = str_replace("Ý",  "&Yacute;", $texto);
		$texto = str_replace("ý",  "&yacute;", $texto);
		$texto = str_replace("Þ",  "&THORN;", $texto);
		$texto = str_replace("þ",  "&thorn;", $texto);
		$texto = str_replace("ß", "&szlig;", $texto);

		return $texto;
	}

 ?>