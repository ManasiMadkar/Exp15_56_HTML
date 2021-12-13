<?php
$servername="localhost";
$username="root";
$password="";
$database="dance";
$con = mysqli_connect($servername,$username,$password,$database);

if(isset($_POST['Submit']))
{
$tname = $_POST['tname'];
$gender = $_POST['gender'];
$tage = $_POST['tage'];
$tdan = $_POST['tdan'];
$temail = $_POST['temail'];
$tcon = $_POST['tcon'];

$sql = "INSERT INTO `applicants` (Name,Gender,Age,Danceform,Email,Contact) VALUES ('$tname', '$gender', '$tage', '$tdan', '$temail','$tcon')";

$rs = mysqli_query($con, $sql);
if($rs)
{
	echo "<script>alert('New record inserted successfully')</script>";
	echo "<script>window.open('Register.php'),'_self')</script>";
}
else
{
	echo "Are you a genuine visitor?";
	
}
mysqli_close($con);
}
?>