<?php 
	echo '
		<header id="header">
			<div class="botton-box-shadow">
				<div class="header-container">
					<div class="logo-img">
						<img src="./imgs/logo.png" alt="A+ logo">
					</div>
					<div class="nav-bar">
						<ul>
							<li><a href="form.php">Create Resume</a></li>
		';
		if(isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] == true){
			echo '
				<li><a href="./partials/_logout.php" class="get-started-btn">Log Out</a></li>
			';
		}else{
			echo '
				<li><a href="login.php">Sign in</a></li>
				<li><a href="signup.php" class="get-started-btn">Get Started</a></li>

			';
		}
		echo '
							
						</ul>
					</div>
				</div>
			</div>
		</header>
	';

	if(isset($_GET['signUp']) && $_GET['signUp']=='true'){
		echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Success!</strong> You have been successfully signed Up, Now log into continue.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
	}else if(isset($_GET['signUp']) && $_GET['signUp']=='false'){
		echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Sorry!</strong> '.$_GET['error'].'.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
	}
	if(isset($_GET['login']) && $_GET['login']=='true'){
		echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Success!</strong> You have been successfully Logged In.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
	}else if(isset($_GET['login']) && $_GET['login']=='false'){
		echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Sorry!</strong> '.$_GET['error'].'.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
	}
?> 