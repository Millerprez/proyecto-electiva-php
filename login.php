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
<br><br>
	<div style="display: flex !important;
    text-align: center !important;
    justify-content: center !important;">
	
	<form name="formEv" action="validarIngreso.php" method="post" class="" >
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
							<div class="form-group" style="text-align: center; justify-content: center; display:flex; ">
								<input type="submit" value="Ingresar" name="btn" class="btn float-right login_btn">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</form>
	</div>
</body>

</html>