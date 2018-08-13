<?php
session_start();
if(isset($_SESSION['uid']))
{
	header('location:admin/dashboard.php');
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
<title>Admin Login</title>
</head>
<body bgcolor="#80ced6">
<form action="login.php" method="post">
<table align="center" style="margin-top:180px;  border: 1px solid black;">

<th ><h1 align="right">Admin Login</h1></th>
<tr><td>UserId</td><td><input type="text" name="id"></td></tr>
<tr><td>Password</td><td><input type="text" name="pass"></td></tr>
<tr><td  align="right"><input type="submit" name="submit" value="Login"></td></tr>

</table>
</form>
</body>
</html>




<?php
include('dbcon.php');
if(isset($_POST['submit']))
{
	$uname=$_POST['id'];
	$pass=$_POST['pass'];
	$query="SELECT * FROM `admin` WHERE uname='$uname' AND password='$pass'";
	$run=mysqli_query($con,$query);
	$row=mysqli_num_rows($run);
	if($row<1)
	{
		?>
		
		
		<script>
		alert('plese enter right username and password');
		window.open('login.php','_self');
		</script>
		
<?php				
}
else
{
	$data=mysqli_fetch_assoc($run);
	$id=$data['id'];
	//echo "id is ".$id;
	session_start();
	$_SESSION['uid']=$id;
	header('location:admin/dashboard.php');
}
}

?>