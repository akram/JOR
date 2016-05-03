<?php


class user{
	var $name;
	var $first_name;
	var $email;
	var $telephone;
	var $id;
	
	function user($name,$firstname,$email,$tel,$id){
		$this->name=$name;
		$this->first_name=$firstname;
		$this->email=$email;
		$this->telephone=$tel;
		$this->id=$id;
		}
	
}


?>