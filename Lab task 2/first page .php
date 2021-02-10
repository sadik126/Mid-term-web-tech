<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>

<?php
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $bloodgrupErr = $degree = "";
$name = $email = $gender = $dateofbirth = $degree = $bloodgroup ="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
  }


 
  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>




    
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
    <p>Regestration form</p>
    <p><b>NAME :</b></p>
    <input type = "text" name="name "><br>
    &#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;<br>


    


    <p><b>EMAIL :</b></p>
    <input type = "text" name="email "><br>
    &#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;<br>
    


       <p><b>DATE OF BIRTH :</b></p>
    <input type = "date" name="date of birth "><br>
    &#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;<br>
    

      <p><b>GENDER :</b></p>
    <input type="radio"   value="male">
  <label for="male">male</label>
  <input type="radio"   value="female">
  <label for="female">female</label>
  <input type="radio"   value="other">
  <label for="other">other</label><br>
    &#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;<br>
 


      <p><b>DEGREE :</b></p>
    <input type="radio"   value="ssc">
  <label for="ssc">SSC</label>
  <input type="radio"   value="hsc">
  <label for="hsc">HSC</label>
  <input type="radio"   value="bsc">
  <label for="bsc">Bsc</label>
  <input type="radio"   value="msc">
  <label for="msc">Msc</label><br>
    &#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;<br>
    


    <p><b>BLOOD GROUP:</b></p>
    <select>
            <option></option>
            <option>A+</option>
            <option>A-</option>
            <option>B+</option>
            <option>B-</option>
            <option>O+</option>
            <option>O-</option>
        </select><br>
        &#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;<br>

        <input type="submit" name="submit" value="Submit"> 
    
    </form>



<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $dateofbirth;
echo "<br>";
echo $gender;
echo "<br>";
echo $degree;
echo "<br>";
echo $bloodgroup;


    ?>

</body>
</html>