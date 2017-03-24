<?php

// Je définis ma classe Moteur
class Moteur {
	/** @var int */
	public $kw; // ~= hp
	/** @var int */
	public $nbCylinder;
	/** @var int */
	public $displacement; // Cylindrée
	/** @var string */
	public $energy;
	/** @var string */
	public $brand;
	/** @var string */
	public $model;

	public function __construct($brand='', $model='', $energy='', $kw=0, $nbCylinder=0, $displacement=0) {
		$this->kw = $kw;
		$this->nbCylinder = $nbCylinder;
		$this->displacement = $displacement;
		$this->energy = $energy;
		$this->brand = $brand;
		$this->model = $model;
	}

	public function __destruct() {
		echo 'Moteur détruit<br>';
	}

	public function getHp() {
		return round($this->kw * 1.341);
	}
}