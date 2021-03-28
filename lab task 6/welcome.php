<?php
session_start();
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
	header("location:login.php");
	exit();
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>welcome - <?php echo $_SESSION['username']?></title>
	
</head>
<body>
	






<?php

include 'sidebar1.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	
</head>
<body>
	<legend align="center" style="font-size: 2.0em">welcome - <?php echo $_SESSION['username']?></legend>
	<!-- <?php print_r($_SESSION['cart'])?> -->
	<div class="container">
		<div class="row">
			<div class="col-lg-3" align="center">
				

  </div ><br>
  </form>
<?php include 'footer.php' ?>
</body>
</html>


</body>
</html>

