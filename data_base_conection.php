<?php

class db{
	
		//host
	private $host='localhost';
		//usuario
	private $usuario = 'root';
		//senha
	private $senha = '';
		//Banco de dados
	private $database = 'elc';


	function conecta_mysql(){
			
			$con = mysqli_connect($this->host,$this->usuario,$this->senha,$this->database);//conexão

			mysqli_set_charset($con,'utf8');//Ajusta a comunicaçao da apliacaçao com o BD.
			//Verificar se houve erro.
			if(mysqli_connect_errno()) echo 'Houve erro ao tentar conectar com o Banco de Dados'.mysqli_connect_error();	
			//se não houver erro retorna a conexão.
			return $con;
		}


	function listarCnpjEmpresa(){
			$con=db::conecta_mysql();
			$sql = 'SELECT CNPJ_Empresa FROM cadastro_empresa;';
			$result =mysqli_query($con, $sql);

			$Empresas = array();
			$cont=0;

			while ($row = $result->fetch_assoc()){

				$Empresas[$cont]= $row['CNPJ_Empresa'];
				$cont++;
			}
			return $Empresas;
		}

	function listarNomeEmpresa(){
			$con=db::conecta_mysql();
			$sql = 'SELECT Nome_Empresarial FROM cadastro_empresa;';
			$result =mysqli_query($con, $sql);

			$Empresas = array();
			$cont=0;

			while ($row = $result->fetch_assoc()){

				$Empresas[$cont]= $row['Nome_Empresarial'];
				$cont++;
			}
			return $Empresas;
		}

	function listarNomeID(){
			$con=db::conecta_mysql();
			 $sql="SELECT * FROM cadastro_empresa;";
              $objDb = new db();
              $link = $objDb->conecta_mysql();
              $resultado= mysqli_query($link, $sql);

              $result="";
              while ($row = mysqli_fetch_assoc($resultado)) {
                $result .= '<option value="'.$row['CNPJ_Empresa'].'">'.$row['Nome_Empresarial'].'</option>';
              }
            
        return $result;
		}




	}


	?>