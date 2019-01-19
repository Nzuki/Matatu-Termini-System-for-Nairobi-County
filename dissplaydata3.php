<?php
include "connecting.php";

$sql="SELECT * FROM `destination` WHERE DestinationName='Umoja I/II/Umoja Innercore'";

$query = mysql_query($sql) or die(mysql_error());




?>
<table width="70%" cellpadding="5" cellspace="">
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