<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title> Insert Data </title>
     <link rel="stylesheet" href="./css/registration.css">
</head>
     <html>
          <body>
               <div class="container">
                         <div class="row">
                              <div class="col--12 mt-3">

                                   <div class="d-flex justify-content-center bd-highlight mb-2">
                                        <img src="picture2.png"  alt="bogo memorial park" class="w-25 d-flex justify-content-center ">
                                   </div>
                              
                                   <center>
                                             <div class="card">
                                                  <div class="header">
                                                       <h3 class=" mt-3 text-white text-sm-center">User Registration Form</h3>
                                                  </div>
                                        

                                                  <div class="card-body">

                                                            <form action="register_query.php" method="POST">
                                                       
                                                                 <div class="form-group mb-3 " >
                                                                      <label>First Name:</label>
                                                                      <input type="text" name="firstname" class="form-control" placeholder="John" required>
                                                                 </div>

                                                                 <div class="form-group mb-3 " >
                                                                      <label>Last Name:</label>
                                                                      <input type="text" name="lastname" class="form-control" placeholder="Doe" required>
                                                                 </div>

                                                                 <div class="form-group mb-3 " >
                                                                      <label>Username</label>
                                                                      <input type="text" name="username" class="form-control" placeholder="username" required>
                                                                 </div>

                                                                 <div class="form-group mb-3 " >
                                                                      <label>Password:</label>
                                                                      <input type="text" name="password" placeholder="Password" class="form-control"required>
                                                                 </div>

                                                       
                                                                 <div class="mb-3 d-flex justify-content-center">
                                                                      <button type="submit" name="add" class="btn btn-primary w-25">Submit</button>
                                                                      <br>
                                                                      <!-- <a href="index.php" class="btn btn-danger mt-3 mb-3 float-end ">Back</a> -->
                                                                 </div>
                                                                 <center>  <h6>Already have an account?<a href="userlogin.php">&nbspLogin</a></h6> </center>
                                                            </form>
                                                  </div>
                                             </div>
                                   </center>   
                              </div>           
                         </div>
               </div>
               
          </body>
     </html>


