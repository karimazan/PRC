<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous" />

    <!----======== CSS ======== -->
    <link rel="stylesheet" href="/projetPRC/admin/outils/style.css">
    <link rel="stylesheet" href="/projetPRC/admin/agenda/stylee.css">


    <!----===== Boxicons CSS ===== -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>


    <title>Agenda en PHP</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="/projetPRC/admin/agenda/style.css" rel="stylesheet" type="text/css" />
</head>
<?php
$list_fer = array(5, 6); //Liste pour les jours ferié; EX: $list_fer=array(7,1)==>tous les dimanches et les Lundi seront des jours fériers
$list_spe = array('2022-06-1', '2009-4-12', '2009-9-23'); //Mettez vos dates des evenements ; NB format(annee-m-j)
$lien_redir = "date_info.php"; //Lien de redirection apres un clic sur une date, NB la date selectionner va etre ajouter à ce lien afin de la récuperer ultérieurement 
$clic = 1; //1==>Activer les clic sur tous les dates; 2==>Activer les clic uniquement sur les dates speciaux; 3==>Désactiver les clics sur tous les dates
$col1 = "#695CFE"; //couleur au passage du souris pour les dates normales
$col2 = "#8af5b5"; //couleur au passage du souris pour les dates speciaux
$col3 = "#6a92db"; //couleur au passage du souris pour les dates férié
$mois_fr = array("", "Janvier", "Février", "Mars", "Avril", "Mai", "Juin", "Juillet", "Août", "Septembre", "Octobre", "Novembre", "Décembre");
if (isset($_GET['mois']) && isset($_GET['annee'])) {
    $mois = $_GET['mois'];
    $annee = $_GET['annee'];
} else {
    $mois = date("n");
    $annee = date("Y");
}
$ccl2 = array($col1, $col2, $col3);
$l_day = date("t", mktime(0, 0, 0, $mois, 1, $annee));
$x = date("N", mktime(0, 0, 0, $mois, 1, $annee));
$y = date("N", mktime(0, 0, 0, $mois, $l_day, $annee));
$titre = $mois_fr[$mois] . " : " . $annee;
//echo $l_day;
?>

<body>
    <nav class="sidebar close">
        <header>
            <div class="image-text">
                <span class="image">
                    <img src="/projetPRC/admin/outils/image/naftal_logo.jpeg" alt="">
                </span>

                <div class="text logo-text">
                    <span class="name">Naftal</span>
                </div>
            </div>

            <i class='bx bx-chevron-right toggle'></i>
        </header>

        <div class="menu-bar">
            <div class="menu">
                <!--
                <li class="search-box">
                    <i class='bx bx-search icon'></i>
                    <input type="text" placeholder="Search...">
                </li>
                -->
                <ul class="menu-links">
                    <li class="nav-link">
                        <a href="/projetPRC/admin/home.php">
                            <i class='bx bx-home-alt icon'></i>
                            <span class="text nav-text">Tableau de bord</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="/projetPRC/admin/grh/GRH.php">
                            <i class='bx bxs-group icon'></i>
                            <span class="text nav-text">G.R.H</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="/projetPRC/admin/Centreop.php">
                            <i class='bx bx-sitemap icon'></i>
                            <span class="text nav-text">Centres operationnels</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="/projetPRC/admin/agenda/agenda.php">
                            <i class='bx bx-time-five icon'></i>
                            <span class="text nav-text">Calendrier</span>
                        </a>
                    </li>

                </ul>
            </div>

            <div class="bottom-content">
                <li class="">
                    <a href="/projetPRC/logout.php">
                        <i class='bx bx-log-out icon'></i>
                        <span class="text nav-text">Logout</span>
                    </a>
                </li>

                <li class="mode">
                    <div class="sun-moon">
                        <i class='bx bx-moon icon moon'></i>
                        <i class='bx bx-sun icon sun'></i>
                    </div>
                    <span class="mode-text text">Dark mode</span>

                    <div class="toggle-switch">
                        <span class="switch"></span>
                    </div>
                </li>

            </div>
        </div>

    </nav>

    <section class="dashboard">
        <div class="top">


            <div class="search-box">
                <h4> Naftal S.P.A </h4>
                <p> Branche commercialisation</p>
            </div>
            <h4>Direction Etude et Planification</h4>

            <a href="/projetPRC/admin/profil.php">
                <img src="/projetPRC/admin/outils/image/woman.png" alt="">
            </a>
        </div>
    </section>

    <section class="home">
        <div class="text">
            <center>
                <form name="dt" method="get" action="">
                    <select name="mois" id="mois" onChange="change()" class="liste">
                        <?php
                        for ($i = 1; $i < 13; $i++) {
                            echo '<option value="' . $i . '"';
                            if ($i == $mois)
                                echo ' selected ';
                            echo '>' . $mois_fr[$i] . '</option>';
                        }
                        ?>
                    </select>
                    <select name="annee" id="annee" onChange="change()" class="liste">
                        <?php
                        for ($i = 1950; $i < 2035; $i++) {
                            echo '<option value="' . $i . '"';
                            if ($i == $annee)
                                echo ' selected ';
                            echo '>' . $i . '</option>';
                        }
                        ?>
                    </select>
                </form>
                <table class="tableau">
                    <caption><?php echo $titre; ?></caption>
                    <tr>
                        <th>Lun</th>
                        <th>Mar</th>
                        <th>Mer</th>
                        <th>Jeu</th>
                        <th>Ven</th>
                        <th>Sam</th>
                        <th>Dim</th>
                    </tr>
                    <tr>
                        <?php
                        //echo $y;
                        $case = 0;
                        if ($x > 1)
                            for ($i = 1; $i < $x; $i++) {
                                echo '<td class="desactive">&nbsp;</td>';
                                $case++;
                            }
                        for ($i = 1; $i < ($l_day + 1); $i++) {
                            $f = $y = date("N", mktime(0, 0, 0, $mois, $i, $annee));
                            $da = $annee . "-" . $mois . "-" . $i;
                            $lien = $lien_redir;
                            $lien .= "?dt=" . $da;
                            echo "<td";
                            if (in_array($da, $list_spe)) {
                                echo " class='special' onmouseover='over(this,1,2)'";
                                if ($clic == 1 || $clic == 2)
                                    //echo " onclick='go_lien(\"$lien\")' "
                                ;
                            } else if (in_array($f, $list_fer)) {
                                echo " class='ferier' onmouseover='over(this,2,2)'";
                                if ($clic == 1)
                                    //echo " onclick='go_lien(\"$lien\")' "
                                ;
                            } else {
                                echo " onmouseover='over(this,0,2)' ";
                                if ($clic == 1)
                                    //echo " onclick='go_lien(\"$lien\")' "
                                ;
                            }
                            echo " onmouseout='over(this,0,1)'>$i</td>";
                            $case++;
                            if ($case % 7 == 0)
                                echo "</tr><tr>";
                        }
                        if ($y != 7)
                            for ($i = $y; $i < 7; $i++) {
                                echo '<td class="desactive">&nbsp;</td>';
                            }
                        ?></tr>
                </table>
            </center>


        </div>
    </section>

<script type="text/javascript">
    function change() {
        document.dt.submit();
    }

    function over(this_, a, t) {
        <?php
        echo "var c2=['$ccl2[1]','$ccl2[1]','$ccl2[2]'];";
        ?>
        var col;
        if (t == 2)
            this_.style.backgroundColor = c2[a];
        else
            this_.style.backgroundColor = "";
    }

    function go_lien(a) {
        top.document.location = a;
    }
</script>
<script src="/projetPRC/admin/outils/script.js"></script>
</body>

</html>