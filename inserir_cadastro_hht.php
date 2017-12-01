<?php

require_once('data_base_conection.php');


$cnpj_empresa=$_POST['cnpj_empresa'];
$setor=$_POST['setor'];
$Data_hht=$_POST['Data_hht'];
$Num_Funcionarios_hht=$_POST['Num_Funcionarios_hht'];
$HHT=$_POST['HHT'];
$Num_ACPT=$_POST['Num_ACPT'];
$Num_ASPT=$_POST['Num_ASPT'];
$Val_Ref_Acidente=$_POST['Val_Ref_Acidente'];
$Num_Ates_Sup15=$_POST['Num_Ates_Sup15'];
$Num_Atestado=$_POST['Num_Atestado'];
$Num_Acid_Tipico=$_POST['Num_Acid_Tipico'];
$Num_dias_Perd_Acid_Tipico=$_POST['Num_dias_Perd_Acid_Tipico'];
$Num_Acidente_Trajeto=$_POST['Num_Acidente_Trajeto'];
$Num_Dias_Perd_Acid_Trajeto=$_POST['Num_Dias_Perd_Acid_Trajeto'];
$Danos_Materiais=$_POST['Danos_Materiais'];
$Valor_Ref_Danos=$_POST['Valor_Ref_Danos'];


if($cnpj_empresa=="selecione_empresa"){
	header ("location: cadastro_hht.php?info=falha_empresa");
}
else if ($setor == "selecione_setor"){
	header ("location: cadastro_hht.php?info=falha_setor");
}
else{



		//------------------Cria a sql de Inserção no BD ------------------------
	$sql="INSERT INTO `hht`(`CNPJ_Empresa`, `Setor_hht`, `Data_hht`, `Num_Funcionarios_hht`, `HHT`, `Num_ACPT`, `Num_ASPT`, `Val_Ref_Acidente`, `Num_Ates_Sup15`, `Num_Atestado`, `Num_dias_Perd_Acid_Tipico`, `Num_Acid_Tipico`, `Num_Acidente_Trajeto`, `Num_Dias_Perd_Acid_Trajeto`, `Danos_Materiais`, `Valor_Ref_Danos`) VALUES ('$cnpj_empresa', '$setor', '$Data_hht', '$Num_Funcionarios_hht', '$HHT', '$Num_ACPT', '$Num_ASPT', '$Val_Ref_Acidente', '$Num_Ates_Sup15', '$Num_Atestado', '$Num_dias_Perd_Acid_Tipico', '$Num_Acid_Tipico', '$Num_Acidente_Trajeto', '$Num_Dias_Perd_Acid_Trajeto', '$Danos_Materiais', '$Valor_Ref_Danos');";

	
	$objDb = new db();
	$link = $objDb->conecta_mysql();
	mysqli_query($link, $sql);
	header ("location:cadastro_hht.php?info=sucesso");
}

?>