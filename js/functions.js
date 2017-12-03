  
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

    cols +='</tr>';

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

    cols +='</tr>';

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

    cols +='</tr>';

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
    cols +='</tr>';


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


  AddTableRow_extintores = function() {


    var newRow = $("<tr>");
    var cols = "";

    cols += '<td><select id="Produto" name="produto';
    cols +=count;
    cols +='" class="form-control"> <option value="Extintor 10 L">Extintor 10 L </option> <option value="Extintor 04 Kg">Extintor 04 Kg</option>                   <option value="Extintor 06 Kg">Extintor 06 Kg</option>                    <option value="Extintor 08 Kg">Extintor 08 Kg</option>                   <option value="Extintor 12 Kg">Extintor 12 Kg</option>                   <option value="Extintor 20 Kg">Extintor 20 Kg</option> </select> </td>';

    cols += '<td><input type="number"  class="form-control" name="quant_extintores';
    cols +=count;
    cols +='" id="quantidade"> </td>';

    cols += '<td> <select id="Composicao" name="composicao';
    cols +=count;
    cols +='" class="form-control">  <option value="Água H2O L">Água H2O L</option> <option value="Pó Quimico">Pó Quimico</option>  <option value="ABC">ABC</option> <option value="Pó Quimico B/C">Pó Quimico B/C</option> </select> </td>';   
               
                   
    cols += '<td>  <input type="number"  class="form-control" name="durabilidade';
    cols +=count;
    cols +='"  id="Durabilidade"> </td>';

    cols += '<td>  <input type="date"  class="form-control" name="vencimento_extintores';
    cols +=count;
    cols +='"  id="Vencimento_Extintores"> </td>';


    cols += '<td>  <input type="text"  class="form-control" name="localizacao';
    cols +=count;
    cols +='"  id="Localizacao"> </td>';

    cols +='<td>'
    cols += '<button onclick="RemoveTableRow_extintores(this)"  type="button" class="form-control">Remover</button>';
    cols += '</td>';

    cols +='</tr>';
    count++;


    newRow.append(cols);
    $("#products-table").append(newRow);

    return false;
  };

   RemoveTableRow_extintores = function(item) {
    var tr = $(item).closest('tr');

    tr.fadeOut(400, function() {
      tr.remove();  
    });

    return false;
  }




