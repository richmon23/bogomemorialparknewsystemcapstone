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
<?php
// Fetch data from the database
$stmt = $conn->query("SELECT * FROM deceasedperson");
$data = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Description</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($data as $row): ?>
            <tr>
                <td><?= $row['id'] ?></td>
                <td><?= $row['fullname'] ?></td>
                <td><?= $row['address'] ?></td>
                <td><?= $row['born'] ?></td>
                <td><?= $row['died'] ?></td>
                <td><?= $row['plotnumber'] ?></td>
                <td><?= $row['blocknumber'] ?></td>
                <td><?= $row['funeralday'] ?></td>
                <td><?= $row['datecreated'] ?></td>
                <td>
                    <button class="view-btn" data-id="<?= $row['id'] ?>">View</button>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<div id="modal" style="display: none;">
    <!-- Modal content will be displayed here -->
</div>

</body>
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

</html>
