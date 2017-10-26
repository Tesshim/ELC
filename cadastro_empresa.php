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
     
     <form action = "inserir_cadastro_empresa.php" method="post" >
     <div class="row">
      <div class="col-md-6" > <!-- começa lado esquerdo -->
        <div class="form-group" >
          <label for="Nome_Empresarial">Nome Empresarial:</label>
          <input type="text"  class="form-control" name="Nome_Empresarial" id="Nome_Empresarial">

          
          <span class="col-md-6" style="padding-left: 0px;">
            <label for="Nome_Fantasia">Nome Fantasia:</label>
            <input type="text"  class="form-control" name="Nome_Fantasia" id=" Nome_Fantasia">
          </span>

          <span class="col-md-6" style="padding-left: 0px; padding-right: 0px" >
            <label for="Telefone">Telefone:</label>
            <input type="text"  class="form-control" name="Telefone" id="Telefone">
          </span>

            <span class="col-md-6" style="padding-left: 0px;">
              <label for="CNPJ_Empresa">CNPJ:</label>
              <input type="text"  class="form-control" name="CNPJ_Empresa" id="CNPJ_Empresa">
            </span>
            
            <span class="col-md-6" style="padding-left: 0px; padding-right: 0px">
              <label for="CNAE">CNAE:</label>
              <input type="text"  class="form-control" name="CNAE" id="CNAE">
            </span>

          <span class="col-md-6" style="padding-left: 0px; ">
             <label for="Inscricao_Estadual">Inscrição Estadual:</label>
             <input type="text"  class="form-control" name="Inscricao_Estadual" id="Inscricao_Estadual">
          </span>


        <div class="col-md-12" style="padding-left: 0px; padding-right: 0px;">
          <span class="col-md-12" style="padding-left: 0px; padding-right: 0px; ">
            <label for="Descricao_Atividade">Descrição de Atividades Economicas:</label>
            <textarea class="form-control" rows="5" name="Descricao_Atividade" id="Descricao_Atividade"  ></textarea>
          </span>
        </div>

      </div>

    </div> <!-- fim lado esquerdo -->
   

    <div class="col-md-6"> <!-- começa lado direito -->
       <span class="col-md-6" style="padding-left: 0px; ">
        <label for="Endereco_Empresa"> Endereço:</label>
        <input type="text"  class="form-control" name="Endereco_Empresa" id="Endereco_Empresa">
      </span>
      <span class="col-md-6" style="padding-left: 0px; padding-right: 0px">
        <label for="Bairro_Empresa">Bairro:</label>
        <input type="text"  class="form-control" name="Bairro_Empresa" id="Bairro_Empresa">
      </span>
      <span class="col-md-6" style="padding-left: 0px; ">
        <label for="Cidade_Empresa">Cidade:</label>
        <input type="text"  class="form-control" name="Cidade_Empresa" id="Cidade_Empresa">
      </span>
      <span class="col-md-6" style="padding-left: 0px; padding-right: 0px">
        <label for="Numero_Empresa">Numero:</label>
        <input type="text"  class="form-control" name="Numero_Empresa" id="Numero_Empresa">
      </span>
      <div class="col-md-12" style="padding-left: 0px;">
  	    <span class="col-md-6" style="padding-left: 0px; ">
  	      <label for="CEP_Empresa">CEP:</label>
  	      <input type="text"  class="form-control" name="CEP_Empresa" id="CEP_Empresa">
  	    </span>
    	</div>

    <div>
    <label for="Grau_de_Risco">Grau de Risco</label>
    	<select id="Grau_de_Risco"  name="Grau_de_Risco" class="form-control">
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
          <td><input type="text"  class="form-control" name="Setor"></td>
          <td><input type="text"  class="form-control" name="Funcao"></td>
          <td><input type="number"  class="form-control" name="Qtd_Trabalhadores"></td>
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
