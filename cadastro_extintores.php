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
         <h2>Cadastro Extintores</h2> 
         <hr/>  
       </div>

     </div>              
     <!-- /. ROW  -->
     
     <form >
     <div class="row">
      <div class="col-md-12" >
        <div class="form-group" >
          <label for="nome">Empresa:</label>
          <select id="grau" class="form-control">
            <option value="1">Selecionar nome empresa</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>

          </select>

          
          <span class="col-md-6" style="padding-left: 0px;">
            <label for="cpf">Produto:</label>
          <select id="grau" class="form-control">
            <option value="1">Extintor 10 L</option>
            <option value="2">Extintor 04 Kg</option>
            <option value="2">Extintor 06 Kg</option>
            <option value="2">Extintor 08 Kg</option>
            <option value="2">Extintor 12 Kg</option>
            <option value="2">Extintor 20 Kg</option>
           
          </select>
          </span>

          <span class="col-md-6" style="padding-left: 0px; padding-right: 0px" >
            <label for="Identidade">Quantidade:</label>
            <input type="number"  class="form-control" name="Identidade" id="Identidade">
          </span>

            <span class="col-md-6" style="padding-left: 0px;">
              <label for="ct">Composição:</label>
                    <select id="grau" class="form-control">
                      <option value="1">Água H2O L</option>
                      <option value="2">Pó Quimico</option>
                      <option value="2">ABC</option>
                      <option value="2">Pó Quimico B/C</option>
                   </select>
           </span>
           
           <span class="col-md-6" style="padding-left: 0px; padding-right: 0px">
              <label for="serie">Durabilidade (Anos):</label>
              <input type="number"  class="form-control" name="serie" id="serie">
            </span>

        <span class="col-md-6" style="padding-left: 0px; ">
          <label for="titulo">Vencimento</label>
          <input type="date"  class="form-control" name="titulo" id="titulo">
        </span>
        <div class="col-md-12" style="padding-left: 0px; padding-right: 0px;">
          <span class="col-md-12" style="padding-left: 0px; padding-right: 0px; ">
            <label for="salario">Localização</label>
            <textarea class="form-control" rows="5" name="salario" id="salario " placeholder="Local do extintor na empresa"  ></textarea>

          </span>
        </div>

      </div>

      <!-- dados da empresa -->

    </div> <!-- fim lado esquerdo -->
    


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

  </body>
  </html>
