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
     
 

      <form  action="inserir_cadastro_funcionarios.php" method="POST">
      <div class="row">
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
                <input type="text"  class="form-control" name="identidade" id="Identidade">
              </span>

              <div class="col-md-12" style="padding-left: 0px;">
                <div class="col-md-6" style="padding-left: 0px;">
                 <label for="datanas">Data Nascimento:</label>
                 <input type="date"  class="form-control" name="data_nascimento" id="datanas">
               </div>
             </div>

             <span class="col-md-6" style="padding-left: 0px;">
              <label for="ct">Carteira de trabalho:</label>
              <input type="text"  class="form-control" name="carteira_trabalho" id="ct">
            </span>

            <span class="col-md-6" style="padding-left: 0px; padding-right: 0px">
              <label for="serie">Série:</label>
              <input type="text"  class="form-control" name="serie" id="serie">
            </span>

            <span class="col-md-6" style="padding-left: 0px; ">
              <label for="titulo">Titulo de Eleitor:</label>
              <input type="text"  class="form-control" name="titulo_eleitor" id="titulo">
            </span>

            <span class="col-md-6" style="padding-left: 0px; padding-right: 0px">
              <label for="pis">PIS/PASEP:</label>
              <input type="text"  class="form-control" name="pis_pasep" id="pis">
            </span>

            <span class="col-md-6" style=" padding-left: 0px">
              <label for="CBO">CBO:</label>
              <input type="text"  class="form-control" name="cbo" id="CBO">
            </span>

            <span class="col-md-6" style=" padding-left: 0px; padding-right: 0px">
              <label for="nacionalidade">Nacionalidade:</label>
              <input type="text"  class="form-control" name="nacionalidade" id="nacionalidade">
            </span>

            <span class="col-md-6" style=" padding-left: 0px; ">
              <label for="data_aso">Data ASO:</label>
              <input type="date"  class="form-control" name="data_aso" id="data_aso">
            </span>

            
            <span class="col-md-6" style=" padding-left: 0px; padding-right: 0px;">
              <label for="vencimento_aso">Vencimento ASO:</label>
              <input type="date"  class="form-control" name="vencimento_aso" id="vencimento_aso">
            </span>
            
            <span class="col-md-6" style=" padding-left: 0px; ">
              <label for="periodico">Periódico</label>
              <input type="date"  class="form-control" name="periodico" id="periodico">
            </span>
            
            <span class="col-md-6" style=" padding-left: 0px; padding-right: 0px;">
              <label for="vencimento_periodico">Vencimento  periódico:</label>
              <input type="date"  class="form-control" name="vencimento_periodico" id="vencimento_periodico">
            </span>

      </div>  <!-- fim Form Group -->
    </div> <!-- fim lado esquerdo -->

    <div class="col-md-6"> 
           <span class="col-md-6" style="padding-left: 0px; ">
            <label for="Matricula"> Matricula:</label>
            <input type="text"  class="form-control" name="matricula" id="Matricula">
          </span>

          <span class="col-md-6" style="padding-left: 0px; padding-right: 0px">
            <label for="cnpj">CNPJ:</label>
            <select id="grau"  name="cnpj_empresa" class="form-control">
               <?php
                  require_once('data_base_conection.php');
                  $objDb = new db();
                  $itens = $objDb->listarCnpjEmpresa();
                  foreach($itens as $item){ ?>
                 <option   <?php  echo "value='".$item."'"; ?> >
                      <?php  echo $item; ?>
                 </option>;
                 <?php
               }
               ?>
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
             <input type="date"  class="form-control" name="data_admissao" id="datadm">
           </div>

           <div class="col-md-6" style="padding-left: 0px; padding-right: 0px;">
             <label for="datdems">Data Demissional:</label>
             <input type="date"  class="form-control" name="data_demissional" id="datdems">
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
            <label for="descri">Descrição da Atividade:</label>
            <textarea class="form-control" rows="11" name="descricao_atividade" id="descri"  ></textarea>

          </span>
        </div>

  </div> <!-- fim lado direito -->
</div> <!-- fim row-->
 <div class="row">
    <div class="col-md-10"></div>    

    <div class="col-md-2">
          <button type="submit" class="btn btn-success btn-lg">Confirmar</button>
    </div>    
  </div>

  </form><!-- fim formulario -->


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
