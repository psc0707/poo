<?php

// Je définis ma classe Voiture
class Car {
	/** @var Moteur */
	public $moteur;
	/** @var string */
	public $vin;
	/** @var string */
	public $licencePlate;
	/** @var string */
	public $color;
	/** @var string */
	public $brand;
	/** @var string */
	public $model;
	/** @var int */
	public $nbDoors;

	// Je crée mon constructeur
	public function __construct($moteur=null, $vin='', $licencePlate='', $color='', $brand='', $model='', $nbPortes=0) {

		$this->moteur = $moteur;
		$this->vin = $vin;
		$this->licencePlate = $licencePlate;
		$this->color = $color;
		$this->brand = $brand;
		$this->model = $model;
		// Je modifie la propriété nbDoors de l'objet courant
		$this->nbDoors = $nbPortes;
	}

	// On déstructeur existe aussi, il est automatiquement appelé à la suppression de l'objet
	public function __destruct() {
		echo 'Car détruit<br>';
	}

	// Je définis une méthode "paint" à ma classe
	// Elle modifie la propriété color
	public function paint($newColor) {
		if (strlen($newColor) >= 3) {
			$this->color = $newColor;
		}
	}
}