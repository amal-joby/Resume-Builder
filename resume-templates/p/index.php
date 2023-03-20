
<?php
session_start();
?>

<!DOCTYPE html>

<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Resume template</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <link href='https://fonts.googleapis.com/css?family=Lato:400,300,700' rel='stylesheet' type='text/css'>

<div class="container">
  <div class="header">
    <div class="full-name">
      <span class="first-name"><?php echo $_SESSION['fname']; ?></span> 
      <span class="last-name"><?php echo $_SESSION['lname']; ?></span>
    </div>
    <div class="contact-info">
      <span class="email">Email: </span>
      <span class="email-val"><?php echo $_SESSION['mail']; ?></span>
      <span class="separator"></span>
      <span class="phone">Phone: </span>
      <span class="phone-val"><?php echo $_SESSION['ph']; ?></span>
    </div>
    
    <div class="about">
      <div class="section__title">Objective</div>
      <!-- <span class="position"><?php //echo $_SESSION['skill1'] ; ?> </span> -->
      <span ><?php echo $_SESSION['careerObjective'] ; ?>
      <span class="desc">
        
      </span>
    </div>
  </div>
   <div class="details">
    <div class="section">
      <div class="section__title">Experience</div>
      <div class="section__list">
        <div class="section__list-item">
          <div class="left">
            <div class="name"><?php echo $_SESSION['title1']; ?></div>
            <!--
            <div class="addr">San Fr, CA</div>
            <div class="duration">Jan 2011 - Feb 2015</div>
            -->
          </div>
          <div class="right">
            <div class="name"><?php echo $_SESSION['des1']; ?></div>
            <!--
            <div class="desc">did This and that</div>
          -->
          </div>
        </div>

        <?php
            if($_SESSION['title2']!='' && $_SESSION['des2']!=''){
                echo '
                    <div class="section__list-item">
                    <div class="left">
                      <div class="name">'.$_SESSION['title2'].'</div>
                      <!--
                      <div class="addr">San Fr, CA</div>
                      <div class="duration">Jan 2011 - Feb 2015</div>
                      -->
                    </div>
                    <div class="right">
                      <div class="name">'.$_SESSION['des2'].'</div>
                      <!--
                      <div class="desc">did This and that</div>
                      -->
                    </div>
                  </div>
                ';
            }
            if($_SESSION['title3']!='' && $_SESSION['des3']!=''){
                echo '
                    <div class="section__list-item">
                    <div class="left">
                      <div class="name">'.$_SESSION['title3'].'</div>
                      <!--
                      <div class="addr">San Fr, CA</div>
                      <div class="duration">Jan 2011 - Feb 2015</div>
                      -->
                    </div>
                    <div class="right">
                      <div class="name">'.$_SESSION['des3'].'</div>
                      <!--
                      <div class="desc">did This and that</div>
                      -->
                    </div>
                  </div>
                ';
            }
        ?>

      </div>
    </div>
    <div class="section">
      <div class="section__title">Education</div>
      <div class="section__list">
        <div class="section__list-item">
          <div class="left">
            <div class="name"><?php echo $_SESSION['institute1']; ?></div>
            <!--
            <div class="addr">San Fr, CA</div>
            -->
            <div class="duration"><?php echo $_SESSION['from1'].' - '.$_SESSION['to1']; ?></div>
            <div class="desc"><?php echo "Grade : ".$_SESSION['grade1']; ?></div>
          </div>
          <div class="right">
            <div class="name">Qualification</div>
            <div class="desc"><?php echo $_SESSION['degree1']; ?></div>
          </div>
        </div>

        <?php
            if($_SESSION['institute2']!='' && $_SESSION['degree2']!=''){
                echo '
                    <div class="section__list-item">
                    <div class="left">
                      <div class="name">'.$_SESSION['institute2'].'</div>
                      <!--
                      <div class="addr">San Fr, CA</div>
                      -->
                      <div class="duration">'.$_SESSION['from2'].' - '.$_SESSION['to2'].'</div>
                      <div class="desc">Grade : '.$_SESSION['grade2'].'</div>
                    </div>
                    <div class="right">
                      <div class="name">Qualification</div>
                      <div class="desc">'.$_SESSION['degree2'].'</div>
                    </div>
                  </div>
                ';
            }
            if($_SESSION['institute3']!='' && $_SESSION['degree3']!=''){
                echo '
                    <div class="section__list-item">
                    <div class="left">
                      <div class="name">'.$_SESSION['institute3'].'</div>
                      <!--
                      <div class="addr">San Fr, CA</div>
                      -->
                      <div class="duration">'.$_SESSION['from3'].' - '.$_SESSION['to3'].'</div>
                      <div class="desc">Grade : '.$_SESSION['grade3'].'</div>
                    </div>
                    <div class="right">
                      <div class="name">Qualification</div>
                      <div class="desc">'.$_SESSION['degree3'].'</div>
                    </div>
                  </div>
                ';
            }
        ?>
        

      </div>
      
  </div>
     <div class="section">
      <div class="section__title">Achievements</div> 
       <div class="section__list">

         <div class="section__list-item">
          <!--
           <div class="name">DSP</div>
         -->
           <div class="text"><?php echo $_SESSION['achievements']; ?></div>
         </div>
         
        <!--
         <div class="section__list-item">
           <div class="name">DSP</div>
           <div class="text">I am a front-end developer with more than 3 years of experience writing html, css, and js. I'm motivated, result-focused and seeking a successful team-oriented company with opportunity to grow.</div>
         </div>
       -->

       </div>
    </div>
     <div class="section">
       <div class="section__title">Skills</div>
       <div class="skills">
        <?php
          if($_SESSION['skill1']!=''){
              echo '
                  <div class="skills__item">
                   <div class="left"><div class="name">
                     '.$_SESSION['skill1'].'
                     </div></div>
                   <div class="right">
                                  <input  id="ck1" type="checkbox" checked/>

                     <label for="ck1"></label>
                                  <input id="ck2" type="checkbox" checked/>

                      <label for="ck2"></label>
                                 <input id="ck3" type="checkbox" />

                      <label for="ck3"></label>
                                   <input id="ck4" type="checkbox" />
                    <label for="ck4"></label>
                                  <input id="ck5" type="checkbox" />
                      <label for="ck5"></label>

                   </div>
                 </div>
              ';
          }
          if($_SESSION['skill2']!=''){
              echo '
                  <div class="skills__item">
                   <div class="left"><div class="name">
                     '.$_SESSION['skill2'].'
                     </div></div>
                   <div class="right">
                                  <input  id="ck1" type="checkbox" checked/>

                     <label for="ck1"></label>
                                  <input id="ck2" type="checkbox" checked/>

                      <label for="ck2"></label>
                                 <input id="ck3" type="checkbox" />

                      <label for="ck3"></label>
                                   <input id="ck4" type="checkbox" />
                    <label for="ck4"></label>
                                  <input id="ck5" type="checkbox" />
                      <label for="ck5"></label>

                   </div>
                 </div>
              ';
          }
          if($_SESSION['skill3']!=''){
              echo '
                  <div class="skills__item">
                   <div class="left"><div class="name">
                     '.$_SESSION['skill3'].'
                     </div></div>
                   <div class="right">
                                  <input  id="ck1" type="checkbox" checked/>

                     <label for="ck1"></label>
                                  <input id="ck2" type="checkbox" checked/>

                      <label for="ck2"></label>
                                 <input id="ck3" type="checkbox" />

                      <label for="ck3"></label>
                                   <input id="ck4" type="checkbox" />
                    <label for="ck4"></label>
                                  <input id="ck5" type="checkbox" />
                      <label for="ck5"></label>

                   </div>
                 </div>
              ';
          }
        ?>
         
         
       </div>
     <div class="section">
     <div class="section__title">
       Interests
       </div>
       <div class="section__list">
         <div class="section__list-item">
         <?php 
             if($_SESSION['hobby1']!=''){
                echo $_SESSION['hobby1'];
             }
             if($_SESSION['hobby2']!=''){
                echo ' , '.$_SESSION['hobby2'];
             } 
             if($_SESSION['hobby3']!=''){
                echo ' , '.$_SESSION['hobby3'];
             } 
          ?>
          </div>
       </div>
     </div>
     </div>
  </div>
</div>

<!-- jquery cdn -->
<script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>

<script>
  jQuery(document).ready(function(){
    
      window.print();
    
  });
</script> 
</body>
</html>