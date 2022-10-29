<?php
include("modelo/Login.php");
include("control/controlConexion.php");
include("control/ctrLogin.php");


$id     = "";
$clave  = "";
$msg    = "";
$bot    = "";


try {
	if (isset($_POST["txtId"])) $id          = $_POST["txtId"];
	if (isset($_POST['txtClave'])) $clave  = $_POST['txtClave'];
	if (isset($_POST['btn'])) $bot = $_POST['btn'];

	switch ($bot) {
		case "Ingresar":
			$objLogin = new Login($id, $clave);
			$objControlLogin = new ctrLogin($objLogin);
			$valid = $objControlLogin->ValidarIngreso();

			if ($valid) {
				//Miller location: http://localhost/App/proyecto-electiva-php/index.php
				//Duvan location:  http://localhost/app-elect-global/index.php
				header("Location: http://localhost/php/proyecto-electiva-php/index.php", TRUE, 301);
			} else {
				$msg = "Usuario o clave incorrecta";
			}

			break;
	}
} catch (Exception $objExp) {
	echo 'Se presentó una excepción: ',  $objExp->getMessage(), "\n";
}

?>


<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html>

<head>
	<title>Login Page</title>
	<!--Made with love by Mutiullah Samim -->

	<!--Bootsrap 4 CDN-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

	<!--Fontawesome CDN-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

	<!--Custom styles-->
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
	<form name="formEv" action="login.php" method="post" class=" mb-auto text-center">
		</div>
		<div class="input-group form-group">
			<div class="input-group-prepend">
				<div class="container">
					<div class="d-flex justify-content-center h-100">
						<div class="card">
							<div class="card-header">
								<h3>Ingreso</h3>
							</div>
							<div class="card-body">
								<div class="input-group form-group">
									<div class="input-group-prepend">
										<span class="input-group-text"><i class="fas fa-user"></i></span>
									</div>
									<input required name="txtId" type="text" class="form-control" placeholder="Identificacion">
								</div>
								<div class="input-group form-group">
									<div class="input-group-prepend">
										<span class="input-group-text"><i class="fas fa-key"></i></span>
									</div>
									<input required name="txtClave" type="password" class="form-control" placeholder="Contrasena">
								</div>
							</div>
							<div class="form-group">
								<input type="submit" value="Ingresar" name="btn" class="btn float-right login_btn">
							</div>
							<div class="card-footer">
								<div class="d-flex justify-content-center links">
									<?php echo $msg ?>
								</div>
							</div>
	</form>
	</div>
	</div>
	</div>
	</div>
	</from>
</body>

</html>