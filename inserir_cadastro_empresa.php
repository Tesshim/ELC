<?php

require_once('data_base_conection.php');

  
	
	$CNPJ_Empresa = $_POST['CNPJ_Empresa'];
	$Nome_Empresarial = $_POST['Nome_Empresarial'];
	$Nome_Fantasia = $_POST['Nome_Fantasia'];
	$Endereco_Empresa = $_POST['Endereco_Empresa'];
	$Bairro_Empresa = $_POST['Bairro_Empresa'];
	$Cidade_Empresa = $_POST['Cidade_Empresa'];
	$Numero_Empresa = $_POST['Numero_Empresa'];
	$CEP_Empresa = $_POST['CEP_Empresa'];
	$CNAE = $_POST['CNAE'];
	$Inscricao_Estadual = $_POST['Inscricao_Estadual'];
	$Descricao_Atividade = $_POST['Descricao_Atividade'];
	$Grau_de_Risco = $_POST['Grau_de_Risco'];
	$Telefone = $_POST['Telefone'];



	$Setor = $_POST['Setor'];
	$Funcao = $_POST['Funcao'];
	$Qtd_Trabalhadores = $_POST['Qtd_Trabalhadores'];



      
	//Cria a sql de Inserção no BD 
	 $sql="INSERT INTO `cadastro_empresa`(`CNPJ_Empresa`, `Nome_Empresarial`, `Nome_Fantasia`, `Endereco_Empresa`, `Bairro_Empresa`, `Cidade_Empresa`, `Numero_Empresa`, `CEP_Empresa`, `CNAE`, `Inscricao_Estadual`, `Descricao_Atividade`, `Grau_de_Risco`, `Telefone`) VALUES ('$CNPJ_Empresa','$Nome_Empresarial','$Nome_Fantasia','$Endereco_Empresa','$Bairro_Empresa','$Cidade_Empresa','$Numero_Empresa','$CEP_Empresa','$CNAE','$Inscricao_Estadual','$Descricao_Atividade','$Grau_de_Risco','$Telefone');";





	$objDb = new db();
	$link = $objDb->conecta_mysql();
	 mysqli_query($link, $sql);

	$sql="INSERT INTO `empresa_setor`(`CNPJ_Empresa`, `Setor`, `Funcao`, `Qtd_Trabalhadores`) VALUES ('$CNPJ_Empresa','$Setor','$Funcao','$Qtd_Trabalhadores');";


mysqli_query($link, $sql);

        
	header ("location: home.php");

?>




rtg