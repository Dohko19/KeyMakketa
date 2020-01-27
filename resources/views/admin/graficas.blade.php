@extends('layouts.adminLTE')
@section('content')
<head> </head>
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
      	 <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Other</h3>
			<div class="card-tools"></div>
            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
              </button>
              <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
            </div>
          </div>
          <div class="card-body">
            <div class="chart">
              <div id="container" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
            </div>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- AREA CHART -->
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Area Chart</h3>
			<div class="card-tools"></div>
            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
              </button>
              <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
            </div>
          </div>
          <div class="card-body">
            <div class="chart">
              <canvas id="areaChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
            </div>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->

        <!-- DONUT CHART -->
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Donut Chart</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
              </button>
              <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
            </div>
          </div>
          <div class="card-body">
            <canvas id="donutChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->

        <!-- PIE CHART -->
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Pie Chart</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
              </button>
              <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
            </div>
          </div>
          <div class="card-body">
            <canvas id="pieChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->

      </div>
      <!-- /.col (LEFT) -->
      <div class="col-md-12">
        <!-- LINE CHART -->
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Line Chart</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
              </button>
              <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
            </div>
          </div>
          <div class="card-body">
            <div class="chart">
              <canvas id="lineChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
            </div>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->

        <!-- BAR CHART -->
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Bar Chart</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
              </button>
              <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
            </div>
          </div>
          <div class="card-body">
            <div class="chart">
              <canvas id="barChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
            </div>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->

        <!-- STACKED BAR CHART -->
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Stacked Bar Chart</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
              </button>
              <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
            </div>
          </div>
          <div class="card-body">
            <div class="chart">
              <canvas id="stackedBarChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
            </div>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->

      </div>
      <!-- /.col (RIGHT) -->
    </div>
    <!-- /.row -->
  </div><!-- /.container-fluid -->
