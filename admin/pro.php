<?php

error_reporting(0);

$conn = mysqli_connect('localhost', 'root', '', 'final');
$reqt = "SELECT * FROM users ";
$result = mysqli_query($conn, $reqt);
$parametres = $result->fetch_assoc();
include_once('./outils/navbarre.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>

    <!-- ===== ===== Custom Css ===== ===== -->
    <link rel="stylesheet" href="/projetPRC/admin/pro.css">
    <link rel="stylesheet" href="/projetPRC/admin/prof.css">
    <link rel="stylesheet" href="/projetPRC/admin/outils/style.css">

    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <!-- ===== ===== Remix Font Icons Cdn ===== ===== -->
    <link rel="stylesheet" href="fonts/remixicon.css">
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

                        <i class='bx bxs-chevron-down'></i>
                        <div class="dropdown-container">
                            <a href="/projetPRC/admin/grh/GRH.php">liste des utilisateurs</a></div>
                        <div class="dropdown-container">
                            <a href="/projetPRC/admin/grh/add_user.php">Ajouter un utilisateur</a></div>
                        

                    </li>

                    <li class="nav-link">
                        <a href="/projetPRC/admin/Centreop.php">
                            <i class='bx bx-sitemap icon'></i>
                            <span class="text nav-text">Centres operationnels</span>
                        
                        </a>
                        <i class='bx bxs-chevron-down'></i>
                        <div class="dropdown-container">
                            <a href="/projetPRC/admin/Centreop.php">les 4 types des centres</a></div>
                        <div class="dropdown-container">
                            <a href="/projetPRC/admin/bitume.php">Centre bitume</a></div>
                        
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

            <a href="/projetPRC/admin/pro.php">
                <img src="/projetPRC/admin/outils/image/woman.png" alt="">
            </a>
        </div>
    </section>
    <section class="home" style="top: 50px;">
  <div class="text">
    <!-- ===== ===== Body Main-Background ===== ===== -->
    <span class="main_bg"></span>


    <!-- ===== ===== Main-Container ===== ===== -->
    <div class="container">

        <!-- ===== ===== User Main-Profile ===== ===== -->
        <section class="userProfile card">
            <div class="profile">
                <figure><img src="/projetPRC/admin/outils/image/woman.png" alt="profile" width="250px" height="250px"></figure>
            </div>
        </section>


        <!-- ===== ===== Work & Skills Section ===== ===== -->
        <section class="work_skills card">

            
            <!-- ===== ===== Skills Contaienr ===== ===== -->
            <div class="skills">
                <h1 class="heading">Compétences</h1>
                <ul>
                    <li style="--i:0">Comptabilité</li>
                    <li style="--i:1">GRH</li>
                    <li style="--i:2">Excel</li>
                    
                </ul>
            </div>
        </section>


        <!-- ===== ===== User Details Sections ===== ===== -->
        <section class="userDetails card">
            <div class="userName">
                <h1 class="name"> <?= $parametres['username'];?></h1>
                
                <p><?= $parametres['type']; ?></p>
            </div>

            <div class="rank">
                <h1 class="heading"></h1>
                <div class="map">
                    <i class="ri-map-pin-fill ri"></i>
                    <span>Direction étude et planification</span>
                </div>
                <span></span>
                
                <div class="rating">
                    <i class="ri-star-fill rate"></i>
                    <i class="ri-star-fill rate"></i>
                    <i class="ri-star-fill rate"></i>
                    <i class="ri-star-fill rate"></i>
                    <i class="ri-star-fill rate underrate"></i>
                </div>
            </div>

            <div class="btns">
                <ul>
                    

                    <li class="sendMsg active">
                        <i class="ri-check-fill ri"></i>
                        <a href="#">Informations personnel</a>
                    </li>

                    
                </ul>
            </div>
        </section>


        <!-- ===== ===== Timeline & About Sections ===== ===== -->
        <section class="timeline_about card">
            <div class="tabs">
                <ul>
                    
                    <li class="about active">
                        <i class="ri-user-3-fill ri"></i>
                        <span>Infos</span>
                    </li>
                </ul>
            </div>

            <div class="contact_Info">
                <h1 class="heading"></h1>
                <ul>
                    <li class="phone">
                        <h1 class="label">Tel :</h1>
                        <span class="info">0555681247</span>
                    </li>

                    <li class="email">
                        <h1 class="label">E-mail :</h1>
                        <span class="info"><?= $parametres['email']; ?></span>
                    </li>

                    <li class="site">
                        <h1 class="label">Matricule :</h1>
                        <span class="info"> 2200<?= $parametres['id_user']; ?>0</span>
                    </li>
                    <li class="sex">
                        <h1 class="label">Gener:</h1>
                        <span class="info">Femme</span>
                    </li>
                </ul>
            </div>

        
        </section>
    </div>
    </div>
    </section>

    <script src="/projetPRC/admin/outils/script.js"></script>
</body>

</html>
