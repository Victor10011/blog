<?php include("path.php");?>
<!DOCTYPE html>
<html>
<head>
	<title>Business Posts</title>
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
	<?php include(ROOT_PATH . "/app/includes/messages.php")?>
	
	<!------------------------------------------->

	<!------ Page Wrapper --------->
	<div class="page-wrapper">
		
		<!--------Post Slider ------->
		<div class="post-slider">

			<h1 class="slider-title">Trending Business Posts</h1>
			<i class="fas fa-chevron-left prev slide-control"></i>
			<i class="fas fa-chevron-right next slide-control"></i>
			
			<div class="post-wrapper">
				<div class="post">
					<a href="single.php"><img src="assets/images/image4.jpg" class="slider-image"></a>
					<div class="post-info">
						<h4><a href="single.php">This is the news title. This is the news title. </a></h4>
						<small><i class="far fa-user">Victor .N</i></small>
						&nbsp;
						<small><i class="far fa-calendar"> October 10, 2019</i></small>
					</div>
				</div>
				<div class="post">
					<a href="single.php"><img src="assets/images/image6.jpg" class="slider-image"></a>
					<div class="post-info">
						<h4><a href="single.php">This is the news title. This is the news title. </a></h4>
						<small><i class="far fa-user">Victor .N</i></small>
						&nbsp;
						<small><i class="far fa-calendar"> October 10, 2019</i></small>
					</div>
				</div>
				<div class="post">
					<a href="single.php"><img src="assets/images/image1.jpg" class="slider-image"></a>
					<div class="post-info">
						<h4><a href="single.php">This is the news title. This is the news title.</a></h4>
						<small><i class="far fa-user">Victor .N</i></small>
						&nbsp;
						<small><i class="far fa-calendar"> October 10, 2019</i></small>
					</div>
				</div>
				<div class="post">
					<a href="single.php"><img src="assets/images/image3.jpg" class="slider-image"></a>
					<div class="post-info">
						<h4><a href="single.php">This is the news title. This is the news title.</a></h4>
						<small><i class="far fa-user">Victor .N</i></small>
						&nbsp;
						<small><i class="far fa-calendar"> October 10, 2019</i></small>
					</div>
				</div>
				<div class="post">
					<a href="single.php"><img src="assets/images/image5.png" class="slider-image"></a>
					<div class="post-info">
						<h4><a href="single.php">This is the news title. This is the news title.</a></h4>
						<small><i class="far fa-user">Victor .N</i></small>
						&nbsp;
						<small><i class="far fa-calendar"> October 10, 2019</i></small>
					</div>
				</div>
			</div>
		</div> <!--------//Post Slider ------->

		<!------ Content ---------->
		<div class="content clearfix">

			<!---- Main Content ------->
			<div class="main-content">
				<h1 class="recent-post-title">Recent Business Posts</h1>
				
				<div class="post clearfix">
					<a href="single.php"><img src="assets/images/image7.jpg" class="post-image"></a>
					<div class="post-preview">
						<h4><a href="single.php">Guinness Nigeria posts a loss of $1.02 million because July to September wasn't good months for the brewer firm</a></h4>
						<small><i class="far fa-user">Victor .N</i></small>
						&nbsp;
						<small><i class="far fa-calendar"> October 10, 2019</i></small>
						<p class="preview-text">
							Analysts at CSL said the decline in Guinness Nigeria profit was due to seasonal impacts of weather and fewer number of festivities between July and September 2019. 
						</p>
						<a href="single.php" class="btn read-more">Read more</a>
					</div>
				</div> <!-----////POST-------->

				<div class="post clearfix">
					<a href="single.php"><img src="assets/images/image1.jpg" class="post-image"></a>
					<div class="post-preview">
						<h4><a href="single.php">Guinness Nigeria posts a loss of $1.02 million because July to September wasn't good months for the brewer firm</a></h4>
						<small><i class="far fa-user">Victor .N</i></small>
						&nbsp;
						<small><i class="far fa-calendar"> October 10, 2019</i></small>
						<p class="preview-text">
							Analysts at CSL said the decline in Guinness Nigeria profit was due to seasonal impacts of weather and fewer number of festivities between July and September 2019. 
						</p>
						<a href="single.php" class="btn read-more">Read more</a>
					</div>
				</div> <!-----////POST-------->

				<div class="post clearfix">
					<a href="single.php"><img src="assets/images/image5.png" class="post-image"></a>
					<div class="post-preview">
						<h4><a href="single.php">Guinness Nigeria posts a loss of $1.02 million because July to September wasn't good months for the brewer firm</a></h4>
						<small><i class="far fa-user">Victor .N</i></small>
						&nbsp;
						<small><i class="far fa-calendar"> October 10, 2019</i></small>
						<p class="preview-text">
							Analysts at CSL said the decline in Guinness Nigeria profit was due to seasonal impacts of weather and fewer number of festivities between July and September 2019. 
						</p>
						<a href="single.php" class="btn read-more">Read more</a>
					</div>
				</div> <!-----////POST-------->

				<div class="post clearfix">
					<a href="single.php"><img src="assets/images/image4.jpg" class="post-image"></a>
					<div class="post-preview">
						<h4><a href="single.php">Guinness Nigeria posts a loss of $1.02 million because July to September wasn't good months for the brewer firm</a></h4>
						<small><i class="far fa-user">Victor .N</i></small>
						&nbsp;
						<small><i class="far fa-calendar"> October 10, 2019</i></small>
						<p class="preview-text">
							Analysts at CSL said the decline in Guinness Nigeria profit was due to seasonal impacts of weather and fewer number of festivities between July and September 2019. 
						</p>
						<a href="single.php" class="btn read-more">Read more</a>
					</div>
				</div> <!-----////POST-------->

				<div class="post clearfix">
					<a href="single.php"><img src="assets/images/image5.png" class="post-image"></a>
					<div class="post-preview">
						<h4 class="post-title"><a href="single.php">Guinness Nigeria posts a loss of $1.02 million because July to September wasn't good months for the brewer firm</a></h4>
						<small><i class="far fa-user">Victor .N</i></small>
						&nbsp;
						<small><i class="far fa-calendar"> October 10, 2019</i></small>
						<p class="preview-text">
							Analysts at CSL said the decline in Guinness Nigeria profit was due to seasonal impacts of weather and fewer number of festivities between July and September 2019. 
						</p>
						<a href="single.php" class="btn read-more">Read more</a>
					</div>
				</div> <!-----////POST-------->
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

				<div class="footer-section contact-form">
					<h2 style="font-size: 25px;">Subscribe for News and Updates</h2>
					<br>
					<form action="index.php" method="post">
						<input type="text" name="name" class="input-text sub-firstname" placeholder="Firstname">
						<input type="email" name="email" class="input-text contact-input" placeholder="Email address...">
						<button type="submit" class="btn btn-big">
							<i class="fas fa-envelope"></i>
							Subscribe
						</button>
					</form>
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