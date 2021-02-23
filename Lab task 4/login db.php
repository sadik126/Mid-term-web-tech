<!DOCTYPE html>
<html>
<head>
    <title>PHP Form Validation</title>
</head>
<body>

<?php include 'header.php' ?>
 <?php
 $ername= $erpass="";

 $name= $pass="";




      


    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        if (empty($_POST["name"])) 
        {
          $ername="NAME is required";   
        }
        else
        {
            $name = validate($_POST["name"]);
        if (!preg_match("/^[a-zA-Z.]{2}+$/",$name)) {
      $ername = "Invalid name.please try again";
    }
  }
        
        if (empty($_POST["pass"]))
        {
            $erpass = "password is required";
        } 
       else 
       {
           $pass= validate($_POST["pass"]);
           if (!preg_match("/^[a-zA-Z.]{8}+$/",$pass)) {
      $ername = "Invalid password.please try again";
       }

       
        }
          }

    
        


        
        

    
         

    

        function validate($data)
        { 
              $data= trim($data);
              $data = stripcslashes($data);
              $data = htmlspecialchars($data);
              return $data;
        }


 
?>

  
  <h1 style="text-align:center">PHP Form Validation</h1>
  
  <form method="post" action="loginbob.php" >
    <fieldset>
    <legend align="center" style="font-size: 2.0em">Fill Up the Form Carefully</legend>

   <table cellpadding="2" width="50%" bgcolor="E0E0E0" align="center"cellspacing="2">
    <tr>
      <td>NAME</td>
      <td><input type="text" name="name" size="30" required="1"><?php echo $ername; ?></td>
    </tr>

    <tr>
      <td>PASSWORD</td>
      <td><input type="text" name="pass" size="30" required="1"><?php echo $erpass; ?></td>
    </tr>

   
        <tr></tr>
        <tr>
          <td></td>
          <td><input type="Submit" name="submit" value="Submit"
            <div  >
    
    <span class="psw"> <a href="forgetpass.php"> <span style="color: #ff0000">Forgot password?</span></a></span>
   </div>
 </td>
        </tr>

       
  </table>


        
    
</fieldset>
</form>



<?php include 'footer.php' ?>
</body>
</html>