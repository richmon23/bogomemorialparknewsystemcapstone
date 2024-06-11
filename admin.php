<?php
	session_start();
	
	require_once 'connection.php';
	
	if(ISSET($_POST['admin'])){
		if($_POST['username'] != "" || $_POST['password'] != ""){
			$username = $_POST['username'];
			// md5 encrypted
			// $password = md5($_POST['password']);
			$password = $_POST['password'];
			$sql = "SELECT * FROM `admin` WHERE `username`=? AND `password`=? ";
			$query = $conn->prepare($sql);
			$query->execute(array($username,$password));
			$row = $query->rowCount();
			$fetch = $query->fetch();
			if($row > 0) {
				$_SESSION['admin'] = $fetch['id'];
				header("location: ./admindashboard/dashboard.php");
			} else{
				echo "
				<script>alert('Invalid username or password')</script>
				<script>window.location = 'adminlogin.php'</script>
				";
			}
		}else{
			echo "
				<script>alert('Please complete the required field!')</script>
				<script>window.location = 'adminlogin.php'</script>
			";
		}
	}
?>