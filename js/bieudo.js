google.charts.load('upcoming', {'packages': ['vegachart']}).then(drawChart);

function drawChart() {
  const dataTable = new google.visualization.DataTable();
  dataTable.addColumn({type: 'string', 'id': 'category'});
  dataTable.addColumn({type: 'number', 'id': 'amount'});
  dataTable.addRows([
    ['ANh', 28],
    ['B', 55],
    ['C', 43],
    ['D', 91],
    ['E', 81],
    ['F', 53],
    ['G', 19],
    ['H', 87],
  ]);

  const options = {
    "vega": {
      "$schema": "https://vega.github.io/schema/vega/v4.json",
      "width": 400,
      "height": 230,
      "padding": 10,

      'data': [{'name': 'table', 'source': 'datatable'}],

      "signals": [
        {
          "name": "tooltip",
          "value": {},
          "on": [
            {"events": "rect:mouseover", "update": "datum"},
            {"events": "rect:mouseout",  "update": "{}"}
          ]
        }
      ],

      "scales": [
        {
          "name": "xscale",
          "type": "band",
          "domain": {"data": "table", "field": "category"},
          "range": "width",
          "padding-left": .05,
          "round": true
        },
        {
          "name": "yscale",
          "domain": {"data": "table", "field": "amount"},
          "nice": true,
          "range": "height"
        }
      ],

      "axes": [
        { "orient": "bottom", "scale": "xscale" },
        { "orient": "left", "scale": "yscale" }
      ],
      "marks": [
        {
          "type": "rect",
          "from": {"data":"table"},
          "encode": {
            "enter": {
              "x": {"scale": "xscale", "field": "category"},
              "width": {"scale": "xscale", "band": .5},
              "y": {"scale": "yscale", "field": "amount"},
              "y2": {"scale": "yscale", "value": 0}
            },
            "update": {
              "fill": {"value": "rgb(179, 182, 245)"}
            },
            "hover": {
              "fill": {"value": "red"}
            }
          }
        },
        {
          "type": "text",
          "encode": {
            "enter": {
              "align": {"value": "center"},
              "baseline": {"value": "bottom"},
              "fill": {"value": "#333"}
            },
            "update": {
              "x": {"scale": "xscale", "signal": "tooltip.category", "band": 1},
              "y": {"scale": "yscale", "signal": "tooltip.amount", "offset": -.5},
              "text": {"signal": "tooltip.amount"},
              "fillOpacity": [
                {"test": "datum === tooltip", "value": 0},
                {"value": 1}
              ]
            }
          }
        }
      ]
    }
  };

  const chart = new google.visualization.VegaChart(document.getElementById('chart-div'));
  chart.draw(dataTable, options);
}

google.charts.load("current", {packages:["corechart"]});
google.charts.setOnLoadCallback(drawChart);
function drawChart2() {
  var data = google.visualization.arrayToDataTable([
    ['Task', 'Hours per Day'],
    ['Work',     11],
    ['Eat',      2],
    ['Commute',  2],
    ['Watch TV', 2],
    ['Sleep',    7]
  ]);

  var options = {
    title: 'Thống kê sản phẩm đã bán',
    pieHole: 0.4,
  };
  var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
  chart.draw(data, options);
}
google.charts.load('upcoming', {'packages': ['vegachart']}).then(drawChart2);
// ==============biểu đồ chart.js===========


