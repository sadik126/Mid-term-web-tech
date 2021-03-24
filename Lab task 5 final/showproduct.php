<?php
 $con=mysqli_connect("localhost","root","","product_db");

 $sql = "SELECT * FROM `products`";
 $result=mysqli_query($con,$sql);

 $num=mysqli_num_rows($result);
 echo $num;
 echo " products are here <br>";

 while($row = mysqli_fetch_assoc($result)){

 	echo $row['id'].".mobile :".$row['name'] .  ".        profit = " .$row['profit'];
 	echo"<a href=editproduct.php>EDIT</a> || <a href=deleteproduct.php>DELETE</a><br>";
 }


?>