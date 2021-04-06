<?php
class myInfo{
	public function __destruct(){
		echo "Hey! i am Distruct <br>";
	}
	public function sayHello(){
		echo "Hello World <br>";
	}
	public function sayWelcome(){
		echo "Welcome to Dhaka <br>";
	}
	public function __construct($name, $age){
		echo "Hey! i am construct : $name and $age<br> ";
	}
}


$obj = new myInfo("sahfins", 20);
// $obj->sayHello();
// $obj->sayWelcome();