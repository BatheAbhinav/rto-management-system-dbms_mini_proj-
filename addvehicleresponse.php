<?php 
// USED FOR REGISTERVEHICLE.PHP REGISTER NEW VEHICLE
//query 'where' condition test required
session_start();
include "dbconn.php";

if($_SERVER['REQUEST_METHOD'] == "POST"){

    $Chasis_Number = $_POST['Chasis_Number'];
    $Engine_Number = $_POST['Engine_Number'];
    $Fuel_Type = $_POST['Fuel_Type'];
    $Colour = $_POST['Colour'];
    $Model = $_POST['Model'];
    $Year = $_POST['Year'];
    $Aadhar_Number = $_SESSION["Aadhar_Number"];

    $temp = $_SESSION["Aadhar_Number"];
    
    $query = "insert into vehicledetails(Chasis_Number, Engine_Number, Fuel_Type, Colour, Model, Year,Aadhar_Number) values('$Chasis_Number','$Engine_Number','$Fuel_Type','$Colour','$Model','$Year' where Aadhar_Number= $temp;)";
    echo $query;
    mysqli_query($conn,$query);
    header("Location: loginpage.php");
    die;
}

?>

