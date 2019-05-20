$(document).ready(function() {

    listaIdResidencia();

    $("#residencias").change(function() {
        // console.log( $("#residencias").val());
        listaConsumo($("#residencias").val());
    })

});

function listaIdResidencia() {
    $.ajax({
        type: "POST",
        dataType: "json",
        url: "../../dist/php/pages/relatorios/relatorios-residencias.php",

        success: function(array) {
            console.log(array);

            var conteudo_residencias = '';

            for (var i = 0; i < array.length; i++) {
                conteudo_residencias += '<option value=' + '"' + array[i]["id"] + '">' + array[i]["id"] + ' - ' + array[i]["endereco"] + ', ' + array[i]["numero"] + ', ' + array[i]["cidade"] + "</option>";

            }


            $("#residencias").append(conteudo_residencias);
        }
    })
}

function graficoConsumo(array) {
    var meses = [];
    var total = [];

    for (var i = 0; i < array.length; i++) {
        meses.push(array[i].mes_consumo);
    }

    for (var i = 0; i < array.length; i++) {
        total.push(array[i].total);
    }

    // Get context with jQuery - using jQuery's .get() method.
    var areaChartCanvas = $('#areaChart').get(0).getContext('2d')
        // This will get the first returned node in the jQuery collection.
    var areaChart = new Chart(areaChartCanvas)

    var areaChartData = {
        labels: meses,
        datasets: [{
            label: 'Consumo eletrico kWh',
            fillColor: 'rgba(60,141,188,0.9)',
            strokeColor: 'rgba(60,141,188,0.8)',
            pointColor: '#3b8bba',
            pointStrokeColor: 'rgba(60,141,188,1)',
            pointHighlightFill: '#fff',
            pointHighlightStroke: 'rgba(60,141,188,1)',
            data: total
        }]
    }

    var areaChartOptions = {
        //Boolean - If we should show the scale at all
        showScale: true,
        //Boolean - Whether grid lines are shown across the chart
        scaleShowGridLines: false,
        //String - Colour of the grid lines
        scaleGridLineColor: 'rgba(0,0,0,.05)',
        //Number - Width of the grid lines
        scaleGridLineWidth: 1,
        //Boolean - Whether to show horizontal lines (except X axis)
        scaleShowHorizontalLines: true,
        //Boolean - Whether to show vertical lines (except Y axis)
        scaleShowVerticalLines: true,
        //Boolean - Whether the line is curved between points
        bezierCurve: true,
        //Number - Tension of the bezier curve between points
        bezierCurveTension: 0.3,
        //Boolean - Whether to show a dot for each point
        pointDot: false,
        //Number - Radius of each point dot in pixels
        pointDotRadius: 4,
        //Number - Pixel width of point dot stroke
        pointDotStrokeWidth: 1,
        //Number - amount extra to add to the radius to cater for hit detection outside the drawn point
        pointHitDetectionRadius: 20,
        //Boolean - Whether to show a stroke for datasets
        datasetStroke: true,
        //Number - Pixel width of dataset stroke
        datasetStrokeWidth: 2,
        //Boolean - Whether to fill the dataset with a color
        datasetFill: true,
        //String - A legend template
        legendTemplate: '<ul class="<%=name.toLowerCase()%>-legend"><% for (var i=0; i<datasets.length; i++){%><li><span style="background-color:<%=datasets[i].lineColor%>"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>',
        //Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
        maintainAspectRatio: true,
        //Boolean - whether to make the chart responsive to window resizing
        responsive: true
    }

    //Create the line chart
    areaChart.Line(areaChartData, areaChartOptions)
}


function listaConsumo(id_casa) {
    var array_consumo = [];
    console.log(id_casa);

    $.ajax({
        type: "POST",
        data: ({casa: id_casa}),
        dataType: "json",
        url: "../../dist/php/pages/graficos/grafico-gastos.php",

        success: function(array) {
            graficoConsumo(array);
        }
    })

    $("#idresidencia").html(id_casa);
}