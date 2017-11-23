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
         <h2>Cadastro de Documentos Administrativos</h2> 
         <hr/>  
       </div>

     </div>              
     <!-- /. ROW  -->
     
     <form action = "inserir_cadastro_documentos.php" method="post" >
     <div class="row">
      <div class="col-md-12" > <!-- começa lado esquerdo -->
        <div class="form-group" >
          <label for="CNPJ_Empresa">Empresa:</label>
           <select id="CNPJ_Empresa"  name="CNPJ_Empresa" class="form-control">
             <?php
              require_once('data_base_conection.php');
              $objDb= new db();
              $link=$objDb->listarNomeID();
              echo $link;
              ?>
           </select>

      </div>

    </div> <!-- fim lado esquerdo -->
   

 
   
    <div class="col-md-12" style="margin-top: 10px;">
      <table class="table table-striped" id="products-table" >
        <tbody >
         <tr>
         <th>Situação</th>
           <th>Vencimento</th>
           <th colspan="2">Documento</th>

         </tr>
         <tr>
          <td><input type="text"  class="form-control" name="Situacao1"></td>
          <td><input type="date"  class="form-control" name="Vencimento1"></td>
          <td><input type="text"  class="form-control" name="Documento1"></td>
          <td>
           <button onclick="RemoveTableRow_documentos(this)" type="button" class="form-control">Remover</button>
         </td>
       </tr>
     </tbody>
     <tfoot>
       <tr>
         <td colspan="5" style="text-align: left;">
           <button onclick="AddTableRow_documentos()" type="button" class="form-control">Adicionar</button>
         </td>
       </tr>
     </tfoot>
  </table>
  </div>  <!-- fim tabela -->




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
