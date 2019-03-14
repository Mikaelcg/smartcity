
$(document).ready(function(){

    listaResidencia();

});

function listaResidencia(){
    $.ajax({
        type:"POST",
        dataType: "json",
        url: "../php/listar-habitante.php",

        success: function(array){
            console.log(array["habitante"]);
            
            var conteudo_habitantes = '';

            for(var i = 0; i < array["habitante"].length; i++){
                conteudo_habitantes += "<tr>";
                conteudo_habitantes += "<td>" + array["habitante"][i]["nome"] + "</td>";
                conteudo_habitantes += "<td>" + array["habitante"][i]["sobrenome"] + "</td>";
                conteudo_habitantes += "<td>" + array["habitante"][i]["nascimento"] + "</td>";
                conteudo_habitantes += "<td>" + array["habitante"][i]["sexo"] + "</td>";
                conteudo_habitantes += "</tr>";
            }


            $("#habitantes").append(conteudo_habitantes);
        }
    })

}