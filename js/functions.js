  
    var count=2;
//Adicionar linha na tabela 
  AddTableRow = function() {


    var newRow = $("<tr>");
    var cols = "";

    cols += ' <td><input type="text"   required="required" class="form-control" name="Setor';
    cols +=count;
    cols +='"></td>';
    cols += '<td><input type="text"  required="required"  class="form-control" name="Funcao';
    cols +=count;
    cols +='"></td>';
    cols += '<td><input type="text"  required="required" class="form-control" name="Qtd_Trabalhadores';
    cols +=count;
    cols +='"></td>';
    cols += '<td>';
    cols += '<button onclick="RemoveTableRow(this)"  type="button" class="form-control">Remover</button>';
    cols += '</td>';


    count++;


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




  //Adicionar linha na tabela 
  AddTableRow_incidente = function() {


    var newRow = $("<tr>");
    var cols = "";

    cols += ' <td><input type="text"  class="form-control" name="Medidas_Administrativas';
    cols +=count;
    cols +='"></td>';
    cols += '<td><input type="text"  class="form-control" name="Medidas_Coletivas';
    cols +=count;
    cols +='"></td>';
    cols += '<td><input type="text"  class="form-control" name="Medidas_Individuis';
    cols +=count;
    cols +='"></td>';
    cols += '<td>';
    cols += '<button onclick="RemoveTableRow_incidente(this)"  type="button" class="form-control">Remover</button>';
    cols += '</td>';


    count++;


    newRow.append(cols);
    $("#products-table").append(newRow);

    return false;
  };

   RemoveTableRow_incidente = function(item) {
    var tr = $(item).closest('tr');

    tr.fadeOut(400, function() {
      tr.remove();  
    });

    return false;
  }

    //Adicionar linha na tabela 
  AddTableRow_mapa = function() {


    var newRow = $("<tr>");
    var cols = "";

    cols += ' <td><input type="text"  class="form-control" name="Risco';
    cols +=count;
    cols +='"></td>';
    cols += '<td><input type="text"  class="form-control" name="Fonte';
    cols +=count;
    cols +='"></td>';
    cols += '<td><input type="number"  class="form-control" name="Trab_Expostos';
    cols +=count;
    cols +='"></td>';
    cols += ' <td><input type="text"  class="form-control" name="Trajetoria';
    cols +=count;
    cols +='"></td>';
    cols += ' <td><input type="text"  class="form-control" name="Tipo';
    cols +=count;
    cols +='"></td>';
    cols += '<td>';
    cols += '<button onclick="RemoveTableRow_mapa(this)"  type="button" class="form-control">Remover</button>';
    cols += '</td>';


    count++;


    newRow.append(cols);
    $("#products-table").append(newRow);

    return false;
  };

   RemoveTableRow_mapa = function(item) {
    var tr = $(item).closest('tr');

    tr.fadeOut(400, function() {
      tr.remove();  
    });

    return false;
  }

    //Adicionar linha na tabela 
  AddTableRow_documentos = function() {


    var newRow = $("<tr>");
    var cols = "";

    cols += ' <td><input type="text"  class="form-control" name="Situacao';
    cols +=count;
    cols +='"></td>';
    cols += '<td><input type="date"  class="form-control" name="Vencimento';
    cols +=count;
    cols +='"></td>';
    cols += '<td><input type="text"  class="form-control" name="Documento';
    cols +=count;
    cols +='"></td>';
    cols += '<td>';
    cols += '<button onclick="RemoveTableRow_documentos(this)"  type="button" class="form-control">Remover</button>';
    cols += '</td>';


    count++;


    newRow.append(cols);
    $("#products-table").append(newRow);

    return false;
  };

   RemoveTableRow_documentos = function(item) {
    var tr = $(item).closest('tr');

    tr.fadeOut(400, function() {
      tr.remove();  
    });

    return false;
  }