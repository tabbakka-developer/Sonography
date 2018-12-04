$(document).ready(function () {

    let ctx = document.getElementById("myChart");
    let myChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: ["Понедельник", "Вторник", "Среда", "Четверг", "Пятница", "Суббота", "Воскресенье"],
            datasets: [{
                data: [0, 0, 0, 0, 0, 0, 0],
                lineTension: 0,
                backgroundColor: 'transparent',
                borderColor: '#007bff',
                borderWidth: 4,
                pointBackgroundColor: '#007bff'
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            },
            legend: {
                display: false,
            }
        }
    });

});
