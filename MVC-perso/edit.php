<?php 

session_start ();

require __DIR__.'/Model/model.php';

if (isset($_GET['id'])) {
	$id = $_GET['id'];
	if (isset($_POST['title'], $_POST['description'])) {
	// si le formulaire a été soumis,
		$title = $_POST['title'];
		$description = $_POST['description'];
		// si l'edit réussit,
		if (editSelectedTask($id, $title, $description)) {
			// rediriger sur read
			header('Location:read.php?id=' . $id);
			// sinon,
		} else {
			// rediriger sur index
		  header('Location:browse.php');
		}
	}
	// on récupère les données et on les traite
} else {

	// si le formulaire a été soumis,
		 	// sinon,
	$todo = readSelectedTask($id);
	
	// on affiche le formulaire

}

require __DIR__.'/View/editview.php';