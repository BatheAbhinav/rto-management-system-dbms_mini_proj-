<?php //done for now, testing baaki aahe
session_start();
include "dbconn.php";

if(isset($_POST['Submit'])){

    $query = "select Password from userdetails where LoginID=$LoginID";
    $result = mysqli_query($conn,$query);
   
    $Password = $_POST['Password'];
    if(empty($_POST['Password']) || $_POST['Password'] !== $_SESSION['Password']) {   /* OR password is wrong[will require to store session details] */
      header("Location: deleteuser.php");
      die;
    }

    if($result && mysqli_num_rows($result) > 0){
      $userdata=mysqli_fetch_assoc($result);
      if($userdata['Password'] === $Password){
        $temp = $_SESSION['LoginID'];
        $delquery = "delete from userdetails where LoginID = $temp";//LoginID to be retrieved from session
        mysqli_query($conn,$delquery);
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
