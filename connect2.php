<?php 
    $server = "localhost";
    $username = "root";
    $password = "";
    $dbname = "patient_record";

    $conn = mysqli_connect($server,$username,$password,$dbname);
    
    if(isset($_POST['submit'])){

        if(!empty($_POST['disease']) && !empty($_POST['symptom']) && !empty($_POST['prescription'])){

            $disease = $_POST['disease'];
            $symptom = $_POST['symptom'];
            $prescription = $_POST['prescription'];

            $query = "insert into disease(disease,symptom,prescription) values('$disease','$symptom','$prescription')";

            $run = mysqli_query($conn,$query) or die(mysqli_error());

            if($run){
                echo  "Form submitted successfully !";

            }
            else {

                echo  "Form not submitted !";
            }
            }
        else {
            echo "All fields required";
        }
        
    }
?>