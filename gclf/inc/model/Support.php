<?php

namespace Inc\Model;

class Support {
	private $id;
	private $nom;

	public function __construct($id, $nom) {
		$this->id = $id;
		$this->nom = $nom;
	}

	public function getId() {
		return $this->id;
	}

	public function getNom() {
		return $this->nom;
	}
}