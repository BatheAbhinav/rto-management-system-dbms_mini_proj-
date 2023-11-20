<!--REGISTER NEW USER-->
<!--WORKING CODE-->

<!DOCTYPE html>
<html lang="en">
  
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="common.css">
    <title class="title">user register</title>
    </head>
  <body>
    <header>
      <h1 id="mainheader">RTO MANAGEMENT SYSTEM</h1>
    </header>

    <div class="background" ></div>
    <div class="logintext">
      <div>
        <h3>CREATE NEW ID:</h3>
        <form method="post" action="registerResponse.php"> 

          <label for="First_Name">First Name</label>
          <input type="text" name="First_Name" style="translate: 1px 0;"><br><br>

          <label for="Last_Name">Last Name</label>
          <input type="text" name="Last_Name" style="translate: 1px 0;"><br><br>

          <label for="Address">Address </label>
          <input type="text" name="Address" style="translate: 10px 0;"><br><br>

          <label for="DOB ">DOB </label>
          <input type="date" name="DOB" ><br><br>

          <label for="Aadhar_No ">Aadhar No</label>
          <input type="text" name="Aadhar_No"><br><br>

          <label for="Contact_No">Contact No</label>
          <input type="text" name="Contact_No"><br><br>

          <label for="Gender">Gender</label>
          <select name="Gender" >
            <option value="Male">Male</option>
            <option value="Female">Female</option>
          </select><br><br>

          <label for="LoginID">LoginID </label>
          <input type="text" name="LoginID"><br><br>

          <label for="Password">Password </label>
          <input type="password" name="Password"><br><br>

          <input type="submit" value="Register" style="margin-bottom: 15px;" name="register">

        </form>
      </div>
    </div>

    <footer class="commonfooter">
        <h3>THIS IS A FOOTER</h3>
    </footer>

  </body>
</html>