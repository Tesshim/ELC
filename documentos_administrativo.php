  <!DOCTYPE html>

<?php
  
  if(isset($_GET['id'])){
        $id=$_GET['id'];
     }
     else{
        $id="nao_existe";
     }
?>



  <html xmlns="http://www.w3.org/1999/xhtml">
  <head>  
  	<link type="text/css" rel="stylesheet" href="css/chosen.css">

    <title>Documentos Administrativos</title>
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
       <h2>Documentos Administrativos</h2> 
       <hr/>  
     </div>
   </div>  <!-- /. ROW  -->

   <div class="form-group" >
          <label for="Nome_Empresarial">Empresa:</label>
          <select id="cnpj_empresa"  name="cnpj_empresa" class="form-control">
            <option value="">Selecione a empresa</option>;
               <?php
              require_once('data_base_conection.php');
              $sql="SELECT * FROM cadastro_empresa;";
              $objDb = new db();
              $link = $objDb->conecta_mysql();
              $resultado= mysqli_query($link, $sql);
              while ($row = mysqli_fetch_assoc($resultado)) {
                echo '<option value="'.$row['CNPJ_Empresa'].'">'.$row['Nome_Empresarial'].'</option>';
              }
             ?>
           </select>

      </div>



   <div style="min-height: 500px">
    <table class="table table-striped" style="margin-top:20px; " >
      <thead class="" style="background-color:#AF8E68; color: white">
        <tr>
          <th>CNPJ</th>
          <th>Situação</th>
          <th>Documento</th>
          <th>Vencimento</th>
          <th class="text-center">Ações</th>
        </tr>
      </thead>
      <tbody style="background-color: white">

        <?php
        
        include_once "data_base_conection.php";

        $objDb = new db();
        $link = $objDb->conecta_mysql();
  // $id_user= $_SESSION['id_usuario'];
        

        $pagina = (isset($_GET['pagina']))? $_GET['pagina'] : 1; 

        if($id=="nao_existe"){
        $sql = "SELECT * FROM documentos;";   
      }else{
        $sql = "SELECT * FROM documentos WHERE CNPJ_Empresa= '$id';";   
      }

        
        $produtos =  mysqli_query($link, $sql);
        $total = mysqli_num_rows($produtos); 
        $registros = 9; 
        $numPaginas = ceil($total/$registros);
        $inicio = ($registros*$pagina)-$registros;
        if($id=="nao_existe"){
        $sql= "SELECT * FROM documentos order by Vencimento_Documentos limit $inicio,$registros";
      }else{
        $sql= "SELECT * FROM documentos  WHERE  CNPJ_Empresa= '$id' order by Vencimento_Documentos limit $inicio,$registros ";
      }

        $resultado_id = mysqli_query($link, $sql);
       if($resultado_id){                  //passando como parametros o MYSQLI_NUM retorna apeas um vez os dados 
                              //indexando de forma associativa com o MYSQLI_ASSOC
        $dados_usuario=array () ;
        $quant_linha=0;
      while($linha = mysqli_fetch_array($resultado_id, MYSQLI_ASSOC)){//percorre todod o banco de dados
      // retorna a pesquisa do banco de dados com um array
      //mysqli_fetch_array retorna apenas  a primeira ocorrencia da consulta
      //var_dump($dados_usuario);
      //echo $dados_usuario[3]; MYSQLI_NUM
        $quant_linha++;
        $dados_usuario[] = $linha;
      }


      for($i=0; $i<$quant_linha; $i++){
       ?>
       <tr>
        <td><?php echo  $dados_usuario[$i]['CNPJ_Empresa']; ?></td>
        <td><?php echo  $dados_usuario[$i]['Situacao']; ?></td>
        <td><?php echo  $dados_usuario[$i]['Documento']; ?></td>
        <td><?php echo  $dados_usuario[$i]['Vencimento_Documentos']; ?></td>
        <td class="text-center">
          <a href="documentos_administrativo.php?id=<?php echo $dados_usuario[$i]['id_Documentos'];?>"><button class="btn btn-outline-primary">Visualizar</button></a>
        </td>
      </tr>

      <?php
    }
  }
  
  ?>
</tbody>
</table>
</div>

<div >
 <span style="color: black">Páginas: </span>
 <strong>
  <?php
  for($i = 1; $i < $numPaginas + 1; $i++) { 
    echo "<a style='color: black' href='documentos_administrativo.php?&pagina=$i'>".$i."</a> "; 
  } 
  ?></strong>
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

</body>
</html>
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
        console.log(" sadasd"+$("#cnpj_empresa").val());

         window.location.href = "documentos_administrativo.php?id="+$("#cnpj_empresa").val() ;
    });

    });

  </script>