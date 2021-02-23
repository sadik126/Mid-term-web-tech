<!DOCTYPE html>
<html>
    <head>
        
        <title>Upload profile pic</title>
        <link rel="stylesheet" type="text/css" href="style.css" />
    </head>
    <body>
        <?php include 'headerlogin.php' ?>
<fieldset>
    <legend align="center" style="font-size: 2.0em">Upload Profile Picture</legend>

            <br>
             
              <?php include 'sidebar.php' ?>
            <form action="uploadprofile.php" method="post" enctype="multipart/form-data">
 Select image to upload:
  <input type="file" name="fileToUpload" id="fileToUpload">
  <input type="submit" value="Upload Image" name="submit">

</form>

</table>
  </fieldset>


    <?php include 'footer.php' ?>

   </body>
          
</html>