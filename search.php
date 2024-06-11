<?php
	require 'connection.php';
	if(ISSET($_POST['search'])){
?>
	 
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <link rel="stylesheet" type="text/css" href="./css/search.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <title>Document</title>
    </head>
    <body>
        
		<?php
	// Fetch data from the database
	$stmt = $conn->query("SELECT * FROM deceasedperson");
	$data = $stmt->fetchAll(PDO::FETCH_ASSOC);
	?>
     
     
    <table class="w3-table-all"  style="width:400px; font-size:12px">
        <thead>
             <tr class="w3-green" style="font-size:12px">
                <th >FULL NAME</th>
                 <th>BLOCK NUMBER</th>
                 <th>PLOT NUMBER</th>
                 <th>INFORMATION</th>
            </tr>
        </thead>
		<tbody>
                <?php
                    $keyword = $_POST['keyword'];
                    $query = $conn->prepare("SELECT * FROM `deceasedperson` WHERE `fullname` LIKE '%$keyword%' or `blocknumber` LIKE '%$keyword%' or `plotnumber` LIKE '%$keyword%'");
                    $query->execute();
                    while($row = $query->fetch()){
                ?>
                <tr>
                    <td style=" font-size:12px"><?php echo $row['fullname']?></td>
                    <td style=" font-size:12px"><?php echo $row['blocknumber']?></td>
                    <td style=" font-size:12px"><?php echo $row['plotnumber']?></td>
                    <!-- <td><a href="#id01"> <button onclick="document.getElementById('id01').style.display='block'" style="width:100px; height:50px; font-size:10px" class="w3-button w3-blue">View Information</button></a></td> -->
					<td>  <button class="view-btn" data-id="<?= $row['id'] ?>" style="width:100px; height:30px; font-size:12px; background-color:blue; color:white;border-radius:10px" class="w3-button w3-blue">View Information</button></td>
				</tr>
                
                
                <?php
                    }
                ?>
            </tbody>
        </table>
            <?php		
                }else{
            ?>
                <table class="w3-table-all"  style="width:400px; color=black;font-size:12px">
                    <thead>
                        <tr class="w3-green">
                            <th>FULL NAME</th>
                            <th>BLOCK NUMBER</th>
                            <th>PLOT NUMBER</th>
                        </tr>
                    </thead>
                        <tbody>
                            <?php
                                $query = $conn->prepare("SELECT * FROM `deceasedperson`");
                                $query->execute();
                                while($row = $query->fetch()){
                            ?>
                            <tr>
                                <td><?php echo $row['fullname']?></td>
                                <td><?php echo $row['blocknumber']?></td>
                                <td><?php echo $row['plotnumber']?></td>
                                
                            </tr>
                            
                            
                            <?php
                                }
                            ?>
                        </tbody>
                </table>
            <?php
                }
            ?>

            <!-- DECEASED PERSON INFORMATION -->

            <div class="w3-container">
					    <!-- <h2>W3.CSS Modal</h2> -->
					
						<!-- <button onclick="document.getElementById('id01').style.display='block'" class="w3-button w3-white"></button> -->
						<!-- <button onclick="document.getElementById('id01').style.display='block'" class="w3-button w3-black">Open Modal2</button>
						<button onclick="document.getElementById('id01').style.display='block'" class="w3-button w3-black">Open Moda3l</button> -->
						
                       


	

					<!-- Modal Form-->
				<Center>
					<div id="modal" class="w3-modal w3-padding-16  deceasedperson">
						<div class="w3-modal-content">
							<div class="w3-container">
								
								

                             

								
								</div>
							</div>
						</div>
					</div>
				</Center>	
			</div>	


                	<!-- RESERVATION-->
		<div class="w3-container">
		<!-- <h2>W3.CSS Modal</h2> -->
			<!-- <button onclick="document.getElementById('id02').style.display='block'" class="w3-button w3-white"></button> -->
			<!-- <button onclick="document.getElementById('id01').style.display='block'" class="w3-button w3-black">Open Modal2</button>
		<button onclick="document.getElementById('id01').style.display='block'" class="w3-button w3-black">Open Moda3l</button> -->
	
	
		<!-- Modal Form-->
		<div id="id02" class="w3-modal w3-padding-16">
		<div class="w3-modal-content">
			<div class="w3-container">
			<span onclick="document.getElementById('id02').style.display='none'" class="w3-button w3-display-topright w3-black">&times;</span>
			<hr col="5">
			<div class="w3-container w3-blue">
				<h2>Reservation Form</h2></div>
				<form action="code.php" method="POST" class="row g-3">

					<div class="row mt-5">
			
						<!-- <center> <h3 class="mt-">Reservation Form</h3></center> -->
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
								<option value="Block 4">Family State Block</option>

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
						<br>
						<br>
						<center>
							<div class="button">
									<button type="submit" name="add"  class="btn submit mt-5 ">Submit</button>
									<!-- <button type="reset" class="btn cancel mt-5 ">Cancel</button> -->
									<a href="userlandingpage.php" class="btn cancel mt-5 ">Cancel</a>
							</div>
						</center>
						<br>
						<br>
					</div>
				</form>
			
			</div>
		</div>
	</div>


<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
    $(document).ready(function () {
        $('.view-btn').click(function () {
            var id = $(this).data('id');

            // Fetch data for the selected ID via AJAX
            $.ajax({
                type: 'POST',
                url: 'fetch_data.php', // Create a separate PHP file for handling AJAX requests
                data: {id: id},
                success: function (response) {
                    // Display the fetched data in the modal
                    $('#modal').html(response);
                    $('#modal').show();
                }
            });
        });

        // Close the modal when clicking outside of it
        $(document).on('click', function (e) {
            if ($(e.target).closest('#modal').length === 0) {
                $('#modal').hide();
            }
        });
    });
</script>

</body>
</html> 

 