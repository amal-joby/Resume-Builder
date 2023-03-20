<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en-us">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>A+ Resumes</title>
		<!-- bootstrap cdn for css -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
		<!-- custom css -->
		<link href="./css/styles.css" rel="stylesheet">
	</head>
	<body>
		<!-- header section -->
		<?php
			require './partials/_nav.php';
			require './partials/_dbconnect.php';
		?>
		<!-- body section -->
		<section class="main">
			<div class="container">
				<div class="left-container">
					<div class="left-container-contents">
						<h1 class="head-text">Build a Professional Resume</h1>
						<p class="sub-text">Create your resume easily with our free and professional templates</p>
						<button class="create-resume-btn"><span>Create My Resume</span></button>
					</div>
				</div>
				<div class="right-container">
					<img class="showcase-img" src="./imgs/resume-image-3.jpg" alt="Resume image to showcase">
				</div>
			</div>
		</section>
		<section id="benefits">
			<div class="container">
				<div class="benefits-heading-container">
					<h2>Get your dream job with our professional resume</h2>
				</div>
				<div class="benefits-content-container">
					<div class="left-container">
						<div class="benefits-contents">
							<h3>Professional Resume Templates</h3>
							<p>Choose from provided professional resume templates.</p> 
						</div>
						<div class="benefits-contents">
							<h3>Fast and Easy to Use</h3>
							<p>Our free resume builder lets you easily and quickly create a resume using the templates provided.</p>
						</div>
						<div class="benefits-contents">
							<h3>Download your resume as PDF</h3>
							<p>Download your resume and use it as per your interests.</p>
						</div>
					</div>
				</div>
				<div class="right-container">
					<img src="./imgs/benefits.svg" alt="Image which shows the benefits of this resume builder">
				</div>
			</div>
		</section>
		<!--footer section -->
		<?php
			require './partials/_footer.php';
		?>

		<!-- js for bootstrap -->
		 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
	</body>
</html>