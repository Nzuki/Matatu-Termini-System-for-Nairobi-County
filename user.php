<?php


include "connection.php";

class User{
	
	private $db;
	public function __construct(){
	
	$this->db=new Connection();
	$this->db=$this->db->dbConnect();
}

public function Login($name,$pass){
	$st=$this->db->prepare("select *from login where name=? and pass=?");
	
	
	$st->bindParam(1,$name);
	$st->bindParam(2,$pass);
	$st->execute();
	
	if($st->rowCount()==1){
		
		header('Location:searchdestable.php');
		
	}
	
	else {
		

	$st=$this->db->prepare("select *from matatuowner where name=? and pass=?");
	
	
	$st->bindParam(1,$name);
	$st->bindParam(2,$pass);
	$st->execute();
	
	if($st->rowCount()==1){
		
		header('Location:userlogin.php');
	}
	
	else{
		echo "Incorrect UserName or Password";
	
}	
	}
}
}
?>