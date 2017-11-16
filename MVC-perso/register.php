<?php

require __DIR__.'/Model/model.php';
if(isset($_POST['login'], $_POST['password'])) {
$addNewmember = addNewMember($_POST['login'], $_POST['password']);

if ($addNewmember) {
	echo "Nouveau membre créé";
	//header('Location:index.html');
	//exit;
}
}

require __DIR__.'/View/registerview.php';