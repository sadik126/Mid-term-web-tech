<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
    <form action="" method="POST">
    	<input type="text" name="name" placeholder="search here">
    	<input type="submit" name="search" value="search">
    </form>
</body>
</html>
<?php
 $con=mysqli_connect("localhost","root","","product_db");

 if(isset($_POST['search']))
 {
 $name=$_POST['name'];
 
	
 $sql = "SELECT * FROM `products` where `name`='$name'  ";
 $result=mysqli_query($con,$sql);

 

 while($row = mysqli_fetch_array($result))
 {
   ?>
   <form action="" method="POST">
  <label for="name">Name:</label><br>
  <input type="text" id="name" name="name" value="<?php echo $row['name'] ?>"><br>
  <input type="text" name="buyingprice" value="<?php echo $row['buyingprice'] ?>"/><br>
  <input type="text" name="sellingprice" value="<?php echo $row['sellingprice'] ?>"/><br>
  </form>
  <?php
   
 }

}
 ?>