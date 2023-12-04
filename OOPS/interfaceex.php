<?php
interface car
{
	function setModel($name);
	function getModel();
	const abc = 'sd';	
}
interface petrol
{
	function setPetrol($avg);	
	function getPetrol();	
}
class minicar implements car, petrol
{
	public $model;
	public $average;
	function setModel($name)
	{
		$this->model = $name;
	}
	function getModel()
	{
		return $this->model;
	}
	function setPetrol($avg)
	{
		$this->average = $avg;
	}
	function getPetrol()
	{
		return $this->average;
	}
	
}
$test = new minicar();
$test->setModel('Tata Nano');
$test->setPetrol('15');
echo car::abc;
echo $test->getModel();
echo $test->getPetrol();
?>