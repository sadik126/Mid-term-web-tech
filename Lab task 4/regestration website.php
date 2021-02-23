<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<?php include 'header.php' ?>

	<h1 align="center">WELCOME TO REGESTRATION</h1>

	<?php 

	 $ername=  $eremail= $erdateofbirth = $ergender= $erusername= $erpassword= $ercpassword= "";

 $name=  $email= $dateofbirth = $gender= $username= $password= $cpassword= "";

      


    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        if (empty($_POST["name"])) 
        {
          $ername="NAME is required";   
        }
        else
        {
            $name = validate($_POST["name"]);
        if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $ername = "Only letters and white space allowed";
    }
  }
        
        if (empty($_POST["email"]))
        {
            $eremail = "Email is required";
        } 
       else 
       {
           $email = validate($_POST["email"]);
       }

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
        {
            $eremail = "Invalid Email format";
        }
        }
    
        


        if (empty($_POST["dateofbirth"])) 
        {
          $erdateofbirth="";   
        }
        else
        {
            
        $dateofbirth= validate($_POST["dateofbirth"]);
        }


        
        if (empty($_POST["gender"])) 
        {
          $ergender="";   
        }
        else
        {
            $gender = validate ($_POST["gender"]);
        }

        if (empty($_POST["username"])) 
        {
          $erusername="";   
        }
        else
        {
            $username = validate ($_POST["username"]);
        }

        if (empty($_POST["password"])) 
        {
          $erpassword="";   
        }
        else
        {
            $password = validate ($_POST["password"]);
        }

        if (empty($_POST["cpassword"])) 
        {
          $ercpassword="";   
        }
        else
        {
            $cpassword = validate ($_POST["cpassword"]);
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
  
  <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" >
    <fieldset>
    <legend align="center" style="font-size: 2.0em">Fill Up the Form Carefully</legend>

   <table cellpadding="2" width="50%" bgcolor="E0E0E0" align="center"cellspacing="2">
    <tr>
      <td>NAME</td>
      <td><input type="text" name="name" size="30" required="1"><?php echo $ername; ?></td>
    </tr>

    <tr>
      <td>EMAIL</td>
      <td><input type="text" name="email" size="30" required="1"><?php echo $eremail; ?></td>
    </tr>


    <tr>
      <td>USERNAME</td>
      <td><input type="text" name="username" size="30" required="1"><?php echo $erusername; ?></td>
    </tr>

    <tr>
      <td>DATE OF BIRTH</td>
      <td><input type="Date" name="dateofbirth" size="30" min="1953-01-01" max="1998-01-01" required="1"><?php echo $erdateofbirth; ?></td>
    </tr>


    <tr>
      <td>PASSWORD</td>
      <td><input type="text" name="password" size="30" required="1"><?php echo $erpassword; ?></td>
    </tr> 


    <tr>
      <td>CONFIRM PASSWORD</td>
      <td><input type="text" name="cpassword" size="30" required="1"><?php echo $ercpassword; ?></td>
    </tr>

    <tr>
      <td>GENDER</td>
      <td><input type="radio" name="gender" value="Male" size="30" >Male
      <input type="radio" name="gender" value="Female" size="30" >Female
      <input type="radio" name="gender" value="Other" size="30" >Other
       <?php echo $ergender;?>
    </td>
    </tr>

    
  

     
        <tr></tr>
        <tr>
          <td></td>
          <td><input type="Submit" name="submit" value="Submit"</td>
        </tr>
  </table>


        
    
</fieldset>
</form>



	<?php include 'footer.php' ?>

</body>
</html>