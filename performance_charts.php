
<?php
require_once('conn.php');

?>

<?php

//$result=mysqli_query($myconn,"SELECT * FROM contribution");
$sql = "SELECT * FROM contribution";
$fire = mysqli_query($myconn,$sql); 


?>

<html>
  <head>

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['students','contribution'],
          <?php
          
              while ($result = mysqli_fetch_array($fire))
              // while($result=mysqli_fetch_array($result))

              {
                echo "['".$result["student"]."',".$result["contribution"]."],";
              }
          ?>
        ]);

        var options = {
          title: 'Students and Their Contribution'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }

    </script>
  </head>
  <body>
    
    <div id="piechart" style="width: 900px; height: 500px;"></div>
  </body>
</html>