<?php include ("connecting.php");?>
<?php
/* Create new record*/
if (isset ($_POST['create'])){
	$Stage_id = mysql_real_escape_string($_POST['Stage_id']);
	$StageLocation = mysql_real_escape_string($_POST['StageLocation']);
	$DestinationName = mysql_real_escape_string($_POST['DestinationName']);
	$SaccoName = mysql_real_escape_string($_POST['SaccoName']);
	$StageName= mysql_real_escape_string ($_POST['StageName']);
	$sql = "INSERT INTO stage VALUES( '{$Stage_id}' , '{$StageLocation}' , '{$DestinationName}', 
    '{$SaccoName}','{$StageName}')";
	
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
			
		    <p>Stage id:</p>
			<p><input type="text" name="Stage_id" id="Stage_id"
			placeholder="Input Stage Id.. "required ="required"></p>
			
			  <p>Stage Location:</p>
			<p><input type="text" name="StageLocation" id="StageLocation"
			placeholder="Input Stage Location.."required ="required "></p>
			
			<p>DestinationName:</p>
			<p><input type="text" name="DestinationName" id="DestinationName"
			placeholder="Input DestinationName..."required ="required"></p>
			
		    <p>SaccoName:</p>
			<p><input type="text" name="SaccoName" id="SaccoName"
			placeholder="Input SaccoName.. "required ="required"></p>
			
				<p>Stage Name:</p>
			<p><input type="text" name="StageName" id="StageName"
			placeholder="Input the Stage Name here..."required ="required"></p>
		
			<p><input type="submit" name="create" id="create" value=
			"Create new record"></p>
		    </form>
	  </div>
</div>	
</body>




</html>