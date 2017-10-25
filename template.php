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
    <section>
        <article>

            <div id="login">

                <div class="row">
                    <div class="col s10 m6 l4 offset-s1 offset-l4 offset-m3">
                    <div id="cardLog" class="card">
                        <div id="title" class="card-action darken-1">
                            <div class="center">
                                <img src="img/logo.png" alt="">
                            </div>
                        </div>
                        <div class="card-content white-text">
                            <div class="row">
                                <form class="col s12" method="post" >
                                    <div class="row">
                                        <div class="center">
                                            <?php
							                    if(isset($msg)){			
										            echo "<b class='white-text'><i class='fa fa-times-circle-o' aria-hidden='true'></i> $msg</b>";	
									            }
						                    ?>  
                                        </div>
                                    <div class="input-field col s10 offset-s1">
                                        <input id="login_input"  name="login_input" type="text" class="validate white-text text-darken-1">
                                        <label for="login_input" class="white-text">login</label>
                                    </div>
                                    <div class="input-field col s10 offset-s1">
                                        <input id="pass" name="pass" type="password" class="validate white-text">
                                        <label for="pass" class="white-text">senha</label>
                                    </div>
                                    </div>
                                    <br><br>
                                    <div class="center">
                                        <button id="btn1" class="btn waves-effect waves-light z-depth-0" type="submit" name="action">entrar</button>
                                    </div>                                                                  
                                </form>
                            </div> 
                        
                        </div>                        
                    </div>
                    </div>
                </div>                
            </div>
        </article>
    </section>



  <!--Import jQuery before materialize.js-->
  <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>
  <script src="http://github.hubspot.com/odometer/odometer.js"></script>
  <!-- FadeIn clientes 1 -->
  <script src="init.js"></script>
</body>
</html>

                               