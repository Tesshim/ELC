<?php


	
require_once('data_base_conection.php');

$cnpj_empresa=$_POST['cnpj_empresa'];
$Data_Acidente=$_POST['Data_Acidente'];
$cpf=$_POST['cpf'];
$Funcao_Func=$_POST['Funcao_Func'];
$Setor_Func=$_POST['Setor_Func'];
$Ocorrencia_Acidente=$_POST['Ocorrencia_Acidente'];
$Perda_de_Tempo=$_POST['Perda_de_Tempo'];
$Quant_Dias_Acidente=$_POST['Quant_Dias_Acidente'];
$Data_de_Retorno=$_POST['Data_de_Retorno'];
$CAT=$_POST['CAT'];
$Custos=$_POST['Custos'];
$Valor_Acidente=$_POST['Valor_Acidente'];
$Relato_Acidente=$_POST['Relato_Acidente'];


	// -----------------------------Cria a sql de Inserção no BD 
	 $sql="INSERT INTO `acidente`(`CPF`, `CNPJ_Empresa`, `Data_Acidente`, `Ocorrencia_Acidente`, `Perda_de_Tempo`, `Quant_Dias_Acidente`, `Data_de_Retorno`, `CAT`, `Custos`, `Valor_Acidente`, `Relato_Acidente`) VALUES ('$cpf', '$cnpj_empresa', '$Data_Acidente', '$Ocorrencia_Acidente', '$Perda_de_Tempo', '$Quant_Dias_Acidente', '$Data_de_Retorno', '$CAT', '$Custos', '$Valor_Acidente', '$Relato_Acidente');";
		

	$objDb = new db();
	$link = $objDb->conecta_mysql();
	 mysqli_query($link, $sql);

	        	
	header ("location: home.php");

?>



