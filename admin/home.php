<?php
// Initialiser la session
session_start();
// Vérifiez si l'utilisateur est connecté, sinon redirigez-le vers la page de connexion
if (!isset($_SESSION["username"])) {
  header("Location: login.php");
  exit();
}
include_once('./outils/navbarre.php');
?>
<section class="home">
  <div class="text">

    <div style="text-align: center; margin-top:12px; font-size: 25px;">
      <h4>Bienvenue <?php echo $_SESSION['username']; ?>!</h4>
      <p>C'est votre espace admin.</p>


    </div>

  </div>
</section>