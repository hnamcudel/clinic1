<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <title>ADD PATIENT</title>
    </head>
    <body></body>
        <div class="container">
            <form method="POST" action="connect.php">
                <div class="form-group">
                    <label for="fullName">Full Name</label>
                    <input type="fullname" class="form-control" placeholder="..." name="fullname">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" placeholder="..." name="email">
                </div>
                <div class="form-group">
                    <label for="address">Adress</label>
                    <input type="address" class="form-control" placeholder="..." name="address">
                </div>
                <div class="form-group">
                    <label for="status">Status</label>
                    <input type="status" class="form-control" placeholder="..." name="status">
                </div>
                <button type="submit" class="btn btn-primary" name="submit">Submit</button>
            </form>
        </div>
    </body>
</html>