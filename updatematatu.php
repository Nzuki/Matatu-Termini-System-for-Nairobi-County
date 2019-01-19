<?php include ("connecting.php");?>
<?php
/* Create new record*/
if (isset ($_POST['create'])){
	$RegNumber = mysql_real_escape_string($_POST['RegNumber']);
	$StageLocation = mysql_real_escape_string($_POST['StageLocation']);
	$SaccoName = mysql_real_escape_string($_POST['SaccoName']);
	$RouteNumber = mysql_real_escape_string($_POST['RouteNumber']);
	$DestinationName = mysql_real_escape_string($_POST['DestinationName']);
	$MatatuName = mysql_real_escape_string ($_POST['MatatuName']);
	$sql = "INSERT INTO matatu VALUES( '{$RegNumber}' , '{$StageLocation}' , '{$SaccoName}', 
    '{$RouteNumber}','{$DestinationName}','{$MatatuName}')";
	
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
		    <p>Regitration Number:</p>
			<p><input type="text" name="RegNumber" id="RegNumber"
			placeholder="Input Registration Number.."required ="required "></p>
			
		    <p>StageLocation:</p>
			<p><input type="text" name="StageLocation" id="StageLocation"
			placeholder="Input StageLocation.. "required ="required"></p>
			
			<p>SaccoName:</p>
			<p><input type="text" name="SaccoName" id="SaccoName"
			placeholder="Input the SaccoName.."required ="required"></p>
			
			<p>RouteNumber:</p>
			<p><input type="text" name="RouteNumber" id="RouteNumber"
			placeholder="Input RouteNumber here..."required ="required"></p>
			
			<p>DestinationName:</p>
			<p><input type="text" name="DestinationName" id="DestinationName"
			placeholder="Input DestinationName..."required ="required"></p>
			<p>MatatuName:</p>
			<p><input type="text" name="MatatuName" id="MatatuName"
			placeholder="Input the MatatuName here..."required ="required"></p>
			<p><input type="submit" name="create" id="create" value=
			"Create new record"></p>
		    </form>
	  </div>
</div>	
</body>




</html>