<?php include("path.php");?>
<!DOCTYPE html>
<html>
<head>
	<title>Single Post</title>
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
	<?php include(ROOT_PATH . "/app/includes/header.php");?>
	<!------------------------------------------->

	<!------ Page Wrapper --------->
	<div class="page-wrapper">

		<!------ Content ---------->
		<div class="content clearfix">

			<!---- Main Content ------->
			<div class="main-content single">
				<h1 class="post-title">This is the title of the Post</h1>

				<div class="post-content">
					<p>
					Why do we use it?

					It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
					</p>
					<p>
					Why do we use it?

					It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.
					</p>
					<p>
					Why do we use it?

					It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum'
					</p>
					<p>
					Why do we use it?

					It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
					</p>
				</div>
			</div> <!---- /// Main Content ------->


			<!----- The Side Bar ----->
			<div class="sidebar single">
				<!---- Popular---->
				<div class="section popular">
					<h1 class="section-title">Popular Posts</h1>
					<div class="post clearfix">
						
						<a href="#" class="title">
						<img src="assets/images/image3.jpg"> 
						How to overcome your fears
						</a>
					</div> 

					<div class="post clearfix">
						<a href="#" class="title">
						<img src="assets/images/image7.jpg"> 
						How to overcome your fears
						</a>
					</div> 

					<div class="post clearfix">
						<a href="#" class="title">
						<img src="assets/images/image5.png"> 
						How to overcome your fears
						</a>
					</div> 

					<div class="post clearfix">
						<a href="#" class="title">
						<img src="assets/images/image6.jpg"> 
						How to overcome your fears
						</a>
					</div> 

					<div class="post clearfix">
						<a href="#" class="title">
						<img src="assets/images/image1.jpg"> 
						How to overcome your fears
						</a>
					</div> 
				</div> <!--// popular -->


				<div class="section topics">
					<h2 class="section-title">Topics</h2>
					<ul>
						<li><a href="#">Poem</a></li>
						<li><a href="#">Fiction</a></li>
						<li><a href="#">Quote</a></li>
						<li><a href="#">Biography</a></li>
						<li><a href="#">Motivation</a></li>
						<li><a href="#">inspiration</a></li>
						<li><a href="#">Life Lessons</a></li>
					</ul>
				</div>
				
			</div> <!-----///// The Side Bar ----->
			
		</div> <!------/// Content ---------->

	</div> <!--------Page wrapper ------->

	<!----- POINTING TO WHERE THE FOOTER IS ----->
	<?php include(ROOT_PATH . "/app/includes/footer.php");?>
	<!------------------------------------------->






<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<!---------------JQuery ----------------->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!---------------Slick Carousel ----------------->
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>


<!---------------Custom Script ----------------->
<script src="js/script.js"></script>
</body>
</html>