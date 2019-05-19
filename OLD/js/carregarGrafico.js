$(document).ready(function(){
	
	carregarGrafico();

});


function carregarGrafico(){


	var ctx = document.getElementById('myChart').getContext('2d');

    var myChart = new Chart(ctx, {
        type: 'line',
        data: {
            
            datasets: [{
                label: 'Consumo Elétrico (dado/mês)',
				data: [],
          		
                borderColor: [
                    'rgba(0, 255, 299, 1)',
                ],
                borderWidth: 1
            },
        
            {
                label: 'Consumo de Água (dado/mês)',
				data: [],
          		
                borderColor: [
                    'rgba(0, 255, 299, 1)',
                ],
                borderWidth: 1
            }

        ]
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

    gerarGraficoConsumoEletrico(myChart);
    gerarGraficoConsumoAgua(myChart);





}


function gerarGraficoConsumoEletrico(myChart){


	$.ajax({
		type: "POST",
		dataType: "json",
		url: "../php/dadosGraficoConsumoEletrico.php",
		success:function(array){
            console.log(array);
            for(x in array){
                myChart.data.datasets[0].data.push(array[x].consumo_eletrico);
                myChart.data.labels.push(array[x].residencia);
                
                
            }
		}
	});
	
}

function gerarGraficoConsumoAgua(myChart){


	$.ajax({
		type: "POST",
		dataType: "json",
		url: "../php/dadosGraficoConsumoAgua.php",
		success:function(array){
            console.log(array);
            for(x in array){
                myChart.data.datasets[1].data.push(array[x].consumo);
                myChart.data.labels.push(array[x].residencia);
                
                
            }
		}
	});
	
}

