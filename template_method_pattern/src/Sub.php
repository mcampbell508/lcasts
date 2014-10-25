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
			->addTurkey()
			->addSauces();
	}


}