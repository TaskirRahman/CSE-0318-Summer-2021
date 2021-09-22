<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Student Login Form</title>
    <link rel="stylesheet" href="style.css">
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
<form class="box" action="choose.html" method="post">
  <h1>Student Login</h1>
  <input type="text" name="" placeholder="userid(EX:UG02-48-18-007)" pattern="[a-zA-z0-9-]+[0-9-]+[0-9-]+[0-9]+" 
  title="Must contain this sequence userid(EX:UG02-48-18-007)" required >
  <input type="password" name="" placeholder="Password" required>
  
  <input type="submit" name="" value="Login">
</form>


  </body>
</html>
