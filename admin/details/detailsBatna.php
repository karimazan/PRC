<?php
include('C:/wamp64/www/projetPRC/admin/outils/navbarre.php');
?>
<section class="home">
        <div class="text">
    <?php


 include('C:\wamp64\www\projetPRC\temps.php');

/********************les requetes******************/
/**************vente bitume************************/
 $reqt="SELECT SUM(previsions) AS prev1
 FROM previsions  
 WHERE previsions.mois LIKE'%$mois%' AND previsions.centre=560 AND   previsions.parametre=1 AND previsions.anne='$ann' ";
$result = mysqli_query($conn,$reqt);
$parametres =$result->fetch_assoc();
 

$reqt2="SELECT SUM(realisation) AS reali1
 FROM realisation  
 WHERE realisation.mois LIKE'%$mois%' AND realisation.centre=460 AND   realisation.parametre=1 AND realisation.anne='$ann' ";
$result1 = mysqli_query($conn,$reqt2);
$reli1=$result1->fetch_assoc();


$tr= ( $reli1['reali1']/$parametres['prev1'] ) * 100 ;
$tp=($tr * 90 )/100;
$tp = number_format($tp,2);
$tr = number_format($tr,2);

//***********************Taux de rendement collectif*************************************/

$trc= $tp + $tp2 + $tp3 + 10 ;
/******************************prc****************************/

if( $trc < 80 ){ $prc = 0 ;}
if ( $trc == 80 ){ $prc = 10 ;}
if( 80 < $trc and $trc < 95){ $trc = 10 + (($trc -80) * 0.6 );}
if ( $trc == 95){ $prc = 20 ;}
if (95 < $trc and $trc < 100) { $prc = 20 + (( $trc -95) * 1 );}
if( $trc == 100){ $prc = 25;}
if (100< $trc and $trc < 120 ){ $prc = 25 + (( $trc -100) * 0.5);}
if ( $trc == 120 ){ $prc = 35 ;}
if ( $trc > 120 ){ $prc = 35 ;}


?>  
<div class="det" style=" margin-top:7%">   
<table>  
    <tr>  
        <th>Paramétres</th>  
        <th>Ponderations</th>
        <th>Prévisions</th>  
        <th>Réalisations</th> 
        <th>Taux de réalisations</th> 
        <th>Taux de rendement</th>
    </tr>  
    <tr>  
        <td>Ventes Bitumes</td>  
        <td>90</td>  
        <td><?= $parametres['prev1'];?></td>  
        <td><?= $reli1['reali1']; ?></td>  
        <td><?php echo $tr ;?> %</td>  
        <td><?php echo $tp ;?> % </td>
    </tr>  
</table> 

<table class="t1">
    <tr>
        <th> note de sécurite</th>
        <th> pondérations</th>
        <th>Taux de rendement collectif du  : <?php echo $mois ?> , <?php echo $ann ?> </th>
    </tr>
    <tr>
        <td>10</td>
        <td>10</td>
        <td><?php echo $trc ;?> %</td>
    </tr>

<table class="t2">
    <tr>
        <th>prime de rendement collectif : <?php echo $mois ?> , <?php echo $ann ?></th>
    </tr>
    <tr>
        <td><?php echo $prc ;?> %</td>
    </tr>
</table>
</div>
    </section>


    </div>
    </section> 