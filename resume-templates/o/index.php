
<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title></title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
html,body,h1,h2,h3,h4,h5,h6 {font-family: "Roboto", sans-serif}
</style>
</head>
<body class="w3-light-grey">

<!-- Page Container -->
<div class="w3-content w3-margin-top" style="max-width:1400px;">

  <!-- The Grid -->
  <div class="w3-row-padding">
  
    <!-- Left Column -->
    <div class="w3-third">
    
      <div class="w3-white w3-text-grey w3-card-4">
        <div class="w3-display-container">
          
          <img src="green-background.jpg" style="width: 100%;height:200px" alt="Avatar">
          <div class="w3-display-bottomleft w3-container w3-text-black" style="width:100%">
            <h2 style="color:#ffffff;"><?php echo $_SESSION['fname'].' '.$_SESSION['lname'] ; ?></h2>
          </div>
        </div>
        <div class="w3-container">
          <p><i class="fa fa-envelope fa-fw w3-margin-right w3-large w3-text-teal"></i><?php echo $_SESSION['mail']; ?></p>
          <p><i class="fa fa-phone fa-fw w3-margin-right w3-large w3-text-teal"></i><?php echo $_SESSION['ph']; ?></p>
          <p><i class="fa fa-home fa-fw w3-margin-right w3-large w3-text-teal"></i><?php echo $_SESSION['address']; ?></p>
          <hr>

          <p class="w3-large"><b><i class="fa fa-asterisk fa-fw w3-margin-right w3-text-teal"></i>Skills</b></p>
          <p><?php echo $_SESSION['skill1']; ?></p>
          <?php
            if($_SESSION['skill2']!=''){
              echo '
                <p>'.$_SESSION['skill2'].'</p>
              ';
            }
            if($_SESSION['skill3']!=''){
              echo '
                <p>'.$_SESSION['skill3'].'</p>
              ';
            }

          ?>
          <br>
          <p class="w3-large w3-text-theme"><b><i class="fa fa-globe fa-fw w3-margin-right w3-text-teal"></i>Career Objective</b></p>
          <p><?php echo $_SESSION['careerObjective'] ?></p>
        <!--
          <div class="w3-light-grey w3-round-xlarge">
            <div class="w3-round-xlarge w3-teal" style="height:24px;width:100%"></div>
          </div>
          <p>Spanish</p>
          <div class="w3-light-grey w3-round-xlarge">
            <div class="w3-round-xlarge w3-teal" style="height:24px;width:55%"></div>
          </div>
          <p>German</p>
          <div class="w3-light-grey w3-round-xlarge">
            <div class="w3-round-xlarge w3-teal" style="height:24px;width:25%"></div>
          </div>
        -->
          <br>
        </div>
      </div><br>

    <!-- End Left Column -->
    </div>

    <!-- Right Column -->
    <div class="w3-twothird">
    
      <div class="w3-container w3-card w3-white w3-margin-bottom">
        <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-suitcase fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Work Experience</h2>
        <div class="w3-container">
          <h5 class="w3-opacity"><b><?php echo $_SESSION['title1']; ?></b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i><!--Jan 2015 - --><span class="w3-tag w3-teal w3-round">Current</span></h6>
          <p><?php echo $_SESSION['des1']; ?></p>
          <hr>
        </div>
        <?php
          if($_SESSION['title2']!='' && $_SESSION['des2']!=''){
            echo '
                <div class="w3-container">
                  <h5 class="w3-opacity"><b>'.$_SESSION['title2'].'</b></h5>
                  <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i><!--Mar 2012 - Dec 2014 --></h6>
                  <p>'.$_SESSION['des2'].'</p>
                  <hr>
                </div>
            ';
          }
          if($_SESSION['title3']!='' && $_SESSION['des3']!=''){
            echo '
                <div class="w3-container">
                  <h5 class="w3-opacity"><b>'.$_SESSION['title3'].'</b></h5>
                  <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i><!-- Mar 2012 - Dec 2014 --></h6>
                  <p>'.$_SESSION['des3'].'</p>
                  <hr>
                </div>
            ';
          }
        ?>
        
       
      </div>

      <div class="w3-container w3-card w3-white">
        <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-certificate fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Education</h2>
        <div class="w3-container">
          <h5 class="w3-opacity"><b></b><?php echo $_SESSION['institute1']; ?></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i><?php echo $_SESSION['from1'].' - '.$_SESSION['to1']; ?></h6>
          <p><?php echo $_SESSION['degree1']; ?> | Grade : <?php echo $_SESSION['grade1']; ?></p>
          <hr>
        </div>
        <?php
        if($_SESSION['institute2']!='' && $_SESSION['degree2']!='') {
          $institute2 = $_SESSION['institute2'];
          echo '
                  <div class="w3-container">
                    <h5 class="w3-opacity"><b></b>'.$institute2.'</h5>
                    <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>'.$_SESSION['from2'].' '.$_SESSION['to2'].'</h6>
                    <p>'.$_SESSION['degree2'].' | Grade : '.$_SESSION['grade2'].'</p>
                    <hr>
                  </div>
            ';
        }
        if ($_SESSION['institute3']!='' && $_SESSION['degree3']!='') {
          echo '
                  <div class="w3-container">
                    <h5 class="w3-opacity"><b></b>'.$_SESSION['institute3'].'</h5>
                    <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>'.$_SESSION['from3'].' '.$_SESSION['to3'].'</h6>
                    <p>'.$_SESSION['degree3'].' | Grade : '.$_SESSION['grade3'].'</p>
                    <hr>
                  </div>
            ';
        }
        ?>
      </div>

    <!-- End Right Column -->
    </div>
    
  <!-- End Grid -->
  </div>
  
  <!-- End Page Container -->
</div>
<!--
<footer class="w3-container w3-teal w3-center w3-margin-top">
  <p>Find me on social media.</p>
  <i class="fa fa-facebook-official w3-hover-opacity"></i>
  <i class="fa fa-instagram w3-hover-opacity"></i>
  <i class="fa fa-snapchat w3-hover-opacity"></i>
  <i class="fa fa-pinterest-p w3-hover-opacity"></i>
  <i class="fa fa-twitter w3-hover-opacity"></i>
  <i class="fa fa-linkedin w3-hover-opacity"></i>
  
</footer>
-->

<!-- jquery cdn -->
<script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>

<script>
  jQuery(document).ready(function(){
    window.print();
  });
</script>

</body>
</html>