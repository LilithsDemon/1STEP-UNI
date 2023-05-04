<!DOCTYPE html>
<html>

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>1 S T E P | Home</title>
	<link rel="stylesheet" href="css/mainStyle.css" />
	<link rel="stylesheet" href="css/slider.css" />
	<link rel="stylesheet" href="css/alt_block_info.css"/>
	<script src="https://kit.fontawesome.com/a29f3f1e4b.js" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-3.3.1.min.js" type="text/javascript"></script>
</head>

<body>

	<?php include 'php/nav--light_grey_bgbar.php' ;?>

	<style>
		.slider__slide:nth-child(1) .slider__back,
		.slider__slide:nth-child(1) .slider__inner {
			background-image: url(../Assets/Images/rainbow_dance.jpg);
		}

		.slider__slide:nth-child(2) .slider__back,
		.slider__slide:nth-child(2) .slider__inner {
			background-image: url(../Assets/Images/rainbow_people.jpg);
		}

		.slider__slide:nth-child(3) .slider__back,
		.slider__slide:nth-child(3 ) .slider__inner {
			background-image: url(../Assets/Images/contemp_dance.jpg);
		}

		.slider__slide:nth-child(4) .slider__back,
		.slider__slide:nth-child(4) .slider__inner {
			background-image: url(../Assets/Images/ballet_prep.jpg);
		}
	</style>

	<section class="home home_section" id="home">
		<div class="slider">
			<div class="slider__slide slider__slide--active" data-slide="1">
				<div class="slider__wrap">
					<div class="slider__back"></div>
				</div>
				<div class="slider__inner">
					<div class="slider__content">
						<ul>
							<li>
								<h1>Slide <br> One</h1>
							</li>
							<li><a href="#" class="button">This is some test text</a></li>
						</ul>
					</div>
					<div class="slider__options">
						<ul>
							<li><a class="go-to-previous"><i class="fa-solid fa-arrow-left"></i></a></li>
							<li><a class="go-to-next"><i class="fa-solid fa-arrow-right"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="slider__slide" data-slide="2">
				<div class="slider__wrap">
					<div class="slider__back"></div>
				</div>
				<div class="slider__inner">
					<div class="slider__content">
						<ul>
							<li>
								<h1>Slide <br> One</h1>
							</li>
							<li><a href="#" class="button">Text</a></li>
						</ul>
					</div>
					<div class="slider__options">
						<ul>
							<li><a class="go-to-previous"><i class="fa-solid fa-arrow-left"></i></a></li>
							<li><a class="go-to-next"><i class="fa-solid fa-arrow-right"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="slider__slide" data-slide="3">
				<div class="slider__wrap">
					<div class="slider__back"></div>
				</div>
				<div class="slider__inner">
					<div class="slider__content">
						<ul>
							<li>
								<h1>Slide <br> One</h1>
							</li>
							<li><a href="#" class="button">Text</a></li>
						</ul>
					</div>
					<div class="slider__options">
						<ul>
							<li><a class="go-to-previous"><i class="fa-solid fa-arrow-left"></i></a></li>
							<li><a class="go-to-next"><i class="fa-solid fa-arrow-right"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="slider__slide" data-slide="4">
				<div class="slider__wrap">
					<div class="slider__back"></div>
				</div>
				<div class="slider__inner">
					<div class="slider__content">
						<ul>
							<li>
								<h1>Slide <br> One</h1>
							</li>
							<li><a href="#" class="button">Text</a></li>
						</ul>
					</div>
					<div class="slider__options">
						<ul>
							<li><a class="go-to-previous"><i class="fa-solid fa-arrow-left"></i></a></li>
							<li><a class="go-to-next"><i class="fa-solid fa-arrow-right"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="slider__indicators"></div>
		</div>

		<div class="section-container">
			<div class="row">
				<div class="alt_block_info_data">
					<div class="alt_block_info_text">
						<h1>Find the Art in Ballet and Dance</h1>
						<p>Our premium, contemporary dance studio offers tuition and training in ballet and dance!</p>
					</div>
				</div>
				<div class="alt_block_info_data">
					<div class="alt_block_info_img">
						<img src="Assets/Images/girl_studio.jpg" alt="Student in Ballet">
					</div>
				</div>
			</div>
			<div class="row odd">
				<div class="alt_block_info_data">
					<div class="alt_block_info_img">
						<img src="Assets/Images/kids_studio.jpg" alt="Student in Ballet">
					</div>
				</div>
				<div class="alt_block_info_data">
					<div class="alt_block_info_text">
						<h1>Find the Art in Ballet and Dance</h1>
						<p>Our premium, contemporary dance studio offers tuition and training in ballet and dance!</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="alt_block_info_data">
					<div class="alt_block_info_text">
						<h1>Find the Art in Ballet and Dance</h1>
						<p>Our premium, contemporary dance studio offers tuition and training in ballet and dance!</p>
					</div>
				</div>
				<div class="alt_block_info_data">
					<div class="alt_block_info_img">
						<img src="Assets/Images/abstract_dance.jpg" alt="Student in Ballet">
					</div>
				</div>
			</div>
		</div>
	</section>

	<?php include 'php/footer.php'?>

	<script language="Javascript" type="text/javascript" src="js/main.js"></script>
	<script langauge="Javascript" type="text/javascript" stc="js/main.js"></script>
</body>

</html>