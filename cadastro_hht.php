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
         <h2>Horas Homens Trabalhadas</h2> 
         <hr/>  
       </div>

     </div>              
     <!-- /. ROW  -->
     
  <form action="inserir_cadastro_hht.php" method="POST">
    <div class="row">
      <div class="col-md-12" >
        <div class="form-group" >

          <span class="col-md-6" style="padding-left: 0px;">
            <label for="cnpj_empresa">Empresa:</label>
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

         
          <span class="col-md-4" style="padding-left: 0px; ">
            <label for="setor">Setor:</label>
            <select name="setor" id="setor" class="form-control"> 
              <option value="">Escolha o setor</option>
            </select>
          </span>

           <span class="col-md-2" style="padding-left: 0px; padding-right: 0px" >
            <label for="Data_hht">Data:</label>
            <input type="date"  class="form-control" name="Data_hht" id="Data_hht">
          </span>

          <span class="col-md-2" style="padding-left: 0px; " >
            <label for="Num_Funcionarios_hht">Nº Funcionários:</label>
            <input type="number"  class="form-control" name="Num_Funcionarios_hht" id="Num_Funcionarios_hht">
          </span>

          <span class="col-md-3" style="padding-left: 0px; " >
            <label for="HHT">HHT:</label>
            <input type="number"  class="form-control" name="HHT" id="HHT">
          </span>

          <span class="col-md-2" style="padding-left: 0px; " >
            <label for="Num_ACPT">Nº ACPT:</label>
            <input type="number"  class="form-control" name="Num_ACPT" id="Num_ACPT">
          </span>

          <span class="col-md-5" style="padding-left: 0px; padding-right: 0px" >
            <label for="Num_ASPT">Nº ASPT:</label>
            <input type="number"  class="form-control" name="Num_ASPT" id="Num_ASPT">
          </span>

           <span class="col-md-3" style="padding-left: 0px; " >
            <label for="Val_Ref_Acidente">Valor Ref. Acidente:</label>
            <input class="form-control"  type="number" step="0.001" name="Val_Ref_Acidente" id="Val_Ref_Acidente" value='0.00' placeholder='0.00'/>
          </span>

          <span class="col-md-2" style="padding-left: 0px; " >
            <label for="Num_Ates_Sup15">Nº Atestados >15 Dias:</label>
            <input type="number"  class="form-control" name="Num_Ates_Sup15" id="Num_Ates_Sup15">
          </span>

          <span class="col-md-2" style="padding-left: 0px; " >
            <label for="Num_Atestado">Nº Dias Ates. Médicos:</label>
            <input type="number"  class="form-control" name="Num_Atestado" id="Num_Atestado">
          </span>

          <span class="col-md-2" style="padding-left: 0px; " >
            <label for="Num_Acid_Tipico">Nº Acid. Típico:</label>
            <input type="number"  class="form-control" name="Num_Acid_Tipico" id="Num_Acid_Tipico">
          </span>

          <span class="col-md-3" style="padding-left: 0px; padding-right: 0px" >
            <label for="Num_dias_Perd_Acid_Tipico">Nº Dias Perd. Acid. Típico:</label>
            <input type="number"  class="form-control" name="Num_dias_Perd_Acid_Tipico" id="Num_dias_Perd_Acid_Tipico">
          </span>

          <span class="col-md-3" style="padding-left: 0px; " >
            <label for="Num_Acidente_Trajeto">Nº Acidente Trajeto</label>
            <input type="number"  class="form-control" name="Num_Acidente_Trajeto" id="Num_Acidente_Trajeto">
          </span>

          <span class="col-md-3" style="padding-left: 0px; " >
            <label for="Num_Dias_Perd_Acid_Trajeto">Nº Dias Perd. Acid. Trajeto:</label>
            <input type="number"  class="form-control" name="Num_Dias_Perd_Acid_Trajeto" id="Num_Dias_Perd_Acid_Trajeto">
          </span>

<!--
           <span class="col-md-3" style="padding-left: 0px; " >
            <label for="Identidade">Incidente</label>
            <input type="number"  class="form-control" name="Identidade" id="Identidade">
          </span>
-->

           <span class="col-md-3" style="padding-left: 0px; padding-right: 0px" >
            <label for="Danos_Materiais">Danos Materiais</label>
            <input type="number"  class="form-control" name="Danos_Materiais" id="Danos_Materiais">
          </span>


           <span class="col-md-3"  >
            <label for="Valor_Ref_Danos">Valor Ref. Danos</label>
            <input class="form-control"  type="number" step="0.001" name="Valor_Ref_Danos" id="Valor_Ref_Danos" value='0.00' placeholder='0.00'/>
          </span>

      </div>
      <!-- dados da empresa -->

    </div> 

   </div>  <!-- fim row-->

   
  <div class="row" style="margin-top: 15px">
    <!-- <div class="col-md-10"></div>     -->

    <div class="col-md-12">
          <button type="submit" class="btn btn-success btn-lg" style="float: right; margin-right: 10px; ">Confirmar</button>
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
          $('#setor').hide();
          
          $.getJSON('selecionar_setor.php?search=',{cnpj_empresa: $(this).val(), ajax: 'true'}, function(j){
            var options = '<option value="">Escolha o Setor</option>'; 
            for (var i = 0; i < j.length; i++) {
              options += '<option value="' + j[i].id + '">' + j[i].setor + '</option>';
            } 
            $('#setor').html(options).show();
            $('.carregando').hide();
          });
        } else {
          $('#setor').html('<option value=""> Escolha o Setor </option>');
        }
      });
    });
    </script>

  </body>
  </html>
