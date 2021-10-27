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
    <div class="container1">
        <form method="POST" action="connect2.php">
            <div class="form-group">
                <label for="disease">Disease</label>
                <input type="disease" class="form-control" name="disease" placeholder="..."> 
            </div>
            <div class="form-group">
                <label for="symptom">Symptom</label>
                <input type="symptom" class="form-control" name="symptom" placeholder="...">
            </div>
            <div class="form-group">
                <label for="prescription">Prescription</label>
                <input type="prescription" class="form-control" name="prescription" placeholder="...">
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
    </div>
</body>
</html>