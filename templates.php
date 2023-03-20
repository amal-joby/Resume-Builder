<?php
session_start();

if(isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] == 'true'){
	// calling variables from form
	$firstName=$_POST['first_name'];
	$lastName = $_POST['last_name'];
	$dob = $_POST['dob'];
	$email = $_POST['email'];
	$ph = $_POST['phone'];
	$abme = $_POST['abme'];
	$skill1= '';
	$skill2='';
	$skill3= '';
	$_SESSION['skill1']='';
	$_SESSION['skill2']='';
	$_SESSION['skill3']='';
	if(isset($_POST['skill1'])){
		$skill1 = $_POST['skill1'];
		$_SESSION['skill1'] =$skill1;
	}
	if(isset($_POST['skill2'])){
		$skill2 = $_POST['skill2'];
		$_SESSION['skill2']=$skill2;
	}
	if(isset($_POST['skill3'])){
		$skill3 = $_POST['skill3'];
		$_SESSION['skill3']=$skill3;
	}
	$hobby1='';
	$hobby2='';
	$hobby3='';
	$_SESSION['hobby1']='';
	$_SESSION['hobby2']='';
	$_SESSION['hobby3']='';
	if(isset($_POST['hobby1'])){
		$hobby1 = $_POST['hobby1'];
		$_SESSION['hobby1']=$hobby1;
	}
	if(isset($_POST['hobby2'])){
		$hobby2 = $_POST['hobby2'];
		$_SESSION['hobby2']=$hobby2;
	}
	if(isset($_POST['hobby3'])){
		$hobby3 = $_POST['hobby3'];
		$_SESSION['hobby3']=$hobby3;
	}
	$strength1='';
	$strength2='';
	$strength3='';
	$_SESSION['strength1']='';
	$_SESSION['strength2']='';
	$_SESSION['strength3']='';
	if(isset($_POST['strength1'])){
		$strength1=$_POST['strength1'];
		$_SESSION['strength1']=$strength1;
	}
	if(isset($_POST['strength2'])){
		$strength2=$_POST['strength2'];
		$_SESSION['strength2']=$strength2;
	}
	if(isset($_POST['strength3'])){
		$strength3=$_POST['strength3'];
		$_SESSION['strength3']=$strength3;
	}
	$institute1='';
	$institute2='';
	$institute3='';
	$degree1='';
	$degree2='';
	$degree3='';
	$from1='';
	$from2='';
	$from3='';
	$to1='';
	$to2='';
	$to3='';
	$grade1='';
	$grade2='';
	$grade3='';
	$_SESSION['institute1']='';
	$_SESSION['institute2']='';
	$_SESSION['institute3']='';
	$_SESSION['degree1']='';
	$_SESSION['degree2']='';
	$_SESSION['degree3']='';
	$_SESSION['from1']='';
	$_SESSION['from2']='';
	$_SESSION['from3']='';
	$_SESSION['to1']='';
	$_SESSION['to2']='';
	$_SESSION['to3']='';
	$_SESSION['grade1']='';
	$_SESSION['grade2']='';
	$_SESSION['grade3']='';
	if(isset($_POST['institute1'])){
		$institute1=$_POST['institute1'];
		$_SESSION['institute1']=$institute1;
	}
	if(isset($_POST['institute2'])){
		$institute2=$_POST['institute2'];
		$_SESSION['institute2']=$institute2;
	}
	if(isset($_POST['institute3'])){
		$institute3=$_POST['institute3'];
		$_SESSION['institute3']=$institute3;
	}
	if(isset($_POST['degree1'])){
		$degree1=$_POST['degree1'];
		$_SESSION['degree1']=$degree1;
	}
	if(isset($_POST['degree2'])){
		$degree2=$_POST['degree2'];
		$_SESSION['degree2']=$degree2;
	}
	if(isset($_POST['degree3'])){
		$degree3=$_POST['degree3'];
		$_SESSION['degree3']=$degree3;
	}
	if(isset($_POST['from1'])){
		$from1=$_POST['from1'];
		$_SESSION['from1']=$from1;
	}
	if(isset($_POST['from2'])){
		$from2=$_POST['from2'];
		$_SESSION['from2']=$from2;
	}
	if(isset($_POST['from3'])){
		$from3=$_POST['from3'];
		$_SESSION['from3']=$from3;
	}
	if(isset($_POST['to1'])){
		$to1=$_POST['to1'];
		$_SESSION['to1']=$to1;
	}
	if(isset($_POST['to2'])){
		$to2=$_POST['to2'];
		$_SESSION['to2']=$to2;
	}
	if(isset($_POST['to3'])){
		$to3=$_POST['to3'];
		$_SESSION['to3']=$to3;
	}
	if(isset($_POST['grade1'])){
		$grade1=$_POST['grade1'];
		$_SESSION['grade1']=$grade1;
	}
	if(isset($_POST['grade2'])){
		$grade2=$_POST['grade2'];
		$_SESSION['grade2']=$grade2;
	}
	if(isset($_POST['grade3'])){
		$grade3=$_POST['grade3'];
		$_SESSION['grade3']=$grade3;
	}



	$title1='';
	$title2='';
	$title3='';
	$_SESSION['title1']='';
	$_SESSION['title2']='';
	$_SESSION['title3']='';
	if(isset($_POST['title1'])){
		$title1 = $_POST['title1'];
		$_SESSION['title1'] =$title1;
	}
	if(isset($_POST['title2'])){
		$title2 = $_POST['title2'];
		$_SESSION['title2'] =$title2;
	}
	if(isset($_POST['title3'])){
		$title3= $_POST['title3'];
		$_SESSION['title3'] =$title3;
	}
	$description1='';
	$description2='';
	$description3='';
	if(isset($_POST['description1'])){
		$des1 = $_POST['description1'];
		$_SESSION['des1'] =$des1;
	}
	if(isset($_POST['description2'])){
		$des2 = $_POST['description2'];
		$_SESSION['des2'] =$des2;
	}
	if(isset($_POST['description3'])){
		$des3= $_POST['description3'];
		$_SESSION['des3'] =$des3;
	}
	$address=$_POST['address'];
	$careerObjective=$_POST['career0bjective'];
	$achievements = $_POST['achievements'];

	// creating session variables

	$_SESSION['fname']=$firstName;
	$_SESSION['lname']=$lastName;
	$_SESSION['dob'] = $dob;
	$_SESSION['mail']=$email;
	$_SESSION['ph'] = $ph;
	$_SESSION['address'] = $address;
	$_SESSION['careerObjective'] = $careerObjective;
	$_SESSION['achievements']=$achievements;
	$_SESSION['abme']= $abme;

}


