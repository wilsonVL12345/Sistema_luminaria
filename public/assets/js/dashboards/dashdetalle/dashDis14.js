

  // Cargar la librería de Google Charts
  google.charts.load('current', {'packages':['corechart']});

  // Callback para dibujar el gráfico cuando la librería esté cargada
  google.charts.setOnLoadCallback(fetchDataAndDrawChart);
  
  function fetchDataAndDrawChart() {
    // Hacer una petición AJAX para obtener los datos de la API
    $.ajax({
      url: '/api/dashboardGenerales',
      method: 'GET',
      success: function(response) {
        drawChart(response[14]); // Usamos solo los datos del distrito 1
      },
      error: function(error) {
        console.error('Error al obtener los datos:', error);
      }
    });
  }
  
  function drawChart(distritoDatos) {
    let datas14 = new google.visualization.DataTable();
    datas14.addColumn('string', 'Actividad');
    datas14.addColumn('number', 'Cantidad');
  
    // Añadir los datos del distrito 1
    datas14.addRows([
      ['Proyectos En espera', distritoDatos.proyectos_espera],
      ['Mantenimientos En espera', distritoDatos.mantenimientos_espera],
      ['Proyectos Finalizados', distritoDatos.proyectos_finalizados],
      ['Mantenimientos Finalizados', distritoDatos.mantenimientos_finalizados],
      ['Inspecciones Realizadas', distritoDatos.inspecciones_realizadas]
    ]);
  
    let options = {
      // title: 'EF',
      colors: ['#ADD8E6', '#00BFFF', '#FF6666', '#2abe81', '#0000FF'],
      /* width: 800,
      height: 600 */
      width: 640,
      height: 480
    };
  
    let chart14 = new google.visualization.PieChart(document.getElementById('dis14'));
    chart14.draw(datas14, options);
  }