<?php
include('C:/wamp64/www/projetPRC/admin/outils/navbarre.php');
?>
<section class="home">
  <div class="text">
  <?php
include('C:\wamp64\www\projetPRC\temps.php');

$query = "SELECT prc , code_centre , nom_centre
    FROM `prc` JOIN `centre`
    WHERE prc.centre = centre.code_centre 
    AND prc.mois LIKE'%$mois%' AND prc.anne='$ann' ";
$search_result = filterTable($query);


function filterTable($query)
{
    $connect = mysqli_connect("localhost", "root", "", "final");
    $filter_Result = mysqli_query($connect, $query);
    return $filter_Result;
}

?>
        <br>
            <div style="text-align: center; margin-top:50px; font-size: 25px;">
                <h4>Prime de rendement collectif monsuel</h4>
            </div>
        <table>
            <tr>
                <th>Code C.O</th>
                <th>Centres Opérationnels</th>
                <th>Taux PRC</th>
            </tr>

            <?php while ($row = mysqli_fetch_array($search_result)) : ?>
                <tr>
                    <td><?php echo $row['code_centre']; ?></td>
                    <td><?php echo $row['nom_centre']; ?></td>
                    <td><?php echo $row['prc']; ?>%</td>
                </tr>
            <?php endwhile; ?>
        </table>

        <div>
            <a href="/projetPRC/graphique.php" class="btn btn-white btn-animate" style="margin-left : 0%;">
                <h4>Afficher le graphique</h4>
                </a>
                &nbsp;
                <a href="/projetPRC/fpdf/ficheprc.php" class="btn btn-white btn-animate" style="margin-left : 40%;">
                <h4>Imprimer </h4>
                </a>
                
                <a href="/projetPRC/admin/bitume.php" class="btn btn-white btn-animate" style="margin-left : 80%;">
            <i class='bx bx-redo'></i>  
            </a>
        </div>
        <br>
        <br>
        <br><!--
        <div style="text-align: center;">
            <a href="/projetPRC/fpdf/ficheprc.php" class="btn btn-white btn-animate">
                <h4>Imprimer </h4>
            </a>
        </div>
        <br>
        <br>
        <br>
        <div style="margin-left : 900px;">
            <a href="/projetPRC/admin/bitume.php" class="btn btn-white btn-animate">
            <i class='bx bx-redo'></i>  
            </a>
        </div>-->
    </div>
    </div>
    </section>