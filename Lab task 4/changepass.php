<!DOCTYPE html>
<html>
    <head>
        
        <title>Change Password</title>
        
    </head>
    <body>
         <?php include 'headerlogin.php' ?>
<fieldset>
    <br>
             
        <?php include 'sidebar.php' ?>


            <fieldset>
    <legend align="center" style="font-size: 2.0em">Change Password</legend>
             <form action="changepass.php" method="post" align="center">

               

   <table cellpadding="2" width="50%" bgcolor="E0E0E0" align="center"cellspacing="2">
    <tr>
      <td>Current Password</td>
      <td><input type="text" name="cp" size="30" required="1"></td>
    </tr>

    <tr>
      <td><span style="color: green">Retype New Password</span></td>
      <td><input type="text" name="np" size="30" required="1"></td>
    </tr>

    <tr>
      <td><span style="color: red">Retype New Password</span></td>
      <td><input type="text" name="rnp" size="30" required="1"></td>
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
