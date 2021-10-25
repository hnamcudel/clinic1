<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <title>ADD PATIENT</title>
</head>
<body>
    <?php require_once 'connect.php' ?>
    <?php 
        if(isset($_POST['add'])){
            $patientid = $_POST['patientid'];
            $password = $_POST['password'];
            $email = $_POST['email'];
            $address = $_POST['address'];
            $status = $_POST['status'];

            if($conn -> query("INSERT INTO patient(PatientID,Name,Email,Address,Status) VALUES (N'$patientid',N'$password',N'$email',N'$address',N'$status')")){
                echo "<script>alert('Successful added');</script>";
            }else {
                echo "<script>alert('UnSuccessful added');</script>";
            }
        }
        $conn->close();
    ?>


    <div class="container">
        <form method="POST" action="connet.php">
            <div class="form-group">
                <label for="patientId">PatientID</label>
                <input type="patientid" class="form-control" placeholder="...">
            </div>
            <div class="form-group">
                <label for="fullName">Full Name</label>
                <input type="fullname" class="form-control" placeholder="...">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" placeholder="...">
            </div>
            <div class="form-group">
                <label for="address">Adress</label>
                <input type="address" class="form-control" placeholder="...">
            </div>
            <div class="form-group">
                <label for="status">Status</label>
                <input type="status" class="form-control" placeholder="...">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>
</html>