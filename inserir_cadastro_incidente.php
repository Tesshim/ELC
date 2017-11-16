<?php


	
require_once('data_base_conection.php');

$cnpj_empresa=$_POST['cnpj_empresa'];
$Data_Incid=$_POST['Data_Incid'];
$cpf=$_POST['cpf'];
$funcao=$_POST['funcao'];
$setor=$_POST['setor'];
$Ocorrencia_Incid=$_POST['Ocorrencia_Incid'];
$Observacao_Incid=$_POST['Observacao_Incid'];



$Medidas_Administrativas= array();
$Medidas_Coletivas= array();
$Medidas_Individuis= array();

	   			
		$cont=0;

			
		for ($i=0; $i <50 ; $i++) { 
				if(isset($_POST['Medidas_Administrativas'.$i])){
					$cont++;
					array_push($Medidas_Administrativas, $_POST['Medidas_Administrativas'.$i]);
					array_push($Medidas_Coletivas, $_POST['Medidas_Coletivas'.$i]);
					array_push($Medidas_Individuis, $_POST['Medidas_Individuis'.$i]);
				}
			}



	// //Cria a sql de Inserção no BD 
	 $sql="INSERT INTO `incidentes`(`CNPJ_Empresa`, `CPF`, `Data_Incid`, `Ocorrencia_Incid`, `Observacao_Incid`) VALUES ('$cnpj_empresa','$cpf', '$Data_Incid', '$Ocorrencia_Incid', '$Observacao_Incid' )";
		

	$objDb = new db();
	$link = $objDb->conecta_mysql();
	 mysqli_query($link, $sql);





	for($i=0;$i<$cont;$i++){
	
	$sql="INSERT INTO `relatar_medidas`( `id_Incidentes`, `CNPJ_Empresa`, `CPF`, `Medidas_Administrativas`, `Medidas_Coletivas`, `Medidas_Individuis`) VALUES ('$cnpj_empresa', '$cpf','$Medidas_Administrativas[$i]', '$Medidas_Coletivas[$i]', '$Medidas_Individuis[$i]' );";

		mysqli_query($link, $sql);
		echo $sql;
	}

        
	// header ("location: home.php");

?>



