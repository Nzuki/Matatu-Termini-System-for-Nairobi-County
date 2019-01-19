<?php include ("connecting.php");?>
<?php
/* Create new record*/
if (isset ($_POST['create'])){
	$Destination_id = mysql_real_escape_string($_POST['Destination_id']);
	$DestinationName = /*prevent direct injections*/mysql_real_escape_string($_POST['DestinationName']);
	$StageLocation = mysql_real_escape_string($_POST['StageLocation']);
	$RouteNumber = mysql_real_escape_string($_POST['RouteNumber']);
	$Onpeakfare = mysql_real_escape_string($_POST['Onpeakfare']);
	$Offpeakfare = mysql_real_escape_string ($_POST['Offpeakfare']);
	$sql = "INSERT INTO destination VALUES( '' , '{$DestinationName}' , '{$StageLocation}', 
    '{$RouteNumber}','{$Onpeakfare}','{$Offpeakfare}')";
	
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
		    <p>Destination Id:</p>
			<p><input type="text" name="Destination_id" id="Destination_id"
			placeholder="Input destinationname.."required ="required "></p>
			
		    <p>Destination Name:</p>
			<p><input type="text" name="DestinationName" id="DestinationName"
			placeholder="Input destinationname.."required ="required "></p>
			
			<p>StageLocation:</p>
			<p><input type="text" name="StageLocation" id="StageLocation"
			placeholder="Input the StageLocation.."required ="required"></p>
			
			<p>RouteNumber:</p>
			<p><input type="text" name="RouteNumber" id="RouteNumber"
			placeholder="Input RouteNumber here..."required ="required"></p>
			
			<p>Onpeakfare:</p>
			<p><input type="text" name="Onpeakfare" id="Onpeakfare"
			placeholder="Input the Onpeak here..."required ="required"></p>
			<p>Offpeakfare:</p>
			<p><input type="text" name="Offpeakfare" id="Offpeakfare"
			placeholder="Input the Offpeak here..."required ="required"></p>
			<p><input type="submit" name="create" id="create" value=
			"Create new record" ></p>
		    </form>
	  </div>
</div>	
</body>




</html>