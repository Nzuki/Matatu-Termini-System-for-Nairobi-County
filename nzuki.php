

<html>
<head>
	<title>my dish</title>
	<meta charset="utf-8">
</head>
<body>
<div class="register">
<h1>Login</h1>
<form action="#" method="POST">
DestinationName:
	<input type="text" name="dname"
	required="required"<p></p>
	StageLocation:
	<input type="text" name="slocation"
	required="required"/><br></br>
	RouteNumber:
	<input type="text"name="rnumber"
	required="required"><br></br>
	Onpeakfare:
	<input type="text"name="onpeakfare"
	required="required"><br></br>
	Offpeakfare:
	<input type="text"name="offpeakfare"
	required="required"><br></br>
	<button type="submit" class="btn btn-primary btn-block btn-large">Submit.</button>

</form>

</div>
<div class="submit">
	<form action="#" method="POST">

</div>
<?php 
include "connecting.php"
$dname = $_POST["DestinationName"];
$slocation = $_POST["StageLocation"];
$rnumber = $_POST["RouteNumber"];
$onpeak = $_POST["Onpeakfare"];
$offpeak=$_POST['Offpeakfare'];


//inseret sql
$sql="INSERT INTO  destination VALUES('','$dname','$slocation','$rnumber','$rnumber','$onpeak','$offpeak')";
$run=mysql_query($sql);
$newid=mysql_insert_id();
echo $newid;


?>

</body>
</html>