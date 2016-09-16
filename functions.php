<?php 
function usersLogIn($password,$login){
	$query = $bdd->prepare('SELECT * FROM users WHERE u_name =:login AND u_password =:password');
	$query->bindValue(':login', $login, PDO::PARAM_STR);
	$query->bindValue(':password', $password, PDO::PARAM_STR);
	if($query->rowCount() = 1){
		return true;
	}
	else return false;	
}
	
function adminLogIn($password){
	usersLogIn($password,'admin');
}

funtion inscription(){
	
	 if(isset($_POST['submit']))
{
    // attribution des variables
    
    $name = $_POST['name'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $mdp = $_POST['password'];
    $mdp2 = $_POST['password2'];
    
    
    
    //traitement des saisies
    
    $e = 0;
    $me = "";
    
    if(preg_match("#([a-z][A-Z]?){3,}#", $name))
    {
        $e = $e;
    }
    else {$e++; $me.= "Ce prénom n'est pas accepté. <br>"; }
    
    
    if(preg_match( "#[a-z]{3,20}#", $lastname))
    {
        $e = $e;
    }
    else {$e++; $me.= " Ce nom n'est pas accepté. <br>"; }
    
    $pattern = '/^(?!(?:(?:\\x22?\\x5C[\\x00-\\x7E]\\x22?)|(?:\\x22?[^\\x5C\\x22]\\x22?)){255,})(?!(?:(?:\\x22?\\x5C[\\x00-\\x7E]\\x22?)|(?:\\x22?[^\\x5C\\x22]\\x22?)){65,}@)(?:(?:[\\x21\\x23-\\x27\\x2A\\x2B\\x2D\\x2F-\\x39\\x3D\\x3F\\x5E-\\x7E]+)|(?:\\x22(?:[\\x01-\\x08\\x0B\\x0C\\x0E-\\x1F\\x21\\x23-\\x5B\\x5D-\\x7F]|(?:\\x5C[\\x00-\\x7F]))*\\x22))(?:\\.(?:(?:[\\x21\\x23-\\x27\\x2A\\x2B\\x2D\\x2F-\\x39\\x3D\\x3F\\x5E-\\x7E]+)|(?:\\x22(?:[\\x01-\\x08\\x0B\\x0C\\x0E-\\x1F\\x21\\x23-\\x5B\\x5D-\\x7F]|(?:\\x5C[\\x00-\\x7F]))*\\x22)))*@(?:(?:(?!.*[^.]{64,})(?:(?:(?:xn--)?[a-z0-9]+(?:-+[a-z0-9]+)*\\.){1,126}){1,}(?:(?:[a-z][a-z0-9]*)|(?:(?:xn--)[a-z0-9]+))(?:-+[a-z0-9]+)*)|(?:\\[(?:(?:IPv6:(?:(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){7})|(?:(?!(?:.*[a-f0-9][:\\]]){7,})(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,5})?::(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,5})?)))|(?:(?:IPv6:(?:(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){5}:)|(?:(?!(?:.*[a-f0-9]:){5,})(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,3})?::(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,3}:)?)))?(?:(?:25[0-5])|(?:2[0-4][0-9])|(?:1[0-9]{2})|(?:[1-9]?[0-9]))(?:\\.(?:(?:25[0-5])|(?:2[0-4][0-9])|(?:1[0-9]{2})|(?:[1-9]?[0-9]))){3}))\\]))$/iD';

    $emailaddress = 'test@gmail.com';

    if (preg_match($pattern, $emailaddress) === 0) {
        $e++;
        $me += "l'adresse email n'est pas valide </br>";
    }
    
    if (preg_match("#[a-z]{1,}[A-Z]{1,}[0-9]{1,}#",$mdp))
    {
        $e = $e +1;
        $me .= "le mot de passe n'est pas accepté, vérifier à posséder au moins une minuscule, une majuscule et un chiffre. <br>";
    }
    else{}
    
    if ($mdp != $mdp2)
    {
        $e++;
        $me .= "les 2  mots de passe ne correspondent pas.";
    }
        
    if($e = 0)
    {
        $requete = $bdd-> prepare("insert into _____  (u_name,u_surname,u_email,u_password) values (:name,:lastname,:email,:password)");
        $requete -> bindParam(':name',$name);
        $requete -> bindParam(':lastname', $lastname);
        $requete -> bindParam(':email', $email);
        $requete -> bindParam(':password', $mdp);
        // $requete -> execute
        
    }
}

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
}
