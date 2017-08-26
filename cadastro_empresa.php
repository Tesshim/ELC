  <!DOCTYPE html>
  <html xmlns="http://www.w3.org/1999/xhtml">
  <head>  

  	<link type="text/css" rel="stylesheet" href="css/chosen.css">

    <title>Cadastro de Empresa</title>
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

  <body>
   
   <div id="wrapper">
    <?php
    require_once "menu.php";
    ?>

    <!-- /. NAV SIDE  -->
    <div id="page-wrapper" >''
     <div id="page-inner">
      <div class="row" >
        <div class="col-md-12" >
         <h2>Cadastro Empresa</h2> 
         <hr/>  
       </div>

     </div>              
     <!-- /. ROW  -->
     
     <div class="row">

      <form >
       <div class="col-md-6" >

        <div class="form-group" >
          <label for="nome">Nome Empresarial:</label>
          <input type="text"  class="form-control" name="nome" id="nome">

          <span class="col-md-6" style="padding-left: 0px;">
            <label for="cpf">Nome Fantasia:</label>
            <input type="text"  class="form-control" name="cpf" id="cpf">
          </span>
          <span class="col-md-6" style="padding-left: 0px; padding-right: 0px" >
            <label for="Identidade">Telefone:</label>
            <input type="text"  class="form-control" name="Identidade" id="Identidade">
          </span>

         <span class="col-md-6" style="padding-left: 0px;">
          <label for="ct">CNPJ:</label>
          <input type="text"  class="form-control" name="ct" id="ct">
        </span>
        <span class="col-md-6" style="padding-left: 0px; padding-right: 0px">
          <label for="serie">CNAE:</label>
          <input type="text"  class="form-control" name="serie" id="serie">
        </span>

        <span class="col-md-6" style="padding-left: 0px; ">
          <label for="titulo">Inscrição Estadual:</label>
          <input type="text"  class="form-control" name="titulo" id="titulo">
        </span>
      </div>

      <!-- dados da empresa -->

    </div>
    <div class="col-md-6"> 
     <span class="col-md-6" style="padding-left: 0px; ">
      <label for="Matricula"> Endereço:</label>
      <input type="text"  class="form-control" name="Matricula" id="Matricula">
    </span>
    <span class="col-md-6" style="padding-left: 0px; padding-right: 0px">
      <label for="cnpj">Bairro:</label>
      <input type="text"  class="form-control" name="cnpj" id="cnpj">
    </span>
    <span class="col-md-6" style="padding-left: 0px; ">
      <label for="funcao">Cidade:</label>
      <input type="text"  class="form-control" name="funcao" id="funcao">
    </span>
    <span class="col-md-6" style="padding-left: 0px; padding-right: 0px">
      <label for="setor">Numero:</label>
      <input type="text"  class="form-control" name="setor" id="setor">
    </span>
    <div class="col-md-12" style="padding-left: 0px;">
	    <span class="col-md-6" style="padding-left: 0px; ">
	      <label for="salario">CEP:</label>
	      <input type="text"  class="form-control" name="salario" id="salario">
	    </span>
  	</div>

  	<select id="grau" class="chosen-select">
  		<option value="1">1</option>
  		<option value="2">2</option>
  		<option value="3">3</option>
  		<option value="4">4</option>

  	</select>

    <div class="col-md-12" style="padding-left: 0px; padding-right: 0px;">
      <div class="col-md-6" style="padding-left: 0px;">
       <label for="datadm">Data Adimissão:</label>
       <input type="date"  class="form-control" name="datadm" id="datadm">
     </div>
     <div class="col-md-6" style="padding-left: 0px; padding-right: 0px;">
       <label for="datdems">Data Demissional:</label>
       <input type="date"  class="form-control" name="datdems" id="datdems">
     </div>
   </div>

   <div class="col-md-12" style="padding-left: 0px;">
    <span class="col-md-6" style="padding-left: 0px; ">
      <label for="salario">Salário Incial:</label>
      <input type="text"  class="form-control" name="salario" id="salario">
    </span>
  </div>
  <div class="col-md-12" style="padding-left: 0px; padding-right: 0px;">
    <span class="col-md-12" style="padding-left: 0px; padding-right: 0px; ">
      <label for="salario">Descrição de Atividades Economicas:</label>
      <textarea class="form-control" rows="5" name="salario" id="salario "  ></textarea>
      
    </span>
  </div>



  </div>


  </form>




  </div>










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


  </body>
  </html>
