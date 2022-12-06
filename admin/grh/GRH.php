<?php

/*if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT * FROM `users` WHERE CONCAT(`id_user`, `username`, `email`, `type`) LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($query);
    
}*/
// else {
$query = "SELECT * FROM `users`";
$search_result = filterTable($query);
//}

// function to connect and execute the query
function filterTable($query)
{
    $connect = mysqli_connect("localhost", "root", "", "final");
    $filter_Result = mysqli_query($connect, $query);
    return $filter_Result;
}

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

    <link rel="stylesheet" href="/projetPRC/admin/details/detail.css">
    <!----===== Boxicons CSS ===== -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>


    <style>

        .panel-heading {
            text-align: center;
            margin-top: auto;
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

        i {
            font-size: 2em;
        }

        a:link {
            text-decoration: none;
        }

        a:visited {
            text-decoration: none;
        }

        a:hover {
            text-decoration: none;
        }

        a:active {
            text-decoration: none;
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

    <section class="home">
        <div class="text">
             <div style="text-align: center; margin-top:12px; font-size: 25px;">
                <h4>Liste des utilisateurs</h4>
            </div>
            
            <table>
                <tr>
                    <th>Matricule</th>
                    <th>Nom </th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Actions</th </tr>

                    <?php while ($row = mysqli_fetch_array($search_result)) : ?>
                <tr>
                    <td>2200<?php echo $row['id_user']; ?>0</td>
                    <td><?php echo $row['username']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['type']; ?></td>
                    <td>
                        <a href="edituser.php?id=<?php echo $row['id_user'] ?>">
                            <i class='bx bxs-user-detail'></i>
                        </a>
                        &nbsp&nbsp
                        <a onclick='return confirm("Etes-vous sur ?")' href="supuser.php?id=<?php echo $row['id_user'] ?>">
                            <i class='bx bxs-user-minus'></i>
                        </a>

                    </td>
                </tr>
            <?php endwhile; ?>
            </table>
            <div class="text-box">
                <a href="/projetPRC/admin/grh/add_user.php" class="btn btn-white btn-animate">
                    <h4>ajouter un utilisateur </h4> </a>
            </div>

        </div>

        </div>
    </section>

    <script src="/projetPRC/admin/outils/script.js"></script>
</body>

</html>