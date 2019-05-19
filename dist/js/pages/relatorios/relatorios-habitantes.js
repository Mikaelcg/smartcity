$(document).ready(function(){

    listaHabitantes();

});

function listaHabitantes(){

    // $.ajax({
    //     type:"POST",
    //     dataType: "json",
    //     url: "../../dist/php/pages/relatorios/relatorios-residencias.php",

    //     success: function(array){
    //         console.log(array);
            
    //         var conteudo_residencias = '';
    //         // for(var i = 0; i < array["residencia"].length; i++){
    //         //     conteudo_residencias += "<tr>";
    //         //     conteudo_residencias += "<td>" + array["residencia"][i]["id"] + "</td>";
    //         //     conteudo_residencias += "<td>" + array["residencia"][i]["endereco"] + "</td>";
    //         //     conteudo_residencias += "<td>" + array["residencia"][i]["numero"] + "</td>";
    //         //     conteudo_residencias += "<td>" + array["residencia"][i]["complemento"] + "</td>";
    //         //     conteudo_residencias += "<td>" + array["residencia"][i]["cidade"] + "</td>";
    //         //     conteudo_residencias += "<td>" + array["residencia"][i]["area"] + "</td>";
    //         //     conteudo_residencias += "</tr>";
    //         // }

            
            

    //         // $("#residencias").append(conteudo_residencias);
    //     }
    // })

    $('#habitantes').DataTable({
        ajax: {url:"../../dist/php/pages/relatorios/relatorios-habitantes.php", dataSrc:''},
        columns: [
            {"data": "id" },
            {"data": "nome" },
            {"data": "sobrenome" },
            {"data": "nascimento" },
            {"data": "sexo" },
            {"data": "id_residencia"}
        ]
    });

}   
