/*
Template Name: Borex - Admin & Dashboard Template
Author: Themesbrand
Website: https://Themesbrand.com/
Contact: Themesbrand@gmail.com
File: Timeline Chart init js
*/

function getChartColorsArray(chartId) {
  if (document.getElementById(chartId) !== null) {
      var colors = document.getElementById(chartId).getAttribute("data-colors");
      colors = JSON.parse(colors);
      return colors.map(function (value) {
          var newValue = value.replace(" ", "");
          if (newValue.indexOf("--") != -1) {
              var color = getComputedStyle(document.documentElement).getPropertyValue(
                  newValue
              );
              if (color) return color;
          } else {
              return newValue;
          }
      });
  }
}

// Basic Timeline Charts
var barchartColors = getChartColorsArray("basic_timeline");
var options = {
    series: [
    {
      data: [
        {
          x: 'Code',
          y: [
            new Date('2019-03-02').getTime(),
            new Date('2019-03-04').getTime()
          ]
        },
        {
          x: 'Test',
          y: [
            new Date('2019-03-04').getTime(),
            new Date('2019-03-08').getTime()
          ]
        },
        {
          x: 'Validation',
          y: [
            new Date('2019-03-08').getTime(),
            new Date('2019-03-12').getTime()
          ]
        },
        {
          x: 'Deployment',
          y: [
            new Date('2019-03-12').getTime(),
            new Date('2019-03-18').getTime()
          ]
        }
      ]
    }
  ],
    chart: {
    height: 350,
    type: 'rangeBar',
    toolbar: {
      show: false,
    }
  },
  plotOptions: {
    bar: {
      horizontal: true
    }
  },
  xaxis: {
    type: 'datetime'
  },
  colors: barchartColors,
};

var chart = new ApexCharts(document.querySelector("#basic_timeline"), options);
chart.render();


