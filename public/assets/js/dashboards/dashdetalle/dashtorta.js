
 // Cargar la librería de Google Charts
 google.charts.load('current', {'packages':['corechart']});

 // Callback para dibujar el gráfico cuando la librería esté cargada
 google.charts.setOnLoadCallback(drawChart);

 function drawChart() {
   let data = google.visualization.arrayToDataTable([
     ['Task', 'Hours per Day'],
     ['Mantenimiento En espera', 21],
     ['Mantenimiento Finalizado', 2],
     ['Proyecto ', 2],
     ['Proyecto Terminado', 2],
     ['Inspecciones Realizadas', 7]
   ]);

   let options = {
     title: 'Actividades Distritales',
     colors: ['#fe3995', '#f6aa33', '#6e4ff5', '#2abe81', '#c7d2e7', '#593ae1'],
     width: 800,  // Ajusta el ancho del gráfico (doble del tamaño original)
     height: 600  // Ajusta la altura del gráfico (doble del tamaño original)
   };

   let chart = new google.visualization.PieChart(document.getElementById('torta'));
   chart.draw(data, options);
 }