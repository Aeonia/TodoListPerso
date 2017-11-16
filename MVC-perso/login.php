<?php
//Données brutes
//$login_valide = "annath";
//$pwd_valide = "trefle";
require __DIR__.'/Model/model.php';

require __DIR__.'/index.html';

if(isset($_POST['login'], $_POST['password'])) {

	$login = $_POST['login'];
	$password = $_POST['password'];
	$loginpwd = connectmember($login, $password, $userid);
//ci-dessous à revoir pour meilleur comprehension
	if ($loginpwd) {
		session_start ();
		$_SESSION['login'] = $loginpwd['login'];
		$_SESSION['password'] = $loginpwd['password'];
		$_SESSION['userid'] = $loginpwd['userid'];
		header ('location: browse.php');
	} else {
		echo '<body onLoad="alert(\'Membre non reconnu...\')">';
		//echo '<meta http-equiv="refresh" content="0;URL=index.html">';
		header ('location: index.html');
	}
} else {
	echo 'Veuillez entrer un nom d\'utilisateur et un mot de passe.';
};

