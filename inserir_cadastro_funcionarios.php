<?php

require_once('data_base_conection.php');

  
	
	$nome=$_POST['nome'];
	$cpf=$_POST['cpf'];
	$identidade=$_POST['identidade'];
	$data_nascimento=$_POST['data_nascimento'];
	$carteira_trabalho=$_POST['carteira_trabalho'];
	$serie=$_POST['serie'];
	$titulo_eleitor=$_POST['titulo_eleitor'];
	$pis_pasep=$_POST['pis_pasep'];
	$cbo=$_POST['cbo'];
	$nacionalidade=$_POST['nacionalidade'];
	$data_aso=$_POST['data_aso'];
	$vencimento_aso=$_POST['vencimento_aso'];
	$periodico=$_POST['periodico'];
	$vencimento_periodico=$_POST['vencimento_periodico'];
	$matricula=$_POST['matricula'];
	$cnpj_empresa=$_POST['cnpj_empresa'];
	$funcao=$_POST['funcao'];
	$setor=$_POST['setor'];
	$data_admissao=$_POST['data_admissao'];
	$data_demissional=$_POST['data_demissional'];
	$salario=$_POST['salario'];
	$descricao_atividade=$_POST['descricao_atividade'];




	if($cnpj_empresa=="selecione_empresa"){
			header ("location: cadastro_funcionario.php?info=falha_empresa");
	}
	else if($setor=="selecione_setor"){
		header ("location: cadastro_funcionario.php?info=falha_setor");
	}
	else if($funcao=="selecione_funcao"){
		header ("location: cadastro_funcionario.php?info=falha_funcao");
	}
	else{
	//------------------Cria a sql de Inserção no BD ------------------------
	$sql ="INSERT INTO `funcionarios`(`CPF`, `CNPJ_Empresa`, `Nome_Func`, `Matricula_Func`, `Identidade_Func`, `Funcao_Func`, `Setor_Func`, `Data_Nasc`, `Data_Adimi`, `Data_Demissional`, `Carteira_de_trabalho`, `Serie`, `Salario_Inicial`, `Titulo_de_Eleitor`, `PIS_PASEP`, `CBO`, `Nacionalidade`, `Data_ASO`, `Vencimento_ASO`, `Periodico`, `Vencimento_Periodico`) VALUES ('$cpf', '$cnpj_empresa','$nome','$matricula', '$identidade', '$funcao', '$setor', '$data_nascimento', '$data_admissao', '$data_demissional', '$carteira_trabalho' ,'$serie' , '$salario', '$titulo_eleitor' , '$pis_pasep', '$cbo', '$nacionalidade', '$data_aso', '$vencimento_aso', '$periodico', '$vencimento_periodico');";

	

	$objDb = new db();
	$link = $objDb->conecta_mysql();
	 mysqli_query($link, $sql);
	header ("location: cadastro_funcionario.php?info=sucesso");
	}

?>




