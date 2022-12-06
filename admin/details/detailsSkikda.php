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
 WHERE previsions.mois LIKE'%$mois%' AND previsions.centre=2160 AND   previsions.parametre=1 AND previsions.anne='$ann' ";
$result = mysqli_query($conn,$reqt);
$parametres =$result->fetch_assoc();
 

$reqt2="SELECT SUM(realisation) AS reali1
 FROM realisation  
 WHERE realisation.mois LIKE'%$mois%' AND realisation.centre=2160 AND   realisation.parametre=1 AND realisation.anne='$ann' ";
$result1 = mysqli_query($conn,$reqt2);
$reli1=$result1->fetch_assoc();


$tr= ( $reli1['reali1']/$parametres['prev1'] ) * 100 ;
$tp=($tr * 40 )/100;
$tp = number_format($tp,2);
$tr = number_format($tr,2);
//*******************************Production Bitumes*************/

$reqt9="SELECT SUM(previsions) AS prev2
 FROM previsions 
 WHERE previsions.mois LIKE'%$mois%' AND previsions.centre=2160 AND  previsions.parametre=2 AND previsions.anne='$ann' ";
$resultp1 = mysqli_query($conn,$reqt9);
$parametres2 =$resultp1->fetch_assoc();

$reqt2="SELECT SUM(realisation) AS reali2
 FROM realisation  
 WHERE realisation.mois LIKE'%$mois%' AND realisation.centre=2160 AND   realisation.parametre=2 AND realisation.anne='$ann'";
$result2 = mysqli_query($conn,$reqt2);
$reli2=$result2->fetch_assoc();


$tr2= ( $reli2['reali2']/$parametres2['prev2'] ) * 100 ;
$tp2=  ( $tr2* 20)/100 ;
$tr2 = number_format($tr2,2);
$tp2 = number_format($tp2,2);
//*******************************Transfert Bitumes*************/

$reqt3="SELECT SUM(previsions) AS prev3
 FROM previsions  
 WHERE previsions.mois LIKE'%$mois%' AND previsions.centre=2160 AND   previsions.parametre=4 AND previsions.anne='$ann' ";
$resulttp1 = mysqli_query($conn,$reqt3);
$parametres3 =$resulttp1->fetch_assoc();

$reqt4="SELECT SUM(realisation) AS reali3
 FROM realisation  
 WHERE realisation.mois LIKE'%$mois%' AND realisation.centre=2160 AND   realisation.parametre=4 AND realisation.anne='$ann'";
$result3 = mysqli_query($conn,$reqt4);
$reli3=$result3->fetch_assoc();


$tr3= ( $reli3['reali3']/$parametres3['prev3'] ) * 100 ;
$tp3=( $tr3  * 15) /100;
$tr3 = number_format($tr3,2);
$tp3 = number_format($tp3,2);
/******************************************importation*************************** */

$reqt5="SELECT SUM(previsions) AS prev4
 FROM previsions  
 WHERE previsions.mois LIKE'%$mois%' AND previsions.centre=2160 AND   previsions.parametre=5 AND previsions.anne='$ann' ";
$resultim1 = mysqli_query($conn,$reqt5);
$parametres4 =$resultim1->fetch_assoc();

$reqt6="SELECT SUM(realisation) AS reali4
 FROM realisation  
 WHERE realisation.mois LIKE'%$mois%' AND realisation.centre=2160 AND   realisation.parametre=5 AND realisation.anne='$ann'";
$result4 = mysqli_query($conn,$reqt6);
$reli4=$result4->fetch_assoc();


$tr4= ( $reli3['reali4']/$parametres3['prev4'] ) * 100 ;
$tp4=( $tr4  * 15) /100;
$tr4 = number_format($tr4,2);
$tp4 = number_format($tp4,2);
//***********************Taux de rendement collectif*************************************/

$trc= $tp + $tp2 + $tp3 +$tp4 + 10 ;
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
        <td>40</td>  
        <td><?= $parametres['prev1'];?></td>  
        <td><?= $reli1['reali1']; ?></td>  
        <td><?php echo $tr ;?> %</td>  
        <td><?php echo $tp ;?> % </td>
    </tr>  
    <tr>  
        <td>Production Bitumes</td>  
        <td>20</td>  
        <td><?= $parametres2['prev2']; ?></td>  
        <td><?= $reli2['reali2']; ?></td>  
        <td><?php echo $tr2  ; ?> %</td>  
        <td><?php echo $tp2 ;?> % </td>
    </tr>  
    <tr>  
        <td>Transfert Bitumes</td>  
        <td>15</td>  
        <td><?= $parametres3['prev3']; ?></td>  
        <td><?= $reli3['reali3']; ?></td>  
        <td><?php echo $tr3 ;?> %</td>  
        <td><?php echo $tp3 ;?> %</td>
    </tr> 
    <tr>  
        <td>Importation Bitumes</td>  
        <td>15</td>  
        <td><?= $parametres4['prev4']; ?></td>  
        <td><?= $reli4['reali4']; ?></td>  
        <td><?php echo $tr4 ;?> %</td>  
        <td><?php echo $tp4 ;?> %</td>
    </tr> 

</table> 

<table class="t1">
    <tr>
        <th> note de sécurite</th>
        <th> pondérations</th>
        <th>Taux de rendement collectif du <br> : <?php echo $mois ?> , <?php echo $ann ?> </th>
    </tr>
    <tr>
        <td>10</td>
        <td>10</td>
        <td><?php echo $trc ;?> %</td>
    </tr>
</table>

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