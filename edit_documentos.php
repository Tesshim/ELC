<?php
if(isset($_GET['id'])){
	$id=$_GET['id'];
}
else{
	$id="nao_existe";
}
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>  

	<link type="text/css" rel="stylesheet" href="css/chosen.css">

	<title>Cadastro de Documentos</title>

	<?php
	require_once "head.php";
	?>

</head>

<script type="text/javascript"> 
	$(document).ready(function(e){
		e.preventDefault();
		$('#grau').chosen();
	});
</script>

<style type="text/css">
table,th,td
{
	border:1px solid #D9D9F3;;
	border-collapse:collapse;
	font-family: Arial,sans-serif;
	font-size: 12px;

}
</style>

<body>

	<div id="wrapper">
		<?php
		require_once "nav_bar.php";
		?>

		<!-- /. NAV SIDE  -->
		<div id="page-wrapper" >''
			<div id="page-inner">
				<div class="row" >
					<div class="col-md-12" >
						<h2>Documentos Administrativos</h2> 
						<hr/>  
					</div>

				</div>              
				<!-- /. ROW  -->

				<?php
				require_once('data_base_conection.php');
				$objDb = new db();
				$aux="documentos";
				$resultado = $objDb->listaAll( $id);
				for ($set = array (); $row = $resultado->fetch_assoc(); $set[] = $row);
					?>




				<form action = "inserir_cadastro_documentos.php" method="post" >
					<div class="row">
						<div class="col-md-6" > <!-- começa lado esquerdo -->
							<div class="form-group" >
								<label for="Nome_Empresarial">Empresa:</label>
								<select disabled id="grau"  name="CNPJ_Empresa"   class="form-control">
									<option value="<?php $set[0]['id_Documentos']?>"><?=$set[0]['Nome_Empresarial']?></option>;

								</select>

							</div>

						</div> <!-- fim lado esquerdo -->


						<div class="col-md-12" style="margin-top: 10px;">
							<label>Situação:</label>
							<input type="text" name="Situacao"  value="<?php echo $set[0]['Situacao']; ?>" class="form-control">
							<label>Vencimento:</label>
							<input type="date" name="Vencimento_Documentos"   value="<?php echo $set[0]['Vencimento_Documentos'];  ?>" class="form-control" >
							<label>Documento:</label>	
							<input type="text" name="Documento"   value="<?php echo $set[0]['Documento']; ?>" class="form-control">


						</div>  <!-- fim tabela -->
					</div>  <!-- fim row-->
					<br>
					<div class="row">
						<div class="col-md-2"><a class="btn btn-success btn-lg" href="documentos_administrativo.php?id=<?php echo   $set[0]['CNPJ_Empresa']; ?>"  role="button">Voltar</a></div>    

						<div class="col-md-6"></div>


						<div class="col-md-2 ">
							<button type="submit"  class="btn btn-danger btn-lg" style="float: right;">Excluir</button>
						</div>

						<div class="col-md-2" >
							<button type="submit"  class="btn btn-success btn-lg" >Confirmar</button>
						</div>    
					</div>
				</form>

			</div>
			<!-- /. PAGE INNER  -->
		</div>
		<!-- /. PAGE WRAPPER  -->
	</div>




	<div class="footer" > 

		<div class="row">
			<div class="col-lg-12" >
				&copy;  2014 yourdomain.com | Design by: <a href="http://binarytheme.com" style="color:#fff;"  target="_blank">www.binarytheme.com</a>
			</div>
		</div>
	</div>


	<!-- /. WRAPPER  -->
	<!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
	<!-- JQUERY SCRIPTS -->
	<script src="assets/js/jquery-1.10.2.js"></script>
	<!-- BOOTSTRAP SCRIPTS -->
	<script src="assets/js/bootstrap.min.js"></script>
	<!-- CUSTOM SCRIPTS -->
	<script src="assets/js/custom.js"></script>

	<script src="js/chosen.jquery.js"></script>
	<script src="js/functions.js"></script>

</body>
</html>
