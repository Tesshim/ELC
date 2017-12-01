 <?php
if(isset($_GET['info'])){
  $info=$_GET['info'];
}
else{
  $info="nao_existe";
}
?>

  <!DOCTYPE html>
  <html xmlns="http://www.w3.org/1999/xhtml">
  <head>  

    <title>Cadastro de Funcionarios</title>
     <?php
 require_once "head.php";
 ?>
<script type="text/javascript"> 
  $(function(){
    $('#alert').click(function(){
      $("#alert").fadeOut(200);
        location.href="cadastro_funcionario.php";
    })
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
#alert{  
  margin-left: 300px;
  margin-top: -40px;
  width: 768px;
  position: absolute;
  z-index:9999;
}
</style>
</head>
<body>

 <div id="wrapper">
  <?php
  require_once "nav_bar.php";

  if ($info=="sucesso") {// inseridas com sucesso
    ?>
    <div class="alert alert-success alert-dismissible" id="alert">
      <a href="#" class="close">&times;</a>
      <strong>Informações inseridas com sucesso!!</strong> 
    </div>
    <?php  
  }  

  else if($info=="falha_empresa"){
   ?>
   <div class="alert alert-danger  alert-dismissible" id="alert">
    <a href="#" class="close">&times;</a>
    <strong>Empresa não selecionada. Por favor selecione uma empresa.</strong> 
  </div>
  <?php
}
else if($info=="falha_setor"){
   ?>
   <div class="alert alert-danger  alert-dismissible" id="alert">
    <a href="#" class="close">&times;</a>
    <strong>Setor não selecionado. Por favor selecione um setor.</strong> 
  </div>
  <?php
}
else if($info=="falha_funcao"){
   ?>
   <div class="alert alert-danger  alert-dismissible" id="alert">
    <a href="#" class="close">&times;</a>
    <strong>Função não selecionado. Por favor selecione uma função.</strong> 
  </div>
  <?php
}

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
              <label for="periodico">Periódico:</label>
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
            <label for="cnpj">CNPJ Empresa:</label>
            <select id="cnpj_empresa"  name="cnpj_empresa" class="form-control">
              <option value="selecione_empresa">Escolha o  nome da empresa</option>
             <?php

              require_once('data_base_conection.php');
              $objDb= new db();
              $link=$objDb->listarNomeID();
              echo $link;
              ?>
             </select>
          </span>

          
          <span class="col-md-6" style="padding-left: 0px;">
            <label for="setor">Setor:</label>
            <select name="setor" id="setor" class="form-control"> 
              <option value="selecione_setor">Escolha o setor</option>
            </select>
          </span>

          <span class="col-md-6" style="padding-left: 0px; padding-right: 0px">
            <label for="funcao">Função:</label>
            <!-- <input type="text"  class="form-control" name="funcao" id="funcao"> -->
            <select name="funcao" id="funcao" class="form-control"> 
              <option value="selecione_funcao">Escolha o funcao</option>
            </select>
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
            var options = '<option value="selecione_setor">Escolha o Setor</option>'; 
            for (var i = 0; i < j.length; i++) {
              options += '<option value="' + j[i].id + '">' + j[i].setor + '</option>';
            } 
            $('#setor').html(options).show();
            $('.carregando').hide();
          });
        } else {
          $('#setor').html('<option value="selecione_setor"> Escolha o Setor </option>');
        }
      });
    });


 $(function(){
      $('#setor').change(function(){
        
        if( $(this).val() ) { 
          $('#funcao').hide();

          console.log($("#setor").val());
            console.log($("#cnpj_empresa").val());


          $.getJSON('selecionar_funcao.php?',{setor: $("#setor").val(), cnpj_empresa: $("#cnpj_empresa").val(), ajax: 'true'}, function(j){
            var options = '<option value="selecione_funcao">Escolha o Setor</option>'; 
            for (var i = 0; i < j.length; i++) {

               options += '<option value="' + j[i].id + '">' + j[i].funcao + '</option>';
            } 
            $('#funcao').html(options).show();
            $('.carregando').hide();
          });
        } else {
          $('#funcao').html('<option value="selecione_funcao"> Escolha o Setor </option>');
        }
      });
    });


    </script>

  </body>
  </html>
