<!DOCTYPE html>
<html>
<head>
    <title>PHP Form Validation</title>
</head>
<body>
  <?php include 'header.php' ?>
<?php
 $ername=  $erpassword=  "";

 $name=  $password=  "";

      
$regex="/^[a-zA-Z]{2}+$/";

    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        if (empty($_POST["name"])) 
        {
          $ername="NAME is required";   
        }
        else
        {
            $name = validate($_POST["name"]);
       if(preg_match($regex,$name)) {
      $ername = "Only letters and white space allowed";
    }
  }
       
          if (empty($_POST["password"]))
        {
            $erpassword = "Email is required";
        } 
       else 
       {
           $password = validate($_POST["password"]);
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
  
  <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" >
    <fieldset>
    <legend align="center" style="font-size: 2.0em">Fill Up the Form Carefully</legend>

   <table cellpadding="2" width="50%" bgcolor="E0E0E0" align="center"cellspacing="2">
    <tr>
      <td> USERNAME</td>
      <td><input type="text" name="name" size="30" required="1"><?php echo $ername; ?></td>
    </tr>

    <tr>
      <td>PASSWORD</td>
      <td><input type="text" name="password" size="30" required="1"><?php echo $erpassword; ?></td>
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
         echo "NAME : ".$name."<br>";
         echo "PASSWORD : ".$password."<br>";
         
        
        
       

?>
<?php include 'footer.php' ?>
</body>
</html>