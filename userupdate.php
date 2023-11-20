<!DOCTYPE html> <!--php is userupdateresponse-->
<html>

    <head>
        <title>Update User Information</title>
        <link rel="stylesheet" href="registration.css">
    </head>

    <body>
        <h1>  <center>Update User  Information</center></h1><hr>

        <form align="center" method="post" action="userupdateresponse.php">

            <label for="First_Name">First Name:</label>
            <input type="text"  name="First_Name" value="<?php $_SESSION["First_Name"] ?>"><br><br>

            <label for="Last_Name">Last Name:</label>
            <input type="text"  name="Last_Name" value="<?php $_SESSION["Last_Name"] ?>" ><br><br>


            <label for="Address">Address:</label>
            <input type="text"  name="Address" value="<?php $_SESSION["Address"] ?>" ><br><br>

            <label for="Contact_Number">Contact No:</label>
            <input type="tel"  name="Contact_Number" value="<?php $_SESSION["Contact_Number"] ?>" ><br><br>

            <input type="submit" value="Update"></a>

            <input type="reset">
        </form>

    </body>
</html>