</section>
@endsection
@push('scripts')
<script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/data.js"></script>
<script src="https://code.highcharts.com/modules/drilldown.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
<script src="https://cdn.plot.ly/plotly-latest.min.js"></script>
<script>
	Highcharts.chart('container', {
  chart: {
    type: 'column'
  },
  title: {
    text: 'Sucursales La No. 20 en CDMX'
  },
  subtitle: {
    //text: 'Click the columns to view versions. Source: <a href="http://statcounter.com" target="_blank">statcounter.com</a>'
    text: 'Click en las columnas para ver la calificacion por areas.'
  },
  xAxis: {
    type: 'category'
  },
  yAxis: {
    title: {
      text: 'Calificaciones'
    }

  },
  legend: {
    enabled: false
  },
  plotOptions: {
    series: {
      borderWidth: 0,
      dataLabels: {
        enabled: true,
        format: '{point.y:.1f}%'
      }
    }
  },

  tooltip: {
    headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
    pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:.2f}%</b> total<br/>'
  },

  series: [
    {
      name: "SUCURSALES",
      colorByPoint: true,
      data: [
        {
          name: "Centro",
          y: 99.74,
          drilldown: "Centro"
        },
        {
          name: "Insurgentes",
          y: 81.57,
          drilldown: "Insurgentes"
        },
        {
          name: "Condesa",
          y: 78.23,
          drilldown: "Condesa"
        },
        {
          name: "Lomas de chapultepec",
          y: 67.58,
          drilldown: "Lomas de chapultepec"
        },
        {
          name: "Palmas",
          y: 56.02,
          drilldown: "Palmas"
        },
        {
          name: "Polanco",
          y: 45.92,
          drilldown: "Polanco"
        },
        {
          name: "Reforma",
          y: 42.62,
          drilldown: "Reforma"
        },
        {
          name: "Roma",
          y: 38.62,
          drilldown: "Roma"
        },
        {
          name: "Santa Fe - Arcos",
          y: 35.62,
          drilldown: "Santa Fe - Arcos"
        },
        {
          name: "Coyoacán",
          y: 10.90,
          drilldown: "Coyoacán"
        },
        {
          name: "Pedregal",
          y: 8.60,
          drilldown: "Pedregal"
        }
      ]
    }
  ],
  drilldown: {
    series: [
      {
        name: "Centro",
        id: "Centro",
        data: [
          [
            "INSTALACIONES Y ÁREAS",
            90.1
          ],
          [
            "EQUIPO Y UTENSILIOS",
            1.3
          ],
          [
            " <a href='{{ route('pages.index') }}'> SERVICIOS</a> ",
            53.02
          ],
          [
            "ALMACENAMIENTO",
            1.4
          ],
          [
            "CONTROLES DE OPERACIÓN",
            0.88
          ],
          [
            "MATERIAS PRIMAS",
            0.1
          ],
          [
            "ENVASES",
            53.02
          ],
      [
            "AGUA EN CONTACTO CON LOS ALIMENTOS",
            2.6
          ],
          [
            "MANTENIMIENTO Y LIMPIEZA",
            1.3
          ],
          [
            "MANEJO DE RESIDUOS",
            4.3
          ],
          [
            "SALUD E HIGUIENE DEL PERSONAL",
            4.3
          ],
          [
            "TRANSPORTE",
            4.3
          ],
          [
            "DOCUMENTOS Y CAPACITACIÓN",
            4.3
          ]
        ]
      },
      {
        name: "Durango",
        id: "Durango",
        data: [
          [
            "INSTALACIONES Y ÁREAS",
            1.02
          ],
          [
            "EQUIPO Y UTENSILIOS",
            7.36
          ],
          [
            "SERVICIOS",
            0.35
          ],
          [
            "ALMACENAMIENTO",
            0.11
          ],
          [
            "CONTROLES DE OPERACIÓN",
            0.1
          ],
          [
            "MATERIAS PRIMAS",
            0.1
          ],
          [
            "ENVASES",
            53.02
          ],
      [
            "AGUA EN CONTACTO CON LOS ALIMENTOS",
            2.6
          ],
          [
            "MANTENIMIENTO Y LIMPIEZA",
            1.3
          ],
          [
            "MANEJO DE RESIDUOS",
            4.3
          ],
          [
            "SALUD E HIGUIENE DEL PERSONAL",
            4.3
          ],
          [
            "TRANSPORTE",
            4.3
          ],
          [
            "DOCUMENTOS Y CAPACITACIÓN",
            4.3
          ]
        ]
      },
      {
        name: "Insurgentes",
        id: "Insurgentes",
        data: [
          [
            "INSTALACIONES Y ÁREAS",
            6.2
          ],
          [
            "EQUIPO Y UTENSILIOS",
            0.29
          ],
          [
            "SERVICIOS",
            0.27
          ],
          [
            "ALMACENAMIENTO",
            0.47
          ],
          [
            "CONTROLES DE OPERACIÓN",
            0.47
          ],
          [
            "MATERIAS PRIMAS",
            0.1
          ],
          [
            "ENVASES",
            53.02
          ],
      [
            "AGUA EN CONTACTO CON LOS ALIMENTOS",
            2.6
          ],
          [
            "MANTENIMIENTO Y LIMPIEZA",
            1.3
          ],
          [
            "MANEJO DE RESIDUOS",
            4.3
          ],
          [
            "SALUD E HIGUIENE DEL PERSONAL",
            4.3
          ],
          [
            "TRANSPORTE",
            4.3
          ],
          [
            "DOCUMENTOS Y CAPACITACIÓN",
            4.3
          ]
        ]
      },
      {
        name: "Condesa",
        id: "Condesa",
        data: [
          [
            "INSTALACIONES Y ÁREAS",
            3.39
          ],
          [
            "EQUIPO Y UTENSILIOS",
            0.96
          ],
          [
            "SERVICIOS",
            0.36
          ],
          [
            "ALMACENAMIENTO",
            0.54
          ],
          [
            "CONTROLES DE OPERACIÓN",
            0.13
          ],
          [
            "MATERIAS PRIMAS",
            0.1
          ],
          [
            "ENVASES",
            53.02
          ],
      [
            "AGUA EN CONTACTO CON LOS ALIMENTOS",
            2.6
          ],
          [
            "MANTENIMIENTO Y LIMPIEZA",
            1.3
          ],
          [
            "MANEJO DE RESIDUOS",
            4.3
          ],
          [
            "SALUD E HIGUIENE DEL PERSONAL",
            4.3
          ],
          [
            "TRANSPORTE",
            4.3
          ],
          [
            "DOCUMENTOS Y CAPACITACIÓN",
            4.3
          ]
        ]
      },
      {
        name: "Lomas de chapultepec",
        id: "Lomas de chapultepec",
        data: [
          [
            "INSTALACIONES Y ÁREAS",
            2.6
          ],
          [
            "EQUIPO Y UTENSILIOS",
            0.92
          ],
          [
            "SERVICIOS",
            0.4
          ],
          [
            "ALMACENAMIENTO",
            0.1
          ],
          [
            "CONTROLES DE OPERACIÓN",
            0.1
          ],
          [
            "MATERIAS PRIMAS",
            0.1
          ],
          [
            "ENVASES",
            53.02
          ],
      [
            "AGUA EN CONTACTO CON LOS ALIMENTOS",
            2.6
          ],
          [
            "MANTENIMIENTO Y LIMPIEZA",
            1.3
          ],
          [
            "MANEJO DE RESIDUOS",
            4.3
          ],
          [
            "SALUD E HIGUIENE DEL PERSONAL",
            4.3
          ],
          [
            "TRANSPORTE",
            4.3
          ],
          [
            "DOCUMENTOS Y CAPACITACIÓN",
            4.3
          ]
        ]
      },
      {
        name: "Palmas",
        id: "Palmas",
        data: [
          [
            "INSTALACIONES Y ÁREAS",
            0.96
          ],
          [
            "EQUIPO Y UTENSILIOS",
            0.82
          ],
          [
            "SERVICIOS",
            0.14
          ],
          [
            "ALMACENAMIENTO",
            0.1
          ],
          [
            "CONTROLES DE OPERACIÓN",
            0.1
          ],
          [
            "MATERIAS PRIMAS",
            0.1
          ],
          [
            "ENVASES",
            53.02
          ],
      [
            "AGUA EN CONTACTO CON LOS ALIMENTOS",
            2.6
          ],
          [
            "MANTENIMIENTO Y LIMPIEZA",
            1.3
          ],
          [
            "MANEJO DE RESIDUOS",
            4.3
          ],
          [
            "SALUD E HIGUIENE DEL PERSONAL",
            4.3
          ],
          [
            "TRANSPORTE",
            4.3
          ],
          [
            "DOCUMENTOS Y CAPACITACIÓN",
            4.3
          ]
        ]
      },
      {
        name: "Polanco",
        id: "Polanco",
        data: [
          [
            "INSTALACIONES Y ÁREAS",
            2.6
          ],
          [
            "EQUIPO Y UTENSILIOS",
            0.92
          ],
          [
            "SERVICIOS",
            0.4
          ],
          [
            "ALMACENAMIENTO",
            0.1
          ],
          [
            "CONTROLES DE OPERACIÓN",
            0.1
          ],
          [
            "MATERIAS PRIMAS",
            0.1
          ],
          [
            "ENVASES",
            53.02
          ],
      [
            "AGUA EN CONTACTO CON LOS ALIMENTOS",
            2.6
          ],
          [
            "MANTENIMIENTO Y LIMPIEZA",
            1.3
          ],
          [
            "MANEJO DE RESIDUOS",
            4.3
          ],
          [
            "SALUD E HIGUIENE DEL PERSONAL",
            4.3
          ],
          [
            "TRANSPORTE",
            4.3
          ],
          [
            "DOCUMENTOS Y CAPACITACIÓN",
            4.3
          ]
        ]
      },
      {
        name: "Reforma",
        id: "Reforma",
        data: [
          [
            "INSTALACIONES Y ÁREAS",
            2.6
          ],
          [
            "EQUIPO Y UTENSILIOS",
            0.92
          ],
          [
            "SERVICIOS",
            0.4
          ],
          [
            "ALMACENAMIENTO",
            0.1
          ],
          [
            "CONTROLES DE OPERACIÓN",
            0.1
          ],
          [
            "MATERIAS PRIMAS",
            0.1
          ],
          [
            "ENVASES",
            53.02
          ],
      [
            "AGUA EN CONTACTO CON LOS ALIMENTOS",
            2.6
          ],
          [
            "MANTENIMIENTO Y LIMPIEZA",
            1.3
          ],
          [
            "MANEJO DE RESIDUOS",
            4.3
          ],
          [
            "SALUD E HIGUIENE DEL PERSONAL",
            4.3
          ],
          [
            "TRANSPORTE",
            4.3
          ],
          [
            "DOCUMENTOS Y CAPACITACIÓN",
            4.3
          ]
        ]
      },{
        name: "Roma",
        id: "Roma",
        data: [
          [
            "INSTALACIONES Y ÁREAS",
            2.6
          ],
          [
            "EQUIPO Y UTENSILIOS",
            0.92
          ],
          [
            "SERVICIOS",
            0.4
          ],
          [
            "ALMACENAMIENTO",
            0.1
          ],
          [
            "CONTROLES DE OPERACIÓN",
            0.1
          ],
          [
            "MATERIAS PRIMAS",
            0.1
          ],
          [
            "ENVASES",
            53.02
          ],
      [
            "AGUA EN CONTACTO CON LOS ALIMENTOS",
            2.6
          ],
          [
            "MANTENIMIENTO Y LIMPIEZA",
            1.3
          ],
          [
            "MANEJO DE RESIDUOS",
            4.3
          ],
          [
            "SALUD E HIGUIENE DEL PERSONAL",
            4.3
          ],
          [
            "TRANSPORTE",
            4.3
          ],
          [
            "DOCUMENTOS Y CAPACITACIÓN",
            4.3
          ]
        ]
      },{
        name: "Santa Fe - Arcos",
        id: "Santa Fe - Arcos",
        data: [
          [
            "INSTALACIONES Y ÁREAS",
            2.6
          ],
          [
            "EQUIPO Y UTENSILIOS",
            0.92
          ],
          [
            "SERVICIOS",
            0.4
          ],
          [
            "ALMACENAMIENTO",
            0.1
          ],
          [
            "CONTROLES DE OPERACIÓN",
            0.1
          ],
          [
            "MATERIAS PRIMAS",
            0.1
          ],
          [
            "ENVASES",
            53.02
          ],
      [
            "AGUA EN CONTACTO CON LOS ALIMENTOS",
            2.6
          ],
          [
            "MANTENIMIENTO Y LIMPIEZA",
            1.3
          ],
          [
            "MANEJO DE RESIDUOS",
            4.3
          ],
          [
            "SALUD E HIGUIENE DEL PERSONAL",
            4.3
          ],
          [
            "TRANSPORTE",
            4.3
          ],
          [
            "DOCUMENTOS Y CAPACITACIÓN",
            4.3
          ]
        ]
      },
      {
        name: "Coyoacan",
        id: "Coyoacan",
        data: [
          [
            "INSTALACIONES Y ÁREAS",
            2.6
          ],
          [
            "EQUIPO Y UTENSILIOS",
            0.92
          ],
          [
            "SERVICIOS",
            0.4
          ],
          [
            "ALMACENAMIENTO",
            0.1
          ],
          [
            "CONTROLES DE OPERACIÓN",
            0.1
          ],
          [
            "MATERIAS PRIMAS",
            0.1
          ],
          [
            "ENVASES",
            53.02
          ],
      [
            "AGUA EN CONTACTO CON LOS ALIMENTOS",
            2.6
          ],
          [
            "MANTENIMIENTO Y LIMPIEZA",
            1.3
          ],
          [
            "MANEJO DE RESIDUOS",
            4.3
          ],
          [
            "SALUD E HIGUIENE DEL PERSONAL",
            4.3
          ],
          [
            "TRANSPORTE",
            4.3
          ],
          [
            "DOCUMENTOS Y CAPACITACIÓN",
            4.3
          ]
        ]
      },
      {
        name: "Pedregal",
        id: "Pedregal",
        data: [
          [
            "INSTALACIONES Y ÁREAS",
            2.6
          ],
          [
            "EQUIPO Y UTENSILIOS",
            0.92
          ],
          [
            "SERVICIOS",
            0.4
          ],
          [
            "ALMACENAMIENTO",
            0.1
          ],
          [
            "CONTROLES DE OPERACIÓN",
            0.1
          ],
          [
            "MATERIAS PRIMAS",
            0.1
          ],
          [
            "ENVASES",
            53.02
          ],
      [
            "AGUA EN CONTACTO CON LOS ALIMENTOS",
            2.6
          ],
          [
            "MANTENIMIENTO Y LIMPIEZA",
            1.3
          ],
          [
            "MANEJO DE RESIDUOS",
            4.3
          ],
          [
            "SALUD E HIGUIENE DEL PERSONAL",
            4.3
          ],
          [
            "TRANSPORTE",
            4.3
          ],
          [
            "DOCUMENTOS Y CAPACITACIÓN",
            4.3
          ]
        ]
      }
    ]
  }
});
</script>

