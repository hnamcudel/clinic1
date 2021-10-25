<?php 
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "patient_record";

    $conn = mysqli_connect($servername,$username,$password,$database);
    if(!$conn){
        echo ("Connect Failed!");
    }else{
        echo ("Connect Sucess!");
    }

    if(isset($_GET['delete'])){
        $patientid = $_GET['delete'];
        $conn -> query("DELETE FROM patient WHERE PatientID=$patientid");
        hearder("Location: deletepatient.php");
    }
?>