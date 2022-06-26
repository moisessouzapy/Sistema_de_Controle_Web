<!-- Resources -->
<script src="https://cdn.amcharts.com/lib/5/index.js"></script>
<script src="https://cdn.amcharts.com/lib/5/xy.js"></script>
<script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>
<script src="https://cdn.amcharts.com/lib/5/percent.js"></script>

<!-- Chart code -->
<script>
  am5.ready(function() {

    // Create root element
    // https://www.amcharts.com/docs/v5/getting-started/#Root_element
    var root = am5.Root.new("chartdiv");

    // Set themes
    // https://www.amcharts.com/docs/v5/concepts/themes/
    root.setThemes([
      am5themes_Animated.new(root)
    ]);

    // Create chart
    // https://www.amcharts.com/docs/v5/charts/percent-charts/pie-chart/
    var chart = root.container.children.push(
      am5percent.PieChart.new(root, {
        endAngle: 270
      })
    );

    // Create series
    // https://www.amcharts.com/docs/v5/charts/percent-charts/pie-chart/#Series
    var series = chart.series.push(
      am5percent.PieSeries.new(root, {
        valueField: "value",
        categoryField: "category",
        endAngle: 270
      })
    );

    series.states.create("hidden", {
      endAngle: -90
    });

    // Set data
    // https://www.amcharts.com/docs/v5/charts/percent-charts/pie-chart/#Setting_data
    series.data.setAll([{
      category: "Lithuania",
      value: 501.9
    }, {
      category: "Czechia",
      value: 301.9
    }, {
      category: "Ireland",
      value: 201.1
    }, {
      category: "Germany",
      value: 165.8
    }, {
      category: "Australia",
      value: 139.9
    }, {
      category: "Austria",
      value: 128.3
    }, {
      category: "UK",
      value: 99
    }]);

    series.appear(1000, 100);

  }); // end am5.ready()
  am5.ready(function() {

    // Create root element
    // https://www.amcharts.com/docs/v5/getting-started/#Root_element
    var root = am5.Root.new("maisVendido");


    // Set themes
    // https://www.amcharts.com/docs/v5/concepts/themes/
    root.setThemes([
      am5themes_Animated.new(root)
    ]);


    // Create chart
    // https://www.amcharts.com/docs/v5/charts/xy-chart/
    var chart = root.container.children.push(am5xy.XYChart.new(root, {
      panX: true,
      panY: true,
      wheelX: "panX",
      wheelY: "zoomX",
      pinchZoomX: true
    }));

    // Add cursor
    // https://www.amcharts.com/docs/v5/charts/xy-chart/cursor/
    var cursor = chart.set("cursor", am5xy.XYCursor.new(root, {}));
    cursor.lineY.set("visible", false);


    // Create axes
    // https://www.amcharts.com/docs/v5/charts/xy-chart/axes/
    var xRenderer = am5xy.AxisRendererX.new(root, {
      minGridDistance: 30
    });
    xRenderer.labels.template.setAll({
      rotation: -90,
      centerY: am5.p50,
      centerX: am5.p100,
      paddingRight: 15
    });

    var xAxis = chart.xAxes.push(am5xy.CategoryAxis.new(root, {
      maxDeviation: 0.3,
      categoryField: "country",
      renderer: xRenderer,
      tooltip: am5.Tooltip.new(root, {})
    }));

    var yAxis = chart.yAxes.push(am5xy.ValueAxis.new(root, {
      maxDeviation: 0.3,
      renderer: am5xy.AxisRendererY.new(root, {})
    }));


    // Create series
    // https://www.amcharts.com/docs/v5/charts/xy-chart/series/
    var series = chart.series.push(am5xy.ColumnSeries.new(root, {
      name: "Series 1",
      xAxis: xAxis,
      yAxis: yAxis,
      valueYField: "value",
      sequencedInterpolation: true,
      categoryXField: "country",
      tooltip: am5.Tooltip.new(root, {
        labelText: "{valueY}"
      })
    }));

    series.columns.template.setAll({
      cornerRadiusTL: 5,
      cornerRadiusTR: 5
    });
    series.columns.template.adapters.add("fill", function(fill, target) {
      return chart.get("colors").getIndex(series.columns.indexOf(target));
    });

    series.columns.template.adapters.add("stroke", function(stroke, target) {
      return chart.get("colors").getIndex(series.columns.indexOf(target));
    });

    <?php
    include 'db/conexao_produtos.php';
    $result = $db->find(
      [],
      [
        'sort' => ['qnt_vendida' => -1],
        'limit' => 10
      ]
    )->toArray();
    ?>

    // Set data
    var data = [
      <?php foreach ($result as $value) : ?> {

          country: "<?php echo $value['nome'] ?>",
          value: <?php echo $value['qnt_vendida'] ?>
        },
      <?php endforeach; ?>
    ];

    xAxis.data.setAll(data);
    series.data.setAll(data);


    // Make stuff animate on load
    // https://www.amcharts.com/docs/v5/concepts/animations/
    series.appear(1000);
    chart.appear(1000, 100);

  }); // end am5.ready()

  am5.ready(function() {

    // Create root element
    // https://www.amcharts.com/docs/v5/getting-started/#Root_element
    var root = am5.Root.new("maisEstoque");

    // Set themes
    // https://www.amcharts.com/docs/v5/concepts/themes/
    root.setThemes([
      am5themes_Animated.new(root)
    ]);

    // Create chart
    // https://www.amcharts.com/docs/v5/charts/percent-charts/pie-chart/
    var chart = root.container.children.push(
      am5percent.PieChart.new(root, {
        endAngle: 270
      })
    );

    // Create series
    // https://www.amcharts.com/docs/v5/charts/percent-charts/pie-chart/#Series
    var series = chart.series.push(
      am5percent.PieSeries.new(root, {
        valueField: "value",
        categoryField: "category",
        endAngle: 270
      })
    );

    series.labels.template.set(
      "text", "{category}: {value}");

    series.states.create("hidden", {
      endAngle: -90
    });

    // Set data
    // https://www.amcharts.com/docs/v5/charts/percent-charts/pie-chart/#Setting_data

    <?php
    include 'db/conexao_produtos.php';
    $result = $db->find()->toArray();
    ?>
    series.data.setAll([
      <?php foreach ($result as $value) : ?> {
          category: "<?php echo $value['nome'] ?>",
          value: <?php echo $value['estoque'] ?>
        },
      <?php endforeach; ?>
    ]);

    series.appear(1000, 100);

  }); // end am5.ready()

  am5.ready(function() {

    // Create root element
    // https://www.amcharts.com/docs/v5/getting-started/#Root_element
    var root = am5.Root.new("mediaVenda");

    // Set themes
    // https://www.amcharts.com/docs/v5/concepts/themes/
    root.setThemes([
      am5themes_Animated.new(root)
    ]);

    // Create chart
    // https://www.amcharts.com/docs/v5/charts/xy-chart/
    var chart = root.container.children.push(am5xy.XYChart.new(root, {
      panX: true,
      panY: true,
      wheelX: "panX",
      wheelY: "zoomX",
      pinchZoomX: true
    }));

    // Create axes
    // https://www.amcharts.com/docs/v5/charts/xy-chart/axes/
    var xRenderer = am5xy.AxisRendererX.new(root, {});
    xRenderer.grid.template.set("forceHidden", true);
    xRenderer.labels.template.setAll({
      multiLocation: 0,
      location: 0
    });

    var xAxis = chart.xAxes.push(am5xy.DateAxis.new(root, {
      baseInterval: {
        timeUnit: "minute",
        count: 1
      },
      renderer: xRenderer,
      tooltip: am5.Tooltip.new(root, {}),
      extraMin: 0.01,
      extraMax: 0.01,
      tooltipLocation: 0
    }));

    var yRenderer = am5xy.AxisRendererY.new(root, {});
    yRenderer.grid.template.set("forceHidden", true);

    var yAxis = chart.yAxes.push(am5xy.ValueAxis.new(root, {
      renderer: yRenderer
    }));

    // Add cursor
    // https://www.amcharts.com/docs/v5/charts/xy-chart/cursor/
    var cursor = chart.set("cursor", am5xy.XYCursor.new(root, {
      behavior: "none",
      xAxis: xAxis
    }));
    cursor.lineY.set("visible", false);

    // Add series
    // https://www.amcharts.com/docs/v5/charts/xy-chart/series/
    var series = chart.series.push(am5xy.LineSeries.new(root, {
      name: "Series",
      xAxis: xAxis,
      yAxis: yAxis,
      valueYField: "value",
      valueXField: "timestamp",
      locationX: 0,
      seriesTooltipTarget: "bullet",
      tooltip: am5.Tooltip.new(root, {
        labelText: "{valueY}"
      })
    }));

    series.bullets.push(function() {
      var circleTemplate = am5.Template.new({
        radius: 6,
        templateField: "bulletSettings",
        fill: series.get("fill"),
        strokeWidth: 2,
        stroke: root.interfaceColors.get("background")
      })

      var circle = am5.Circle.new(root, {}, circleTemplate);

      return am5.Bullet.new(root, {
        sprite: circle,
        locationX: 0
      });
    });

    function createGuide(value, text, dashArray) {
      var guideDataItem = yAxis.makeDataItem({
        value: value
      });
      yAxis.createAxisRange(guideDataItem);
      guideDataItem.get("grid").setAll({
        forceHidden: false,
        strokeOpacity: 0.2,
        strokeDasharray: dashArray
      });

      var label = guideDataItem.get("label");
      label.setAll({
        text: text,
        isMeasured: false,
        centerY: am5.p100
      });

      label.adapters.add("x", function(x) {
        return chart.plotContainer.width();
      })

      chart.events.on("boundschanged", function() {
        label.set("x", label.get("x"))
      })
    }


    createGuide(98.8, "LCL", [2, 2]);
    createGuide(100.1, "CL");
    createGuide(101.2, "UCL", [2, 2]);

    <?php
    include 'db/conexao_pedidos.php';
    $result = $db->find()->toArray();

    ?>
    var data = [
      <?php foreach ($result as $value) : ?> {
          <?php
          $ano = substr($value['data'], 6, 4);
          $mes = substr($value['data'], 3, 2);
          $dia = substr($value['data'], 0, 2);
          $hora = substr($value['data'], 11, 2);
          $minutos = substr($value['data'], 14, 2);
          $segundos = substr($value['data'], 17, 2);
          ?>
            "timestamp": new Date(<?php echo intval($ano) ?>, <?php echo intval($mes) ?>, <?php echo intval($dia) ?>, <?php echo intval($hora) ?>, <?php echo intval($minutos) ?>, <?php echo intval($segundos) ?>).getTime(),

            "value": <?php echo $value['valor'] ?>
        },
      <?php endforeach; ?>
    ];

    series.data.setAll(data);

    // Make stuff animate on load
    // https://www.amcharts.com/docs/v5/concepts/animations/
    series.appear(1000);
    chart.appear(1000, 100);

  });
</script>