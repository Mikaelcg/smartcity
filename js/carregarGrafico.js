$(document).ready(function(){
	
	carregarGrafico();

});


function carregarGrafico(){


	var ctx = document.getElementById('myChart').getContext('2d');

    var myChart = new Chart(ctx, {
        type: 'line',
        data: {
            
            datasets: [{
                label: 'Consumo (dado/mês)',
				data: [],
          		
                borderColor: [
                    'rgba(0, 255, 299, 1)',
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });

    fLocalComunicaServidorGrafico(myChart);
}


function fLocalComunicaServidorGrafico(myChart){


	$.ajax({
		type: "POST",
		dataType: "json",
		url: "../php/dadosGrafico.php",
		success:function(array){
            console.log(array);
            for(x in array){
                myChart.data.datasets[0].data.push(array[x].consumo_eletrico);
                myChart.data.labels.push(array[x].residencia);
                
                
            }
		}
	});
	
}
