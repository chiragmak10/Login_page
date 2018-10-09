
<?php
$nam=$_POST['nam'];
$roll=$_POST['mob'];
$use=$_POST['use'];
$pass=$_POST['pass'];
$con=mysqli_connect("localhost","root","","reg") or die(mysqli_error());
$query = "insert into reg(name,mobile,username,password) values('".$nam."',".$roll.",'".$use."','".$pass."');";

if(mysqli_query($con,$query))
{    header("Location: index.html");

	#echo "Inserted successfully";
}
else{
	echo "Error while Inserting";
}

mysqli_close($con);
?>