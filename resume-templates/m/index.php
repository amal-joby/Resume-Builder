<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"> 
<html>
<head>

	<title><?php echo $_SESSION['fname']; ?>  | <?php echo $_SESSION['mail']; ?></title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />

	<meta name="keywords" content="" />
	<meta name="description" content="" />

	<link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/2.7.0/build/reset-fonts-grids/reset-fonts-grids.css" media="all" /> 
	<link rel="stylesheet" type="text/css" href="resume.css" media="all" />

</head>
<body>

<div id="doc2" class="yui-t7">
	<div id="inner">
	
		<div id="hd">
			<div class="yui-gc">
				<div class="yui-u first">
					<h1><?php echo $_SESSION['fname'].' '.$_SESSION['lname']; ?> </h1>
					<h2></h2>
				</div>

				<div class="yui-u">
					<div class="contact-info">
						<!-- <h3><a id="pdf" href="#"></a></h3> -->
						<h3><a href="mailto:name@yourdomain.com"><?php echo $_SESSION['mail']; ?></a></h3>
						<h3><?php echo $_SESSION['ph']; ?></h3>
					</div><!--// .contact-info -->
				</div>
			</div><!--// .yui-gc -->
		</div><!--// hd -->

		<div id="bd">
			<div id="yui-main">
				<div class="yui-b">

					<div class="yui-gf">
						<div class="yui-u first">
							<h2>Career Objective</h2>
						</div>
						<div class="yui-u">
							<p class="enlarge">
								<?php echo $_SESSION['careerObjective'] ?> 
							</p>
						</div>
					</div><!--// .yui-gf -->

					<div class="yui-gf">
						<div class="yui-u first">
							<h2>Skills</h2>
						</div>
						<div class="yui-u">

								<div class="talent">
									<h2><?php echo $_SESSION['skill1']; ?></h2>
									<!-- <p>Assertively exploit wireless initiatives rather than synergistic core competencies.	</p> -->
								</div>
								<?php
									if($_SESSION['skill2']!=''){
										echo '
											<div class="talent">
												<h2>'.$_SESSION['skill2'].'</h2>
												<!-- <p>Credibly streamline mission-critical value with multifunctional functionalities.	 </p> -->
											</div>
										';
									}
									if($_SESSION['skill3']!=''){
										echo '
											<div class="talent">
												<h2>'.$_SESSION['skill3'].'</h2>
												<!-- <p>Credibly streamline mission-critical value with multifunctional functionalities.	 </p> -->
											</div>
										';
									}
								?>

								
						</div>
					</div><!--// .yui-gf -->

					<div class="yui-gf">
						<div class="yui-u first">
							<h2>STRENGTH</h2>
						</div>
						<!--
						<div class="yui-u">
							<ul class="talent">
								<li><?php echo $_SESSION['strength1']; ?></li>
								<li><?php echo $_SESSION['strength2']; ?></li>
								<li class="last"><?php echo $_SESSION['strength3']; ?></li>
							</ul>

							<ul class="talent">
								<li><?php echo $_SESSION['skill1']; ?></li>
								<li><?php echo $_SESSION['skill2']; ?></li>
								<li class="last"><?php echo $_SESSION['skill3']; ?></li>
							</ul>

							<ul class="talent">
								<li><?php echo $_SESSION['hobby1']; ?></li>
								<li><?php echo $_SESSION['hobby2']; ?></li>
								<li class="last"><?php echo $_SESSION['hobby3']; ?></li>
							</ul>
						</div>
					-->
					<div class="yui-u">
						<ul class="talent">
							<li><?php echo $_SESSION['strength1']; ?></li>
							<?php
								if($_SESSION['strength2']!=''){
									echo '
										<li>'.$_SESSION['strength2'].'</li>
									';
								}
								if($_SESSION['strength3']!=''){
									echo '
										<li>'.$_SESSION['strength3'].'</li>
									';
								}
							?>
						</ul>

					</div>
					</div><!--// .yui-gf-->

					<div class="yui-gf">
	
						<div class="yui-u first">
							<h2>Experience</h2>
						</div><!--// .yui-u -->

						<div class="yui-u">

							<div class="job">
								<h2><?php echo $_SESSION['title1']; ?></h2>
								<h3></h3>
								<!-- <h4>2005-2007</h4> -->
								<p><?php echo $_SESSION['des1']; ?>. </p>
							</div>
							<?php
								if($_SESSION['title2']!='' && $_SESSION['des2']!=''){
									echo '
										<div class="job">
											<h2>'.$_SESSION['title2'].'</h2>
											<h3></h3>
											<!-- <h4>2005-2007</h4> -->
											<p>'.$_SESSION['des2'].'</p>
										</div>
									';
								}
								if($_SESSION['title3']!='' && $_SESSION['des3']!=''){
									echo '
										<div class="job">
											<h2>'.$_SESSION['title3'].'</h2>
											<h3></h3>
											<!-- <h4>2005-2007</h4> -->
											<p>'.$_SESSION['des3'].'</p>
										</div>
									';
								}
							?>
	

						</div><!--// .yui-u -->
					</div><!--// .yui-gf -->


					<div class="yui-gf last">
						<div class="yui-u first">
							<h2>Education</h2>
						</div>
						<div class="yui-u">
							<!--
								<h2><?php echo $_SESSION['institute1']; ?></h2>
								<h3><?php echo $_SESSION['degree1']; ?> &mdash; <strong><?php echo $_SESSION['grade1']; ?></strong> </h3>
							-->
							<div class="job">
								<h2><?php echo $_SESSION['institute1']; ?></h2>
								<h3><?php echo $_SESSION['degree1']; ?> &mdash; <strong><?php echo $_SESSION['grade1']; ?></strong></h3>
								<h4><?php echo $_SESSION['from1'].' - '.$_SESSION['to1']; ?></h4>
							</div>
							<?php
								if($_SESSION['institute2']!='' && $_SESSION['degree2']!=''){
									echo '
										<div class="job">
											<h2>'.$_SESSION['institute2'].'</h2>
											<h3>'.$_SESSION['degree2'].' &mdash; <strong>'.$_SESSION['grade2'].'</strong></h3>
											<h4>'.$_SESSION['from2'].' - '.$_SESSION['to2'].'</h4>
										</div>
									';
								}
								if($_SESSION['institute3']!='' && $_SESSION['degree3']!=''){
									echo '
										<div class="job">
											<h2>'.$_SESSION['institute3'].'</h2>
											<h3>'.$_SESSION['degree3'].' &mdash; <strong>'.$_SESSION['grade3'].'</strong></h3>
											<h4>'.$_SESSION['from3'].' - '.$_SESSION['to3'].'</h4>
										</div>
									';
								}
							?>
						</div>
					</div><!--// .yui-gf -->


				</div><!--// .yui-b -->
			</div><!--// yui-main -->
		</div><!--// bd -->

		<div id="ft">
			<p><?php echo $_SESSION['fname']; ?> &mdash; <a href="mailto:name@yourdomain.com"><?php echo $_SESSION['mail']; ?></a> &mdash; <?php echo $_SESSION['ph']; ?></p>
		</div><!--// footer -->

	</div><!-- // inner -->


</div><!--// doc -->
<!-- jquery cdn -->
<script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>

<script>
  jQuery(document).ready(function(){
    window.print();
  });
</script>


</body>
</html>