<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>advisor
	Login</title>
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
<form class="box" action="" method="POST">
  <h1>Advisor Login</h1>
  <input type="text" name="email" placeholder="E-mail" class="form-control">
  <input type="password" name="password" placeholder="Password" class="form-control">
  <input type="submit" name="Login" value="Login" class="btn btn-primary w-100">
</form>
</form>

  </body>
</html>
<?php 
$connection =mysqli_connect("localhost","root",""); 
$db=mysqli_select_db($connection,'test');


if(isset($_POST['Login'])){
    
    $uemail=$_POST['email'];
    $password=$_POST['password'];
    
    $query="select * from loginform where email='$uemail'AND Password='$password' ";
	
    $query_run =mysqli_query($connection,$query);
    
    if(mysqli_fetch_array($query_run)>0)
	{
        echo '<script type = :"text/javascript"> alert("logged In") </script>';
        header('Location:display.php');
    }
    else{
        echo '<script type = :"text/javascript"> alert("logged In Failed") </script>';
    }
        
}
?>