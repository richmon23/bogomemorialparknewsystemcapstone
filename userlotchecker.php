<?php
 session_start();

include('connection.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plot Availability</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link href='http://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="userlanding.css">

 
</head>
<body>

<div class="container-fluid  ">
           
           <div class="row header" style="height: 100px;">
                   <div class="col h-100 d-flex">
                       <img src="./images/picture2.png" class="w-25 mt-2" alt="bogomemorialparklogo">     
                   </div>
          
                    <div class="col h-50">

                       <ul class="nav nav-tabs mt-3 ">
                               <li class="nav-item ">
                                   <a class="nav-link text-white" href="userlandingpage.php">Home</a>
                               </li>
                                   <li class="nav-item dropdown">
                                       <a class="nav-link dropdown-toggle text-white" data-bs-toggle="dropdown" href="registration.php">Package</a>
                                   <ul class="dropdown-menu">
                                       <li><a class="dropdown-item " href="#packages">Package 1</a></li>
                                       <li><a class="dropdown-item" href="#packages">Package 2</a></li>
                                       <li><a class="dropdown-item" href="#packages">Package 3</a></li>
                                   </ul>
                               </li>
                               <li class="nav-item">
                               <a class="nav-link text-white" href="lotchecker.php">Plot Availability</a>
                               </li>
                               <li class="nav-item">
                               <a class="nav-link text-white" href="#picture">Photos</a>
                               </li>
                               <li class="nav-item">
                               <a class="nav-link text-white" href="#map">Map</a>
                               </li>
                               <li class="nav-item float-end ms-auto ">   
                               <a class="nav-link float-end text-white " href = "logout.php">LOGOUT</a>
                               </li>
                       </ul>
                               

                    </div>

            </div>  
          
       </div>

        <div class="card p-5">
            <div class="card-header">
                <h1 class="plot">Bogo Memorial Park Cemetery Plot  Checker</h1>
            </div>
            <div class="card-body  bg-info mt-2 ">
                        <div class="d-md-inline w-75 w-50 p-3">
                            <select name="block" id="block">
                                <option value="">Select Block</option>
                                <option value="">Block 1</option>
                                <option value="">Block 2</option>
                                <option value="">Block 3</option>
                                <option value="">Block 4</option>
                                <option value="">Block 5</option>
                            </select>
                        </div>
                        <div class="d-md-inline w-50 p-3">
                            <select name="availability" id="availability">
                                <option value="">Select</option>
                                <option value="available">Available</option>
                                <option value="notavailable">Not Available</option>
                            </select>
                        </div>
                        <div class="d-md-inline">
                            <button type="button" name="filter" class="btn btn-primary btn-lg">Filter</button>
                        </div>
            </div>
                         <!-- Table -->

                        <table class="table table-hover mt-2">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Lot #</th>
                                            <th scope="col">Block #</th>
                                            <th scope="col">Availability</th>
                                    </tr>
                                </thead>
                                 <tbody>

                                    <?php 

                                        $query="SELECT * FROM  lot_cemetry LIMIT 10 ";
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
                                                    <td><?=$row['lot_number'];?> </td>
                                                    <td><?=$row['block_number'];?> </td>
                                                    <td><?=$row['availability'];?> </td>
                                                
                                                    <td>
                                                        <a href="userlogin.php" class="btn btn-primary"></a>
                                                    </td>
                                                    <td>
                                                        <form action="code.php" method="POST">
                                                        <button  type="submit"  name="delete" value="<?=$row['id'];?>"class="btn btn-danger"></button>
                                                        </form>
                                                    </td>
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

                                        
                         <Center>  <h3 class="h1 mt-3"> CEMETERY  PLOT  MAP </h3></Center>
                            
                         <div class="row">
                            <div class="col-lg-6">

                                 <h3 class="text-white block1text">Block1</h3> 
                                <div class="btn-group mt-3 d-flex  plotmap" role="group" aria-label="Basic button group">
                                   
                                            <button type="button" class="btn btn-primary">Plot 1</button>
                                            <button type="button" class="btn btn-primary">Plot 2</button>
                                            <button type="button" class="btn btn-primary">Plot 3</button>
                                            <button type="button" class="btn btn-primary">Plot 4</button>
                                            <button type="button" class="btn btn-primary">Plot 5</button>
                                            <button type="button" class="btn btn-primary">Plot 6</button>
                                            <br>
                                            <br>
                                            <button type="button" class="btn btn-primary">Plot 7</button>
                                            <button type="button" class="btn btn-primary">Plot 8</button>
                                            <button type="button" class="btn btn-primary">Plot 9</button>
                                            <button type="button" class="btn btn-primary">Plot 10</button>
                                            <button type="button" class="btn btn-primary">Plot 11</button>
                                            <button type="button" class="btn btn-primary">Plot 12</button>
                                            <br>
                                            <br>
                                </div>   
                                <div class="btn-group mt-3 d-flex  plotmap" role="group" aria-label="Basic button group">
                                            
                                            <button type="button" class="btn btn-primary">Plot 13</button>
                                            <button type="button" class="btn btn-primary">Plot 14</button>
                                            <button type="button" class="btn btn-primary">Plot 15</button>
                                            <button type="button" class="btn btn-primary">Plot 16</button>
                                            <button type="button" class="btn btn-primary">Plot 17</button>
                                            <button type="button" class="btn btn-primary">Plot 18</button>
                                            <br>
                                            <br>
                                            <button type="button" class="btn btn-primary">Plot 19</button>
                                            <button type="button" class="btn btn-primary">Plot 20</button>
                                            <button type="button" class="btn btn-primary">Plot 21</button>
                                            <button type="button" class="btn btn-primary">Plot 23</button>
                                            <button type="button" class="btn btn-primary">Plot 24</button>
                                            <button type="button" class="btn btn-primary">Plot 25</button>
                                </div>            



                                            <h3 class="text-white block1text mt-3">Block3</h3> 
                                            <div class="btn-group mt-3 d-flex  plotmap" role="group" aria-label="Basic button group">
                                            
                                            <button type="button" class="btn btn-primary">Plot 1</button>
                                            <button type="button" class="btn btn-primary">Plot 2</button>
                                            <button type="button" class="btn btn-primary">Plot 3</button>
                                            <button type="button" class="btn btn-primary">Plot 4</button>
                                            <button type="button" class="btn btn-primary">Plot 5</button>
                                            <button type="button" class="btn btn-primary">Plot 6</button>
                                            <br>
                                            <br>
                                            <button type="button" class="btn btn-primary">Plot 7</button>
                                            <button type="button" class="btn btn-primary">Plot 8</button>
                                            <button type="button" class="btn btn-primary">Plot 9</button>
                                            <button type="button" class="btn btn-primary">Plot 10</button>
                                            <button type="button" class="btn btn-primary">Plot 11</button>
                                            <button type="button" class="btn btn-primary">Plot 12</button>
                                            <br>
                                            <br>
                                            </div>   
                                <div class="btn-group mt-3 d-flex  plotmap" role="group" aria-label="Basic button group">
                                   
                                            <button type="button" class="btn btn-primary">Plot 13</button>
                                            <button type="button" class="btn btn-primary">Plot 14</button>
                                            <button type="button" class="btn btn-primary">Plot 15</button>
                                            <button type="button" class="btn btn-primary">Plot 16</button>
                                            <button type="button" class="btn btn-primary">Plot 17</button>
                                            <button type="button" class="btn btn-primary">Plot 18</button>
                                            <br>
                                            <br>
                                            <button type="button" class="btn btn-primary">Plot 19</button>
                                            <button type="button" class="btn btn-primary">Plot 20</button>
                                            <button type="button" class="btn btn-primary">Plot 21</button>
                                            <button type="button" class="btn btn-primary">Plot 23</button>
                                            <button type="button" class="btn btn-primary">Plot 24</button>
                                            <button type="button" class="btn btn-primary">Plot 25</button>
                                </div>            

                            </div>
                            <div class="col-lg-6">

                                             <h3 class="text-white block1text">Block2</h3> 
                                             <div class="btn-group mt-3 d-flex  plotmap" role="group" aria-label="Basic button group">
                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal"> Plot 1
                                            </button>
                                            <button type="button" class="btn btn-primary">Plot 2</button>
                                            <button type="button" class="btn btn-primary">Plot 3</button>
                                            <button type="button" class="btn btn-primary">Plot 4</button>
                                            <button type="button" class="btn btn-primary">Plot 5</button>
                                            <button type="button" class="btn btn-primary">Plot 6</button>
                                            <br>
                                            <br>
                                            <button type="button" class="btn btn-primary">Plot 7</button>
                                            <button type="button" class="btn btn-primary">Plot 8</button>
                                            <button type="button" class="btn btn-primary">Plot 9</button>
                                            <button type="button" class="btn btn-primary">Plot 10</button>
                                            <button type="button" class="btn btn-primary">Plot 11</button>
                                            <button type="button" class="btn btn-primary">Plot 12</button>
                                            <br>
                                            <br>
                                        </div>   
                                         <div class="btn-group mt-3 d-flex  plotmap" role="group" aria-label="Basic button group">
                                                    
                                            <button type="button" class="btn btn-primary">Plot 13</button>
                                            <button type="button" class="btn btn-primary">Plot 14</button>
                                            <button type="button" class="btn btn-primary">Plot 15</button>
                                            <button type="button" class="btn btn-primary">Plot 16</button>
                                            <button type="button" class="btn btn-primary">Plot 17</button>
                                            <button type="button" class="btn btn-primary">Plot 18</button>
                                            <br>
                                            <br>
                                            <button type="button" class="btn btn-primary">Plot 19</button>
                                            <button type="button" class="btn btn-primary">Plot 20</button>
                                            <button type="button" class="btn btn-primary">Plot 21</button>
                                            <button type="button" class="btn btn-primary">Plot 23</button>
                                            <button type="button" class="btn btn-primary">Plot 24</button>
                                            <button type="button" class="btn btn-primary">Plot 25</button>
                                        </div>




                                    <h3 class="text-white block1text mt-3">Block4</h3> 
                                <div class="btn-group mt-3 d-flex  plotmap" role="group" aria-label="Basic button group">
                                   
                                            <button type="button" class="btn btn-primary">Plot 1</button>
                                            <button type="button" class="btn btn-primary">Plot 2</button>
                                            <button type="button" class="btn btn-primary">Plot 3</button>
                                            <button type="button" class="btn btn-primary">Plot 4</button>
                                            <button type="button" class="btn btn-primary">Plot 5</button>
                                            <button type="button" class="btn btn-primary">Plot 6</button>
                                            <br>
                                            <br>
                                            <button type="button" class="btn btn-primary">Plot 7</button>
                                            <button type="button" class="btn btn-primary">Plot 8</button>
                                            <button type="button" class="btn btn-primary">Plot 9</button>
                                            <button type="button" class="btn btn-primary">Plot 10</button>
                                            <button type="button" class="btn btn-primary">Plot 11</button>
                                            <button type="button" class="btn btn-primary">Plot 12</button>
                                            <br>
                                            <br>
                                </div>   
                                <div class="btn-group mt-3 d-flex  plotmap" role="group" aria-label="Basic button group">
                                   
                                            <button type="button" class="btn btn-primary">Plot 13</button>
                                            <button type="button" class="btn btn-primary">Plot 14</button>
                                            <button type="button" class="btn btn-primary">Plot 15</button>
                                            <button type="button" class="btn btn-primary">Plot 16</button>
                                            <button type="button" class="btn btn-primary">Plot 17</button>
                                            <button type="button" class="btn btn-primary">Plot 18</button>
                                            <br>
                                            <br>
                                            <button type="button" class="btn btn-primary">Plot 19</button>
                                            <button type="button" class="btn btn-primary">Plot 20</button>
                                            <button type="button" class="btn btn-primary">Plot 21</button>
                                            <button type="button" class="btn btn-primary">Plot 23</button>
                                            <button type="button" class="btn btn-primary">Plot 24</button>
                                            <button type="button" class="btn btn-primary">Plot 25</button>
                                </div>            
                        </div>

                        <hr class="m-5 text-white">

                                                <Center>  <h3 class=" h1 mt-3 packages" id="packages"> OUR PACKAGES </h3></Center>

                                                <br>
                                                <br>

                                                <div class="card-group mt-3">
                                                        <div class="card p-2">
                                                            <img src="./images/lawn.jpg" class="card-img-top" alt="card-group-image">
                                                            
                                                            <div class="card-footer">
                                                                <div class="container mt-3">
                                                                            <h3>Package 1</h3>
                                                                            <ul>
                                                                                <li>Candles</li>
                                                                                <li>Tent</li>
                                                                                
                                                                            </ul>
                                                                            
                                                                        <a href="reservationform.php">   <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">
                                                                                Reserved Now
                                                                            </button></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="card p-2">
                                                            <img src="./images/pic21.jpg" class="card-img-top" alt="card-group-image">
                                                                    
                                                                    <div class="card-footer">

                                                                            <div class="container mt-3">
                                                                                    <h3>Package 2</h3>
                                                                                    <ul>
                                                                                        <li>Candles</li>
                                                                                        <li>Tent</li>
                                                                                        </ul>
                                                                                    <a href="userlogin.php">   <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">
                                                                                     Reserved Now
                                                                                    </button></a>
                                                                            </div>
                                                                    </div>
                                                                </div>
                                                                <div class="card p-2">
                                                                    <img src="./images/family.jpg" class="card-img-top" alt="card-group-image">
                                                                    
                                                                    <div class="card-footer">

                                                                    <div class="container mt-3">
                                                                                    <h3>Package 3</h3>
                                                                                    <ul>
                                                                                        <li>Candles</li>
                                                                                        <li>Tent</li>
                                                                                        
                                                                                    </ul>
                                                                                    
                                                                                    <a href="userlogin.php">   <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">
                                                                                    Reserved Now
                                                                                </button></a>
                                                                            </div>

                                                                    </div>
                                                                </div>
                                                        </div>

                                                                            

                         
                        
                        
                                
                            
                                            <br>
                                            <br>
                                            <div class="container-fluid mt-5">
                                                <div class="card mt-5">
                                                        <div class="card-header bg-warning">
                                                        <h4 id="map" class="plot">Bogo Memorial Park Map </h4> 
                                                            </div>
                                                                <div class="card-body">
                                                                <div class="mapouter"><div class="gmap_canvas"><iframe class="gmap_iframe" width="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=687&amp;height=523&amp;hl=en&amp;q=bogo memorial park bogo city cebu&amp;t=h&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a href="https://connectionsgame.org/">Connections NYT</a></div><style>.mapouter{position:relative;text-align:right;width:100%;height:523px;}.gmap_canvas {overflow:hidden;background:none!important;width:100%;height:523px;}.gmap_iframe {height:523px!important;}</style></div>
                                                            </div>
                                                        </div>
                                                </div>

                                        </div>

                                       


    </body>


</html>