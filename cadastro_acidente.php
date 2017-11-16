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
         <h2>Acidentes</h2> 
         <hr/>  
       </div>

     </div>              
     <!-- /. ROW  -->
     
     <form action="inserir_cadastro_acidente.php" method="POST">
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
            <label for="Data_Acidente">Data:</label>
            <input type="date"  class="form-control" name="Data_Acidente" id="Data_Acidente">
          </span>


          <span class="col-md-8" style="padding-left: 0px; " >
           <label for="nome_func">Nome Funcionário:</label> 
           <select name="cpf" id="nome_func" class="form-control"> 
            <option >Escolha o Funcionário</option>
          </select>
        </span>

          <span class="col-md-4" style="padding-left: 0px;  padding-right: 0px;" >
            <label for="Funcao_Func">Função:</label>
            <input type="text"  class="form-control" name="Funcao_Func" id="Funcao_Func">
          </span>

          <span class="col-md-6" style="padding-left: 0px; " >
            <label for="Setor_Func">Setor:</label>
            <input type="text"  class="form-control" name="Setor_Func" id="Setor_Func">
          </span>

         <span class="col-md-6" style="padding-left: 0px; padding-right: 0px;" >
            <label for="Identidade">Ocorrência:</label>
            <select id="grau"  name="Ocorrencia_Acidente" class="form-control">
              <option value="Acidente de Trabalho">Acidente de Trabalho</option>
              <option value="Acidentes de Percurso">Acidentes de Percurso</option>
              <option value="Acidente Fora da Empresa">Acidente Fora da Empresa</option>

            </select>
          </span>
    
        <span class="col-md-4" style="padding-left: 0px;  " >
            <label for="Perda_de_Tempo">Perda de Tempo:</label>
            <select id="Perda_de_Tempo" name="Perda_de_Tempo" class="form-control">
              <option value="Sim">Sim</option>
              <option value="Nao">Não</option>
            </select>
          </span>
            
          <span class="col-md-4" style="padding-left: 0px;  " >
            <label for="Quant_Dias_Acidente">Quant. Dias:</label>
            <input type="number"  class="form-control" name="Quant_Dias_Acidente" id="Quant_Dias_Acidente">
          </span>

                    
          <span class="col-md-4" style="padding-left: 0px;  padding-right: 0px;" >
            <label for="Data_de_Retorno">Data de Retorno:</label>
            <input type="date"  class="form-control" name="Data_de_Retorno" id="Data_de_Retorno">
          </span>    
            
          <span class="col-md-4" style="padding-left: 0px; " >
            <label for="CAT">CAT?:</label>
            <select id="CAT" name="CAT" class="form-control">
              <option value="Sim">Sim</option>
              <option value="Nao">Não</option>
            </select>
          </span>
            
                  
          <span class="col-md-4" style="padding-left: 0px;  " >
            <label for="Custos">Custos?:</label>
            <select id="Custos" name="Custos" class="form-control">
              <option value="Sim">Sim</option>
              <option value="Nao">Não</option>
            </select>
          </span>
            
            
             <span class="col-md-4" style="padding-left: 0px; padding-right: 0px;" >
            <label for="Valor_Acidente">Valor:</label>
           <input class="form-control"  type="number" step="0.001" name="Valor_Acidente" id="Valor_Acidente" value='0.00' placeholder='0.00'/>
          </span>            
         
            
          <span class="col-md-12" style="padding-left: 0px; padding-right: 0px; ">
          <label for="Relato_Acidente">Relato:</label>
          <textarea class="form-control" rows="3" name="Relato_Acidente" id="Relato_Acidente "  >
           </textarea>

          </span>
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
          
          $.getJSON('selecionar_func.php?search=',{cnpj_empresa: $(this).val(), ajax: 'true'}, function(j){
            var options = '<option value="">Escolha o Funcionário</option>'; 
            
                      for (var i = 0; i < j.length; i++) {
              options += '<option value="' + j[i].id + '">' + j[i].nome_func + '</option>';
              aux=true;
            } 
                             
                 $('#nome_func').html(options).show();

          });
        } 
        else {

          $('#nome_func').html('<option > Escolha o Funcionário </option>');

        }


      });
    });
    </script>

  </body>
  </html>
