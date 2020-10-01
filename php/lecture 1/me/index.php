<?php
	class Fruits {
		public $name;

		public function set_name($var1)
		{

			$this->name=$var1;
		}
		public function getname()
		{
			return $this->name;
		}

	}

	$ob1= new Fruits();
	$ob1->set_name("apple");
	echo $ob1->getname();

?>