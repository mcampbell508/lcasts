<?php namespace App;

class TurkeySub {

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

	public function addTurkey()
	{
		var_dump('add some turkey');
		return $this;

	}

	public function addSauces()
	{
		var_dump('add the sauces');
		return $this;
	}
}