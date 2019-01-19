<?php
require 'connecting.php';

$query="SELECT * FROM `destination`";
if($is_query_run=mysql_query($query))
{
echo "query executed<br>";
while($query_execute=mysql_fetch_assoc($is_query_run))
{
	echo '<table border="1" style="width:300px"><tr><td>'.$query_execute['DestinationName'].'</td><td>'.$query_execute['StageLocation'].'</td><td>'.$query_execute['RouteNumber'].'</td><td>'.$query_execute['Onpeakfare'].'</td><td>'.$query_execute['Offpeakfare'].'</td></tr></table>';
    //echo $query_execute['DestinationName'].'<br>';	
}	
}
else
{
	echo "query not executed";
}



?>

