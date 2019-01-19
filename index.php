<?php

include_once('connect.php');

?>
<?php

include "connecting.php";

$sql="SELECT * FROM `Login` ";

if (isset($_POST['search']))
{
	$search_term =mysql_real_escape_string ($_POST['search_box']);
	$sql .= "WHERE DestinationName= '{$search_term}'";
	
}
$query = mysql_query($sql) or die(mysql_error());

?>
<!DOCTYPE html>
<html lang="en">
    <head>
	<style>
#header {
    background-color:black;
    color:white;
    text-align:center;
    padding:5px;
}
#footer {
    background-color:black;
    color:white;
    clear:both;
    text-align:center;
   padding:5px;	 	 
}
</style>
        <meta charset="utf-8" />
        <meta name="author" content="Destinations" />
        <title>Termini Location</title>
        <link href="css/main.css" rel="stylesheet" type="text/css" />
    </head>
    <body>	
   <div id="header">
   <h1>Matatu Termini System</h1>
   </div>
   
        <div class="container" id="main" role="main">
            <ul class="menu">
                <li><a href="http://localhost/project/login.php">Login</a></li>
             
				 <li><a href="#s1">Pick your Destination(termini details)</a>
                    <ul class="submenu">
                        <li><a href="http://localhost/project/displaydata.php">Komarock Estate</a></li>
                        <li><a href="http://localhost/project/displaydata2.php">Buruburu Estate</a></li>
                        <li><a href="http://localhost/project/displaydata4.php">Embakasi</a></li>
                        <li><a href="http://localhost/project/displaydata3.php">Umoja</a></li>
						<li><a href="http://localhost/project/displaydata5.php">Donholm Estate</a></li>                        
                    </ul>
                </li>
				
				 <li><a href="#s2">Pick your Destination(map)</a>
                    <ul class="submenu">
                        <li><a href="https://www.google.co.ke/maps/dir/Faham+Enterprises,+Mfangano+St,+Nairobi+City,+Kenya/-1.2858814,36.8276042/-1.3102071,36.8131647/@-1.287205,36.8273375,17z/data=!4m15!4m14!1m5!1m1!1s0x182f112882ab3a65:0x5e988b51e0b548f4!2m2!1d36.8283911!2d-1.287287!1m5!3m4!1m2!1d36.8265956!2d-1.3008083!3s0x182f111da08dbe4f:0xacf40a6f36ad1932!1m0!3e2?hl=en">Komarock Estate Termini1</a></li>
                        <li><a href="https://www.google.co.ke/maps/dir/-1.3099872,36.8127785/Moi+Ave,+Nairobi/@-1.290711,36.8235091,16z/data=!4m8!4m7!1m0!1m5!1m1!1s0x182f11283088f0cb:0x52a836bf57ba637c!2m2!1d36.8259154!2d-1.2859077?hl=en">Komarock Estate termini 2(Ambassadeur)</a></li>
                        <li><a href="https://www.google.co.ke/maps/dir/-1.3106736,36.8131218/buruburu+bus+station,+Accra+Rd,+Nairobi/@-1.2863295,36.827212,16z/data=!4m8!4m7!1m0!1m5!1m1!1s0x182f1129ea08d3d1:0x349d40c269eb2b91!2m2!1d36.8260941!2d-1.284413?hl=en">Buruburu Termini 1(Accra road)</a></li>
						<li><a href="https://www.google.co.ke/maps/dir/-1.3099872,36.8127785/Moi+Ave,+Nairobi/@-1.290711,36.8235091,16z/data=!4m8!4m7!1m0!1m5!1m1!1s0x182f11283088f0cb:0x52a836bf57ba637c!2m2!1d36.8259154!2d-1.2859077?hl=en">Buruburu Termini 2(Ambassadeur)</a></li>
                        <li><a href="https://www.google.co.ke/maps/dir/-1.3098156,36.8129501/Ronald+Ngala+St,+Nairobi/@-1.3102446,36.8131218,13z/data=!4m8!4m7!1m0!1m5!1m1!1s0x182f1128fc1b7c53:0x906e2e228a1e603b!2m2!1d36.8281239!2d-1.285597?hl=en">Umoja Termini</a></li>
						<li><a href="https://www.google.co.ke/maps/dir/-1.3099872,36.8127785/Moi+Ave,+Nairobi/@-1.290711,36.8235091,16z/data=!4m8!4m7!1m0!1m5!1m1!1s0x182f11283088f0cb:0x52a836bf57ba637c!2m2!1d36.8259154!2d-1.2859077?hl=en">Donholm Estate</a></li>
						<li><a href="https://www.google.co.ke/maps/dir/-1.3099872,36.8127785/Moi+Ave,+Nairobi/@-1.290711,36.8235091,16z/data=!4m8!4m7!1m0!1m5!1m1!1s0x182f11283088f0cb:0x52a836bf57ba637c!2m2!1d36.8259154!2d-1.2859077?hl=en">Embakasi Estate Termini 2(Ambassadeur)</a><li>
						<li><a href="https://www.google.co.ke/maps/dir/-1.3103296,36.8136467/Accra+Rd,+Nairobi/@-1.2839863,36.7894425,13z/data=!4m8!4m7!1m0!1m5!1m1!1s0x182f11299347cf0b:0x76b57d46e148de9b!2m2!1d36.8263506!2d-1.2840724?hl=en">Embakasi Termini</a></li>
						<li><a href="https://www.google.co.ke/maps/dir/-1.3099872,36.8127785/Moi+Ave,+Nairobi/@-1.290711,36.8235091,16z/data=!4m8!4m7!1m0!1m5!1m1!1s0x182f11283088f0cb:0x52a836bf57ba637c!2m2!1d36.8259154!2d-1.2859077?hl=en">Embakasi Termini 2(Ambassadeur) </a></li>						
                    </ul>
                </li>
				
           </div>
	
  </section>
  <center><img src="juiced.jpg" alt="Matatu Image" style="width:380px;height:228px;"></center>
  
</br></br> </br> </br> </br> </br></br> </br> </br> </br> </br> </br>

 <form name="search_form" method="POST" action="view.php">
Search:<input type="text" name="search_box" value=""/>
<input type="submit" name="search" value="Input Your Destination"/>

</form></br> </br> </br>  </br> </br> </br> </br> </br> </br> </br> </br> </br> </br> </br> </br> </br> </br> </br> </br> </br> </br></br> </br> </br> </br> </br>  

<div id="footer">
BBIT</br>
System by Emmanuel</br> 
2016
</div>
    </body>
</html>