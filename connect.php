<?php 
    $server = "localhost";
    $username = "root";
    $password = "";
    $dbname = "patient_record";

    $conn = mysqli_connect($server,$username,$password,$dbname);
    
    if(isset($_POST['submit'])){

        if(!empty($_POST['fullname']) && !empty($_POST['email']) && !empty($_POST['address']) && !empty($_POST['status'])){

            $fullname = $_POST['fullname'];
            $email = $_POST['email'];
            $address = $_POST['address'];
            $status = $_POST['status'];

            $query = "insert into patient(fullname,email,address,status) values('$fullname','$email','$address','$status')";

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