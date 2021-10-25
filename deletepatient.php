<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <title>DELETE PATIENT</title>
    </head>
    <body>
        <?php require_once 'connect.php' ?>
        <?php 
            $result= $conn -> query("SELECT * FROM patient");
        ?>
            <div class="container">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Patient's ID</th>
                            <th scope="col">Full Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Adress</th>
                            <th scope="col">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php while($row = mysqli_fetch_assoc($result)): ?>
                        <tr>
                            <td><?php echo $row['PatientID']; ?></td>
                            <td><?php echo $row['Name']; ?></td>
                            <td><?php echo $row['Email']; ?></td>
                            <td><?php echo $row['Address']; ?></td>
                            <td><?php echo $row['Status']; ?></td>
                            <td> <a href="connect.php?delete=<?php echo $row['PatientID'] ?>"></a> </td>
                        </tr>
                    <?php endwhile; ?>
                    </tbody>
                </table>
            </div>
    </body>
</html>