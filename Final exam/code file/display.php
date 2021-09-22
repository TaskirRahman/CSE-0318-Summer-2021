<?php 
$con=mysqli_connect("localhost","root","","reg");  
$query="select * from user"; 
$result=mysqli_query($con,$query); 
?> 
<!DOCTYPE html> 
<html> 
	<head> 
		<title> submitted registration database  </title> 
		<link rel="stylesheet" href="cstyle.css">
	</head> 
	<body> 
	<table border="3" width="100%" bgcolor="yellow" height="8%">
	  <tr>
	  <th width+"20%"><font color+"white" size="4"><a href="sub.html">STATE UNIVERSITY OF BANGLADESH</a></th>
	  <th width+"20%"><font color+"white" size="4"><a href="hpage.html">HOME</a></front></th>
	  <th width+"20%"><font color+"white" size="4"><a href="about.html">ABOUT US</a></front></th>
	  <th width+"20%"><font color+"white" size="4"><a href="slogin.php">STUDENT LOGIN</a></front></th>
	  <th width+"20%"><font color+"white" size="4"><a href="alogin.php">ADVISOR LOGIN</a></front></th>
	  <th width+"20%"><font color+"white" size="4"><a href="contact.html">CONTACT US</a></front></th>
       </tr>
</table>
	<table align="center" border="1px" style="width:600px; line-height:40px;"> 
	<tr> 
		<th colspan="4"><h2>Registered Form List</h2></th> 
		</tr> 
			  <th> id </th> 
			  <th> name </th> 
			  <th> gname </th> 
			  <th> cnumber </th>
			  <th> scnumber </th> 
			  <th> gender </th> 
			  <th> other </th> 
			  <th> email </th> 
			  <th> bankid </th> 
			  <th> bikashid </th> 
			  <th> campus </th> 
			  <th> tdate </th> 
			  <th> totalc </th> 
			  <th> cc1 </th> 
			  <th> ct1 </th> 
			  <th> cd1 </th> 
			  
		</tr> 
		
		<?php while($rows=mysqli_fetch_assoc($result)) 
		{ 
		?> 
		<tr> <td><?php echo $rows['id']; ?></td> 
		<td><?php echo $rows['name']; ?></td> 
		<td><?php echo $rows['gname']; ?></td> 
		<td><?php echo $rows['cnumber']; ?></td> 
		<td><?php echo $rows['scnumber']; ?></td> 
		<td><?php echo $rows['gender']; ?></td> 
		<td><?php echo $rows['other']; ?></td>
		<td><?php echo $rows['email']; ?></td> 
		<td><?php echo $rows['bankid']; ?></td> 
		<td><?php echo $rows['bikashid']; ?></td>
		<td><?php echo $rows['campus']; ?></td> 
		<td><?php echo $rows['tdate']; ?></td> 
		<td><?php echo $rows['totalc']; ?></td>
		<td><?php echo $rows['cc1']; ?></td> 
		<td><?php echo $rows['ct1']; ?></td> 
		<td><?php echo $rows['cd1']; ?></td>
		</tr> 
	<?php 
               } 
          ?> 

	</table> 
	</body> 
	</html>