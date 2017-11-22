<?php





require_once('data_base_conection.php');



	 // $cnpj_empresa=  $_REQUEST['cnpj_empresa'];

	  $sql="SELECT * FROM funcionarios WHERE CNPJ_Empresa= '0';";

	

	
        $objDb = new db();
        $link = $objDb->conecta_mysql();
        $resultado= mysqli_query($link, $sql);


  
         while ($row = mysqli_fetch_assoc($resultado)) {
          	
          	$funcionarios[] = array(
          		'id' => $row['CPF'],
          		'nome_func'=> utf8_decode($row['Nome_Func']),
          		);
          
        }
?>
