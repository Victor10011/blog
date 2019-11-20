<!DOCTYPE php>
<php>
<head>
	<title>Admin Section - Add User</title>
	<!--------------------- FONT AWESOME ------------------------>
  	<script src="https://kit.fontawesome.com/0c84e6f29f.js" crossorigin="anonymous"></script>

  	<!------------------ CUSTOM STYLING  --------------------->
	<link rel="stylesheet" type="text/css" href="../../assets/css/style.css">

	<!------------------ ADMIN STYLING  --------------------->
	<link rel="stylesheet" type="text/css" href="../../assets/css/admin.css">

	<!------------------ MEDIA QUERIES ----------------->
	<link rel="stylesheet" type="text/css" href="../../assets/css/media.css">

	<!----------------------- BOOSTRAP --------------------->

  	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>
	<header>
		<nav class="navbar navbar-expand-lg navbar-light">
		  <h3 class="navbar-brand" href="#">LOGO HERE</h3>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarMenu" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>
		  <div class="collapse navbar-collapse" id="navbarMenu">
		    <ul class="navbar-nav mr-auto">
		    	<li class="nav-item" style="margin-left: 920px;"><a href="#" class="nav-link text-white" id="user"><i class="fa fa-user"></i> USER <i class="fa fa-chevron-down"></i></a>
		    		<ul class="user-dropdown">
		    			<li><a href="#" class="logout"> Logout</a></li>
		    		</ul>
		    	</li>
		    </ul>
		  </div>
		</nav>

	</header>

	<!------ Admin Page Wrapper --------->
	<div class="admin-wrapper">
		<!---- Left Side Bar ---->
		<div class="left-sidebar">
			<ul>
				<li><a href="../posts/index.php">Manage Posts</a></li>
				<li><a href="index.php">Manage Users</a></li>
				<li><a href="../topics/index.php">Manage Topics</a></li>
			</ul>
			
		</div>
		<!----/// Left Side Bar ---->


		<!---- Admin Content ---->
		<div class="admin-content">
			<div class="button-group">
				<a href="create.php" class="btn btn-big">Add User</a>
				<a href="index.php" class="btn btn-big">Manage Users</a>
			</div>

			<div class="content">
				<h3 class="page-title">Add User</h3>
				
				<form action="create.php" method="post">
					<div>
						<label>Username </label>
						<input type="text" name="username" class="input-text">
					</div>

					<div>
						<label>Email </label>
						<input type="email" name="email" class="input-text">
					</div>

					<div>
						<label>Password </label>
						<input type="password" name="passwordConf" class="input-text">
					</div>

					<div>
						<label>Comfirm Password </label>
						<input type="password" name="username" class="input-text">
					</div>

					<div>
						<label>Role</label>
						<select name="role" class="input-text">
							<option value="Admin">Admin</option>
							<option value="Author">Author</option>
						</select>
					</div>


					<div>
						<button type="submit" class="btn btn-big create-subnit">Add User</button>
					</div>
					
				</form>
			</div>
			
		</div>
		<!----/// Admin Content ---->

	</div> <!--------//// Admin Page wrapper ------->



<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<!---------------JQuery ----------------->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!------------ Ckeditor --------------->
<script src="https://cdn.ckeditor.com/ckeditor5/15.0.0/classic/ckeditor.js"></script>

<!---------------Custom Script ----------------->
<script src="../../js/script.js"></script>
</body>
</php>