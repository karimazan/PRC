<?php
error_reporting(0);

$conn = mysqli_connect('localhost', 'root', '', 'final');


if (isset($_GET['mois']))
	$mois = $_GET['mois'];
else $mois = "";
if (isset($_GET['an']))
	$ann = $_GET['an'];
else $ann = "";
/*include('admin\outils\navbarre.php');*/
?>
<section class="homet">
	<div class="textt">
		<div class="tem" style=" margin-top:5%">
			<div>

				<div>
					<div>
						<form>
							<label style="margin-left:19%; ">choisissez le mois et l'année : </label>
							<select name="mois">
								<option value="" >mois</option>
								<option value="janvier" <?php if ($niveau == "janvier")  echo "selected" ?>>janvier</option>
								<option value="fevrier" <?php if ($niveau == "2")  echo "selected" ?>>fevrier</option>
								<option value="mars" <?php if ($niveau == "mars")  echo "selected" ?>>mars</option>
								<option value="avril" <?php if ($niveau == "avril") echo "selected" ?>>avril</option>
								<option value="mai" <?php if ($niveau == "mai") echo "selected" ?>>mai</option>
								<option value="juin" <?php if ($niveau == "juin")  echo "selected" ?>>juin</option>
								<option value="juillet" <?php if ($niveau == "juillet")  echo "selected" ?>>juillet</option>
								<option value="aout" <?php if ($niveau == "aout")  echo "selected" ?>>aout</option>
								<option value="septembre" <?php if ($niveau == "septembre")  echo "selected" ?>>septembre</option>
								<option value="octobre" <?php if ($niveau == "octobre") echo "selected" ?>>octobre</option>
								<option value="novembre" <?php if ($niveau == "novembre") echo "selected" ?>>novembre</option>
								<option value="decembre" <?php if ($niveau == "decembre") echo "selected" ?>>decembre</option>
							</select>
							<select name="an">
								<option value="">année</option>
								<option value="2021" <?php if ($niveau == "2021")  echo "selected" ?>>2021</option>
								<option value="2022" <?php if ($niveau == "2022")  echo "selected" ?>>2022</option>
							</select>

							<input type="submit" value="Rechercher">
						</form>
					</div>
				</div>
			</div>
		</div>
	
	</div>
</section>

