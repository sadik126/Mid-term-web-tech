<?php


if(isset($_POST['update']))

{ 
	// include'db_con.php';
	$name=$_POST["name"];
	$buyingprice=$_POST["buyingprice"];
	$sellingprice=$_POST["sellingprice"];
	$profit=$_POST["sellingprice"]-$_POST["buyingprice"];
	
  

    $con=mysqli_connect("localhost","root","","product_db");
     $sql1="UPDATE `products` SET `name`='$name' ,`buying price`='$buyingprice',`selling price`='buyingprice',`profit`='$profit' WHERE `name`='$name'";
     
  

    // $sql= "INSERT INTO `products` (`name`, `buying price`, `selling price`,`profit`) VALUES ('$name', '$buyingprice', '$sellingprice','$profit')";
    $result1 = mysqli_query($con,$sql1);

    if($result1)
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

 <form action="editproduct.php" method="POST" >
  <label for="name">Name:</label><br>
  <input type="text" id="name" name="name"><br>
  <label for="buyingprice">buying price:</label><br>
  <input type="text" id="buyingprice" name="buyingprice"><br>
  <label for="sellingprice">selling price:</label><br>
  <input type="text" id="sellingprice" name="sellingprice"><br>
 
  
  <input type="submit" name = "update" value="Update ">
  <a href="showproduct.php">DISPLAY</a>
   
</form> 

</body>
</html>
