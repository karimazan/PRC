<?php
require('C:\wamp64\www\projetPRC\config.php');
include("/wamp64/www/projetPRC/admin/outils/navbarre.php");
$id = $_GET['id'];

$requete = "select * from users where id_user=$id";
$result = mysqli_query($conn, $requete);
$utilisateur = $result->fetch_assoc();
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

		input[type=text],
		input[type=password],
		input[type=email],
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

		h1 {
			text-align: center;
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
			<br>

			<div class="container col-md-6 col-md-offset-3">

				<div class="panel panel-danger">
					<br>
					<h1>Modifier l'utilisateur <?php echo $utilisateur['username'] ?></h1>
					<div class="panel-body">
<br>
<br>
						<form class="form" action="update_user.php" method="post">

							<input type="hidden" name="id_udser" value="<?php echo $utilisateur['id_user'] ?>">

							<div class="form-group">
								
								<input type="text" name="login" id="login" class="form-control" value=" <?php echo $utilisateur['username'] ?> ">
							</div>


							<div class="form-group">
								
								<select class="form-control" name="role">

									<option <?php if ($utilisateur['type'] == 'user')
												echo 'selected'
											?>>
										user
									</option>

									<option <?php if ($utilisateur['type'] == 'admin')
												echo 'selected'
											?>>
										admin
									</option>

								</select>

							</div>


							<div class="form-group">
								
								<input type="password" name="pwd" id="pwd" class="form-control" placeholder="mot de passe">
							</div>

							<div class="form-group">
			
								<input type="email" name="email" autocomplete="off" id="email" class="form-control" required value="<?php echo $utilisateur['email'] ?> " >
							</div>

							<input type="submit" value="Enregistrer" class="btn btn-success">

						</form>
					</div>
				</div>

			</div>
			<br><br>
        <div style="margin-left :80%;">
            <a href="/projetPRC/admin/grh/GRH.php" class="btn btn-white btn-animate">
            <i class='bx bx-redo'></i>  
            </a>
        </div>
		</div>
	</section>

	<script src="/projetPRC/admin/outils/script.js"></script>

</body>

</html>