<?php

// require_once 'userdashboard.php';
// session_start();
// $_SESSION['username'] = $username;



if(isset($_POST['submit'])) {

    $username = $_POST['username'];
    $transact_no = $_POST['transact_no'];
    $income = $_POST['income'];
    $tax = $_POST['tax'];
    $year = $_POST['year'];

 
    // connect to the database
    $db = mysqli_connect('localhost', 'root', '', 'tax');
    

            $query = "INSERT INTO transec(username, transact_no, income, tax, year) 
            VALUES ('$username', '$transact_no',  '$income', $tax, '$year')";
    
            $result = mysqli_query($db, $query);
    
            $message = "Tax Submission successfull";
            echo "<script type='text/javascript'>alert('$message');</script>";
 
    }
 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tax Submission System | Admin Login</title>
    
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
        /* #submit_form{
            margin: auto;
            width:450px;
            border-radius:20px;
            border:2px solid #ccc;
            padding:10px 40px 25px;
            background-color:#b6e6ff;
        } */
        /* input[type=text],input[type=password]{
            width:96.5%;
            padding:10px;
            margin-top:8px;
            border:1px solid #ccc;
            padding-left:5px;
            font-size:20px;
        } */
        /* input[type=submit]{
            width:100%;
            background-color:#2f90ff;
            color:#fff;
            border:2px solid #white;
            padding:10px;
            font-size:20px;
            cursor:pointer;
            border-radius:5px;
        } */

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
                <ul class="nav navbar-nav navbar-right" id="logout-panel">
                    <li><a href="logout.php" class="logout m-3"style="font-size:22px;"><i class="fa fa-user"></i> LOGOUT </a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="but" style="text-align:center;margin:20px 10px;">
    <button class="btn btn-lg"> <a href="#">Online Payment Gateway</a></button>

    <h4>After payment Note down the Transaction number and fill below Form..</h4>
    </div>


    <div class="container"> 

    <form action="submit.php" method="post" style="width: 60%;margin-left:20%;margin-top:50px;padding:50px;background-color:aliceblue;">
        <h2 style="text-align: center; font-family:cursive; margin-bottom: 50px; color: goldenrod;">Tax Submission</h2>
        <div class="form-group row">
            <label for="inputUser" class="col-sm-4 col-form-label">User name</label>
            <div class="col-sm-8">
              <input type="text" name="username" class="form-control" id="inputUser" placeholder="User Name" required >
            </div>
        </div>
        <div class="form-group row">
            <label for="inputTransaction" class="col-sm-4 col-form-label">Transaction Number</label>
            <div class="col-sm-8">
              <input type="text" name="transact_no" class="form-control" id="inputTransaction" placeholder="Transaction Number" required >
            </div>
        </div> 
        <div class="form-group row">
            <label for="inputIncome" class="col-sm-4 col-form-label">Total Income</label>
            <div class="col-sm-8">
              <input type="text" name="income" class="form-control" id="inputIncome" placeholder="Your Income" required >
            </div>
        </div>       
        <div class="form-group row">
            <label for="inputTaxamount" class="col-sm-4 col-form-label"> Tax Amount</label>
            <div class="col-sm-8">
              <input type="text" name="tax" class="form-control" id="inputTaxamount" placeholder="Tax Amount" required >
            </div>
        </div>
        <div class="form-group row">
            <label for="inputYear" class="col-sm-4 col-form-label">Year</label>
            <div class="col-sm-8">
              <input type="text" name="year"  class="form-control" id="inputYear" placeholder="Year" required>   
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
        <button type="submit" class="btn btn-primary btn-lg" name="submit">Submit Tax</button>
    </form>          
</div> 

    

</body>
</html>