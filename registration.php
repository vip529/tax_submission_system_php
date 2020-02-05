<?php

if(isset($_POST['new_user'])) {

$username = $_POST['username'];
$password = $_POST['password'];
$name = $_POST['name'];
$pan = $_POST['pan'];
$gender = $_POST['gender'];
$dob = $_POST['dob'];
$email = $_POST['email'];
$contact = $_POST['contact'];
$address = $_POST['address'];



// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'tax');

// validating presence of an account

    $check="SELECT username FROM users  WHERE username = $username";
    $rechek=mysqli_query($db, $check);
    $ecount=mysqli_num_rows($rechek);

    if($ecount!=0)
    {
        $message = "Username Already Exists";
        echo "<script type='text/javascript'>alert('$message');</script>";
    }

    else
    {
        $query = "INSERT INTO users(username, password, name, pan, gender, dob, email, contact, address) 
        VALUES ('$username', '$password',  '$name', $pan, '$gender', '$dob', '$email', '$contact', '$address')";

        $result = mysqli_query($db, $query);

        $message = "User registration successfull";
        echo "<script type='text/javascript'>alert('$message');</script>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tax Submission System | User Registration</title>
    
    <!-- Font Awesome included for icons. -->
    
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">

    <script src="script.js"></script>

    <!-- Bootstrap included css jquery and javascript all included -->

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>    
    
    <style>
        .navbar li:hover{
            background-color: silver
        }
        #login_form{
            margin: auto;
            width:450px;
            border-radius:20px;
            border:2px solid #ccc;
            padding:10px 40px 25px;
            background-color:#b6e6ff;
        }
        input[type=text],input[type=password]{
            width:96.5%;
            padding:10px;
            margin-top:8px;
            border:1px solid #ccc;
            padding-left:5px;
            font-size:20px;
        }
        input[type=submit]{
            width:100%;
            background-color:#2f90ff;
            color:#fff;
            border:2px solid #white;
            padding:10px;
            font-size:20px;
            cursor:pointer;
            border-radius:5px;
        }

    </style>

</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <img src="img/Applogo.png" height="80px" width="120px" alt="Logo not found" style="border-radius: 20px; margin-left: 20px;">
        <div class="container">
        <a class="navbar-brand" style="font-size:24px; font-family:cursive" href="#">Tax Submission System</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
                
            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0 ml-5">
                    <li class="nav-item">
                        <a class="nav-link ml-2 " style="font-size:18px;" href="index.php">Home<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link ml-2"style="font-size:18px;" href="#">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link ml-2" style="font-size:18px;" href="#">Contact Us</a>
                    </li>
                </ul>
                <!-- <ul class="nav navbar-nav navbar-right active" id="login-panel">
                    <li><a href="admin.php" class="login m-3"style="font-size:18px;"><i class="fa fa-user"></i> ADMIN LOGIN </a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right" id="login-panel">
                    <li><a href="login.php" class="login m-3"style="font-size:18px;"><i class="fa fa-user"></i> USER LOGIN </a></li>
                </ul> -->
                <ul class="nav navbar-nav navbar-right" id="dashbord-panel">
                    <li><a href="userdashboard.php" class="dashboard m-3"style="font-size:22px;"> DashBoard </a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right" id="logout-panel">
                    <li><a href="logout.php" class="logout m-3"style="font-size:22px;"><i class="fa fa-user"></i> LOGOUT </a></li>
                </ul>
            </div>
        </div>
    </nav>


<div class="container">  
    <form action="registration.php" method="post"  class="newuserform" style="width: 60%;margin-left:20%;margin-top:50px;padding:50px;background-color:aliceblue;">
        <h2 style="text-align: center; font-family:cursive; margin-bottom: 50px; color: goldenrod;">New User Registration</h2>
        <div class="form-group row">
            <label for="inputUsername" class="col-sm-4 col-form-label">User Name</label>
            <div class="col-sm-8">
              <input type="text" name="username" pattern="[A-Za-z].{3,}" class="form-control" id="inputUsername" placeholder="User Name" required >
            </div>
        </div> 
        <div class="form-group row">
            <label for="inputPassword" class="col-sm-4 col-form-label">Password</label>
            <div class="col-sm-8">
              <input type="password" name="password" class="form-control" id="inputPassword" placeholder="Password" required >
            </div>
        </div>       
        <div class="form-group row">
            <label for="inputName" class="col-sm-4 col-form-label"> Name</label>
            <div class="col-sm-8">
              <input type="text" name="name" pattern="[A-Za-z].{4,}" class="form-control" id="inputName" placeholder="Your Name" required >
            </div>
        </div>
        <div class="form-group row">
            <label for="inputPan" class="col-sm-4 col-form-label">PAN Number</label>
            <div class="col-sm-8">
              <input type="text" name="pan"  class="form-control" id="inputPan" placeholder="PAN Number" required>   
            </div>
        </div>
        <div class="form-group row">
            <label for="inputGender" class="col-sm-4 col-form-label">Gender</label>
            <div class="col-sm-8">
                <select id="inputGender" name="gender" class="form-control" required>
                    <option selected>Select Gender</option>
                    <option>Male</option>
                    <option>Female</option>
                    <option>TransGender</option>
                </select>
            </div>
        </div>                                    
        <div class="form-group row">
          <label for="inputDob" class="col-sm-4 col-form-label">Date Of Birth</label>
          <div class="col-sm-8">
            <input type="date" name="dob" class="form-control" id="inputDob" required>
          </div>
        </div>  
        <div class="form-group row">
            <label for="inputEmail" class="col-sm-4 col-form-label">Email</label>
            <div class="col-sm-8">
              <input type="email"  name="email" class="form-control" id="inputEmail" placeholder="Your Email" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="inputContactno" class="col-sm-4 col-form-label">Contact Number</label>
            <div class="col-sm-8">
              <input type="text" name="contact" pattern="[0-9]{10}" class="form-control" id="inputContactno" placeholder="XXXXXXXXXX" required >
            </div>
        </div>
        <div class="form-group row">
            <label for="inputAddress" class="col-sm-4 col-form-label">Postal Address</label>
            <div class="col-sm-8">
              <input type="text" name="address" class="form-control" id="inputAddress" placeholder="Your Address" required>
            </div>
        </div>
        
        <!-- Extension further with Photo and Sign Validation -->


        <div class="form-group">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
              <label class="form-check-label" for="invalidCheck2">
                I Agree to <a href="#">Terms and Conditions</a> 
              </label>
            </div>
        </div>
        <button id="newuser" type="submit" class="btn btn-primary btn-lg" name="new_user">Register User</button>
    </form>          
</div>    

</body>
</html>