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


	$sql="SELECT * FROM cadastro_empresa WHERE CNPJ_Empresa='$CNPJ_Empresa'; ";
	
	$objDb = new db();
	$link = $objDb->conecta_mysql();
	$resultado = mysqli_query($link, $sql);
  	if(mysqli_num_rows($resultado)>0){
  			header ("location: cadastro_empresa.php?info=falha");
  		}	
  	else{


		$Setor = array();
		$Funcao = array();
		$Qtd_Trabalhadores = array();
	   			
		$cont=0;

				
		for ($i=0; $i <50 ; $i++) { 
				if(isset($_POST['Setor'.$i])){
					$cont++;
					array_push($Setor, $_POST['Setor'.$i]);
					array_push($Funcao, $_POST['Funcao'.$i]);
					array_push($Qtd_Trabalhadores, $_POST['Qtd_Trabalhadores'.$i]);
				}
			}


	//Cria a sql de Inserção no BD 
	 $sql="INSERT INTO `cadastro_empresa`(`CNPJ_Empresa`, `Nome_Empresarial`, `Nome_Fantasia`, `Endereco_Empresa`, `Bairro_Empresa`, `Cidade_Empresa`, `Numero_Empresa`, `CEP_Empresa`, `CNAE`, `Inscricao_Estadual`, `Descricao_Atividade`, `Grau_de_Risco`, `Telefone`) VALUES ('$CNPJ_Empresa','$Nome_Empresarial','$Nome_Fantasia','$Endereco_Empresa','$Bairro_Empresa','$Cidade_Empresa','$Numero_Empresa','$CEP_Empresa','$CNAE','$Inscricao_Estadual','$Descricao_Atividade','$Grau_de_Risco','$Telefone');";

	
	 mysqli_query($link, $sql);

	for($i=0;$i<$cont;$i++){
	
	$sql="INSERT INTO `empresa_setor`(`CNPJ_Empresa`, `Setor`, `Funcao`, `Qtd_Trabalhadores`) VALUES ('$CNPJ_Empresa','$Setor[$i]','$Funcao[$i]','$Qtd_Trabalhadores[$i]');";
		mysqli_query($link, $sql);
	}

        
	header ("location: cadastro_empresa.php?info=sucesso");
}

?>



