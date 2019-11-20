<?php include("../../path.php");?>
<?php include(ROOT_PATH . "/app/controllers/topics.php");?>
 
<!DOCTYPE html>
<html>
<head>
	<title>Admin Section - Manage Topics</title>
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
	<!---- Header Here ---->
	<?php include(ROOT_PATH . "/app/includes/adminHeader.php");?>

	<!------ Admin Page Wrapper --------->
	<div class="admin-wrapper">
	<!---- Left Side Bar ---->
	<?php include(ROOT_PATH . "/app/includes/adminSidebar.php");?>
	<!----/// Left Side Bar ---->

		<!---- Admin Content ---->
		<div class="admin-content">
			<div class="button-group">
				<a href="create.php" class="btn btn-big">Add Topic</a>
				<a href="index.php" class="btn btn-big">Manage Topics</a>
			</div>

			<div class="content">
				<h3 class="page-title">Manage Topics</h3>
				<?php include(ROOT_PATH . "/app/includes/messages.php");?>
				
				<table>
					<thead>
						<th>SN</th>
						<th>Name</th>
						<th colspan="2">Action</th>
					</thead>

					<tbody>
						<?php if(is_array($topics)) : ?>
	    					<?php foreach ($topics as $key => $topic) : ?>
								<tr>
									<td><?php echo $key + 1; ?></td>
									<td><?php echo $topic['name']; ?></td>
									<td><a href="edit.php?id=<?php echo $topics['id']; ?>" class="edit">Edit</a></td>
									<td><a href="index.php?del_id=<?php echo $topic['id']; ?>" class="delete">Delete</a></td>
								</tr>
							<?php endforeach; ?>
						<?php endif; ?>

					</tbody>
				</table>
			</div>
			
		</div>
		<!----/// Admin Content ---->

	</div> <!--------//// Admin Page wrapper ------->



<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<!---------------JQuery ----------------->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!---------------Custom Script ----------------->
<script src="../../js/script.js"></script>
</body>
</html>