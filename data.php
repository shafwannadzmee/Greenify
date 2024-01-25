<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database Page</title>
    <link rel="stylesheet" href="style2.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,700;1,100&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.2/css/fontawesome.min.css">
</head>
<body>
    <section class = recycle-location>
        <h1>List of All Recycle Center</h1>
        <table class = "table" border = 1 cellspacing = 0 cellpadding = 10>
            <tr>
                <td>No.</td>
                <td>Name</td>
                <td>Address</td>
                <td>Location</td>
            </tr>

            <?php
            require 'connection.php';
            $rows = mysqli_query($conn, "SELECT * FROM tb_data ORDER BY id DESC");
            $i = 1;

            foreach($rows as $row) :
            ?>
            <tr>
                <td><?php echo $i++; ?></td>
                <td><?php echo $row["username"]; ?></td>
                <td><?php echo $row["address"]; ?></td>
                <td style = "width: 60%; height: 300px; text-align: center;"><iframe src = 'https://www.google.com/maps?q=<?php echo $row["latitude"]; ?>,<?php echo $row["longitude"]; ?>&hl=es;z=14&output=embed' style = "width: 90%; height: 90%;"></iframe></td>
            </tr>
            <?php endforeach; ?>
        </table>
</body>
</html>