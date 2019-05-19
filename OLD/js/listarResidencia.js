
$(document).ready(function(){

    listaResidencia();

});

function listaResidencia(){
    $.ajax({
        type:"POST",
        dataType: "json",
        url: "../php/listar-residencia.php",

        success: function(array){
            console.log(array["residencia"]);
            
            var conteudo_residencias = '';

            for(var i = 0; i < array["residencia"].length; i++){
                conteudo_residencias += "<tr>";
                conteudo_residencias += "<td>" + array["residencia"][i]["id"] + "</td>";
                conteudo_residencias += "<td>" + array["residencia"][i]["endereco"] + "</td>";
                conteudo_residencias += "<td>" + array["residencia"][i]["numero"] + "</td>";
                conteudo_residencias += "<td>" + array["residencia"][i]["complemento"] + "</td>";
                conteudo_residencias += "<td>" + array["residencia"][i]["metragem"] + "</td>";
                conteudo_residencias += "<td>" + array["residencia"][i]["cidade"] + "</td>";
                conteudo_residencias += "</tr>";
            }


            $("#residencias").append(conteudo_residencias);
        }
    })

}