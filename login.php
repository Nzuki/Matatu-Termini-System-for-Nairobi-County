<?php
include "user.php";

if(isset($_POST['submit'])){
	$user=$_POST['user'];
	$pass=$_POST['pass'];
	$object=new User();
	$object->login($user,$pass);
}

?>
<html>
<head>
<title>log in</title>
	<style>
#header {
    background-color:black;
    color:white;
    text-align:center;
    padding:5px;
	border-radius:22px;
}
body {
    background-color: pink;
}

</style>
</head>
<body>
  <div id="header">
   <h1>Matatu Termini System</br>Login Platform
   </h1>
   </div>
<table>
<form action="#" method="post">
<center></br>Username:<input type="text" name="user" required /><br /><br />
Password:<input type="password" name="pass" /><br /><br />
<input type="submit" name="submit" value="login"/></center>
</form>
</table>

<!This is the button to go back to the home page>
<form name="home page" method="POST" action="index.php">
<input type="submit" name="home" value="Home" />
</form>

 <img src="avatar.jpg" alt="Matatu Image" style="width:304px;height:228px;">
    <img src="sumu.jpg" alt="Matatu Image" style="width:304px;height:228px;">
    <img src="ciroc.jpg" alt="Matatu Image" style="width:304px;height:228px;">
        <img src="brainchild.jpg" alt="Matatu Image" style="width:380px;height:228px;">
		<center><img src="nairobi.jpg" alt="Matatu Image" style="width:380px;height:228px;"></center>
     <center><section class="about">
    <p class="about-links"></p>
    <p class="about-author">
      &copy; 2016 <a >Termini Location System</a>
      <a target"_blank">BBIT</a><br>
      System by Emmanuel
  </section></center>
</body>




</html>