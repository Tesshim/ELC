<?php
  
    require_once('data_base_conection.php');



   $cpf=  $_REQUEST['nome_func'];

    $sql="SELECT * FROM funcionarios WHERE CPF = '$cpf' ;";
        $objDb = new db();
        $link = $objDb->conecta_mysql();
        $resultado= mysqli_query($link, $sql);



        if(mysqli_num_rows($resultado)>0)
        {
            while ($row = mysqli_fetch_assoc($resultado)) {

              $setor[] = array(
                'Funcao_Func' => $row['Funcao_Func'],
                'Setor_Func'=> utf8_decode($row['Setor_Func']),
              );
            }



            $aux=$setor[0]['Funcao_Func'];
            $sql = "SELECT * FROM  empresa_setor WHERE id_setor= '$aux' ; ";
            $resultado= mysqli_query($link, $sql);

            while ($row = mysqli_fetch_assoc($resultado)) {

              $setor1[] = array(
                'Funcao_Func' => $row['Funcao'],
                'Setor_Func'=> utf8_decode($row['Setor']),
              );
            }

            echo (json_encode($setor1));

        }
        else
          {
            $funcionarios[] = array(
              'id' => 'nao_existe',);
            echo (json_encode($funcionarios));
          }

 ?>