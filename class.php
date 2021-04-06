<?php
class A{

	private $Name;
	protected $age;
	
	public function setName($name){
		$this->Name = $name;
		return $this;
	}

	public function setAge($age){
		$this->age = $age;
		return $this;
	}

	public function showValue(){
		echo "Hello i am ".$this->Name." and i am ".$this->age." years old";
	}
}



$obj = new A();
$obj->setName("Kepayet Ullah")->setAge(30)->showValue();
// $obj;
// echo $obj->country;
// $obj->showFunction();