// Different Color For Each Bar
var barchartColors = getChartColorsArray("color_timeline");
var options = {
    series: [
    {
      data: [
        {
          x: 'Analysis',
          y: [
            new Date('2019-02-27').getTime(),
            new Date('2019-03-04').getTime()
          ],
          fillColor: barchartColors[0]
        },
        {
          x: 'Design',
          y: [
            new Date('2019-03-04').getTime(),
            new Date('2019-03-08').getTime()
          ],
          fillColor: barchartColors[1]
        },
        {
          x: 'Coding',
          y: [
            new Date('2019-03-07').getTime(),
            new Date('2019-03-10').getTime()
          ],
          fillColor: barchartColors[2]
        },
        {
          x: 'Testing',
          y: [
            new Date('2019-03-08').getTime(),
            new Date('2019-03-12').getTime()
          ],
          fillColor: barchartColors[3]
        },
        {
          x: 'Deployment',
          y: [
            new Date('2019-03-12').getTime(),
            new Date('2019-03-17').getTime()
          ],
          fillColor: barchartColors[4]
        }
      ]
    }
  ],
    chart: {
    height: 330,
    type: 'rangeBar',
    toolbar: {
      show: false,
    }
  },
  plotOptions: {
    bar: {
      horizontal: true,
      distributed: true,
      dataLabels: {
        hideOverflowingLabels: false
      }
    }
  },
  dataLabels: {
    enabled: true,
    formatter: function(val, opts) {
      var label = opts.w.globals.labels[opts.dataPointIndex]
      var a = moment(val[0])
      var b = moment(val[1])
      var diff = b.diff(a, 'days')
      return label + ': ' + diff + (diff > 1 ? ' days' : ' day')
    },
  },
  xaxis: {
    type: 'datetime'
  },
  yaxis: {
    show: true
  },

  };

  var chart = new ApexCharts(document.querySelector("#color_timeline"), options);
  chart.render();

  // Multi Series Timeline
  var barchartColors = getChartColorsArray("multi_series");
  var options = {
    series: [
    {
      name: 'Bob',
      data: [
        {
          x: 'Design',
          y: [
            new Date('2019-03-05').getTime(),
            new Date('2019-03-08').getTime()
          ]
        },
        {
          x: 'Code',
          y: [
            new Date('2019-03-08').getTime(),
            new Date('2019-03-11').getTime()
          ]
        },
        {
          x: 'Test',
          y: [
            new Date('2019-03-11').getTime(),
            new Date('2019-03-16').getTime()
          ]
        }
      ]
    },
    {
      name: 'Joe',
      data: [
        {
          x: 'Design',
          y: [
            new Date('2019-03-02').getTime(),
            new Date('2019-03-05').getTime()
          ]
        },
        {
          x: 'Code',
          y: [
            new Date('2019-03-06').getTime(),
            new Date('2019-03-09').getTime()
          ]
        },
        {
          x: 'Test',
          y: [
            new Date('2019-03-10').getTime(),
            new Date('2019-03-19').getTime()
          ]
        }
      ]
    }
  ],
    chart: {
    height: 335,
    type: 'rangeBar',
    toolbar: {
      show: false,
    }
  },
  plotOptions: {
    bar: {
      horizontal: true
    }
  },
  dataLabels: {
    enabled: true,
    formatter: function(val) {
      var a = moment(val[0])
      var b = moment(val[1])
      var diff = b.diff(a, 'days')
      return diff + (diff > 1 ? ' days' : ' day')
    }
  },
  fill: {
    type: 'gradient',
    gradient: {
      shade: 'light',
      type: 'vertical',
      shadeIntensity: 0.25,
      gradientToColors: undefined,
      inverseColors: true,
      opacityFrom: 1,
      opacityTo: 1,
      stops: [50, 0, 100, 100]
    }
  },
  xaxis: {
    type: 'datetime'
  },
  legend: {
    position: 'top'
  },
  colors: barchartColors,
  };

  var chart = new ApexCharts(document.querySelector("#multi_series"), options);
  chart.render();

  // Advanced Timeline (Multiple Range)
  var barchartColors = getChartColorsArray("advanced_timeline");
  var options = {
    series: [
    {
      name: 'Bob',
      data: [
        {
          x: 'Design',
          y: [
            new Date('2019-03-05').getTime(),
            new Date('2019-03-08').getTime()
          ]
        },
        {
          x: 'Code',
          y: [
            new Date('2019-03-02').getTime(),
            new Date('2019-03-05').getTime()
          ]
        },
        {
          x: 'Code',
          y: [
            new Date('2019-03-05').getTime(),
            new Date('2019-03-07').getTime()
          ]
        },
        {
          x: 'Test',
          y: [
            new Date('2019-03-03').getTime(),
            new Date('2019-03-09').getTime()
          ]
        },
        {
          x: 'Test',
          y: [
            new Date('2019-03-08').getTime(),
            new Date('2019-03-11').getTime()
          ]
        },
        {
          x: 'Validation',
          y: [
            new Date('2019-03-11').getTime(),
            new Date('2019-03-16').getTime()
          ]
        },
        {
          x: 'Design',
          y: [
            new Date('2019-03-01').getTime(),
            new Date('2019-03-03').getTime()
          ]
        }
      ]
    },
    {
      name: 'Joe',
      data: [
        {
          x: 'Design',
          y: [
            new Date('2019-03-02').getTime(),
            new Date('2019-03-05').getTime()
          ]
        },
        {
          x: 'Test',
          y: [
            new Date('2019-03-06').getTime(),
            new Date('2019-03-16').getTime()
          ]
        },
        {
          x: 'Code',
          y: [
            new Date('2019-03-03').getTime(),
            new Date('2019-03-07').getTime()
          ]
        },
        {
          x: 'Deployment',
          y: [
            new Date('2019-03-20').getTime(),
            new Date('2019-03-22').getTime()
          ]
        },
        {
          x: 'Design',
          y: [
            new Date('2019-03-10').getTime(),
            new Date('2019-03-16').getTime()
          ]
        }
      ]
    },
    {
      name: 'Dan',
      data: [
        {
          x: 'Code',
          y: [
            new Date('2019-03-10').getTime(),
            new Date('2019-03-17').getTime()
          ]
        },
        {
          x: 'Validation',
          y: [
            new Date('2019-03-05').getTime(),
            new Date('2019-03-09').getTime()
          ]
        },
      ]
    }
  ],
    chart: {
    height: 350,
    type: 'rangeBar',
    toolbar: {
      show: false,
    }
  },
  plotOptions: {
    bar: {
      horizontal: true,
      barHeight: '80%'
    }
  },
  xaxis: {
    type: 'datetime'
  },
  stroke: {
    width: 1
  },
  fill: {
    type: 'solid',
    opacity: 0.6
  },
  legend: {
    position: 'top',
    horizontalAlign: 'left'
  },
  colors: barchartColors,
  };

  var chart = new ApexCharts(document.querySelector("#advanced_timeline"), options);
  chart.render();
