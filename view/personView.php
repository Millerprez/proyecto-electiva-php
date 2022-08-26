<?php
    $code = $_POST['txt-code'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Person</title>
    <!-- <link rel="stylesheet" href="../style.css"> -->
    
</head>
<body>
    <div class="">
	<div class="">
		<div class="">
			<form class="login" method="post" action="personView.php">
            <div class="login__field">
					<i class="login__icon fas fa-user"></i>
					<input type="text" name="txt-code" class="login__input" placeholder="Code" value="<?php echo $code; ?>">
				</div>
				<div class="login__field">
					<i class="login__icon fas fa-lock"></i>
					<input type="text" name="txt-name" class="login__input" placeholder="Name">
				</div>
                <div class="login__field">
					<i class="login__icon fas fa-lock"></i>
					<input type="text" name="txt-phone" class="login__input" placeholder="Phone">
				</div>
                <div class="login__field">
					<i class="login__icon fas fa-lock"></i>
					<input type="text" name="txt-email" class="login__input" placeholder="Email">
				</div>
                <div class="login__field">
					<i class="login__icon fas fa-lock"></i>
					<input type="text" name="txt-address" class="login__input" placeholder="Address">
				</div>
				
                <input class="button login__submit" type="submit" name="btn-send" value="save">
					<span class="button__text"></span>
					<i class="button__icon fas fa-chevron-right"></i>
                </input>			
                <input class="button login__submit" type="submit" name="btn-send" value="update">
					<span class="button__text"></span>
					<i class="button__icon fas fa-chevron-right"></i>
                </input>			
                <input class="button login__submit" type="submit" name="btn-send" value="search">
					<span class="button__text"></span>
					<i class="button__icon fas fa-chevron-right"></i>
                </input>			
                <input class="button login__submit" type="submit" name="btn-send" value="delete">
					<span class="button__text"></span>
					<i class="button__icon fas fa-chevron-right"></i>
                </input>			
    </form>
		</div>
		<div class="screen__background">
			<span class="screen__background__shape screen__background__shape4"></span>
			<span class="screen__background__shape screen__background__shape3"></span>		
			<span class="screen__background__shape screen__background__shape2"></span>
			<span class="screen__background__shape screen__background__shape1"></span>
		</div>		
	</div>
</div>
</body>
</html>