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

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
}