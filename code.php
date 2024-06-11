<?php
session_start();
include('connection.php');


     



        //  INSERT DATA 

        if(isset($_POST['add']))
        {

            // getting the information from the form 

            $fullname =$_POST['fullname'];
            $package =$_POST['package'];
            $blocknumber =$_POST['blocknumber'];
            $email =$_POST['email'];
            $contact =$_POST['contact'];
            $plotnumber =$_POST['plotnumber'];
           
  
           



            // inserting the data in database
            $query=" INSERT INTO reservation (fullname,package ,blocknumber ,email,contact,plotnumber) VALUES (:fullname,:package,:blocknumber ,:email,:contact,:plotnumber)";
            // run the insert query 
            $query_run= $conn->prepare($query);

            // binding the values

            $data = [

                ':fullname'=>  $fullname,
                //'lastname'=>  $lastname,
                ':package'=>  $package,
                ':blocknumber'=>  $blocknumber,
                ':email'=>  $email,
                ':contact'=>  $contact,
                ':plotnumber'=> $plotnumber,
                
            ];
            $query_execute = $query_run->execute($data);
            if($query_execute)
            {
                $_SESSION['message']="Reservation Submited";
                header('location:reservationconfirmation.php');
                exit(0);
            }
            else {
                $_SESSION['message']="Not Inserted ";
                header('location:reservationform.php');
                exit(0);
            }
        }




         // UPDATE  RESERVATION DATA  

         if(isset($_POST['status']))
         {

            $student_id =$_POST['student_id'];
             $fullname =$_POST['fullname'];
             $package =$_POST['package'];
             $blocknumber =$_POST['blocknumber'];
             $plotnumber =$_POST['plotnumber'];
             $email =$_POST['email'];
             $contact =$_POST['contact'];
             $statusaccount =$_POST['statusaccount'];
             



             try{
                 $query = "UPDATE reservation SET  fullname=:fullname,package=:package, blocknumber=:blocknumber,email=:email,contact=:contact,plotnumber=:plotnumber,statusaccount=:statusaccount WHERE id=:stud_id LIMIT 1";
                 $statement = $conn ->prepare($query);
                 $data = [

                     ':fullname'=>  $fullname,
                     ':package'=>  $package,
                     ':blocknumber'=>  $blocknumber,
                     ':plotnumber'=> $plotnumber,
                     ':email'=>  $email,
                     ':contact'=>  $contact,
                     ':statusaccount'=> $statusaccount,
                     'stud_id'=> $student_id
                     
     
                 ];
                $query_execute = $statement->execute($data);
                if($query_execute)
                {
                    $_SESSION['message']="Record Updated Successfully";
                    header('location:./admindashboard/reservation.php');
                    exit(0);

                }else{
                    $_SESSION['message']="Record Updated";
                    header('location:./admindashboard/reservation.php');
                    exit(0);
                }

             }catch (PDOException $e){
                 echo $e->getMessage();
                
             }

         }

         // UPDATE DATA  OF DECEASED PERSON 

         if(isset($_POST['updateperson']))
         {

             $student_id =$_POST['student_id'];
             $fullname =$_POST['fullname'];
             $address =$_POST['address'];
             $born =$_POST['born'];
             $died =$_POST['died'];
             $plotnumber =$_POST['plotnumber'];
             $blocknumber =$_POST['blocknumber'];
             $funeralday =$_POST['funeralday'];
           



             try{
                 $query = "UPDATE deceasedperson SET  fullname=:fullname,address=:address, born=:born,died=:died,plotnumber=:plotnumber,blocknumber=:blocknumber,funeralday=:funeralday WHERE id=:stud_id LIMIT 1";
                 $statement = $conn ->prepare($query);
                 $data = [

                     ':fullname'=>  $fullname,
                     ':address'=>  $address,
                     ':born'=>  $born,
                     ':died'=>  $died,
                     ':plotnumber'=>  $plotnumber,
                     ':blocknumber'=>  $blocknumber,
                     ':funeralday'=> $funeralday,
                     'stud_id'=> $student_id
                     
     
                 ];
                $query_execute = $statement->execute($data);
                if($query_execute)
                {
                    $_SESSION['message']="Record Updated Successfully";
                    header('location:./admindashboard/deceasedperson.php');
                    exit(0);

                }else{
                    $_SESSION['message']="Record Updated";
                    header('location:./admindashboard/deceasedperson.php');
                    exit(0);
                }

             }catch (PDOException $e){
                 echo $e->getMessage();
                
             }

         }


        //  // INSERT RESERVATION WITH STATUS // 

        //  if(isset($_POST['status']))
        //  {
 
        //      // getting the information from the form 
 
        //      $fullname =$_POST['fullname'];
        //      $package =$_POST['package'];
        //      $blocknumber =$_POST['blocknumber'];
        //      $email =$_POST['email'];
        //      $contact =$_POST['contact'];
        //      $plotnumber =$_POST['plotnumber'];
        //      $statusaccount =$_POST['statusaccount'];
   
            
 
 
 
        //      // inserting the data in database
        //      $query=" INSERT INTO reservationupdate (fullname,package ,blocknumber ,email,contact,plotnumber,statusaccount) VALUES (:fullname,:package,:blocknumber,:email,:contact,:plotnumber,:statusaccount)";
        //      // run the insert query 
        //      $query_run= $conn->prepare($query);
 
        //      // binding the values
 
        //      $data = [
 
        //          'fullname'=>  $fullname,
        //          'package'=>  $package,
        //          'blocknumber'=>  $blocknumber,
        //          'email'=>  $email,
        //          'contact'=>  $contact,
        //          'plotnumber'=>  $plotnumber,
        //          'statusaccount'=>  $statusaccount,
 
        //      ];
        //      $query_execute = $query_run->execute($data);
        //      if($query_execute)
        //      {
        //          $_SESSION['message']="Inserted Successfully";
        //          header('location:admindashboard.php');
        //          exit(0);
        //      }
        //      else {
        //          $_SESSION['message']="Not Inserted ";
        //          header('location:adddeceasedperson.php');
        //          exit(0);
        //      }
        //  }
 
         


          //  INSERT DATA OF DECEASED PERSON 

        if(isset($_POST['adddeceased']))
        {

            // getting the information from the form 

            $fullname =$_POST['fullname'];
            $address =$_POST['address'];
            $born =$_POST['born'];
            $died =$_POST['died'];
            $plotnumber =$_POST['plotnumber'];
            $blocknumber =$_POST['blocknumber'];
            $funeralday =$_POST['funeralday'];
  
           



            // inserting the data in database
            $query=" INSERT INTO deceasedperson (fullname,address ,born ,died,plotnumber,blocknumber,funeralday) VALUES (:fullname,:address,:born,:died,:plotnumber,:blocknumber,:funeralday)";
            // run the insert query 
            $query_run= $conn->prepare($query);

            // binding the values

            $data = [

                'fullname'=>  $fullname,
                'address'=>  $address,
                'born'=>  $born,
                'died'=>  $died,
                'plotnumber'=>  $plotnumber,
                'blocknumber'=>  $blocknumber,
                'funeralday'=>  $funeralday,

            ];
            $query_execute = $query_run->execute($data);
            if($query_execute)
            {
                $_SESSION['message']="Inserted Successfully";
                header('location:./admindashboard/deceasedperson.php');
                exit(0);
            }
            else {
                $_SESSION['message']="Not Inserted ";
                header('location:./admindashboard/deceasedperson.php');
                exit(0);
            }
        }

             /* DELETE DECEASED PERSON DATA */  

        if(isset($_POST['deletedeceasedperson']))
        {
            $student_id = $_POST['deletedeceasedperson'];
        
            try {
        
                $query = "DELETE FROM deceasedperson  WHERE id=:stud_id";
                $statement = $conn->prepare($query);
                $data = [
                    ':stud_id' => $student_id
                ];
                $query_execute = $statement->execute($data);
        
                if($query_execute)
                {
                    $_SESSION['message'] = "Deleted Successfully";
                    header('Location: ./admindashboard/deceasedperson.php');
                    exit(0);
                }
                else
                {
                    $_SESSION['message'] = "Not Deleted";
                    header('Location: ./admindashboard/deceasedperson.php');
                    exit(0);
                }
        
            } catch(PDOException $e){
                echo $e->getMessage();
            }
        }
        
        


         // DELETE RESERVATION DATA 

       

         if(isset($_POST['delete']))
{
    $student_id = $_POST['delete'];

    try {

        $query = "DELETE FROM reservation WHERE id=:stud_id";
        $statement = $conn->prepare($query);
        $data = [
            ':stud_id' => $student_id
        ];
        $query_execute = $statement->execute($data);

        if($query_execute)
        {
            $_SESSION['message'] = "Deleted Successfully";
            header('Location:./admindashboard/reservation.php');
            exit(0);
        }
        else
        {
            $_SESSION['message'] = "Not Deleted";
            header('Location:./admindashboard/reservation.php');
            exit(0);
        }

    } catch(PDOException $e){
        echo $e->getMessage();
    }
}



?>





