  <!DOCTYPE html>
  <html xmlns="http://www.w3.org/1999/xhtml">
  <head>  

    <title>Cadastro de Funcionarios</title>
    <?php
    require_once "head.php";
    ?>
    
  </head>
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
         <h2>Cadastro Funcionários</h2> 
         <hr/>  
       </div>

     </div>              
     <!-- /. ROW  -->
     
     <div class="row">

      <form >
       <div class="col-md-6" >

        <div class="form-group" >
          <label for="nome">Nome:</label>
          <input type="text"  class="form-control" name="nome" id="nome">

          <span class="col-md-6" style="padding-left: 0px;">
            <label for="cpf">CPF:</label>
            <input type="text"  class="form-control" name="cpf" id="cpf">
          </span>
          <span class="col-md-6" style="padding-left: 0px; padding-right: 0px" >
            <label for="Identidade">Identidade:</label>
            <input type="text"  class="form-control" name="Identidade" id="Identidade">
          </span>

          <div class="col-md-12" style="padding-left: 0px;">
            <div class="col-md-6" style="padding-left: 0px;">
             <label for="datanas">Data Nascimento:</label>
             <input type="date"  class="form-control" name="datanas" id="datanas">
           </div>
         </div>

         <span class="col-md-6" style="padding-left: 0px;">
          <label for="ct">Carteira de trabalho:</label>
          <input type="text"  class="form-control" name="ct" id="ct">
        </span>
        <span class="col-md-6" style="padding-left: 0px; padding-right: 0px">
          <label for="serie">Série:</label>
          <input type="text"  class="form-control" name="serie" id="serie">
        </span>

        <span class="col-md-6" style="padding-left: 0px; ">
          <label for="titulo">Titulo de Eleitor:</label>
          <input type="text"  class="form-control" name="titulo" id="titulo">
        </span>
        <span class="col-md-6" style="padding-left: 0px; padding-right: 0px">
          <label for="pis">PIS/PASEP:</label>
          <input type="text"  class="form-control" name="pis" id="pis">
        </span>

        <span class="col-md-6" style=" padding-left: 0px">
          <label for="CBO">CBO:</label>
          <input type="text"  class="form-control" name="CBO" id="CBO">
        </span>
        <span class="col-md-6" style=" padding-left: 0px; padding-right: 0px">
          <label for="nacionalidade">Nacionalidade:</label>
          <input type="text"  class="form-control" name="nacionalidade" id="nacionalidade">
        </span>

        <span class="col-md-6" style=" padding-left: 0px; ">
          <label for="ASO">Data ASO:</label>
          <input type="date"  class="form-control" name="ADO" id="ASO">
        </span>
          
        
        <span class="col-md-6" style=" padding-left: 0px; padding-right: 0px;">
          <label for="ASO">Vencimento ASO:</label>
          <input type="date"  class="form-control" name="ADO" id="ASO">
        </span>
        
      <span class="col-md-6" style=" padding-left: 0px; ">
          <label for="ASO">Periódico</label>
          <input type="date"  class="form-control" name="ADO" id="ASO">
        </span>
          
        
        <span class="col-md-6" style=" padding-left: 0px; padding-right: 0px;">
          <label for="ASO">Vencimento  periódico:</label>
          <input type="date"  class="form-control" name="ADO" id="ASO">
        </span>


      </div>  
    </div> <!-- fim lado esquerdo -->



    <div class="col-md-6"> 
     <span class="col-md-6" style="padding-left: 0px; ">
      <label for="Matricula"> Matricula:</label>
      <input type="text"  class="form-control" name="Matricula" id="Matricula">
    </span>
    <span class="col-md-6" style="padding-left: 0px; padding-right: 0px">
      <label for="cnpj">CNPJ:</label>
        <select id="grau" class="form-control">
      <option value="1">Carregar nome da empresa</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>

    </select>

    </span>
    <span class="col-md-6" style="padding-left: 0px; ">
      <label for="funcao">Função:</label>
      <input type="text"  class="form-control" name="funcao" id="funcao">
    </span>
    <span class="col-md-6" style="padding-left: 0px; padding-right: 0px">
      <label for="setor">Setor:</label>
      <input type="text"  class="form-control" name="setor" id="setor">
    </span>
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
      <label for="salario">Descrição da Atividade:</label>
      <textarea class="form-control" rows="11" name="salario" id="salario "  ></textarea>
      
    </span>
  </div>



  </div> <!-- fim lado direito -->
  </form>

  <div class="row">
    <div class="col-md-10"></div>    

    <div class="col-md-2">
          <button type="submit" class="btn btn-success btn-lg">Confirmar</button>
    </div>    
  </div>



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


  </body>
  </html>
