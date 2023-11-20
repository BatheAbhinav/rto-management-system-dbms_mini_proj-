<?php  //testing remaining
session_start();
include "dbconn.php";

if(isset($_POST['Submit'])){
   
    $Model = $_POST['Model'];
    $Year = $_POST['Year'];
    $Chasis_Number = $_POST['Chasis_Number'];
    $Engine_Number = $_POST['Engine_Number'];

    $temp = $_SESSION["Aadhar_Number"];
    $query= "select Model, Year, Chasis_Number, Engine_Number from vehicledetails where Aadhar_Number = $temp";//___ complete query to retrieve data for session['loginID']
    $result= mysqli_query($conn,$query);

    if(empty($_POST['Model']) || empty($_POST['Year']) || empty($_POST['Chasis_Number']) || empty($_POST['Engine_Number'])){
        header("Location: deletevehicle.php");
        die;
    }
    
    if($result && mysqli_num_rows($result) > 0){
        $vehicledata=mysqli_fetch_assoc($result);
        if($vehicledata['Model'] === $Model && $vehicledata['Year'] === $Year && $vehicledata['Chasis_Number'] === $Chasis_Number && $vehicledata['Engine_Number'] === $Engine_Number){
            $delquery="delete from vehicledetails where Aadhar_Number = $temp"; 
            $mysqli_query($conn,$delquery);
            header("Location: loginpage.php");
            die;
        }
  
      } //doubt
      else {
          echo "Wrong pass ";  
          header("Location: deleteuser.php");
          die;
    }
            

    
    
}
?>