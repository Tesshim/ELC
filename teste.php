<!DOCTYPE html>
<html>
<head>
  <title></title>
<?php
    require_once "head.php";
    ?>
    
  <script type="text/javascript">
    $(function(){
        $('#test').click(function(){
          $("#test").fadeOut(200);
        })
      });
  </script>


<style type="text/css">
   

#test{  position: absolute;
z-index:2;} /*essa vai ficar por cima*
</style>

</head>
<body>
 
<div class="container">

  <div class="alert alert-success alert-dismissible" id="test">
    <a href="#" class="close">&times;</a>
    <strong>Success!</strong> This alert box could indicate a successful or positive action.
  </div>
</div>



<script>
$(document).ready(function(){
    $(".close").click(function(){
        $("#myAlert").alert("close");
    });
});
</script>

</div>
</body>
</html>