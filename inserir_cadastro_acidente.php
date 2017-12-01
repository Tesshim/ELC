<?php


	
require_once('data_base_conection.php');

$cnpj_empresa=$_POST['cnpj_empresa'];
$Data_Acidente=$_POST['Data_Acidente'];
$cpf=$_POST['cpf'];
$Funcao_Func=$_POST['funcao'];
$Setor_Func=$_POST['setor'];
$Ocorrencia_Acidente=$_POST['Ocorrencia_Acidente'];
$Perda_de_Tempo=$_POST['Perda_de_Tempo'];
$Quant_Dias_Acidente=$_POST['Quant_Dias_Acidente'];
$Data_de_Retorno=$_POST['Data_de_Retorno'];
$CAT=$_POST['CAT'];
$Custos=$_POST['Custos'];
$Valor_Acidente=$_POST['Valor_Acidente'];
$Relato_Acidente=$_POST['Relato_Acidente'];

if($cnpj_empresa=="selecione_empresa"){
	header ("location: cadastro_acidente.php?info=falha_empresa");
}
else if($cpf=="selecione_funcionario"){
	header ("location: cadastro_acidente.php?info=falha_funcionario");
}
else if($Setor_Func=="selecione_setor"){
	header ("location: cadastro_acidente.php?info=falha_setor");
}
else if($Funcao_Func=="selecione_funcao"){
	header ("location: cadastro_acidente.php?info=falha_funcao");
}
else{
	// -----------------------------Cria a sql de Inserção no BD 
	 $sql="INSERT INTO `acidente`(`CPF`, `CNPJ_Empresa`, `Data_Acidente`, `Ocorrencia_Acidente`, `Perda_de_Tempo`, `Quant_Dias_Acidente`, `Data_de_Retorno`, `CAT`, `Custos`, `Valor_Acidente`, `Relato_Acidente`) VALUES ('$cpf', '$cnpj_empresa', '$Data_Acidente', '$Ocorrencia_Acidente', '$Perda_de_Tempo', '$Quant_Dias_Acidente', '$Data_de_Retorno', '$CAT', '$Custos', '$Valor_Acidente', '$Relato_Acidente');";
		

	$objDb = new db();
	$link = $objDb->conecta_mysql();
	 mysqli_query($link, $sql);

	        	
	header ("location:  cadastro_acidente.php?info=sucesso");
}

?>



