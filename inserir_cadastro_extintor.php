<?php

require_once('data_base_conection.php');

  
		
	
	$CNPJ_Empresa  = $_POST['CNPJ_Empresa'];
	$Produto = $_POST['Produto'];
	$Quant_Extintores = $_POST['Quant_Extintores'];
	$Composicao = $_POST['Composicao'];
	$Durabilidade = $_POST['Durabilidade'];
	$Vencimento_Extintores = $_POST['Vencimento_Extintores'];
	$Localizacao = $_POST['Localizacao'];
	
      // echo  $CNPJ_Empresa;
      // echo  $Produto;
      // echo  $Quant_Extintores;
      // echo  $Composicao;
      // echo $Durabilidade;
      // echo $Vencimento_Extintores;
      // echo $Localizacao;

	if($CNPJ_Empresa=="selecione"){
			header ("location: cadastro_extintores.php?info=falha");
	}else{


		//------------------Cria a sql de Inserção no BD ------------------------
	$sql ="INSERT INTO `extintores` (`CNPJ_Empresa`, `Produto`, `Quant_Extintores`, `Composicao`, `Durabilidade`, `Vencimento_Extintores`, `Localizacao`) VALUES ('$CNPJ_Empresa', '$Produto', '$Quant_Extintores', '$Composicao', '$Durabilidade', '$Vencimento_Extintores', '$Localizacao');";

	// echo $sql;
	// die();

	$objDb = new db();
	$link = $objDb->conecta_mysql();
	 mysqli_query($link, $sql);
	header ("location: cadastro_extintores.php?info=sucesso");
}
?>




