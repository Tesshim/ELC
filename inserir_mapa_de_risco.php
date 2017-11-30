<?php
	
require_once('data_base_conection.php');
	
	

		$CNPJ_Empresa=$_POST['CNPJ_Empresa'];
		$Trajetoria = array();
		$Risco = array();
		$Trab_Expostos = array();
		$Tipo = array();
		$Fonte = array();

		$cont=0;

			
		for ($i=0; $i <40 ; $i++) { 
				if(isset($_POST['Trajetoria'.$i])){
					$cont++;
					array_push($Trajetoria, $_POST['Trajetoria'.$i]);
					array_push($Risco, $_POST['Risco'.$i]);
					array_push($Trab_Expostos, $_POST['Trab_Expostos'.$i]);
					array_push($Tipo, $_POST['Tipo'.$i]);
					array_push($Fonte, $_POST['Fonte'.$i]);

				}
			}


	//Cria a sql de Inserção no BD 

	$objDb = new db();
	$link = $objDb->conecta_mysql();

	for($i=0;$i<$cont;$i++){

	$sql="INSERT INTO `mapa`(`CNPJ_Empresa`, `Risco`, `Fonte`, `Trab_Expostos`, `Trajetoria`, `Tipo`) VALUES ('$CNPJ_Empresa','$Risco[$i]','$Fonte[$i]','$Trab_Expostos[$i]','$Trajetoria[$i]','$Tipo[$i]');";

		mysqli_query($link, $sql);
	}

	header ("location: home.php");

?>



