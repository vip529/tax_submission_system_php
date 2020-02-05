<?php
    
    // connect to the database
    $db = mysqli_connect('localhost', 'root', '', 'tax');
    
    // Query selecting the data from table transec of database.
    $records = ("SELECT * FROM transec ORDER BY `id` ASC");

    // storing query results to a new variable showrecords.
    $showrecords = mysqli_query($db, $records);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tax Submission System | Admin Dash Board</title>
    
    <!-- Font Awesome included for icons. -->
    
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">

    <script src="script.js"></script>

    <!-- Bootstrap included css jquery and javascript all included -->

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>    
    
    <style>
        .navbar li:hover{
            background-color: silver;
        }
        th, td {
            border: 2px solid black;
            border-collapse: collapse;
            text-align: center;
            width: max-content;
            padding: 7px;
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
                </ul> -->
                <ul class="nav navbar-nav navbar-right" id="logout-panel">
                    <li><a href="logout.php" class="logout m-3"style="font-size:22px;"><i class="fa fa-user"></i> LOGOUT </a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="paidusers_list">

<h1 style="font-family:cursive; width:100%;text-align:center; color:red;margin:40px 0px;"> Tax Payers' List </h1>

    <table style="border: 2px solid black; margin:50px 400px; ">

        <tr  style="background-color: #2ECCFA;">
            <!-- <th>ID</th> -->
            <th>User Name</th>
            <th>Annual Income</th>
            <th>Tax Amount</th>
            <th>Transaction Number</th>
            <th>Year</th>
        </tr>

    <!-- We use while loop to fetch data and display rows of date on html table -->

    <?php

        while ($transec = mysqli_fetch_assoc($showrecords)){

        echo "<tr>";
            // echo "<td>".$transec['id']."</td>";
            echo "<td>".$transec['username']."</td>";
            echo "<td>".$transec['income']."</td>";
            echo "<td>".$transec['tax']."</td>";
            echo "<td>".$transec['transact_no']."</td>";
            echo "<td>".$transec['year']."</td>";
        echo "</tr>";
        }
    ?>       
    </table>    
</div>



</body>
</html>