<!DOCTYPE html>
<html>
    <head>
        
        <title>Edit Profile</title>
        
    </head>
    <body>
        <?php include 'headerlogin.php' ?>
<fieldset>
    <legend align="center" style="font-size: 2.0em">Welcome BOB</legend>
    <br>
              <?php include 'sidebar.php' ?>

<fieldset>
    <legend align="center" style="font-size: 2.0em">Edit Profile</legend>
             <form action="editprofile.php" method="post" align="center">

               
<table cellpadding="2" width="50%" bgcolor="E0E0E0" align="center"cellspacing="2">
    <tr>
      <td>NAME</td>
      <td><input type="text" name="name" size="30" required="1"></td>
    </tr>

    <tr>
      <td>EMAIL</td>
      <td><input type="text" name="email" size="30" required="1"></td>
    </tr>

    <tr>
      <td>DATE OF BIRTH</td>
      <td><input type="Date" name="dateofbirth" size="30" min="1953-01-01" max="1998-01-01" required="1"></td>
    </tr>
    <tr>
      <td>GENDER</td>
      <td><input type="radio" name="gender" value="Male" size="30" >Male
      <input type="radio" name="gender" value="Female" size="30" >Female
      <input type="radio" name="gender" value="Other" size="30" >Other
      
    </td>
    </tr>

    <tr></tr>
        <tr>
          <td></td>
          <td><input type="Submit" name="submit" value="Submit"</td>
        </tr>

  </table>
 
   </fieldset>
      </fieldset>

       
   </body>
   <?php include 'footer.php' ?>
          
</html>