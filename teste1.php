<?php





require_once('data_base_conection.php');



	 // $cnpj_empresa=  $_REQUEST['cnpj_empresa'];

$cnpj_empresa='123123';
$setor1= '9';


 $sql="SELECT * FROM empresa_setor WHERE CNPJ_Empresa='$cnpj_empresa' AND id_setor= '$setor1';";

	

	
        $objDb = new db();
        $link = $objDb->conecta_mysql();
        $resultado= mysqli_query($link, $sql);


  
         while ($row = mysqli_fetch_assoc($resultado)) {
          	
          	// $funcionarios[] = array(
          	// 	'id' => $row['id_setor'],
          	// 	'funcao'=> utf8_decode($row['Funcao']),
          	// 	);
          echo $row['id_setor'];  
        }


?>
