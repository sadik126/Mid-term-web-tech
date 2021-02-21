<!DOCTYPE html>
<html>
<head>
    <title>PHP Form Validation</title>
</head>
<body>
<?php
 $erpass=  $ernpass= $ernwpass = "";

 $pass=  $npass= $nwpass = "";

      


   
      
        if (empty($_POST["pass"])) 
        {
          $erpass="enter value "; 
        }
        
      else
        {
            
        $pass = validate($_POST["pass"]);
        }


        if (empty($_POST["npass"])) 
        {
          $ernpass="enter comfirm value "; 
        }
        
      else
        {
            
        $npass = validate($_POST["npass"]);
        }


        if (empty($_POST["nwpass"])) 
        {
          $ernwpass="Retype value "; 
        }
        
      else
        {
            
        $nwpass = validate($_POST["nwpass"]);
        }



        if($_POST['npass'] != $_POST['nwpass']) {
    echo "is not matched";
} else {
  echo "is not matched";
    
}

     if($_POST['pass'] == $_POST['npass']) {
    echo "you set the same password again";
} else {
  echo "";
    
}
        
    
        


         
    


        

      
        
        

    
         

    

        function validate($data)
        { 
              $data= trim($data);
              $data = stripcslashes($data);
              $data = htmlspecialchars($data);
              return $data;
        }


 
?>

  
  <h1 style="text-align:center">Change password</h1>
  
  <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" >
    <fieldset>
    

   <table cellpadding="2" width="50%" bgcolor="E0E0E0" align="center"cellspacing="2">
    <tr>
      <td>Current password</td>
      <td><input type="text" name="pass" size="30" required="1"><?php echo $erpass; ?></td>
    </tr>

    <tr>
      <td>New password</td>
      <td><input type="text" name="npass" size="30" required="1"><?php echo $ernpass; ?></td>
    </tr>

    <tr>
      <td> Retype New password</td>
      <td><input type="text" name="nwpass" size="30" required="1"><?php echo $ernwpass; ?></td>
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
         echo "OLD PASSWORD : ".$pass."<br>";
         echo "NEW PASSWORD : ".$npass."<br>";
        echo "CONFIRM PASSWORD : ".$nwpass."<br>";
        
?>
</body>
</html>