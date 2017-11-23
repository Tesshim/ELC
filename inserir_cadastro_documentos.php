<?php


	
require_once('data_base_conection.php');
	


  


	$CNPJ_Empresa=$_POST['CNPJ_Empresa'];


		$Situacao = array();
		$Vencimento = array();
		$Documento = array();
	   			
		$cont=0;

			
		for ($i=0; $i <50 ; $i++) { 
				if(isset($_POST['Situacao'.$i])){
					$cont++;
					array_push($Situacao, $_POST['Situacao'.$i]);
					array_push($Vencimento, $_POST['Vencimento'.$i]);
					array_push($Documento, $_POST['Documento'.$i]);
				}
			}


	//Cria a sql de Inserção no BD 

	
	$objDb = new db();
	$link = $objDb->conecta_mysql();

	for($i=0;$i<$cont;$i++){
	$sql="INSERT INTO `documentos`(`CNPJ_Empresa`, `Situacao`, `Documento`, `Vencimento_Documentos`) VALUES ('$CNPJ_Empresa','$Situacao[$i]','$Documento[$i]','$Vencimento[$i]' );";
	
		mysqli_query($link, $sql);
	}

	header ("location: home.php");

?>