?> 

<!DOCTYPE html>
<html lang="en-us">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>A+ Resumes</title>
		<link href="./css/templateStyles.css" rel="stylesheet">
	</head>
	<body>
		<!-- header section -->
		<?php
			require './partials/_nav.php';
			require './partials/_dbconnect.php';
		?>
		<!-- body section -->
		<h1 class="template-heading">Templates</h1>
		<section class="templates-showcase-section">
			<div class="container">
				<div class="center-div">
					
					<div class="templates tmp2">
                    	<a href="resume-templates/o/index.php">
							<img class="img-2" src="./imgs/resume-template-imgs/resumeTemplateTwo.png" alt="Resume Template Two">
						</a>
					</div>
					<div class="templates tmp3">
                    	<a href="resume-templates/p/index.php">
							<img class="img-3" src="./imgs/resume-template-imgs/resumeTemplateOne.png" alt="Resume Template One">
						</a>
					</div>
						<div class="templates tmp4">
                    	<a href="resume-templates/m/index.php">
							<img class="img-4" src="./imgs/resume-template-imgs/srt-v0.9.png" alt="srt Template">
						</a>
					</div>
					<!--
					<div class="templates tmp5">
                    <a href="resume-templates/r/tem6.php">
						<img class="img-5" src="./imgs/resume-template-imgs/right-resume.png" alt="Right Resume Template">
					</div>
					-->
				</div>

			</div>
		</section>


		<!--footer section -->
		<?php
			require './partials/_footer.php';
		?>
	</body>
</html>