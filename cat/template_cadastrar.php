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

	<div class="cyan" style="position: relative !important; min-height: 180px; display: block;"></div>
	<div class="row container">
		<div class="col s6">
			<h4 style="margin-top: -131px; position: relative;" class="white-text">Nova Categoria</h4>   
		</div>
	</div>

	<div class="row">
    	<form class="col s12 l6 offset-l3 card" style="position: relative; margin-top: -71px;" method="post">
		<br>
			<div class="row">
				<div class="input-field col s6">
				<input id="nomeCategoria" name="nomeCategoria" type="text" class="validate">
				<label for="nomeCategoria">Nome *</label>
				</div>
			</div>
			<div class="row">
				<div class="input-field col s12">
                    <textarea id="descCategoria" class="materialize-textarea" name="descCategoria"></textarea>
                    <label for="descCategoria">Descrição *</label>
				</div>
			</div>
			<br><br>
				<button class="btn waves-effect blue waves-light" type="submit" name="btnGravar">Salvar
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

                               