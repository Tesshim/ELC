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
         <h2>Cadastro Empresa</h2> 
         <hr/>  
       </div>

     </div>              
     <!-- /. ROW  -->
     
     <form >
     <div class="row">
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
        <div class="col-md-12" style="padding-left: 0px; padding-right: 0px;">
          <span class="col-md-12" style="padding-left: 0px; padding-right: 0px; ">
            <label for="salario">Descrição de Atividades Economicas:</label>
            <textarea class="form-control" rows="5" name="salario" id="salario "  ></textarea>

          </span>
        </div>

      </div>

      <!-- dados da empresa -->

    </div> <!-- fim lado esquerdo -->
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

  <div>
  <label>Grau de Risco</label>
  	<select id="grau" class="form-control">
  		<option value="1">1</option>
  		<option value="2">2</option>
  		<option value="3">3</option>
  		<option value="4">4</option>

  	</select>
</div>
 
  <div class="col-md-12" style="margin-top: 10px; padding-left: 0px; padding-right: 0px;">
    <table class="table table-striped" id="products-table" >
      <tbody >
       <tr>
       <th>Setor</th>
         <th>Função</th>
         <th colspan="2">Quantidade de Trabalhadores</th>

       </tr>
       <tr>
        <td><input type="text"  class="form-control" name=""></td>
        <td><input type="text"  class="form-control" name=""></td>
        <td><input type="text"  class="form-control" name=""></td>
        <td>
         <button onclick="RemoveTableRow(this)" type="button" class="form-control">Remover</button>
       </td>
     </tr>
   </tbody>
   <tfoot>
     <tr>
       <td colspan="5" style="text-align: left;">
         <button onclick="AddTableRow()" type="button" class="form-control">Adicionar</button>
       </td>
     </tr>
   </tfoot>
</table>
</div>  <!-- fim tabela -->



  </div>  <!-- fim lado direito -->

   </div>  <!-- fim row-->

   
  <div class="row">
    <div class="col-md-10"></div>    

    <div class="col-md-2">
          <button type="submit" class="btn btn-success btn-lg">Confirmar</button>
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
