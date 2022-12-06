<?php
//require('/projetPRC/config.php');
$conn = mysqli_connect('localhost', 'root', '', 'final');
include('/wamp64/www/projetPRC/admin/outils/navbarre.php');
if (isset($_REQUEST['username'], $_REQUEST['email'], $_REQUEST['type'], $_REQUEST['password'])) {
  // récupérer le nom d'utilisateur 
  $username = stripslashes($_REQUEST['username']);
  $username = mysqli_real_escape_string($conn, $username);
  // récupérer l'email 
  $email = stripslashes($_REQUEST['email']);
  $email = mysqli_real_escape_string($conn, $email);
  // récupérer le mot de passe 
  $password = stripslashes($_REQUEST['password']);
  $password = mysqli_real_escape_string($conn, $password);
  // récupérer le type (user | admin)
  $type = stripslashes($_REQUEST['type']);
  $type = mysqli_real_escape_string($conn, $type);

  $query = "INSERT into `users` (username, email, type, password)
          VALUES ('$username', '$email', '$type', '" . hash('sha256', $password) . "')";
  $res = mysqli_query($conn, $query);

  if ($res) {
    echo "<div class='sucess'>
             <h3>L'utilisateur a été créée avec succés.</h3>
             <p>Cliquez <a href='home.php'>ici</a> pour retourner à la page d'accueil</p>
       </div>";
  }
} else {
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
      /* ===== formulaire ===== */

      input[type=text],input[type=password],
      select {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
      }
      
      input[type=submit] {
        width: 100%;
        background-color: #695CFE;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        border-radius: 4px;
        cursor: pointer;
      }

      input[type=submit]:hover {
        background-color: #695CFE;
      }

      h1{
        text-align: center;
      }
    </style>



    <title></title>
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
        <form action="" method="post">
          <br>
          <div style="text-align: center; font-size: 25px;">
                <h4>Ajouter un nouveau utilisateur </h4>
            </div>
          <br>
          <br>
          <input type="text" name="username" placeholder="Nom d'utilisateur" required />
          <input type="text" name="email" placeholder="Email" required />
          <div>
            <select name="type" id="type">
              <option value="" disabled selected>Type</option>
              <option value="admin">Admin</option>
              <option value="user">User</option>
            </select>
          </div>

          <input type="password" name="password" placeholder="Mot de passe" required />
          <input type="submit" name="submit" value="Ajouter" />
        </form>
        <br><br>
        <div style="margin-left :80%;">
            <a href="/projetPRC/admin/grh/GRH.php" class="btn btn-white btn-animate">
            <i class='bx bx-redo'></i>  
            </a>
        </div>
      <?php } ?>
      </div>
    </section>
 
    </div>
    </section>

    <script src="/projetPRC/admin/outils/script.js"></script>

  </body>

  </html>