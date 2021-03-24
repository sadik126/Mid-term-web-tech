<?php


if(isset($_POST['insert']))

{ 
	// include'db_con.php';
	$name=$_POST["name"];
	$buyingprice=$_POST["buyingprice"];
	$sellingprice=$_POST["sellingprice"];
	$profit=$_POST["sellingprice"]-$_POST["buyingprice"];
	
  

    $con=mysqli_connect("localhost","root","","product_db");
    $sql= "INSERT INTO `products` (`name`, `buying price`, `selling price`,`profit`) VALUES ('$name', '$buyingprice', '$sellingprice','$profit')";
    $result = mysqli_query($con,$sql);

    if($result)
    {
      echo "success";
      
    }
  
  else
  {
    echo "error";
  

  }

  mysqli_close($con);
}

?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

 <form action="addproduct.php" method="POST" >
  <label for="name">Name:</label><br>
  <input type="text" id="name" name="name"><br>
  <label for="buyingprice">buying price:</label><br>
  <input type="text" id="buyingprice" name="buyingprice"><br>
  <label for="sellingprice">selling price:</label><br>
  <input type="text" id="sellingprice" name="sellingprice"><br>
 
  
  <input type="submit" name = "insert" value="Save">
  <a href="showproduct.php">DISPLAY</a>
   
</form> 

</body>
</html>




