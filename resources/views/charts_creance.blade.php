<html>
    <head>
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    
        <script type="text/javascript">
            google.charts.load('current', {'packages':['bar']});
            google.charts.setOnLoadCallback(drawStuff);
      
            function drawStuff() {
              var data = new google.visualization.arrayToDataTable([
                ['District', 'Total'],
                <?php echo $chartCreance ?>
                    ]);
      
              var options = {
                title: 'Creance par district',
                width: 900,
                legend: { position: 'none' },
                chart: { title: 'Créance par district',
                         subtitle: 'Total créance' },
                bars: 'horizontal', // Required for Material Bar Charts.
                axes: {
                  x: {
                    0: { side: 'top', label: 'Total'} // Top x-axis.
                  }
                },
                bar: { groupWidth: "90%" }
              };
      
              var chart = new google.charts.Bar(document.getElementById('top_x_div'));
              chart.draw(data, options);
            };
          </script>
    </head>
</html>