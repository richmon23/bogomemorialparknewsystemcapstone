<?php
	session_start();
	require_once 'connection.php';
   

	    //  INSERT DATA 

        if(isset($_POST['add']))
        {

            // getting the information from the form 

            $firstname =$_POST['firstname'];
            $lastname =$_POST['lastname'];
            $username =$_POST['username'];
            $password =$_POST['password'];
           
  
           



            // inserting the data in database
            $query=" INSERT INTO user (first_name,last_name ,username ,password) VALUES (:first_name,:last_name,:username,:password)";
            // run the insert query 
            $query_run= $conn->prepare($query);

            // binding the values

            $data = [

                'first_name'=>  $firstname,
                'last_name'=>  $lastname,
                'username'=>  $username,
                'password'=>  $password,
              

            ];
            $query_execute = $query_run->execute($data);
            if($query_execute)
            {
                $_SESSION['message']="Inserted Successfully";
                header('location:userlogin.php');
                exit(0);
            }
            else {
                $_SESSION['message']="Not Inserted ";
                header('location:userlogin.php');
                exit(0);
            }
        }



?>