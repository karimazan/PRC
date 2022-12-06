
<?php 
		require('C:\wamp64\www\projetPRC\config.php');
		
		
		$id_udser=$_GET['id'];
		
		$requete="DELETE FROM users where id_user=$id_udser";		
        $result = mysqli_query($conn,$requete);
        //$parametres =$result->fetch_assoc();    
		
		
		$msg= "Utilisateur Supprimé avec sucées";
		$url= "C:/wamp64/www/projetPRC/admin/grh/GRH.php";		
		
					
?>
<section class="home">
   <div class="text">
   <div class="sucess" style=" font-size:  2.2em ; font-weight: lighter; margin-top:20%;">
	<?php 
	echo "<script> alert('$msg') </script>";
	
	
	?>
	</div>
   </div>
</section>