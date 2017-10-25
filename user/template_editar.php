<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!-- Compiled and minified CSS -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.0/css/materialize.min.css">
      
      <!-- Compiled and minified JavaScript -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.0/js/materialize.min.js"></script>
      <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" media="all" rel="stylesheet" type="text/css" />
      <link rel="stylesheet" href="css/estilo.css">
    
</head>
<body>

	<nav class="blue-grey darken-3">
		<div class="nav-wrapper container">
			<ul id="nav-mobile" class="center">
				<li class="active"><a href="index.php">Usuario</a></li>
				<li><a href="#!">Categoria</a></li>
				<li><a href="#!">Produto</a></li>
				<li class="right"><a href="/?logout=1">Sair</a></li>
			</ul>
		</div>
	</nav>



	<!-- <form method="post">
		<label for="loginUsuario"></label>
		<input type="text" id="loginUsuario" name="loginUsuario"><br><br>
		Senha: <input type="password" name="senhaUsuario"><br><br>
		Nome: <input type="text" name="nomeUsuario"><br><br>
		Perfil: <select name="perfilUsuario">
					<option value="">Escolha</option>
					<option value="A">Administrador</option>
					<option value="C">Colaborador</option>
				</select><br><br>
		 -->


	<div class="cyan" style="position: relative !important; min-height: 180px; display: block;"></div>
	<div class="row container">
		<div class="col s6">
			<h4 style="margin-top: -131px; position: relative;" class="white-text">Editar Usuário</h4>   
		</div>
	</div>

	<div class="row">
    	<form class="col s12 l6 offset-l3 card" style="position: relative; margin-top: -71px;" method="post">
		<br>
			<div class="row">
				<div class="input-field col s6">
				<input type="text" name="loginUsuario" value="<?php echo $dados_usuario['loginUsuario']; ?>">
				<label for="loginUsuario">Login</label>
				</div>
				<div class="input-field col s6">
				<input type="password" name="senhaUsuario"><br><br>
				<label for="senhaUsuario">Senha</label>
				</div>
			</div>
			<div class="row">
				<div class="input-field col s12">
				<input type="text" name="nomeUsuario" value="<?php echo $dados_usuario['nomeUsuario']; ?>">
				<label for="nomeUsuario">Nome *</label>
				</div>
			</div>
			<label for="input-field">Perfil</label>
			<div class="row">
				<div class="input-field col s6">
					<select name="perfilUsuario" class="browser-default">
						<option value="">Escolha</option>
						<option value="A" 
						<?php if($dados_usuario['tipoPerfil'] == 'A') echo "selected"; ?>>Administrador</option>
						<option value="C"
						<?php if($dados_usuario['tipoPerfil'] == 'C') echo "selected"; ?>>Colaborador</option>
					</select>
				</div>
				<div class="col s3 offset-s2">
					<p>
					<input type="checkbox" name="usuarioAtivo" 
					<?php if($dados_usuario['usuarioAtivo'] == 1) echo "checked"; ?>>
						<label for="test5">Ativo</label>
						<input type="hidden" name="idUsuario" 
							value="<?php echo $dados_usuario['idUsuario']; ?>">	
					</p>
				</div>
			</div>
			<br><br>
				<button class="btn waves-effect blue waves-light" type="submit" name="btnAtualizar">Atualizar
					<i class="material-icons right"></i>
				</button>
				<a href="/user" class="btn waves-effect white waves-light black-text">Cancelar <i class="fa fa-ban" aria-hidden="true"></i></a>	<br><br>  
			</form>
		</div>

  <!--Import jQuery before materialize.js-->
  <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>
  <!-- FadeIn clientes 1 -->
  <script src="init.js"></script>
</body>
</html>

                               