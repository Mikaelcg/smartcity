$(document).ready(function(){

    listaAparato();

});

function listaAparato(){

    $('#aparatos').DataTable({
        ajax: {url:"../../dist/php/pages/relatorios/relatorios-aparatos.php", dataSrc:''},
        columns: [
            {"data": "id" },
            {"data": "aparato" },
            {"data": "potencia" },
            {"data": "id_residencia" },
        ]
    });

}   
