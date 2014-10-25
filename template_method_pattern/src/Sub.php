<?php namespace App;

/*
* Abstract class sub which will be the parent class for
* TurkeySub and VeggieSub classes
*/

abstract class Sub {

	/*
	*	Instead of this method being repeated twice it is now a 
	*	reusable method in this parent class
	*/
	public function make()
	{
		//using fluent syntax
		return $this
			->layBread()
			->addLettuce()
			->addPrimaryToppings()
			->addSauces();
	}

	public function layBread()
	{
		var_dump('laying down the bread');
		return $this;
	}

	public function addLettuce()
	{
		var_dump('add some lettuce');
		return $this;
	}

	public function addSauces()
	{
		var_dump('add the sauces');
		return $this;
	}

	//protected abstract means that any child class must
	//declare an addPrimaryToppings() method
	protected abstract function addPrimaryToppings();

}