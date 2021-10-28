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
                    <label for="username">User name</label>
                    <input type="username" class="form-control" placeholder="Enter your user name here..." name="username">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" placeholder="Enter your password here..." name="password">
                </div>
                <button type="submit" class="btn btn-primary" name="submit">Submit</button>
            </form>
        </div>
    </body>
</html>
