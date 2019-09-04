
<?php

$use=$_POST['use']; // Name assinged to input field in HTML page
$pass=$_POST['pass'];// Name assinged to input field in HTML page
$con=mysqli_connect("localhost","root","","reg") or die(mysqli_error()); // Creation of Connection 
$query = "select * from reg where username='".$use."' and password='".$pass."';";
$result=mysqli_query($con,$query);
$resultCheck=mysqli_num_rows($result);
if($resultCheck>0)
{
	echo "<script type='text/javascript'>alert('login successfully');</script>";
		#echo "login successfully";

}
else{
	echo "<script type='text/javascript'>alert('login failed');</script>";
	#echo "login failed";
}

mysqli_close($con);
?>
