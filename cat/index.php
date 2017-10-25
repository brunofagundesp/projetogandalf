<?php
include('../db/db.php');
include('../auth/controle.php');

function HabiltarEdicaoCategoria(){
	return 	(	
				!empty($_POST['idCategoria']) &&
				!empty($_POST['nomeCategoria']) &&
				!empty($_POST['descCategoria'])
	);
}

function HabiltarGravacaoUsuario(){
	return 	(
				!empty($_POST['loginUsuario']) &&
				!empty($_POST['nomeUsuario']) &&
				!empty($_POST['senhaUsuario'])
	);
}


//Funcionalidade Gravar Cadastro
if(isset($_POST['btnGravar'])){
	unset($_GET['cadastrar']);
	if(!empty($_POST['nomeCategoria']) && !empty($_POST['descCategoria'])){
		$stmt = odbc_prepare($db, "INSERT INTO Categoria (nomeCategoria, descCategoria) VALUES (?,?)");
		if(odbc_execute($stmt, array($_POST['nomeCategoria'], $_POST['descCategoria']))){
			$msg = 'Categoria gravada com sucesso!';			
		}else{
			$erro = 'Erro ao gravar o categoria';
		}								
							
	}else{
		$erro = 'Os campos: Nome e Descrição são obrigatórios';	
	}
}
//FIM Funcionalidade Gravar Cadastro

// Funcionalidade Editar Cadastro
if(isset($_POST['btnAtualizar'])){
	if (HabiltarEdicaoCategoria()){
		$id = $_GET['editar'];
		unset($_GET['editar']);
		$stmt = odbc_prepare($db, "UPDATE Categoria SET nomeCategoria = ?, descCategoria = ? WHERE idCategoria = $id");
									
		if(odbc_execute($stmt, array($_POST['nomeCategoria'], $_POST['descCategoria']))){
			$msg = 'Categoria atualizada com sucesso!';
		}else{
			$erro = 'Erro ao atualizar o categoria';
		}								
							
	}else{
		$erro = 'Os campos: Nome e descrição são obrigatórios';
	}

}

if(isset($_GET['editar'])){
	$id = $_GET['editar'];
	$stmt = odbc_exec($db, "SELECT idCategoria, nomeCategoria, descCategoria  FROM Categoria WHERE idCategoria=$id");
	$listCat = odbc_fetch_array($stmt);
}

//FIM Funcionalidade Editar Cadastro
//Funcionalidade Excluir
if(isset($_GET['excluir'])){
	if(is_numeric($_GET['excluir'])){	
		if(odbc_exec($db, "DELETE FROM Categoria WHERE idCategoria = {$_GET['excluir']}")){
			$msg = 'Categoria removida com sucesso';					
		}else{
			$erro = 'Erro ao excluir o usuário';
		}
		
	}else{
		$erro = 'Código inválido';
	}
}
// //FIM Funcionalidade Excluir

//Funcionalidade Listar
$q = odbc_exec($db, 'SELECT idCategoria, descCategoria, nomeCategoria FROM Categoria');

while($r = odbc_fetch_array($q)){
	
	$categorias[$r['idCategoria']] = $r;
	
}
//FIM Funcionalidade Listar

if(isset($_GET['cadastrar'])){//FORM Cadastrar

	include('template_cadastrar.php');
	
}elseif(isset($_GET['editar'])){//FORM Editar

	if(is_numeric($_GET['editar'])){
		$q = odbc_exec($db, "SELECT idCategoria, descCategoria, nomeCategoria FROM Categoria WHERE idCategoria = {$_GET['editar']}");
		$dados_categoria = odbc_fetch_array($q);
	}else{
		$erro = 'Código inválido';
	}

	include('template_editar.php');
	
}else{//FORM Listar
	include('template.php');
}

?>
