
<?php
	require 'connection.php';
	session_start();
	
	
?>





<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Home</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href='http://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="./css/userlandingpage.css">
    </head>
    <body>
            <div class="container-fluid  ">
                    <div class="reservation"> <h5> The FIRST and ONLY Memorial Park in Bogo City, Cebu. Where Memories Live Forever </h5> <h4> <a href="userlogin.php">  Reserve Now...   </h4> </a> </div>
                        <div class="row header" style="height: 100px;">
                            <div class="col h-100 d-flex">
                                <img src="./images/picture2.png" class="w-25 mt-2" alt="bogomemorialparklogo">     
                            </div>
                   
                                <div class="col h-50">

                                    <ul class="nav nav-tabs mt-3 ">
                                            <li class="nav-item ">
                                                <a class="nav-link text-white " href="userlandingpage.php">Home</a>
                                            </li>
                                            <li class="nav-item dropdown">
                                                    <a class="nav-link dropdown-toggle text-white" data-bs-toggle="dropdown" href="registration.php">Package</a>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item " href="#packages">Lawn</a></li>
                                                    <li><a class="dropdown-item" href="#packages">Garden</a></li>
                                                    <li><a class="dropdown-item" href="#packages">Family State</a></li>
                                                </ul>
                                            </li>
                                            
                                            <li class="nav-item">
                                            <a class="nav-link text-white" href="#photos">Photos</a>
                                            </li>
                                            <li class="nav-item">
                                            <a class="nav-link text-white" href="#map">Map</a>
                                            </li>
                                            <li class="nav-item">
                                            <a class="nav-link text-white" href="#footer">Contact us</a>
                                            </li>
                                            <li class="nav-item float-end ms-auto ">   
                                            <a class="nav-link float-end text-white " href = "adminlogin.php">ADMIN</a>
                                            </li>
                                    </ul>
                                </div>
                         </div>  
                    </div>

                            <div class="hero-pic">
                            <img src="./images/image2.jpg" alt="image">
                              </div>
                              <br>
                              <br>
                             <hr class="m-5 text-white">
                             <Center>  <h3 class="mt-5 packages" id="">CURRENT OBITUARIES</h3></Center>
                   
                  
                    <div class="container mt-3 d-flex justify-content-evenly  w-100 card-details ">
                         
                            <div class="card m-5 " style="width:300px">
                                <img class="card-img-top" src="./images/person1.jpg" alt="Card image" style="width:100%">
                                <div class="card-body text-center">
                                        <h4 class="card-title"></h4>
                                        <p><large class="text-muted ">Brantly Yakov</large></p>  
                                        <p> <medium class="text-muted"> Born / Died :June 15,1953 - January 23,2023</medium></p>
                                   
                                </div>
                            </div>
                            <br>

                            <div class="card m-5" style="width:300px">
                                <img class="card-img-top" src="./images/person2.jpg" alt="Card image" style="width:100%">
                                <div class="card-body text-center">
                                    <h4 class="card-title"> </h4>
                                    <p><large class="text-muted ">Stillman Mara</large></p>  
                                    <p> <medium class="text-muted"> Born / Died :June 15,1953 - January 23,2023</medium></p>
                                </div>
                            </div>
                            <br>
                            <br>

                            <div class="card m-5" style="width:300px">
                                <img class="card-img-top" src="./images/person3.jpg" alt="Card image" style="width:100%">
                                    <div class="card-body text-center">
                                        <h4 class="card-title"></h4>
                                        <p><large class="text-muted ">Yoshi Fortin</large></p>  
                                        <p> <medium class="text-muted">Born / Died :June 15,1953 - January 23,2023</medium></p>
                                    </div>
                            </div>
                      </div>

                       
                        <br>
                        <br>
                        <br>
                        <br>
                        <hr class="m-5 text-white" id="photos">
                        <!-- <Center>  <h3 class="mt-5 packages" id="photos">PHOTOS</h3></Center> -->

                       
                        <div class="container1">
                            <center>
                                    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                            <img  src="./images/pic1.jpg" alt="" class="d-block w-75" alt="...">
                                            </div>
                                            <div class="carousel-item">
                                            <img src="./images/pic2.jpg" alt="" class="d-block w-75" alt="...">
                                            </div>
                                            <div class="carousel-item">
                                            <img src="./images/pic3.jpg" alt="" class="d-block w-75" alt="...">
                                            </div>
                                            <div class="carousel-item">
                                            <img src="./images/pic4.jpg" alt="" class="d-block w-75" alt="...">
                                            </div>
                                            <div class="carousel-item">
                                            <img src="./images/pic5.jpg" alt="" class="d-block w-75" alt="...">
                                            </div>
                                            
                                            <div class="carousel-item">
                                            <img src="./images/pic6.jpg" alt="" class="d-block w-75" alt="...">
                                            </div>
                                             <div class="carousel-item">
                                            <img src="./images/pic7.jpg" alt="" class="d-block w-75" alt="...">
                                            </div>
                                            <div class="carousel-item">
                                            <img src="./images/pic8.jpg" alt="" class="d-block w-75" alt="...">
                                            </div> 
                                            <div class="carousel-item">
                                            <img src="./images/pic9.jpg" alt="" class="d-block w-75" alt="...">
                                            </div> 
                                        </div>
                                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Previous</span>
                                        </button>
                                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Next</span>
                                        </button>
                                    </div>
                                </center>
     
                         </div>       
                            <br>
                            <br>
                            <hr class="m-5 text-white">

                      <Center>  <h3 class="mt-5 packages" id="packages"> OUR PACKAGES </h3></Center>

                      <br>
                      <br>

                         <div class="card-group">
                             <div class="card p-2">
                                <img src="./images/lawn.jpg" class="card-img-top" alt="card-group-image">
                           
                                 <div class="card-footer">
                                         <div class="container mt-3">
                                            <h3>Lawn</h3>
                                            <ul>
                                                <li>Prime Total Price	      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>&#8369;</span> 35,954.00 </li>
                                                <li>SPL Premium  Total Price  &nbsp;<span>&#8369;</span> 33,239.00 </li>
                                                <li>Regular Total Price       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span>&#8369;</span> 30,527.00 </li>
                                                <li>Lawn Size 3sqm</li>
                                                <li>Flowers</li>
                                                <li>Free to use Tent</li>
                                                
                                            </ul>
                                            <!-- <a href="userlogin.php">   
                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">
                                                Reserved
                                            </button></a> -->
                                        </div>
                                </div>
                             </div>
                        <div class="card p-2">
                            <img src="./images/pic21.jpg" class="card-img-top" alt="card-group-image">
                                   
                                    <div class="card-footer">

                                            <div class="container mt-3">
                                                    <h3>Garden</h3>
                                                    <ul>
                                                   
                                                        <li>Prime Total Price	      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>&#8369;</span> 93,492.00 </li>
                                                        <li>SPL Premium  Total Price  &nbsp;<span>&#8369;</span> 80,043.00 </li>
                                                        <li>Regular Total Price       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span>&#8369;</span> 74,617.00 </li>
                                                        <li>Family State Size 6sqm</li>
                                                        <li>Flowers</li>
                                                        <li>Free to use Tent</li>
                                                                
                                                    </ul>
                                                    <!-- <a href="userlogin.php">   <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">
                                                Reserved
                                        </button></a> -->
                                            </div>
                                            

                                    </div>
                        </div>
                            <div class="card p-2">
                                 <img src="./images/family.jpg" class="card-img-top" alt="card-group-image">

                                 <div class="card-footer">

                                     <div class="container mt-3">
                                            <h3>Family State</h3>
                                            <ul>
                                                
                                                <li>Prime East Total Price	  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>&#8369;</span> 723,527.00 </li>
                                                <li>Prime  Total Price  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>&#8369;</span> 678,304.00 </li>
                                                <li>Family State Size 40sqm</li>
                                                <li>Flowers</li>
                                                <li>Free to use Tent</li>
                                                
                                                
                                            </ul>
                                             <br>
                                            
                                            <!-- <a href="userlogin.php"> 
                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">
                                            Reserved
                                            </button></a> -->
                                        </div>
                                </div>
                             </div>
                         </div>

                    <br>
                    <br>
                   <hr class="m-5 text-white">  
                            <div class="container-fluid mt-5">
                                    <div class="card">
                                            <div class="card-header bg-warning">
                                            <h4 id="map">Bogo Memorial Park Map </h4> 
                                            <hr class="m-2 text-white">
                                            <!-- <a href="userlogin.php"><button> Reserved Now </button></a> -->
                                                </div>
                                                    <div class="card-body">
                                                    <div class="mapouter"><iframe src="https://www.google.com/maps/d/embed?mid=1i3YVbZRtd-m-9A8QkS1YyQybt4-hJ5s&ehbc=2E312F" width="100%" height="532px"></iframe></div>
                                                </div>
                                            </div>
                                    </div>

                            </div>
                            <hr class="m-5 text-white">

                           <!-- Remove the container if you want to extend the Footer to full width. -->
                            <div class="container-fluid">

                                    <footer class="bg-dark text-center text-lg-start text-white" id="footer">
                                            <!-- Grid container -->
                                            <div class="container p-4">
                                                <!--Grid row-->
                                                <div class="row my-4">
                                                <!--Grid column-->
                                                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">

                                                    <div class=" d-flex align-items-center justify-content-center mb-0 mx-auto" style="width: 150px; height:150px;">
                                                    <img src="Picture2.png" class="w-100" alt=""
                                                        loading="lazy" />
                                                    </div>

                                                    <p class="text-center">The FIRST and ONLY Memorial Park in Bogo City, Cebu. Where Memories Live Forever</p>

                                                    <ul class="list-unstyled d-flex flex-row justify-content-center">
                                                    <li>
                                                        <a class="text-white px-2" href="#!">
                                                        <i class="fa fa-facebook-square"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="text-white px-2" href="#!">
                                                        <i class="fa fa-instagram"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="text-white ps-2" href="#!">
                                                        <i class="fa fa-youtube"></i>
                                                        </a>
                                                    </li>
                                                    </ul>

                                                </div>
                                                <!--Grid column-->

                                                <!--Grid column-->
                                                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                                                    <h5 class="text-uppercase mb-4">Packages</h5>

                                                    <ul class="list-unstyled">
                                                    <li class="mb-2">
                                                        <a href="userlogin.php" class="text-white"><i class="fa fa-paw pe-3"></i>Lawn</a>
                                                    </li>
                                                    <li class="mb-2">
                                                        <a href="userlogin.php" class="text-white"><i class="fa fa-paw pe-3"></i>Garden</a>
                                                    </li>
                                                    <li class="mb-2">
                                                        <a href="userlogin.php" class="text-white"><i class="fa fa-paw pe-3"></i>Family State</a>
                                                    </li>
                                                    
                                                    <li class="mb-2">
                                                        <a href="#!" class="text-white"><i class="fa fa-paw pe-3"></i>Promo</a>
                                                    </li>
                                                    
                                                    </ul>
                                                </div>
                                                <!--Grid column-->

                                                <!--Grid column-->
                                                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                                                    <h5 class="text-uppercase mb-4">About</h5>

                                                    <ul class="list-unstyled">
                                                    <li class="mb-2">
                                                        <a href="#!" class="text-white"><i class="fa fa-paw pe-3"></i>General information</a>
                                                    </li>
                                                    <li class="mb-2">
                                                        <a href="#!" class="text-white"><i class="fa fa-paw pe-3"></i>About the Bogo Memorial Park</a>
                                                    </li>
                                                    <li class="mb-2">
                                                        <a href="#!" class="text-white"><i class="fa fa-paw pe-3"></i>Statistic data</a>
                                                    </li>
                                                    <li class="mb-2">
                                                        <a href="#!" class="text-white"><i class="fa fa-paw pe-3"></i>Map</a>
                                                    </li>
                                                    <li class="mb-2">
                                                        <a href="#!" class="text-white"><i class="fa fa-paw pe-3"></i>Schedule</a>
                                                    </li>
                                                    <li class="mb-2">
                                                        <a href="#!" class="text-white"><i class="fa fa-paw pe-3"></i>Contact</a>
                                                    </li>
                                                    </ul>
                                                </div>
                                                <!--Grid column-->

                                                <!--Grid column-->
                                                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                                                    <h5 class="text-uppercase mb-4">Contact</h5>

                                                    <ul class="list-unstyled">
                                                    <li>
                                                        <p><i class="fa fa-map pe-2"></i>Taytayan Hills Bogo City, Bogo, Philippines</p>
                                                    </li>
                                                    <li>
                                                        <p><i class="fa fa-phone pe-2"></i>+ 01 234 567 89</p>
                                                    </li>
                                                    <li>
                                                        <p<i class="fa fa-envelope-open" aria-hidden="true"></i> bogomemorialpark@example.com</p>
                                                    </li>
                                                    </ul>
                                                </div>
                                                <!--Grid column-->
                                                </div>
                                                <!--Grid row-->
                                            </div>
                                            <!-- Grid container -->

                                    <!-- Copyright -->
                                    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
                                    
                                    </div>
                                    <footer>
                                    <!-- Copyright -->
                                    </footer>

                    </div>
                            <!-- End of .container -->      
                            
                            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
        </body>
</html>



    
  