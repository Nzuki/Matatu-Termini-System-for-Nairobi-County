<?php

include "connecting.php";

$sql="SELECT * FROM `destination` ";

if (isset($_POST['search']))
{
	$search_term =mysql_real_escape_string ($_POST['search_box']);
	$sql .= "WHERE DestinationName= '{$search_term}'";
	
}
$query = mysql_query($sql) or die(mysql_error());




?>
<style>

body {
    background-color: pink;
}
</style>
<form name="search_form" method="POST" action="searchdestable.php">
Search:<input type="text" name="search_box" value=""/>
<input type="submit" name="search" value="Search the table..."/>
</form>

<center><form name="search_form" method="POST" action="login.php">
<input type="submit" name="search" value="Log Out" />
</form></center>

<table width="70%" cellpadding="5" cellspace="">
<tr><h2>Destination Table<h2></tr>
<tr><form name"updatetable" method="POST" action="updatedestination.php">
Update:<input type="submit" name="update" value="Update the table"/>
</form>
</tr>
<tr>
    <td><strong>Destination Name</strong></td>
	<td><strong>Stage Location</strong></td>
	<td><strong>Route Number</strong></td>
	<td><strong>On-peak fare</strong></td>
	<td><strong>Off-peak fare</strong></td>
</tr>
<?php while ($row = mysql_fetch_array($query)){?>
	
<tr>
<td><?php echo $row['DestinationName']?></td>
	<td><?php echo $row['StageLocation']?></td>
	<td><?php echo $row['RouteNumber']?></td>
	<td><?php echo $row['Onpeakfare']?></td>
	<td><?php echo $row['Offpeakfare']?></td>
</tr>
<?php }	?>
		
</table>



</br></br></br>
<?php
include "connecting.php";

$sql="SELECT * FROM `matatu` ";

if (isset($_POST['search']))
{
	$search_term =mysql_real_escape_string ($_POST['search_box']);
	$sql .= "WHERE DestinationName= '{$search_term}'";	
}
$query = mysql_query($sql) or die(mysql_error());
?>
<table width="70%" cellpadding="5" cellspace="">
<tr><h2>Matatu Table<h2></tr>
<tr><form name="updatetable" method="POST" action="updatematatu.php">
Update:<input type="submit" name="update" value="Update the table"/>
</form>
</tr>
<tr>
    <td><strong>Registration Number</strong></td>
	<td><strong>Stage Location</strong></td>
	<td><strong>SaccoName</strong></td>
	<td><strong>RouteNumber</strong></td>
	<td><strong>DestinationName</strong></td>
	<td><strong>MatatuName</strong></td>
	
</tr>
<?php while ($row = mysql_fetch_array($query)){?>
	
<tr>
<td><?php echo $row['RegNumber']?></td>
	<td><?php echo $row['StageLocation']?></td>
	<td><?php echo $row['SaccoName']?></td>
	<td><?php echo $row['RouteNumber']?></td>
	<td><?php echo $row['DestinationName']?></td>
	<td><?php echo $row['MatatuName']?></td>
	
</tr>
<?php }	?>
		
</table>




</br></br>
<?php
include "connecting.php";

$sql="SELECT * FROM `sacco` ";
if (isset($_POST['search']))
{
	$search_term =mysql_real_escape_string ($_POST['search_box']);
	$sql .= "WHERE DestinationName= '{$search_term}'";
	
}
$query = mysql_query($sql) or die(mysql_error());

?>
<table width="70%" cellpadding="5" cellspace="">
<tr><h2>Sacco Table<h2></tr>
<tr><form name"updatetable" method="POST" action="updatesacco.php">
Update:<input type="submit" name="update" value="Update the table"/>
</form>
</tr>
<tr>
    <td><strong>Sacco_id</strong></td>
	<td><strong>Sacco_Name</strong></td>
	<td><strong>Stage_Location</strong></td>
	<td><strong>DestinationName</strong></td>
	<td><strong>Route_Number</strong></td>
