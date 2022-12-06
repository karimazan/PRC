<?php
include('C:/wamp64/www/projetPRC/admin/outils/navbarre.php');
?>
<section class="home">
  <div class="text">
    <?php
    $con = new mysqli('localhost', 'root', '', 'final');
    include('C:\wamp64\www\projetPRC\temps.php');

    $query = $con->query("SELECT prc as prime, code_centre , nom_centre as centre
  FROM `prc` JOIN `centre`
  WHERE prc.centre = centre.code_centre 
  AND prc.mois LIKE'%$mois%' AND prc.anne='$ann' ");

    foreach ($query as $data) {
      $centre[] = $data['centre'];
      $prime[] = $data['prime'];
    }

    ?>


    <div style="width: 800px;">
      <canvas id="myChart"></canvas>
    </div>

    <script>
      // === include 'setup' then 'config' above ===
      const labels = <?php echo json_encode($centre) ?>;
      const data = {
        labels: labels,
        datasets: [{
          label: 'PRC centres bitume',
          data: <?php echo json_encode($prime)  ?>,
          backgroundColor: [
            'rgba(255, 99, 132, 0.2)',
            'rgba(255, 159, 64, 0.2)',
            'rgba(255, 205, 86, 0.2)',
            'rgba(75, 192, 192, 0.2)',
            'rgba(54, 162, 235, 0.2)',
            'rgba(153, 102, 255, 0.2)',
            'rgba(201, 203, 207, 0.2)'
          ],
          borderColor: [
            'rgb(255, 99, 132)',
            'rgb(255, 159, 64)',
            'rgb(255, 205, 86)',
            'rgb(75, 192, 192)',
            'rgb(54, 162, 235)',
            'rgb(153, 102, 255)',
            'rgb(201, 203, 207)'
          ],
          borderWidth: 1
        }]
      };

      const config = {
        type: 'bar',
        data: data,
        options: {
          scales: {
            y: {
              beginAtZero: true
            }
          }
        },
      };

      var myChart = new Chart(
        document.getElementById('myChart'),
        config
      );
    </script>
  </div>
  <div style="margin-left : 80%;">
            <a href="/projetPRC/admin/PRC.php" class="btn btn-white btn-animate">
            <i class='bx bx-redo'></i>  
            </a>
        </div>
</section>