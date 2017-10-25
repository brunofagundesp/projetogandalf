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
				<li><a href="../cat/index.php">Categoria</a></li>
				<li><a href="#!">Produto</a></li>
				<li class="right"><a href="/?logout=1">Sair</a></li>
			</ul>
		</div>
	</nav>
		<br><br>
		<!-- Botões ações tela grande -->
		<div class="row container hide-on-med-and-down">
			<div class="col s6">
				<h4 style="margin-top: -1px;">Usuários</h4>   
			</div>
			<div class="col s6">
				<a href="?cadastrar=1" class="waves-effect blue waves-light btn right"><i class="fa fa-plus" aria-hidden="true"></i> Novo Usuário</a> 
				<div>
					<a href="index.php" class="waves-effect white waves-light btn right black-text" style="margin-right: 5px; boder: 1px solid #696969 !important">
						<i class="fa fa-refresh" aria-hidden="true"></i> Atualizar
					</a>   
				</div>
  
			</div>
		</div>

		<!-- Botões ações tela pequena -->
		<div class="row container hide-on-large-only">
			<div class="col s6">
				<h4 style="margin-top: -1px;">Usuários</h4>   
			</div>
			<div class="col s6">
				<a href="?cadastrar=1" class="waves-effect blue waves-light btn right"><i class="fa fa-plus" aria-hidden="true"></i> Novo Usuário</a> 
			</div>
			<div>
				<a href="?cadastrar=1" class="waves-effect white waves-light btn right black-text" style="margin-top: 10px; margin-right: 22px; boder: 1px solid #696969 !important">
					<i class="fa fa-refresh" aria-hidden="true"></i> Atualizar
				</a>   
			</div>
		</div>
		
		<?php
		if(isset($msg))
			echo "	<br><center><b><font color='green'>
					$msg</font></b></center><br>";
		if(isset($erro))
			echo "	<br><center><b><font color='red'>
					$erro</font></b></center><br>";
		?>		
	<section>
		<article>
			<div class="row">
				<div class="card col s12 l12 z-depth-0">
					<table class="bordered centered striped responsive-table highlight">
						<thead>
							<tr>
								<th>ID</th>
								<th>Login</th>
								<th>Nome</th>
								<th>Perfil</th>
								<th>Ativo</th>
								<th>Editar</th>
								<th>Excluir</th>
							</tr>
						</thead>

						<tbody>	
							<?php
							foreach($usuarios as $idUsuario => $dadosUsuario){
								
								echo "
									
										<tr>
											<td>$idUsuario</td>
											<td>{$dadosUsuario['loginUsuario']}</td>
											<td>{$dadosUsuario['nomeUsuario']}</td>
											<td class='tooltipped' data-position='bottom' data-delay='50' data-tooltip='{$dadosUsuario['tipoPerfil']}'>{$dadosUsuario['tipoPerfil']}</td>
											<td>{$dadosUsuario['usuarioAtivo']}</td>
											<td><a href='?editar=$idUsuario' class='waves-effect green waves-light btn'>
												<i class='fa fa-pencil fa-lg' aria-hidden='true' style='margin-top: -5px;'></i></a>
											</td>
											<td><a href='?excluir=$idUsuario' class='waves-effect red waves-light btn'>
												<i class='fa fa-trash-o' aria-hidden='true'></i></a>
											</td>
										</tr>
									";
										
							}
							?>
						</tbody>
					</table>
				</div>
			</div>
		</article>
	</section>

  <!--Import jQuery before materialize.js-->
  <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>
  <!-- FadeIn clientes 1 -->
  <script src="init.js"></script>
</body>
</html>
                               
							   
							   
							   
