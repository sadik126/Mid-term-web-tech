<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<?php include 'header.php' ?>

	<h1 align="center">WELCOME </h1>

	<?php 

	   $eremail=  "";

  $email=  "";

      


    if($_SERVER["REQUEST_METHOD"]=="POST")
  
       {
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
    
        



        
       
       
   
    

        function validate($data)
        { 
              $data= trim($data);
              $data = stripcslashes($data);
              $data = htmlspecialchars($data);
              return $data;
        }


 
?>

  
  <h1 style="text-align:center">Forgot password</h1>
  
  <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" >
    <fieldset>
    <legend align="center" style="font-size: 2.0em">Fill Up the Form Carefully</legend>

   <table cellpadding="2" width="50%" bgcolor="E0E0E0" align="center"cellspacing="2">
  

    <tr>
      <td>EMAIL</td>
      <td><input type="text" name="email" size="30" required="1"><?php echo $eremail; ?></td>
    </tr>

        <tr></tr>
        <tr>
          <td></td>
          <td><input type="Submit" name="submit" value="Submit"</td>
        </tr>
  </table>


        
    
</fieldset>
</form>

<?php    
         echo "<h2> Input:</h2>";
        
         echo "EMAIL : ".$email."<br>";
         

?>

	<?php include 'footer.php' ?>

</body>
</html>

</body>
</html>