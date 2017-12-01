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

  	<link type="text/css" rel="stylesheet" href="css/chosen.css">

    <title>Cadastro de Extintores</title>
   <?php
 require_once "head.php";
 ?>
<script type="text/javascript"> 
  $(function(){
    $('#alert').click(function(){
      $("#alert").fadeOut(200);
        location.href="cadastro_extintores.php";
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

  else if($info=="falha"){
   ?>
   <div class="alert alert-danger  alert-dismissible" id="alert">
    <a href="#" class="close">&times;</a>
    <strong>Empresa não selecionada. Por favor selecione uma empresa.</strong> 
  </div>
  <?php
}

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
     
     <form  action = "inserir_cadastro_extintor.php" method="post" >
     <div class="row">
      <div class="col-md-12" >
        <div class="form-group" >
          <label for="CNPJ_Empresa">Empresa:</label>
           <select id="CNPJ_Empresa"  name="CNPJ_Empresa" class="form-control">
           <option value="selecione">Selecione a empresa</option>
             <?php
              require_once('data_base_conection.php');
              $objDb= new db();
              $link=$objDb->listarNomeID();
              echo $link;
              ?>
           </select>
          
          <span class="col-md-6" style="padding-left: 0px;">
            <label for="Produto">Produto:</label>
                <select id="Produto" name="Produto" class="form-control">
                  <option value="Extintor 10 L">Extintor 10 L</option>
                  <option value="Extintor 04 Kg">Extintor 04 Kg</option>
                  <option value="Extintor 06 Kg">Extintor 06 Kg</option>
                  <option value="Extintor 08 Kg">Extintor 08 Kg</option>
                  <option value="Extintor 12 Kg">Extintor 12 Kg</option>
                  <option value="Extintor 20 Kg">Extintor 20 Kg</option>
                </select>
          </span>

          <span class="col-md-6" style="padding-left: 0px; padding-right: 0px" >
            <label for="Quant_Extintores">Quantidade:</label>
            <input type="number"  class="form-control" name="Quant_Extintores" id="Identidade">
          </span>

          <span class="col-md-6" style="padding-left: 0px;">
              <label for="Composicao">Composição:</label>
                    <select id="Composicao" name="Composicao" class="form-control">
                      <option value="Água H2O L">Água H2O L</option>
                      <option value="Pó Quimico">Pó Quimico</option>
                      <option value="ABC">ABC</option>
                      <option value="Pó Quimico B/C">Pó Quimico B/C</option>
                   </select>
             </span>
           
           <span class="col-md-6" style="padding-left: 0px; padding-right: 0px">
              <label for="Durabilidade">Durabilidade (Anos):</label>
              <input type="number"  class="form-control" name="Durabilidade" id="Durabilidade">
            </span>

        <span class="col-md-6" style="padding-left: 0px; ">
          <label for="Vencimento_Extintores">Vencimento</label>
          <input type="date"  class="form-control" name="Vencimento_Extintores" id="Vencimento_Extintores">
        </span>
        

        <div class="col-md-12" style="padding-left: 0px; padding-right: 0px;">
          <span class="col-md-12" style="padding-left: 0px; padding-right: 0px; ">
            <label for="Localizacao">Localização</label>
            <textarea class="form-control" rows="5" name="Localizacao" id="Localizacao " placeholder="Local do extintor na empresa"  ></textarea>
          </span>
        </div>

      </div> <!-- fim form grop -->
      </div> <!-- fim col 12-->

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
