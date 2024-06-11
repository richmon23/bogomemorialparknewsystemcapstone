<?php
	require 'connection.php';
	session_start();


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Update deceased Person </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="./css/updatedeceasedperson.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Hedvig+Letters+Serif:opsz@12..24&family=Open+Sans:ital@1&display=swap" rel="stylesheet">
</head>
<body>
            <div class="my-background"> 
                <img src="./images/dvn6.jpg" alt="background">
            </div>
    
            <?php
                     if(isset($_GET['id']))
                     {
                        $student_id = $_GET['id'];
                        $query = "SELECT * FROM deceasedperson WHERE id=:stud_id LIMIT 5";
                        $statement = $conn->prepare($query);
                        $data =[':stud_id' => $student_id];
                        $statement->execute($data);

                        // FETCH DATA FROM THE DATABASE INTO THE FORM 

                        $result = $statement-> fetch(PDO::FETCH_ASSOC); // USING ASSOC ARRAY ['']FORMAT IN OBJ FORMAT ->
                    

                     }
                ?>

        <center><img src="picture2.png"  alt="bogo memorial park" class="img"></center>
            <div class="container">
                <form action="./code.php" method="POST">
                    <input type="hidden" name="student_id" value="<?=$result['id']?>"/>
                    <div class="row mt-5">
                        <center> <h3 class="mt-">Update Deceased Person Information</h3></center>
                        <hr class="s-2 text-black">
                        <div class="col-lg-7 mt-5">
                            <input type="text" name="fullname" value="<?=$result['fullname'];?>" class="form-control" placeholder="Full name" aria-label="Full name" required>
                        </div>
                        <div class="col mt-5">
                            <input type="text" name="address" value="<?=$result['address'];?>" class="form-control" placeholder="Address" aria-label="Address" required>
                        </div>
                        <br>
                        <div class="col-md-5 mt-5">
                            <input type="date" name="born" value="<?=$result['born'];?>" class="form-control" placeholder="Born" aria-label="Born" required>
                        </div>
                        <div class="col-md-7 mt-5">
                            <input type="date" name="died" value="<?=$result['died'];?>" class="form-control" placeholder="Died" aria-label="Died" required>
                        </div>
                        <br>
                        <div class="col mt-5">
                            <!-- <input type="text" class="form-control" placeholder="Plot number" aria-label="Contact number"required> -->
                            <div class="input-group ">
                            <!-- <input type="text" name="plotnumber" value="<?=$result['plotnumber'];?>" class="form-control" placeholder="plotnumber" aria-label="Died" required> -->
                                <select class="form-control" style="float: left;width: initial;" name="plotnumber"  required > 
                                    <option value=""disabled selected>Plot Number</option>  
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
                                    <option value="Plot 16">Plot 16</option>
                                    <option value="Plot 17">Plot 17</option>
                                    <option value="Plot 18">Plot 18</option>
                                    <option value="Plot 19">Plot 19</option>
                                    <option value="Plot 20">Plot 20</option>
                                    <option value="Plot 21">Plot 21</option>
                                    <option value="Plot 22">Plot 22</option>
                                    <option value="Plot 23">Plot 23</option>
                                    <option value="Plot 24">Plot 24</option>
                                    <option value="Plot 25">Plot 25</option>
                                    <option value="Plot 26">Plot 26</option>
                                    <option value="Plot 27">Plot 27</option>
                                    <option value="Plot 28">Plot 28</option>
                                    <option value="Plot 29">Plot 29</option>
                                    <option value="Plot 30">Plot 30</option>
                                    <option value="Plot 31">Plot 31</option>
                                    <option value="Plot 32">Plot 32</option>
                                    <option value="Plot 33">Plot 33</option>
                                    <option value="Plot 34">Plot 34</option>
                                    <option value="Plot 35">Plot 35</option>
                                    <option value="Plot 36">Plot 36</option>
                                    <option value="Plot 37">Plot 37</option>
                                    <option value="Plot 38">Plot 38</option>
                                    <option value="Plot 39">Plot 39</option>
                                    <option value="Plot 40">Plot 40</option>
                                    <option value="Plot 41">Plot 41</option>
                                    <option value="Plot 42">Plot 42</option>
                                    <option value="Plot 43">Plot 43</option>
                                    <option value="Plot 44">Plot 44</option>
                                    <option value="Plot 45">Plot 45</option>
                                    <option value="Plot 46">Plot 46</option>
                                    <option value="Plot 47">Plot 47</option>
                                    <option value="Plot 48">Plot 48</option>
                                    <option value="Plot 49">Plot 49</option>
                                    <option value="Plot 50">Plot 50</option>
                                    <option value="Plot 51">Plot 51</option>
                                    <option value="Plot 52">Plot 52</option>
                                    <option value="Plot 53">Plot 53</option>
                                    <option value="Plot 54">Plot 54</option>
                                    <option value="Family State Block 1">Family State Block 1</option>
                                    <option value="Family State Block 2">Family State Block 2</option>
                                    <option value="Family State Block 3">Family State Block 3</option>
                                    <option value="Family State Block 4">Family State Block 4</option>
                                    <option value="Family State Block 5">Family State Block 5</option>
                                    <option value="Family State Block 6">Family State Block 6</option>
                                    <option value="Family State Block 7">Family State Block 7</option>
                                    <option value="Family State Block 8">Family State Block 8</option>
                                    <option value="Family State Block 9">Family State Block 9</option>
                                    <option value="Family State Block 10">Family State Block 10</option>
                                    <option value="Family State Block 11">Family State Block 11</option>
                                    <option value="Family State Block 12">Family State Block 12</option>
                                    <option value="Family State Block 13">Family State Block 13</option>
                                    <option value="Family State Block 14">Family State Block 14</option>
                                    <option value="Family State Block 15">Family State Block 15</option>
                                    <option value="Family State Block 16">Family State Block 16</option>
                                    <option value="Family State Block 17">Family State Block 17</option>
                                    <option value="Family State Block 18">Family State Block 18</option>
                                    <option value="Family State Block 19">Family State Block 19</option>
                                    <option value="Family State Block 20">Family State Block 20</option>
                                    <option value="Family State Block 21">Family State Block 21</option>
                                    <option value="Family State Block 22">Family State Block 22</option>
                                    <option value="Family State Block 23">Family State Block 23</option>
                                    <option value="Family State Block 24">Family State Block 24</option>
                                    <option value="Family State Block 25">Family State Block 25</option>
                                    <option value="Family State Block 26">Family State Block 26</option>
                                    <option value="Family State Block 27">Family State Block 27</option>
                                    <option value="Family State Block 28">Family State Block 28</option>


                                 </select>
            
                            </div>
                        </div>
                        <div class="col-lg-5 mt-5">
                            <!-- <input type="text" class="form-control" placeholder="Address" aria-label="Package" required> -->
                            <div class="input-group">
                                <select class="form-control" style="float: left;width: initial;" name="blocknumber"required >
                                    <option value=""disabled selected>Block Number  </option>  
                                    <option value="Block 1">Block 1</option>
                                    <option value="Block 2">Block 2</option>
                                    <option value="Block 3">Block 3</option>
                                    <option value="Block 4">Block 4</option>
                                    <option value="Block 4">Family State Block</option>

                               </select>
            
                            </div>
                        </div>
                        <div class="col mt-5">
                        <input type="date" name="funeralday" value="<?=$result['funeralday'];?>" class="form-control" placeholder="Funeral day" aria-label="funeralday"required>
                        </div>
                        <center>
                            <div class="button">
                                    <button type="submit" name="updateperson"  class="btn submit mt-5 ">Update</button>
                                  <!-- <a href="userlogin.php"> <button type="reset" class="btn cancel mt-5 ">Cancel</button> </a>  -->
                                  <a href="./admindashboard/deceasedperson.php" class="btn cancel mt-5 ">Cancel</a>
                            </div>
                        </center>
                    </div>
                </form>    
            </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
   

    </body>
</html>