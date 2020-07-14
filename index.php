<?php
session_start();
if(!isset($_SESSION['user_data'])){
?>
	<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<link rel="stylesheet" href="node_modules/sidebarjs/lib/sidebarjs.css">
		<link rel="stylesheet" href="node_modules/normalize.css">
		<link rel="stylesheet" href="css/styles.css">
		<link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
		<!--<link rel="stylesheet" href="node_modules/sidebarjs/lib/sidebarjs.css">-->
		
		<script src="node_modules/jquery/dist/jquery.min.js" ></script>
		<script src="node_modules/bootstrap/dist/js/bootstrap.min.js" ></script>
		<!--<script src="node_modules/sidebarjs/lib/amd/sidebarjs.js"></script>-->
		<!--<script src="node_modules/blurt/blurt.js" ></script>-->
		
		<script src="js/function.js" ></script>

		<title>SIGEP</title>
	</head>
	<body class="text-center" style="display: block; zoom: 85%;">
		
			<form class="form-signin" id="login-form">

				<!--<div id="user-logo">
					<img class="mb-4" src="assets/img/user.png" alt="" width="200" height="200">
				</div>-->

				<h1 class="h3 mb-3 font-weight-normal">Inicio de Sesión</h1>
				
				<input id="user" name="user" type="text" class="form-control" placeholder="Usuario" required autofocus>
				
				<br>

				<input id="pass" name="pass" type="password" class="form-control" placeholder="Contraseña" required>

				<br>

				<button class="btn btn-lg btn-outline-primary btn-block" type="submit" class="botonlg" id="login" >Acceder</button>

			</form>
			
			<br>
			
			<div style="text-align: center; width: 100%; color: white;"><?php echo "$system_name-"; ?><?php echo "$version-"; ?><?php echo $release; ?></div>
		
		</body>
	</html>

<?php
}
else{
?>
    <script>
        window.location = 'main/index.php';
    </script>
<?php
}
?>