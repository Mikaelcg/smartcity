
$(document).ready(function(){

    listaAparatos();

});

function listaAparatos(){
    $.ajax({
        type:"POST",
        dataType: "json",
        url: "../php/listar-aparatos.php",

        success: function(array){
            console.log(array["aparatodomestico"]);
            
            var conteudo_aparatos = '';

            for(var i = 0; i < array["aparatodomestico"].length; i++){
                conteudo_aparatos += "<tr>";
                conteudo_aparatos += "<td>" + array["aparatodomestico"][i]["aparato"] + "</td>";
                conteudo_aparatos += "<td>" + array["aparatodomestico"][i]["residenciaAparato"] + "</td>";
                conteudo_aparatos += "</tr>";
            }


            $("#aparatos").append(conteudo_aparatos);
        }
    })

}