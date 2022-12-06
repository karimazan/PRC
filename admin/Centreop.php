<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous" />

    <!----======== CSS ======== -->
    <link rel="stylesheet" href="/projetPRC/admin/outils/style.css">

    <!----===== Boxicons CSS ===== -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <style>
        /* inner container 1 */

        .homeC .inner-container-1 {
            display: grid;
            grid-template-columns: 20ch auto;
            grid-gap: 5rem;
            margin-top: 60px;
            margin-left: 2%;
        }

        .homeC .inner-container-1 .card-1 {
            position: relative;
            background-color: #fff;
            border-radius: 10px;
            padding: 1rem;
            box-shadow: 0 4px 25px 0 rgba(0, 0, 0, .1);
            cursor: pointer;
            height: 100px;
        }

        .homeC .inner-container-1 .card-1:hover {
            box-shadow: 0 4px 15px 0 rgba(0, 0, 0, .2);
        }


        .homeC .inner-container-1 .card-1 h4 {
            position: absolute;
            bottom: 1rem;
            left: 1rem;
            color: #949da7;
            font-size: large;
        }
    </style>
</head>

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


    <section class="homeC">
  
        <div class="text">
        <br>
            <div style="text-align: center; margin-top:50px; font-size: 25px;">
                <h4>Centres opérationnels  </h4>
            </div>

            <div class="cop">
                <div class="inner-containers">
                    <div class="inner-container-1">
                        <div class="card-1">
                            <a href="/projetPRC/admin/bitume.php">
                                <h4>Bitume</h4>
                            </a>
                        </div>


                        <div class="inner-container-1">
                            <div class="card-1">
                                <a href="#">
                                    <h4>Carburant</h4>
                                </a>
                            </div>


                            <div class="inner-container-1">
                                <div class="card-1">
                                    <a href="#">
                                        <h4>Lubrifiant</h4>
                                    </a>
                                </div>


                                <div class="inner-container-1">
                                    <div class="card-1">
                                        <a href="#">
                                            <h4>Réseaux</h4>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
    </section>
    <script src="/projetPRC/admin/outils/script.js"></script>
</body>

</html>