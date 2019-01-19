<?php include ("connecting.php");?>
<?php
/* Create new record*/
if (isset ($_POST['create'])){
	$name = mysql_real_escape_string($_POST['name']);
	$pass = mysql_real_escape_string($_POST['pass']);
	
	$sql = "INSERT INTO stage login( '{$name}' , '{$pass}')";
	
	$query = mysql_query($sql) or die(mysql_error());
	
	include ("addition_success.php");
	die();
}

?>
<html>
<head>
<title>admin update</title>
	<style>

body {
    background-color: pink;
}

</style>
</head>
<body>
<div class="container">
     <div class="content">
	     <h1>Updating</h1>
		</div>
</div>	

<div class="container">
     <div class="content">	
            <h2>Create new record form</h2>
		    <form method="post" name="frmAdd">
			
		    <p>User Name:</p>
			<p><input type="text" name="name" id="name"
			placeholder="Input User Name.."required ="required "></p>
			
			  <p>Password:</p>
			<p><input type="text" name="pass" id="pass"
			placeholder="Input Password.."required ="required "></p>
		
			<p><input type="submit" name="create" id="create" value=
			"Create new record"></p>
		    </form>
	  </div>
</div>	
</body>




</html>