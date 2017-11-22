<?php
  
    require_once('data_base_conection.php');



   $setor1=  $_REQUEST['setor'];

   $cnpj_empresa=  $_REQUEST['cnpj_empresa'];
   


    $sql="SELECT * FROM empresa_setor WHERE CNPJ_Empresa='$cnpj_empresa' AND id_setor= '$setor1';";
        
        $objDb = new db();
        $link = $objDb->conecta_mysql();
        $resultado= mysqli_query($link, $sql);

         while ($row = mysqli_fetch_assoc($resultado)) {
            
            $funcao[] = array(
              'id' => $row['id_setor'],
              'funcao'=> utf8_decode($row['Funcao']),
              );


        } 

        echo (json_encode($funcao));
?>