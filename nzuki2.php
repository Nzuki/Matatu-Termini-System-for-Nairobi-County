

<html>
<head>
	<title>my dish</title>
	<meta charset="utf-8">
</head>
<body>
<div class="login">
<h1>Login</h1>
<form action="mike2.php" method="POST">
	<input type="text" name="named"placeholder="username"
	required="required"/>
	<p><input type="password" name="passed" placeholder="password"
	required="required"/></p>
	
	<button type="submit" class="btn btn-primary btn-block btn-large">Sign In.</button>

</form>

<?php 
require_once('connection.php');

$uname=$_POST['named'];
$pass=$_POST['passed'];

$sql="SELECT * FROM login WHERE 'name'='$uname'";
$run=mysql_query($sql);
$rows=mysql_num_rows($run);
if($rows!=0)
{
	while($resul=mysql_fetch_assoc($run)){
		$dbpass=$result['password'];
	}
	if($dbpass=$pass){
		header('http://localhost/project/searchdestable.php');
		
	}else{
		echo"Wrong password";
	}
	
}
else{
	"invalid input";
}
?>

</body>
</html>