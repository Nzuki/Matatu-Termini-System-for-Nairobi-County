<?php include ("connecting.php");?>
<?php
/* Create new record*/
if (isset ($_POST['create'])){
	$Sacco_id = mysql_real_escape_string($_POST['Sacco_id']);
	$Sacco_Name = mysql_real_escape_string($_POST['Sacco_Name']);
	$Stage_Location = mysql_real_escape_string($_POST['Stage_Location']);
	$DestinationName = mysql_real_escape_string($_POST['DestinationName']);
	$Route_Number= mysql_real_escape_string ($_POST['Route_Number']);
	$sql = "INSERT INTO sacco VALUES( '{$Sacco_id}' , '{$Sacco_Name}' , '{$Stage_Location}', 
    '{$DestinationName}','{$Route_Number}')";
	
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
		    <p>Sacco id:</p>
			<p><input type="text" name="Sacco_id" id="Sacco_id"
			placeholder="Input SaccoId.. "required ="required"></p>
			
			  <p>Sacco Name:</p>
			<p><input type="text" name="Sacco_Name" id="Sacco_Name"
			placeholder="Input SaccoName.."required ="required "></p>
			
			
		    <p>StageLocation:</p>
			<p><input type="text" name="Stage_Location" id="Stage_Location"
			placeholder="Input StageLocation.. "required ="required"></p>
			
			<p>DestinationName:</p>
			<p><input type="text" name="DestinationName" id="DestinationName"
			placeholder="Input DestinationName..."required ="required"></p>
				<p>RouteNumber:</p>
			<p><input type="text" name="Route_Number" id="Route_Number"
			placeholder="Input the RouteNumber here..."required ="required"></p>
		
			<p><input type="submit" name="create" id="create" value=
			"Create new record"></p>
		    </form>
	  </div>
</div>	
</body>




</html>