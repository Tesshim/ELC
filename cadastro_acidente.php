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
     
     <form >
     <div class="row">
      <div class="col-md-12" >
        <div class="form-group" >
        
          
        <span class="col-md-10" style="padding-left: 0px;">
        <label>Empresa</label>
            
            <select id="grau" class="form-control">
              <option value="1">Selecionar nome empresa</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>

            </select>
          </span>

           <span class="col-md-2" style="padding-left: 0px; padding-right: 0px" >
            <label for="Identidade">Data:</label>
            <input type="date"  class="form-control" name="Identidade" id="Identidade">
          </span>


          <span class="col-md-8" style="padding-left: 0px; " >
            <label for="Identidade">Nome Funcionário:</label>
            <select id="grau" class="form-control">
              <option value="1">Selecionar nome funcionario</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>

            </select>
          </span>

      
          <span class="col-md-4" style="padding-left: 0px;  padding-right: 0px;" >
            <label for="Identidade">Função:</label>
            <input type="text"  class="form-control" name="Identidade" id="Identidade">
          </span>


          <span class="col-md-6" style="padding-left: 0px; " >
            <label for="Identidade">Setor:</label>
            <input type="text"  class="form-control" name="Identidade" id="Identidade">
          </span>

         <span class="col-md-6" style="padding-left: 0px; padding-right: 0px;" >
            <label for="Identidade">Ocorrência:</label>
            <select id="grau" class="form-control">
              <option value="1">Acidente de Trabalho</option>
              <option value="2">Acidentes de Percurso</option>
              <option value="3">Acidente Fora da Empresa</option>

            </select>
          </span>
    
        <span class="col-md-4" style="padding-left: 0px;  " >
            <label for="Identidade">Perda de Tempo:</label>
            <select id="grau" class="form-control">
              <option value="1">Sim</option>
              <option value="2">Não</option>
            </select>
          </span>
            
            
            
            
          <span class="col-md-4" style="padding-left: 0px;  " >
            <label for="Identidade">Quant. Dias:</label>
            <input type="number"  class="form-control" name="Identidade" id="Identidade">
          </span>

                    
          <span class="col-md-4" style="padding-left: 0px;  padding-right: 0px;" >
            <label for="Identidade">Data de Retorno:</label>
            <input type="date"  class="form-control" name="Identidade" id="Identidade">
          </span>    
            
          <span class="col-md-4" style="padding-left: 0px; " >
            <label for="Identidade">CAT?:</label>
            <select id="grau" class="form-control">
              <option value="1">Sim</option>
              <option value="2">Não</option>
            </select>
          </span>
            
            
            
            
                  
          <span class="col-md-4" style="padding-left: 0px;  " >
            <label for="Identidade">Custos?:</label>
            <select id="grau" class="form-control">
              <option value="1">Sim</option>
              <option value="2">Não</option>
            </select>
          </span>
            
            
             <span class="col-md-4" style="padding-left: 0px; padding-right: 0px;" >
            <label for="Identidade">Valor:</label>
           <input class="form-control"  type="number" step="0.001" name="preco" id="preco" value='0.00' placeholder='0.00'/>
          </span>            
         
            
          <span class="col-md-12" style="padding-left: 0px; padding-right: 0px; ">
          <label>Relato:</label>
          <textarea class="form-control" rows="3" name="salario" id="salario "  >
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

  </body>
  </html>
