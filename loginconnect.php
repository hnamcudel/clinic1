<?php 

    $server = "localhost";
    $username = "root";
    $password = "";
    $dbname = "patient_record";

    $conn = mysqli_connect($server,$username,$password,$dbname);

    if(isset($_POST['username']) && isset($_POST['password']) ) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $query = "select * patient where username ='$username' and password ='$password'";
        
        $run = mysqli_fetch_array($query);

        if($run){
            echo "Log in sucess !!!";
        }
        else{
            echo "Fail to login !";
        }


    }

?>