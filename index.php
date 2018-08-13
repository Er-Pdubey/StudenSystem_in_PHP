<!DOCTYPE html>
<html lang="en">
<head>
<title>WELCOME</title>

<style>
header{
	
	text-align: center;
	text-color: white;
	margin-top: 100px;
	
}




</style>
  
<head>
<body bgcolor="#80ced6">

<h2 align="right" style="margin-right:50px;"><a href="login.php">Login Admin </a></h2>
<h1><header>Student Management System </header></h1>
<form action="index.php" method="post">
<table align="center" style="width:50%">
<tr>
<td colspan="2"><label>Standard:</label>
<select name="sd">
  <option value="1">select standard</option>
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
  <option value="5">5</option>
  <option value="6">6</option>
  <option value="7">7</option>
  <option value="8">8</option>
  <option value="9">9</option>
  <option value="10">10</option>
  <option value="11">11</option>
  <option value="12">12</option>
</select>
</td>
<td><label>Enter ID</label>:<input type="text" name="name"></td>

<td><input type="submit" name="search" value="Search">

</tr>
</table>

</form>

</body>


</html>

<?php

if(isset($_POST['search']))
{

  include('dbcon.php');
  include('showfunction.php');
  $sd=$_POST['sd'];
  $name=$_POST['name'];

  
 show($sd,$name);

}




?>