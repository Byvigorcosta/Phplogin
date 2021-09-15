<?php
	session_start();
?>
<!doctype html>

<html lang="pt-br">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Título -->
<title>Sistema  : Bootstrap v5.1</title>

<!-- Bootstrap core CSS -->
<link href="CSS/bootstrap.min.css" rel="stylesheet">

<!-- Folha de Estilo -->
<link href="CSS/signin.css" rel="stylesheet">
  
</head>
<body>
	
<main class="form-signin">
  
<form method="post" action="valida.php">
    
	<!-- Título -->
    <h1 class="h3 mb-3 fw-normal text-center branco">	Área Restrita </h1>

	<!-- Email -->
    <div class="form-floating pb-2">
      
		 	<input type="email" name = "email"
			 class="form-control" 
			 id="floatingInput" 
			 placeholder="nome@exemplo.com">
		
	<label for="floatingInput">Email</label>
    </div>
    
	<!-- Senha -->  
	<div class="form-floating pb-2">
      
		 	
		  	<input type="password" name="senha"
			
			 class="form-control" 
			 id="floatingPassword" 
			 placeholder="Digite senha"
			 required>
		  
	<label for="floatingPassword">Senha</label>
    </div>

	<!-- Botão para Acessar -->
    <button class="w-100 
				   btn 
				   btn-lg 
				   btn-primary" 
				   type="submit">Entrar</button>
	
<!-- Messagem PHP -->
<p class="text-center text-danger">
			<?php if(isset($_SESSION['loginErro'])) {
				echo $_SESSION['loginErro'];
				unset($_SESSION['loginErro']);   	}
			?>
</p>
<p class="text-center text-info">
			<?php 
			if(isset($_SESSION['logindeslogado'])){
				echo $_SESSION['logindeslogado'];
				unset($_SESSION['logindeslogado']);
			}
			?>
</p>
	
	
	<!-- Descrição de Rodapé -->
    <p class="mt-5 mb-3 text-muted text-center" >By @vigorcosta : 2020–2021</p>

</form>

</main>
    
</body>
</html>
