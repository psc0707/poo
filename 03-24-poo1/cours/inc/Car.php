<?php

// Je définis ma classe Voiture
class Car {
	/** @var Moteur */
	private $moteur;
	/** @var string */
	public $vin;
	/** @var string */
	public $licencePlate;
	/** @var string */
	private $color;
	/** @var string */
	private $brand;
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

	public function paintInBlue() {
		$this->setColor('blue');
	}

	public function paintInPink() {
		$this->setColor('pink');
	}

	// Getter
	public function getBrand() {
		return $this->brand;
	}

	// Setter
	public function setBrand($brand) {
		$this->brand = $brand;
	}

	// Setter
	private function setColor($color) {
		$this->color = $color;
	}

	// Setter avec vérification du type de la donnée
	public function setMoteur($moteur) {
		if (is_a($moteur, 'Moteur')) {
			$this->moteur = $moteur;
		}
	}
}