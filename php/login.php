<!doctype html>
<html>
<head>

<title>Login</title>
</head>

<body>


<form id="form1" name="form1" method="post" action="#">
<pre>
<label for="lbl1">username</label>   <input type="text" name="username" id="textfield1"><br/>
<label for="lbl2">Password</label>   <input type="password" name="password" id="textfield2"><br/>
       <input type="submit" value="login">
</pre>

</form>
</body>
</html>
<?php
session_start();
if(isset($_POST["username"]))
{
$user =$_POST["username"];
$pwd =$_POST["password"];
if($user=="admin" && $pwd=="admin")
{
	
	header("Location:welcome.php");
	$_SESSION['FINAL']=time();
	
	
}
}


?>