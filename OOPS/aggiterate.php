<?php

class Collection implements IteratorAggregate{
	protected $items;
	public function __construct(array $items)
	{
		$this->items = $items;
	}
	
	function getIterator()
	{
		return new ArrayIterator($this->items);
	}
}

class User{
		public $FirstName;
		public $LastName;
		public $email;		
}

$user1 = new User;
$user2 = new User;

$user1->email = 'abc@gmail.com';
$user1->FirstName = "ABC";
$user1->LastName = "XYZ";

$user2->email = 'def@gmail.com';
$user2->FirstName = "DEF";
$user2->LastName = "XYZ";

$users = new Collection([$user1,$user2]);

foreach($users as $user)
{
	echo "$user->email";
	echo "$user->FirstName";
	echo "$user->LastName<br>";
}

?>