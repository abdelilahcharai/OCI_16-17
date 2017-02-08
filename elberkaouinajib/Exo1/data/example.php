<html>
<div id="chartContainer">
    <script src="http://d3js.org/d3.v4.min.js"></script>
    <script src="http://dimplejs.org/dist/dimple.v2.3.0.min.js"></script>
    <script type="text/javascript">
        var svg = dimple.newSvg("#chartContainer", 590, 400);
        d3.tsv("example_data.tsv", function (data) {
            var myChart = new dimple.chart(svg, data);
            myChart.setBounds(60, 45, 510, 315)
            myChart.addCategoryAxis("x", ["Price Tier", "Channel"]);
            myChart.addMeasureAxis("y", "Unit Sales");
            myChart.addSeries("Owner", dimple.plot.bar);
            myChart.addLegend(200, 10, 380, 20, "right");
            myChart.draw();
        });
    </script>
</div>
</html>