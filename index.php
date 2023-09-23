<?php
// connect to the server
$host= "localhost";
$user = "root";
$password = "";
$dbName = "hospital";

$conn = mysqli_connect($host,$user,$password,$dbName);
// send the informations by the patient to data base

$patientName  =   $_POST['name'];
$patientEmail =   $_POST['email'];
$patientDate  =   $_POST['date'];
$submit       =   $_POST['submit'];



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hospital reservation</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <div class="main">
        <div class="logo">
            <img src="./img/R.jpg" alt="">
            <h2>Angel Hospital </h2>
        </div>
    </div>
    <div class="book">

    <p>Welcome to Angel Hospital, Please fill the inputs with your personal informations </p>
    <form action="index.php" method="post">
        <input type="text" placeholder="Enter Your Name" name="name" >
        <input type="email" placeholder="Enter Your Email" name="email" >
        <input type="date"  name="date" >
        <input type="submit" value="reserve now"  name="submit" >
        <p <?php 
        if($submit){
            $query = "INSERT INTO patients (name,email,date) VALUE ('$patientName' ,'$patientEmail','$patientDate')";
            $result = mysqli_query($conn,$query);
            echo "<p style='color:green'>"."reservation done"."</p>";
        }else{
            echo "<p style='color:red'>"."somthing went wrong,pleasr try again"."</p>";
        
        }
        ?> ></p>
    </form>
    </div>

</body>
</html>