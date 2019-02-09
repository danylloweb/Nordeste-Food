<?php 
		function ListarCategoria(){
		 
		 require_once "conect.php";

		 	$pdo=conectar();
			$buscar=$pdo->prepare("SELECT *	FROM prato_categoria");
            $buscar->execute();		    
			if ($buscar->rowCount()==0) {
				
					}else{
						$linha=$buscar->fetchAll(PDO::FETCH_OBJ);
						$lista=$linha;
						}

						return $lista;
	}
		
 function Listar(){
		 
		 require_once "conect.php";

		 	$pdo=conectar();
			$buscar=$pdo->prepare("SELECT *	FROM prato");
		    $buscar->execute();
		    
			if ($buscar->rowCount()==0) {

					}else{
						$linha=$buscar->fetchAll(PDO::FETCH_OBJ);
						$lista=$linha;
						}

						return $lista;
	}

		
?> 
