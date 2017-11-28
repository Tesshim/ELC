<?php
	
	  require_once('data_base_conection.php');



	 $cnpj_empresa=  $_REQUEST['cnpj_empresa'];

	  $sql="SELECT * FROM empresa_setor WHERE CNPJ_Empresa= '$cnpj_empresa';";
        $objDb = new db();
        $link = $objDb->conecta_mysql();
        $resultado= mysqli_query($link, $sql);

         while ($row = mysqli_fetch_assoc($resultado)) {
          	
          	$setor[] = array(
          		'id' => $row['id_setor'],
          		'setor'=> utf8_decode($row['Setor']),
          		);
          
        } 

        echo (json_encode($setor));
?>