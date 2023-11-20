<!--REGISTER NEW VEHICLE-->
<!--INSERT INTO VEHICLEDETAILS-->


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
        <h2>Register Vehicle:</h2>
        <form method="post" action="addvehicleresponse.php"> 

          <label for="Chasis_Number">Chasis Number</label>
          <input type="text" name="Chasis_Number" style="translate: 1px 0;"><br><br>

          <label for="Engine_Number">Engine Number</label>
          <input type="text" name="Engine_Number" style="translate: 1px 0;"><br><br>

          <label for="Fuel_Type">Fuel Type </label>
          <input type="text" name="Fuel_Type" style="translate: 20px 0;"><br><br>

          <label for="Fuel_Type">Colour </label>
          <input type="text" name="Colour" style="translate: 20px 0;"><br><br>

          <label for="Model ">Model </label>
          <input type="text" name="Model" style="translate: 32px 0;"><br><br>

          <label for="Year ">Year</label>
          <input type="text" name="Year"  style="translate: 40px 0;"><br><br><br>

          <!--<label for="Gender">Gender</label>
          <select name="Gender" >
            <option value="Male">Male</option>
            <option value="Female">Female</option>
          </select><br><br>

          <label for="LoginID">LoginID </label>
          <input type="text" name="LoginID"><br><br>

          <label for="Password">Password </label>
          <input type="password" name="Password"><br><br> -->

          <input type="submit" value="Register" style="margin-bottom: 15px;" name="register">

          <input type="reset">
        </form>
      </div>
    </div>

    <footer class="commonfooter">
        <h3>THIS IS A FOOTER</h3>
    </footer>

  </body>
</html>