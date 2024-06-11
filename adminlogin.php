<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
		<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1"/>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
		<link rel="stylesheet" href="./css/adminlogin.css">
	</head>
<body>
	<br>
	<br>
	
	<center>
	<div class="col-md-6 well">
	<img src="picture2.png"  alt="bogo memorial park" class="w-50 d-flex justify-content-center ">
		<hr style="border-top:1px dotted #ccc;"/>
		<div class="col-md-2"></div>
		<div class="col-md-8">

						   
                    <!--MESSAGE AFTER ADDING DATA  -->
                    <?php if(isset($_SESSION['message'])): ?>
                    <h5 class="alert alert-success"><?=$_SESSION['message'];?></h5>
                    <?php 
                    unset($_SESSION['message']);
                    endif;
                    ?>

			<script>
				(function() {
					// removing the message 3 seconds after the page load
					setTimeout(function(){
						document.querySelector('.msg').remove();
					},3000)
				})();
			</script>
			

<div class="container">
            <div class="row">
               <div class="col--12 mt-3">

             
                   

                <div class="card">
                    <div class="header">
                   	 <h3 class=" mt-3 text-white"> WELCOME ADMIN </h3>
                   
                    </div>
               

                <div class="card-body">

				<form action="admin.php" method="POST">
				<hr style="border-top:1px groovy #000;">
				<div class="form-group">
					<label>Username</label>
					<input type="text" class="form-control" name="username" />
				</div>
				<div class="form-group">
					<label>Password</label>
					<input type="password" class="form-control" name="password" />
				</div>
				<br />
				<div class="form-group">
					<button class="btn btn-primary form-control" name="admin">Login</button>
				</div>
				<br>
				
			</form>
            

		
		</div>
	</div>
</center>
</body>
</html>