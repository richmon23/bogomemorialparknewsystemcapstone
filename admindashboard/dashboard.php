<?php
	require '../connection.php';
	session_start();



$pdoQuery =" SELECT * FROM reservation";
$pdoResult =  $conn->query($pdoQuery);
$pdoRowCount = $pdoResult ->rowCount();


// $query = "DELETE FROM reservation WHERE id = :id";
// $stmt = $pdo->prepare($query);
// $id = 123;
// $stmt->bindParam(':id', $id);
// $stmt->execute();
// $rowCount = $stmt->rowCount();

// <h4 class="text-muted"> <?php echo "Welcome Back: " . $username;



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!--FONTAWESOME-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="../css/admindash.css">
</head>
    <body>
            <div class="sidebar">
                <div class="logo"></div>
                <ul class="menu">
                    <li class="active">
                        <a href="dashboard.php">
                            <i class="fas fa-tachometer-alt"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="admindata.php">
                            <i class="fas fa-user"></i>
                            <span>Admin Data</span>
                        </a>
                    </li>
                    <li>
                        <a href="deceasedperson.php">
                            <i class="fas fa-user"></i>
                            <span>Deceased Person</span>
                        </a>
                    </li>
                    <li>
                        <a href="reservation.php">
                            <i class="fas fa-briefcase"></i>
                            <span>Reservation</span>
                        </a>
                    </li>
                    <li>
                        <a href="reviews.php">
                            <i class="fas fa-question-circle"></i>
                            <span>Reviews</span>
                        </a>
                    </li>
                    <!--<li>
                        <a href="#">
                            <i class="fas fa-star"></i>
                            <span>Testimonial</span>
                        </a>
                    </li> -->
                    <li>
                        <a href="#">
                            <i class="fas fa-cog"></i>
                            <span>Settings</span>
                        </a>
                    </li>
                    <li class="logout">
                        <a href="../logout.php">
                            <i class="fas fa-sign-out-alt"></i>
                            <span>Logout</span>
                        </a>
                    </li>   
                </ul>
            </div>


            <div class="main--content">
                <div class="header--wrapper">
                    <div class="header--title">
                       <h1 id="todaysdata"> <h3>Bogo Memorial Park</h3></h1>
                        <h2>Dashboard</h2>
                    </div>
                    <!-- display the name of the admin -->
                    <div class="user--info">
                        <div class="search--box">
                            <i class="fa-solid fa-search"></i>
                            <input type="text" placeholder="Search"/> 
                        </div>
                        <img src="../images/mort.jpg" alt="sample pic">
                    </div>
                </div>
                <div class="card--container">
                <h3 class="main--title" >Today's Data</h3>
                <div class="card--wrapper">
                    <div class="payment--card light-red">
                        <div class="card--header">
                            <div class="amount">
                                <span class="title">Weekly Reserved</span>
                                <?php echo "<h4> $pdoRowCount </h4>"; ?>
                            </div>
                            <i class="fas fa-users icon dark-green"></i>
                        </div>
                      <!--  <span class="card-detail"> **** **** **** 3484</span> -->
                    </div>

                    <div class="payment--card light-purple">
                        <div class="card--header">
                            <div class="amount">
                                <span class="title">Monthly Reserved</span>
                               <?php echo "<h4> $pdoRowCount </h4>"; ?>
                            </div>
                            <i class="fas fa-users icon dark-green"></i>
                        </div>
                      <!--  <span class="card-detail"> **** **** **** 3484</span> -->
                    </div>

                    <div class="payment--card light-green">
                        <div class="card--header">
                            <div class="amount">
                                <span class="title">Quarterly Reserved</span>
                                <span class="amount--value">10</span>
                            </div>
                            <i class="fas fa-users icon dark-green"></i>
                        </div>
                     <!--   <span class="card-detail"> **** **** **** 3484</span> -->
                    </div>

                    <div class="payment--card light-blue">
                        <div class="card--header">
                            <div class="amount">
                                <span class="title">Approved Account</span>
                                <span class="amount--value">15</span>
                            </div>
                            <i class="fas fa-check icon dark-blue"></i>
                        </div>
                     <!--   <span class="card-detail"> **** **** **** 3484</span> -->
                    </div>

                    <div class="payment--card light-orange">
                        <div class="card--header">
                            <div class="amount">
                            <span class="title">DisApproved Account</span>
                                <span class="amount--value">10</span>
                            </div>
                            <i class="fas fa-ban icon dark-red"></i>
                            
                        </div>
                       <!-- <span class="card-detail"> **** **** **** 3484</span> -->
                    </div>

                </div>
            </div>

           
        </div>
       
    </body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script> 
</html>


