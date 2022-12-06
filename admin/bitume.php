<?php

error_reporting(0);
$conn = mysqli_connect('localhost', 'root', '', 'pfe');

?>
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
        
.homeb{
    position: absolute;
    top: 0;
    top: 0;
    left: 250px;
    height: 100vh;
    width: calc(100% - 250px);
    background-color: var(--body-color);
    transition: var(--tran-05);
    
}
.homeb .text {
    font-size: smaller;
    font-weight: 200;
    color: var(--text-color);
    padding: 12px 60px;
}

.sidebar.close ~ .homeb{
    left: 78px;
    height: 100vh;
    width: calc(100% - 78px);
}
body.dark .homeb .text{
    color: var(--text-color);
}
        /* inner containers */

        .homeb .inner-containers {
            /*display: grid;*/
            grid-template-columns: 1fr 2fr;
            /*grid-gap: 3rem;*/
            padding: 0 3rem;
            align-items: self-start;
            display: flex;
            flex-wrap: wrap;
        }

        /* inner container 1 */

        .homeb .inner-container-1 {
            /*display: grid;
            grid-gap: 5rem;*/
            display: flex;
            flex-wrap: wrap;
            grid-template-columns: 100px 100px;
            margin-top: 50px;
            margin: 10px;
        }

        .homeb .inner-container-1 .card-1 {
            position: relative;
            background-color: #fff;
            border-radius: 10px;
            padding: 60px;
            box-shadow: 0 4px 25px 0 rgba(0, 0, 0, .1);
            cursor: pointer;
            height: 100px;
        }

        .homeb .inner-container-1 .card-1:hover {
            box-shadow: 0 4px 15px 0 rgba(0, 0, 0, .2);
        }


        .homeb .inner-container-1 .card-1 h4 {
            position: absolute;
            bottom: 1rem;
            left: 1rem;
            color: #949da7;
        }


        .btn:link,
        .btn:visited {
            text-transform: uppercase;
            text-decoration: none;
            padding: 15px 40px;
            display: inline-block;
            border-radius: 100px;
            transition: all .2s;
            position: absolute;
        }

        .btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        }

        .btn:active {
            transform: translateY(-1px);
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
        }

        .btn-white {
            background-color: #fff;
            color: #777;
        }

        .btn::after {
            content: "";
            display: inline-block;
            height: 100%;
            width: 100%;
            border-radius: 100px;
            position: absolute;
            top: 0;
            left: 0;
            z-index: -1;
            transition: all .4s;
        }

        .btn-white::after {
            background-color: #fff;
        }

        .btn:hover::after {
            transform: scaleX(1.4) scaleY(1.6);
            opacity: 0;
        }

        .btn-animated {
            animation: moveInBottom 5s ease-out;
            animation-fill-mode: backwards;
        }

        @keyframes moveInBottom {
            0% {
                opacity: 0;
                transform: translateY(30px);
            }

            100% {
                opacity: 1;
                transform: translateY(0px);
            }
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




    <section class="homeb">
        <div class="text">
        <br>
            <div style="text-align: center; margin-top:50px; font-size: 25px;">
                <h4>Centres Bitumes</h4>
            </div>
            
            <div class="cop">
                <div class="inner-containers">

                    <div class="inner-container-1">
                        <div class="card-1">
                            <a href="/projetPRC/admin/details/detailsOEB.php">
                                <h4>OUM EL BOUAGHI</h4>
                            </a>
                        </div>
                    </div>

                    <div class="inner-container-1">
                        <div class="card-1">
                            <a href="/projetPRC/admin/details/detailsBatna.php">
                                <h4>BATNA</h4>
                            </a>
                        </div>
                    </div>

                    <div class="inner-container-1">
                        <div class="card-1">
                            <a href="/projetPRC/admin/details/detailsBja.php">
                                <h4>BEJAIA</h4>
                            </a>
                        </div>
                    </div>
                    <div class="inner-container-1">
                        <div class="card-1">
                            <a href="/projetPRC/admin/details/detailsAinSefra.php">
                                <h4> AIN SEFRA</h4>
                            </a>
                        </div>
                    </div>

                    <div class="inner-container-1">
                        <div class="card-1">
                            <a href="/projetPRC/admin/details/detailsInSalah.php">
                                <h4>IN SALAH</h4>
                            </a>
                        </div>
                    </div>

                    <div class="inner-container-1">
                        <div class="card-1">
                            <a href="/projetPRC/admin/details/detailsAlger.php">
                                <h4>ALGER</h4>
                            </a>
                        </div>
                    </div>

                    <div class="inner-container-1">
                        <div class="card-1">
                            <a href="/projetPRC/admin/details/detailsElEulma.php">
                                <h4>El Eulma</h4>
                            </a>
                        </div>
                    </div>

                    <div class="inner-container-1">
                        <div class="card-1">
                            <a href="/projetPRC/admin/details/detailsSkikda.php">
                                <h4>SKIKDA</h4>
                            </a>
                        </div>
                    </div>

                    <div class="inner-container-1">
                        <div class="card-1">
                            <a href="/projetPRC/admin/details/detailsAnnaba.php">
                                <h4>ANNABA</h4>
                            </a>
                        </div>
                    </div>

                    <div class="inner-container-1">
                        <div class="card-1">
                            <a href="/projetPRC/admin/details/detailsmousta.php">
                                <h4>MOSTAGANEM</h4>
                            </a>
                        </div>
                    </div>

                    <div class="inner-container-1">
                        <div class="card-1">
                            <a href="/projetPRC/admin/details/detailstgrt.php">
                                <h4>TOUGGOURT</h4>
                            </a>
                        </div>
                    </div>

                    <div class="inner-container-1">
                        <div class="card-1">
                            <a href="/projetPRC/admin/details/detailsOran.php">
                                <h4>ORAN</h4>
                            </a>
                        </div>
                    </div>

                    <div class="inner-container-1">
                        <div class="card-1">
                            <a href="/projetPRC/admin/details/detailAinDefla.php">
                                <h4>AIN DEFLA</h4>
                            </a>
                        </div>
                    </div>

                    <div class="inner-container-1">
                        <div class="card-1">
                            <a href="/projetPRC/admin/details/detailGrdya.php">
                                <h4>GHARDAIA</h4>
                            </a>
                        </div>
                    </div>

                    <div class="inner-container-1">
                        <div class="card-1">
                            <a href="/projetPRC/admin/details/detailsTmnrst.php">
                                <h4>Tamanrasset</h4>
                            </a>
                        </div>
                    </div>

                </div>
                <br>

                <div>
                    <a href="PRC.php" class="btn btn-white btn-animate" style="margin-left : 40%;">
                        <h4>Prime de rendement collectif mensuel </h4>
                    </a>
                </div>
                <div style="margin-left : 80%;">
            <a href="/projetPRC/admin/Centreop.php" class="btn btn-white btn-animate">
            <i class='bx bx-redo'></i>  
            </a>
        </div>
    </section>

    </div>

    <script src="/projetPRC/admin/outils/script.js"></script>
</body>

</html>