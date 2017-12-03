<?php

require_once('data_base_conection.php');

  
	$CNPJ_Empresa  = $_POST['CNPJ_Empresa'];
	// $Produto = $_POST['Produto'];
	// $Quant_Extintores = $_POST['Quant_Extintores'];
	// $Composicao = $_POST['Composicao'];
	// $Durabilidade = $_POST['Durabilidade'];
	// $Vencimento_Extintores = $_POST['Vencimento_Extintores'];
	// $Localizacao = $_POST['Localizacao'];
	
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

		$produto = array();
		$quantidade = array();
		$composicao = array();
		$durabilidade = array();
		$vencimento = array();
		$localizacao = array();


		$cont=0;
	
				
		for ($i=0; $i <50 ; $i++) { 
				if(isset($_POST['produto'.$i])){
					$cont++;
					array_push($produto, $_POST['produto'.$i]);
					array_push($quantidade, $_POST['quant_extintores'.$i]);
					array_push($composicao, $_POST['composicao'.$i]);
					array_push($durabilidade, $_POST['durabilidade'.$i]);
					array_push($vencimento, $_POST['vencimento_extintores'.$i]);
					array_push($localizacao, $_POST['localizacao'.$i]);
				}
			}



	$objDb = new db();
	$link = $objDb->conecta_mysql();
			
	for($i=0;$i<$cont;$i++){
		//------------------Cria a sql de Inserção no BD ------------------------

	$sql ="INSERT INTO `extintores` (`CNPJ_Empresa`, `Produto`, `Quant_Extintores`, `Composicao`, `Durabilidade`, `Vencimento_Extintores`, `Localizacao`) VALUES ('$CNPJ_Empresa', '$produto[$i]', '$quant_extintores[$i]', '$composicao[$i]', '$durabilidade[$i]', '$vencimento_extintores[$i]', '$localizacao[$i]');";

	// echo($sql);
		mysqli_query($link, $sql);
	}
	header ("location: cadastro_extintores.php?info=sucesso");
}
?>




