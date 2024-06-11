<?php

require 'connection.php';
	session_start();
	

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<h3> Deceased Person Information </h3>
<hr>
    <?php
    // fetch_data.php

   
    if (isset($_POST['id'])) {
        $id = $_POST['id'];

        // Fetch data for the specified ID
        $stmt = $conn->prepare("SELECT * FROM deceasedperson WHERE id = :id");
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        $data = $stmt->fetch(PDO::FETCH_ASSOC);

        // Display data in the modal
        
    // echo "<p>ID: {$data['id']}</p>";
        echo "<p>Full Name: {$data['fullname']}</p>";
        echo "<p>Address: {$data['address']}</p>";
        echo "<p>Born: {$data['born']}</p>";
        echo "<p>Died: {$data['died']}</p>";
        echo "<p>Plot Number: {$data['plotnumber']}</p>";
        echo "<p>Block Number: {$data['blocknumber']}</p>";
        echo "<p>Funeral Day: {$data['funeralday']}</p>";
        echo "<p>Date Created: {$data['datecreated']}</p>";
        
    }
    ?><!-- The Modal -->
    <a href="bogomemorialparkmapreservation.php"><button>Close</button></a>
    </body>
</html>
