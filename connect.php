<?php 
    $server = "localhost";
    $username = "root";
    $password = "";
    $dbname = "patient_record";

    $conn = mysqli_connect($server,$username,$password,$dbname);
    
    if(isset($_POST['submit'])){

        if(!empty($_POST['username']) && !empty($_POST['password'])){

            $username = $_POST['username'];
            $password = $_POST['password'];
            

            $query = "insert into patient(username,password) values('$username','$password')";

            $run = mysqli_query($conn,$query) or die(mysqli_error());

            if($run){
                echo  "Form submitted successfully !";

            }
            else {

                echo "Form not submitted !";
            }
            }
        else {
            echo "All fields required";
        }
        
    }
?>