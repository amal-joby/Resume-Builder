<?php
session_start();
if(!isset($_SESSION['loggedIn']) &&  $_SESSION['loggedIn']!=true){
    $error="Log in to continue";
    header("Location: /login-dir/Resume-Builder-main/index.php?login=false&error=".$error);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resume Generator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./css/formStyles.css">
</head>
<body>
    <div class="container text-light">
    <h1 class="text-center my-5 fw-bold">Resume Form</h1>
    <div class="form-container">
        <form action="templates.php" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="token" value="HGsZOXpfNC">
            <!-- 
            <div class="border border-dark p-3 mb-3">    
                <h2>Profile Image</h2>
                <div class="mb-3">
                    <label class="form-label">Select a square image 1:1 (Recommended)</label>
                    <input class="form-control" name="profile_image" type="file" >
                </div>
            </div>
        -->
            <div class="border border-dark p-3 mb-3">   
                <div class="d-flex justify-content-between mb-3">
                    <div>
                        <label class="form-label">First Name</label>
                        <input type="text" name="first_name" class="form-control" >
                    </div>
                    <div>
                        <label class="form-label">Last Name</label>
                        <input type="text" name="last_name" class="form-control" >
                    </div>
                </div>
            
                <div class="mb-3">
                    <label class="form-label">Date of Birth</label>
                    <input type="text" class="form-control" name="dob" placeholder="dd/mm/yy" >
                </div>
            
                <div class="mb-3">
                    <label class="form-label">Email address</label>
                    <input type="email" class="form-control" name="email" >
                    <div class="form-text text-light">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                    <label class="form-label">Phone number</label>
                    <input type="number" class="form-control" id="phone" name="phone" placeholder="0300-1234567" pattern="[0-9]{4}-[0-9]{7}" >
                </div>
            </div>
            <div class="border border-dark p-3 mb-3">    
                <h2>Skills</h2>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Skillset Name</label>
                    <input type="text" class="form-control" name="skill1" >
                    <select class="form-select mt-2" name="skill_level1" >
                        <option value="">Select stars based upon your skill level</option>
                        <option value="beginner">1 - Beginner</option>
                        <option value="intermediate">2 - intermediate</option>
                        <option value="proficient">3 - profiecent</option>
                      
                    </select>
                </div>
                <div id="addSkill"></div>
                <div class="mb-3">
                    <button type="button" id="skill_hide" class="btn btn-primary form-control" onclick="addSkill()">+</button>
                </div>
                
            </div>
            <div class="border border-dark p-3 mb-3">    
                <h2>Hobbies</h2>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Hobby</label>
                    <input type="text" name="hobby1" class="form-control" >
                </div>
                <div id="addHobby"></div>
                <div class="mb-3">
                    <button type="button" id="hobby_hide" class="btn btn-primary form-control" onclick="addHobby()">+</button>
                </div>
            </div>
        <div class="border border-dark p-3 mb-3">    
                <h2>Address</h2>
                <div class="form-floating">
                    <textarea class="form-control" name="address" style="height: 100px" ></textarea>
                </div>
            </div>
            <div class="border border-dark p-3 mb-3">    
                <h2>Career Objective[In more than 20 words]</h2>
                <div class="form-floating">
                    <textarea class="form-control" name="career0bjective" style="height: 100px" ></textarea>
                </div>
            </div>
            <div class="border border-dark p-3 mb-3">    
                <h2>Strength</h2>
                <div class="mb-3">
                    <input type="text" name="strength1" class="form-control">
                </div>
                <div class="mb-3">
                    <input type="text" name="strength2" class="form-control">
                </div>
                <div class="mb-3">
                    <input type="text" name="strength3" class="form-control">
                </div>
            </div>
            <div class="border border-dark p-3 mb-3">    
                <h2>Achievements</h2>
                <div class="form-floating">
                    <textarea class="form-control" name="achievements" style="height: 100px" ></textarea>
                </div>
            </div>
            <div class="border border-dark p-3 mb-3">    
                <h2>Education</h2>
                <div class="mb-3">
                    <label for="exampleInputEmail" class="form-label">School/College/University</label>
                    <input type="text" name="institute1" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail" class="form-label">Qualification/Degree Name</label>
                    <input type="text" name="degree1" class="form-control">
                </div>
                <div class="mb-3 d-flex justify-content-between">
                    <div>
                        <label for="exampleInputEmail" class="form-label">From</label>
                        <input type="text" name="from1" class="form-control" placeholder="month-year">
                    </div>
                    <div>
                        <label for="exampleInputEmail" class="form-label">To</label>
                        <input type="text" name="to1" class="form-control" placeholder="month-year">
                    </div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail" class="form-label">Grade/Score/CGPA</label>
                    <input type="text" name="grade1" class="form-control">
                </div>
            
                <div id="addEducation"></div>
                <div class="mb-3">
                    <button type="button" id="education_hide" class="btn btn-primary form-control" onclick="addEducation()">+</button>
                </div>
            
            </div>
            <div class="border border-dark p-3 mb-3">    
                <h2>Experience (Max:3)</h2>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Position and company(seperated by '@')</label>
                    <input type="text" name="title1" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Description</label>
                    <input type="text" name="description1" class="form-control">
                </div>

                <div id="addExperience"></div>
                <div class="mb-3">
                    <button type="button" id="experience_hide" class="btn btn-primary form-control" onclick="addExperience()">+</button>
                </div>
            </div>
            <div class="border border-dark p-3 mb-3">
                <h2>About</h2>
                <!--
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">ABOUT ME</label>
                    <input type="text" name="abme" class="form-control">
                </div>
                -->
                <div class="form-floating">
                    <textarea class="form-control" name="abme" style="height: 100px" ></textarea>
                </div>
            </div>
            <div>

            
            <input type="submit" value ="continue" name="val" class="form-control my-2">
            </div>
        </form>
    </div>
    </div>
    <script src="./js/app.js"></script>
</body>
</html>