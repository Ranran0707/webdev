<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="p-2">
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb my-0 ms-2">

      <li class="breadcrumb-item active "><span>Dashboard</span></li>
    </ol>
  </nav>
</div>
<div class="container mt-4">
  <h1 class="text-center">Selamat Datang Admin !</h1>
  <div id="chart" class="mt-3"></div>
</div>



<script>
  var options = {
    series: [{
        name: "Pembelian",
        data: [150, 200, 187, 156, 178, 148, 139, 178, 200, 250, 243, 100]
      },
      // {
      //   name: "Page Views",
      //   data: [35, 41, 62, 42, 13, 18, 29, 37, 36, 51, 32, 35]
      // },

    ],
    chart: {
      height: 350,
      type: 'line',
      zoom: {
        enabled: false
      },
    },
    dataLabels: {
      enabled: false
    },
    stroke: {
      width: [5, 5],
      curve: 'straight',
      dashArray: [0, 0]
    },
    title: {
      text: 'Grafik Penjualan',
      align: 'left'
    },
    legend: {
      tooltipHoverFormatter: function(val, opts) {
        return val + ' - ' + opts.w.globals.series[opts.seriesIndex][opts.dataPointIndex] + ''
      }
    },
    markers: {
      size: 0,
      hover: {
        sizeOffset: 6
      }
    },
    xaxis: {
      categories: ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul', 'Aug', 'Sep',
        'Oct', 'Nov', 'Dec'
      ],
    },
    tooltip: {
      y: [{
          title: {
            formatter: function(val) {
              return val + " Buku"
            }
          }
        },
        // {
        //   title: {
        //     formatter: function(val) {
        //       return val + " per session"
        //     }
        //   }
        // },
        // {
        //   title: {
        //     formatter: function(val) {
        //       return val;
        //     }
        //   }
        // }
      ]
    },
    grid: {
      borderColor: '#f1f1f1',
    }
  };

  var chart = new ApexCharts(document.querySelector("#chart"), options);
  chart.render();
</script>
<?= $this->endSection('content'); ?>