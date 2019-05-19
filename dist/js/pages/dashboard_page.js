$(document).ready(function(){

    listaResidencia();
    listaAparato();
    listaHabitante();

});

function listaResidencia(){

    $.ajax({
        type:"POST",
        dataType: "json",
        url: "../dist/php/pages/relatorios/relatorios-residencias.php",

        success: function(array){
            $("#total-casas").html(array.length);
        }
    })


}

function listaAparato(){

    $.ajax({
        type:"POST",
        dataType: "json",
        url: "../dist/php/pages/relatorios/relatorios-aparatos.php",

        success: function(array){
            $("#total-aparatos").html(array.length);
        }
    })


}   

function listaHabitante(){

    $.ajax({
        type:"POST",
        dataType: "json",
        url: "../dist/php/pages/relatorios/relatorios-habitantes.php",

        success: function(array){
            $("#total-habitantes").html(array.length);
        }
    })


}   
