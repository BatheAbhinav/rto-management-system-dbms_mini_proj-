<?php //WORKING CODE AAHE
// USED FOR REGISTERPAGE.PHP REGISTER NEW USER
session_start();
include "dbconn.php";

if($_SERVER['REQUEST_METHOD'] == "POST"){

    $First_Name = $_POST['First_Name'];
    $Last_Name = $_POST['Last_Name'];
    $Address = $_POST['Address'];
    $DOB = $_POST['DOB'];
    $Aadhar_No = $_POST['Aadhar_No'];
    $Contact_No = $_POST['Contact_No'];
    $Gender = $_POST['Gender'];
    $LoginID = $_POST['LoginID'];
    $Password = $_POST['Password'];

    $query = "insert into userdetails(First_Name,Last_Name,address,dob,aadhar_number,contact_number,Gender,Loginid,Password) values('$First_Name','$Last_Name','$Address','$DOB','$Aadhar_No','$Contact_No','$Gender','$LoginID','$Password')";
   
    mysqli_query($conn,$query);
    $_SESSION['First_Name'] = $First_Name;

    header("Location: loginpage.php");
    die;

}
?>

