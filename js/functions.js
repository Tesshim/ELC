  

//Adicionar linha na tabela 
  AddTableRow = function() {

    var newRow = $("<tr>");
    var cols = "";

    cols += ' <td><input type="text"  class="form-control" name=""></td>';
    cols += '<td><input type="text"  class="form-control" name=""></td>';
    cols += '<td><input type="text"  class="form-control" name=""></td>';
    cols += '<td>';
    cols += '<button onclick="RemoveTableRow(this)" type="button" class="form-control">Remover</button>';
    cols += '</td>';

    newRow.append(cols);
    $("#products-table").append(newRow);

    return false;
  };



   RemoveTableRow = function(item) {
    var tr = $(item).closest('tr');

    tr.fadeOut(400, function() {
      tr.remove();  
    });

    return false;
  }