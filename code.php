
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
<tr><h2>Matatuowner Table<h2></tr>
<tr><form name"updatetable" method="POST" action="updatedestination.php">
Update:<input type="submit" name="update" value="Update the table"/>
</form>
</tr>
<tr>
    <td><strong>UserName</strong></td>
	<td><strong>password</strong></td>
	<td><strong>user_id</strong></td>
	<td><strong>first_name</strong></td>
	<td><strong>last_name</strong></td>
	<td><strong>RegNumber</strong></td>
</tr>
<?php while ($row = mysql_fetch_array($query)){?>
	
<tr>
<td><?php echo $row['name']?></td>
	<td><?php echo $row['pass']?></td>
	<td><?php echo $row['user_id']?></td>
	<td><?php echo $row['first_name']?></td>
	<td><?php echo $row['last_name']?></td>
	<td><?php echo $row['RegNumber']?></td>
</tr>
<?php }	?>
		
</table>
