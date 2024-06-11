
<?php
	require 'connection.php';
	session_start();
	
	
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Reservation </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="./css/reservation.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Hedvig+Letters+Serif:opsz@12..24&family=Open+Sans:ital@1&display=swap" rel="stylesheet">
</head>
<body>
        <div class="my-background"> 
            <img src="./images/dvn6.jpg" alt="">
        </div>
        <!-- <?php if(isset($_SESSION['message'])) : ?>
                    <h5 class="alert alert-success"><?= $_SESSION['message']; ?></h5>
                <?php 
                    unset($_SESSION['message']);
                endif; 
        ?> -->
        <center><img src="picture2.png"  alt="bogo memorial park" class="img"></center>
            <div class="container">
                <form action="code.php" method="POST" class="row g-3">

                    <div class="row mt-5">

                        <center> <h3 class="mt-">Reservation Form</h3></center>
                        <hr class="s-2 text-black">
                        <div class="col-md-6">
                            <label for="inputEmail4" class="form-label">Fullname</label>
                            <!-- <input type="text" class="form-control fullname" placeholder="Full name" aria-label="Full name" name="fullname" required>  -->
                            <input type="text" class="form-control" id="inputEmail4" name="fullname" required>
                        </div>
                        
                        <div class="col-md-6">
                            <label for="inputState" class="form-label">Packages</label>
                            <select id="inputState" class="form-select" name="package" required>
                            <option value="" disabled selected>Choose...</option>
                            <option value="lawn"> Lawn</option>
                            <option value="garden"> Garden</option>
                            <option value="family">Family State</option>
                            </select>
                        </div>
                        <div class="col-12 mt-2">
                            <!-- <input type="text" class="form-control fullname" placeholder="Email" aria-label="Full name" name="email" required>  -->
                            <label for="inputState" class="form-label">Email</label>
                            <input type="email" class="form-control" id="inputEmail4" name="email" required>
                        </div>
                        <div class="col-12  mt-3">
                            <!-- <label for="inputState" class="form-label">Gender</label> -->
                            <label for="inputState" class="form-label">Block Number</label>
                            <select id="inputState" class="form-select" name="blocknumber" required>
                                <option value="" disabled selected>Choose...</option>
                                <option value="Block 1">Block 1</option>
                                <option value="Block 2">Block 2</option>
                                <option value="Block 3">Block 3</option>
                                <option value="Block 4">Block 4</option>
                                <option value="Block 5">Block 5</option>
                                <option value="Block 6">Block 6</option>
                                <option value="Block 7">Block 7</option>
                                <option value="Block 8">Block 8</option>
                                <option value="Block 9">Block 9</option>
                                <option value="Block 10">Block 10</option>
                                <option value="Block 11">Block 11</option>
                                <option value="Block 12">Block 12</option>
                                <option value="Block 13">Block 13</option>
                                <option value="Block 14">Block 14</option>
                                <option value="Block 15">Block 15</option>
                            </select>
                        </div>
                        <div class="col mt-2">
                            <!-- <input type="number" class="form-control contact" placeholder="Contact number" aria-label="Contact number" name="contact" required> -->
                            <label for="inputState" class="form-label">Contact</label>
                            <input type="number" class="form-control" id="inputEmail4"  name="contact" required>
                        </div>
                        <div class="col mt-2">
                            <!-- <input type="text" class="form-control" placeholder="Plot number" aria-label="Plot number"required> -->
                            <label for="inputState" class="form-label">Plot Number</label>
                            <select id="inputState" class="form-select" name="plotnumber" required>
                                <option value=""disabled selected>Choose...</option> 
                                <option value="Plot 1">Plot 1</option>
                                <option value="Plot 2">Plot 2</option>
                                <option value="Plot 3">Plot 3</option>
                                <option value="Plot 4">Plot 4</option>
                                <option value="Plot 5">Plot 5</option>
                                <option value="Plot 6">Plot 6</option>
                                <option value="Plot 7">Plot 7</option>
                                <option value="Plot 8">Plot 8</option>
                                <option value="Plot 9">Plot 9</option>
                                <option value="Plot 10">Plot 10</option>
                                <option value="Plot 11">Plot 11</option>
                                <option value="Plot 12">Plot 12</option>
                                <option value="Plot 13">Plot 13</option>
                                <option value="Plot 14">Plot 14</option>
                                <option value="Plot 15">Plot 15</option>
                            </select>
                        </div>
                        <center>
                            <div class="button">
                                    <button type="submit" name="add"  class="btn submit mt-4">Submit</button>
                                    <!-- <button type="reset" class="btn cancel mt-5 ">Cancel</button> -->
                                    <a href="userlandingpage.php" class="btn cancel mt-4 ">Cancel</a>
                            </div>
                        </center>
                    </div>
                </form>
            </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
   
</body>
</html>