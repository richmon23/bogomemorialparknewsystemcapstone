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
                        <h2>Deceased Person Information</h2>
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
                <!-- <h3 class="main--title" >Today's Data</h3> -->
                

            <!--  Deceased Person Information --> 

            <div class="tabular--wrapper">
                <h3 class="main--title" id="deceased"> Deceased Person Information </h3>
                <div class="table-container">
                    <table>
                            <thead>
                                <tr class="table-active">
                                    <th>ID</th>
                                    <th>FULL NAME</th>
                                    <th>ADDRESS</th>
                                    <th>BORN</th>
                                    <th>DIED</th>
                                    <th>PLOT NUMBER</th>
                                    <th>BLOCK NUMBER</th>
                                    <th>FUNERAL DAY</th>
                                    <th>DATE CREATED</th>
                                    <th></th>
                                    <th>ACTION</th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    
                                    
                                </tr>
                            </thead>
                            <tbody>

                            <?php 

                                  $query="SELECT * FROM deceasedperson";
                                  $statement=$conn->prepare($query);
                                  $statement->execute();
                                  $statement->setFetchMode(PDO::FETCH_ASSOC);
                                  $result = $statement->fetchAll();(PDO::FETCH_ASSOC); // PDO::FETCH_ASSOC or FETCH_OBJ  EXAMPLE CODE   <td><?=$row->'id';
                                  if($result)
                                  {
                                        foreach($result as $row )
                                        {
                                            // DISPLAY THE DATA FROM THE DATABASE
                                            ?>
                                            
                                                 <tr>
                                                    <td><?=$row['id'];?> </td>
                                                    <td><?=$row['fullname'];?> </td>
                                                    <td><?=$row['address'];?> </td>
                                                    <td><?=$row['born'];?> </td>
                                                    <td><?=$row['died'];?> </td>
                                                    <td><?=$row['plotnumber'];?> </td>
                                                    <td><?=$row['blocknumber'];?></td?>
                                                    <td><?=$row['funeralday'];?></td?>
                                                    <td><?=$row['datecreated'];?></td?>
                                                    <td></td>
                                                    <td>
                                                        <a href="../adddeceasedperson.php?id=<?=$row['id']?>" class="btn btn-primary">Add</a>
                                                    </td>
                                                    <td>
                                                        <a href="../updatedeceasedperson.php?id=<?=$row['id']?>" class="btn btn-warning">Update</a>
                                                    </td>
                                                    <td>
                                                        <form action="../code.php" method="POST">
                                                            <button   input type="submit"  name="deletedeceasedperson" value="<?=$row['id'];?>"  class="btn bg-danger text-white">Delete</button> 
                                                        </form>
                                                        
                                                    </td>
                                                    <td></td>
                                                </tr>
                                            <?php
                                        }

                                  }
                                  else{
                                  ?> 
                                    <tr>
                                        <td colspan="7"> No Records Found</td>
                                    </tr>
                                    <?php 
                                  }

                                 ?>
                               
                            </tbody>
                    </table>
                </div>
            </div>

          
            
        </div>
       
    </body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script> 
</html>


