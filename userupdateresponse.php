<?php //WORKING CODE AAHE
// USED FOR REGISTERPAGE.PHP REGISTER NEW USER
session_start();
include "dbconn.php";

if($_SERVER['REQUEST_METHOD'] == "POST"){

    $First_Name = $_POST['First_Name'];
    $Last_Name = $_POST['Last_Name'];
    $Address = $_POST['Address'];
    $Contact_No = $_POST['Contact_No'];
    
    if(empty($_POST['First_Name'])){
        echo "Enter a value";
        header("Location: userupdate.php");
        die;
    }
    if(empty($_POST['Last_Name'])){
        echo "Enter a value";
        header("Location: userupdate.php");
        die;
    }
    if(empty($_POST['Address'])){
        echo "Enter a value";
        header("Location: userupdate.php");
        die;
    }
    if(empty($_POST['Contact_Numer'])){
        echo "Enter a value";
        header("Location: userupdate.php");
        die;
    }

    $temp = $_SESSION['LoginID'];
    $query ="update userdetails set First_Name = $First_Name, Last_Name = $Last_Name, Address = $Address, Contact_Number = $Contact_Number where LoginID = $temp "; 
    $result = mysqli_query($conn,$query);

    header("Location: loginpage.php");
    die;

}
?>

