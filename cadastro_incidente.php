  <!DOCTYPE html>
  <html xmlns="http://www.w3.org/1999/xhtml">
  <head>  

  	<link type="text/css" rel="stylesheet" href="css/chosen.css">

    <title>Cadastro de Extintores</title>
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
         <h2>Incidentes</h2> 
         <hr/>  
       </div>

     </div>              
     <!-- /. ROW  -->
     
     <form action="inserir_cadastro_incidente.php" method="POST">
     <div class="row">
      <div class="col-md-12" >
        <div class="form-group" >
        
          
        <span class="col-md-10" style="padding-left: 0px;">
        <label for="cnpj_empresa">Empresa</label>
           <select name="cnpj_empresa" id="cnpj_empresa" class="form-control">
              <option value="">Escolha a Empresa</option>
              <?php
              require_once('data_base_conection.php');
              $sql="SELECT * FROM cadastro_empresa;";
              $objDb = new db();
              $link = $objDb->conecta_mysql();
              $resultado= mysqli_query($link, $sql);
              while ($row = mysqli_fetch_assoc($resultado)) {

                echo '<option value="'.$row['CNPJ_Empresa'].'">'.$row['Nome_Fantasia'].'</option>';
              }

              ?>
            </select>
          </span>

           <span class="col-md-2" style="padding-left: 0px; padding-right: 0px" >
            <label for="Data_Incid">Data:</label>
            <input type="date"  class="form-control" name="Data_Incid" id="Data_Incid">
          </span>


          <span class="col-md-8" style="padding-left: 0px; " >
            <label for="nome_func">Nome Funcionário:</label> 
           <select name="cpf" id="nome_func" class="form-control"> 
              <option value="">Escolha o setor</option>
            </select>
          </span>

      
          <span class="col-md-4" style="padding-left: 0px;  padding-right: 0px;" >
            <label for="funcao">Função</label>
            <input type="text"  class="form-control" name="funcao" id="funcao">
          </span>


          <span class="col-md-6" style="padding-left: 0px; " >
            <label for="setor">Setor:</label>
            <input type="text"  class="form-control" name="setor" id="setor">
          </span>

         <span class="col-md-6" style="padding-left: 0px; padding-right: 0px; " >
            <label for="Ocorrencia_Incid">Ocorrência:</label>
            <select id="Ocorrencia_Incid" name="Ocorrencia_Incid" class="form-control">
              <option value="Ato Inseguro">Ato Inseguro</option>
              <option value="Falta de EPI">Falta de EPI</option>
              <option value="Falta de Capacitação">Falta de Capacitação</option>
              <option value="Falta Treinamento">Falta Treinamento</option>

            </select>
          </span>

          <span class="col-md-12" style="padding-left: 0px; padding-right: 0px; ">
          <label for="Observacao_Incid">Observação:</label>
          <textarea class="form-control" rows="3" name="Observacao_Incid" id="Observacao_Incid"  >
           </textarea>

          </span>


        <div class="col-md-12" style="margin-top: 10px; padding-left: 0px; padding-right: 0px;">
        <label>Relatar Medidas</label>
                <table class="table table-striped" id="products-table" >
                  <tbody >
                   <tr>
                     <th>Medidas Administrativas </th>
                     <th>Medidas Coletivas</th>
                     <th colspan="2">Medidas Individuais (EPI)</th>
                    

                   </tr>
                   <tr>
                    <td><input type="text"  class="form-control" name="Medidas_Administrativas1"></td>
                    <td><input type="text"  class="form-control" name="Medidas_Coletivas1"></td>
                    <td><input type="text"  class="form-control" name="Medidas_Individuis1"></td>
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
           </div> 


           
      
      </div>

      <!-- dados da empresa -->

    </div> 
    


   </div>  <!-- fim row-->

   
  <div class="row" style="margin-top: 15px">
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
<script type="text/javascript">
    $(function(){
      $('#cnpj_empresa').change(function(){
        
        if( $(this).val() ) {
          $('#nome_func').hide();
          $('.carregando').show();
          $.getJSON('selecionar_func.php?search=',{cnpj_empresa: $(this).val(), ajax: 'true'}, function(j){
            var options = '<option value="">Escolha o Funcionário</option>'; 
            for (var i = 0; i < j.length; i++) {
              options += '<option value="' + j[i].id + '">' + j[i].nome_func + '</option>';
            } 
            $('#nome_func').html(options).show();
            $('.carregando').hide();
          });
        } else {
          $('#nome_func').html('<option value=""> Escolha o Funcionário </option>');
        }
      });
    });
    </script>

  </body>
  </html>
