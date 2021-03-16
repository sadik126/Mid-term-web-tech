<!DOCTYPE html>
<html>
<head>
    <title>PHP Form Validation</title>
</head>
<body>
<?php
 $ername=  $eremail= $erdateofbirth = $ergender= $erdegree= $erblood_group= "";

 $name=  $email= $dateofbirth = $gender= $degree= $blood_group= "";

      


    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        if (!empty($_POST["name"])) 
       { 
    
        if(strlen($_POST['name'])>=2 && (!preg_match("/^[a-zA-Z\s]+$/", $name)))
                {
                   $name = $_POST['name'];
                   // echo "Name: ".$name."<br/;>";
                  } 
              else
                  {
                   $ername= " At Least Two Letters & must be alphabets "; 
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
         
    


        // if (empty($_POST["degree"])) 
        // {
        //   $erdegree="";   
        // }
        // else
        // {
            
        // $degree = validate($_POST["degree"]);
        // }

        

        if (empty($_POST["blood_group"])) 
        {
          $erblood_group=" "; 
        }
        
      else
        {
            
        $blood_group = validate($_POST["blood_group"]);
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
  
  <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" >
    <fieldset>
    <legend align="center" style="font-size: 2.0em">Fill Up the Form</legend>

   <table cellpadding="2" width="50%"  align="center"cellspacing="2">
    <tr>
      <td>NAME</td>
      <td><input type="text" name="name" size="30" required="1"><?php echo $ername; ?></td>
    </tr>

    <tr>
      <td>EMAIL</td>
      <td><input type="text" name="email" size="30" required="1"><?php echo $eremail; ?></td>
    </tr>

    <tr>
      <td>DATE OF BIRTH</td>
      <td><input type="Date" name="dateofbirth" size="30" min="1953-01-01" max="1998-01-01" required="1"><?php echo $erdateofbirth; ?></td>
    </tr>
    <tr>
      <td>GENDER</td>
      <td><input type="radio" name="gender" value="Male" size="30" >Male
      <input type="radio" name="gender" value="Female" size="30" >Female
      <input type="radio" name="gender" value="Other" size="30" >Other
       <?php echo $ergender;?>
    </td>
    </tr>

    
    <tr>
       <td>DEGREE</td>

       
           <td >
            <input type="checkbox" name="degree[]" value="SSC" >SSC
               <input type="checkbox" name="degree[]" value="HSC"  >HSC
               <input type="checkbox" name="degree[]" value="BSc" >BSc
               <input type="checkbox" name="degree[]" value="MSc" >MSc
               <?php echo $erdegree; ?>
            </td>
        </tr>

        <tr>
         <td>BLOOD GROUP</td>
        <td><select name="blood_group">
        <option value="1" selected>Select a blood group</option>
        <option value="A+">A+</option>
        <option value="A-">A-</option>
        <option value="B+">B+</option>
        <option value="B-">B-</option>
        <option value="O+">O+</option>
        <option value="O-">O-</option>
        <option value="AB+">AB+</option>
        <option value="AB-">AB-</option>
        </select></td>
        <?php echo $erblood_group; ?>
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
 echo "EMAIL : ".$email."<br>";
 echo "DATE OF BIRTH : ".$dateofbirth."<br>";
if(isset($_POST["submit"]))
{
  if(!empty($_POST["degree"]))
  {
    foreach($_POST["degree"] as $degree)
    {
      echo "degree : ".$degree."<br>";
    }
  }
  else
  {
    echo'please select this';
  }
}
echo "gender: ".$gender."<br>";
 echo "BLOOD GROUP : ".$blood_group."<br>";


?>
</body>
</html>