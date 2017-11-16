<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
<h2>selecionar Setor </h2>
  <?php
      require_once('data_base_conection.php');


   ?>

  <form action="inserir_cadastro_hht.php" method="POST">
    <label>Titulo</label>
    <input type="text" name="titulo"><br><br>

    <label>Empresa</label>
    <select name="cnpj_empresa" id="cnpj_empresa">
      <option value="">Escolha a Empresa</option>
      <?php
        $sql="SELECT * FROM cadastro_empresa;";
        $objDb = new db();
        $link = $objDb->conecta_mysql();
        $resultado= mysqli_query($link, $sql);
        while ($row = mysqli_fetch_assoc($resultado)) {
          
          echo '<option value="'.$row['CNPJ_Empresa'].'">'.$row['Nome_Fantasia'].'</option>';
        }

      ?>
      

    </select>
    <br><br><br>

    <label>Setor:</label>
    <select name="setor" id="setor"> 
      <option value="">Escolha o setor</option>

    </select>







    <input type="submit" value="cadastrar">
  </form>
<script type="text/javascript" src="https://www.google.com/jsapi"></script>
<script type="text/javascript">
      google.load("jquery", "1.4.2");
    </script>


  <script type="text/javascript">
    $(function(){
      $('#cnpj_empresa').change(function(){
        if( $(this).val() ) {
          $('#setor').hide();
          $('.carregando').show();
          $.getJSON('selecionar_setor.php?search=',{cnpj_empresa: $(this).val(), ajax: 'true'}, function(j){
            var options = '<option value="">Escolha Subcategoria</option>'; 
            for (var i = 0; i < j.length; i++) {
              options += '<option value="' + j[i].id + '">' + j[i].setor + '</option>';
            } 
            $('#setor').html(options).show();
            $('.carregando').hide();
          });
        } else {
          $('#setor').html('<option value="">– Escolha Subcategoria –</option>');
        }
      });
    });
    </script>








</body>
</html>