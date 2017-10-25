<?php
include('./db/db.php');
include('./template.php');
$login = isset($_POST['login_input']) ? $_POST['login_input'] : null;
$senha = isset($_POST['pass']) ? $_POST['pass'] : null;

if(isset($_GET['logout'])){
	session_start();
	session_destroy();
}


if(!empty($login) && !empty($senha)){

	$stmt = odbc_prepare($db, '	SELECT idUsuario, nomeUsuario
								FROM Usuario
								WHERE loginUsuario = ?
								AND senhaUsuario = ?');
	odbc_execute($stmt, array($login, $senha));

	$usuario = odbc_fetch_array($stmt);

	if(!$usuario['idUsuario']){
		
		$msg = 'Login e/ou Senha Incorretos';

	}else{
	
		session_start();
		$_SESSION['idUsuario'] = $usuario['idUsuario'];
		$_SESSION['nomeUsuario'] = $usuario['nomeUsuario'];
		
		header('Location : ./menu/');
	}
}



?>