<script>
  $(function () {
    /* ChartJS
     * -------
     * Here we will create a few charts using ChartJS
     */

    //--------------
    //- AREA CHART -
    //--------------

    // Get context with jQuery - using jQuery's .get() method.
    var areaChartCanvas = $('#areaChart').get(0).getContext('2d')

    var areaChartData = {
      labels  : ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
      datasets: [
        {
          label               : 'Digital Goods',
          backgroundColor     : 'rgba(60,141,188,0.9)',
          borderColor         : 'rgba(60,141,188,0.8)',
          pointRadius          : false,
          pointColor          : '#3b8bba',
          pointStrokeColor    : 'rgba(60,141,188,1)',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(60,141,188,1)',
          data                : [28, 48, 40, 19, 86, 27, 90]
        },
        {
          label               : 'Electronics',
          backgroundColor     : 'rgba(210, 214, 222, 1)',
          borderColor         : 'rgba(210, 214, 222, 1)',
          pointRadius         : false,
          pointColor          : 'rgba(210, 214, 222, 1)',
          pointStrokeColor    : '#c1c7d1',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(220,220,220,1)',
          data                : [65, 59, 80, 81, 56, 55, 40]
        },
      ]
    }

    var areaChartOptions = {
      maintainAspectRatio : false,
      responsive : true,
      legend: {
        display: false
      },
      scales: {
        xAxes: [{
          gridLines : {
            display : false,
          }
        }],
        yAxes: [{
          gridLines : {
            display : false,
          }
        }]
      }
    }

    // This will get the first returned node in the jQuery collection.
    var areaChart       = new Chart(areaChartCanvas, {
      type: 'line',
      data: areaChartData,
      options: areaChartOptions
    })

    //-------------
    //- LINE CHART -
    //--------------
    var lineChartCanvas = $('#lineChart').get(0).getContext('2d')
    var lineChartOptions = jQuery.extend(true, {}, areaChartOptions)
    var lineChartData = jQuery.extend(true, {}, areaChartData)
    lineChartData.datasets[0].fill = false;
    lineChartData.datasets[1].fill = false;
    lineChartOptions.datasetFill = false

    var lineChart = new Chart(lineChartCanvas, {
      type: 'line',
      data: lineChartData,
      options: lineChartOptions
    })

    //-------------
    //- DONUT CHART -
    //-------------
    // Get context with jQuery - using jQuery's .get() method.
    var donutChartCanvas = $('#donutChart').get(0).getContext('2d')
    var donutData        = {
      labels: [
          'Chrome',
          'IE',
          'FireFox',
          'Safari',
          'Opera',
          'Navigator',
      ],
      datasets: [
        {
          data: [700,500,400,600,300,100],
          backgroundColor : ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de'],
        }
      ]
    }
    var donutOptions     = {
      maintainAspectRatio : false,
      responsive : true,
    }
    //Create pie or douhnut chart
    // You can switch between pie and douhnut using the method below.
    var donutChart = new Chart(donutChartCanvas, {
      type: 'doughnut',
      data: donutData,
      options: donutOptions
    })

    //-------------
    //- PIE CHART -
    //-------------
    // Get context with jQuery - using jQuery's .get() method.
    var pieChartCanvas = $('#pieChart').get(0).getContext('2d')
    var pieData        = donutData;
    var pieOptions     = {
      maintainAspectRatio : false,
      responsive : true,
    }
    //Create pie or douhnut chart
    // You can switch between pie and douhnut using the method below.
    var pieChart = new Chart(pieChartCanvas, {
      type: 'pie',
      data: pieData,
      options: pieOptions
    })

    //-------------
    //- BAR CHART -
    //-------------
    var barChartCanvas = $('#barChart').get(0).getContext('2d')
    var barChartData = jQuery.extend(true, {}, areaChartData)
    var temp0 = areaChartData.datasets[0]
    var temp1 = areaChartData.datasets[1]
    barChartData.datasets[0] = temp1
    barChartData.datasets[1] = temp0

    var barChartOptions = {
      responsive              : true,
      maintainAspectRatio     : false,
      datasetFill             : false
    }

    var barChart = new Chart(barChartCanvas, {
      type: 'bar',
      data: barChartData,
      options: barChartOptions
    })

    //---------------------
    //- STACKED BAR CHART -
    //---------------------
    var stackedBarChartCanvas = $('#stackedBarChart').get(0).getContext('2d')
    var stackedBarChartData = jQuery.extend(true, {}, barChartData)

    var stackedBarChartOptions = {
      responsive              : true,
      maintainAspectRatio     : false,
      scales: {
        xAxes: [{
          stacked: true,
        }],
        yAxes: [{
          stacked: true
        }]
      }
    }

    var stackedBarChart = new Chart(stackedBarChartCanvas, {
      type: 'bar',
      data: stackedBarChartData,
      options: stackedBarChartOptions
    })
  })
</script>
@endpush