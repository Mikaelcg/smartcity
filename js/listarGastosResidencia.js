
$(document).ready(function(){

    listaGastos();

});

function listaGastos(){
    $.ajax({
        type:"POST",
        dataType: "json",
        url: "../php/listar-gastos.php",

        success: function(array){
            
            var conteudo_gastos = '';

            for(var i = 0; i < array["gastos"].length; i++){
                conteudo_gastos += "<tr>";
                conteudo_gastos += "<td>" + array["gastos"][i]["id_residencia"] + "</td>";
                conteudo_gastos += "<td>" + array["gastos"][i]["total"] + "</td>";
                conteudo_gastos += "</tr>";
            }


            $("#gastos").append(conteudo_gastos);
        }
    })

}