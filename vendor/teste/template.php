<!DOCTYPE html>
 <html>
 	<head>
     	<meta charset="UTF-8"/>
   	  	<title>Document</title>
  		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
     

     	<style type="text/css">
		*{
			margin: 0;
			padding: 0;  /* CSS Reset */
		}

		body{
			text-align: left;  /* Centraliza todo o conteudo */
		}

		.img-teste img{
			width: 75px;    /* largura da imagem */
			height: 75px;   /*  altura da imagem  */
		}
		</style>	

	</head>

	<body>
		<!-- __________________HEADER ____ ____________________________-->
		<page backtop="24mm" backbottom="20mm" >


        
			<page_header>
			<div class="img-teste" >
				<table style="width: 100%; border: solid 1px green">
					<tr>
						<td style="width: 30%;">
							<img style="float: left;" src="Picture2.png" border="0" alt="Imagen não encontrada" title="Logo" /> 
						</td>
						<td style="width: 40%; ">
							<p style="text-align: center ; padding-top: 25px; font-size: 22px"> ELC Consultoria</p>
						</td>
						<td style="width: 30%;">
							<p style="text-align: center; font-size: 18px; margin-top: 17px">Data:</p>
							<p  style="text-align: center; font-size: 15px">
								<?php
								date_default_timezone_set('America/Sao_Paulo');
								$date = date('d-m-Y');
								echo $date;
								?> </p>
							</td>
						</tr>
					</table>
				</div>
				</page_header>
				<page_footer>
				<hr align="center" width="max" size="2" color=green>

				<!-- ______________________________FOOTER________________________ -->
				<table style="width: 100%; ">
					<tr>
						<td style="width: 30%;">
							<img style="float: left;" align="left" src="Picture1.png" alt="Imagen não encontrada" title="Logo" />
						</td>
						<td style="width: 40%; ">  
							<p style="text-align: center;" > [[page_cu]]/[[page_nb]]</p>
						</td>
						<td style="width: 30%;">
							<p style="font-size: 15px">Assinatura:</p>
						</td>
					</tr>
				</table>
				</page_footer>
			</page>

	<!-- <h1 style="text-align: center;"> <img src="Picture2.png" alt="Imagen não encontrada" title="Logo" /> </h1> -->


	<div >
<?php
	require_once("pdf_documentos.php");
?>
	</div>







 
	</body>


</html>