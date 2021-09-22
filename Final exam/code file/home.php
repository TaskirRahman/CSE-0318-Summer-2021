<htmal>
<head><title>registration</title></head>
<center><body text="">
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
<h2><div class ="logo"><a href ="#"><img src ="kkk.jpg"></a>STATE UNIVERSITY OF BANGLADESH</h2>
<center>
<p>Department of Computer Science & Engineering</p>
<p>B. Sc. in CSE</p>
<p>Registration Form Summer 2021</p>
<p>___________________________________________________________________________________________________________________________________________________________________
</p>
<form action="home.php" method="POST" >
<table border="2" bordercolor='' cellspacing="0" width="100%">
<tr>    <td>Student's ID Number:</td>
	     <td><input type="text" name="id"></td>
</tr>
<tr>    <td>Student's Name:</td>
	     <td><input type="text" name="name"></td>
</tr>
<tr>    <td>Guardian’s name:</td>
	     <td><input type="text" name="gname"></td>
</tr>
<tr>    <td>Guardian’s Contact Number:</td>
	     <td><input type="int" name="cnumber"></td>
		 <td>Student’s Contact Number:</td>
	     <td><input type="int" name="scnumber"></td>
</tr>
<tr>    <td>Relationship with the guardian:</td>
	     <td><select name="gender">
		 <option value=""> --Select--</option>
		 <option value="Male"> Father </option>
		 <option value="Female"> Mother </option>
		 </select></td>
		<td>Other (Specify):</td>
	     <td><input type="text" name="other"></td>		
</tr>
<tr>    <td>Email Id:</td><br>
	     <td><input type="text" name="email"></td><br>		
</tr>
</table>
</p>
<table border="2" bordercolor='' cellspacing="0" width="100%">
<tr>    <td>First installment (5000 Tk) payment Info:</td>
</tr>
<tr>    <td>Bank Transaction ID:</td>
	     <td><input type="text" name="bankid"></td>
</tr>
<tr> 		<td>bKash Transaction ID:</td>
	     <td><input type="int" name="bikashid"></td>
</tr>
<tr>    <td>At Campus:</td>
	     <td><input type="text" name="campus"></td>
</tr>
<tr> 		<td>Transaction Date:</td>
	     <td><input type="date" name="tdate"></td>
</tr>
<tr>    <td>NB: In case of direct payment in SUB attach the scan copy of money receipt with the registration form.</td>
</tr>
</table>
</p>
<p>Total credit completed:<td><input type="float" name="totalc"></td>
</p>
<table border="2" bordercolor='' cellspacing="0" width="100%">
<tr>    <td>Course’s to be taken:</td>
</tr>
<tr>    <td>Course Code</td>
		<td>Course Title</td>
		<td>Course Cradit</td>
</tr>
<tr>	<td><input type="text" name="cc1">
		<td><input type="text" name="ct1"></td>
		<td><input type="text" name="cd1"></td>
		</tr>
</table>
<center><tr>	<td colspan="5" align="center"> <input type="submit" name="submit" value="submit"></td> </tr>
</form>
</body></center>
</htmal>


<?php
//*error_reporting(0);
$link = mysqli_connect("localhost","root","","reg")or die (mysql_error());
if(isset($_POST['submit']))
{
	 $num = $_POST['id'];
	 $name = $_POST['name'];
	 $garname = $_POST['gname'];
	 $cnum = $_POST['cnumber'];
	 $snum = $_POST['scnumber'];
	 $relation = $_POST['gender'];
	 $ospecify = $_POST['other'];
	 $emailid = $_POST['email'];	 
	 $banki = $_POST['bankid'];
	 $bikid = $_POST['bikashid'];
	 $camp = $_POST['campus'];
	 $date = $_POST['tdate'];
	 $total = $_POST['totalc'];	 
	 $ccode = $_POST['cc1'];
	 $ctitle = $_POST['ct1'];
	 $ccradit = $_POST['cd1'];	 
	$query="insert into user (id,name,gname,cnumber,scnumber,gender,other,email,bankid,bikashid,campus,tdate,totalc,cc1,ct1,cd1)
	values('$num','$name','$garname','$cnum','$snum','$relation','$ospecify','$emailid','$banki','$bikid','$camp','$date','$total','$ccode','$ctitle','$ccradit')";
	if(mysqli_query($link,$query)){
		echo "<h5>It's nice to hear from you. I have received and processed your form.

Stay blessed and stay safe.you have registered successfully!!</h5>";
	}
}
?>

