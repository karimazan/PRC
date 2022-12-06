
<?php 
$pdo = new PDO("mysql: host=localhost;	dbname=final",	"root", "");
//echo "connexion :OK";
		
		
		$id_udser=$_POST['id_udser'];
		$login=$_POST['login'];
		$pwd=$_POST['pwd'];
		
		if(isset($_POST['role']))
			$role=$_POST['role']; 
		else
			$role='user';
			
		$email=$_POST['email'];
        /**************fonction********************** */

        //Recherche par login et id
function recherche_user_byLoginId($login, $id)
{
     global $pdo;
    $req = $pdo->prepare("select * from users where username=? and id_user!=?");
    
    $valeur = array($login, $id);
    $req->execute($valeur);
    $nbr_user = $req->rowCount();
    return $nbr_user;
}

//Recherche par login et pwd (Soit l'utilisateur soit NULL)
function recherche_user_byLoginPwd($login, $pwd)
{
     global $pdo;
	 
    $req = $pdo->prepare("select * from users where username=? and password=?");
    $valeur = array($login, $pwd);
    $req->execute($valeur);
    $nbr_user = $req->rowCount();

    if ($nbr_user == 1) // si l'utilisateur existe
        return $req->fetch(); //Retourner l'utilisateur(id_utilisateur,login,pwd et role)
    else // si l'utilisateur n'existe pas
        return 0;

}
        /*************fin fonction******************** */
		
		$nbr_user=recherche_user_byLoginId($login,$id_udser);
		
		if($nbr_user==0){ //utilisateur n'existe pas


            $requete=$pdo->prepare("UPDATE users SET username=?,password=?,type=?,email=? 
            where id_user=?");
            
            $valeurs=array($login,$pwd,$role,$email,$id_udser);			
            $resultat=$requete->execute($valeurs);  
			$msg= "Utilisateur modifié avec sucées";

		}
		else{
			
			$msg= "Le login $login est déja utilisé par un autre utilisateur";	
		}
        echo "<script> alert('$msg') </script>";
   
?>