</tr>
<?php while ($row = mysql_fetch_array($query)){?>
	
<tr>
<td><?php echo $row['Sacco_ID']?></td>
	<td><?php echo $row['Sacco_Name']?></td>
	<td><?php echo $row['StageLocation']?></td>
	<td><?php echo $row['DestinationName']?></td>
	<td><?php echo $row['Route_Number']?></td>
</tr>
<?php }	?>
		
</table>


</br></br>
<?php
include "connecting.php";

$sql="SELECT * FROM `stage` ";

if (isset($_POST['search']))
{
	$search_term =mysql_real_escape_string ($_POST['search_box']);
	$sql .= "WHERE DestinationName= '{$search_term}'";
	
}
$query = mysql_query($sql) or die(mysql_error());
?>
<table width="70%" cellpadding="5" cellspace="">
<tr><h2>Stage Table<h2></tr>
<tr><form name"updatetable" method="POST" action="updatestage.php">
Update:<input type="submit" name="update" value="Update the table"/>
</form>
</tr>
<tr>
     <td><strong>Sacco_id</strong></td>
	<td><strong>Sacco_Name</strong></td>
	<td><strong>Stage_Location</strong></td>
	<td><strong>DestinationName</strong></td>
	<td><strong>Route_Number</strong></td>
</tr>
<?php while ($row = mysql_fetch_array($query)){?>
	
<tr>
<td><?php echo $row['Stage_id']?></td>
	<td><?php echo $row['StageName']?></td>
	<td><?php echo $row['StageLocation']?></td>
	<td><?php echo $row['DestinationName']?></td>
	<td><?php echo $row['Route_Number']?></td>
</tr>
<?php }	?>
		
</table>


</br></br>
<?php
include "connecting.php";

$sql="SELECT * FROM `login` ";


if (isset($_POST['search']))
{
	$search_term =mysql_real_escape_string ($_POST['search_box']);
	$sql .= "WHERE DestinationName= '{$search_term}'";
	
}


$query = mysql_query($sql) or die(mysql_error());




?>
<table width="70%" cellpadding="5" cellspace="">
<tr><h2>Login Table<h2></tr>
<tr><form name"updatetable" method="POST" action="updatelogin.php">
Update:<input type="submit" name="update" value="Update the table"/>
</form>
</tr>
<tr>
    <td><strong>UserName</strong></td>
	<td><strong>Password</strong></td>
	
</tr>
<?php while ($row = mysql_fetch_array($query)){?>
	
<tr>
    <td><?php echo $row['name']?></td>
	<td><?php echo $row['pass']?></td>
	
	
</tr>
<?php }	?>
	
</table>


</br></br>
<?php
include "connecting.php";

$sql="SELECT * FROM `matatuowner` ";


if (isset($_POST['search']))
{
	$search_term =mysql_real_escape_string ($_POST['search_box']);
	$sql .= "WHERE DestinationName= '{$search_term}'";
	
}


$query = mysql_query($sql) or die(mysql_error());




?>
<table width="70%" cellpadding="5" cellspace="">
<tr><h2>MatatuOwner Table<h2></tr>
<tr><form name="updatetable" method="POST" action="updatelogin.php">
Update:<input type="submit" name="update" value="Update the table"/>
</form>
</tr>
<tr>
    <td><strong>UserName</strong></td>
	<td><strong>Password</strong></td>
	<td><strong>Car Registration Number</strong></td>
	<td><strong>UserId</strong></td>
	
</tr>
<?php while ($row = mysql_fetch_array($query)){?>
	
<tr>
    <td><?php echo $row['name']?></td>
	<td><?php echo $row['pass']?></td>
		<td><?php echo $row['RegNumber']?></td>
		<td><?php echo $row['userId']?></td>
	
</tr>
<?php }	?>
	
</table>



