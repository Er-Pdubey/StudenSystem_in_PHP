<?php


 

function show($sd,$name)
{

	include('dbcon.php');
	$q="SELECT * FROM `student` WHERE name='$name' AND class='$sd'";
  $run=mysqli_query($con,$q);


  if(mysqli_num_rows($run)>0)
  {
  	$data=mysqli_fetch_assoc($run);


  	?>


 <table border="1" align="center" width="80%">
<tr>
<th colspan="3">Student Detail </th>

<tr>
	<td rowspan="5"><img src="dataimage/<?php echo $data['image']; ?>" style="max-width:120px; max-height: 350px;"/> </td>
<th>RollNo</th>
<td> <?php echo $data['rollno']; ?></td>
</tr>

<tr>
<th>Name</th>
<td> <?php echo $data['name']; ?></td>
</tr>

<tr>
<th>Class</th>
<td> <?php echo $data['class']; ?></td>
</tr>

<tr>
<th>city</th>
<td> <?php echo $data['city']; ?></td>
</tr>

<tr>
<th>Parents Contacts</th>
<td> <?php echo $data['pcontact']; ?></td>
</tr>


</tr>

</tr>

  </table>



  	<?php

  }
  else
  {
  	echo "<script> alert('not found');</script>";
 
  }
}


?>