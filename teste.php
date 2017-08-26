<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
  
  <style type="text/css">
 img {
    max-width:200px;
    max-height:150px;
    width: auto;
    height: auto;
}
 

  
  </style>
</head>

<body>
     

<table id="products-table">
<tbody>
 <tr>
   <th>Produto</th>
   <th>Código</th>
   <th colspan="2">Quantidade</th>
   <th colspan="2"></th>
 </tr>
 <tr>
            <td><input type="text"  class="form-control" name=""></td>
            <td><input type="text"  class="form-control" name=""></td>
            <td><input type="text"  class="form-control" name=""></td>
   <td>
     <button onclick="RemoveTableRow(this)" type="button">Remover</button>
   </td>
 </tr>
</tbody>
<tfoot>
 <tr>
   <td colspan="5" style="text-align: left;">
     <button onclick="AddTableRow()" type="button">Adicionar Produto</button>
   </td>
 </tr>
</tfoot>
</table>
    

     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
     <script src="js/functions.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
   
</body>
</html>
