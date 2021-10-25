<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <title>ADD DISEASES</title>
</head>
<body>
    <?php require_once 'connect.php' ?>
    <?php 
        if(isset($_POST['add'])){
            $disease = $_POST['disease'];
            $symptom = $_POST['symptom'];
            $prescription = $_POST['prescription'];

            if($conn -> query("INSERT INTO patient(	Disease,Symptom,Prescription) VALUES (N'$disease',N'$symptom',N'$prescription')")){
                echo "<script>alert('Successful added');</script>";
            }else {
                echo "<script>alert('UnSuccessful added');</script>";
            }
        }
        $conn->close();
    ?>


    <div class="container1">
        <form method="POST" action="connet.php">
            <div class="form-group">
                <label for="disease">Disease</label>
                <input type="disease" class="form-control" placeholder="...">
            </div>
            <div class="form-group">
                <label for="symptom">Symptom</label>
                <input type="symptom" class="form-control" placeholder="...">
            </div>
            <div class="form-group">
                <label for="prescription">Prescription</label>
                <input type="prescription" class="form-control" placeholder="...">
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>
</html>