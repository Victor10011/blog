<?php include("path.php");?>
<?php include(ROOT_PATH . "/app/controllers/users.php");?>
<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
	<!--------------------- FONT AWESOME ------------------------>
  	<script src="https://kit.fontawesome.com/0c84e6f29f.js" crossorigin="anonymous"></script>

  	<!------------------ CSS STYLE --------------------->
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">

	<!------------------ MEDIA QUERIES -----------------> 
	<link rel="stylesheet" type="text/css" href="assets/css/media.css">
	<!----------------------- BOOSTRAP --------------------->

  	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>
	<!----- POINTING TO WHERE THE HEADER IS ----->
	<?php include(ROOT_PATH . "/app/includes/header.php")?>
	<!------------------------------------------->

	<div class="auth-content">
		<form action="register.php" method="post">
			<h2 class="form-title">Register</h2>

			<!-------------- FORM ERRORS --------------->
			<?php include(ROOT_PATH . "/app/helpers/formErrors.php")?>


			<div>
				<label>Username </label>
				<input type="text" name="username" value="<?php echo $username; ?>" class="input-text">
			</div>

			<div>
				<label>Email </label>
				<input type="email" name="email" value="<?php echo $email; ?>" class="input-text">
			</div>

			<div>
				<label>Password </label>
				<input type="password" name="password" value="<?php echo $password; ?>" class="input-text">
			</div>

			<div>
				<label>Comfirm Password </label>
				<input type="password" name="passwordConf" value="<?php echo $passwordConf; ?>" class="input-text">
			</div>

			<div>
				<button type="submit" name="register-btn" class="btn btn-big">Register</button>
			</div>

			<p>Or <a href="<?php echo BASE_URL . '/login.php' ?>"> Sign In </a></p>
		</form>
	</div>



<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<!---------------JQuery ----------------->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!---------------Custom Script ----------------->
<script src="js/script.js"></script>
</body>
</html>