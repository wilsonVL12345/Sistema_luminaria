

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
        drawChart(response[13]); // Usamos solo los datos del distrito 1
      },
      error: function(error) {
        console.error('Error al obtener los datos:', error);
      }
    });
  }
  
  function drawChart(distritoDatos) {
    let datas = new google.visualization.DataTable();
    datas.addColumn('string', 'Actividad');
    datas.addColumn('number', 'Cantidad');
  
    // Añadir los datos del distrito 1
    datas.addRows([
      ['Proyectos En espera', distritoDatos.proyectos_espera],
      ['Mantenimientos En espera', distritoDatos.mantenimientos_espera],
      ['Proyectos Finalizados', distritoDatos.proyectos_finalizados],
      ['Mantenimientos Finalizados', distritoDatos.mantenimientos_finalizados],
      ['Inspecciones Realizadas', distritoDatos.inspecciones_realizadas]
    ]);
  
    let options = {
      title: 'Actividades Distritales - Distrito 13',
      colors: ['#ADD8E6', '#00BFFF', '#FF6666', '#2abe81', '#0000FF'],
      width: 800,
      height: 600
    };
  
    let chart = new google.visualization.PieChart(document.getElementById('dis13'));
    chart.draw(datas, options);
  }