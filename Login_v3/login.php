<!DOCTYPE html>


<?php

session_start(); // Iniciar a sessão

// Limpara o buffer de redirecionamento
ob_start();

// Incluir o arquivo com a conexão com banco de dados
include_once '../conexao.php';


if (isset($_SESSION['msg'])) {
    // Imprimir o valor da variável global "msg"
    echo $_SESSION['msg'];

    // Destruir a variável globar "msg"
    unset($_SESSION['msg']);
}


    

?>
<html lang="pt-br">
<head>
	<title>Login V3</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" 
integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  

	<!--===============================================================================================-->




</head>
<body>

<nav class="navbar navbar-expand-lg  navbar-dark bg-dark">
  <div class="container-fluid">
    
    <a class="navbar-brand" href="#">Brutaltype</a>
    
	<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>


		
		<form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Pesquisar" aria-label="Search">
        <button class="btn btn-outline-success" id="btn_index" type="submit">Pesquisar</button>
		
        </form>
        
            <li class="nav-item">
          <a class="nav-link" href="#">Lançamentos</a>
            </li>

	
			<li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
     Masculino
            </a>

			<ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Camiseta </a></li>
			<li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Blusas</a></li>
            
			<!--Divisão Bootstrap-->
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Calças</a></li>
			<li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Bermudas</a></li>



          </ul>
            </li>
			
        
			<li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
    Feminino
            </a>

			<ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Camiseta </a></li>
			<li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Blusas</a></li>
            
			<!--Divisão Bootstrap-->
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Calças</a></li>
			<li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Bermudas</a></li>



          </ul>
            </li>
			
			<!--  item desabilitado
            <li class="nav-item">
          <a class="nav-link disabled">Disabled</a>
        </li>
        </ul>
        -->
      
         
        </div>
    
    </div>
        </nav>
    



	<div class="login">
	<div class="limiter">
	
		<div class="container-login100" style="background-image: url('images/rock.jpeg');">
			<div class="wrap-login100">
				<form class="login100-form validate-form" action="login.php" method="POST">
					<span class="login100-form-logo">
						<i class="zmdi zmdi-landscape"></i>
					</span>

					<span class="login100-form-title p-b-34 p-t-27">
						Entrar
					</span>


					<?php
            $usuario = "";
if (isset($dados['usuario_email'])) {
    $usuario = $dados['usuario_email'];
}
?>

				

					<div class="wrap-input100 validate-input" data-validate = "Entrar com Email">
						<input class="input100" type="email" id="usuario" name="usuario"  placeholder="Digite o seu email" required>
						
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Entrar com senha">
						
					
					<input class="input100" type="password" 
						 name="senha" id="senha" placeholder="digite sua senha">
						<span class="focus-input100" data-placeholder="&#xf191;"></span>

						<?php
    $senha = "";
if (isset($dados['senha'])) {
    $senha = $dados['senha'];
}
?> 
						
						
					
						
					</div>

				
				


					

					<div class="contact100-form-checkbox">
						<input class="input-checkbox100"  id="mostrarsenha" type="checkbox" 
						 onclick="mostrarOcultarSenha()">
						<label class="label-checkbox100" for="mostrarsenha">
							Mostrar senha
						</label>
					</div>

					<div class="container-login100-form-btn">
						<button type="submit" class="btn btn-dark" name="btn_logar">
						entrar
						</button>
					</div>

					<div class="text-center p-t-90">
						<a class="txt1" href="#">
							Esqueceu Sua Senha
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
</div>


	<div id="dropDownSelect1"></div>

	<footer>
        <p>Copyright &copy;  Brutal Type  &copy;</p>
      </footer>

	
	
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>




    

</body>
</html>