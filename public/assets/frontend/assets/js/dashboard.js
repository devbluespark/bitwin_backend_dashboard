// Chart

// var ctx = document.getElementById('myChart');
// var ctx = document.getElementById('myChart').getContext('2d');
// var ctx = $('#myChart');
// var ctx = 'myChart';

// var myChart = new Chart(ctx, {
//     type: 'bar',
//     data: {
//         labels: ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15', '16', '17', '18', '19', '20', '21', '22', '23', '24', '25'],
//         datasets: [{
//             label: '# of Votes',
//             data: {
//                 datasets: [{
//                         fill: 'origin'
//                     }, // 0: fill to 'origin'
//                     {
//                         fill: '-1'
//                     }, // 1: fill to dataset 0
//                     {
//                         fill:'1'
//                     }, // 2: fill to dataset 1
//                     {
//                         fill: false
//                     }, // 3: no fill
//                     {
//                         fill: '-2'
//                     } // 4: fill to dataset 2
//                 ]
//             },
//             backgroundColor: [
//                 'rgba(255, 99, 132, 0.2)'
//             ],
//             borderColor: [
//                 'rgba(255, 99, 132, 1)'
//             ],
//             borderWidth: 1
//         }]
//     },
//     options: {
//         scales: {
//             yAxes: [{
//                 ticks: {
//                     beginAtZero: true
//                 }
//             }]
//         }
//     }
// });